<?php
# Cabecalho
include 'header.html';

# Conteudo da página
$pagina = $_GET['pagina'];

#
#if($pagina == 'aulas'){
#    include './_views/aulas.php';
#}
#else{
    include './home.php';
#}

# Rodape
include 'footer.php';
