<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECRUTEZ-MOI - SOULEYMANE WADE</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php
    $servername ="localhost";
    $username= "root";
    $password="";
    $dbname ="base";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "😁";
    }
    catch (PDOException $e){
        echo "😡" . $e->getMessage();
    }
    if(isset($_POST['submit']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $commentaire = $_POST['commentaire'];
        $commentaires = $_POST['commentaires'];

        $sql = ("INSERT INTO utilisateurs(nom, prenom, email, commentaire, commentaires) VALUES (:nom, :prenom, :email, :commentaire, commentaires)");
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':commentaire', $commentaire);
        $stmt->bindParam(':commentaires', $commentaires);
        $stmt->execute();
    }
?>
    
    <header class="header">
        <a class="logo" href="#">Souleymane.<span class="animate" style="--i:1;"></span></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <nav class="navbar">
            <a href="#home">ACCEUIL</a>
            <a href="#about">QUI SUIS-JE ?</a>
            <a href="#education">JOURNAL</a>
            <a href="#competences">COMPETENCES</a>
            <a href="#contact"  class="active">CONTACT</a>

            <span class="active-nav"></span>
            <span class="animate" style="--i:2;"></span>
        </nav>
    </header>

    
    <section class="contact" id="contact">
        <h2 class="heading">RECRUTEZ-<span>MOI !</span><span class="animate scroll" style="--i:1;"></span></h2>
        <!-- <?php include('./contact.php');?> -->
        <form action="index.php" method="POST">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="nom" placeholder="Nom Complet" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="email" name="prenom" placeholder="Adresse Email" required>
                    <span class="focus"></span>
                </div>
                <span class="animate scroll" style="--i:3;"></span>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="number" name="email" placeholder="Numero Téléphone" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" name="commentaire" placeholder="Objet de votre mail" required>
                    <span class="focus"></span>
                </div>
                <span class="animate scroll" style="--i:5;"></span>
            </div>

            <div class="textarea-field">
                <textarea name="commentaires" id="" cols="30" rows="10" placeholder="Votre Message" required></textarea>
                <span class="focus"></span>
                <span class="animate scroll" style="--i:7;"></span>
            </div>

            <div class="btn-box btns">
                <button type="submit" name="submit" value="Envoyer" class="btn">ENVOYER</button>
                <span class="animate scroll" style="--i:9;"></span>
            </div>
        </form>
    </section>


    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by Souleymane | All Rights Reserved.</p>

            <span class="animate scroll" style="--i:1;"></span>
        </div>

        <div class="footer-iconTop">
            <a href="#"><i class='bx bx-up-arrow-alt'></i></a>

            <span class="animate scroll" style="--i:3;"></span>
        </div>
    </footer>

    <script src="script.js"></script>
    
</body>
</html>