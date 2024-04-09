<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<body>
    <h1>Payment Form</h1>
    <form action="<?php echo site_url('pay/initiate_payment');?>" method="post">
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" required><br><br>
        <input type="submit" value="Pay">
    </form>
</body>
</html>