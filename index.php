<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {

    // Sending invitation by email
    header('Location: send_email.php');
    exit;

}

$body_class = "";

// Display delivery status, (tips anti-refreshing) 
//if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {
//
//    // Sending invitation by email
//    // echo "OK c'est envoyé..";
//    $body_class = "delivery_sent";
//}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Inscris-toi ! </title>
        <meta charset="utf-8">
        <meta  name="viewport" content="width=device-width, initial-scale=1">

        <style type="text/css">
            @font-face
            {
                font-family: "SourceSansPro";
                src: url("Polices/SourceSansPro-Bold.ttf");
            }

            body
            {
                background-image: url("Images/background2.png");
                background-size: cover;
                background-repeat: no-repeat;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            form div
            {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .email
            {
                width: 200px;
                padding: 20px;
                font-family: SourceSansPro;
                font-size: 20px;
                border: 2px solid #B2B2B2;
                border-radius: 5px 0px 0px 5px;
            }

            .submit
            {
                color: #FFFFFF;
                background-color: #C30078;
                width: 200px;
                margin: 0 auto;
                padding: 10px;
                font-family: SourceSansPro;
                font-size: 20px;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                border: none;
                border-radius: 0px 5px 5px 0px;
            }

            .submit:hover
            {
                cursor: pointer;
            }

            @media screen and (min-width: 480px)
            {
                form div
                {
                    flex-direction: row;
                }

                .email
                {
                    width: 550px;
                    font-size: 30px;
                }

                .submit
                {
                    width: 250px;
                    font-size: 30px;
                    margin-left: 10px;
                }
            }
        </style>
    </head>

    <body>
        <form action="send_email.php" method="post">
            <div>
                <input type="email" name="email" class="email" placeholder="Ton email de star..." required/>
                <button type="submit" class="submit"> Inscrits-toi ! <img src="https://i.imgur.com/h7HGlrk.png" alt="Enveloppe VIP"/> </button>
            </div>
        </form>
    </body>
</html>