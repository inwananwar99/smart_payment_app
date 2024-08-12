<?php
namespace App\Models;

use CodeIgniter\Model;

class Kuartal extends Model
{
    protected $table = 'kuartals';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pulau', 'tgl_masuk','normalisasi','id_alternatives','created_at','updated_at'];

   public function getKuartal(){
      $this->select('alt.id as "id_alternatif",kuartals.id,alt.nama,pulau,tgl_masuk');
      $this->join('alternatives as alt','id_alternatives=alt.id',);
      return $this->findAll();
   }
}

?>