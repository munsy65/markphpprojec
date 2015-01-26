<ul class="nav nav-pills">
    <li><a href="index.php">Portfolio</a></li>
    <li><a href="quote.php">Quote</a></li>
    <li><a href="buy.php">Buy</a></li>
    <li><a href="sell.php">Sell</a></li>
    <li><a href="history.php">History</a></li>
    <li><a href="deposit.php">Deposit Funds</a></li>    
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
</ul>


<form action="deposit.php" method="post">
<h4>Please Enter Amount to Deposit</h4>
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="deposit" placeholder="Deposit amount in whole $" type="text"/>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-default">Deposit</button>
        </div>
    </fieldset>
</form>
            
