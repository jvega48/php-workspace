<!DOCTYPE html>
<html>
<footer>
    <?php
        $con = mysqli_connect("localhost", "root", "root1");
        mysqli_select_db($con,"company");
    ?>
</footer>
<body>
    <?php
        $deletDepartment = "DELETE FROM department WHERE Dnumber = "
                        .$_GET['id'].";";
        print $deletDepartment;

        mysqli_query($con, $deletDepartment);
        header("Refresh:6; url=index.php");
    ?>
</body>
</html>