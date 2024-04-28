<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ResultadoController extends Controller
{
    public function index()
    {
        $users = User::with('department')->with('city')->paginate(3);
        return view('resultado', compact('users'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'usuarios.xlsx');
    }
}
