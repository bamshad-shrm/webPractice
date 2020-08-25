<?php 
include "config.php";
?>

<!doctype html>
<html>
    <head>
        <title>Live Edit</title>
        <link href='style.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='script2.js' type='text/javascript'></script>
    </head>
    <body>
        
        <div class='container'>
              
            <table width='100%' border='0'>
                <tr>
                    <th width='10%'>id</th>
                    <th width='40%'>First Name</th>
                    <th width='40%'>Last Name</th>
                </tr>
            <?php 
                $query = "select * from users order by id";
                $result = mysqli_query($con,$query);
                $count = 1;
                while($row = mysqli_fetch_array($result) ){
                    $id = $row['id'];
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];
            ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td> 
                            <div class='edit' > <?php echo $firstName; ?></div> 
                            <input type='text' class='txtedit' value='<?php echo $firstName; ?>' id='firstName_<?php echo $id; ?>' >
                        </td>
                        <td> 
                            <div class='edit' ><?php echo $lastName; ?> </div> 
                            <input type='text' class='txtedit' value='<?php echo $lastName; ?>' id='lastName_<?php echo $id; ?>' >
                        </td>
                    </tr>
            <?php
                    $count ++;
                }
            ?>  
            </table>
             
        </div>    
        
    </body>
</html>
