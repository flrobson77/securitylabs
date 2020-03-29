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
Aula 03 - Metodos Acessores, Modificadores e Construtores
</h2>
<h3> Objetivo: </h3>
<ul>
<li>Compreender a função de cada metodo </li>
<li>Aplicação dos metodos na programação orientada a objetos </li>
</ul>
<br/>
<fieldset>
<br/>
<pre>
<?php
    require_once 'class03.php';
    $c1 = new Caneta("Faber", "Verde", 2.0);
    //$c1->setModelo("BIC Cristal");
    //$c1->setCor("Azul");
    //$c1->setPonta(0.5);
    //$c1->carga = 90;
    //$c1->tampada = false;    
    
    //$c1->tampar();
    //$c1->rabiscar();
    $c2 = new Caneta("BIC", "Preta", 2.0);

    print_r($c1);
    print_r($c2);
    print("Você tem uma caneta {$c1->getModelo()} na cor {$c1->getCor()} de
           ponta {$c1->getPonta()}<br/>");
    print("Você tem uma caneta {$c2->getModelo()} na cor {$c2->getCor()} de
           ponta {$c2->getPonta()}<br/>");
?>
</pre>
<br/>
</fieldset>
</p>
<?php
include '../footer2.php'; # Rodapé
?>