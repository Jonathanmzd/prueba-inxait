<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return User::with('department', 'city')->get()->map(function ($user) {
            return [
                'ID' => $user->id,
                'Nombre' => $user->name,
                'Apellidos' => $user->last_name,
                'Cedula' => $user->cedula,
                'Departamento' => $user->department->name,
                'Ciudad' => $user->city->name,
                'Celular' => $user->cellphone,
                'Email' => $user->email,
                'Habeas Data' => $user->habeas_data == 0 ? 'No' : 'Sí',
                'Date Creación' => $user->created_at->format('Y/m/d H:i:s'),
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombres',
            'Apellidos',
            'Cédula',
            'Departamento',
            'Ciudad',
            'Teléfono',
            'Email',
            'Habeas Data',
            'Date Creación',
        ];
    }
}
