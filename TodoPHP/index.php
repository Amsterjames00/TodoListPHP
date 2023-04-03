<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb2cfeef2f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-5 py-4">
                <h3 class="text-center text-success font-poppins">TODO LIST</h3>
                <div class="col-8">
                    <input type="text" name="list" class="form-control" id="list">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-success"><i class="fa-solid fa-square-plus"></i></button>
                </div>
            </div>
        <div>
    </form>
    <?php
    include "config.php";
    $rawData = mysqli_query($con, "select * from tbltodo");
    ?>
    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
            <table class="table table-hover">
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($rawData)) {
                    ?>
                        <tr>
                            <td><?php echo $row['list'] ?> </td>
                            <td style="width: 5%"><a href="update.php? ID= <?php echo $row['Id'] ?>" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td style="width: 5%"><a href="delete.php? ID= <?php echo $row['Id'] ?>" class="btn btn-outline-danger"><i class="fa solid fa-delete-left"></i></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>