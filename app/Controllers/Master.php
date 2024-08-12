<?php

namespace App\Controllers;
use App\Models\Kriteria;
use App\Models\Alternatif;

class Master extends BaseController
{
    public function getKriteria(){
        $kriteriaModel = new Kriteria();
        $data = [
            'title' => 'Master Kriteria',
            'kriteria' => $kriteriaModel->findAll()
        ];
        return view('/master/kriteria',$data);
    }

    public function addKriteria(){
        $kriteriaModel = new Kriteria();
        $kriteriaModel->save([
            'code' => $this->request->getPost('code'),
            'nama' => $this->request->getPost('name'),
            'bobot' => $this->request->getPost('weight'),
            'normalisasi' => $this->request->getPost('weight')/100,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/kriteria')->with('message', 'Success! Kriteria has been added.');
    }

    public function updateKriteria($id){
        $kriteriaModel = new Kriteria();
        $kriteriaModel->update($id,[
            'code' => $this->request->getPost('code'),
            'nama' => $this->request->getPost('name'),
            'bobot' => $this->request->getPost('weight'),
            'normalisasi' => $this->request->getPost('weight')/100,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        

        return redirect()->to('/kriteria')->with('message', 'Success! Kriteria has been updated.');
    }

    public function deleteKriteria($id){
        $kriteriaModel = new Kriteria();
        $kriteriaModel->delete($id);
        return redirect()->to('/kriteria')->with('message', 'Success! Kriteria has been deleted.');
    }
    
    public function getAlternatif(){
        $alternatifModel = new Alternatif();
        $data = [
            'title' => 'Master Alternatif',
            'alternatif' => $alternatifModel->findAll()
        ];
        return view('/master/alternatif',$data);
    }

    public function addAlternatif(){
        $alternatifModel = new Alternatif();
        $alternatifModel->save([
            'code' => $this->request->getPost('code'),
            'nama' => $this->request->getPost('name'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/alternatif')->with('message', 'Success! Kriteria has been added.');
    }

    public function updateAlternatif($id){
        $alternatifModel = new Alternatif();
        $alternatifModel->update($id,[
            'code' => $this->request->getPost('code'),
            'nama' => $this->request->getPost('name'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/alternatif')->with('message', 'Success! Alternatif has been updated.');
    }

    public function deleteAlternatif($id){
        $alternatifModel = new Alternatif();
        $alternatifModel->delete($id);
        return redirect()->to('/alternatif')->with('message', 'Success! Alternatif has been deleted.');
    }

}

?>