<?php 
// echo getcwd() . '/n';
$title = 'Event | Dashboard';
require_once 'app/views/partials/dashboard-header.php';


// 

$eventData  = null;
$budgetData  = null; 
$budgetItems  = null;

if (isset($data['eventData']) && !empty($data['eventData'])) {
	$eventData = $data['eventData'];
	//print_r($data['eventData']);
}

if (isset($data['budgetData']) && !empty($data['budgetData'])) {
	$budgetData = $data['budgetData'];

	
}

if (isset($data['budget_items']) && !empty($data['budget_items'])) {
	$budgetItems = $data['budget_items'];


	
}
?>
<!-- Modal Target Amount-->
<div class="modal fade" id="edittarget" tabindex="-1" role="dialog" aria-labelledby="editProfileLable" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Edit target Amount</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="post" id="targetamount">
                	<div class="form-group">
                		<label for="birramount">Target budget amount</label>
					  	<div class="input-group mb-2 mr-sm-2">
						    <div class="input-group-prepend">
						      <div class="input-group-text">Birr</div>
						    </div>
						    <input type="text" class="form-control" name="target_budget">
					    </div>
                	</div>
              		<div class="form-group">
              			<button class="ye_btn float-right" type="submit" name="targetsubmit"><i class="fa fa-save"></i> Save</button>
              		</div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- Modal END -->

<!-- Modal budget item-->
<div class="modal fade" id="addbudgetitem" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add budget item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="post">
                	<div class="form-group">
                		<label for="">Item Name</label>
                		<input type="text" class="form-control" name="item_name">
                	</div>
                	<div class="form-group">
                		<label for="itemnaem">Item Amount/Cost</label>
					  	<div class="input-group mb-2 mr-sm-2">
						    <div class="input-group-prepend">
						      <div class="input-group-text">Birr</div>
						    </div>
						    <input type="number" class="form-control" name="item_amount" >
					    </div>
                	</div>
                	<div class="form-group">
                		<label for="">Item Type</label>
                		<select class="custom-select mr-sm-2" name="item_type">
					        <option selected>Choose...</option>
					        <option value="income">Income</option>
					        <option value="expense">Expense</option>
					    </select>
                	</div>
                	<div class="form-group">
                		<label for="">Item Category</label>
                		<select class="custom-select mr-sm-2" name="item_category">
					        <option selected>Choose...</option>
					        <option value="Food and beverage">Food and beverage</option>
					        <option value="Entertainment">Entertainment </option>
					    </select>
                	</div>
              		<div class="form-group">
              			<button class="ye_btn float-right" name="itemSubmit"><i class="fa fa-save"></i> Save</button>
              		</div>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- Modal END -->



<div class="container bg-light my-3">

	<div class="row">
		<div class="col-md-3">
			

			<h6>Tools</h6>
			<div class="ye_card">
				<ul class="nav ye_nav flex-column">
				  <li class="nav-item ">
				    <a class="nav-link active" href="#"><i class="fa fa-dollar pr-2"></i> Budget</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#"><i class="fa fa-wpforms pr-2"></i> Registration</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#"><i class="fa  fa-calendar-check-o pr-2"></i> To-Do List</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#"><i class="fa fa-hourglass-o pr-2"></i> Appointments</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#"><i class="fa fa-paper-plane-o pr-2"></i> Website</a>
				  </li>
				</ul>
			</div>
			
		</div>

		<div class="col-md-9">
			<div class="row">
				<div class="col-12">
					<h6><?= $eventData['name']?></h6>	
				</div>

				<div class="col-md-12">
					<div class="ye_card p-4">
						<div class="container">
							<div class="row">
								<div class="col-md-4 text-center">
									<h5 class="display-6"><?php echo $budgetData['target_budget']; ?> Birr <a href="#" data-toggle="modal" data-target="#edittarget"><i class="fa fa-edit"></i></a> </h5>
									<p>Targeted Amount</p>
									<!--  modal-->
			
								</div>
								<div class="col-md-4 text-center">
									<h5 class="display-6">15,000 Birr</h5>
									<p>Estimated Expense</p>
								</div>
								<div class="col-md-4 text-center">
									<h5 class="display-6">5,000 Birr</h5>
									<p>Estimated Income</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">

					<div class="row my-2">
						<div class="col-md-8 align-self-center pl-4">
							<h6 class="">Budget Items</h6>		
						</div>

						<div class="col-md-4">
							<a class="ye_btn float-right" href="#" data-toggle="modal" data-target="#addbudgetitem"><i class="fa fa-plus"></i> Add budget item</a>
						</div>
					</div>

					<div class="ye_card">
						<!-- category -->
						<?php 

						if($budgetItems){
							
							foreach ($budgetItems as $budgetItem) {
								echo $budgetItem[2] . '</br>';
							}

						}else{
							echo '<i> No budget items added, yet.</i>';
						}

						?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>



<?php

require_once 'app/views/partials/dashboard-footer.php';
?>

<!-- <script>
	$(document).ready(function(){

		$('#targetamount').submit(function(){
			$.ajax({
				type:'POST',
				url:'dashboard_event/edit/3',
				success: function(data){
					alert(data);

				}
			})
		})
	})


</script>
 -->