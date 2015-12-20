<?php

/**
 *@authors: Dorcas Maku Tamatey
 *          Ali Seidu
 *          Emmanuel Nii Tackie
 *          John-Vianne Amoah
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
     *this function adds a interacts with the controller to add a course to the database
     *@param $courseCode: this is the special code of a particular course
      *@param $courseTitle: this is the name of a course
      *@param $courseDescription:this is the description of a course to tell people about the course
      *@param $courseObjective:this is the goals of a course the should be met the end of the semester
      *@param $courseMaterial: this are the various books and other resources that the course will be using.
      *@param $year:this is the year in which the course is being offered
      *@param $department: this is the department that offers this particular course
      *@param $lecture:this is the lecture that lectures the course
      *@param $faculty_intern: is the Teaching Assistant to the lecturer
      *@param $semester: this is the semester in which the course is offered
      *@param $coursePrerequisites:these are the other courses that a student must take before taking this other course 
     
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
    
    /* this function updates a course
     *@param $courseCode: this is the special code of a particular course
      *@param $courseTitle: this is the name of a course
      *@param $courseDescription:this is the description of a course to tell people about the course
      *@param $courseObjective:this is the goals of a course the should be met the end of the semester
      *@param $courseMaterial: this are the various books and other resources that the course will be using.
      *@param $year:this is the year in which the course is being offered
      *@param $department: this is the department that offers this particular course
      *@param $lecture:this is the lecture that lectures the course
      *@param $faculty_intern: is the Teaching Assistant to the lecturer
      *@param $semester: this is the semester in which the course is offered
      *@param $coursePrerequisites:these are the other courses that a student must take before taking this other course 
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
     * this function deletes a course from the database.
      *@param $courseID: this is the id of the course the will be deleted
     */
    function deleteCourse($courseID) {
        $str_query = "delete from courses where course_id='$courseID'";
		return $this->query($str_query);
    }
    
    /*
     * 
     */
    function viewCourse($courseID) {
        
    }
	
	/*
	 *this function displays all the courses in the database
	 */
	function viewAllCourses() {
		$str_query="select * from courses";
		if(!$this->query($str_query)){
			return false;
		}	
		return true;
	}
    
    /*
     * this function searches for a course using a course ID
     */
    function searchCourseByTitle($courseTitle) {
        $str_query="select * from courses where course_title like '%$courseTitle%'";
		if(!$this->query($str_query)){
			return false;
		}	
		return true;
    }
}
?>
