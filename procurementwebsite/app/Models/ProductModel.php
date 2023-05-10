<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'producttb'; // Set the table name
    public function countRows()
    {
        $query = $this->db->query('SELECT COUNT(*) as count FROM producttb');
        $row = $query->getRow();
    
        return $row->count;
    }
    
}
