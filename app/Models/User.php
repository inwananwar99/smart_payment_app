<?php
namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama','username', 'password','created_at','updated_at'];
}

?>