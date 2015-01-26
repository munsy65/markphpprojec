<ul class="nav nav-pills">
    <li><a href="index.php">Portfolio</a></li>
    <li><a href="quote.php">Quote</a></li>
    <li><a href="buy.php">Buy</a></li>
    <li><a href="sell.php">Sell</a></li>
    <li><a href="history.php">History</a></li>
    <li><a href="deposit.php">Deposit Funds</a></li>    
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
</ul>        
<h2>Transaction History</h2>
<table class="table table-striped">

    <thead>
        <tr>
            <th>Date and Time</th>
            <th>Transaction</th>
            <th>Symbol</th>
            <th>Shares</th>
            <th>Price</th>
            <th>Total Amount</th>
        </tr>
    </thead>
    
    <tbody>
    <?php
            foreach ($history as $row)
            {
                echo("<tr>");
                echo("<td>" . date('m/d/y, g:i A',strtotime($row["date"])) . "</td>");
                echo("<td>" . $row["transaction"] . "</td>");
                echo("<td>" . $row["symbol"] . "</td>");
                echo("<td>" . $row["shares"] . "</td>");
                echo("<td>$" . number_format($row["price"], 2) . "</td>");
                echo("<td>$" . number_format($row["amount"], 2) . "</td>");
                echo("</tr>");
            
            }
      ?> 
      </tbody> 
 </table> 
 
