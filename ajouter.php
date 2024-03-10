<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter patient</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="piece3.jpg" alt="piece3"></a>
        <h2>ajouter un patient</h2>
        <p class="erreur_message">
            veillez remplir tous les champs
        </p>
        <form action="" method="POST">
            <label for="">nom</label>
            <input type="text" name="nom" required autocomplete="off">
            
            <label for="">prenom</label>
            <input type="text" name="prenom" required autocomplete="off">
            
            <label for="">age</label>
            <input type="number" name="age" required autocomplete="off">
            
            
            <label for="">sexe</label>
            <select name="sexe" id="sexe">
                <option value="">masculin</option>
                <option value="">feminin</option>
            </select>
            
            <label for="">numtel</label>
            <input type="number" name="numtel" required autocomplete="off">
            <input type="submit" value="ajouter" name="button">
            <a href="index.php"></a>
        </form>
    </div>
</body>
</html>