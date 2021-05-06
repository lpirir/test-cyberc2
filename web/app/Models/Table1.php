<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table1 extends Model
{
    use HasFactory;

    protected $_table = 'table1';

    public function table2() {
        return $this->hasMany('App\Models\Table2', 'table1_id', 'id');
    }

    public function table3() {
        return $this->hasMany('App\Models\Table3', 'table1_id', 'id');
    }
}
