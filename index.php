<!DOCTYPE html>
<html>
  <head>

    <!-- Metadata for this site -->
    <meta charset="utf-8">
    <meta name="description" content="Number Display">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Joseph Kwon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Favicon for this site -->
    <link rel="apple-touch-icon.png" sizes="180x180" href="./fav_index/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Number Display</title>
    
  </head>
  <body>    
     
    <?php echo "<h1>Number Display</h1>" ?>
    
		<?php echo "<h3>This program will display all numbers between your starting number to your ending number (-10,000 to 10,000): </h3>" ?>

<!-- Text fields for user input, collects data -->
    <h3>Enter the requested information into the textfield:</h3>
    <form action="./welcome.php" method="post" target="result">

      <!-- Asks user for starting number via textfield -->
      <label for="number">Enter starting number (no decimals): </label>
      <input type="number" step="1" min="-10000" max="10000" name="number" id="number" placeholder="starting number"><br><br>

      <!-- Asks user for ending number via textfield -->
      <label for="number1">Enter ending number (no decimals): </label>
      <input type="number" step="1" min="-10000" max="10000" name="number1" id="number1" placeholder="ending number"><br><br>

     
				<input type="submit" value="Display numbers">
		</form>
   

    <!-- result frame centered -->
    <div id="result"></div>
    <center>
      <iframe id="result" name="result">
      </iframe>
    </center>
    
  </body>
</html>