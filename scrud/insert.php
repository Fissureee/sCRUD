<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <h1 class="title">Insert Data</h1>
        <div style="border-style: none;  margin: auto;  max-height: 25rem;  width: fit-content;">
            <a href="main.php">Home</a>
            <table style="margin-top: 1rem;">
                <tr>
                    <th>Sauce Name</th>
                    <th>Da Sauce</th>
                    <th>Sauce Desc</th>
                </tr>

                <tr>
                    <td><input type="text" name="sname"></td>
                    <td><input type="text" name="dsauce"></td>
                    <td><input type="text" name="sdesc"></td>
                </tr>
            </table> 
            <button type="submit" name="submit" style="margin-top: 1rem;">Submit</button> 
        </div>
    </form>

    <?php
        include "connect.php";
        if(isset($_POST['submit'])){
            $name = $_POST['sname'];
            $sauce = $_POST['dsauce'];
            $desc = $_POST['sdesc'];

            $insert = mysqli_query($conn,"INSERT INTO dalink(sauce_name, sauce_link, sauce_desc) VALUES('$name', '$sauce', '$desc')");
        }
    ?>
</body>
</html>