<div>
	<h1 class="page-header">Banner</h1>
</div>

<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>
				
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				
		<th>Title</th>
		<th>Subtitle</th>
		<th>Button Text</th>
		<th>Button Icon</th>
		<th>Image</th>
		<th>Url</th>
		<th>Alternative text</th>
		<th>Position</th>
		<th>Start date</th>
		<th>End Date</th>
		<th>Created</th>
		<th>Modified</th>
			</tr>
		</thead>
		<tbody>
		
		<?php foreach ($records as $record) : ?>
			<?php $record = (array)$record;?>
			<tr>
			<?php foreach($record as $field => $value) : ?>
				
				<?php if ($field != 'ID') : ?>
					<td>
						<?php if ($field == 'deleted'): ?>
							<?php e(($value > 0) ? lang('banner_true') : lang('banner_false')); ?>
						<?php else: ?>
							<?php e($value); ?>
						<?php endif ?>
					</td>
				<?php endif; ?>
				
			<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>