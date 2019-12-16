<?php

namespace App\Http\Controllers;

use App\Exports\UsersExpert;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Maatwebsite\Excel\Facades\Excel;
use App\Pacientes;

class Controller extends BaseController
{
    function __construct()
    {
        $this->middleware([
            'auth'
            
        ]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function exportar(){

        return Excel::download(new UsersExpert, 'registros_pacientes.xlsx');
    }
}
