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

if (isset($partner))
{
	$partner = (array) $partner;
}
$id = isset($partner['id']) ? $partner['id'] : '';

?>
<div class="admin-box">
	<h3>Partner</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('name') ? 'error' : ''; ?>">
				<?php echo form_label('Name'. lang('bf_form_label_required'), 'partner_name', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='partner_name' type='text' name='partner_name' maxlength="255" value="<?php echo set_value('partner_name', isset($partner['name']) ? $partner['name'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('name'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('logo') ? 'error' : ''; ?>">
				<?php echo form_label('Logo'. lang('bf_form_label_required'), 'partner_logo', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='partner_logo' type='text' name='partner_logo' maxlength="255" value="<?php echo set_value('partner_logo', isset($partner['logo']) ? $partner['logo'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('logo'); ?></span>
                                        <a class="btn btn-primary" id="image_btn_chooser" data-target="partner_logo" href="#">Add Iogo</a>
                                        <div class="box_popup" id="partner_logo_box" style="display:none">
                                            <h2>Media List <a class="closeme" href="#">x</a></h2>
                                            <header style="display:none;"><img src="<?php echo img_path(); ?>ajax-loader.gif" /></header>
                                            <article>
                                                
                                            </article>
                                           
                                            <!--<h2><input type="button" id="done_file" class="btn btn-primary"  value="Done" ></h2>-->
                                        </div>
				</div>
			</div>

			<div class="control-group <?php echo form_error('alt') ? 'error' : ''; ?>">
				<?php echo form_label('Alt', 'partner_alt', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='partner_alt' type='text' name='partner_alt' maxlength="255" value="<?php echo set_value('partner_alt', isset($partner['alt']) ? $partner['alt'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('alt'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('url') ? 'error' : ''; ?>">
				<?php echo form_label('Url'. lang('bf_form_label_required'), 'partner_url', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='partner_url' type='text' name='partner_url' maxlength="255" value="<?php echo set_value('partner_url', isset($partner['url']) ? $partner['url'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('url'); ?></span>
				</div>
			</div>

			<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					"1" => "Active",
					"0" => "Inactive",
				);

				echo form_dropdown('partner_status', $options, set_value('partner_status', isset($partner['status']) ? $partner['status'] : ''), 'Status');
			?>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('partner_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/partner', lang('partner_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Partner.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('partner_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('partner_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>
<div class="overlay" style="display:none;" id="overlay" ></div>
<input type="hidden" id="target_box" value="" />