<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $fillable = ["employee_service_id", "appstatus_id", "customer_id", "payment_type_id", "appointment_id"];

    public function appstatus()
    {
        return $this->belongsTo(AppStatus::class, 'appstatus_id', 'appstatus_id');
    }

    public function employeeService()
    {
        return $this->belongsTo(EmployeeService::class, 'employee_service_id', 'employee_service_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
    public function payment()
    {
        return $this->belongsTo(PaymentType::class, 'payment_type_id', 'payment_type_id');
    }
}
