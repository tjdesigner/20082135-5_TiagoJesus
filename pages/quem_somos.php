<?php include('dados/dados.php') ?>

<div class="page-container">

    <div class="container content">
        <div class="row mb-5 mt-5">
            <div class="col">
                <?php echo $quem_somos_c1 ?>
            </div>
            <div class="col">
                <?php echo $quem_somos_c2 ?>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($produtos as $index => $produto) {
                    echo "
                        <div class='col-4 mb-4'> 
                            <div class='card'>
                                <div class='img-container'> <img class='card-img-top' src=" . $produto['img'] . "></div>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . $produto['titulo'] . "</h5>
                                    <p class='descricao text-truncate'>" . $produto['descricao'] . "</p>
                                    <a href=" . "index.php?page=" . $produto['link'] . " class='btn btn-primary'> Saiba mais </a>
                                </div>
                            </div> 
                        </div>
                    ";    
                };
            ?>
        </div>
    </div>
</div>