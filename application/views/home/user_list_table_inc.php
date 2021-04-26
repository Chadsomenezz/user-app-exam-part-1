<table class="table table is-fullwidth">
	<thead>
		<tr>
			<th><abbr title="id">ID</abbr></th>
			<th>NAME</th>
			<th><abbr title="AGE">AGE</abbr></th>
			<th><abbr title="GENDER">GENDER</abbr></th>
			<th><abbr title="COUNTRY">COUNTRY</abbr></th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($results as $result): ?>
			<tr>
				<td><?= $result->id;?></td>
				<td><?= $result->name;?></td>
				<td><?= $result->age;?></td>
				<td><?= $result->gender;?></td>
				<td><?= $result->country;?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>

	<tfoot>
		<tr>
			<th><abbr title="id">ID</abbr></th>
			<th>NAME</th>
			<th><abbr title="AGE">AGE</abbr></th>
			<th><abbr title="GENDER">GENDER</abbr></th>
			<th><abbr title="COUNTRY">COUNTRY</abbr></th>
		</tr>
	</tfoot>
</table>


<a href="<?=base_url();?>increase" class="button is-primary">View More</a>
