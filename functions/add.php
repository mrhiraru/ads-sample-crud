<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <?php 
        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_POST['Submit'])) {

            if(empty($code) || empty($name)) {
                if(empty($name)){
                    echo "<font color='red'> Subject Code field is empty.</font><br/>";
                }
                if(empty($name)){
                    echo "<font color='red'> Subject Name field is empty.</font><br/>";
                }
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            }else{
                $result = mysqli_query($dbc, "INSERT INTO tblsubject(subject_code, subject_name) VALUES ('$code','$name')");
                echo "<font color='green'>Data added successfully.";
                echo "<br/><a href='../index.php'> View Result</a>";
            }
        }
    ?>
</body>
</html>