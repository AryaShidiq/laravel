<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $fillable = ['namaguru','namakelas','kelas_id','mapel','matpel','tanggal','mulai','selesai','jenispembelajaran','link','dokumentasi','absen','keterangan'];
    // protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
