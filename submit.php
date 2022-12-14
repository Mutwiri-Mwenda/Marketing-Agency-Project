<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $loc = $_POST['location'];
        $lin = $_POST['link'];
        $serv = $_POST['service'];
        $desc = $_POST['desc'];
        $date = date('d/m/Y');
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "multi_login";

      
      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `orders` (`company_name`, `link`, `location`, `service`, `description`, `date`) VALUES ('$name', '$lin', '$loc', '$serv','$desc','$date')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('location:index.php');
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
      }

    }

    
?>