<?php include("conn.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Result Page</title>
  <style>
    body{
    }
    
    table {  
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
    width: 95%; 
    border-collapse: 
    collapse; border-spacing: 0;

}

td, th {  
    border: 1px solid #CCC; /* No more visible border */
    height: 30px; 
    transition: all 0.3s;  /* Simple transition for hover effect */
}

th {  
    background: #DFDFDF;  /* Darken header a bit */
    font-weight: bold;
}

td {  
    background: #FAFAFA;
    text-align: center;
}
       
tr:nth-child(even) td { background: #F1F1F1; }   
        
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; }  
</style>
</head>

<body>
  <center>
<h3>Result</h3>
  	<table class="table table-hover">
  		<thead>
  			<tr>
  				<th>Sr. No.</th>
  				<th>ID</th>
  				<th>First Name</th>
  				<th>Middle Name</th>
  				<th>Last Name</th>
  				<th>Email</th>
  				<th>Full_Name</th>
  				<th>Mobile</th>
  				<th>Address</th>
  				<th>Country</th>
  				<th>Gender</th>
  				<th>Qualification</th>
  				<th>Profile_Pic</th>
  				<th>ID_Pic</th>
  			</tr>
  		</thead>
  		<tbody>
<?php
		$Profile_path="profile_pic/";
		$id_path="id_pic/";
          $selected= "SELECT * FROM new_members ORDER BY member_id";
          $fire= $con->query($selected);
          if ($fire->num_rows>0)
          {
	          $i="1";
	          while ($rows = $fire->fetch_assoc()) 
	          {
		          $id= $rows['member_id'];
		          $f_name= $rows['f_name'];
		          $m_name= $rows['m_name'];
		          $l_name= $rows['l_name'];
		          $email= $rows['email'];
		          $full_name= $rows['full_name'];
		          $mobile= $rows['mobile'];
		          $address= $rows['address'];
		          $country= $rows['country'];
		          $gender= $rows['gender'];
		          $qualification= $rows['qualification'];
		          $profile_pic= $rows['profile_pic'];
		          $id_pic= $rows['id_pic'];
?>

  			<tr>
  				<td><?php echo $i;?></td>
  				<td><?php echo $id;?></td>
  				<td><?php echo $f_name;?></td>
  				<td><?php echo $m_name;?></td>
  				<td><?php echo $l_name;?></td>
  				<td><?php echo $email;?></td>	
  				<td><?php echo $full_name;?></td>	
  				<td><?php echo $mobile;?></td>	
  				<td><?php echo $address;?></td>	
  				<td><?php echo $country;?></td>	
  				<td><?php echo $gender;?></td>	
  				<td><?php echo $qualification;?></td>	
  				<td>
  					<img src="<?php echo $Profile_path . $profile_pic;?>" style="max-height:100%; max-width:100%" ></td>	
  				<td>
  					<img src="<?php echo $id_path . $id_pic;?>" style="max-height:100%; max-width:100%">
  				</td>	
  			</tr>
  	<?php 
  } 

}
   ?>

  		</tbody>
  	</table>

   <h5><a href="index.html">Go to Registration Page</a></h5> 
</center>
</body>
<h3><?php
echo "Fetched data successfully\n";
?></h3>
</html>