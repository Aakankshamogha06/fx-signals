<!DOCTYPE html>
<html>
<head>
    <title>Make Payment</title>
</head>
<body>
    <h1>Make Payment</h1>
    <form action="<?php echo site_url('payment/initiate_payment'); ?>" method="post">
        <label for="invoice_value">Invoice Value:</label>
        <input type="text" name="invoice_value" id="invoice_value" value="100"><br><br>
        <!-- Add other necessary payment fields here -->
        <input type="submit" value="Pay Now">
    </form>
</body>
</html>
