<?php 
    include 'dbConnection.php';

    if(isset($_POST['submit'])){
        $stdName = $_POST['stdName'];
        $stdRoll = $_POST['stdRoll'];
        $semester = $_POST['semester'];
        $coursesArray = $_POST['courses'];
        // $courses = implode(',', $coursesArray);
        $arrayLength = count($coursesArray);
        var_dump ("line 10:".$arrayLength) ;

        $sql = "INSERT INTO `stdinfo` (`stdName`, `stdRoll`, `semester`) VALUES ('$stdName', '$stdRoll', '$semester')";
        $result = mysqli_query($conn, $sql);
        // $i = 0;
        if($result) {
            $lastID = $conn->insert_id;
            for ($i = 0; $i < $arrayLength; $i++)  {
                $courseSql = "INSERT INTO `coursesinfo`(`stdID`, `courseID`) VALUES ('$lastID','$coursesArray[$i]')";
                $saveCourse = mysqli_query($conn, $courseSql );
                if($saveCourse) {
                    header('location: index.php');
                }
                
            }
        
            // foreach($courses  as $key => $course) {
            //     $courseSql = "INSERT INTO `coursesinfo`(`stdID`, `courseID`) VALUES ('[$lastID]','[$course]')";
            //     $saveCourse = mysqli_query($conn,$courseSql );
            //     // echo $lastID[$key];
            //     // $i++;
            // }
        }
    }

?>