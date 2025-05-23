<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if( !User::count() ){
            $this->create_user();
        }
    }

    protected function create_user()
    {
        User::create([
            'name'              => 'Administrador',
            'email'             => 'alexdavidhurtado@gmail.com',
            'phone'             => '3007208245',
            'status'             => true,
            'password'          => Hash::make('Admin911$01'),
        ]);

        User::create([
            'name'              => 'Paola Ocampo',
            'phone'             => '3857208245',
            'email'             => 'paola@email.com',
            'password'          => Hash::make('Angie123456'),
            'status'             => true,
        ]);

        User::create([
            'name'              => 'Luz Dary Giraldo',
            'phone'             => '31207208245',
            'email'             => 'luz@email.com',
            'password'          => Hash::make('Andres123456'),
            'status'             => true,
        ]);

        User::create([
            'name'              => 'Carlos Suarez',
            'phone'             => '3007278245',
            'email'             => 'carlos@email.com',
            'password'          => Hash::make('Carlos123456'),
            'status'             => true,
        ]);

        User::create([
            'name'              => 'Luis Gomez',
            'phone'             => '3007208975',
            'email'             => 'luis@email.com',
            'password'          => Hash::make('LuisGomez123456'),
            'status'             => false,
        ]);
    }
}
