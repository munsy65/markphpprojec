<?php
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    
            if(empty($_POST["symbol"]) || empty($_POST["shares"]))
            {
                apologize("You must enter a valid stock symbol and share amount to buy");
                
            }
            $stock = lookup($_POST["symbol"]);
            $symbol = strtoupper($_POST["symbol"]);
            
            if($stock === false)
            {
                apologize("You must enter a valid stock symbol");
            }
            
            
            
            if (preg_match("/^\d+$/", $_POST["shares"]) == false)
            {
                apologize("You must enter a valid number of shares");
            
            }
            
            $cost = $stock["price"] * $_POST["shares"];
            
            $cash =	query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
            
            if($cash < $cost)
            {
                apologize("You do not have enough cash for this purchase");
            }
            else
            {
                query("INSERT INTO stocks (id, symbol, shares) VALUES(?, ?, ?) 
                ON DUPLICATE KEY UPDATE shares = shares + VALUES(shares)", $_SESSION["id"], $symbol, $_POST["shares"]);
                
                query("UPDATE users SET cash = cash - ? WHERE id = ?", $cost, $_SESSION["id"]);
                $_SESSION["cash"] -= $cost;
                
                $hist =query("INSERT INTO history (id,transaction,symbol, shares, price,amount, date) VALUES (?,?,?,?,?,?,Now())" , $_SESSION["id"],'BUY', $symbol ,$_POST["shares"], $stock["price"],$cost);
        
                redirect("/");
            }
    }
    else
    {
    
        render("buy_form.php", ["title" => "Buy Form"]);
    }




?>
