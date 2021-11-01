<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen;

class DosenController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->Dosen = new Dosen();
    }
    
    public function tabelDosen()
    {
        $data = ['Dosen' => $this->Dosen->allDosen()];
        return view('tabelDosen', $data);
    }

    public function showDosen($id)
    {
        $data = ['Dosen' => $this->Dosen->oneDosen($id)];
        return view('showDosen', $data);
    }

    public function createdosen(){
        $data = ['title' => "Tambah Dosen"];
        return view('formDosen', $data);
    }

    public function tambahdosen(){
        $datetime = date_create()->format('Y-m-d H:i:s');

            $data =[
                'nama' => Request()->nama,
                'nidn' => Request()->nidn,
                'alamat' => Request()->alamat,
                'kontak' => Request()->kontak,
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ];

            $this->Dosen->addData($data);
            return redirect("dosen");
    }

    public function editDosen($id){
        $data = ['dosen' => $this->Dosen->oneDosen($id),
                'title' => "Edit Dosen"];
        return view('editDosen', $data);
    }

    public function ubahDosen($id){
        $datetime = date_create()->format('Y-m-d H:i:s');
        
        $data=[
            'nama' => Request()->nama,
            'nidn' => Request()->nidn,
            'kontak' => Request()->kontak,
            'alamat' => Request()->alamat,
            'updated_at' => $datetime,
        ];

        $this->Dosen->editDosen($data, $id);
        return redirect("dosen");
    }

    public function deleteDosen($id){
        $this->Dosen->deleteDosen($id);
        return redirect('dosen');
    }
}
