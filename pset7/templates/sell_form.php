<ul class="nav nav-pills">
    <li><a href="index.php">Portfolio</a></li>
    <li><a href="quote.php">Quote</a></li>
    <li><a href="buy.php">Buy</a></li>
    <li><a href="sell.php">Sell</a></li>
    <li><a href="history.php">History</a></li>
    <li><a href="deposit.php">Deposit Funds</a></li>    
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
</ul>        
<form action="sell.php" method="post">
<h2>Sell a Stock</h2>
<h4>Please enter stock symbol</h4>
    <fieldset>
        <div class="form-group">
            <select name="symbol">
                <option value=''></option>
                <?php
                    foreach ($stocks as $symbol)
                    {
                        echo("<option value='$symbol'>" .$symbol . "</option>");
                    }
                    ?>
             </select>       
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Sell</button>
        </div>
    </fieldset>
</form>
            
