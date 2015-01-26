<ul class="nav nav-pills">
    <li><a href="index.php">Portfolio</a></li>
    <li><a href="quote.php">Quote</a></li>
    <li><a href="buy.php">Buy</a></li>
    <li><a href="sell.php">Sell</a></li>
    <li><a href="history.php">History</a></li>
    <li><a href="deposit.php">Deposit Funds</a></li>    
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
</ul>

<h2>Portfolio</h2>
<table class="table table-striped" >
    <thead>
        <tr>
            <th>Symbol</th>
            <th>Company Name</th>
            <th>Shares</th>
            <th>Price</th>
         </tr>   
    <tbody>
    <?php foreach ($positions as $position): ?>


        <tr>
            <td><?= $position["symbol"] ?></td>
            <td><?= $position["name"] ?></td>
            <td><?= $position["shares"] ?></td>
            <td><?= number_format($position["price"], 2) ?></td>
        </tr> 
    <? endforeach ?>
    </tbody>
 </table>
 <div id="middle">
    Your cash balance  is <strong>$<?=number_format($cash, 2)?></strong>
</div>   
