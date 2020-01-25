<?php 
class MyModel
{
		function insert($name,$reg_no,$dob,$email,$gender,$phoneno,$qualification,$batch,$semester,$uname,$pass)
		{
			include '../config/connection.php';
			$sql="insert into registrations(name,reg_no,dob,email,gender,phoneno,qualification,batch,semester,username,password) values('".$name."','".$reg_no."','".$dob."','".$email."','".$gender."','".$phoneno."','".$qualification."','".$batch."','".$semester."','".$uname."','".$pass."')";
			if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
		}
		function insertadmin($uname,$passwrd,$admid)
		{
			include '../config/connection.php';
			$sql="insert into admin(username,password,adminid) values('".$uname."','".$passwrd."','".$admid."')";
			if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
		}
	function userlogin($user,$pass)
	{
		include '../config/connection.php';
		$sql="select * from registrations where username='".$user."' and password='".$pass."'";
		$result=mysqli_query($con,$sql);
		
		if (mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION['reg_no']=$row['reg_no'];
				$_SESSION['semester']=$row['semester'];
				header('location:../view/studentbase.php');
			
			}
		}
	}
	function adminlogin($uname,$passwrd)
	{
		include '../config/connection.php';
		$sql="select * from admin where username='".$uname."' and password='".$passwrd."'";
		$result=mysqli_query($con,$sql);
		
		if (mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				header('location:../view/base.php');
			
			}
		}
	}
	
	function insertsub($code,$semester,$year,$credit,$subjectname,$adminid)
		{
			include '../config/connection.php';
			$sql="insert into subject(code,semester,year,credit,subjectname,adminid) values('".$code."','".$semester."','".$year."','".$credit."','".$subjectname."','".$adminid."')";
			if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
		}
		function insertsublist($subname,$coursecode,$adminid)
		{
			include '../config/connection.php';
			$sql="insert into subjectlist(subname,coursecode,adminid) values('".$subname."','".$coursecode."','".$adminid."')";
			if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
		}
		function inserttimetable($day,$coursename,$semester,$subjectname,$time,$adminid)
		{
			include '../config/connection.php';
			$sql="insert into timetable(day,coursename,semester,subjectname,time,adminid) values('".$day."','".$coursename."','".$semester."','".$subjectname."','".$time."','".$adminid."')";
			if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
		}
		function insertnotice($semester,$noticeid,$title,$beginningdate,$author,$endingdate,$description,$adminid)
		{
			include '../config/connection.php';
			$sql="insert into notice(semester,noticeid,title,beginningdate,author,endingdate,description,adminid) values('".$semester."','".$noticeid."','".$title."','".$beginningdate."','".$author."','".$endingdate."','".$description."','".$adminid."')";
			if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
		}
		function insertresult($reg_no,$uname,$coursecode,$subjectname,$result,$credit,$totalgpa)
		{
			include '../config/connection.php';
			$sql="insert into result(reg_no,username,coursecode,subjectname,result,credit,totalgpa) values('".$reg_no."','".$uname."','".$coursecode."','".$subjectname."','".$result."','".$credit."','".$totalgpa."')";
			if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
		}
		function studentprofile($reg_no)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM registrations WHERE reg_no='".$reg_no."'";
			$result=mysqli_query($con,$sql);
			return $result;
		}
		function resultprofile($reg_no)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM result WHERE reg_no='".$reg_no."'";
			$result=mysqli_query($con,$sql);
			return $result;
		}
		function subjectprofile($semester)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM subject WHERE semester='".$semester."'";
			$result=mysqli_query($con,$sql);
			return $result;
		}
		function studentimetable($semester)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM timetable WHERE semester='".$semester."'";
			$result=mysqli_query($con,$sql);
			return $result;
		}
function viewnotice($semester)
		{
			include '../config/connection.php';
			$sql="SELECT * FROM notice WHERE semester='".$semester."'";
			$result=mysqli_query($con,$sql);
			return $result;
		}	
function viewstud()
		{
			include '../config/connection.php';
			$sql="SELECT * FROM registrations";
			$result=mysqli_query($con,$sql);
			return $result;
		}					
function viewadmn()
		{
			include '../config/connection.php';
			$sql="SELECT * FROM admin";
			$result=mysqli_query($con,$sql);
			return $result;
		}
function adminremove($uname)
		{
			include '../config/connection.php';
			$sql="DELETE FROM admin WHERE username='".$uname."'";
			if(mysqli_query($con,$sql))
			{
				
			}
			else
			{
				echo 'error';
			}
		}
function studentremove($uname)
		{
			include '../config/connection.php';
			$sql="DELETE FROM registrations WHERE username='".$uname."'";
			if(mysqli_query($con,$sql))
			{
				
			}
			else
			{
				echo 'error';
			}
		}						
			
	
}
?>

