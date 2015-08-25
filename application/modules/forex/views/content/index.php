<?php

$num_columns	= 8;
$can_delete	= $this->auth->has_permission('Forex.Content.Delete');
$can_edit		= $this->auth->has_permission('Forex.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	<h3>Forex</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>From Country</th>
					<th>From Currency</th>
					<th>To  Country</th>
					<th>To Currency</th>
					<th>Status</th>
					<th><?php echo lang("forex_column_created"); ?></th>
					
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('forex_delete_confirm'))); ?>')" />
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
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id; ?>" /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/content/forex/edit/' . $record->id, '<span class="icon-pencil"></span>' .  $record->from_country); ?></td>
				<?php else : ?>
					<td><?php e($record->from_country); ?></td>
				<?php endif; ?>
					<td><?php e($record->from_currency) ?></td>
					<td><?php e($record->to_country) ?></td>
					<td><?php e($record->to_currency) ?></td>
					<?php if ($can_edit) : ?>
					<td><?php $status = ($record->status == 1)? 'Active' : 'Inactive' ;  echo anchor(SITE_AREA . '/content/forex/status/' . $record->id, '' .  $status); ?></td>
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