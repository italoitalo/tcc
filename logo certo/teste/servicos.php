<?php
session_start();

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
            <a href="index.php">
              <img src="img/Pura Sedução.png">
            </a>
  				</div>
  				<div class="coluna col8">
  					<nav>
  						<ul class="menu inline sem-marcador">
  							<li><a href="index.php">home</a></li>
  							<li><a href="clientes.php">clientes</a></li>
  							<li><a href="servicos.php">serviços</a></li>
  							<li><a href="sobre.php">sobre</a></li>
  							<li><a href="contato.php">contato</a></li>
                <br></br>
                <li><a href="login.php">login</a></li>
                <?php if( isset($_SESSION['user_id'])){ ?>
                <li><a href="deslogar.php">deslogar</a></li>
                <?php } ?>
                <li><a href="cadastro.php">cadastro</a></li>                
  						</ul>
  					</nav>
  				</div>
  			</header>  		
  		</div>  		
  	</div>  
  	<div class="linha">
  		<section>
  			<div class="coluna col4 sidebar">
  				<h3>O que fazemos?</h3>
          <img src="img/ideia.jpg" alt="" />
  				<ul>
            <li>Idendidade visual</li>
            <li>layout para sites</li>
            <li>Sites corporativos</li>
            <li>Edião de videos</li>
  				</ul>
  			</div>
  			<div class="coluna col8">
          <h2>identidade visual</h2>
          <p>Organizamos todos os elementos visuais que deve existir em uma empresa que esteja interesada em crescer </p>
          <h2>layout para sites</h2>
          <p>Cores, logos, estruturas listas.</p>
          <h2>sites corporativos</h2>
          <p>Construimos seu site corporativo</p>
          <h2>Edição de Vídeo</h2>
          <p>Editamos vídeos de maneira profissional, independente de qual tipo seja, Vlog, filme, aula....  </p>
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