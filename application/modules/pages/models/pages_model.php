<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends BF_Model {

	protected $table_name	= "pages";
	protected $key			= "ID";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";

	protected $log_user 	= FALSE;

	protected $set_created	= false;
	protected $set_modified = true;
	protected $modified_field = "updated";

	/*
		Customize the operations of the model without recreating the insert, update,
		etc methods by adding the method names to act as callbacks here.
	 */
	protected $before_insert 	= array();
	protected $after_insert 	= array();
	protected $before_update 	= array();
	protected $after_update 	= array();
	protected $before_find 		= array();
	protected $after_find 		= array();
	protected $before_delete 	= array();
	protected $after_delete 	= array();

	/*
		For performance reasons, you may require your model to NOT return the
		id of the last inserted row as it is a bit of a slow method. This is
		primarily helpful when running big loops over data.
	 */
	protected $return_insert_id 	= TRUE;

	// The default type of element data is returned as.
	protected $return_type 			= "object";

	// Items that are always removed from data arrays prior to
	// any inserts or updates.
	protected $protected_attributes = array();

	/*
		You may need to move certain rules (like required) into the
		$insert_validation_rules array and out of the standard validation array.
		That way it is only required during inserts, not updates which may only
		be updating a portion of the data.
	 */
	protected $validation_rules 		= array(
		array(
			"field"		=> "pages_name",
			"label"		=> "Name",
			"rules"		=> "required|unique[bf_pages.name,bf_pages.ID]|max_length[255]"
		),
            array(
			"field"		=> "pages_description",
			"label"		=> "Description",
			"rules"		=> "unique[bf_pages.description,bf_pages.ID]|max_length[10000]"
		),
		array(
			"field"		=> "pages_body",
			"label"		=> "Body",
			"rules"		=> ""
		),
		array(
			"field"		=> "pages_slug",
			"label"		=> "Slug",
			"rules"		=> "unique[bf_pages.slug,bf_pages.ID]|max_length[255]"
		),
		array(
			"field"		=> "pages_status",
			"label"		=> "Status",
			"rules"		=> ""
		),
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;

	//--------------------------------------------------------------------

}
