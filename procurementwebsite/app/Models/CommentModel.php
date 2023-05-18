<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'comments';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id', 'post_id', 'text','name'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getCommentsForPost($post_id)
    {
        return $this->where('id', $post_id)->orderBy('created_at', 'asc')->findAll();
    }

    public function getAllProductPrices()
    {
        $builder = $this->db->table($this->table);
        $builder->select('item_price');
        $query = $builder->get();
        return $query->getResultArray();
    }



}
