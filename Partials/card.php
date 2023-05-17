<!-- Column -->
<div class="col">
    <!-- Card -->
    <div class="card h-100">
        <div class="card-img text-center py-3">
            <img src="<?php echo $animal->immagine ?>" class="card-img-top">
        </div>
        <div class="card-body">
            <h3><?php echo $animal->nome ?></h3>
            <div class="marca"><?php echo $animal->marca ?></div>
            <div class="prezzo"><?php echo $animal->prezzo ?></div>
            <div class="articolo"><?php echo $animal->tipo_articolo ?></div>
            <div class="icona">
                <?php if ($animal->animale->animale === "Cane") {
                    echo "<i class='fa-solid fa-dog fa-2x'></i>";
                } else {
                    echo "<i class='fa-solid fa-cat fa-2x'></i>";
                } ?>
            </div>
        </div>
    </div>
    <!-- End Card -->
</div>
<!-- End Column -->