<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>

        <style>
	    body {
	    margin: 0;
	    padding: o;
	    box-sizing: border-box;
    }

	    section {
	    margin: 40px 0;
    }

	    .button-as-link {
	    padding: 5px 10px;
	    background-color: blue;
	    border: none;
    }

	    .button-as-link a {
	    text-decoration: none;
	    color: white;
    }

	    .link-as-button {
	    apperance: button;
	    padding: 5px 10px;
	    background-color: blue;
	    border: none;
	    color: white;
	    text-decoration: none;
    }
    </style>
</head>
<body>
    <section>
	    <button class="button-as-link">
		    <a href="index.php" target="_blank">Voltar</a>
	    </button>
    </section>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">             
            
        </form>
    </div>
</body>
    <body style="background-image: url(bg-body.jpg)">
</html>