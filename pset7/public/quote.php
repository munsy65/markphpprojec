<?php

    // configuration
    require("../includes/config.php"); 
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

    $stock = lookup($_POST["symbol"]);
    
    if($stock === false)
    
    {
        apologize("You entered an invalid symbol");
    }
    // render portfolio
    render("quote.php", ["title" => "Quote", "symbol" => $stock["symbol"], "name" => $stock["name"], "price" => $stock["price"]]);
}
else
{
    render("quote_form.php", ["title" => "Enter Quote"]);
    }
?>
