<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>welcome</title>
    <style>
        * {
    font-family: 'helvetica';
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    justify-content: center;
    align-items: center;
    height: auto; 
    display: flex;
    flex-direction: column;
    background-color: #D9AFD9;
    background-color: #FBAB7E;
    background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
    }

.hiasan {
    background: rgba(255, 255, 255, 0.178);
    backdrop-filter: blur(20px);
    border-radius: 5%;
    padding: 20px;
    background-image: url();
}


    </style>
</head>
<h1>SELAMAT DATANG!</h1> 
<div class="hiasan"> <br>
Welcome <?php echo $_GET["nama"]; ?>!<br/>Your First Name <?php echo $_GET["nama"]; ?> Your LastName.<?php echo $_GET["nama1"]; ?> <br>
Your Gender <?php echo $_GET["gender"]; ?>  <br>
Your Languange <?php echo $_GET["nationality"]; ?>  <br>
Your Country <?php
        if(isset($_GET['language'])) {
            $languages = $_GET["language"];
            echo "Menggunakan bahasa ";
            foreach($languages as $language) {
                echo $language . ", ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
       }; ?><br>
Your message <?php echo $_GET["bio"]; ?> <br>

<br><br>
</body>