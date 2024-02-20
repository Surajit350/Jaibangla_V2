<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory, HasUlids;
    protected $guarded = [];
    /**
     * Model Relation of Profile belongs to One User
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
