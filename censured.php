<?php
$first_name = $_GET['fname'];
$last_name = $_GET['lname'];
$email = $_GET['email'];
$psw = $_GET['password'];
$user_feedback = $_GET['feedback'];
$word_filter = ['cazzo', 'culo', 'negro', 'negri', 'coglione', 'porco', 'dio'];

$psw_lenght = strlen($psw);
$feedback_len_nofilter = strlen($user_feedback);

$psw = str_replace($psw, '***', trim($psw));
$user_feedback = str_replace($word_filter, '***', trim($user_feedback));

$psw_censured_len = strlen($psw);

$feedback_len = strlen($user_feedback);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <title>Dati</title>
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
            box-shadow: 0px 0px 38px -17px;
            padding: 30px;
        }

        ul {
            list-style-type: none;
        }

        .text-bold {
            font-weight: 600;
        }

        li {
            margin: 10px 0;
        }

        .text-orange {
            color: orangered;
        }

        p {
            margin-bottom: 0;
            font-size: 0.7rem;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="wrapper">
            <h1 class="text-center mb-5">
                <span class="text-orange">Feed</span>back
            </h1>
            <ul>
                <li>
                    <span class="text-bold">Nome: </span>
                    <?= $first_name ?>
                </li>
                <li>
                    <span class="text-bold">Cognome: </span>
                    <?= $last_name ?>
                </li>
                <li>
                    <span class="text-bold">Email: </span>
                    <?= $email ?>
                </li>
                <li>
                    <span class="text-bold">Password: </span>
                    <?= $psw ?>
                    <p><i>La tua password è di <?= $psw_lenght ?> caratteri</i></p>

                </li>
                <li>
                    <span class="text-bold">Feedback inviato: </span>
                    <?= $user_feedback ?>
                    <div class="mt-3">
                        <p><i>Prima della censura <?= $feedback_len_nofilter ?>/50 caratteri</i></p>
                        <p><i>Dopo la censura <?= $feedback_len ?>/50 caratteri</i></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>