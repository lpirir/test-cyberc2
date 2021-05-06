<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table2 extends Model
{
    use HasFactory;

    protected $_table = 'table2';

    public function table1() {
        return $this->belongsTo('App\Models\Table1', 'id', 'table1_id');
    }
}
