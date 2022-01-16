
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">

    <title>Student Information</title>
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
        <form action="studentCourse.php" method="post">
            <div class="mb-3">
                <label class="form-label">Student Name</label>
                <input type="text" name="stdName" class="form-control" require>
            </div>
            <div class="mb-3">
                <label  class="form-label">Student Roll</label>
                <input type="number" name="stdRoll" class="form-control" aria-describedby="emailHelp" require>
            </div>
            <div class="mb-3">
                <label class="form-label" id="course">Semester</label>
                <select class="form-label" name="semester" require>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" id="course">Course</label>
                <select class="js-select2" multiple="multiple" name="courses[]" require>
                    <?php 
                        include 'dbConnection.php';
                        $sql = "SELECT * FROM `courses`";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            
                    ?>
				        <option value="<?php echo $row['courseID'];?>" data-badge=""><?php echo $row['cName'];?></option>
				    <?php };?>
			</select>
            <br>
                
                <!-- <button id="addCourse">add course</button> -->
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Course</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'dataTable.php'; ?>
                </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    
    <script src="main.js"></script>
    <script>
        $(document).ready(function () {
  $("#myTable").DataTable();
});
    </script>
</body>


</html>