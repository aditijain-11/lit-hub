<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($showAlert) {
	
            echo "<script>alert('Signed Up Successfully!')</script>";
        }
        
        if($showError) {
        
            echo "<script>alert('Invalid Username and Password!')</script>"; 
    }
	
        include 'connect.php';
        
        $username = $_POST["username"];
        $comments = $_POST["comments"];

        $sql = "Select u.userid,u.username from u users,s suggestions where u.username=s.username and u.usertype='CONTRIBUTOR' and s.username='$username'";
	
	    $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if($num >0) {
            $sql = "INSERT INTO `suggestions` ( `username`,`comments`,`time`) VALUES ('$username','$comments',current_timestamp())";
	
			$result = mysqli_query($con, $sql)
            if ($result) {
				$showAlert = true;
			}
		}
		else {
			$showError = "User not a contributor";
		}	
        }
        else{
            echo"SORRY YOU CAN'T ADD COMMENTS.";
        }
    }


    ?>
    
    <form action="try.php" method="post">
    <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label" name="username"><strong>username</strong></label>
     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Please add your valuable suggestions.">
    </div>
   
    <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label" name="comments"><strong>Comments</strong></label>
     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Please add your valuable suggestions.">
    </div>
    </form>


</body>
</html>