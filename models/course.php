<?php

/**
 *
 * This class models a course object and
 * and would be used to perform operations on data
 */
include ("adb.php");
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
        $str_query="insert into courses set course_code='$courseCode', course_title='$courseTitle', course_description='$courseDescription', course_objective='$courseObjective', course_materials='$courseMaterials', academic_year='$year', semester='$semester', department='$department', lecturer='$lecturer', faculty_intern='$faculty_intern', prerequisites='$coursePreRequisites'";
		$res=$this->query($str_query);
		if(!$res){
			return false;
		}
		else{
			return true;
		}
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
        $str_query = "delete from courses where course_id='$id'";
		return $this->query($str_query);
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
		return true;
	}
    
    /*
     * 
     */
    function searchCourseByTitle($courseTitle) {
        
    }
}
?>
