<link rel = "stylesheet" href = "<?php echo base_url(); ?>css/style.css">

<div class="gametable">
    <table border="1">
        <thead>
            <tr><th>Name</th><th>Genre</th><th>Ranking</th><th>Genre Ranking</th><th>Wikipedia</th></tr>
        </thead>
        <tbody>
            <?php foreach ($game as $row){
                $link='https://en.wikipedia.org/wiki/';
                echo "<tr>";
                    echo "<td>".$row["game"]."</td>";
                    echo "<td>".$row["genre"]."</td>";
                    echo "<td>".$row["ranking"]."</td>";
                    echo "<td>".$row["genreranking"]."</td>";
                    echo "<td> <a href=\"https://en.wikipedia.org/wiki/" . $row["game"] . "\"> " . $row["game"] . " </a> </td>";
                echo "</tr>";
            } ?>
        </tbody>
    </table>
</div>