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
	    
	    <?php if(empty($result)) { $i= 1; foreach ($result[0] as $value) { ?>
	    	<tr>
	    	<td> <?php echo $i; ?></td>
	    	<td> <?php echo $value['name']; ?></td>
	    	<td> <?php echo $value['email']; ?></td>
	    	</tr>
	    <?php $i++; } }else {?>
	    	<tr>
	    		<td><?php echo $result; ?></td>
	    	</tr>
	    <?php }?>
	</table>
</div>