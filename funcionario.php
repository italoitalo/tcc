<?php
session_start();
if(!isset ($_SESSION['funcionario']) == true or $_SESSION['funcionario'] != 1)
{
  header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="UTF-8">
    <title>XXX-Shop</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  </head>
  <body>
  	<div class="header">
  		<div class="linha">
  			<header>
  				<div class="coluna col4">
            <a href="funcionario.php">
              <img src="img/Pura Sedução.png">
            </a>
  				</div>
  				<div class="coluna col8">
  					<nav>
  						<ul class="menu inline sem-marcador">
  							<li><a href="funcionario.php">home</a></li>
  							<li><a href="clientes.php">clientes</a></li>
  							<li><a href="servicos.php">serviços</a></li>
  							<li><a href="sobre.php">sobre</a></li>
                <li><a href="contato.php">contato</a></li>
                <br></br>
                <li><a href="login.html">login</a></li>
                <li><a href="deslogar.php">deslogar</a></li>
                <li><a href="visualizar.php">estoque</a></li>                
  							<li><a href="cadastro de produto.php">criar produto</a></li>                
  						</ul>
  					</nav>
  				</div>
  			</header>  		
  		</div>  		
  	</div>  
  	<div class="linha">
  		<section>
  			<div class="coluna col3 sidebar">
  				<h3>sites parceiros</h3>
  				<ul class="sem-marcador sem-padding">
  					<li><a href="https://www.google.com.br/">google</a></li>
  					<li><a href="https://www.youtube.com/watch?v=zYrJZGBlDQ8&t=39s">Click bait</a></li>
  					<li><a href="https://www.rb.com/br/marcas/olla/">Olla</a></li>
  					<li><a href="">ítalo's</a></li>
  					<li><a href="https://www.youtube.com/channel/UC4ITvC3VRojCY7zHs6iu1qQ">Ramon Kawai</a></li>
  				</ul>
  				<a href="clientes.html" class="botao"> ver todos &raquo;</a>
  			</div>
  			<div class="container paineis">
<section class="painel novidades">
  <h2>PRODUTOS</h2>
 <?php
  include('php/conexion.php');
  $res = "SELECT * FROM produtos";  
  $query = $con->query($res);
  $cont_linha=1;
  while ($registros=$query->fetch_array()) {
    $registros["id"];
    $id_produto=$registros["id"];
    $nome=$registros['nome']; 
    $imagem = $registros['foto'];
    $quantidade= $registros['quantidade'];
  if ($cont_linha==1)
  {
  ?>
    <ol>
      <li>
        <tr>
          <td>
            <table>
              <tr>
               <th>
                <img width='120' height='50' src="php/uploads/<?php echo $imagem; ?>">
              </th>
            </tr>
        </tr>
      <tr >
      <th><h1><?php echo $registros["nome"]; ?></h1></th>
      </tr>
      <tr>
      <th><h2>R$ <?php echo $registros["preco"]; ?></h2></th>
      </tr>
      <tr>
      <th><?php echo'<a href="produto.php?foto='.$registros['foto'].'&preco='.$registros['preco'].'&cor='.$registros['cor'].'&quantidade='.$quantidade.'&fabricante='.$registros['fabricante'].'&descricao='.$registros['mensagem'].'&id='.$registros['id'].'&nome='.$registros['nome'].'" class="botao">Comprar</a>';?></th>
      </tr>
      </table>
      </td>
    </li>
    <?php 
    $cont_linha++;
    }
    elseif (($cont_linha==2) or ($cont_linha==3))
    {
    ?>
    <li>
      <td>
      <table>
      <tr>
      <th>
<img width='120' height='50' src="php/uploads/<?php echo $imagem; ?>">
      </th>
      </tr>
      </tr>
      <tr>
      <th><h1><?php echo $registros["nome"]; ?></h1></th>
      </tr>
      <tr>
      <th><h2>R$ <?php echo $registros["preco"]; ?></h2></th>
      </tr>
      <tr>
      <th><?php echo'<a href="produto.php?foto='.$registros['foto'].'&preco='.$registros['preco'].'&cor='.$registros['cor'].'&quantidade='.$quantidade.'&fabricante='.$registros['fabricante'].'&descricao='.$registros['mensagem'].'&id='.$registros['id'].'&nome='.$registros['nome'].'" class="botao">Comprar</a>';?></th>
      </tr>
      </table>
      </td>
  </li>
    
  <?php
  $cont_linha++;
  }
  else
  {
  ?>
  <li>
    <td>
    <table>
    <tr>
    <th>
<img width='120' src="php/uploads/<?php echo $imagem; ?>">
    </th>
    </tr>
    </tr>
    <tr>
    <th><h2><?php echo $registros["nome"]; ?></h2></th>
    </tr>
    <tr>
    <th><h2>R$ <?php echo $registros["preco"]; ?></h2></th>
    </tr>
    <tr>
    <th><?php echo'<a href="produto.php?foto='.$registros['foto'].'&preco='.$registros['preco'].'&cor='.$registros['cor'].'&quantidade='.$quantidade.'&fabricante='.$registros['fabricante'].'&descricao='.$registros['mensagem'].'&id='.$registros['id'].'&nome='.$registros['nome'].'" class="botao">Comprar</a>';?></th>
    </tr>
    </table>
    </td>
    </tr>
  </li>
  </ol>
  <?php
  $cont_linha=1;
  }
  } 
  
  ?>



</section>
</div>
      </section>
  	</div>
<div class="conteudo-extra">
      <div class="linha">
        <div class="coluna col7">
          <section>
            <h1>Histórias de nossas usuárias:</h1>
            <h2>Sonho ou realidade?</h2>
            <p>Já era tarde e meu amigo Flávio ainda não tinha aparecido. Ele havia combinado de chegar às nove, e mesmo às dez eu ainda o esperava, ansiosa. “Será que desistiu?”, pensei. Ele tinha telefonado naquela tarde dizendo que precisava conversar. Respondi que estaria ocupada, mas ele insistiu. Na verdade, nós dois sabíamos qual seria a conversa…<a href="https://www.altoastral.com.br/contos-eroticos-2/"> leia mais &raquo;</a></p>
            <h2>Roupa de academia</h2>
            <p>Ainda que com a correria do dia a dia seja difícil conciliar o trabalho com um tempinho para cuidar da gente, não abro mão de ir toda semana à academia. Mantenho essa rotina há pelo menos dois anos porque é graças a ela que meu corpo fica muito mais bonito e sarado, e assim, qualquer vestido que eu use marca muito mais minhas curvas.<a href="https://www.altoastral.com.br/contos-eroticos-inspirar/"> leia mais &raquo;</a></p>
          </section>
        </div>
        <div class="coluna col5">
          <h3>Ultimas noticias no mundo da moda feminina:</h3>
          <ul class="sem-marcador sem-padding noticias">
            <li>
              <img src="img/sexy.png" alt="" />
              <h4>'Cinco vestidos por dia não era suficiente', diz mulher com transtorno de compras.</h4>
              <p>"transtorno do comportamento compulsivo" em sua lista da Classificação Internacional de Doenças.<a href="https://g1.globo.com/bemestar/noticia/cinco-5-vezes-por-dia-nao-era-suficiente-diz-mulher-com-transtorno-de-vicio-em-sexo.ghtml"> leia mais &raquo;</a></p>
            </li>
            <li>
              <img src="img/cuck.png" alt="" />
              <h4>Adolescentes britânicos trocam relacionamentos por roupas.</h4>
              <p>adolescentes estão se tornando menos propensos a se relacionar, têm preferido passar o tempo com a família e ter relacionamentos amorosos online... <a href="https://g1.globo.com/bemestar/noticia/2018/07/18/adolescentes-britanicos-trocam-sexo-por-relacionamentos-online-e-familia-e-taxa-de-gravidez-cai-indica-estudo.ghtml">leia mais &raquo;</a></p>
            </li>
            <li>
              <img src="img/aviao.png" alt="" />
              <h4>O que pode acontecer dentro de um avião?</h4>
              <p>O caso que do casal que....<a href="https://g1.globo.com/mundo/noticia/o-que-pode-acontecer-quando-alguem-e-flagrado-fazendo-sexo-no-aviao.ghtml">leia mais &raquo;</a></p>
            </li>


          </ul>
          
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="linha">
        <footer>
          <div class="colunha col12">
            <span>&copy; 2018 - Pura sedução web</span>
          </div>
        </footer>
        
      </div>
    </div>

  </body>
</html>