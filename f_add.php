<?php
  include_once './connections/caller.php';

  if(isset($_POST['submit'])) 
  {
    switch ($_GET['type']) {
        case 'queue':
                $queue->addQueue($_POST['id']);
                header("Location:./admin_queue.php");
            break;
        case 'toda':
                $toda->addToda($_POST['TODA'], $_POST['route1'], $_POST['route2'], $_POST['fee']);
            break;
        case 'registered':
            # code...
            break;
        
        default:
                echo "Error";
            break;
    }
  }