<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div class="container">
            <form action="client-store.php" method="post">
                <h2>New Client</h2>
                <label>Name
                    <input type="text" name="name">
                </label>
                <label>Address
                    <input type="text" name="address">
                </label>
                <label>Phone
                    <input type="text" name="phone">
                </label>
                <label>Zip Code
                    <input type="text" name="zip_code">
                </label>
                <label>Email
                    <input type="email" name="email">
                </label>
                <input type="submit" class="btn" value="save">
            </form>
        </div>
    </body>
</html>