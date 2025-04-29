<?php

namespace App\Models;

class PaymentFrequency extends BaseModel
{
    protected $table = 'payment_frequencies';

    protected $fillable = ['frequency'];
}
