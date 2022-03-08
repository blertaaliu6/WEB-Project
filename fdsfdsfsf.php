<?php

    require_once './controllers/MenuController.php';
?>

<div>
    <?php
    $products = new MenuController;
    $all = $products->readData();

    for($i =0; $i < count($all); $i++){
        echo '<div>
            <div>
                <img src="' .$all[$i]['foto_produktit'].'">
            </div>

            <div>
                <h5>' .$all[$i]['emri_produktit'] . '<h5>
                <p>' .$all[$i]['cmimi_produktit']. '</p>
            </div>
    </div>';
    }
    ?>
</div>