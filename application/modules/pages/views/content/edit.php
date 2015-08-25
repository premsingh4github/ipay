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

if (isset($pages))
{
	$pages = (array) $pages;
}
$id = isset($pages['ID']) ? $pages['ID'] : '';

?>
<div class="admin-box">
	<h3>Pages</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('name') ? 'error' : ''; ?>">
				<?php echo form_label('Name'. lang('bf_form_label_required'), 'pages_name', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input  id='pages_name' type='text' name='pages_name' maxlength="255" value="<?php echo set_value('pages_name', isset($pages['name']) ? $pages['name'] : ''); ?>"  />
					<span class='help-inline'><?php echo form_error('name'); ?></span>
				</div>
			</div>
<!--                        <div class="control-group <?php echo form_error('description') ? 'error' : ''; ?>">
				<?php echo form_label('Description', 'pages_body', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'pages_description', 'id' => 'pages_con', 'rows' => '5', 'cols' => '80', 'value' => set_value('pages_description', isset($pages['description']) ? $pages['description'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('body'); ?></span>
				</div>
			</div>-->
			<div class="control-group <?php echo form_error('body') ? 'error' : ''; ?>">
				<?php echo form_label('Body', 'pages_body', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'pages_body', 'id' => 'pages_content', 'rows' => '5', 'cols' => '80', 'value' => set_value('pages_body', isset($pages['body']) ? $pages['body'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('body'); ?></span>
				</div>
			</div>

			<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					"active" => "active",
					"inactive" => "inactive",
				);

				echo form_dropdown('pages_status', $options, set_value('pages_status', isset($pages['status']) ? $pages['status'] : ''), 'Status');
			?>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('pages_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/pages', lang('pages_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Pages.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('pages_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('pages_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>