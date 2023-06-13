<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primarykey = 'id';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'username_adm',
        'email_adm',
        'password'
    ];
}
