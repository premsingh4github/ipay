<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_tab extends Migration
{
	/**
	 * The name of the database table
	 *
	 * @var String
	 */
	private $table_name = 'tab';

	/**
	 * The table's fields
	 *
	 * @var Array
	 */
	private $fields = array(
		'ID' => array(
			'type' => 'INT',
			'constraint' => 11,
			'auto_increment' => TRUE,
		),
		'name' => array(
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => FALSE,
		),
		'status' => array(
			'type' => 'ENUM',
			'constraint' => '"1","0"',
			'null' => FALSE,
		),
		'added' => array(
			'type' => 'datetime',
			'default' => '0000-00-00 00:00:00',
		),
		'updated' => array(
			'type' => 'datetime',
			'default' => '0000-00-00 00:00:00',
		),
	);

	/**
	 * Install this migration
	 *
	 * @return void
	 */
	public function up()
	{
		$this->dbforge->add_field($this->fields);
		$this->dbforge->add_key('ID', true);
		$this->dbforge->create_table($this->table_name);
	}

	//--------------------------------------------------------------------

	/**
	 * Uninstall this migration
	 *
	 * @return void
	 */
	public function down()
	{
		$this->dbforge->drop_table($this->table_name);
	}

	//--------------------------------------------------------------------

}