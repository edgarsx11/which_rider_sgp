<html>

<head>
  <title>Which rider? SGP</title>
  <link rel="stylesheet" href="style/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
</head>

<body oncontextmenu="return false;">
  <?php
  require_once 'class/DatabaseClass.php';
  require_once 'class/RiderClass.php';
  

  $rider = new Riders($db);
  $dataRows = $rider->searchData("");
  $randomRider = new Riders($db);
  $randomRiderData = $randomRider->getRandomRider();

  foreach ($randomRiderData as $rider){
    $randomRiderNumber = $rider->number;
    $randomRiderName = $rider->name . ' ' . $rider->surname;
  }
  ?>
  <h2>Which rider?</h2>
  <h4>FIM Speedway Grand Prix Edition</h4>
  <div id="block" class="block">
        <div id="rules" class="rules"><h5>How to play?</h5><div class="rules-text">Test your knowledge and guess the speedway rider in 4 tries. The mystery rider is one of
          sixteen riders of 2022 FIM Speedway Grand Prix series.</div>
          <div class="rules-block">
              <span class="dot-false"><img class="dot-img" src="https://i.ibb.co/4K8CR4x/great-britain.png"></img></span>
              <span class="dot-true"><img class="dot-img" src="https://i.ibb.co/GpjWjc3/pge-ekstraliga.png"></img></span>
              <span class="dot-true"><img class="dot-img" src="https://i.ibb.co/1JphLc4/wts-sparta-wroclaw.png"></img></span>
              <span class="dot-false"><p class="age-number">23&#8593;</p></span>
              <span class="dot-false"><p class="age-number">#99&#8595;</p></span>
          </div>
          <div style="font-weight:600;font-size:20px; display:flex; flex-direction:row; justify-content:space-around;">
              <div>NAT</div>
              <div>LEAG</div> 
              <div>TEAM</div> 
              <div>AGE</div> 
              <div>NUM</div> 
          </div>  
          <div class="rules-text">
            … Means that the mystery rider is not british, but rides for WTS Sparta Wroclaw in Polish Ekstraliga.
            Also rider age is higher than 23 years, and his FIM Speedway Grand Prix number is lower than #99.
          </div>
          <div style=" display:flex;  justify-content:space-around;">
              <div>
                <button class="restartButton" style="display: table-cell; vertical-align: bottom;" onclick="closePopUp();">START GAME</button>
              </div>
          </div>
        </div>
        <form action="search.php" method="POST">
          <p id="qmark" class="qmark">?</p>
          <input class="search" type="text" id="<?php echo $randomRiderNumber+999?>" name="name" placeholder="GUESS 1 OF 4" onkeydown="return event.key != 'Enter';" oninput=search(this.value)>
        </form>
  </div>
  <div class="dataViewer" id="dataViewer">
    <?php if(isset($_POST['searchBox'])) {foreach($dataRows as $rider) { ?>
        <li><?php echo $rider->name ." ". $rider->surname;} ?></li>
    <?php } ?>
  </div>
  
  <div class="displayData" id="displayAttributes">
  <div id='attributes' style="font-weight:600;font-size:20px;display: none; flex-direction:row; justify-content:space-around;">
    <div>NAT</div>
    <div>LEAG</div> 
    <div>TEAM</div> 
    <div>AGE</div> 
    <div>NUM</div> 
    </div> 
  </div>
  <script>
    const data = "<?php echo $randomRiderName ?>";
</script>
  <script src="js/main.js"></script>
  <script src=
      "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
</body>
</html>
