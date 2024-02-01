<?php

$con = mysqli_connect('localhost', 'root', '', 'trip_data') or die('Cannot Connect Database');

$sql = mysqli_query($con, "SELECT * FROM user_info");

$row = mysqli_num_rows($sql);

if($row > 0){
        while($final = mysqli_fetch_assoc($sql)){
            ?>  <tr>
                        <td><?php echo $final['user_id'];?></td>
                        <td><?php echo $final['fullname'];?></td>
                        <td><?php echo $final['fname'];?></td>
                        <td><?php echo $final['age'];?></td>
                        <td><?php echo $final['gender'];?></td>
                        <td><?php echo $final['contact'];?></td>
                        <td><?php echo $final['email'];?></td>
                        <td><?php echo $final['cnic'];?></td>
                        <td><?php echo $final['city'];?></td>
                        <td><?php echo $final['addres'];?></td>
                        <td><?php echo $final['class'];?></td>
                    </tr>;
          <?php
        }
        mysqli_close($con);
    }else{
    echo "No Record Found";
}

?>