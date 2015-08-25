<?php
$num_columns	= 7;
$can_delete	= $this->auth->has_permission('Department.Content.Delete');
$can_edit		= $this->auth->has_permission('Department.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	<h3>Department</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Name</th>
					<th>Image</th>
					<th>Logo</th>					
					<th>Status</th>
					<th><?php echo lang("department_column_created"); ?></th>
					
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('department_delete_confirm'))); ?>')" />
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
					<td><?php echo anchor(SITE_AREA . '/content/department/edit/' . $record->ID, '<span class="icon-pencil"></span>' .  $record->name); ?></td>
				<?php else : ?>
					<td><?php e($record->name); ?></td>
				<?php endif; ?>
					<!--<td><?php e($record->image) ?></td>-->
                                        <td><a data-lightbox="images" href="<?php echo $record ->image  ?>" >
                                                <img src="<?php echo $record -> image  ?>" width="60" height="58" />
                                            </a></td>
                                        <td><a data-lightbox="images" href="<?php echo $record ->logo  ?>" >
                                                <img src="<?php echo $record -> logo  ?>" width="36" height="48" />
                                            </a></td>
					<!--<td><?php e($record->status) ?></td>-->
                                <?php if ($can_edit) : ?>
					<td><?php $status = ($record->status == 1)? 'Active' : 'Inactive' ;  echo anchor(SITE_AREA . '/content/department/status/' . $record->ID, '' .  $status); ?></td>
				<?php else : ?>
					<td><?php e($record->status); ?></td>
				<?php endif; ?>
                                        <td><?php echo date('Y/m/d',  strtotime($record->added)); ?></td>
					
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
                        <tfoot>
                             
                        </tfoot>
		</table>
               
	<?php echo form_close(); ?>
        <?php echo $this->pagination->create_links(); ?>
        
</div>