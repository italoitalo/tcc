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
  			<div class="coluna col8">
          <h2>Sobre nós:</h2>
          <p>Temos idade entre 17 e 18 anos, foi um grande trabalho para conseguimos conculuir o tcc, mas cada momento valeu a pena.</p>
          <h4> curiosidades: </h4>
          <p>75 % do grupo sabe resolver cubo mágico.</p>
          <p>possuimos um canal no youtube com 36 mil inscrito, nome do canal "cilck bait".</p>
          <p>Em nosso trabalho  da feira de ciências ligamos um computador de baixo da água.</p>
          <h2>porque programação?</h2>
          <p> pq dá dinheiro, um programa tu faz uns 100 reais facil </p>
          <p>sensação boa, devido a liberação de hormonios, incluindo o famoso gerado "ENDORFIMA" que gera a famosa satisfação e o vicio ao ato de programar</p>
          <p>u l t i m o   -  p a r a g r a f o . </p>

  			</div>
                <div class="coluna col4 sidebar">
          <img src="img/formatura.jpg" al
          t="" />
          <h3>Integrantes do grupo:</h3>
          <ul>
            <li>Ítalo Alves de Jesus</li>
            <li>Caynan da Silva</li>
            <li>Matheus Felipe</li>
            <li>Igor Moura</li>
          </ul>
          <h3>NOSSAS AREAS DE CONHECIMENTO:</h3>
          <ul>
            <li>HTML & CSS</li>
            <li>javascript e jquery</li>
            <li>PHP</li>
            <li>wordpress</li>
            <li>Pacote office</li>
          </ul>
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