<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RegistroValidator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:registro-validator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }

    public function validate(array $data)
    {
        return validator($data, [
            'name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/u', 'max:255'],
            'last_name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/u', 'max:255'],
            'cedula' => ['required', 'numeric'],
            'department_id' => 'required',
            'city_id' => 'required',
            'cellphone' => ['required', 'numeric', 'regex:/^\d+$/'],
            'email' => ['required', 'email', 'unique:users,email'],
            'habeas_data' => 'required',
        ])->validate();
    }
}
