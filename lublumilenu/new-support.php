<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script src="jQuery/jQuery.js"></script>
    <title>Luo uusi tiketti</title>
</head>
<body>

    <?php include "includes/header.php" ?>

    <?php include "includes/support-header.php" ?>

    <form action="functions/new-ticket.php" method="post">
        <div id="new-show">
            <h2>Luo uusi tiketti</h2>

            <p id="new-p-1">psum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release </p>

            <div id="new-info">
                <h3>Yhteystiedot</h3>

                <h4>Sähköposti</h4>
                <input type="text" name="new-email" id="new-email" class="sup-input" required>

                <h4>Koko nimi</h4>
                <input type="text" name="new-name" id="new-name" class="sup-input" required>

                <h4>Puhelinnumero</h4>
                <input type="text" name="new-pnumber" id="new-pnumber" class="sup-input">

                <h4>Help Topic</h4>
                    <select class="sup-input" name="new-topic" id="new-topic" required>
                        <option value="">Valitse aihe</option>
                        <option value="1">Palaute</option>
                        <option value="2">Yleinen tiedustelu</option>
                        <option value="3">Ilmoita ongelmasta</option>
                        <option value="4">Ilmoita pääsyongelmasta</option>
                    </select>
            </div>
        </div>

        <div id="new-unshow">
            <h3>Tiketin tiedot</h3>

            <p>Kuvaile ongelmasi</p>

            <h4>Ongelman yhteenveto</h4>
            <input type="text" name="new-summary" id="new-summary" class="sup-input" required> <br><br>

            <textarea id="new-text" name="new-text" rows="6" cols="70" placeholder="Kysymys" required></textarea> <br><br>

            <input type="submit" value="Luo tiketti" id="create-ticket">
           
            <button class=".reset">Tyhjennä</button>

            <button><a href="support.php" id="ticket-cancel">Peruuta</a></button>

        </div>
    </form>
</body>
</html>