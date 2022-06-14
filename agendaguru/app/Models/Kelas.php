<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Agenda;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['namakelas','guru_id'];

    public function agenda()
    {
        return $this->hasMany(Agenda::class);
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
