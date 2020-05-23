<!DOCTYPE html>
<html lang="FR">

    <head>
        <meta charset="utf-8" />
        <title>Minichat</title>      
    </head>
    <style>
        form
        {
            text-align: center;
        }
    </style>
    <body>
        <form action="minichat_post.php" method="POST">
            <p>
                <label for="pseudo">Pseudo : <input type="text" name="pseudo" id="pseudo"</label> <br />
                <br >
                <label for="message">Message : <input type="text" name="message" id="message"</label> <br />
                <br />
                <input type="submit" value="Envoyer" />
                <br />
            </p>
        </form>


        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=Test;charset=utf8', 'olivier', '6156');
        } catch (Exception $e) {
            die('erreur : ' . $e->getMessage());
        }

        $reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0,10 ');

        while ($donnees = $reponse->fetch()) {
            echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
        }
        $reponse->closeCursor();
        ?>


    </body>
</html>









