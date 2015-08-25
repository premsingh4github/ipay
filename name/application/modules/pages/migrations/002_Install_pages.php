<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_pages extends Migration
{
	/**
	 * The name of the database table
	 *
	 * @var String
	 */
	private $table_name = 'pages';

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
            
		'description' => array(
			'type' => 'VARCHAR',
			'constraint' => 1000,
			'null' => FALSE,
		),
		'body' => array(
			'type' => 'MEDIUMBLOB',
			'null' => FALSE,
		),
		'slug' => array(
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => FALSE,
		),
		'status' => array(
			'type' => 'ENUM',
			'constraint' => '"active","inactive"',
			'null' => FALSE,
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