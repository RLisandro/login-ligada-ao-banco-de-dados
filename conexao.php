<?php // Conexão com o banco de dados .Modo padrão de criar.
$con=mysqli_connect("localhost","root","","usuario");

if(mysqli_connect_errno()){
    echo "Erro ao conectar com o banco de dados".mysqli_connect_errno();
    
}
$sql="INSERT INTO cadastro(email,senha)VALUES('$_POST[email]','$_POST[senha]')"; 
if(!mysqli_query($con,$sql))
{
    die('Error:'.mysqli_error($con));
}
else{
    echo"Cadastro efetuado como sucesso!";
    mysqli_close($con);
}
