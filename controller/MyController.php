<?php

class MyController
{
	function LoginAct()
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
			if($username=='superuser' && $password=='user123')
				{
					header('location:../view/superdashboard.php');
				}
			else
			{
				echo 'failed';
			}	
	}
	function Loadfirst()
		{
			header('location:view/firstpage.php');
			
		}

function SaveData($name,$reg_no,$dob,$email,$gender,$phoneno,$qualification,$batch,$semester,$username,$password)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insert($name,$reg_no,$dob,$email,$gender,$phoneno,$qualification,$batch,$semester,$username,$password);
	}
function LoginUser($user,$pass)	
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$mod->userlogin($user,$pass);
}
function Saveadmindata($username,$password,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertadmin($username,$password,$adminid);
	}
function loginadmin($username,$password)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->adminlogin($username,$password);
	}


function Subinsert($code,$semester,$year,$credit,$subjectname,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertsub($code,$semester,$year,$credit,$subjectname,$adminid);
	}
function Sublistinsert($subname,$coursecode,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertsublist($subname,$coursecode,$adminid);
	}
function timetableinsert($day,$coursename,$semester,$subjectname,$time,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->inserttimetable($day,$coursename,$semester,$subjectname,$time,$adminid);
	}
function noticeinsert($semester,$noticeid,$title,$beginningdate,$author,$endingdate,$description,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertnotice($semester,$noticeid,$title,$beginningdate,$author,$endingdate,$description,$adminid);
	}
function resultinsert($reg_no,$username,$coursecode,$subjectname,$result,$credit,$totalgpa)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertresult($reg_no,$username,$coursecode,$subjectname,$result,$credit,$totalgpa);
	}
function stdprofile($reg_no)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->studentprofile($reg_no);
		return $result;
	}
function resprofile($reg_no)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->resultprofile($reg_no);
		return $result;
	}
function subjprofile($semester)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->subjectprofile($semester);
		return $result;
	}		
function stdtimetable($semester)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->studentimetable($semester);
		return $result;
	}	
function notiprofile($semester)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->viewnotice($semester);
		return $result;
	}
function viewstudent()
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->viewstud();
		return $result;
	}
function viewadmin()
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$result=$mod->viewadmn();
		return $result;
	}
function removeadmin($user)
	{
		#include '../model/MyModel.php';
		$mo=new MyModel();
		$mo->adminremove($user);
	}
function removestudent($user)
	{
		#include '../model/MyModel.php';
		$mo=new MyModel();
		$mo->studentremove($user);
	}				
					
					
					
				
	
}
?>
