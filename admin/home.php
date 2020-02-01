<?php
session_start();
if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/yourexchange/admin/");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>admin home</title>
    <style>
        .nav-bar {
            width: 100%;
            height: 50px;
            /* background-color: gray; */
        }

        .box1 {
            margin: auto;
            width: 30%;
            padding: 10px;
        }
    </style>

    <script>
        var result = "<?php echo $_SESSION["request"]; ?>";
        if(result!="n/a"){
            alert(result);
        }
       
    </script>
</head>

<body>
    <div class="nav-bar">
        <a href="logout.php" id="logout" style="float: right;margin-right:5%;font-size:21px">logout</a>
    </div>
    <div class="box1">
        <h2>Add New Item</h2>
        <form action="fileUpload.php" method="post" enctype="multipart/form-data">
            <p>Title: <input type="text" style="width: 100%" id="txtTitle" name="title" /></p>
            <p>Category:<select style="width: 100%" name="category">
                    <option value="software">Software</option>
                    <option value="movie">Movie</option>
                </select></p>
            <input type="file" style="margin:10px" name="fileToUpload" id="fileToUpload">
            <input type="submit" style="width: 100%;height:25px ;margin-bottom:10px" value="Submit" name="submit">
            <input type="button" style="width: 100%;height:25px" value="Cancel" name="cancel">

        </form>

    </div>

</body>

</html>