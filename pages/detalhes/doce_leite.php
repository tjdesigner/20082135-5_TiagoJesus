<?php 
    include('dados/dados.php')
?>
    <div class="page-container">
        <div class='container content'>
            <div class='row mb-4 mt-5'>
                <h2><?php echo $produtos[2]['titulo']?></h2>
            </div>
            <div class='row'>
                <div class='col-12'> 
                    <div>
                        <img class='img-detalhes mb-3' src="<?php echo $produtos[3]['img']?>">
                    </div>
                    <p class='descricao'><?php echo $produtos[3]['descricao']?></p>
                    <a href="javascript:history.go(-1)" class='btn btn-primary'>Voltar</a>
                </div>
            </div>
        </div>
    </div>
