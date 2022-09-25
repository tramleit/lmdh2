<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lmdh extends Model
{
    use HasFactory;

    public static function getLmdh()
    {
        return DB::table('data_barang')->get()->last();
    }
}
