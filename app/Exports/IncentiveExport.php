<?php

namespace App\Exports;

use App\Incentive;
use Maatwebsite\Excel\Concerns\FromCollection;

class IncentiveExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Incentive::all();
    }
}
