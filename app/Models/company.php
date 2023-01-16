<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $guarded = [];


    public static function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:companies',
            'logo' => 'required|mimes:jpeg,jpg,png|dimensions:min_width=100,min_height=100|max:3000',
            'website' => 'required',
        ];
    }

    public function employee()
    {
        return $this->hasMany(employee::class);
    }
}
