<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Agenda;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'mapel';
    protected $fillable = ['matapelajaran'];

    public function agenda()
    {
        return $this->hasMany(Agenda::class);
    }

    public function guru()
    {
        return $this->hasMany(Guru::class);
    }
    
}