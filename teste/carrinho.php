<?php session_start(); ?>   
   <html>
    <head>
    <style>

	</style>
	 <?php 
	 include("topo.php");
  
  if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
  } //adiciona produto 
  
  if(isset($_GET['acao'])){ 
    //ADICIONAR CARRINHO 
    if($_GET['acao'] == 'add'){ 
      $id = intval($_GET['id']); 
      if(!isset($_SESSION['carrinho'][$id])){ 
        $_SESSION['carrinho'][$id] = 1; 
      } else { 
        $_SESSION['carrinho'][$id] += 1; 
      } 
    } //REMOVER CARRINHO 
  
    if($_GET['acao'] == 'del'){ 
      $id = intval($_GET['id']); 
      if(isset($_SESSION['carrinho'][$id])){ 
        unset($_SESSION['carrinho'][$id]); 
      } 
    } //ALTERAR QUANTIDADE 
    if($_GET['acao'] == 'up'){ 
      if(is_array($_POST['prod'])){ 
        foreach($_POST['prod'] as $id => $qtd){
            $id  = intval($id);
            $qtd = intval($qtd);
            if(!empty($qtd) || $qtd <> 0){
              $_SESSION['carrinho'][$id] = $qtd;
            }else{
              unset($_SESSION['carrinho'][$id]);
            }
        }
      }
    }
          
   }
          
          
    ?>
	<style>
	div#carrinho-page{
		float:left;
		width: 970px;
		height:400px;
        background:#fff;
		margin:100px;
		padding:40px;
		text-align:left;
	}
	
	div#carrinho-page h1.title-page{
		font:35px calibri;
		text-align:center;
		font-weight:bold;
		border-top:3px solid #666;
		padding-top:10px;
		margin-top: 7px;
		float:left;
		width:965px;
		margin-bottom:15px;
	}
	
	div#carrinho-page table.carrinho{
		border-collapse:collapse;
		background:#fff;
		width:100%;
	}
	div#carrinho-page table.carrinho thead{
		font:18px calibri;
		font-weight:normal;
		calor:#666;
		background:#999;
	}
	div#carrinho-page table.carrinho thead tr th{
		padding:5px 0;
	}
	div#carrinho-page table.carrinho tbody{
		font:17px calibri;
		color:#666;
		text-align:center;

	}
	div#carrinho-page table.carrinho tbody tr th{
		padding: 5px 0;
	
	}
	div#carrinho-page table.carrinho tbody input{
		padding:4px;
		border: 1px solid #ccc;
		font: 17px calibri;
		color:#000;
		text-align: center;
		outline:none;
	}
	div#carrinho-page table.carrinho tbody input:focus{
		border-color:#333;
	}
	div#carrinho-page table.carrinho tbody img#proding{
		float:left;
		margin-right:5px;
		border:0;
	}
	div#carrinho-page table.carrinho tbody SPAN{
		float:left;
		vertical-aling:middie;
		margin-top:20px;
		font-size:18px;
	}
	div#carrinho-page table.carrinho tbody td.unitario{
		color:#09f;
		font-weight:bold;
	}
	div#carrinho-page table.carrinho tbody td.sub{
		color:#090;
		font-weight:bold;
	}
	div#carrinho-page table.carrinho tbody td.total{
		color:#000;
		font-weight:bold;
	}
	div#carrinho-page table.carrinho tbody td.last{
		padding:10px 12px;
	}
	div#carrinho-page input#update{
		float: left;
		padding:5px;
		background:#f5f5f5;
		border:1px solid #ccc;
		font: 15px calibri;
		color: #666;
		font-weight: bold;
		margin-top:8px;
	}
	 a#continuar{
		padding:10px;
		float:left;
		background:#000;
		border:1px solid #000;
		font:18px calibri;
		color:#fff;
		text-shadow:#000 0 1px 0;
		box-shadow: #000 0 1px 2px;
		margin-top:5px;
	}
	input#finalizar{
		padding:10px;
		float:right;
		background:#000;
		border:1px solid #000;
		font:18px calibri;
		color:#fff;
		text-shadow:#000 0 1px 0;
		box-shadow: #000 0 1px 2px;
		margin-top:5px;;
	}
	</style>
    </head>
	<div id="carrinho-page">
	<h1 class="title-page"><img src="car.png" width='40px' border="0" alt=""/>&nbsp &nbsp &nbsp &nbsp;Minhas Compras</h1>

    <body>
  <table cellpadding="0" cellspacing="0" border='1' class="carrinho">
    <thead>
      <tr>
        <th width="244">Produto</th>
        <th width="79">Quantidade</th>
        <th width="89">Pre&ccedil;o</th>
        <th width="100">SubTotal</th>
		<th width="64">Remover</th>
      </tr>
    </thead>
    <form action="?acao=up" method="post">
    <tfoot>
      <tr>
        <td colspan="5"></td>
      <tr>
      <td colspan="5"></td>
    </tfoot>
    <tbody>
     <?php
        if(count($_SESSION['carrinho']) == 0){
          echo '
        <tr>
          <td colspan="5">Não há produto no carrinho</td>
        </tr>
      ';
          } else {
                require("conexao.php");
                $total = 0;
                foreach($_SESSION['carrinho'] as $id => $qtd){
                        $sql   = "SELECT *  FROM produto WHERE id_produto= '$id'";
                        $qr    = mysqli_query($conexao,$sql) or die(mysqli_error());
                        $ln    = mysqli_fetch_assoc($qr);
                        $nome  = $ln['nome'];
                        $preco = number_format($ln['preco'], 2, ',', '.');
                        $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');
                        $total += $ln['preco'] * $qtd;
                         echo '
              <tr>       
                <td>'.$nome.'</td>
				
                <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                <td>R$ '.$preco.'</td>
                <td>R$ '.$sub.'</td>
                <td><a href="?acao=del&id='.$id.'">Remover</a></td>
                            </tr>';
                }
                $total = number_format($total, 2, ',', '.');
                echo '<tr>                         
              <td colspan="4">Total</td>
              <td>R$ '.$total.'</td>
                    </tr>';
          }
                   ?>
       
         </tbody>
		 
   
 </table>
		<input type="submit"  id="finalizar" value="Atualizar Carrinho"/>
		<a id="continuar" href="telainicial2.php">Continuar Comprando</a>
		 
 </form>
 </body>
 </div>
</html>