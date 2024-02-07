<?php
require_once("includes/config.php");
$queryCourses = "SELECT * FROM courses";
$resultCourses = $mysqli->query( $queryCourses );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" type="text/css" href="styles/mobile.css" />
    <link
      rel="stylesheet"
      media="only screen and (min-width:720px)"
      href="styles/desktop.css"
    />
</head>
<body>
	<header>
    <?php
include("includes/header.php");
?>
</header>
    <section>
    <h1>Courses</h1>
    <h2>Computing Courses</h2> 
    <p>The College offers a range of courses to suit applicants with varying backgrounds and educational abilities.
         At undergraduate level, there are single BSc Honours Degree courses in Computing, 
         Computer Networks, Software Engineering and Cyber Security with Forensics amongst others.
       The College teaches undergraduate and postgraduate courses in a wide range of specialisms,
        including computer science, software development, information systems, networking and software engineering. 
        It is at the heart of a passionate computing community, 
        including student societies devoted to games development, digital forensics and programming.
       The courses are British Computer Society accredited and are highly relevant to modern industry. 
       They are designed to prepare students for professional occupations in Computing and related fields.
        Many graduates continue their studies to pursue a higher degree such as an MSc. or PhD.
        </p>
        <h2>Design Courses</h2> 
    <p>The College is an internationally connected creative community of diverse disciplines housed under one roof. 
        We shape our students' futures, preparing them to shape the world through applied knowledge and creativity.
        The College's art and design courses don't just train you, 
        they promote alternative ways of thinking, making and communicating;
         they provide you with space, tools and inspiration to develop your creative practice and a clear career path. 
         You'll get expert teaching from active practitioners and researchers who will encourage you to adopt innovative and resourceful approaches that both perceive and create opportunities for better lives.
        You’ll develop your creative practice whilst interacting with your peers in well-equipped studios, making and digital workshops. At the same time, you'll learn professional skills by working on applied briefs facilitated through our links with commercial clients, cultural institutions, businesses and organisations.
        </p>
        <div class="courseListing">
        <table>
<tr>
<th>Course</th>
<th>Course Type</th>
<th>Year Of Entry</th>
<th>CourseSummary</th>
<th>CourseAwardName</th>
<th>UcasCode</th>
<th>UcasPoint</th>
<th>ModeOfAttendence</th>
<th>StudyLength</th>
</tr>
<?php
while ($obj = $resultCourses -> fetch_object()) {
echo "<tr>";
echo "<td>{$obj->CourseTitle}</td>";
echo "<td>{$obj->CourseType}</td>";
echo "<td>; {$obj->YearOfEntry}</td>";
echo "<td>; {$obj->CourseSummary}</td>";
echo "<td>; {$obj->CourseAwardName}</td>";
echo "<td>; {$obj->UcasCode}</td>";
echo "<td>; {$obj->UcasPoint}</td>";
echo "<td>; {$obj->ModeOfAttendence}</td>";
echo "<td>; {$obj->StudyLength}</td>";
echo "</tr>";
}
?>
    </section>
</div>

<footer>
<?php
include("includes/footer.php");
?>
</footer>
</div>
<script src="js/main.js"></script>
<script src="js/jquery-3.6.1.min.js"></script>
</body>
</html>