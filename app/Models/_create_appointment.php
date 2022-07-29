<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _create_appointment extends Model
{
    use HasFactory;
    protected $fillable = [
		'start', 'Appointment_Name', 'Appointment_Concern'
	];
}
?>
