<?php

namespace App\Helpers;

class Additional
{

    public static function jaminan($val)
    {
        if ($val == 29999999) {
            return 'BPKB Motor';
        } else if ($val == 49999999) {
            return 'BPKB Mobil';
        } else if ($val == 99999999) {
            return 'Sertifikat Rumah';
        }
    }
}
