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

if (isset($social_link))
{
	$social_link = (array) $social_link;
}
$id = isset($social_link['id']) ? $social_link['id'] : '';

?>
<div class="admin-box">
	<h3>Social Link</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('name') ? 'error' : ''; ?>">
				<?php echo form_label('Name'. lang('bf_form_label_required'), 'social_link_name', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='social_link_name' type='text' name='social_link_name' maxlength="255" value="<?php echo set_value('social_link_name', isset($social_link['name']) ? $social_link['name'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('name'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('icon') ? 'error' : ''; ?>">
				<?php echo form_label('Icon'. lang('bf_form_label_required'), 'social_link_icon', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='social_link_icon' type='text' name='social_link_icon' maxlength="255" value="<?php echo set_value('social_link_icon', isset($social_link['icon']) ? $social_link['icon'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('icon'); ?></span>
                                        <a class="btn btn-primary" id="image_btn_chooser" data-target="social_link_icon" href="#">Add Image</a>
                                        <div class="box_popup" id="social_link_icon_box" style="display:none">
                                            <h2>Media List <a class="closeme" href="#">x</a></h2>
                                            <header style="display:none;"><img src="<?php echo img_path(); ?>ajax-loader.gif" /></header>
                                            <article>
                                                
                                            </article>
                                           
                                            <!--<h2><input type="button" id="done_file" class="btn btn-primary"  value="Done" ></h2>-->
                                        </div>
                                        <div class='controls' id="file_box"></div>
				</div>
                            
			</div>

			<div class="control-group <?php echo form_error('url') ? 'error' : ''; ?>">
				<?php echo form_label('URL'. lang('bf_form_label_required'), 'social_link_url', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='social_link_url' type='text' name='social_link_url' maxlength="255" value="<?php echo set_value('social_link_url', isset($social_link['url']) ? $social_link['url'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('url'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('alt') ? 'error' : ''; ?>">
				<?php echo form_label('Alt', 'social_link_alt', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='social_link_alt' type='text' name='social_link_alt' maxlength="255" value="<?php echo set_value('social_link_alt', isset($social_link['alt']) ? $social_link['alt'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('alt'); ?></span>
				</div>
			</div>


			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('social_link_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/social_link', lang('social_link_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>
<div class="overlay" style="display:none;" id="overlay" ></div>
<input type="hidden" id="target_box" value="" />