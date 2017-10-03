

<link rel="stylesheet" href="estilo.css">

<?php
$nome_aluno = $_POST['nome_aluno'];
$nome_disciplina = $_POST['nome_disciplina'];
$nome_curso = $_POST['nome_curso'];
$link = $_POST['link'];
$nota_va01 = $_POST['nota_va01'];
$nota_va02 = $_POST['nota_va02'];
$nota_va03 = $_POST['nota_va03'];
$nota_trab = $_POST['nota_trabalhos'];
$nome_prof = $_POST['nome_prof'];
$nome_coord = $_POST['nome_coordenador'];
$desempenhova01 = ($nota_va01 * 100) / 15;
$desempenhova02 = ($nota_va02 * 100) / 25;   
$desempenhova03 = ($nota_va03 * 100) / 35;
$desempenhoTrab = ($nota_trab * 100) / 25;
$total = $nota_va01 + $nota_va02 + $nota_va03 + $nota_trab;
$elogio = "";

if ($total >= 90) {
	$elogio = "excelente";
}
else if ($total >= 80 && $total <90) {
	$elogio = "ótimo";
}
else if ($total >= 70 && $total <80) {
	$elogio = "bom";
}
else if ($total >= 60 && $total <70) {
	$elogio = "ruim";	
}
else {
	$elogio = "péssimo";
}

echo "<img src = ". $link ." 
       alt = ". $link ."
       title = ". $link ."
	   id = imagem>"; 

echo '<h1 align = "center"> Declaração  </h1>' ;

if ($total >= 60) {
 
 echo '<p align=center>  Declaramos para os devidos fins, que ' . $nome_aluno. ' concluiu satisfatoriamente as atividades da disciplina Comércio Eletrônico do curso de Sistemas de Informação. </p>';

}

else {
  
 echo '<p align=center>  Declaramos, para os devidos fins, que ' . $nome_aluno. '  <span> NÃO </span> concluiu satisfatoriamente as atividades da disciplina Comércio Eletrônico do curso de Sistemas de Informação. </p>';
}
  
echo '<p align=center>  Segue o desempenho de ' . $nome_aluno  . '   : </p>';
echo "<table border ='1'  align='center'>
        <tr>
          <th>
            Critério
          </th>
          <th>
            Valor Total
          </th>
          <th>
            Nota do Aluno
          </th>
		  <th>
			Desempenho (%)
		  </th>
          </tr>
            <tr>
          <td align = center>
            Prova 01
          </td>
          <td align =center>
            15
          </td>
          <td align = center>
            ". $nota_va01."
          </td>
		  <td align = center>
		   ".round(number_format($desempenhova01,2,",",".") )."%
		  </td>
          </tr>   
           <tr>
          <td align = center>
            Prova 02
          </td>
          <td align = center>
            25
          </td>
          <td align = center>
            ". $nota_va02."
          </td>
		  <td align = center>
			". round ( number_format ($desempenhova02, 2,'.',',') )."%
		  </td>
          </tr>
           <tr>
          <td align = center>
            Prova 03
          </td>
          <td align = center>
            35
          </td>
          <td align = center>
            " . $nota_va03. "
          </td>
		  <td align = center>
			" . round ( number_format ($desempenhova03,2,'.',',') )."%
		  </td>
          </tr>
		   <tr>
          <td align = center>
            Trabalhos
          </td>
          <td align = center>
            25
          </td>
          <td align = center>
            ". $nota_trab."
          </td>
		  <td align = center>
			". round ( number_format ($desempenhoTrab,2,'.',',') )."%
		  </td>
          </tr>
          </table>";
		  		  
		  echo '<p align=center>  Com esse resultado, o conceito de ' . $nome_aluno  . ' foi <i> '. $elogio .' </i> já que sua nota total foi de <strong> '. $total .' </strong> pontos. </p>';
          
      echo '<p align = "center"> Belo Horizonte, ' . date ('d/m/Y') . '</p> <br />' ;
      echo '<p align = center>' . "_______________________" . '<br />';
	  
      echo  $nome_prof . '- Professor(a) <p/> <br />'; 
      
      echo '<p align = center>' . "_______________________" . '<br />';
      echo $nome_coord . '- Coordenador(a) <br />'; 
          
?>