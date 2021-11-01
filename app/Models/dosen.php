<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class dosen extends Model
{
    use HasFactory;

    public function allDosen(){
        return DB::table('dosens')->get();
    }

    public function oneDosen($id){
        return DB::table('dosens')->where('id', $id)->first();
    }

    public function addData($data) {
        DB::table('dosens')->insert($data);
    }

    public function editDosen($data, $id){
        DB::table('dosens')->where('id', $id)->update($data);
    }

    public function deleteDosen($id){
        DB::table('dosens')->where('id', $id)->delete();
    }
}
