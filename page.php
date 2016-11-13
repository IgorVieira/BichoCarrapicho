<?php
    get_header();


$nome = $_POST['form-nome'];
$email = $_POST['form-email'];
$fone  = $_POST['form-fone'];
$mensagem = $_POST['form-mensagem'];

$formularioEnviado = isset($nome) && isset($email) && isset($mensagem) && isset($fone);

if($formularioEnviado) {
	$enviou = enviar_e_checar_email($nome, $email, $mensagem, $fone);

	if($enviou) { ?>
		<span class="email-sucesso">Seu e-mail foi enviado com sucesso!</span>
	<?php } else { ?>
		<span class="email-fracasso">Desculpe, ocorreu um erro, seu e-mail não foi enviado!</span>
	<?php } 
}
?>

<div class="flex-container">
    <div class="flex-item"> 
        <?php
         woocommerce_content();
        ?> 
    </div>
</div>
  
  <?php if( have_posts() ) {
                    while( have_posts() ) {
                        the_post(); 
        ?>

            
       
           
       
           
 
        <?php
            }
        }
        ?>

       <?php if(is_page('contato')) {?>
        
            <div class="container">
                <div class="flex-container">
                    <div class="flex-boxcontact">
                         <form method="post">
                            <label for="">Nome</label><br>
                            <input id="form-nome" type="text" placeholder="Seu nome aqui" name="form-nome">
                            <br>
                            <label for="">Email</label><br>
                            <input id="form-email" type="email" placeholder="email@exemplo.com.br" name="form-email">
                            <br>
                            <br>
                            <label for="">Telefone</label><br>
                            <input id="form-fone" type="text" placeholder="Seu numero aqui" name="form-fone">
                            <br>
                            <label for="">Comentário</label><br>
                            <textarea id="form-mensagem" name="form-mensagem"></textarea><br>
                            <input type="submit" class="btn" value="Enviar">
                         </form>  
                    </div>
                    <div class="flex-boxcontact">
                   
                     
                    </div>
                </div>

                
            </div>
         <?php  }  ?>


        

   
<?php
get_footer();
?>




        


