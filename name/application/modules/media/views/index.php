<div>
	<h1 class="page-header">Media</h1>
</div>

<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>
				
	<table class="table table-striped table-bordered">
		<thead>
                    <tr>	
                        <th>Title</th>
                        <th>File</th>
                        <th>Created</th>
                    </tr>
		</thead>
		<tbody>
		
		<?php foreach ($records as $record) : ?>
			<?php $record = (array)$record; ?>
			<tr>
			<?php foreach($record as $field => $value) : ?>
				
				<?php if ($field != 'ID') : 
                                    
                                    ?>
					<td>
						<?php if ($field == 'deleted'): ?>
							<?php e(($value > 0) ? lang('media_true') : lang('media_false')); ?>
						<?php else: ?>
							<?php e($value); ?>
						<?php endif ?>
					</td>
				<?php          
                                        
                                    endif; ?>
				
			<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>