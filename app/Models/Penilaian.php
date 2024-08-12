<?php
namespace App\Models;

use CodeIgniter\Model;

class Penilaian extends Model
{
    protected $table = 'penilaians';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_alternatif','id_kriteria','pulau','tgl_masuk','nilai','created_at','updated_at'];
    public function getPenilaian(){
        $this->select('c.id as "id_kriteria",a.id as "id_alternatif",penilaians.id,nilai,pulau,tgl_masuk,c.code,c.bobot,c.nama as "kriteria",a.nama as "alternatif",c.normalisasi');
        $this->join('kriterias as c','id_kriteria=c.id');
        $this->join('alternatives as a','id_alternatif =a.id');
        return $this->findAll();
     }

    public function getKriteria(){
        $this->select('id_kriteria,max(nilai) as "max_nilai",min(nilai) as "min_nilai"');
        $this->join('kriterias as c','id_kriteria=c.id');
        $this->groupBy('id_kriteria');
        return $this->findAll();
    }

    public function minmaxPenilaian($id_kriteria){
        $this->select('max(nilai) as "max_nilai",min(nilai) as "min_nilai"');
        $this->join('kriterias as c','id_kriteria=c.id');
        $this->where('id_kriteria',$id_kriteria);
        return $this->findAll();
    }

    public function getNilaiByAlternatif(){
        $this->query("SELECT nilai,id_alternatif,id_kriteria FROM penilaians");
        return $this->get();
    }



}

?>