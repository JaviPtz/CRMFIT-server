<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

    /* relacion muchos a muchos */
    /* los clientes pueden ser atendidos por varios usuarios */

    public function users()
    {
        $this->BelongsToMany(User::class);
    }
}
