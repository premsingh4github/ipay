<?php

$num_columns	= 4;
$can_delete	= $this->auth->has_permission('Media.Content.Delete');
$can_edit	= $this->auth->has_permission('Media.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	<h3>media</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Title</th>
					<th>File</th>
                                        <th>Link</th>
					<th><?php echo lang("media_column_created"); ?></th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('media_delete_confirm'))); ?>')" />
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->ID; ?>" /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo $record -> title; ?></td>
				<?php else : ?>
					<td><?php e( $record -> title ); ?></td>
				<?php endif; 
                                $path = base_url().'uploads/'.$record -> file;
                                    
//                                    $mime = mime_content_type($path);
                                    $type = splitExtension($path);
                                   
                                   $video_type = array("mp4","3gp");
                                    if (in_array($type[1],$video_type)) {
                                        ?>
                                        <td><a data-lightbox="images" href="<?php echo base_url(); ?>uploads/<?php echo $record->file ?>" >      
                                    <video width="100" height="100"  controls>
                                        
                                        <object data="<?php echo base_url(); ?>uploads/<?php echo $record -> file  ?>">
                                            <embed src="<?php echo base_url(); ?>uploads/<?php echo $record -> file  ?>" >
                                        </object>
                                    </video></a> 
                                        </td>     
                                            
                                            <?php
                                        } else {
                                          ?>
                                        <td><a data-lightbox="images" href="<?php echo base_url(); ?>uploads/<?php echo $record->file ?>" >
                                                            <img src="<?php echo base_url(); ?>uploads/thumbs/<?php echo $record->file ?>" width="100" />
                                                        </a></td> 
                                        
                                        
                                        <?php
                                        }
                                       
                                ?>
                                        
                                        <td><?php echo base_url(); ?>uploads/<?php echo $record -> file  ?></td>
					<td><?php echo date('Y/m/d',strtotime($record -> added)); ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">No records found that match your selection.</td>
				</tr>
				<?php endif; ?>
                                <tr align="center">
                                    <td colspan="6" align="center"><?php echo $this->pagination->create_links(); ?></td>
                                </tr>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>