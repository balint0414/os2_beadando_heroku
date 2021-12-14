
<html>
    <head>
        <title>Dolgozó</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php require_once 'munkahelyekprocess.php'; ?>
        <div class="container">
        <?php
        $mysqli = new mysqli('localhost', 'webbead2', 'webbead2', 'webbead2') or die(mysqli_error($mysqli));
        $result=$mysqli->query("SELECT * FROM munkahelyek") or die($mysqli->error);
        //pre_r($result);
        ?>
        
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Munkahely ID</th>
                        <th>Helyszín</th>
                        <th colspan="2">Műveletek</th>
                    </tr>
                </thead>
                <?php
                while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['munkahelyid']; ?></td>
                    <td><?php echo $row['helyszin']; ?></td>
                    <td>
                        <a href="dolgozo.php?edit=<?php echo $row['munkahelyid']; ?>"
                           class="btn btn-info">Szerkeszt</a>
                           <a href="dolgozo.php?delete=<?php echo $row['munkahelyid']; ?>"
                           class="btn btn-info">Töröl</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
        
        <?php
        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        ?>
        <div class="row justify-content-center">
            <form action="munkahelyekrocess.php" method="POST">
                <div class="form-group">
                <label>Munkahely ID:</label>
                <input type="int" name="munkahelyid" class="form-control" value="<?php echo $munkahelyid; ?>">
                </div>
                <div class="form-group">
                <label>Helyszín:</label>
                <input type="text" name="helyszin" class="form-control" value="<?php echo $helyszin; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="mentés">Mentés</button> 
                </div>
            </form>
        </div>
       </div>
    </body>
</html>
