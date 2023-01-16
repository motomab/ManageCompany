<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function rules()
    {
        $phone_regex = '/^07[0-9]{8}$/';
        return [
            'Fname' => 'required',
            'Lname' => 'required',
            'company_id' => 'required',
            'email' => 'required|email',
            'phone' => ['required',"regex:$phone_regex"],
        ];
    }

    public function company()
    {
        return $this->belongsTo(company::class);
    }
}
