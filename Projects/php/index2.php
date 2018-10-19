<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cocos Cafe</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Passion+One" rel="stylesheet">
    <script src="script.js"></script>

</head>
<div class="banner">
    <div class="banner-text">
      <h1>Cocos Cat Café</h1>
    </div>
  </div>

<body>
    <div class="wrap">
  
   
   
   <?php include 'header.php';?>
    
        
  
   <!-- 2 col 75,25 -->
   <div class="row">
      <main>
       <div class="col-9 col-m-9">
           <h2>About</h2>
   
    <p>We were established in 2016 to serve delicious drinks and pastries to animal lovers.
      One of the best things about our cafe are our adorable, friendly, and adoptable cats.
      If yu fall in love twith one of the felines that you eet in our cafe they are all adoptable!  You can get more info about our adoption policy in our shop!</p>
       </div>
       <div class="col-3 col-m-3">
           <img src="drink.jpg" alt="Person Drinking coffee" style="width:315px;height:200px;padding-right: 50px;">
       </div>
       
    <h2>Cats in the Cafe</h2>
    <div class="left">
        <a href="#large"><img src="one.jpg" alt="Cat sniffing coffee" height="125" title="Cats at the cafe" onclick="change1()"></a><br>
        <a href="#large"><img src="two.jpg" alt="cat sitting" height="125" title="Cats at the cafe" onclick="change2()"></a><br>
        <a href="#large"><img src="three.jpg" alt="cat sitting" height="125" title="Cats at the cafe"onclick="change3()"></a><br>
        <a href="#large"><img src="four.jpg" alt="cat sitting" height="125" title="Cats at the cafe" onclick="change4()"></a><br>
    </div>
    <div class="photo">
        <img id="large" src="images/eli01.jpg" alt="Meri's Dogs">
        
    </div>
</main>
</div>

        
       
       
   </div>
  <?php include 'footer.php';?>
    
</body>
</html>


