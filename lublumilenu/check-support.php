<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Tarkista tiketin tila</title>
</head>
<body>

    <div id="support-check">
        
    <?php include "includes/header.php" ?>

    <?php include "includes/support-header.php" ?>

        <div id="check-header">

            <h2>Tarkista tiketin tila</h2>

            <p>lorem ipsum bla bbla bla</p>

        </div>

        <div id="check-main">
            <div id="check-form">

                <form action="#" method="post">

                <h4>Sähköposti</h4>
                <input type="text" name="check-email" id="check-email" class="sup-input" required>

                <h4>Tiketin Numero</h4>
                <input type="text" name="check-ticket" id="new-name" class="sup-input" required> <br> <br>

                <input type="submit" value="Tarkista tiketti" id="check-submit">

                </form>

            </div>
        </div>
    </div>

</body>
</html>