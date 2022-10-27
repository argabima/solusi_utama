<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'password', 'foto', 'level', 'created_at', 'updated_at'];
}
