<ul class="nav nav-pills">
    <li><a href="index.php">Portfolio</a></li>
    <li><a href="quote.php">Quote</a></li>
    <li><a href="buy.php">Buy</a></li>
    <li><a href="sell.php">Sell</a></li>
    <li><a href="history.php">History</a></li>
    <li><a href="deposit.php">Deposit Funds</a></li>    
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
</ul>        
<form action="buy.php" method="post">
<h2>Buy a Stock</h2>
<h4>Please enter stock symbol and amount of shares</h4>
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="symbol" placeholder="Stock Symbol" type="text"/>
        </div>
        <div class="form-group">
            <input  class="form-control" name="shares" placeholder="Amount of Shares" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">BUY</button>
        </div>
    </fieldset>
</form>
           
