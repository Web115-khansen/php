<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Responsive Design</title>
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    
</head>
<body>
   <!-- icon pic -->
  <?php include 'header.php';?>
  <?php include 'vars.php';?>
  
   
   <!-- 2 col 75,25 -->
   <main class="row">
       <div class="col-9 col-m-9">
          <h2>Seasonal</h2>
           <?php echo"<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ipsam maiores, nam! Maxime illo ipsum velit consequatur, laborum autem quam expedita fuga quia, quisquam delectus, quo atque cum beatae rem.</p>";?>
           <p>I have a <?php echo $boat?> boat that is <?php echo $color ?> and is worth <?php echo $price?>.</p>
           
       </div>
       <div class="col-3 col-m-3">
           <a href="#"><img src="rosa_gold.jpg" alt="rosa_gold">  </a>
       </div>
   </main>
   <?php include 'footer.php';?>
  
    
    
</body>
</html>