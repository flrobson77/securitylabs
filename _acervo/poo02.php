<?php
# Cabecalho
include '../header2.php';
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
<h2>
Aula 02 - Aplicando técnicas de visibilidade em classe
</h2>
<h3> Objetivo: </h3>
<ul>
<li>Conhecer a função de cada tipo de visibilidade </li>
<li>Aplicar os atributos de visibilidade nos metodos e atributos </li>
</ul>
<br/>
<fieldset>
<br/>
<?php
    require_once 'class02.php';
    $c1 = new Caneta();
    $c1->modelo = "BIC Cristal";
    $c1->cor = "Azul";
    //$c1->ponta = 0.5;
    //$c1->carga = 90;
    //$c1->tampada = false;
    
    
    $c1->tampar();
    $c1->rabiscar();

    print_r($c1);
?>
<br/>
</fieldset>
</p>
<?php
include '../footer2.php'; # Rodapé
?>