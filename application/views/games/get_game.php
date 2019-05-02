<link rel = "stylesheet" href = "<?php echo base_url(); ?>css/style.css">
<div class="games_gametable">
           <?php foreach ($game as $row){
                $link='https://en.wikipedia.org/wiki/';
                    echo "<h1>".$row["game"]."</h1>";
                    echo "<p><b>Genre: </b>".$row["genre"]."</p>";
                    echo "<p><b>Overall rank: </b>".$row["ranking"]."</p>";
                    echo "<p><b>Genre rank: </b>".$row["genreranking"]."</p>";
                    echo "<p><b>Link to Wikipedia: </b> <a target='_blank' href=\"https://en.wikipedia.org/wiki/" . $row["game"] . "\"> " . $row["game"] . " </a> </p>";
            } ?>
</div>
