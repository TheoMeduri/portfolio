<?php

   $nome = addslashes($_POST['nome']);
   $email = addslashes($_POST['email']);
   $telefone = addslashes($_POST['telefone']);
   $mensagem = addslashes($_POST['mensagem']);

   $para = "ymeduzx@gmail.com";
   $assunto = "Contato - Portfolio THEO MEDURI";


   $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

   $cabeca = "From: theomeduri@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

   if(mail($para,$assunto,$corpo,$cabeca)){
       echo("Obrigado pelo contato! retornarei em-breve!");
   }else{
    echo("Houve um erro ao entrar em contato :c");
   }

?>