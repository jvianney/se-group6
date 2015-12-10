<?php

/**
 * This file responds to ajax requests
 * 
 */

if (!isset($_REQUEST['cmd'])){
    echo '{"result" : 0, "message" : "Command Not Set"}';
    exit();
}
$cmd = $_REQUEST['cmd'];

switch($cmd){
    case 1:
        addCourse();
        break;
    case 2:
        updateCourse();
        break;
    case 3:
        deleteCourse();
        break;
    case 4:
        viewCourse();
        break;
    default:
        echo '{"result" : 0, "message" : "Unknown Command"}';
        break;
}

    /*
     * 
     */
    function addCourse() {
        
    }
    
    /*
     * 
     */
    function updateCourse() {
        
    }
    
    /*
     * 
     */
    function deleteCourse() {
        
    }
    
    /*
     * 
     */
    function viewCourse() {
        
    }
    
    /*
     * 
     */
    function searchCourseByTitle() {
        
    }
?>
