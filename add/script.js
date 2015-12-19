var course_code = "";
var course_title = "";
var semester = "";
var yr = "";
var course_descrip = "";
var course_obj = "";
var course_mat = "";
var course_dept = "";
var course_lect = "";
var course_fi = "";
var pre = "";

function sendRequest(u){
	var obj=$.ajax({url:u,async:false});
	var result=$.parseJSON(obj.responseText);
	return result;
}

function gothere(){
	course_code = $("#cd").val();
	course_title = $("#ct").val();
	semester = $("#cs").val();
	yr = $("#cy").val();
	course_descrip = $("#cdes").val();
	course_obj = $("#co").val();
	course_mat = $("#cm").val();
	course_dept = $("#dept").val();
	course_lect = $("#cl").val();
	course_fi = $("#cfi").val();
	pre = $("#pc").val();

	validate();

	var send=sendRequest("extend.php?cmd=1&cd="+course_code+"&ct="+course_title+"&cs="
		+semester+"&cy="+yr+"&cdes="+course_descrip+"&co="+course_obj+"&cm="+course_mat+
		"&dept="+course_dept+ "&cl="+course_lect+"&cfi="+course_fi+"&pc="+pre);
	alert("extend.php?cmd=1&cd="+course_code+"&ct="+course_title+"&cs="
		+semester+"&cy="+yr+"&cdes="+course_descrip+"&co="+course_obj+"&cm="+course_mat+
		"&dept="+course_dept+ "&cl="+course_lect+"&cfi="+course_fi+"&pc="+pre);
	if(send.result==1){
		alert(send.message);
		return;
	}
	else{
		alert(result.message);
	return;
	}
}

function validate(){
	if (course_code == ""){
			window.alert("Please enter the course code");
			//course_code.focus();
			document.getElementById("cd").focus;
			return;
		}
	if (course_title == ""){
		window.alert("Please enter the course the title or name");
		//course_title.focus();
		return;
	}
	if (semester == ""){
		window.alert("Please enter the semester the course is taken");
		//semester.focus();
		return;
	}
	if (yr == ""){
		window.alert("Please enter the year in which the course is taken");
		//yr.focus();
		return;
	}
	if (course_descrip == ""){
		window.alert("Please enter the course Description");
		//course_descrip.focus();
		return;
	}
	if (course_obj == ""){
		window.alert("Please enter the course objective");
		//course_obj.focus();
		return;
	}
	if (course_mat == ""){
		window.alert("Please enter the course materials");
		//course_mat.focus();
		return;
	}
	if (course_dept == ""){
		window.alert("Please enter the course materials");
		//course_dept.focus();
		return;
	}
	if (course_lect == ""){
		window.alert("Please enter the course lecturer(s)");
		//course_lect.focus();
		return;
	}
	if (course_fi == ""){
		window.alert("Please enter the course FI(s)");
		//course_fi.focus();
		return;
	}
	if (pre == ""){
		window.alert("Please enter the course prerequisite(s)");
		//pre.focus();
		return;
	}

}

$(function(){
	$('#bt').click(function(e){
		//do form processing
		alert("here who")
		e.preventDefault();
		gothere();
	});
});
