<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;

class PaymentController extends Controller
{
    //
    private $_api_context;
    public function __construct()
    {
        /**  Se inicializa la configuración y los ajustes de PayPal **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function payWithpaypal(Request $request)
    {
        
        $payer = new Payer();        
        $payer->setPaymentMethod('paypal');
        
        $cart = session()->get('cart');        
        foreach($cart as $arrayItem){
            $items[] = (new Item())
                ->setName($arrayItem['nombre'])
                ->setCurrency('MXN')
                ->setQuantity($arrayItem['cantidad'])
                ->setPrice($arrayItem['precio']);                
        }
        
        $item_list = new ItemList();
        $item_list->setItems($items);
        
        $amount = new Amount();
        $amount->setCurrency('MXN')
            ->setTotal($request->get('total'));
        
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Compra en Kalf Online');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
            ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));
            /**dd($payment->create($this->_api_context));exit;*/

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');
                 return Redirect::to('/inicio');/**aqui iba catalog */
            } else {
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/inicio');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        
        Session::put('paypal_payment_id', $payment->getId());
            if (isset($redirect_url)) {                
                return Redirect::away($redirect_url);
            }
        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/inicio');     
    }

    public function getPaymentStatus()
    {
        $payment_id = Session::get('paypal_payment_id');
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error', 'Payment failed');
            return Redirect::to('/inicio');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') {

            /* Guardar compra en la BD */
            \Session::put('success', 'El pago se realizó con éxito');
            return Redirect::to('/inicio');
            
        }
            \Session::put('error', 'Hubo un error al realizar el pago');
        return Redirect::to('/inicio');
    }




}
