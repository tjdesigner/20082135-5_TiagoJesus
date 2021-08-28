<?php 
  include('dados/dados.php');
  include('functions/functions.php');

  $page = ( isset($_GET['page']) ) ? $_GET['page'] : 'index';

  include('pages/componentes/header.php');

  switch($page) {
    case "contato":
      include('pages/contato.php');
      break;
    case 'localizacao':
      include('pages/localizacao.php');
      break;
    case 'brigadeiro':
      include('pages/detalhes/brigadeiro.php');
      break;
    case 'cocada':
      include('pages/detalhes/cocada.php');
      break;
    case 'doce_leite':
      include('pages/detalhes/doce_leite.php');
      break;
    case 'pe_moleque':
      include('pages/detalhes/pe_moleque.php');
      break;
    case 'torta_gelada':
      include('pages/detalhes/torta_gelada.php');
      break;
    case 'doce_abobora':
      include('pages/detalhes/doce_abobora.php');
      break;
    default:
      include('pages/quem_somos.php');
      break;
  }

  include('pages/componentes/footer.php');
?>
