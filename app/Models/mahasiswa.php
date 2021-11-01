<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Model
{
    use HasFactory;

    public function allMahasiswa(){
        return DB::table('mahasiswas')->get();
    }

    public function oneMahasiswa($id){
        return DB::table('mahasiswas')->where('id', $id)->first();
    }

    public function addMahasiswa($data){
        DB::table('mahasiswas')->insert($data);
    }

    public function editMahasiswa($data, $id){
        DB::table('mahasiswas')->where('id', $id)->update($data);
    }

    public function deleteMahasiswa($id){
        DB::table('mahasiswas')->where('id', $id)->delete();
    }
}
