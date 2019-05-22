<?php 
// echo getcwd() . '/n';
$title = 'Add Event | Dashboard';
require_once 'app/views/partials/dashboard-header.php';

?>
<div class="container my-3">
	
	<div class="card">
		<div class="card-header bg-greenish">
			<p class="text-white">Add Event Form</p>
		</div>

		<div class="card-body">
		<?php 
		if(isset($data['errors']) && !empty($data['errors'])){
			echo "<div class=\"alert alert-danger\"> "
                    . "<ul>";
            foreach ($data['errors'] as $error) {
               echo "<li> " . $error . "</li>";
            }
            echo "</ul></div>";
		}

		?>
			

		<form action="dashboard_addevent" method="post">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
                        <label>Event name</label>
                        <input type="text" class="form-control" name="event_name"  value="<?php echo Input::get('event_name')?>">
                        
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="event_description" value="<?php echo Input::get('event_description');?>"></textarea>
                        
                    </div>
                     <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="event_address"  value="<?php echo Input::get('event_address') ?>">
                        
                    </div>

				</div>

				<div class="col-md-6">
					
                    <div class="form-group">
                        <label>Venue</label>
                        <input type="text" class="form-control" name="event_venue"  value="<?php echo Input::get('event_venue') ?>">
                        
                    </div>

					<div class="form-group">
						<div class="row">
							<div class="col">
								<label>Start Date</label>
		                        <input type="date" class="form-control" name="event_start_date"  value="<?php echo Input::get('event_start_date')?>">
							</div>
							<div class="col">
								<label>Start Hour</label>
		                        <input type="text" class="form-control" name="event_start_hour" placeholder="3:00 PM" value="<?php echo Input::get('event_start_hour')?>">
							</div>
						</div>
                        
                        
                    </div>

                    <div class="form-group">
                    	<div class="row">
							<div class="col">
								<label>End Date</label>
		                        <input type="date" class="form-control" name="event_end_date"  value="<?php echo Input::get('event_end_date')?>">
							</div>
							<div class="col">
								<label>End Hour</label>
		                        <input type="text" class="form-control" name="event_end_hour" placeholder="4:00 PM" value="<?php echo Input::get('event_end_hour')?>">
							</div>
						</div>
                        
                        
                    </div>
					

					<div class="form-group">
						<label>Event Type</label>
				      <select class="custom-select" name="event_type">
				        <option selected>Choose...</option>
				        <!--TODO: Find event types and list them all here -->
				        <option value="confre">One</option>
				        <option value="2">Two</option>
				        <option value="3">Three</option>
				      </select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-2">
					<a class="btn btn-block btn-danger" href=""><i class="fa fa-paint-brush"></i> Clear</a>
					
				</div>
				<div class="col-md-2">
					<button class="btn btn-block btn-success" type="submit" name="submit"><i class="fa fa-save"></i> Save</button>
				</div>
			</div>
			
			
		</form>
		</div>
		
	</div>

</div>

<?php

require_once 'app/views/partials/dashboard-footer.php';

?>