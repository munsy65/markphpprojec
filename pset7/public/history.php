<?php
        require("../includes/config.php");
        
        $history = query("SELECT * from history WHERE id = ?", $_SESSION["id"]);
        
        render("history_form.php", ["title" => "History", "history" => $history]);
 ?>ch       
