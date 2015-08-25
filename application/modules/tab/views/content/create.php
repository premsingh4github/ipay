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

if (isset($tab))
{
	$tab = (array) $tab;
}
$id = isset($tab['ID']) ? $tab['ID'] : '';

?>
<div class="admin-box">
	<h3>TAB</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>
                         <?php if(count($departments)>1){ ?>
			<div class="control-group <?php echo form_error('name') ? 'error' : ''; ?>">
				<?php echo form_label('Department'. lang('bf_form_label_required'), 'tab_name', array('class' => 'control-label') ); ?>
				<div class='controls'>
                                    <?php
                                    
                                    foreach ($departments as  $department) {
                                     ?> 
                                    <input type="checkbox" name="department[]" value="<?php echo $department->ID; ?>"><?php echo $department->name; ?>
                                    <?php
                                    }                                   
                                    ?>					
				</div>
			</div>
                     <?php } ?>
			<div class="control-group <?php echo form_error('name') ? 'error' : ''; ?>">
				<?php echo form_label('Name'. lang('bf_form_label_required'), 'tab_name', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tab_name' type='text' name='tab_name' maxlength="255" value="<?php echo set_value('tab_name', isset($tab['name']) ? $tab['name'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('name'); ?></span>
				</div>
			</div>
                    <div class="control-group <?php echo form_error('image') ? 'error' : ''; ?>">
				<?php echo form_label('Video', 'banner_image', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='banner_image' type='text' name='video' maxlength="255" value="<?php echo set_value('video', isset($tab['video']) ? $tab['video'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('image'); ?></span>
                                        <a class="btn btn-primary" id="image_btn_chooser" data-target="banner_image" href="#">Add Video</a>
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
                        <div class="control-group <?php echo form_error('information') ? 'error' : ''; ?>">
                            <?php echo form_label('Information', 'steps_information', array('class' => 'control-label')); ?>
                            <div class='controls'>
                                <?php echo form_textarea(array('name' => 'information', 'id' => 'pages_content', 'rows' => '5', 'cols' => '80', 'value' => set_value('information', isset($tab['information']) ? $tab['information'] : ''))); ?>
                                <span class='help-inline'><?php echo form_error('information'); ?></span>
                            </div>
                        </div>
                   

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('tab_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/tab', lang('tab_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>
<div class="overlay" style="display:none;" id="overlay" ></div>
<input type="hidden" id="target_box" value="" />