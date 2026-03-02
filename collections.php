<div class="container containercol">
    <div id="collectionsCarousel" class="carousel slide" data-interval="false">
        <div class="carousel-inner text-center">
            <?php
            include 'config.php';
            $sql_cat = "SELECT * FROM categories";
            $result_cat = $conn->query($sql_cat);
            
            if ($result_cat && $result_cat->num_rows > 0) {
                $is_first_cat = true;
                while($cat = $result_cat->fetch_assoc()) {
                    $active_class = $is_first_cat ? 'active' : '';
                    ?>
                    <div class="carousel-item <?php echo $active_class; ?>">
                        <img src="<?php echo $cat['logo']; ?>" width="100" class="d-block mx-auto" alt="<?php echo $cat['name']; ?>" style="max-width:300px;">
                        <h3 class="judul mt-3"><?php echo strtoupper($cat['name']); ?></h3>
                        <p class="lead description mb-0"><?php echo htmlspecialchars($cat['description']); ?></p>
                        
                        <div class="row justify-content-center mt-4">
                            <?php
                            $cat_id = $cat['id'];
                            $sql_air = "SELECT * FROM aircrafts WHERE category_id = $cat_id";
                            $result_air = $conn->query($sql_air);
                            
                            if ($result_air && $result_air->num_rows > 0) {
                                while($air = $result_air->fetch_assoc()) {
                                    ?>
                                    <div class="col-md-4 mb-3">
                                        <div class="card h-100 shadow-sm border-0">
                                            <img src="<?php echo $air['image']; ?>" class="card-img-top img-fluid" alt="<?php echo $air['model_name']; ?>" style="height:180px;object-fit:cover;">
                                            <div class="card-body text-center">
                                                <h5 class="card-title"><?php echo $air['model_name']; ?></h5>
                                                <ul class="list-unstyled small mb-0 text-muted">
                                                    <li><strong><?php echo $air['label_1']; ?>:</strong> <?php echo $air['spec_1']; ?></li>
                                                    <li><strong><?php echo $air['label_2']; ?>:</strong> <?php echo $air['spec_2']; ?></li>
                                                    <li><strong><?php echo $air['label_3']; ?>:</strong> <?php echo $air['spec_3']; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php 
                    $is_first_cat = false;
                }
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#collectionsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#collectionsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>