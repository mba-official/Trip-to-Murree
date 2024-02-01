<?php


$con = mysqli_connect('localhost', 'root', '', 'trip_data') or die('Cannot Connect Database');


if(isset($_POST['request'])){
    $request = $_POST['request'];
    
    $filter = "SELECT * FROM user_info WHERE class = '$request'";
    
    $data = mysqli_query($con, $filter);
    $count = mysqli_num_rows($data);

?>

<table class="table">
<?php
if($count){

?>

    <?php
}else{
    echo "No Record Found.";
}
    ?>
<tbody>
    <?php
    while($last = mysqli_fetch_assoc($data)){

    ?>
    <tr>
        <td><?php echo $last['user_id'];?></td>
        <td><?php echo $last['fullname'];?></td>
        <td><?php echo $last['fname'];?></td>
        <td><?php echo $last['age'];?></td>
        <td><?php echo $last['gender'];?></td>
        <td><?php echo $last['contact'];?></td>
        <td><?php echo $last['email'];?></td>
        <td><?php echo $last['cnic'];?></td>
        <td><?php echo $last['city'];?></td>
        <td><?php echo $last['addres'];?></td>
        <td><?php echo $last['class'];?></td></td>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>

<?php
}
?>