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
            'status'            => true,
            'documentId'        => 104721605,
            'password'          => Hash::make('Admin911$01'),
        ])->syncRoles('Admin');

        User::create([
            'name'              => 'Paola Ocampo',
            'phone'             => '3857208245',
            'email'             => 'paola@email.com',
            'documentId'        => 104721606,
            'password'          => Hash::make('Angie123456'),
            'status'             => true,
        ])->syncRoles('Auxiliar');

        User::create([
            'name'              => 'Luz Dary Giraldo',
            'phone'             => '31207208245',
            'email'             => 'luz@email.com',
            'documentId'        => 104721607,
            'password'          => Hash::make('Andres123456'),
            'status'             => true,
        ])->syncRoles('Auditor');

        User::create([
            'name'              => 'Carlos Suarez',
            'phone'             => '3007278245',
            'email'             => 'carlos@email.com',
            'documentId'        => 104721608,
            'password'          => Hash::make('Carlos123456'),
            'status'             => true,
        ])->syncRoles('Auditor');

        User::create([
            'name'              => 'Luis Gomez',
            'phone'             => '3007208975',
            'email'             => 'luis@email.com',
            'documentId'        => 104721695,
            'password'          => Hash::make('LuisGomez123456'),
            'status'             => false,
        ])->syncRoles('Auditor');
    }
}
