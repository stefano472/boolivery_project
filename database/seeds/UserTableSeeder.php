<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users =[
            [
                'name'=>'Carlo Rossi',
                'email'=>'carlo.rossi@gmail.com',
                'password'=>'carlorossi2345'
            ],
            [
                'name'=>'Mario Verdi',
                'email'=>'mario.verdi@gmail.com',
                'password'=>'marioverdi2345'
            ],
            [
                'name'=>'Giacomo Poretti',
                'email'=>'giakpor@gmail.com',
                'password'=>'giacomino2345'
            ],
            [
                'name'=>'Giovanni Storti',
                'email'=>'giovannisto@gmail.com',
                'password'=>'giovannistorti2345'
            ],
            [
                'name'=>'Salvo Ficarra',
                'email'=>'salvofic@gmail.com',
                'password'=>'salvoficarra2345'
            ],
            [
                'name'=>'Francesco Zalone',
                'email'=>'checcozal@gmail.com',
                'password'=>'checco2345'
            ],
            [
                'name'=>'Giulio Donati',
                'email'=>'giuliodon@gmail.com',
                'password'=>'giuliodon2345'
            ],
            [
                'name'=>'Lorenzo Caldirola',
                'email'=>'lorenzocal@gmail.com',
                'password'=>'lorenzocal2345'
            ],
            [
                'name'=>'Alessio DeLuca',
                'email'=>'alessiodelu@gmail.com',
                'password'=>'alessiodelu2345'
            ],
            [
                'name'=>'Achille Lauretti',
                'email'=>'achillelauro@gmail.com',
                'password'=>'achillelauro2345'
            ],
            [
                'name'=>'Gianmarco Tocco',
                'email'=>'stallion@gmail.com',
                'password'=>'giammo2345'
            ],
            [
                'name'=>'Alberto Paloschi',
                'email'=>'alberto@gmail.com',
                'password'=>'alberto2345'
            ],
            [
                'name'=>'Matteo Riso',
                'email'=>'notteriso@gmail.com',
                'password'=>'notteriso2345'
            ],
        ];

        foreach ($users as $user) {
            $new_user_object = new User();
            $new_user_object->name = $user['name'];
            $new_user_object->email = $user['email'];
            $new_user_object->password = Hash::make($user['password']);
        
            $new_user_object->save();
        }
    }
}
