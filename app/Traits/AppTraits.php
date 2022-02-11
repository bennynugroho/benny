<?php 
    namespace App\Traits;

use App\Models\Formulir;
use App\Models\JalurMasuk;
use App\Models\Kontak;
use App\Models\Prodi;

trait AppTraits
        {
            public function primary()
            {
                $data = [
                    'kontak'   => Kontak::all()->first(),
                    'prodi'    => Prodi::all(),
                    'jalur'    => JalurMasuk::all(),
                    'formulir' => Formulir::all()->first(),
                ];

                return $data;
            }
        }
?>