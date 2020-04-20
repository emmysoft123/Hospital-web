<?php
//error Handlers Function


function message(){
    if(!isset($_GET['Login'])){
    exit();
}
else{
    $signIncheck = $_GET['Login'];

    if($signIncheck == "passwordResetSuccess"){
        echo "<p class='success'>Password Reset Successful, you can now Login</p>";
        exit();
    }
    elseif($signIncheck == "wrongpass"){
        echo "<p class='error'>Wrong Email or Password</p>";
        exit();
    }
    elseif($signIncheck == "user_not_set"){
        echo "<p class='error'>Empty Fields</p>";
        exit();
    }
    elseif($signIncheck == "wrongUser"){
        echo "<p class='error'>User Not in Database</p>";
        exit();
    }
}
}

function forgotAlert(){
    //error handlers
if(!isset($_GET['forgot'])){
    exit();
}
else{
    $forgotcheck = $_GET['forgot'];

    if($forgotcheck == "empty"){
        echo "<p class='error'>Empty field</p>";
        exit();
    }
    elseif($forgotcheck == "codeerror"){
        echo "<p class='error'>code error</p>";
        exit();
    }
    elseif($forgotcheck == "Emailerror"){
        echo "<p class='error'>Fill in valid email</p>";
        exit();
    }
    elseif($forgotcheck == "Negative"){
        echo "<p class='error'>Email not in database</p>";
        exit();
    }
    elseif($forgotcheck == "NoToken"){
        echo "<p class='error'>Cant access that page because No token available</p>";
        exit();
    }
    elseif($forgotcheck == "ResetFail"){
        echo "<p class='error'>Reset Failed or token expired</p>";
        exit();
    }
    elseif($forgotcheck == "codeSent"){
        echo "<p class='error'>Reset Token sent, Check Your Email</p>";
        exit();
    }
}
}
