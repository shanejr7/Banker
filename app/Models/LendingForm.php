<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class LendingForm extends Model
{
     use HasApiTokens, HasFactory, Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [

            'full_name',
            'email',
            'phone',
            'state',
            'gender',
            'date_of_birth',
            'marital_status',
            'address',
            'purpose_of_loan',
            'country',
            'loan_amount',
            'interest_rate',
            'term',
            'status',
      
 
    ];


     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [

        'admin_id',
        'user_id',
    ];



     /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];
}
