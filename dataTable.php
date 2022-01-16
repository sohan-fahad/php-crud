<?php 
include 'dbConnection.php';

$sql = "SELECT * FROM stdinfo s INNER JOIN coursesinfo ON coursesinfo.stdID = s.id INNER JOIN courses c ON coursesinfo.courseID = c.courseID GROUP BY (s.stdName);";

$result = mysqli_query($conn, $sql);
if($result) {
    $i=0;
    while($row = mysqli_fetch_assoc($result)){
        $i++;
        // echo '<pre>'; print_r($row); echo '</pre>';
?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['stdName']; ?></td>
                <td><?php echo $row['semester']; ?></td>
                <td>
                    <?php 
                        $id = $row['id'];
                        $courseSql = "SELECT * FROM courses s INNER JOIN coursesinfo c ON c.courseID = s.courseID WHERE c.stdID = $id";
                        $courseResult = mysqli_query($conn, $courseSql);
                        // echo '<pre>'; print_r($courseResult); echo '</pre>'
                        while($courseRow = mysqli_fetch_assoc($courseResult)) {
                            echo $courseRow['cName']."<br>";
                        }
                    ?>
                    </span>
                </td>
                <td><a href="showData.php?id=<?php echo $row['id'];?>" class="btn btn-success me-2">EDIT</a><a href="deleteData.php?id=<?php echo $row['id'];?>" name="delete" class="btn btn-danger">DELETE</a></td>
            </tr>

<?php }} ?>