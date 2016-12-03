
	<div class="panel panel-default">
		<div class="panel-heading"><h4>Contact Details</h4></div>
		<table class="table table-striped table-bordered">
			<thead>
		      <tr>
		        <th>ID</th>
		        <th>Name</th>
		        <th>Email</th>
		      </tr>
		    </thead>
		    <?php $i= 1; foreach ($contact[0] as $value) { ?>
		    	<tr>
		    	<td> <?php echo $i; ?></td>
		    	<td> <?php echo $value['name']; ?></td>
		    	<td> <?php echo $value['email']; ?></td>
		    	</tr>

		    <?php $i++; } ?>
		</table>
		<div class="container-table">
			<div class="row vertical-center-row">
				<div class="text-center col-md-4 col-md-offset-4">
					<ul class="pagination">
						<?php
							global $total, $id;
							/*if($id>1){
							    //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
							    echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
							}elseif($id!=$total)
							{
							    ////Go to previous page to show next 10 items.
							    echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
							}*/
							//show all the page link with page number. When click on these numbers go to particular page. 
					        for($i=1;$i<=$total;$i++)
					        {
					            if($i==$id) { echo "<li class='active'><a>".$i."</a></li>"; }
					             
					            else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
					        }
						?>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
