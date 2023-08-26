<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
 
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <div class="text-center">
                    <a href= "login.php">
                        <button class="btn bg-warning mb-3" style="width:200px">logIn</button>
                    </a>
                    <a href= "logout.php">
                        <button class="btn bg-danger mb-3" style="width:200px">logOut</button>
                    </a>
                    <a href= "register.php">
                        <button class="btn bg-success mb-3" style="width:200px">Register</button>
                    </a>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        register
                        <form method="POST">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label for="">ComfrimPassword</label>
                                <input type="password" name="comfrimPassword" class="form-control">
                            </div>
                             <div class="mb-3">
                                <button type="submit" name='register' class="btn bg-dark text-white float-end">register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
session_start();

function checkStrongPassword($password)
{
    $upperCase = false;
    $lowerCase = false;
    $numberCase = false;
    $specialCase = false;

    if (preg_match('/[A-Z]/', $password)) {
        $upperCase = true;
    }
    if (preg_match('/[a-z]/', $password)) {
        $lowerCase = true;
    }
    if (preg_match('/[0-9]/', $password)) {
        $numberCase = true;
    }
    if (preg_match('/[!@#$%*&]/', $password)) {
        $specialCase = true;
    }
    if ($upperCase && $lowerCase && $numberCase && $specialCase) {
        return true;
    } else {return false;}
}

if (isset($_POST['register'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $comfrimPassword = $_POST['comfrimPassword'];

    if ($name != " " && $email != "" && $password != "" && $comfrimPassword != "") {
        if (strlen($password) >= 6 && strlen($comfrimPassword) >= 6) {
            if ($password == $comfrimPassword) {
                $status = checkStrongPassword($password);
                if ($status) {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
                    echo "session success";
                } else {echo "all not complete!password not strong";}

            } else {echo "password not same";}
        } else {echo "type again! password must be greater than 5";}

    } else {echo "require need";}

}?>
    
</body>
</html>

