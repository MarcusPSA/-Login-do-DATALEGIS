<?php header("Content-type: text/html; charset=iso-8859-1");
session_start();
if(isset( $_SESSION['user'] )){
session_destroy();
}
?>
<!DOCTYPE html>

<html lang="pt-br">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
       <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>  
           <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"> </script>
 
     
       <title>Enterprise Consultoria</title>
   
   <style>
   
   body{
   background-color: #F5F8FA;
   }
   
   #header {
    position: fixed;
    left: 0px;
    top: 0px;
	height: 65px;
	width: 100%;
	background-color: #FFF;
	border-bottom: 1px solid #E1E8ED;
	box-shadow: 0 7px 7px -7px #808080;

	}
   
   #header img {
    position: relative;  
  	left: 35px;
    top:10px;
	
	}
   
   
   #login-box{
	
	padding: 0px 15px 0px 15px;
	height: 520px;
	width: 500px;  	
	background: #ffffff; 
	margin: 100px auto 0;
	border-radius: 10px; 
	border-width: 1px;
	border-color: #E1E8ED;
	border-style:  solid;
	box-shadow: 0px 7px 7px -7px #808080;
	
	}    
 
  #login-label{
	
	position:relative;
	top: 30px;
	height: 80px;
	color:  #747C81;
    text-align: center;
     text-shadow: 1px 1px 1px #808080;
   	}  
  #login-label  small{
  font-size: 18px;
   text-shadow: none;
  }
  
  #login-form{
    color:  #747C81;
	position:relative;
	top: 60px;
	
   	}  
   	
   	#login-fail{
  position:relative;
  top: 40px;
   	}  
  
   
   </style>
   
   
   </head>
   
   <body>
     
   <div id="header">
   <img   src="img/logo.png" >
   </div>
   
 
   
   <div id="login-box">
   <div id="login-label"> <h2> Já está cadastrado no DataLegis? </h2>
   <small>Faça seu login e continue com o processo de certificação!</small>
   </div>
 

 
 	 <div id='login-fail'> 
  </div>


  
  <div id="login-form">
   <form method="post">
  <div class="form-group">
    <label for="email">Login:</label>
    <input type="text" class="form-control input-lg" id="email" name="txtLogin">
  </div>
  <div class="form-group">
    <label for="pwd">Senha:</label>
    <input type="password" class="form-control input-lg" id="senha" name="txtSenha">
  </div>
  
  <button type="button" id="BtnLogin" class="btn btn-primary btn-lg btn-block" name="BtnLogin" value="BtnLogin" >Entrar no DataLegis</button>
</form>
 </div>
  </div>

   </body>
   
    <script>
$(document).ready(function() {
	//definir evento "onclick" do elemento (botao) ID btnFiltroLei 
	$("#BtnLogin").click(function() {

		//capturar o valor dos campos do fomulario
		
		var txtLogin  = $("input[name=txtLogin]").val();
		var txtSenha =  $("input[name=txtSenha]").val();
		

		//usar o metodo ajax da biblioteca jquery para postar os dados em processar.php
		$.ajax({
			"url": "LoginTeste.php",
			"dataType": "html",
			"data": {
				"txtLogin" :txtLogin,
				"txtSenha" :txtSenha,
				
			},
			"success": function(response) {
				//em caso de sucesso, a div ID=saida recebe o response do post
				$("div#login-fail").html(response);
			}

		});
	});
});






</script>
 
   
</html>