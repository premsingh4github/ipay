<?php

$num_columns	= 7;
$can_delete	= $this->auth->has_permission('Menu.Content.Delete');
$can_edit		= $this->auth->has_permission('Menu.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	<h3>Menu</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					<th>Name</th>
                                        <th>Parent</th>
                                        <th>Department</th>
                                        <th>Position</th>
					<th>URL</th>
					<th>Status</th>
					<th><?php echo lang("menu_column_created"); ?></th>
					
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('menu_delete_confirm'))); ?>')" />
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
                                        $parent =($P = $this->menu_model->find($record->parent_ID))? $P->name :'Root';
//                                        $parent = $this->menu_model->find($record->parent_ID);
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id; ?>" /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/content/menu/edit/' . $record->id, '<span class="icon-pencil"></span>' .  $record->name); ?></td>
				<?php else : ?>
					<td><?php e($record->parent_ID); ?></td>
					
				<?php endif; ?>
					<td><?php e($parent) ?></td>
                                        <td><?php  $dep = $this->department_model->find_by('ID',$record->department_ID); echo ($dep->name); //foreach($departments as $department){displayArr($department);}   ?></td>
                                        
					<td><?php e($record->position) ?></td>
                                        <td><?php e($record->url) ?></td>
					<!--<td><?php e($record->status) ?></td>-->
                                                <?php if ($can_edit) : ?>
                                                    <td><?php
                                                        $status = ($record->status == 1) ? 'Active' : 'Inactive';
                                                        echo anchor(SITE_AREA . '/content/menu/status/' . $record->id, '' . $status);
                                                        ?></td>
                                                <?php else : ?>
                                                    <td><?php e($record->status); ?></td>
                                                <?php endif; ?>
                                        <td><?php echo date('m/d/Y',strtotime($record->added)) ?></td>
					
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
	<?php echo form_close();
           echo $this->pagination->create_links();
        ?>
        
</div>