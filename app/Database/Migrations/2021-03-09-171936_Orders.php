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
                'default'        => 'John Doe',
            ],
            'alamat'             => [
                'type'           => 'VARCHAR',
                'constraint'     => 1000,
                'default'        => 'John Doe',
            ],
            'telepon'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 16,
                'default'       => '0811xxx'
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
