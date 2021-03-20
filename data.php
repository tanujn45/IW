<?php
session_start();
include "./connection.php";
if($_SESSION['login'] != "true") {
    header("Location: login");
    exit();
}
?>

<?php include "components.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php head_tag(); ?>
    <title>Imperial Wellness | Admin</title>
</head>

<body>
    <?php
    $sql = "SELECT name, email, phone, country, state, herbalife from data";
    $result = mysqli_query($conn, $sql);

    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        if($id == "") {
            echo '<h2 style="margin-bottom: -40px; color: red">Enter the id!</h2>';
        } else {
            $sqlDel = "delete from work where id = $id";
            if(mysqli_query($conn, $sqlDel)) {
                 echo '<h2 style="margin-bottom: -40px; color: green">Record deleted!</h2>';
            } else {
                echo '<h2 style="margin-bottom: -40px; color: red">Record was not deleted!</h2>';
            }
        }
    }
    ?>

    <section id="data">
        <div class="container">
            <h3>Current entries</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Country</th>
                        <th scope="col">State</th>
                        <th scope="col">Herbalife</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td>
                            <?php echo $row['name']?>
                        </td>
                        <td>
                            <?php echo $row['email']?>
                        </td>
                        <td>
                            <?php echo $row['phone']?>
                        </td>
                        <td>
                            <?php echo $row['country']?>
                        </td>
                        <td>
                            <?php echo $row['state']?>
                        </td>
                        <td>
                            <?php echo $row['herbalife']?>
                        </td>
                    </tr>
                    <?php
                }
            ?>
                </tbody>
            </table>
        </div>
    </section>

    <?php scripts(); ?>
</body>

</html>