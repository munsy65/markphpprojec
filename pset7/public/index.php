<?php

    // configuration
    require("../includes/config.php"); 
    $rows = query("SELECT symbol, shares FROM stocks
        WHERE id = ?" , $_SESSION["id"]);
    $positions = [];
    
    foreach ($rows as $row)
    {
        $stock = lookup($row["symbol"]);
        if ($stock !== false)
        {
            $positions[] = [
                "name" => $stock["name"],
                "price" => $stock["price"],
                "shares" => $row["shares"],
                "symbol" => $row["symbol"]
             ];   
            
        }
    }   
    // render portfolio
    render("portfolio.php", ["positions" => $positions,"cash" => $_SESSION["cash"],"title" => "Portfolio"]);

?>
