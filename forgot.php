  
   <h3>Forgot Password</h3>
   <p>Provide the email address associated with your account</p>

   <form action="processforgot.php" method="POST">
   <p>
        
    </p>
   <p>
        <label>Email</label><br />
        <input
        
        <?php              
            if(isset($_SESSION['Email'])){
                echo "value=" . $_SESSION['Email'];                                                             
            }                
        ?>

            type="text" name="Email" placeholder="Email"  />
    </p>
    <p>
        <button type="submit">Send Reset Code</button>
    </p>




    <?php
        //error handlers
        if(!isset($_GET['signup'])){
            exit();
        }
        else{
            $signupcheck = $_GET['forgot'];

            if($signupcheck == "empty"){
                echo "<p class='error'>Empty field</p>";
                exit();
            }
            elseif($signupcheck == "codeerror"){
                echo "<p class='error'>code error</p>";
                exit();
            }
            elseif($signupcheck == "Emailerror"){
                echo "<p class='error'>Fill in valid email</p>";
                exit();
            }
            
        }

        ?>
   </form>
    
