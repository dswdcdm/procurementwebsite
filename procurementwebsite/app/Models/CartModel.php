<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'cart';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['item_id','date_created','quantity','user_id','user_name','item_name','item_image','item_price','item_description'];

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
        return $this->where('item_id', $post_id)->orderBy('created_at', 'asc')->findAll();
    }

    public function getAllProductPrices()
    {
        $builder = $this->db->table($this->table);
        $builder->select('item_price');
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function updateData($id,$user_id, $data)
{
    $this->db->table('cart')->where('item_id', $id)->where('user_id', $user_id)->update($data);

}

public function checkData($id,$user_id)
{
    return $this->db->table('cart')->where('item_id', $id)->where('user_id', $user_id)->countAllResults() > 0;
}


    
}
