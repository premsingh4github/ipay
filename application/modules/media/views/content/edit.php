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

if (isset($media))
{
	$media = (array) $media;
}
$id = isset($media['ID']) ? $media['ID'] : '';

?>
<div class="admin-box">
	<h3>media</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('title') ? 'error' : ''; ?>">
				<?php echo form_label('Title'. lang('bf_form_label_required'), 'media_title', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='media_title' type='text' name='media_title' maxlength="255" value="<?php echo set_value('media_title', isset($media['title']) ? $media['title'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('title'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('file') ? 'error' : ''; ?>">
				<?php echo form_label('File'. lang('bf_form_label_required'), 'media_file', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='media_file' type='text' name='media_file' maxlength="255" value="<?php echo set_value('media_file', isset($media['file']) ? $media['file'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('file'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('media_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/media', lang('media_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Media.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('media_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('media_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>