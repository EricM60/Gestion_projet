<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - discution</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <!-- Navigation -->
    <?php include_once('header.php'); ?>

    <h1>Discution1 NomUtilisateur</h1>
    
    <ul style="border: 1px solid black; padding: 10px;" id="question1">
        <p>Question posée</p>
    </ul>

    <form action="" method="get" class="MessageEnvoyer">
        <div class="form-example">
            <label for="name">envoyer un message: </label>
            <input type="text" name="name" id="MessageEnvoyer" required>
        </div>
        <div class="form-example">
            <input type="submit" value="Répondre">
        </div>
    </form>


    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>

