<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'username',
        'email',
        'no_telp',
        'alamat',
        'password'
    ];

    public function getUsers()
    {
        return $this->findAll();
    }
}
