<?php

namespace BrunoCouty\FinancialManager\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialCategory extends Model
{

    protected $fillable = [
        'name',
        'user_id'
    ];

}