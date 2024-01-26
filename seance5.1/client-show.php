<?php
if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];

    require_once('db/connex.php');
    $sql = "SELECT * FROM client WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));

    $count = $stmt->rowCount();

    if($count == 1){
        $client = $stmt->fetch();
        foreach($client as $key => $value){
            $$key = $value;
        }
    }else{
        header('location:client-index.php');
    }

}else{
    header('location:client-index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show Client</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>Client</h1>
            <p><strong>Name: </strong><?= $name; ?></p>
            <p><strong>Address: </strong><?= $address; ?></p>
            <p><strong>Phone: </strong><?= $phone; ?></p>
            <p><strong>Email: </strong><?= $email; ?></p>
            <a href="client-edit.php?id=<?= $id; ?>" class="btn">Edit</a>
            <form action="client-delete.php" method="post">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <button type="submit" class="btn red">Delete</button>
            </form>
        </div>
    </body>
</html>