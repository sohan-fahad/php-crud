<?php 
include 'dbConnection.php';

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
}
    $stdName = $_POST['stdName'];
    $stdRoll = $_POST['stdRoll'];
    $semester = $_POST['semester'];
    $coursesArray = $_POST['courses'];
    // $count = count($coursesArray);
    // echo "<pre>"; print_r($coursesArray); echo "</pre>";
    // echo $count;
    

    $sql = "UPDATE `stdinfo` SET `stdName`='$stdName',`stdRoll`='$stdRoll',`semester`='$semester' WHERE `id`= $id";

    if ($conn->query($sql) === TRUE) {
            $courseSql = "SELECT * FROM `coursesinfo` WHERE stdID = $id";
            $coursesQuery = mysqli_query($conn, $courseSql);

            $courseList = [];
            foreach ($coursesQuery as $course) {
                array_push($courseList, $course['courseID']);                
            }

            foreach ($coursesArray as $courseItem) {
                if(!in_array($courseItem, $courseList)) {
                    $insert_sql = "INSERT INTO `coursesinfo`(`stdID`, `courseID`) VALUES ('$id','$courseItem')";
                    $inert_query = mysqli_query($conn, $insert_sql);
                    header('location: index.php');
                }
            }

            foreach($courseList as $itemCourse) 
            {
                if(!in_array($itemCourse, $coursesArray)) {
                    $delete_sql = "DELETE FROM `coursesinfo` WHERE `stdID` = $id AND `courseID`=$itemCourse";
                    $delete_query = mysqli_query($conn, $delete_sql);
                    header('location: index.php');
                }
            }
    } else {
        echo "Error updating record: " . $conn->error;
    }
    

?>