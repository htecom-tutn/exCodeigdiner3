<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Migration_Add_news
 * @property CI_DB_forge $dbforge The DB Forge
 */
class Migration_Add_Navigations extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
        'id' => array('type' => 'INT','constraint' => 11,'unsigned' => TRUE, 'auto_increment' => TRUE, 'null' => FALSE),
        'name' => array('type' => 'VARCHAR','constraint' => '128','null' => FALSE),
        'slug' => array( 'type' => 'VARCHAR', 'constraint' => '128','null' => FALSE),
        'parentId' => array('type' => 'TEXT', 'null' => FALSE),
        'url' => array('type' => 'TEXT', 'null' => FALSE),
        'status' => array('type' => 'smallINT', 'null' => FALSE),

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('slug', FALSE);
        $this->dbforge->create_table('navigations');
    }

    public function down()
    {
        $this->dbforge->drop_table('navigations');
    }

}
