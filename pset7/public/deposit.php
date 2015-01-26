<?php


    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
            if (preg_match("/^\d+$/", $_POST["deposit"]) == false)
            { 
                apologize("Please enter a whole dollar amount");
            
            }
            
            $deposit = $_POST["deposit"];
            
            query("UPDATE users SET cash = cash + ? WHERE id = ?", $_POST["deposit"], $_SESSION["id"]); 
            
            $_SESSION["cash"] += $deposit;
            $hist =query("INSERT INTO history (id,transaction,symbol, shares, price,amount, date) VALUES (?,?,?,?,?,?,Now())" , $_SESSION["id"],'DEPOSIT', '' ,'', '',$cost);
            
            redirect("/");
    
    }
    else
    {
            render("deposit_form.php", ["title" => "Deposit Form"]);
    
    }
 ?>   
