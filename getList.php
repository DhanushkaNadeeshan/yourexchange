<?php 
 include("admin/config.php");

 $category = $_GET["category"];

 $sql = "SELECT `id`, `title`, `category`, `img`, `data` FROM `items` where category = '$category' ORDER BY data DESC";
 $result = mysqli_query($conn,$sql);
 $rows = array();
 while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);


?>