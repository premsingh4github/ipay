 <?php

//  include("geoiploc.php"); // Must include this

  // ip must be of the form "192.168.1.100"
  // you may load this from a database
//  $ip = $_SERVER["REMOTE_ADDR"];
//  echo "Your IP Address is: " . $ip . "<br />";

//  echo "Your Country is: ";
  // returns country code by default
//  echo getCountryFromIP($ip);
//  echo "<br />\n";

  // optionally, you can specify the return type
  // type can be "code" (default), "abbr", "name"
//
//  echo "Your Country Code is: ";
//  echo getCountryFromIP($ip, "code");
//  echo "<br />\n";
//
//  // print country abbreviation - case insensitive
//  echo "Your Country Abbreviation is: ";
//  echo getCountryFromIP($ip, "AbBr");
//  echo "<br />\n";
//
//  // full name of country - spaces are trimmed
//  echo "Your Country Name is: ";
//  echo getCountryFromIP($ip, " NamE ");
//  echo "<br />\n";
////  displayArr($GLOBALS['geoipcountry']);
//  foreach($GLOBALS['geoipcountry'] as $test){ }
   // Change the values in this array to populate your dropdown as required
//                                $GLOBALS['geoipcountry'][''] = ' --Select--';
//                                echo form_dropdown('department_status', $GLOBALS['geoipcountry'], set_value('department_status', (getCountryFromIP($ip, 'code') != NULL) ? getCountryFromIP($ip, "code") : ''));
//                                foreach ($GLOBALS['geoipcountry'] as $key => $value) {
//    echo $key;
//}
?>
<div>
	<h1 class="page-header">TAB</h1>
</div>

<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>
				
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				
		<th>Name</th>
		<th>Status</th>
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
							<?php e(($value > 0) ? lang('tab_true') : lang('tab_false')); ?>
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