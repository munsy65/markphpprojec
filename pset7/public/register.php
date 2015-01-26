<?php

    //configuration
    require("../includes/config.php");
    
    //if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
         // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if ($_POST["password"] !== $_POST["confirmation"])
        {
            apologize("Your password and confirmation do not match.");
        
        }
        $new = query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 15000.00)",
        $_POST["username"], crypt($_POST["password"]));
        
        if($new === false)
        {
            apologize("Username exists please use another");
        }
        else
        {
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $_SESSION["id"] = $id;
            redirect("index.php");
        }
    }
    else
    {
    
        //else render form
        render("register_form.php" , ["title" => "Register"]);
    }
    
?>        
