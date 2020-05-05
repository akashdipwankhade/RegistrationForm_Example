<?php
  include("conn.php");

/********************************Registration Form ***************************************/
  if(isset($_POST['Register_btn']))
		{
			$email=$_POST['email'];
			$repeat_email=$_POST['repeat_email'];
			$password=$_POST['password'];
			$repeat_pass=$_POST['repeat_pass'];
			$f_name=$_POST['f_name'];
			$m_name=$_POST['m_name'];
			$l_name=$_POST['l_name'];
			$mobile=$_POST['mobile'];
			$addr=$_POST['addr'];
			$country=$_POST['country'];
			$gender=$_POST['gender'];
			$qualification=$_POST['qualification'];
			$full_name=$f_name." ".$m_name." ".$l_name;
			$flag=0;


			if (!empty($_FILES['profile_pic'])) 
			    	{	
				        $temp = explode(".", $_FILES["profile_pic"]["name"]);
				        $newfilename = basename($_FILES['profile_pic']['name']);
				        $path = "profile_pic/";
				        $path = $path . $newfilename;
				        $profile_pic = $newfilename;
				        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $path)) 
					        {
					         
					          echo "<script> alert(`The file " . basename($_FILES['profile_pic']['name'])." has been uploaded Successfully`);</script>";
				        	}
					    else 
					        {
					        	$flag++;
					         	echo "<script> alert('There was an error in uploading the Profile Picture, please try again!'); window.location.href = 'index.html';</script>";
					        }
					}

			if (!empty($_FILES['id_pic'])) 
			    	{	
				        $temp= explode(".", $_FILES["id_pic"]["name"]);
				        $newfilename = basename($_FILES['id_pic']['name']);
				        $path = "id_pic/";
				        $path = $path . $newfilename;
				        $id_pic = $newfilename;
				        if (move_uploaded_file($_FILES['id_pic']['tmp_name'], $path)) 
					        {
					         	echo "<script> alert(`The file " . basename($_FILES['id_pic']['name'])." has been uploaded Successfully`);</script>";
				        	}
					    else 
					        {
					        	$flag++;
					         	echo "<script> alert('There was an error in uploading the ID Picture, please try again!'); window.location.href = 'index.html';</script>";
					        }
					}

			if ($email!=$repeat_email) 
			{	
				$flag++;
				echo "<script> alert('Email Must Be Identical'); window.location='index.html';</script>";	
			}
			if ($password!=$repeat_pass) 
			{	
				$flag++;
				echo "<script> alert('Password Must Be Identical'); window.location='index.html';</script>";	
			}
			

			$user_check_query = "SELECT * From new_members where full_name= '$full_name' OR email = '$email' limit 1";
			$result = mysqli_query($con, $user_check_query);
			$user = mysqli_fetch_assoc($result);
			if($user)
			{
				if ($user['full_name'] === $full_name) 
				{	
					$flag++;
					echo "<script> alert('Username Alredy Present.');window.location='index.html';</script>";
				}

				if ($user['email'] === $email) 
				{	
					$flag++;
					echo "<script> alert('Email Alredy Present.'); window.location='index.html';</script>";
				}

			}


			if ($flag==0) 
			{

				$ins = "INSERT INTO new_members ( f_name, m_name, l_name, email, password, full_name, mobile, address, country, gender, qualification, profile_pic, id_pic) values('$f_name','$m_name','$l_name','$email','$password', '$full_name', '$mobile', '$addr', '$country', '$gender', '$qualification', '$profile_pic', '$id_pic')";
				$inst = mysqli_query($con, $ins);
				if ($inst) 
				{
					echo "<script> alert('You Have Successfully Registered'); window.location='result.php';</script>";	
				}

				else
				{
					echo "<script> alert('Something Went Wrong');</script>";
					header('Location: index.html');
				}
			}
		}

?>