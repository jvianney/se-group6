<?php
include("adb.php");
/**
 *
 * This class models a course object and
 * and would be used to perform operations on data
 */

class course extends adb{

    /*
     * This is a constructor to initialize the class
     */
    function course() {
        
    }
    
    /*
     * 
     */
    function addCourse($courseCode, $courseTitle, $courseDescription, $courseObjective, $courseMaterials, $year, $department, $lecturer, $faculty_intern, $semester, $coursePreRequisites) {
        
    }
    
    /*
     * 
     */
    function updateCourse($courseID, $courseCode, $courseTitle, $courseDescription, $courseObjective, $courseMaterials, $year, $department, $lecturer, $faculty_intern, $semester, $coursePreRequisites) {
        
    }
    
    /*
     * 
     */
    function deleteCourse($courseID) {
        
    }
    
    /*
     * 
     */
    function viewCourse($courseID) {
        
    }
	
	/*
	 *
	 */
	function viewAllCourses() {
		$str_query="select * from courses";
		if(!$this->query($str_query)){
			return false;
		}	
		return $this->fetch();
	}
    
    /*
     * 
     */
    function searchCourseByTitle($courseTitle) {
        
    }
}
?>
