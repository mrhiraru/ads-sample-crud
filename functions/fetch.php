<?php
$query = "SELECT s.subject_id, s.subject_code, s.subject_name, sy.syllabus_id, sy.syllabus_code, sy.syllabus_author 
    FROM tblsubjects s 
    LEFT JOIN tblsyllabus sy ON s.subject_id = sy.subject_id;";
$result = mysqli_query($dbc, $query);
?>
