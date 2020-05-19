<?php error_reporting(-1); ini_set('display_errors', 'On');
require("global/vars.php");

// read incoming data
$input = $_POST;
$course = json_decode($input['myData'],true);
$course_type = $course["type"];
$course_id = $course["courseId"];
if (($course_type) == "fetch-course")
{
	$file = "$server_dump/$course_id/course.txt";
	$myfile = fopen($file, "r") or die("Unable to open file!");
}
else if (($course_type) == "get-sublesson")
{
	$free_list = fopen("$free_course_list", "r") or die("Unable to open file!");
	$free_list = fread($free_list,filesize($free_course_list));
	$free_list = explode(',', $free_list);
	$sublesson_id = $course["sublessonId"];
	if(array_search($course_id,$free_list,true))
	{
		$file = "$freecourses/$course_id/$sublesson_id.txt";
		$myfile = fopen($file, "r") or die("file not found!");
	}
	else
	{
		$file = "$server_dump/$course_id/$sublesson_id.txt";
		$myfile = fopen($file, "r") or die("Unable to open file!");
	}
}
else 
{
	$myfile = fopen("$freecourses/$course/course.txt") or die("Unable to open file!");
}
echo fread($myfile,filesize($file));
fclose($myfile);
?>