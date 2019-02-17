

<style>
    table ,th,td {
        width: 100%;
        border: 2px solid black;
        border-collapse: collapse;
    };

</style>

<h1 style="text-align: center">Thanks for shopping</h1>
<br>
<table>
    <?php
    if (!empty($cart)) {
    $total = 0;
    ?>
    <thead>
    <tr>
        <th>Product name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cart as $item):
        if (!empty($item['product']['sale_price'])) {
            $total = ($item['product']['sale_price'] + $total) * $item['quantity'];
        } else {
            $total = ($item['product']['price'] + $total) * $item['quantity'];
        }
        ?>
        <tr>
            <td><?= $item['product']['title'] ?></td>
            <td><?= $item['quantity'] ?></td>
            <td>
                <?php
                if (!empty($item['product']['sale_price'])) {
                    ?>
                    <span><?= $item['product']['sale_price']?></span>
                    <?php
                }else {
                    ?>
                    <span><?= $item['product']['price'] ?></span>
                    <?php
                }
                ?>
            </td>
            <td>

                <?php
                if (!empty($item['product']['sale_price'])) {
                    ?>
                    <span><?= $item['product']['sale_price'] * $item['quantity'] ?></span>
                    <?php
                }else {
                    ?>
                    <span><?= $item['product']['price'] * $item['quantity'] ?></span>
                    <?php
                }
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="3">Total price:</td>
        <td><?= $total ?></td>
    </tr>
    </tbody>
</table>
<?php
}