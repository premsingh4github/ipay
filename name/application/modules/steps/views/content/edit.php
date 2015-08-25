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

if (isset($steps))
{
	$steps = (array) $steps;
}
$id = isset($steps['ID']) ? $steps['ID'] : '';

?>
<div class="admin-box">
	<h3>STEPS</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<?php // Change the values in this array to populate your dropdown as required
				$options[] ="--select--";
                                foreach ($deparments as $value) {
                                    $options[$value->ID] = $value->name;
                                }
				echo form_dropdown('steps_department', $options, set_value('steps_department', isset($steps['department']) ? $steps['department'] : ''), 'Tab'. lang('bf_form_label_required'));
			?>

			<div class="control-group <?php echo form_error('step_title') ? 'error' : ''; ?>">
				<?php echo form_label('Step Title'. lang('bf_form_label_required'), 'steps_step_title', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='steps_step_title' type='text' name='steps_step_title' maxlength="255" value="<?php echo set_value('steps_step_title', isset($steps['step_title']) ? $steps['step_title'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('step_title'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('order') ? 'error' : ''; ?>">
				<?php echo form_label('Order', 'steps_order', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='steps_order' type='text' name='steps_order'  value="<?php echo set_value('steps_order', isset($steps['order']) ? $steps['order'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('order'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('information') ? 'error' : ''; ?>">
				<?php echo form_label('Information', 'steps_information', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'steps_information', 'id' => 'pages_content', 'rows' => '5', 'cols' => '80', 'value' => set_value('steps_information', isset($steps['information']) ? $steps['information'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('information'); ?></span>
				</div>
			</div>

			   <?php // Change the values in this array to populate your dropdown as required
                                $options[] = "--select--";
				$options = array(
					"1" => "Active",
					"0" => "Inactive",
				);

				echo form_dropdown('steps_status', $options, set_value('steps_status', isset($steps['status']) ? $steps['status'] : ''), 'Status');
			?>


			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('steps_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/steps', lang('steps_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('STEPS.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('steps_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('steps_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>