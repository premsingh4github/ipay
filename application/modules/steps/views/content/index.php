<?php

$num_columns	= 8;
$can_delete	= $this->auth->has_permission('STEPS.Content.Delete');
$can_edit		= $this->auth->has_permission('STEPS.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	<h3>STEPS</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>					
					
					<th width ='150px' >Step Title</th>
					<th width ='50px'>Tab</th>
                                        <th>Order</th>
					<th>Information</th>
					<th>Status</th>
					<th><?php echo lang("steps_column_created"); ?></th>
					
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('steps_delete_confirm'))); ?>')" />
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
                                        if(!($tab = $this->tab_model->find_by('ID',$record->department))){
                                            @$tab->name = 'Select Tab';
                                        }
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php   $record->ID ?>" /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/content/steps/edit/' . $record->ID, '<span class="icon-pencil"></span>' .$record->step_title); ?></td>
				<?php else : ?>
					<td><?php e($record->step_title); ?></td>
				<?php endif; ?>
					<td><?php e($tab->name) ?></td>
					<td><?php e($record->order) ?></td>
					<td><?php e($record->information) ?></td>
					
                                                <?php if ($can_edit) : ?>
                                                <td><?php
                                                    $status = ($record->status == 1) ? 'Active' : 'Inactive';
                                                    echo anchor(SITE_AREA . '/content/steps/status/' . $record->ID, '' . $status);
                                                    ?></td>
                                                <?php else : ?>
                                                <td><?php e($record->status); ?></td>
                                                <?php endif; ?>
					<td><?php echo date('m/d/Y',strtotime($record->added)); ?></td>
					
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
	<?php 
            echo form_close();
            echo $this->pagination->create_links();
            ?>
</div>