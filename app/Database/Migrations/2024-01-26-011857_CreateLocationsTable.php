<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'room_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'location_code' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'location_name' => [
                'type' => 'VARCHAR',
                'constraint' => 500,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('room_id', 'rooms', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('locations');
    }

    public function down()
    {
        $this->forge->dropTable('locations');
    }
}
