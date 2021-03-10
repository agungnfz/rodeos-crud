<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
	public function up()
	{
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id'                 => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'               => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'alamat'             => [
                'type'           => 'VARCHAR',
                'constraint'     => 1000,
            ],
            'telepon'            => [
                'type'           => 'VARCHAR',
                'constraint'     => 16,
            ],
            'varian'            => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'kota'            => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'kecamatan'            => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'pembayaran'            => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'provinsi'            => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
        ]);

        $this->forge->addKey('id', TRUE);

        // Membuat tabel order
        $this->forge->createTable('orders', TRUE);

    }

	public function down()
	{
        $this->forge->dropTable('orders');
	}
}
