<html>
<meta charset=UTF-8>
<body bgcolor="#434343">
<br>
<p align=center> <font size=6 face=timesnewroman color="#FFFACD"><b> FAÇA SEU CADASTRO! <br></b>
<br>
<font size=5 face=timesnewroman>
Preencher o formulário abaixo nos permitirá lhe enviar ainda mais indicações que se encaixem nas suas preferências!
</p>
<form method=POST>
<font size=4>
<p align=justify>
<br>
<br>
E-mail: <input type=text name=email>
<br>
<br>
Nome: <input type=text name=nome>
<br>
<br>
Nascimento: <input type=text name=nascimento>
<br>
<br>
Sexo: <select name=sexo> 
<option value=masculino>Masculino
<option value=feminino>Feminino
<option value=outro>Outros
</select>
<br>
<br>
Já leu algum mangá antes?
<input type=radio name=leitor value=sim><font color="#FFFACD">Sim
<input type=radio name=leitor value=nao><font color="#FFFACD">Não
<br>
<br>
Marque abaixo os gêneros que gostaria de receber indicações:
<br>
<br>
<table>
<tr>
<td><input type=checkbox name=acao value=X><font color="#FFFACD">Ação</td>
<td><input type=checkbox name=aventura value=X><font color="#FFFACD">Aventura</td>
<td><input type=checkbox name=artesMarciais value=X><font color="#FFFACD">Artes Marciais</td>
<td><input type=checkbox name=comedia value=X><font color="#FFFACD">Comédia</td>
</tr>
<tr>
<td><input type=checkbox name=drama value=X><font color="#FFFACD">Drama</td>
<td><input type=checkbox name=diaADia value=X><font color="#FFFACD">Dia a Dia</td>
<td><input type=checkbox name=escolar value=X><font color="#FFFACD">Escolar</td>
<td><input type=checkbox name=espaco value=X><font color="#FFFACD">Espaço</td>
</tr>
<td><input type=checkbox name=esportes value=X><font color="#FFFACD">Esportes</td>
<td><input type=checkbox name=fantasia value=X><font color="#FFFACD">Fantasia</td>
<td><input type=checkbox name=ficcaoCientifica value=X><font color="#FFFACD">Ficção Científica</td>
<td><input type=checkbox name=historico value=X><font color="#FFFACD">Histórico</td>
</tr>
<td><input type=checkbox name=horror value=X><font color="#FFFACD">Horror</td>
<td><input type=checkbox name=josei value=X><font color="#FFFACD">Josei</td>
<td><input type=checkbox name=magia value=X><font color="#FFFACD">Magia</td>
<td><input type=checkbox name=militar value=X><font color="#FFFACD">Militar</td>
</tr>
<td><input type=checkbox name=misterio value=X><font color="#FFFACD">Mistério</td>
<td><input type=checkbox name=musica value=X><font color="#FFFACD">Música</td>
<td><input type=checkbox name=policial value=X><font color="#FFFACD">Policial</td>
<td><input type=checkbox name=psicologico value=X><font color="#FFFACD">Psicológico</td>
</tr>
<td><input type=checkbox name=robos value=X><font color="#FFFACD">Robôs</td>
<td><input type=checkbox name=romance value=X><font color="#FFFACD">Romance</td>
<td><input type=checkbox name=samurai value=X><font color="#FFFACD">Samurai</td>
<td><input type=checkbox name=seinen value=X><font color="#FFFACD">Seinen</td>
</tr>
<td><input type=checkbox name=shoujo value=X><font color="#FFFACD">Shoujo</td>
<td><input type=checkbox name=shounen value=X><font color="#FFFACD">Shounen</td>
<td><input type=checkbox name=sobrenatural value=X><font color="#FFFACD">Sobrenatural</td>
<td><input type=checkbox name=superpoderes value=X><font color="#FFFACD">Superpoderes</td>
</tr>
</table>
</p>
<br>
<p align=center>
<input type=submit value="Enviar Formulário"> 
<input type=reset value="Limpar Campos">
<a href=alterarcadastro.php><input type=button
value="Alterar Cadastro"></a>
</form>
</body>
</html>
<?php
if(isset($_POST["email"])){
//usuário e senha no phpmyadmin
$conexao=mysqli_connect("bandodedadosdotrabalho.c60jxr9pcjqz.us-east-1.rds.amazonaws.com", "admin", "senha123");
mysqli_select_db($conexao,"mangas");
$email = $_POST["email"];
$nome = $_POST["nome"];
$nascimento = $_POST["nascimento"];
$sexo = $_POST["sexo"];
$leitor = $_POST["leitor"];
$acao = $_POST["acao"];
$aventura = $_POST["aventura"];
$artesMarciais = $_POST["artesMarciais"];
$comedia = $_POST["comedia"];
$drama = $_POST["drama"];
$diaADia = $_POST["diaADia"];
$escolar = $_POST["escolar"];
$espaco = $_POST["espaco"];
$esportes = $_POST["esportes"];
$fantasia = $_POST["fantasia"];
$ficcaoCientifica = $_POST["ficcaoCientifica"];
$historico = $_POST["historico"];
$horror = $_POST["horror"];
$josei = $_POST["josei"];
$magia = $_POST["magia"];
$militar = $_POST["militar"];
$misterio = $_POST["misterio"];
$musica = $_POST["musica"];
$policial = $_POST["policial"];
$psicologico = $_POST["psicologico"];
$robos = $_POST["robos"];
$romance = $_POST["romance"];
$samurai = $_POST["samurai"];
$seinen = $_POST["seinen"];
$shoujo = $_POST["shoujo"];
$shounen = $_POST["shounen"];
$sobrenatural = $_POST["sobrenatural"];
$superpoderes = $_POST["superpoderes"];
mysqli_query($conexao,"insert into mangas.indicacao values('$email','$nome','$nascimento','$sexo','$leitor','$acao','$aventura','$artesMarciais','$comedia','$drama','$diaADia','$escolar','$espaco','$esportes','$fantasia','$ficcaoCientifica',
'$historico','$horror','$josei','$magia','$militar','$misterio','$musica','$policial','$psicologico','$robos','$romance','$samurai','$seinen','$shoujo','$shounen','$sobrenatural','$superpoderes')");

mysqli_close($conexao);
}
?>