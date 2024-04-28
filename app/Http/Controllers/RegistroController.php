<?php

namespace App\Http\Controllers;

use App\Console\Commands\RegistroValidator;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('registro', ['departments' => $departments]);
    }

    public function store(Request $request, RegistroValidator $validator)
    {
        $habeas_data = $request->has('habeas_data') && $request->input('habeas_data') === 'on' ? 1 : 0;
        $validator->validate($request->all());

        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'cedula' => $request->cedula,
            'department_id' => $request->department_id,
            'city_id' => $request->city_id,
            'cellphone' => $request->cellphone,
            'email' => $request->email,
            'habeas_data' => $habeas_data,
        ]);

        return redirect()->route('welcome');
    }

    public function getCitiesByDepartment(Request $request, $departmentId)
    {
        $department = Department::findOrFail($departmentId);
        $cities = $department->cities;

        return response()->json($cities);
    }
}
