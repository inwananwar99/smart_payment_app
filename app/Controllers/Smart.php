<?php

namespace App\Controllers;
use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\Kuartal;
use App\Models\Penilaian;
use App\Models\Utility;

class Smart extends BaseController
{

    public function getKuartal(){
        $kuartalModel = new Kuartal();
        $alternatifModel = new Alternatif();
        $data = [
            'title' => 'Data Kuartal',
            'kuartal' => $kuartalModel->getKuartal(),
            'alternatif' => $alternatifModel->findAll()
        ];
        return view('/smart/kuartal',$data);
    }

    public function addKuartal(){
        $kuartalModel = new Kuartal();
        $kuartalModel->save([
            'id_alternatives' => $this->request->getPost('id_alternatives'),
            'pulau' => $this->request->getPost('island'),
            'tgl_masuk' => $this->request->getPost('date_insert'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/kuartal')->with('message', 'Success! Kuartal has been added.');
    }

    public function updateKuartal($id){
        $kuartalModel = new Kuartal();
        $kuartalModel->update($id,[
            'id_alternatives' => $this->request->getPost('id_alternatives'),
            'pulau' => $this->request->getPost('island'),
            'tgl_masuk' => $this->request->getPost('date_insert'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/kuartal')->with('message', 'Success! Kuartal has been updated.');
    }

    public function deleteKuartal($id){
        $kuartalModel = new Kuartal();
        $kuartalModel->delete($id);
        return redirect()->to('/kuartal')->with('message', 'Success! Kuartal has been deleted.');
    }

    public function getPenilaian(){
        $alternatifModel = new Alternatif();
        $penilaianModel = new Penilaian();
        $kriteriaModel = new Kriteria();
        $data = [
            'title' => 'Data Penilaian',
            'penilaian' => $penilaianModel->getPenilaian(),
            'kriteria' => $kriteriaModel->findAll(),
            'alternatif' => $alternatifModel->findAll(),
            'utilityAlternatif' => $this->getAlternativesUtility()
        ];
         $this->getValueUtility();die;
        return view('/smart/penilaian',$data);
    }

    public function countUtility(){
        $penilaianModel = new Penilaian();
        $kriteria = $penilaianModel->getKriteria();
        foreach ($kriteria as $k) {
            $threshold = $penilaianModel->minmaxPenilaian($k['id_kriteria']);
            foreach ($threshold as $thr) {
                $this->saveNilaiUtility($thr['min_nilai'],$thr['max_nilai']);
            }
        }
    }

    public function saveNilaiUtility($min,$max){
        $penilaianModel = new Penilaian();
        $utilityModel = new Utility();
        $nilai = $penilaianModel->getNilaiByAlternatif()->getResult();
        foreach($nilai as $val){
            $utility = ($val->nilai - intval($min)/intval($max)-intval($min))*1;
            $value =[
                'id_kriteria' => $val->id_kriteria,
                'id_alternatif' => $val->id_alternatif,
                'nilai' => $utility,
                'created_at' => date('Y-m-d H:i:s')
            ];   
            $utilityModel->save($value);
        }
    }

    public function getAlternativesUtility(){
        $utilityModel = new Utility();
        $data = $utilityModel->getAlternativesUtility();
        return $data;
    }

    public function getValueUtility(){
        $utilityModel = new Utility();
        $data = $utilityModel->getUtility();
        $array_two = [];
        foreach ($data as $key) {
            echo $key['nama_alternatif']." - ".$key['nama_kriteria']." - ".$key['nilai']."<br>";

        }
        
    }


    public function addPenilaian(){
        $penilaianModel = new Penilaian();
        $penilaianModel->save([
            'id_kriteria' => $this->request->getPost('id_criteria'),
            'id_alternatif' => $this->request->getPost('id_alternatives'),
            'pulau' => $this->request->getPost('island'),
            'tgl_masuk' => $this->request->getPost('date_insert'),
            'nilai' => $this->request->getPost('value'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return redirect()->to('/penilaian')->with('message', 'Success! Penilaian has been added.');
    }

    public function updatePenilaian($id){
        $penilaianModel = new Penilaian();
        $penilaianModel->update($id,[
            'id_kriteria' => $this->request->getPost('id_criteria'),
            'id_alternatif' => $this->request->getPost('id_alternatives'),
            'pulau' => $this->request->getPost('island'),
            'tgl_masuk' => $this->request->getPost('date_insert'),
            'nilai' => $this->request->getPost('value'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/penilaian')->with('message', 'Success! Penilaian has been updated.');
    }

    public function deletePenilaian($id){
        $penilaianModel = new Penilaian();
        $penilaianModel->delete($id);
        return redirect()->to('/penilaian')->with('message', 'Success! Penilaian has been deleted.');
    }
}