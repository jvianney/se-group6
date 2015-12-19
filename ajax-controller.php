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
        viewAllCourses();
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
        include("models/course.php");
		$obj=new course();
		$courseCode=$_REQUEST['code'];
		$courseTitle=$_REQUEST['title'];
		$semester=$_GET['semester'];
		$lecturer=$_GET['lecturer'];
		$faculty_intern=$_GET['faculty_intern'];
		$courseObjective=$_GET['objective'];
		$courseMaterials=$_GET['course_material'];
		$courseDescription=$_GET['description'];
		$year=$_GET['academic_year'];
		$coursePreRequisites=$_GET['prerequisites'];
		$department=$_GET['department'];
	    /*obj is an object of the courses class that calls the updateCourse method*/
		$row=$obj->updateCourse($courseID, $courseCode, $courseTitle, $courseDescription, $courseObjective, $courseMaterials, $year, $department, $lecturer, $faculty_intern, $semester, $coursePreRequisites);
    }
    
    /*
     * 
     */
    function deleteCourse() {
		
    }
    
    /*
     * 
     */
    function viewAllCourses() {
        include("models/course.php");
		$obj=new course();
		$row=$obj->viewAllCourses();
		if(!$row){
			echo '{"result": 0, "message": "You have no course in the database"}';
			return;
        }
        echo '{"result": 1, "message": [';
        while($row){
			echo json_encode($row);
			$row = $obj->fetch();
			if($row){
				echo ',';
			}
		}
		echo "]}";
		return;
    }
    
    /*
     * 
     */
    function searchCourseByTitle() {
        
    }
?>
