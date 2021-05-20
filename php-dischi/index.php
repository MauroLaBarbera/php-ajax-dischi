<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
  <header>
      <img src="./logo.png" alt="">
  </header>

  <main>
  
      <?php 
        include_once __DIR__ . '/database.php';
      ?>
      <div class="cards">
        
        <?php foreach ($database as $data) { ?>
            <div class="card">
                <img src="<?php echo $data['poster']; ?>" alt="">  

                <h2> <?php echo $data['title']; ?> </h2>
        
                <h3> <?php echo $data['author']; ?> </h3>
    
                <h3> <?php echo $data['year']; ?> </h3>

                <h3> <?php echo $data['genre']; ?> </h3>
            </div>
                
        <?php } ?>
        </ul>
      </div>
  </main>

</body>
</html>