<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' =>[
                'type' => 'int',
                'constraint' => '5',
                'auto_increment' => true,
                'unsigned' => true,
                ],
                'username' => [
                    'type' => 'varchar',
                    'constraint' => '255',

                ],
                'password' => [
                    'type' => 'varchar',
                    'constraint' => '255'
                ],
                'email' => [
                    'type' => 'varchar',
                    'constraint' => '255'
                ],
                'level' => [
                    'type' => 'varchar',
                    'constraint' => '255'
                ],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->drop('user');
    }
}
