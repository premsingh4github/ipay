  <script>
$(function() {	
$('.datepicker').datepicker({
	 format: "yyyy/mm/dd"
})
});

</script>  
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

if (isset($banner))
{
	$banner = (array) $banner;
}
$id = isset($banner['ID']) ? $banner['ID'] : '';

?>
<div class="admin-box">
	<h3>Banner</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('title') ? 'error' : ''; ?>">
				<?php echo form_label('Title'. lang('bf_form_label_required'), 'banner_title', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_title' type='text' name='banner_title' maxlength="255" value="<?php echo set_value('banner_title', isset($banner['title']) ? $banner['title'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('title'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('subtitle') ? 'error' : ''; ?>">
				<?php echo form_label('Subtitle', 'banner_subtitle', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_subtitle' type='text' name='banner_subtitle' maxlength="255" value="<?php echo set_value('banner_subtitle', isset($banner['subtitle']) ? $banner['subtitle'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('subtitle'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('button_text') ? 'error' : ''; ?>">
				<?php echo form_label('Button Text'. lang('bf_form_label_required'), 'banner_button_text', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_button_text' type='text' name='banner_button_text' maxlength="255" value="<?php echo set_value('banner_button_text', isset($banner['button_text']) ? $banner['button_text'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('button_text'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('button_icon') ? 'error' : ''; ?>">
				<?php echo form_label('Button Icon', 'banner_button_icon', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_button_icon' type='text' name='banner_button_icon' maxlength="255" value="<?php echo set_value('banner_button_icon', isset($banner['button_icon']) ? $banner['button_icon'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('button_icon'); ?></span>
                                        <a class="btn btn-primary" id="image_btn_chooser_icon" data-target="banner_button_icon" href="#">Add Icon</a>
                                        <div class="box_popup" id="banner_button_icon_box" style="display:none">
                                            <h2>Media List <a class="closeme" href="#">x</a></h2>
                                            <header style="display:none;"><img src="<?php echo img_path(); ?>ajax-loader.gif" /></header>
                                            <article>
                                                
                                            </article>
                                           
                                            <!--<h2><input type="button" id="done_file" class="btn btn-primary"  value="Done" ></h2>-->
                                        </div>
				</div>
			</div>

			<div class="control-group <?php echo form_error('image') ? 'error' : ''; ?>">
				<?php echo form_label('Image'. lang('bf_form_label_required'), 'banner_image', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_image' type='text' name='banner_image' maxlength="255" value="<?php echo set_value('banner_image', isset($banner['image']) ? $banner['image'] : ''); ?>" />
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

			<div class="control-group <?php echo form_error('url') ? 'error' : ''; ?>">
				<?php echo form_label('Url'. lang('bf_form_label_required'), 'banner_url', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_url' type='text' name='banner_url' maxlength="255" value="<?php echo set_value('banner_url', isset($banner['url']) ? $banner['url'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('url'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('alt') ? 'error' : ''; ?>">
				<?php echo form_label('Alternative text'. lang('bf_form_label_required'), 'banner_alt', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_alt' type='text' name='banner_alt' maxlength="255" value="<?php echo set_value('banner_alt', isset($banner['alt']) ? $banner['alt'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('alt'); ?></span>
				</div>
			</div>

<!--			<div class="control-group <?php echo form_error('position') ? 'error' : ''; ?>">
				<?php echo form_label('Position', 'banner_position', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_position' type='text' name='banner_position' maxlength="255" value="<?php echo set_value('banner_position', isset($banner['position']) ? $banner['position'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('position'); ?></span>
				</div>
			</div>-->

			<div class="control-group <?php echo form_error('from') ? 'error' : ''; ?>">
				<?php echo form_label('Start date'. lang('bf_form_label_required'), 'banner_from', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_from' class="datepicker"  type='text' name='banner_from' maxlength="255" value="<?php echo set_value('banner_from', isset($banner['from']) ? $banner['from'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('from'); ?>(mm/dd/yyyy)</span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('end_date') ? 'error' : ''; ?>">
				<?php echo form_label('End Date', 'banner_end_date', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_end_date' class="datepicker" type='text' name='banner_end_date' maxlength="255" value="<?php echo set_value('banner_end_date', isset($banner['end_date']) ? $banner['end_date'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('end_date'); ?>(mm/dd/yyyy)</span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('banner_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/banner', lang('banner_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Banner.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('banner_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('banner_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>
<div class="overlay" style="display:none;" id="overlay" ></div>
<input type="hidden" id="target_box" value="" />