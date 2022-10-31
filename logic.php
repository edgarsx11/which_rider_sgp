<?php
 require_once 'class/DatabaseClass.php';
 require_once 'class/RiderClass.php';

 function calculate_age($birthday) {
    $birthday_timestamp = strtotime($birthday);
    $age = date('Y') - date('Y', $birthday_timestamp);
    if (date('md', $birthday_timestamp) > date('md')) {
      $age--;
    }
    return $age;
  }
  
 function checkNationality($guessedRider, $riderToGuess){
      foreach($guessedRider as $rider){
        $nationOfGuessedRider = $rider->nationality;
      }
      foreach($riderToGuess as $rider){
          $nationOfRiderToGuess = $rider->nationality;
      }
        if ($nationOfGuessedRider == $nationOfRiderToGuess)
          echo '<span class="dot-true"><img class="dot-img" src="'.$nationOfGuessedRider.'"></img></span>';
        
        else 
        echo '<span class="dot-false"><img class="dot-img" src="'.$nationOfGuessedRider.'"></img></span>';
}

function checkLeague($guessedRider, $riderToGuess){
  foreach($guessedRider as $rider){
    $leagueOfGuessedRider = $rider->league;
  }
  foreach($riderToGuess as $rider){
      $leagueOfRiderToGuess = $rider->league;
  }
    if ($leagueOfGuessedRider == $leagueOfRiderToGuess)
    echo '<span class="dot-true"><img class="dot-img" src="'.$leagueOfGuessedRider.'"></img></span>';
    
    else 
    echo '<span class="dot-false"><img class="dot-img" src="'.$leagueOfGuessedRider.'"></img></span>';
}

function checkTeam($guessedRider, $riderToGuess){
  foreach($guessedRider as $rider){
    $teamOfGuessedRider = $rider->team;
  }
  foreach($riderToGuess as $rider){
      $teamOfRiderToGuess = $rider->team;
  }
    if ($teamOfGuessedRider == $teamOfRiderToGuess)
      echo '<span class="dot-true"><img class="dot-img" src="'.$teamOfGuessedRider.'"></img></span>';
    
    else 
      echo '<span class="dot-false"><img class="dot-img" src="'.$teamOfGuessedRider.'"></img></span>';
}

function checkAge($guessedRider, $riderToGuess){
  foreach($guessedRider as $rider){
    $ageOfGuessedRider = calculate_age($rider->birthday);
  }
  foreach($riderToGuess as $rider){
      $ageOfRiderToGuess = calculate_age($rider->birthday);
  }
    if ($ageOfGuessedRider == $ageOfRiderToGuess)
    echo '<span class="dot-true"><p class="age-number" style="color:#fff;">'.$ageOfGuessedRider.'</p></span>';
    
    else if ($ageOfGuessedRider > $ageOfRiderToGuess)
    echo '<span class="dot-false"><p class="age-number">'.$ageOfGuessedRider.' <b>&#8595;</b></p></span>';
    else  echo '<span class="dot-false"><p class="age-number">'.$ageOfGuessedRider.' <b>&#8593;</b></p></span>';
}

function checkNumber($guessedRider, $riderToGuess){
  foreach($guessedRider as $rider){
    $numberOfGuessedRider = $rider->number;
  }
  foreach($riderToGuess as $rider){
      $numberOfRiderToGuess = $rider->number;
  }
    if ($numberOfGuessedRider == $numberOfRiderToGuess)
    echo '<span class="dot-true"><p class="age-number" style="color:#fff;">#'.$numberOfGuessedRider.'</p></span>';
    
    else if ($numberOfGuessedRider > $numberOfRiderToGuess)
    echo '<span class="dot-false"><p class="age-number">#' .$numberOfGuessedRider.' <b>&#8595;</b></p></span>';
    else echo '<span class="dot-false"><p class="age-number">#' .$numberOfGuessedRider.' <b>&#8593;</b></p></span>';
}

 global $guessedRiderNum, $riderToGuessNum;
 $riderToGuessNum = $_POST['riderNumber'];
 $guessedRiderNum = $_POST['guessedRider'];

	if(isset($_POST['guessedRider']))
	{
        $rider = new Riders($db);
        $rider2 = new Riders($db);
        $guessedRider = $rider->serachByNum($guessedRiderNum);
        $riderToGuess = $rider2->serachByNum($riderToGuessNum);
      
      foreach($guessedRider as $rider) {$guessedRiderNum = $rider->number;}
    if($guessedRiderNum == $riderToGuessNum)
    {
      foreach($guessedRider as $rider) {
        echo checkNationality($guessedRider, $riderToGuess)
      . ' ' . checkLeague($guessedRider, $riderToGuess). ' ' . checkTeam($guessedRider, $riderToGuess)
      . ' ' . checkAge($guessedRider, $riderToGuess). ' ' . checkNumber($guessedRider, $riderToGuess) 
      . '<div name="riderName" class="rider-name" id="'. $rider->name.' '.$rider->surname.'">' . $rider->name .' ' . $rider->surname . '</div>';
    }}
     else {
      echo  checkNationality($guessedRider, $riderToGuess)
      . ' ' . checkLeague($guessedRider, $riderToGuess). ' ' . checkTeam($guessedRider, $riderToGuess)
      . ' ' . checkAge($guessedRider, $riderToGuess). ' ' . checkNumber($guessedRider, $riderToGuess)
      . '<div name="riderName" class="rider-name" id="'. $rider->name.' '.$rider->surname.'">' . $rider->name .' ' . $rider->surname . '</div>';
          }
    }
?>
