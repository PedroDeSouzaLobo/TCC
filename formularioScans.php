<html>
	<body bgcolor="#434343">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<br>
    <p align=center> <font size=6 face=timesnewroman color="#FFFACD"><b>FORMULARIO PARA INGRESSAR NA VH SCANS</b></p>
    <br>
	<br>
    <align = left>
	<font size=5 face=timesnewroman>
<form method=POST>
<font size=4>
Nome:
<input type=text name=nome><br>
<br>
E-mail: <input type=text name=email>
<br>
<br>

<table >
    <tr>
        <td><font color="#FFFACD">Cargo de interesse:</td>
    </tr>
    <tr>
        <td><input type=radio name=cargo value=tradutor><font color="#FFFACD">Tradutor</td>
    </tr>
    <tr>
        <td><input type=radio name=cargo value=editor><font color="#FFFACD">Editor</td>
    </tr>
    <tr>
        <td><input type=radio name=cargo value=revisador><font color="#FFFACD">Revisadores</td>
    </tr>
    <tr>
        <td><input type=radio name=cargo value=RawH><font color="#FFFACD">Caçador de Raw</td>
    </tr>
</table>
<br>
<table>
    <tr>
	<td><font color="#FFFACD">Período do dia que está disponível:</td>
	</tr>
	<tr>
        <td><input type=radio name=periodo value=Manha><font color="#FFFACD">Manhã</td>
    </tr>
    <tr>
        <td><input type=radio name=periodo value=Tarde><font color="#FFFACD">Tarde</td>
    </tr>
    <tr>
        <td><input type=radio name=periodo value=Noite><font color="#FFFACD">Noite</td>
    </tr>
</table>
<br>
<table>
    <tr>
	<td><font color="#FFFACD">Idioma que domina:</td>
	</tr>
    <tr>
        <td><input type=radio name=idioma value=ingles><font color="#FFFACD">Inglês</td>
    </tr>
    <tr>
        <td><input type=radio name=idioma value=japones><font color="#FFFACD">Japonês</td>
    </tr>
    <tr>
        <td><input type=radio name=idioma value=coreano><font color="#FFFACD">Coreano</td>
    </tr>
    <tr>
        <td><input type=radio name=idioma value=chines><font color="#FFFACD">Chinês</td>
    </tr>
</table>
<br>
<p align = center>
    <input type=submit value="Enviar Formulario"><br></p>
    
</form>
</body>
</html>

<?php
if(isset($_POST["nome"])){

$conexao = mysqli_connect("bandodedadosdotrabalho.c60jxr9pcjqz.us-east-1.rds.amazonaws.com", "admin", "senha123");
mysqli_select_db($conexao,"mangas");

$nome = $_POST["nome"];
$email = $_POST["email"];
$cargo = $_POST["cargo"];
$idioma = $_POST["idioma"];
$periodo = $_POST["periodo"];

mysqli_query($conexao,"insert into mangas.scans values('$email','$nome','$cargo','$idioma','$periodo')");
mysqli_close($conexao);
}
?>
