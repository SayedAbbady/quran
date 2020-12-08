<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = [
        "b_firstname",
        "b_lastname",
        "b_email",
        "b_country",
        "b_phone",
        "b_plan",
        "b_gender",
        "b_comment"
    ];
}
