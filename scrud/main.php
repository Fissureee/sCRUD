<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sauce Warehouse</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <h1 class="title">Sauces</h1>
        <p class="add"><a href="insert.php" >Add Sauce</a></p>
        <div class="box">
            <table >
                <tr>
                    <th>Num</th>
                    <th>Sauce Name</th>
                    <th>Da Sauce</th>
                    <th>Sauce Desc</th>
                    <th>Control</th>
                </tr>
                    <?php
                        include "connect.php";

                        $records = mysqli_query($conn, "SELECT * FROM dalink");

                        while($data = mysqli_fetch_array($records)){
                    ?>
                <tr>
                    <td name="id"><?php echo $data['id'];?></td>
                    <td><?php echo $data['sauce_name'];?></td>
                    <td><a href="<?php echo $data['sauce_link'];?>"><?php echo $data['sauce_link'];?></a></td>
                    <td><?php echo $data['sauce_desc'];?></td>
                    <td>
                        <button name="edit">Edit</button>
                        <button><input name="test" type="hidden" value="<?php echo $data['id']?>"> Delete</button>
                    </td>
                </tr>
                    <?php
                        }
                    ?>
            </table>
        </div>
    </form>

    <?php
        if(isset($_POST['test'])){
            $id = $_POST['test'];
            echo $id;
            mysqli_query($conn, "DELETE FROM dalink WHERE id=$id;");
        }
    ?>
</body>
</html>