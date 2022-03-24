<?php
  include_once './connections/caller.php';

  if(isset($_POST['submit'])) 
  {
    switch ($login->getUserPassword($_POST['username'],$_POST['password']))
    {
    case 0:
      $_SESSION['login']= "<p class='success'>Login Successfully</p>";
      $_SESSION['user'] = $_POST['username'];
      header("Location:./admin_queue.php");
      break;
    case 1:
      echo $_SESSION['error'] = "<p class='error'>Wrong Password</p>";
      header("Location:./login.php");
      break;
    case 2:
      $_SESSION['error'] = "<p class='error'>User Not Registered</p>";
      header("Location:./login.php");
      break;
    case 502:
      $_SESSION['error'] = "<p class='error'>Connection Error</p>";
      header("Location:./login.php");
      break;
    case 10:
      $_SESSION['error'] = "<p class='error'>SQL Missing</p>";
      header("Location:./login.php");
      break;
    default:
      error_log(print_r("Error", TRUE)); 
      break;
    }
  }
?>