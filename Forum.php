<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - Forum</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
<?php
    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "ius";
               
    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

    $sql = "select * from discussion";
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
             
    if ($result->num_rows > 0) 
    {
    // fetch all data from db into array 
         $row = $result->fetch_all(MYSQLI_ASSOC);  
    } 
             
             
 ?>

    <div class="container">

    <!-- Navigation -->
    <?php include_once('header.php'); ?>

    <h1>Forum</h1>
    
    <ul style="border: 1px solid black; padding: 10px;">
        
        <tbody>
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
            <tr>
                <td> <a href=discution.php target="_blank" name="discuss"><?php echo $rows['nomDiscuss']; ?></a></td>
                <td><?php echo $rows['dateCreationDiscuss']; ?></br></td>
                </tr>
            <?php } ?>
        </tbody>
    </ul>

    <form action="" method="post" class="DiscutionCreer">
        <div class="form-example">
            <label for="nomDiscuss">Creer une discution: </label>
            <input type="text" name="nomDiscuss" id="DiscutionCreer" required>
        </div>
        <div class="form-example">
            <input type="submit" value="Creer">
        </div>
    </form>

    <?php 
        if ('POST' === $_SERVER['REQUEST_METHOD'])
        {
            $name = mysqli_real_escape_string($conn, $_POST['nomDiscuss']);
            $date = $date = date('Y-m-d', strtotime("now")); 
    
            $sql = "INSERT INTO discussion (idDiscuss, nomDiscuss, dateCreationDiscuss) VALUES (NULL,'$name', '$date')";
    
            if($conn->query($sql) === TRUE){
                echo "Record Added Sucessfully";
            }
            else
            {
                echo "Error" . $sql . "<br/>" . $conn->error;
                $conn->close();
            }
            
            echo "<meta http-equiv='refresh' content='0'>";
        }

    
    ?>

    <?php include_once('footer.php'); ?>
</body>
</html>