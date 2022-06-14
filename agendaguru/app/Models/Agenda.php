<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $fillable = ['guru_id','kelas_id','mapel_id','matpel','tanggal','mulai','selesai','jenispembelajaran','link','dokumentasi','absen','keterangan'];
    // protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
