<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeCheckModel extends Model
{
    use HasFactory;

    public function add2time($d1, $d2)
    {
        $d1 = strtotime($d1);
        $d2 = strtotime($d2);

        $m = date('i', $d2);
        $s = date('s', $d2);
        $h = date('H', $d2);

        $cv = strtotime("+$m minutes", $d1);
        $cv = strtotime("+$s seconds", $cv);
        $cv = strtotime("+$h hours", $cv);

        return $cv;
    }
}