<?php

namespace App\Models;

use CodeIgniter\Model;

class Orders_model extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'telepon', 'provinsi', 'kota', 'kecamatan', 'alamat', 'pembayaran'];
}