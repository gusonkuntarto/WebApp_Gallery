<?php
       //include connection file
        include 'connection.php';
        $sql="SELECT * FROM output_images WHERE id='{$_GET['id']}'";
        $query=  mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
             echo "Name: ".$row["name"]."<br/>";
             echo 'Imagine: <img src="data:image/jpeg;base64,'.base64_encode( $row['data'] ).'" height="300" width="300"/>';
             //echo "Imagine: <img src=".$row['image']."><br/>";
            ?>
<a href="index.php">Back</a>


