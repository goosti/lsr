<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSR28 - Loisirs et Solidarité des Retraités</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color:rgb(255, 253, 224);
        }
        .container {
            width: 85%;
            margin: auto;
            margin-top: 1%;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        .menu {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        .menu button {
            padding: 10px 20px;
            background-color: navy;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .events {
            text-align: left;
            margin-top: 20px;
        }
        a{
            color: white;
            text-decoration: none;
        }
        .login{
            margin-left: 55%;
        }
        button{
            background-color: navy;
            padding: 10px;
            border: none;
            border-radius: 15px;
            color: white;
        }
        button:hover{
            background-color: blue;
        }
        input{
            margin: 12px;
            border-radius: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="./image/image.webp" alt="LSR28 Logo" style="max-width: 1250px; border-radius:25px; margin-bottom:20px;">
        <div class="menu">
            <a href="./index.php">
                <button>Accueil</button>
            </a>
            <a href="./agenda.php">
                <button>Agenda</button>
            </a>
            <a href="./contact.php">
                <button>Contact</button>
            </a>
            <div class="login">
                <a href="./login.php">
                <button>Se connecter</button>
            </a>
            </div>
            
    </div>
</body>
</html>
