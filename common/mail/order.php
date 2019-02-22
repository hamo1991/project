
<h1 style="text-align: center;font-weight: bold">Thanks for shopping</h1>
<br>
<table style="width: 100%;border: 2px solid black; border-collapse: collapse">
    <?php
    if (!empty($cart)) {
    $total = 0;
    ?>
    <thead>
    <tr>
        <th style="border: 1px solid black">Product name</th>
        <th style="border: 1px solid black">Quantity</th>
        <th style="border: 1px solid black">Price</th>
        <th style="border: 1px solid black">Total</th>
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
            <td style="border: 1px solid black"><?= $item['product']['title'] ?></td>
            <td style="border: 1px solid black"><?= $item['quantity'] ?></td>
            <td style="border: 1px solid black">
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
            <td style="border: 1px solid black">

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
        <td style="border: 1px solid black" colspan="3">Total price:</td>
        <td style="border: 1px solid black"><?= $total ?></td>
    </tr>
    </tbody>
</table>
<?php
}