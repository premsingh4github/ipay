<?php

$num_columns	= 13;
$can_delete	= $this->auth->has_permission('Banner.Content.Delete');
$can_edit		= $this->auth->has_permission('Banner.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	<h3>Banner</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Title</th>
					<th>Subtitle</th>
					<th>Button Text</th>
					<th>Button Icon</th>
					<th>Image</th>
					<th>Url</th>
					 <th>Status</th>
					<!--<th>Position</th>-->
					<th>Start date</th>
					
					<th>End Date</th>
                                       
                                        <th>Remark</th>
					<!--<th><?php echo lang("banner_column_created"); ?></th>-->
					<!--<th><?php echo lang("banner_column_modified"); ?></th>-->
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('banner_delete_confirm'))); ?>')" />
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
					<td><?php echo anchor(SITE_AREA . '/content/banner/edit/' . $record->ID, '<span class="icon-pencil"></span>' .  $record->title); ?></td>
				<?php else : ?>
					<td><?php e($record->title); ?></td>
				<?php endif; ?>
					<td><?php e($record->subtitle) ?></td>
					<td><?php e($record->button_text) ?></td>
					
                                        <td>
                                            <a data-lightbox="images" href="<?php echo $record->button_icon ?>" >
                                                        <img src="<?php echo $record->button_icon ?>" width="100" />
                                            </a>
                                        </td>
                                        <td>
                                            <a data-lightbox="images" href="<?php echo $record->image  ?>" >
                                                <img src="<?php echo $record->image  ?>" width="100" />
                                            </a>
                                        </td>
					<td><?php e($record->url) ?></td>
					<?php if ($can_edit) : ?>
					<td><?php $status = ($record->status == 1)? 'Active' : 'Inactive' ;  echo anchor(SITE_AREA . '/content/banner/status/' . $record->ID, '' .  $status); ?></td>
                                        <?php else : ?>
					<td><?php e($record->status); ?></td>
                                        <?php endif; ?>
					<!--<td><?php e($record->position) ?></td>-->
                                        <td><?php  echo date('d/M/Y',  strtotime($record->from));?></td>
                                        
                                        <td><?php if($record->end_date != 'XXX') {echo date('d/M/Y',  strtotime($record->end_date));} else { echo $record->end_date; }?></td>
                                        <td><?php
                                            if(( date('m/d/Y',  strtotime($record->from)) <= date('m/d/Y') && date('m/d/Y',  strtotime($record->end_date)) >= date('m/d/Y'))){
                                            echo 'Current';
                                        }
                                        if(date('m/d/Y',  strtotime($record->end_date)) < date('m/d/Y')){
                                            echo 'Old';
                                        }
                                        if(date('m/d/Y',  strtotime($record->from)) > date('m/d/Y')){
                                            echo 'Coming';
                                        }
//                                        echo 'Future'.  now().$record->from;
                                        ?>    
                                        </td>
                                        <!--<td><?php echo date('m/d/Y',  strtotime($record->added)) ; ?></td>-->
					<!--<td><?php e($record->updated) ?></td>-->
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">No records found that match your selection.</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
        <?php echo $this->pagination->create_links(); ?>
</div>