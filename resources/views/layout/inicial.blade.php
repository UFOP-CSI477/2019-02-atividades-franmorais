<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Início</title>


    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





    <style type="text/css">/*Configurações Padrões*/
		ul.menu, .menu li, .menu a{ margin:0; padding:0; list-style:none; text-decoration:none;}
		ul.menu ul{
			 position:absolute; display:none; box-shadow:3px 3px 2px #333;
			}/* Configurações nivel 1*/
			ul.menu{ 
				float:left; font-family:Verdana, Geneva, sans-serif; font-size:15px; border-radius:5px; padding:0 5px;
			}
			.menu li{ 
				float:left; width:auto; position:relative;
			}
			.menu li a{ 
				display:block; padding:0 20px; line-height:45px; height:45px; float:left; transition:all 0.1s linear;
				 }/* Configurações nivel 2*/
				 .menu li:hover > ul.submenu-1{
				  display:block; top:45px; left:0; padding:5px; width:200px; border-radius:0 0 5px 5px; 
				  }
				.menu ul.submenu-1 a{  
					width:160px; padding:0 20px; border-radius:5px;  
				}/* Configurações nivel 2*/
				.menu li:hover > ul.submenu-2{
				 display:block; top:0; left:195px; padding:5px; width:200px;  border-radius: 0 5px 5px 5px; 
				}
				.menu ul.submenu-2 a{
					  width:160px; padding:0 20px; border-radius:5px; 
				}/* Configurações nivel 3*/
				.menu li:hover > ul.submenu-3{ 
					display:block; top:0; left:195px; padding:5px; width:200px;  border-radius: 0 5px 5px 5px; 
				}
				.menu ul.submenu-3 a{  
					width:160px; padding:0 20px; border-radius:5px; 
				}/*Configurações de cores*//*nivel 1*/
				.menu{background:#CCC; }
				.menu a{ color:#000;}
				.menu li:hover > a{ background:#999;  color:#fff;}/*nivel 2*/

				.submenu-1{ background:#999;}.submenu-1 a{color:#fff;}
				.submenu-1 li:hover > a{ background:#666; }/*nivel 3*/
				.submenu-2{ background:#666;}
				.submenu-2 a{color:#fff;}
				.submenu-2 li:hover > a{ background:#333; }/*nivel 3*/
				.submenu-3{ background:#333;}
				.submenu-3 a{color:#fff;}
				.submenu-3 li:hover > a{ background:#000; }
			</style>
  </head>
  <body>
	<div>
		<h1>Bem-vindo(a)</h1>
		
		  <div>
			<ul class="menu"> 
				<li><a href="#">Inicio</a></li>  
				 <li><a href="#">Controle de TCC</a>   
				  <ul class="submenu-1"> 
				   <li><a href="#">Área Geral</a></li>   
				   			<li><a href="{{route('geral.listap')}}">Listar Professores</a></li>          
				    <li><a href="#">Área Administrativa</a></li> 
				    		<li><a href="{{route('geral.listap')}}">Listar Professores</a></li>  
				    		<li><a href="{{route('geral.relatorio')}}">Listar Projetos</a></li> 
				    		<li><a href="{{route('geral.listaaluno')}}">Listar Alunos</a></li> </u>  <br><br>
				  
				  
			 
				
				 <li><a href="#">Lista</a>   
				  <ul class="submenu-1">      
				   <li><a href="{{route('geral.listaaluno')}}">Listar Alunos </a></li>           
				    <li><a href="{{route('geral.listap')}}">Listar Professores</a></li> 
				    <li><a href="{{route('about')}}">About</a></li> </ul>
				  
			</li>    
			   
			
	</div>
		
	</div>
	<br><br><br><br><br><br>

	<input type="button" value="Fechar" onclick="window.close() " />

	


</body>