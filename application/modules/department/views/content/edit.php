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

if (isset($department))
{
	$department = (array) $department;
//        displayArr($department);
}
$id = isset($department['ID']) ? $department['ID'] : '';

?>
<div class="admin-box">
	<h3>Department</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('name') ? 'error' : ''; ?>">
				<?php echo form_label('Name'. lang('bf_form_label_required'), 'department_name', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='department_name' type='text' name='department_name' maxlength="255" value="<?php echo set_value('department_name', isset($department['name']) ? $department['name'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('name'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('image') ? 'error' : ''; ?>">
				<?php echo form_label('Image'. lang('bf_form_label_required'), 'department_image', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_image' type='text' name='department_image' maxlength="255" value="<?php echo set_value('department_image', isset($department['image']) ? $department['image'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('image'); ?></span>
                                        <a class="btn btn-primary" id="image_btn_chooser" data-target="banner_image" href="#">Add Image</a>
                                        <div class="box_popup" id="banner_image_box" style="display:none">
                                            <h2>Media List <a class="closeme" href="#">x</a></h2>
                                            <header style="display:none;"><img src="<?php echo img_path(); ?>ajax-loader.gif" /></header>
                                            <article>
                                                
                                            </article>
                                           
                                            <!--<h2><input type="button" id="done_file" class="btn btn-primary"  value="Done" ></h2>-->
                                        </div>
				</div>
                            <div class='controls' id="file_box">
                                            
                            </div>
			</div>
                    <div class="control-group <?php echo form_error('button_icon') ? 'error' : ''; ?>">
                        <?php echo form_label('Department Logo', 'banner_button_icon', array('class' => 'control-label')); ?>
                        <div class='controls'>
                            <input id='banner_button_icon' type='text' name='logo' maxlength="255" value="<?php echo set_value('logo', isset($department['logo']) ? $department['logo'] : ''); ?>" />
                            <span class='help-inline'><?php echo form_error('button_icon'); ?></span>
                            <a class="btn btn-primary" id="image_btn_chooser_icon" data-target="banner_button_icon" href="#">Add Iogo</a>
                            <div class="box_popup" id="banner_button_icon_box" style="display:none">
                                <h2>Media List <a class="closeme" href="#">x</a></h2>
                                <header style="display:none;"><img src="<?php echo img_path(); ?>ajax-loader.gif" /></header>
                                <article>

                                </article>

                            </div>
                        </div>
                    </div>
                   
                   

<!--			<div class="control-group <?php echo form_error('slug') ? 'error' : ''; ?>">
				<?php echo form_label('Slug', 'department_slug', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='department_slug' type='text' name='department_slug' maxlength="255" value="<?php echo set_value('department_slug', isset($department['slug']) ? $department['slug'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('slug'); ?></span>
				</div>
			</div>-->

<!--			<div class="control-group <?php echo form_error('status') ? 'error' : ''; ?>">
				<?php echo form_label('Status', 'department_status', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='department_status' type='text' name='department_status' maxlength=""1","0"" value="<?php echo set_value('department_status', isset($department['status']) ? $department['status'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('status'); ?></span>
				</div>
			</div>-->
                    <?php // Change the values in this array to populate your dropdown as required
				$options = array(
					"1" => "active",
					"0" => "inactive",
				);

				echo form_dropdown('department_status', $options, set_value('department_status', isset($department['status']) ? $department['status'] : ''), 'Status');
			?>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('department_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/department', lang('department_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Department.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('department_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('department_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
        
</div>
<div class="overlay" style="display:none;" id="overlay" ></div>
<input type="hidden" id="target_box" value="" />