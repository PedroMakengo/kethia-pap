<?php
  // Efectuando a verificação do login
  if(isset($_POST['logar'])):
    // Pegar os dados enviado apartir do front-end
    $email = $_POST['email'];
    $pass  = md5(md5($_POST['senha']));

    $parametros = [
      ":email"  => $email,
      ":senha"   => $pass 
    ];

    $efetuarLoginComEmailAndSenha = new Model();  
    $loginTipoUsuarioAdmin = $efetuarLoginComEmailAndSenha->EXE_QUERY("SELECT * FROM", $parametros);

    if($loginTipoUsuarioAdmin):
     
    endif;
  endif;
