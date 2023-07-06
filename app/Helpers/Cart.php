<?php

namespace App\Helpers;

class Cart
{
    public static function jumlahTanggungan($nilai)
    {
        if ($nilai < 11000000) {
            return "sedikit";
        } else if ($nilai >= 11000000 and $nilai <= 20000000) {
            return "sedang";
        } else if ($nilai > 20000000) {
            return "tinggi";
        }
    }
    public static function sisaHutang($nilai)
    {
        if ($nilai < 11000000) {
            return "sedikit";
        } else if ($nilai >= 11000000 and $nilai <= 20000000) {
            return "sedang";
        } else if ($nilai > 20000000) {
            return "tinggi";
        }
    }
    public static function angsuranPokok($nilai)
    {
        if ($nilai < 3000000) {
            return "sedikit";
        } else if ($nilai >= 3000000 and $nilai <= 9000000) {
            return "sedang";
        } else if ($nilai > 9000000) {
            return "tinggi";
        }
    }
    public static function jaminan($nilai)
    {
        if ($nilai < 30000000) {
            return "sedikit";
        } else if ($nilai >= 30000000 and $nilai <= 50000000) {
            return "sedang";
        } else if ($nilai > 50000000) {
            return "tinggi";
        }
    }
    public static function plafondKredit($nilai)
    {
        if ($nilai < 30000000) {
            return "sedikit";
        } else if ($nilai >= 30000000 and $nilai <= 50000000) {
            return "sedang";
        } else if ($nilai > 50000000) {
            return "tinggi";
        }
    }
    public static function hasil($jaminan, $jumlahtanggunan, $angsuran, $sisahutang)
    {
        if ($jaminan == "sedang" or $jaminan == "tinggi") {
            return "Lancar";
        } else {
            if ($jumlahtanggunan  == "sedang" or $jumlahtanggunan == "sedikit") {
                return "Lancar";
            } else {
                if ($angsuran  == "sedikit" or $angsuran == "tinggi") {
                    return "Lancar";
                } else {
                    if ($sisahutang  == "sedikit" or $sisahutang == "sedang") {
                        return "Diragukan";
                    } else {
                        return "Macet";
                    }
                }
            }
        }
    }
    public static function tampilanHasil($nilai)
    {
        if ($nilai == "Macet") {
            return 'bg-danger';
        } else if ($nilai == "Diragukan") {
            return 'bg-warning';
        } else if ($nilai == "Lancar") {
            return 'bg-success';
        }
    }
}
