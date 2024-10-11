<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css"> <!-- External CSS reference -->
    <title>Sign Up</title>
</head>
<body>

    <?php
        require('./connection.php');
        $error_message = ""; // Initialize error message variable
        if (isset($_POST['login_button'])){
            $_SESSION['validate'] = false;
            $name = $_POST['name'];
            $password = $_POST['password'];
        
            $p = crud::connect()->prepare('SELECT * FROM crudtable WHERE firstName = :n AND pass = :p');
            $p->bindValue(':n', $name);
            $p->bindValue(':p', $password);
            $p->execute();
            $d = $p->fetchAll(PDO::FETCH_ASSOC);
            if ($p->rowCount() > 0) {
                $_SESSION['name'] = $name;
                $_SESSION['password'] = $password;
                $_SESSION['validate'] = true;
                header('location:home.php');
            } else {
                $error_message = "Your username or password is incorrect"; // Set error message
            }
        }
    ?>
    
    <div class="card">
        <div class="title">
            <p>Login</p>
        </div>
        <form action="" method="post" class="form">
            <input type="text" name="name" placeholder="User Name" required> 
            <input type="text" name="password" placeholder="Password" required>
            <input type="submit" value="Login" name="login_button">
        </form>
    </div>

    <!-- The Modal for Error Message -->
    <div id="errorModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Error</h2>
            <p id="error-message"><?php echo $error_message; ?></p>
        </div>
    </div>

    <script>
        // Show the modal if there is an error message
        <?php if (!empty($error_message)) { ?>
            var modal = document.getElementById("errorModal");
            var span = document.getElementsByClassName("close")[0];
            modal.style.display = "block";

            // When the user clicks on the close button, close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        <?php } ?>
    </script>

</body>
</html>
