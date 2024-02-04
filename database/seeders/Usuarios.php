<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User; // Asegúrate de importar el modelo User si es necesario

class Usuarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insertar nuevos registros
    /*    DB::table('usuarios')->insert([
            'nombre' => 'Raul',
            'apellidos' => 'Ramos',
            'edad' => 19
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Alex',
            'apellidos' => 'Bustillo',
            'edad' => 22
        ]);

        */

        // Actualizar un registro existente
        $user = User::find(1);
        if ($user) {
        $user->nombre = 'Pepe';
        $user->save();
}

    }
}        