<!DOCTYPE html>
<html>
<head>
    <title>CodeIgniter Image Upload</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div>
        <div>
            <h3>Select an image from your computer and upload it to the cloud</h3>
            <?php
                    if (isset($error)){
                        echo $error;
                    }
                ?>
                <form method="post" action="<?=base_url('index.php/Upload/store')?>" enctype="multipart/form-data">
                    <input type="file" id="game_image" name="game_image" size="33" />
                    <input type="text" name="id" id="id" placeholder="Input ID of the game">
                    <input type="submit" value="Upload Image" />
                </form>
        </div>

        <table border="1">
            <thead>
                <tr><th>Game</th><th>ID</th></tr>
            </thead>
            <tbody>
                <?php foreach ($games as $row){
                    echo "<tr>";
                        echo "<td>".$row["game"]."</td>";
                        echo "<td>".$row["id"]."</td>";
                    echo "</tr>";
                } ?>
            </tbody>

        </table>

    </div>
</body>
</html>