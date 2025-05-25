<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $fillable = [
        'name',
        'email',
        'status',
    ];

    //Relationships
    public function serviceOrder()
    {
        return $this->belongsTo( Service::class );
    }


}
