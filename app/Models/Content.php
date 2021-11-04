<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $table = 'contacts';

    public static $rules = array(
        'fullname' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'postcode' => 'required',
        'address' => 'required',
        'option' => 'required|max:120'
    );

    static $genders = [
        1, 2
    ];
}
