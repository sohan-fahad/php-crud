<?php 

include 'dbConnection.php';
if(isset($_GET['id'])) {
    $id = $_GET['id']; 
}


$sql = "DELETE FROM stdinfo WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    $courses = "SELECT `stdID`, `courseID` FROM `coursesinfo` WHERE `stdID` = $id";
    $result = mysqli_query($conn, $courses);
    while($row = mysqli_fetch_assoc($result)){
            echo '<pre>'; print_r($row); echo '</pre>';
            $sqlCourse = "DELETE FROM `coursesinfo` WHERE `stdID` = $id";
            $resultDeleteCourses = mysqli_query($conn, $sqlCourse);
        }
        header('location: index.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

    // $sql1 = "DELETE FROM `stdinfo` WHERE `id` = $id";
    // $result1 = mysqli_query($conn, $sql1);
    
    // if($result1) {
    //     echo "u";
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo '<pre>'; print_r($row); echo '</pre>';
    //         $sqlCourse = "DELETE FROM `coursesinfo` WHERE `stdID` = $id";
    //         $resultDeleteCourses = mysqli_query($conn, $sqlCourse);
    //         header('location: index.php');
    //     }
    //     // $deleteStd = mysqli_query($conn, $sql);
    // }
    

?>