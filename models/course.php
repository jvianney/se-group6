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
		$insert="update courses set course_code='$courseCode', course_description='$courseDescription', course_materials='$courseMaterials', course_objective='$courseObjective', prerequisites='$coursePreRequisites', lecturer='$lecturer', faculty_intern='$faculty_intern', department='$department', course_title='$courseTitle', semester='$semester', academic_year='$academicYear' where course_id='$courseID'";
		if(!$this->query($insert)){
			echo "not successfully submitted";
			echo mysql_error() ;
			return false;
		}
		return true;
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
