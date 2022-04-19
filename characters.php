<?php
    foreach ($filters as $key => $character){?>
        <div class="card mb-3 p-3 border border-dark " style="max-width: 520px;">
            <div class="row g-0">
            <div class="col-md-4">
                <img class="card-img-top border border-dark" width="100%" src="<?= $character->image;?>">
            </div>
            <div class="col-md-8 p-4">
                <div class="card-Body">
                    <p><strong>Name: </strong><?= $character->name;?><br></p>
                    <p class="card-text"><strong>Gender: </strong><?= $character->gender;?><br></p>
                    <p class="card-text"><strong>Species: </strong><?= $character->species;?><br></p>
                    <?php 
                        if($character->status == 'Alive'){
                        echo '<p class="card-text"><small><strong>Status: </strong><i class=" fas fa-circle" style="color:green"></i></small></p>';
                        }
                        if($character->status == 'unknown'){
                        echo '<p class="card-text"><small><strong>Status: </strong><i class="fas fa-question-circle" style="color:gray"></i></small></p>';
                        }
                        if($character->status == 'Dead'){
                        echo '<p class="card-text"><small><strong>Status: </strong><i class=" fas fa-circle" style="color:red"></i></small></p>';
                        }
                    ?>
                </div>
            </div>
            </div>
        </div>    
<?php } ?>