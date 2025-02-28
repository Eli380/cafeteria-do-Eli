<?php
if(isset($_POST['submit']))
{
      print_r('nome:' . $_POST['nome']);
      print_r('<br>');
      print_r('email:' .$_POST['email']);
      print_r('<br>');
      print_r('telefone:' .$_POST['telefone']);
      print_r('<br>');
      print_r('genero:' .$_POST['genero']);
      print_r('<br>');
      print_r('data_nascimento:' .$_POST['data_nascimento']);
      print_r('<br>');
      print_r('cidade:' .$_POST['cidade']);
      print_r('<br>');
      print_r('estado:' .$_POST['estado']);
      print_r('<br>');
      print_r('endereco:' .$_POST['endereco']);
      print_r('<br>');
      print_r('senha:' .$_POST['senha']);
      print_r('<br>');

   include_once('config.php');

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $genero = $_POST['genero'];
   $data_nascimento = $_POST['data_nascimento'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];
   $endereco = $_POST['endereco'];
   $senha = $_POST['senha'];

   $result = mysqli_query($conexao,"INSERT INTO clientes (nome,email,telefone,genero,data_nascimento,cidade,estado,endereco,senha, VALUES '$nome','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco','$senha') ");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO|GN </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(28,147,220),rgb(17,54,71));
        }
        .box{
            color: white;
            position:absolute;
            top: 50%;
            left: 50%;
            transform:translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 15px;
            width: 20%
        }
        fieldset{
            border: 3px solid dodgerblue;
            border-radius: 10px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border: 5px;
            border-radius: 8px;
            
        }
        .inputBox{
            position: relative;   
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            cursor: pointer;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
            

        }
        .inputUser:focus ~ .labelInput,
        .inputUser :valid ~ .labelInput{  
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        } 
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            cursor: pointer;
        }
        #submit{
            background-image: linear-gradient(to rigtht,rgb(0, 92, 197), rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;   
        }
        #submit :hover{
            background-image: linear-gradient(to right, rgb(0,80, 172), rgb(80, 19, 195));
        }


    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.html" method= "POST">
            <fieldset>
                <legend><b>Formulario de Clientes</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">nome </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">telefone</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" id="femenino" name="genero" value="femenino" required>
                <label for="femenino">femenino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">masculino</label>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">outro</label>
                <br><br>
                
                <label for="data_nascimento"><b>data de nascimento:</b></label>
               <input type="date" name="data_nascimento" id="data_nascimento" required>
                 <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">endereco</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
</body>
</html>