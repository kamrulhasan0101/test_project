<?php

namespace App\Imports;

use App\Incentive;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class IncentiveImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Incentive([
            'employee_id'     => $row[0],
            'amount'    => $row[1],
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
