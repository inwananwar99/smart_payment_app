<?php
namespace App\Models;

use CodeIgniter\Model;

class Utility extends Model
{
    protected $table = 'nilai_utility';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_alternatif','id_kriteria','nilai','created_at','updated_at'];

    public function getUtility(){
        $this->select('alt.nama as nama_alternatif,crt.nama as nama_kriteria,nilai');
        $this->join('alternatives as alt','id_alternatif=alt.id',);
        $this->join('kriterias as crt','id_kriteria=crt.id',);
        return $this->findAll();
    }

    public function getAlternativesUtility(){
        $this->select('alt.nama as nama_alternatif');
        $this->join('alternatives as alt','id_alternatif=alt.id');
        $this->join('kriterias as crt','id_kriteria=crt.id');
        return $this->findAll();
    }
}

?>