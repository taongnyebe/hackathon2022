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
                header("Location:./admin_toda.php");
            break;
        case 'registered':
                $driver->addDriver($_POST['f_name'], $_POST['m_name'], $_POST['l_name'], $_POST['suffix'], $_POST['plate'], $_POST['toda_id']);
                header("Location:./admin_registered.php");
            break;
        
        default:
                echo "Error";
            break;
    }
  }