<?php
namespace App\Models;

use CodeIgniter\Model;

class Kriteria extends Model
{
    protected $table = 'kriterias';
    protected $primaryKey = 'id';
    protected $allowedFields = ['code','nama', 'bobot','normalisasi','created_at','updated_at'];

}

?>