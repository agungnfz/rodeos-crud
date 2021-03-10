<?php

namespace App\Models;

use CodeIgniter\Model;

class Order extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'nama', 'alamat', 'telepon', 'varian', 'kota', 'kecamatan', 'pembayaran', 'provinsi'];
}