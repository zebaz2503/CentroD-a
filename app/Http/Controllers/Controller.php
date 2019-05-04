<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Usuarios;

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

        return Excel::download(new UsersExport, 'registros_centro_dia.xlsx');
    }
}
