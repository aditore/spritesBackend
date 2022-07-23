<?php
    require("server\config\mysql_connect.php");
    $username = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = htmlspecialchars($_POST["username"]);

        if (!empty($username)) {

            $sql = "INSERT INTO user_data(username) VALUES ('$username')";

            if ($conn->query($sql) === TRUE) {

                echo `Added $username to database`;

            } else {
                echo `error with adding $username`;
            }
        }
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Create</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PHP CRUD</a>
        </div>
    </nav>

    <div class="container">
        <div class="row pt-3">
            <div class="col">
                <div class="card">
                    <span>
                    <h1 class="card-title text-center">CREATE A NEW USER</h5>
                    </span>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="An indecredible title" required />
                                </div>
                                <div class="d-grid gap-2 pt-4">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>