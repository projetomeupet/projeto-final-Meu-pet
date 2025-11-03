<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Pet</title>
</head>
<body>

    <!-- Estilização da página de login -->
    <style> 
        body { 
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgba(139,69,19,1));
        }

        /* Estilização do formulário de login */
            div {
                background-color: rgba(0,0,0,0.5);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                padding: 60px;
                border-radius: 15px;
                color: white;

            }
            input {
                background-color: white;
                padding: 15px;
                border: none;
                outline: none;
                font-size: 15px;
            }
            button {
                background-color: green;
                padding: 15px;
                width: 100%;
                border: none;
                border-radius: 10px;
                color: white;
                font-size: 15px;
            }
            button:hover {
                background-color: darkgreen;
                cursor: pointer;
            }


    </style>

    <!-- Formulário de login -->
    <div>
        <h1>Login</h1> 
        <br> </br>
        <form action="principal.php" method="post">
        <input type="text" placeholder="Usuário">  
        <br> </br>
        <input type="password" placeholder="Senha">
        <br> <br> </br>
        <button type="submit">Entrar</button>
    </div>
</body>
</html>
