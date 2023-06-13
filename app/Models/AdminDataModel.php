<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminDataModel extends Model
{
    protected $table = 'admin_tambahdata';
    protected $primarykey = 'id_admtdata';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_user',
        'id_jemput',
        'botol',
        'karton',
        'kaleng',
        'jerigen',
        'poin',
        'status'
    ];

    function insertById($id)
    {
        $builder = $this->db->table('tbl_jemput');
        $builder
            ->join('user', 'user.id_user = tbl_jemput.id_user')
            ->join('admin_tambahdata', 'tbl_jemput.id_admtdata = admin_tambahdata.id_admtdata', 'left')
            ->where('id_jemput', $id);
        $query = $builder->get();
        return $query->getResult();
    }
}
