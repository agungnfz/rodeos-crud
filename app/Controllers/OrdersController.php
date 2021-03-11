<?php namespace App\Controllers;

use App\Models\Orders_model;
use CodeIgniter\Model;

class OrdersController extends BaseController
{
    public function index()
    {
        $orders = new Orders_model();

        $data = $orders->findAll();

//        echo view('news', $data);
        return json_encode($data);
    }

    public function create()
    {
        $Order_model = new Orders_model();
        $data = $Order_model->insert([
            "nama" => $this->request->getPost('nama'),
            "telepon" => $this->request->getPost('telepon'),
            "provinsi" => $this->request->getPost('provinsi'),
            "kota" => $this->request->getPost('kota'),
//            "produk" => $this->request->getPost('produk'),
//            "pembayaran" => $this->request->getPost('pembayaran'),
            "kecamatan" => $this->request->getPost('kecamatan'),
            "alamat" => $this->request->getPost('alamat')
        ]);

        //return json_encode($data);

        $orders = new Orders_model();
        $data = $orders->find($data);
        //return json_encode($data);
        echo view('rodeos', $data);

    }
}