<?php
    require './connections/caller.php';

    if(isset($_GET['id'])){
        switch ($_GET['use']) {
            case 'incident':
                    if($incident->setDeactive($_GET['id']))
                        header("Location:./admin_incident.php");
                    else
                        echo "error";
                break;
            case 'queue':
                    if($queue->setDeactive($_GET['id']))
                        header("Location:./admin_queue.php");
                    else
                        echo "error";
                break;
            
            default:
                    echo "Error";
                break;
        }

        
    }