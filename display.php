<html>
    <head>
        <title>Display</title>
        <style>
            
                body
                {
                    background : #D071f9;
                }
                table{
                    background-color : white;
                }
         
        </style>
    </head>



<?php 
include("connection.php"); 


$query = "SELECT * FROM FORM" ;
$data = mysqli_query($conn,$query); 

$total = mysqli_num_rows($data);
// echo $total;

//$result = mysqli_fetch_assoc($data);
//echo $result;
//echo $result['fname']." ".$result['lname']." ".$result['gender']." ".$result['email']." ".$result['phone']." ".$result['address'];

if( $total != 0 )
{
        ?>
        <h2 align="center"><mark>Displaying All Records : </mark></h2>
    <center>    <table border="1" cellspacing = "7" width = "85%">
            <tr>
            <th width ="5%">ID</th>
            <th width ="8%">First Name</th>
            <th width ="8%">Last Name </th>
            <th width ="10%">Gender</th>
            <th width ="20%" >Email</th>
            <th width ="10%">Phone</th>
            <th width ="24%">Adress</th>
            <th width ="15%">Operations</th>
            </tr>
       

        <?php 
        while($result = mysqli_fetch_assoc($data) )
        {
            echo "<tr>
                    <td>".$result['id']."</td>
                    <td>".$result['fname']."</td>
                    <td>".$result['lname']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone']."</td>
                    <td>".$result['address']."</td>
                    <td><a href= 'update_design.php'>Update</a> </td>
                  </tr> ";

        }

}
else 
{
    echo "No Records";
}

?>
</table> 
</center>

