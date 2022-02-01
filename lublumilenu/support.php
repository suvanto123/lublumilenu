<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Tukipalvelu</title>
</head>
<body>

    <div class="container">
        <div id="support-home">

        <?php include "includes/header.php" ?>

        <?php include "includes/support-header.php" ?>

            <div id="support-home-main">
                <div id="support-home-main-left">

                    <h2>Tervetuloa Ruosteinen Rauta Oy Tukipalveluun!</h2>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            
                </div>

                <div id="support-home-main-right">

                    <button id="new-ticket"><a href="new-support.php">Luo uusi tiketti</a></button>

                    <button id="check-ticket"><a href="check-support.php">Tarkista tikettisi</a></button>

                </div>
            </div>
        </div>
    </div>

</body>
</html>













<!-- <?php if(isset($_COOKIE['user'])): ?>


<?php else:
header('Location: login.php');
?>

<?php endif; ?> -->