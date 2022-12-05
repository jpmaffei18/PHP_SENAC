<?php

//QUESTAO 1-----------------------------------------------------------------

/*
$valor = readline("digite um número");
  
if ($valor % 2 == 0) {echo "Numero Par";} else {echo "Numero Impar";}
*/

//QUESTAO 2-----------------------------------------------------------------

/*
$A = readline("digite um número: ");
$B = readline("digite outro número: ");

if ($A > $B ) {echo $B,  "," , $A;} else {echo $A, "," ,$B ;} 

*/

//QUESTAO 3-----------------------------------------------------------------

/*
$N1 = readline("Digite a primeira nota: ");
$N2 = readline("Digite a segunda nota: ");
$N3 = readline("Digite a terceira nota: ");

$notas = array($N1, $N2, $N3);

$media = array_sum($notas) / count($notas);

$media = number_format($media, 2, '.', '');


if ($media >= 6 ) {echo "N1 = ",$N1," | N2 = ",$N2," | N3 = ", $N3," | MG = ", $media, " {Aprovado}";}

else {echo "N1 = ",$N1," | N2 = ",$N2," | N3 = ", $N3," | MG = ", $media, " {Reprovado}";}

*/

//QUESTAO 4-----------------------------------------------------------------

/*
$nome = readline("Qual seu nome?: ");
$idade = readline("Qual sua idade?: ");

if ($idade >= 18) {echo $nome, " é maior de idade e tem ", $idade, " anos";}

else {echo $nome, " é menor de idade e tem ", $idade, " anos";}

*/



//QUESTAO 5-----------------------------------------------------------------


/*
$numero = readline("Digite um numero de 1 a 12: ");

switch ($numero) {
  
  case 1;
  echo "1- Janeiro";
  break;

  case 2;
  echo "2- Fevereiro";
  break;
  
  case 3;
  echo "3- Março";;
  break;
  
  case 4;
  echo "4- Abril";
  break;

  case 5;
  echo "5- Maio";
  break;

  case 6;
  echo "6- Junho";
  break;

  case 7;
  echo "7- Julho";
  break;

  case 8;
  echo "8- Agosto";
  break;

  case 9;
  echo "9- Setembro";
  break; 

  case 10;
  echo "10- Outubro";
  break; 

  case 11;
  echo "11- Novembro";
  break;

  case 12;
  echo "12- Dezembro";
  break; 

  default;
  echo "Não existe mês correspondente";
}
*/


