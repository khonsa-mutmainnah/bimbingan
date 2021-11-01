<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->Mahasiswa = new Mahasiswa();
    }

    public function tabelmahasiswa()
    {
        $data = ['Mahasiswa' => $this->Mahasiswa->allMahasiswa()];
        return view('tabelmahasiswa', $data);
    }

    public function formMahasiswa()
    {
        return view('formMahasiswa');
    }

    public function editMahasiswa($id){
        $data = ['mahasiswa' => $this->Mahasiswa->oneMahasiswa($id),
                'title' => "Edit Mahasiswa"];
        return view('editMahasiswa', $data);
    }

    public function ubahMahasiswa($id){
        $datetime = date_create()->format('Y-m-d H:i:s');
        
        $data=[
            'nama' => Request()->nama,
            'nim' => Request()->nim,
            'tgl_lahir' => Request()->tgl_lahir,
            'tahun_masuk' => Request()->tahun_masuk,
            'alamat' => Request()->alamat,
            'updated_at' => $datetime,
        ];

        $this->Mahasiswa->editMahasiswa($data, $id);
        return redirect("mahasiswa");
    }

    public function showMahasiswa($id)
    {
        $data = ['Mahasiswa' => $this->Mahasiswa->oneMahasiswa($id)];
        return view('showMahasiswa', $data);
    }

    public function createMahasiswa(){
        $data = ['title' => "Tambah Mahasiswa"];
        return view('formMahasiswa', $data);
    }

    public function addMahasiswa(){
        $datetime = date_create()->format('Y-m-d H:i:s');
        
        $data=[
            'nama' => Request()->nama,
            'nim' => Request()->nim,
            'tgl_lahir' => Request()->tgl_lahir,
            'tahun_masuk' => Request()->tahun_masuk,
            'alamat' => Request()->alamat,
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ];

        $this->Mahasiswa->addMahasiswa($data);
        return redirect("mahasiswa");
    }

    public function deleteMahasiswa($id){
        $this->Mahasiswa->deleteMahasiswa($id);
        return redirect('mahasiswa');
    }
}
