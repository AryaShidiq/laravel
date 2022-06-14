<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Agenda;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    // protected $guarded = [];
    protected $fillable = ['nik','namaguru','mapel_id','userguru','passguru'];

    public function kelas()
    {
        return $this->hasOne(Kelas::class);
    }
    public function agenda()
    {
        return $this->hasOne(Agenda::class);
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
    

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
