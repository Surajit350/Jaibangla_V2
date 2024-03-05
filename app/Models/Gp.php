<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gp extends Model
{
    use HasFactory,HasUlids;
    protected $table = 'm_gp'; // Custom table name
    protected $primaryKey = 'gram_panchyat_code';
    public $incrementing = false;
    public $timestamps = false;
}
