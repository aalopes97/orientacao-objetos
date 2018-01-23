 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body style="padding:0; margin:0;">

     <?php
     require 'cliente.php';

     $cliente = new Cliente();
     $cliente->nome  = $_POST['nome'];
     $cliente->codigo = $_POST['codigo'];
     ?>

       <p>Olá <?= $cliente->nome?></p>
       <p>Código <?= $cliente->codigo?></p>

   </body>
 </html>
