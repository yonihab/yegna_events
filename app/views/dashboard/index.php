<?php 
// echo getcwd() . '/n';
$title = 'Events | Dashboard';
$events = "active";
require_once 'app/views/partials/dashboard-header.php';

?>
<!-- add event modal -->
<div class="container my-3">
	<div class="events-list ye_card mb-3">
		<?php
		if (Session::exists('event_success')) {
            echo "<div class=\"alert alert-success animate my-2\"> ";
            echo Session::flash('event_success');      
            echo "</div>";
        }
		?>
		<!-- add event -->
		<div class="row">
			<div class="col-md-10 align-self-center pl-4">
				<h4 class="lead">Events</h4>	
			</div>
			<div class="col-md-2">
				<a class="ye_btn " href="dashboard_addevent"><i class="fa fa-plus"></i> Add Event</a>
			</div>
		</div>
		
	</div>

	<?php

	if(isset($data['eventData']) && !empty($data['eventData'])){
		?>
		<div class="ye_card">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Event Name</th>
		      <th scope="col">Start Date</th>
		      <th scope="col">Status</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>


		<?
		//print_r($data);
		foreach ($data['eventData'] as $event) {
			?>
			<tr class="animated fadeInUp">
		      <th scope="row"><?php echo $event[0]; ?></th>
		      <td><?php echo $event[2]; ?></td>
		      <td><?php echo $event[4]; ?></td>
		      <td><?php echo $event[13]; ?></td>
		      <td><a href="dashboard_event/edit/<?php echo $event[0];?>" class="btn"><span class="fa fa-external-link"></span> open</a></td>
		    </tr>

		    <?
		}
		?>
		 	</tbody>
		 </table>
		</div>

		<?php

	}else{
		echo '<i class="m-2">No Events in the database!</i>';
	}

	?>

	
</div>

<?php

require_once 'app/views/partials/dashboard-footer.php';

?>