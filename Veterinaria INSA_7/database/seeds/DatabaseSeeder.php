<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
        //en la linea de comandos mande la informacion
        $this->command->info('Tabla Usuarios inicializada con datos!');
        // $this->call(UsersTableSeeder::class);
    }
    public function seedUsers()
    {
        //Eliminar el contenido de la tabla de usuarios
        //'especificar la tabla de usuarios'
        DB::table('users')->delete();
//instancia del modelo usuario
        $user = new User;
        //asignar cada uno de los atributos
        $user->name = "admin";
        $user->email = "20183l101040@utcv.edu.mx";
        //el metodo Hash encroipta la contraseña
        $user->password = Hash::make("12345678");
        $user->save();
        
        $user2 = new User;
        $user2->name = "user";
        $user2->email = "krad@gmail.com";
        $user2->password = Hash::make("12345678");
        $user2->save();
       // php artisan make:auth (comando: para inicializar el soporte de usuarios de laravel)
       //php artisan db:seed(iniciarlizar metodo Seed)
       /*
       migraciones y modelos
       contralodores y vistas
       rutas
       base de datos */
       //php artisan:model Product -m
    }
}
