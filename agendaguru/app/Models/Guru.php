<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    // protected $guarded = [];
    protected $fillable = ['nik','namaguru','mapel','userguru','passguru'];

//    public function kelas()
//    {
//        return $this->hasOne(Kelas::class);
//    }
//    public function agenda()
//    {
//        return $this->hasMany(Agenda::class);
//    }
//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
}
