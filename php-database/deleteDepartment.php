<!DOCTYPE html>
<html>
<footer>
    <?php
        $serv = ("locahost","root","root1");
        $con = mysqli_connect($serv,"company");
    ?>
</footer>
<body>
    <?php
        $deletDepartment = "DELETE FROM department WHERE Dnumber="
                        .$_GET['id'].";";
        print $deletDepartment;

        mysql_query($con, $deletDepartment);
        header("Refresh:0; url=index.php");
    ?>
</body>
</html>