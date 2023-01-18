<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - liste questions administrative</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <!-- Navigation -->
    <?php include_once('header.php'); ?>

    <h1>liste des questions</h1>
    
    <ul style="border: 1px solid black; padding: 10px;" id="question1" onclick="reponse1.style.display='block';">comment faire son incription pédagogique</ul>
    <ul style="border: 1px solid black; padding: 10px; display: none; " id="reponse1" onclick="this.style.display='none';">
        <p>aller  sur l'ent</p>
        <p>selectioner inscription pédagogique dans la catégorie adminsitration</p>
        <p>procéder à l'inscription pédagogique</p>
        <p>sélectioner la formation pour la quelle vous souhaitait vous inscrire</p>
        <p>choisisser vos matières</p>
        <p>valider</p>
    </ul>

    <ul style="border: 1px solid black; padding: 10px;" id="question2" onclick="reponse2.style.display='block';">où créer sa convention de stage</ul>
    <ul style="border: 1px solid black; padding: 10px; display: none; " id="reponse2" onclick="this.style.display='none';">
        <p>aller  sur l'ent</p>
        <p>selectioner portail des conventions de stage dans emplois et stages</p>
        <p>cliquer sur convention de stage puis créer une convention</p>
        <p>suiver les étapes de création</p>
    </ul>

    <ul style="border: 1px solid black; padding: 10px;" id="question3" onclick="reponse3.style.display='block';">comment recharger sa carte izly</ul>
    <ul style="border: 1px solid black; padding: 10px; display: none; " id="reponse3" onclick="this.style.display='none';">
        <p>aller sur izly.fr</p>
        <p>connecter vous</p>
        <p>aller dans recharger</p>
        <p>sélectioner votre méhode de rechargement</p>
        <p>procéder</p>
    </ul>
    
    <form action="" method="get" class="questionSoumise">
        <div class="form-example">
            <label for="name">suggerer une question: </label>
            <input type="text" name="name" id="questionSuggerer" required>
        </div>
        <div class="form-example">
            <input type="submit" value="Soummetre">
        </div>
    </form>

    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>

