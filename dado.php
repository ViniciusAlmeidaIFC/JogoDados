'<?php
   //recupera valores caso existir.
   $vezes = 2;
   ?>

<html>

<head>
   <title>Jogo de Dado</title>
</head>

<body>
   <center>
      <img src="banner.gif" border="0" alt="Vamos Jogar">
      <br>
      <font face="verdana" size="4"><b>JOGO DE DADOS</b></font><br>
      <font face="verdana" size="2" color="blue">
         Para Jogar: muito simples. Irá ser lançado 4 dados 2 para o usuário e 2 para o computador aquele que obter a
         a maior soma ganha!</font>
      <form method="post">
         <font face="verdana" size=2"><b>
               <input type="hidden" name="sentinela" value="1">
               <input type="submit" value="JOGAR" style="font: 10px verdana #000000">
         </font>
      </form>

      <?php
      //se for a primeira vez para aqui.
      if (!isset($_POST['sentinela'])) {
         $cont = 1;
        '\n<br>'; 
      }

      //se for a primeira vez nao processa abaixo.
      if (!isset($cont)) {


               //inicia um loop.
               for ($i = 0; $i < $vezes; $i++) {
                  //armazena valores do loop em um array.
                  //e esses numeros armazenados v�o ser aleat�rios entre 1 a 6.
                  $jogador[] = mt_rand(1, 6);
               }

               for ($i = 0; $i < $vezes; $i++) {
                  $CPU[] = mt_rand(1, 6);
               }

               //zero o total do jogador.
               $tjogador = 0;
               $tCPU = 0;


               //inicia outro loop para mostrar os valores armazenados.
               for ($i = 0; $i < $vezes; $i++) {
                  //armazena o valor do array na variavel $vc.
                  //exemplo: $jogador[0] = 1; $jogador[3] = 5, $jogador[2] = 4.
                  //isso � claro que o numero de elementos no array vai depender do numero que o usuario digitar.
                  $vc = $jogador[$i];


                  switch ($vc) {
                     case 1:
                        echo "\n<br> <img src='face1.gif' border='0'>   ";
                        break;
                     case 2:
                        echo "\n<br> <img src='face2.gif' border='0'>   ";
                        break;
                     case 3:
                        echo "\n<br> <img src='face3.gif' border='0'>   ";
                        break;
                     case 4:
                        echo "\n <br><img src='face4.gif' border='0'>   ";
                        break;
                     case 5:
                        echo "\n <br> <img src='face5.gif' border='0'>   ";
                        break;
                     case 6:
                        echo "\n <br> <img src='face6.gif' border='0'>   ";
                        break;
                  }
                  $tjogador += $vc;
               }
               //mostra o total do Usuário.
               echo "\n<br>\n<font face='verdana' size='2' color='#000080'>\n<b>Total Usuário :" . $tjogador . "</b>\n</font>\n<br>\n<br>";

               for ($i = 0; $i < $vezes; $i++) {
                  $vc2 = $CPU[$i];
                  switch ($vc2) {
                     case 1:
                        echo "\n<br> <img src='face1.gif' border='0'>   ";
                        break;
                     case 2:
                        echo "\n<br> <img src='face2.gif' border='0'>   ";
                        break;
                     case 3:
                        echo "\n<br> <img src='face3.gif' border='0'>   ";
                        break;
                     case 4:
                        echo "\n <br><img src='face4.gif' border='0'>   ";
                        break;
                     case 5:
                        echo "\n <br> <img src='face5.gif' border='0'>   ";
                        break;
                     case 6:
                        echo "\n <br><img src='face6.gif' border='0'>   ";
                        break;
                  }


                  //armazena em $tCPU o valor dele mesmo + $vc2.
                  $tCPU += $vc2;
               }
               //mostra o total do CPU.
               echo "\n<br>\n<font face='verdana' size='2' color='#000080'>\n<b>Total CPU :" . $tCPU . "</b>\n</font>\n<br>\n<br>";
               //informa o vencedor
               if ((int)$tjogador < (int)$tCPU) {
                  echo "<font face='verdana' size='4' color='red'><b>CPU Ganhou.   :(</b></font>";
               } else if ((int)$tCPU < (int)$tjogador) {
                  echo "<font face='verdana' size='4' color='red'><b> Usuário GANHOU !!!    :)</b></font>";
               } else {
                  echo "<font face='verdana' size='4' color='red'><b> Empatou !!!    :|</b></font>";
               }

               echo "\n<font face='verdana' size='2'>\n<br>\nPara jogar novamente clique em jogar \n </font>";
            }
      ?>
      <br><br><br>
      <font face='verdana' size='2' color='#000080'>
         <b>
            Desenvolvido por: Vinicius Almeida
         </b>
      </font>
   </center>
</body>

</html>