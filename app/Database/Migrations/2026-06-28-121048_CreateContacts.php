<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContacts extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],

            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],

            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'null'       => true,
            ],

            'company' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'null'       => true,
            ],

            'gender' => [
                'type'       => 'ENUM',
                'constraint' => ['Male', 'Female'],
                'null'       => true,
            ],

            'birthday' => [
                'type' => 'DATE',
                'null' => true,
            ],

            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['Active', 'Inactive'],
                'default'    => 'Active',
            ],

            'created_at DATETIME NULL',
            'updated_at DATETIME NULL',
            'deleted_at DATETIME NULL',

        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('phone');
        $this->forge->createTable('contacts');
    }

    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}