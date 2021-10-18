<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =[
        "customer_group_id", "name", "company_name",
        "email", "phone_number", "tax_no","stnt_number", "address", "city",
        "state", "postal_code", "country", "deposit", "expense", "is_active"
    ];
}
