<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Pessoa</title>
        <style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Passions+Conflict&display=swap');        body {
            background-image: linear-gradient(to right, rgb(95, 24, 147), rgb(08, 69, 75));
        }
        h1 {
            font-family:'Passions Conflict', cursive;
            color: white;
            font-size: 50px
        }
        p{
            font-family: 'Passions Conflict', cursive;
            color: white;
            padding-top: 5px;
            padding-bottom: 5px;
            font-size: 40px
        }
        label{
            font-family: 'Passions Conflict', cursive;
            font-size: 19px;
            color: white;
            font-size: 40px
        }
        input{
            border-radius: 5px;
            color: black;
            font-family: 'Abyssinica SIL', serif;
        }
        button {
            background-color: transparent;
            border-radius: 5px;
            font-family: 'Passions Conflict', cursive;
            border-color: white;
            color: white;
            font-size: 30px;
            height: 40px;
            width: 100px;
        }
        </style>
    </head>
    <body>
        <center>
            <h1>Cadastro de Usuários</h1>
            <form action="/inserir-pessoas" method="post">
                @csrf
                <p>{{ session() -> get('xyz')}}</p>
                <label for="txtNome">Nome:</label>
                <input type="text" name="nome" id="txtnome">
                <br><br>
                <label for="txtidade">Idade:</label>
                <input type="text" name="idade" id="txtIdade">
                <br><br><br>
                <button type="submit">Confirmar</button> &nbsp;
                <a href="/"><button type="button">Voltar</button></a>
            </form>
            <br>
        </center>
    </body>
</html>