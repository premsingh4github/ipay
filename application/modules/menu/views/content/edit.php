<?php

$validation_errors = validation_errors();

if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading">Please fix the following errors:</h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;

if (isset($menu))
{
	$menu = (array) $menu;
}
$id = isset($menu['id']) ? $menu['id'] : '';


?>
<div class="admin-box">
	<h3>Menu</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal" id="menu_form"'); ?>
		<fieldset>
                        <?php // Change the values in this array to populate your dropdown as required
                                
				$options = array();
                                $options[]="--select--";
                                foreach ($departments as $department) {
                                    $options[$department->ID] = $department->name;
                                }

				echo form_dropdown('menu_department', $options, set_value('department', isset($menu['department_ID']) ? $menu['department_ID'] : ''), 'Department'. lang('bf_form_label_required'));
			?>
                    <div  id="parent" class="control-group ">
                        <label class="control-label" for="menu_parent_ID">
                            Parent
                            <span class="required">*</span>
                        </label>
                        <div class="controls">
                            <select id="menu_parent_ID" name="menu_parent_ID">
                                
                                <option value="0">root</option>
                                <?php 
                                $this->general_model->menu($menu['parent_ID']);
                                ?>
                            </select>
                        </div>
                    </div>
                    <div id="wait" style="display:none" class="control-group ">
				<?php echo form_label('Parent'. lang('bf_form_label_required'), 'menu_name', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<img alt="activity indicator" src="http://localhost/ipay/public/uploads/ajax-loader.gif">
					<span class='help-inline'><?php echo form_error('name'); ?></span>
				</div>
			</div>    
                  
                    
			<div class="control-group <?php echo form_error('name') ? 'error' : ''; ?>">
				<?php echo form_label('Name'. lang('bf_form_label_required'), 'menu_name', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='menu_name' type='text' name='menu_name' maxlength="255" value="<?php echo set_value('menu_name', isset($menu['name']) ? $menu['name'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('name'); ?></span>
				</div>
			</div>
                    <div class="control-group <?php echo form_error('url') ? 'error' : ''; ?>">
				<?php echo form_label('Link'. lang('bf_form_label_required'), 'menu_url', array('class' => 'control-label') ); ?>
                           
				<div class='controls'>
                                    <select id="menu_link" name="menu_link">
                                        <option value="">Select</option>
                                        <?php 
                                            foreach($pages as $value ){
                                                ?>
                                        <option <?php if($value->ID == $menu['url'] && is_numeric($menu['url'])){ echo 'selected' ;} ?> value="<?php echo $value->ID ; ?>"><?php echo $value->name ; ?></option>
                                                <?php 
                                            }
                                        ?>
                                        
                                    </select> OR
					<input id='menu_url' type='text' name='menu_url' maxlength="255" value="<?php echo set_value('menu_url', isset($menu['url']) ? $menu['url'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('url'); ?></span>
				</div>
			</div>
                    <div class="control-group <?php echo form_error('name') ? 'error' : ''; ?>">
				<?php echo form_label('Position', 'position', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='position' type='text' name='position' maxlength="255" value="<?php echo set_value('position', isset($menu['position']) ? $menu['position'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('position'); ?></span>
				</div>
			</div>

			<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					"1" => "active",
					"0" => "inactive",
				);

				echo form_dropdown('menu_status', $options, set_value('menu_status', isset($menu['status']) ? $menu['status'] : ''), 'Status');
			?>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('menu_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/menu', lang('menu_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Menu.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('menu_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('menu_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>