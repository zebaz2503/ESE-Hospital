<?php

namespace App\Exports;

use App\Pacientes;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\withHeadings;

class UsersExpert implements FromCollection,withHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array{

        return [
            'id',
            'nombre paciente',
            'cedula',
            'edad',
            'eps',
            'acompañante',
            'tel',
            'especialidad',
            'codigo_cie',
            'diagnostico',
            'medico',
            'nom_familia',
            'enfermero',
            'descrip',
            'fecha',
            'Nfecha',
            

        ];
    }

    public function collection()
    {
        return Pacientes::all();
    }
}
