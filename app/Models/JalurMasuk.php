<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class JalurMasuk extends Model
{
    use HasFactory;

    public    $table      = 'jalur_masuk';
    protected $guarded    = ['id'];
    public    $timestamps = false;

    public function getGetTanggalAkhirAttribute(){
        return Carbon::parse($this->tgl_akhir)->locale('id')->isoFormat('D MMMM YYYY');
    }
}
