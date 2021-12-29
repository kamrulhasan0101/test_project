<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incentive extends Model{
    protected $connection = 'mysql';
    protected $table = 'incentives';
    public $timestamps = false;

    protected $fillable = [
        'employee_id', 'amount', 'status','created_at','updated_at'
    ];

}
