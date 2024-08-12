<?php
namespace App\Models;

use CodeIgniter\Model;

class Alternatif extends Model
{
    protected $table = 'alternatives';
    protected $primaryKey = 'id';
    protected $allowedFields = ['code','nama','created_at','updated_at'];

}

?>