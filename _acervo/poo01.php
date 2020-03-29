<?php
include '../header2.php'; # Cabecalho
?>
<section>
<nav>
<ul>
    <li>
        <a href='poo01.php'> Aula 01 - POO</a>
    </li>
    <li> 
        <a href='poo02.php'> Aula 02 - POO</a>
    </li>
    <li>
        <a href='poo03.php'> Aula 03 - POO</a>
    </li>
    <li>
        <a href='poo04.php'> Aula 04 - POO</a>
    </li>
</ul>
</nav>
<article>
<h2> Aula 01 - Classes e Métodos </h2>
<h3> Objetivo: </h3>
<ul>
<li>Criar classes e métodos</li>
<li>Criar objetos</li>
<li>Manipular métodos</li>
</ul>
<br/>
<fieldset>
<br/>
<?php
    require_once 'class01.php';
    $c1 = new Caneta();
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampada = false;
    
    # var_dump($c1);

    $c1->destampar();
    $c1->rabiscar();

?>
<br/>
</fieldset>
<?php
include '../footer2.php'; # Rodapé
?>