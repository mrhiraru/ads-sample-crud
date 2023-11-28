<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Syllabus</title>
</head>
<body>
    <?php 
        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_POST['Submit'])) {
            $code = $_POST['code'];
            $name = $_POST['author'];
            $name = $_POST['subject'];

            if(empty($code) || empty($name)) {
                if(empty($code)){
                    echo "<font color='red'> Syllabus Code field is empty.</font><br/>";
                }
                if(empty($author)){
                    echo "<font color='red'> Syllabus Author field is empty.</font><br/>";
                }
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            }else{
                $result = mysqli_query($dbc, "INSERT INTO tblsyllabus (syllabus_code, syllabus_author) VALUES ('$code','$author')");
                echo "<font color='green'>Data added successfully.";
                echo "<br/><a href='../index.php'> View Result</a>";
            }
        }
    ?>
</body>
</html>