<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddQuotes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'quotes' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('quotes');
    }

    public function down()
    {
        $this->forge->dropTable('quotes');
    }
}
