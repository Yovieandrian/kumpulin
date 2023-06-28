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

    // 02/04
    public function getUsers()
    {
        return $this->findAll();
    }

    // function hapus($id)
    // {
    //     return $this->db->table('user')->delete(['id_user' => $id]);
    // }
}
