<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    public $table = 'prodi';
    protected $guarded = ['id'];


    public function biaya()
    {
        return $this->hasOne(Biaya::class);
    }

    public function getGetVisiAttribute(){
        $visi = explode("•", $this->visi);
        
        return $visi;
    }

    public function getGetMisiAttribute(){
        $misi = explode('•', $this->misi);

        return $misi;
    }
}
