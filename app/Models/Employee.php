<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends BaseModel
{
    use SoftDeletes;
    
    protected $table = 'employees';

    protected $fillable = ['first_name', 'last_name', 'email', 'age', 'salary_type_id', 'rate', 'payment_frequency_id', 'staff_loan_amount'];

    public function salaryType():BelongsTo
    {
        return $this->belongsTo(SalaryType::class);
    }

    public function paymentFrequency():BelongsTo
    {
        return $this->belongsTo(PaymentFrequency::class);
    }

    /**
     * Scope a query to fetch employees of given type.
     */
    public function scopeOfSalaryType(Builder $query, string $type): void
    {
        $query->where('type', $type);
    }
}
