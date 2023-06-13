<?php

namespace App\Models;

use CodeIgniter\Model;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class JemputModel extends Model
{
    protected $table = 'tbl_jemput';
    protected $primarykey = 'id_jemput';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_user',
        'id_admtdata',
        'tgl_jemput',
        'sesi',

        'botol',
        'karton',
        'kaleng',
        'jerigen',
        'poin',
        'status'
    ];

    // function getAll()
    // {
    //     $builder = $this->db->table('tbl_jemput');
    //     $builder->join('user', 'user.id_groups = tbl_jemput.id_jemput');
    //     $query = $builder->get();
    //     return $query->getResult();
    // }

    function getById($id)
    {
        $builder = $this->db->table('tbl_jemput');
        $builder
            ->join('user', 'user.id_user = tbl_jemput.id_user')
            // ->join('admin_tambahdata', 'tbl_jemput.id_admtdata = admin_tambahdata.id_admtdata', 'left')
            ->where('tbl_jemput.id_jemput', $id);
        $query = $builder->get();
        return $query->getRowObject();
    }

    function getAll()
    {
        $builder = $this->db->table('tbl_jemput');
        $builder
            ->join('user', 'user.id_user = tbl_jemput.id_user');
        // ->join('admin_tambahdata', 'tbl_jemput.id_admtdata = admin_tambahdata.id_admtdata', 'left');
        $query = $builder->get();
        return $query->getResultArray();
    }

    function getAllByUser()
    {
        $builder = $this->db->table('tbl_jemput');
        $builder
            ->join('user', 'user.id_user = tbl_jemput.id_user')
            ->where('tbl_jemput.id_user', session()->get('LoggedUser')['user']['id_user']);
        // ->join('admin_tambahdata', 'tbl_jemput.id_admtdata = admin_tambahdata.id_admtdata', 'left')
        $query = $builder->get();
        return $query->getResultArray();
    }

    function getAllPoinByUser()
    {
        $builder = $this->db->table('tbl_jemput');
        $builder
            ->join('user', 'user.id_user = tbl_jemput.id_user')
            ->where('tbl_jemput.id_user', session()->get('LoggedUser')['user']['id_user'])
            ->where('tbl_jemput.status', 'Poin ditukar');
        // ->join('admin_tambahdata', 'tbl_jemput.id_admtdata = admin_tambahdata.id_admtdata', 'left')
        $query = $builder->get();
        return $query->getResultArray();
    }
}
