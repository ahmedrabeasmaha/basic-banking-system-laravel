<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    public function fromCustomer()
    {
        return $this->belongsTo(Customer::class, 'from_customer');
    }
    public function toCustomer()
    {
        return $this->belongsTo(Customer::class, 'to_customer');
    }
}
