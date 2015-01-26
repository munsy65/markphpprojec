<?php

    //configuration
    require("../includes/config.php");
    
    //if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
         // validate submission
        if (empty($_POST["symbol"]))
        {
            apologize("You must provide stock symbol to sell.");
        }
        
        $stock = lookup($_POST["symbol"]);
        
         if ($stock === false)
        {
            apologize("Entered stock symbol was invalid.");
        }
        
        $rows = query("SELECT shares FROM stocks WHERE id = ? AND symbol =?", $_SESSION["id"], $_POST["symbol"]);
        
        $transaction = 'SELL';
        $sold = $rows[0]["shares"];
        $value = $stock["price"] * $sold;
        
        query("UPDATE users SET cash = cash + ? WHERE id = ?", $value, $_SESSION["id"]);
        
        $hist =query("INSERT INTO history (id,transaction,symbol, shares, price,amount,mysqlhttp://apps.cs50.edx.org/join/52c27bb7-d1a8-496e-acfa-1dc37f000001 date) VALUES (?,?,?,?,?,?,Now())" , $_SESSION["id"],'SELL', $_POST["symbol"],$sold, $stock["price"],$value);
        if($hist === false)
         {
                apologize("History did not update");
         }
        query("DELETE FROM stocks where id = ? and symbol = ?", $_SESSION["id"], $_POST["symbol"]);
         
         
        $_SESSION["cash"] += $value;
        redirect("/");
     }
     else
     {
        $rows = query("SELECT * FROM stocks WHERE id = ?", $_SESSION["id"]);
        
        $stocks = [];
        
        foreach ($rows as $row)
        {
            $stock = $row["symbol"];
            $stocks[] = $stock;
        
        }
      
        render("sell_form.php", ["title" => "Sell Form", "stocks" => $stocks]);
     }
     
        
         
?>        
