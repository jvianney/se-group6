$(document).ready(function(){
    $("#btnSearch").click(function(){
        alert();
    });
});


function sendRequest(u){
    // Send request to server
    //u a url as a string
    //async is type of request
    var obj=$.ajax({url:u,async:false});
    //Convert the JSON string to object
   
    var result=$.parseJSON(obj.responseText);
    return result; //return object
}

function deleteCourse(id){
    alert(id);
    var theUrl="ajax-controller.php?cmd=3&id"+id;
    var obj=sendRequest(theUrl);   //send request to the above url
    
    if(obj.result===1){          //check result
        alert("deleted");
    }else{
      alert("failed");
    }
}

function getCourses(){
    var theUrl="ajax-controller.php?cmd=4";
    var obj=sendRequest(theUrl);   //send request to the above url
    
    if(obj.result===1){          //check result
        display(obj);
    }else{
      alert("failed");
    }
}


 /**
	*This method displays a course from the repository 
	*
	*@param instance obj Instance of the deleteCourse class
	*
	*/

function display(obj){

    var courseDiv = " ";
    
    courseDiv +=  "<table border='2'>";
    courseDiv += "<tr><td>Course ID</td><td>Course Code</td>";
    courseDiv += "<td>Course Title</td><td>Course Description</td>";
    courseDiv += "<td>Course Objective</td><td>Course Materials</td>";
    courseDiv += "<td>Academic Year</td><td>Semester</td>";
    courseDiv += "<td>Lecturer</td><td>Faculty Intern</td>";
    courseDiv += "<td>Department</td><td>Prerequisites</td>";
    courseDiv += "<td>DELETE</td></tr>";
    for( var index in obj.message){
        courseDiv += "<tr><td>"+obj.message[index].course_id+"</td>";
        courseDiv += "<td>"+obj.message[index].course_code+"</td>";
        courseDiv += "<td>"+obj.message[index].course_title+"</td>";
        courseDiv += "<td>"+obj.message[index].course_description+"</td>";
        courseDiv += "<td>"+obj.message[index].course_objective+"</td><td>";
        courseDiv += obj.message[index].course_materials+"</td><td>";
        courseDiv += obj.message[index].academic_year+"</td><td>"+obj.message[index].semester+"</td><td>";
        courseDiv += obj.message[index].lecturer+"</td><td>"+obj.message[index].faculty_intern+"</td><td>";
        courseDiv += obj.message[index].department+"</td><td>"+obj.message[index].prerequisites+"</td>";
        courseDiv += "<td><a href=javascript:deleteCourse("+obj.message[index].course_id+")>DELETE</td></tr>";

    }
    
    courseDiv += "</table>";
    
    $("#display_form").html(courseDiv);
}

