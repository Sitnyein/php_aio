<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
 <h3 class="mt-3"> <a href="./read.php"> List read</a></h3>

<form class="row g-3 mt-5" method="Post">
  <div class="col-md-3 offset-1 mt-5">
    <label for="inputname" class="form-label">Name upload</label>
    <input type="text" name="uname" class="form-control" id="inputname">
  </div>
  <div class="col-md-3 offset-1 mt-5">
    <label for="inputhome" class="form-label">Town</label>
    <input type="text" name="utown" class="form-control" id="inputhome">
  </div>
  <div class="col-5 offset-6">
    <button type="submit" class="btn btn-dark text-white" name="create">Create</button>
  </div>
</form>
    <?php
    // require_once('./dbconnect.php');
    // if(isset($_POST['create'])) {
    //     $name = $_POST['uname'];
    //     $town = $_POST['utown'];
    //     if($name == null || $town == null ){
    //         echo "<h1>you need to fill</h1>";
    //    }
    //    else { 
        
    //  $sql =  "insert into todo (name,town) values ('$name','$town')";
    //  if(mysqli_query($con,$sql)) {
    //      echo "success";
    //  } else { echo "error";}
     
    //    }
 
    // }

    ?>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>