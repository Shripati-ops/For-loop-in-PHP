<?php

//1
for($i = 1; $i <=10; $i++){
	echo "$i";
	if($i < 10){
		echo'-';
	}
}

//2
echo "<br>";
for($i = 1;$i <= 30; $i++){
	$sum = $sum + $i;
}
echo $sum;
//3
echo "<br>";
for($i = 0; $i<=5; $i++){
	for($j = 1; $j<=$i; $j++){
		echo "* ";
	}
	echo"<br>";
}
//4
echo "<br>";
for($i = 0; $i<=5; $i++){
	for($j = 1; $j <=$i; $j++){
		echo "*";
	}
	echo"<br>";
}
for($i = 5; $i>=1; $i--){
	for($j = 1; $j<=$i; $j++){
		echo"*";
	}
	echo"<br>";
}
//5
echo"<br>";
$fact = 1;
for($i = 1 ; $i <=4; $i++){
	$fact = $fact * $i;
}
echo $fact;

//6
echo "<br>";
for($i = 0; $i < 100; $i++){
	echo"$i";

	if($i < 100){
		echo ",";
	}
}

//7
echo"<br>";
$str = "w3resource";
for($i = 0; $i < strlen($str); $i++){
	  if($str[$i] == 'r') {
		  $count ++;
	  }
}
echo "$count";
//8
echo "<br>";
echo "<table border='2px'>";

for($i = 1; $i <= 6; $i++){
	echo "<tr>";
	for($j = 1; $j <= 5; $j++){
		$mul = $i * $j;

		echo"<td> '$i * $j =','$mul',</td>";

	}
	echo "</tr>";
}
echo "</table>";

//9
echo "<br>";
echo "<table border='2px' width='270px' height='30px'>";

for($i = 0; $i<8; $i++) {
	echo "<tr>";
	if ( $i % 2 == 0 ) {
		for ( $j = 0; $j < 8; $j ++ ) {
			if ( $j % 2 == 0 ) {
				echo "<td width='20px' height = '30px' bgcolor='black'>";
			} else {
				echo "<td width='20px' height = '30px' bgcolor='white'>";
			}


		}
	} else {
		for ( $j = 0; $j < 8; $j ++ ) {
			if ( $j % 2 != 0 ) {
				echo "<td width='20px' height = '30px' bgcolor='black'>";
			} else {
				echo "<td width='20px' height = '30px' bgcolor='white'>";
			}


		}
	}
	echo "</tr>";
}
//10
echo "<br><br>";
echo "<table border = '2px'>";
for($i = 1; $i <=10; $i++){

	echo "<tr>";
	for($j = 1; $j <=10; $j++){
		$mul = $i * $j;
		echo"<td> $mul </td>";
	}
	echo "</tr>";
}
// 11
echo "<br><br>";
for($i = 1; $i <= 50; $i++){
	if($i % 3 == 0 and $i % 5 == 0){
		echo "FizzBuzz ";
	}
		else if($i%5 == 0){
			echo "buzz ";
		}
		else if($i % 3 == 0) {
			echo "Fizz ";
		}
		else{
		echo "$i ";
		}
}

// 12
echo "<br>";
for($i = 1; $i <=5 ; $i++){
	for($j = 1; $j <= $i; $j++){
		echo "$j";
	}
	echo "<br>";
}
// 13
echo "<pre>";
for ($i=0; $i<=7; $i++)
{
	for ($j=0; $j<=7; $j++)
	{
		if ((($j == 1 or $j == 5) and $i != 0) or (($i == 0 or $i == 3) and ($j > 1 and $j < 5)))
			echo "*";
		else
			echo " ";
	}
	echo "<br>";
}

echo "</pre>";

// 14
echo "<pre>";
for($i = 0; $i <=7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 1  or ($i == 0 or $i == 3 or $i == 6) and ($j < 5 and $j > 1) or ($j == 5 and ($i != 0 and $i != 3 and $i != 6))){
    	echo "*";
    }
    else{
    	echo " ";
    }

	}
	echo"<br>";
}
echo "</pre>";
// 15
echo "<br>";
echo "<pre>";
  for($i = 0; $i <7; $i++){
  	for($j = 0; $j <7; $j++){
  		if($j == 0 or ($i == 0 or $i == 6)){
  			echo "*";
	    }
	    else{
  			echo "  ";
	    }
    }
    echo "<br>";
  }
echo "</pre>";
// 16
echo "<br>";
echo "<pre>";
  for($i = 0; $i < 7; $i++){
  	for($j = 0; $j <7; $j++) {
  		if($j == 0 or ($i == 1 or $i == 6) or ($i == 2 or $i == 3) and $j == 5 or ($i == 4 or $i == 5) and $j == 5) {
		    echo "*";
	    }else{
  			echo " ";
	    }
    }
    echo "<br>";
  }
echo "</pre>";
  // 17
echo "<br>";
  echo "<pre>";
  for($i = 0; $i<7; $i++){
  	for($j = 0; $j<7;$j++){
	    if($j == 0  or ($i == 0 or $i == 3 or $i == 6)){
	    	echo "*";
	    }else{
	    	echo " ";
	    }
    }
    echo "<br>";
  }
  echo"</pre>";

  // 18
echo "<br>";
echo "<pre>";
for($i = 0; $i <7; $i++){
	for($j = 0; $j<7; $j++){
		if($j ==0 or ($i == 0 or $i == 3)){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo "<br>";
}
echo "</pre>";

// 19
echo "<br>";
echo "<pre>";

for($i = 0; $i<8; $i++){
	for($j = 0; $j<7; $j++){
		if(($i == 1 and $j == 2) or ($i == 1 and $j == 3) or ($i == 1 and $j == 4) or ($i == 5 and $j == 2) or ($i == 5 and $j == 3) or ($i == 5 and $j == 4) or  ($i == 2 and $j == 6) or ($j == 0 and $i != 1 and $i != 5) or ($j == 4 and $i == 3) or ($j == 5 and $i == 3) or ($j == 2 and $i == 3) or ($j == 5 and $i == 4)){
			echo "*";
		}
		else{
			echo " ";

		}

	}
	echo "<br>";
}

// 20
echo "<br>";
echo "<pre>";

for($i = 0; $i < 7; $i++){
	for($j = 0; $j <7; $j++){
		if(($j == 0 or $i == 3) or ($j == 6) ){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo "<br>";
}
echo"</pre>";

//21

echo "<br>";
echo "<pre>";

 for($i = 0; $i < 7; $i++){
 	for($j = 0; $j < 7; $j++){
 		if(($i == 0 or $i == 6) or ($j == 3)){
 			echo "*";
	    }
	    else{
 			echo " ";
	    }

    }
    echo "<br>";
 }
 echo "</pre>";
 //22
echo "<br>";
echo "<pre>";

 for($i = 0; $i <= 7; $i++){
 	for($j = 0; $j <= 7; $j++){
 		if($i == 0 and ($j == 3) or $i == 0 and($j == 4) or $i == 0 and ($j == 5) or $j == 4 or $i == 7 and $j == 2 or $i == 6 and $j == 1){
 			echo "*";
	    }
	    else{
 			echo " ";
	    }
    }
    echo"<br>";
 }

//23

echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 0 and $i != 7 or $i == 0 and $j == 4 or $i == 1 and $j == 3 or $i == 2 and $j == 1 or $i == 3 and $j == 0 or $i == 4 and $j == 2 or $i == 5 and $j == 3 or $i == 6 and $j == 4){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
//24
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 0 or $i == 7){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
//25
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 0 or $j == 7 or $i == 1 and $j == 2 or $i == 2 and $j == 3 or $i == 1 and $j == 4){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}

//26
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 0 or $j == 7 or $i == 2 and $j == 2 or $i == 3 and $j == 3 or $i == 4 and $j == 4){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}

//27
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($i == 0 and $j == 2 or $i == 0 and $j == 3 or $i == 0 and $j == 4 or $i == 0 and $j == 5 or $i == 1 and $j == 1 or $i == 2 and $j == 1 or $i == 3 and $j == 1 or $i == 4 and $j == 1 or $i == 5 and $j == 2 or $i == 5 and $j == 3 or $i == 5 and $j == 4 or $i == 5 and $j == 4 or $i == 5 and $j == 5 or $i == 1 and $j == 6 or $i == 2 and $j == 6 or $i == 3 and $j == 6 or $i == 4 and $j == 6){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
//28
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 1 and $i != 7or $i == 0 and $j == 3 or $i == 0 and $j == 4 or $i == 0 and $j == 5 or $i == 1 and $j == 6 or $i == 2 and $j == 5 or $i == 2 and $j == 4 or $i == 2 and $j == 3){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
////29
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 0 and $i == 1 or $j == 0 and $i == 2 or $j == 0 and $i == 3 or $i == 0 and $j == 2 or $i == 0 and $j == 3 or $i == 0 and $j == 4 or $i == 1 and $j == 6 or $i == 2 and $j == 6 or $i == 3 and $j == 6 or $i == 4 and $j == 4 or $i == 5 and $j == 5 or $i == 4 and $j == 2 or $i == 3 and $j == 2){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}

////30
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 1 and $i != 7  or $i == 0 and $j == 3 or $i == 0 and $j == 4 or $i == 0 and $j == 5 or $i == 1 and $j == 6 or $i == 2 and $j == 5 or $i == 2 and $j == 4 or $i == 2 and $j == 3 or $i == 3 and $j == 4 or $i == 4 and $j == 5 or $i == 5 and $j == 6 or $i == 6 and $j == 7){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
////31
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($i == 0 and $j == 3 or $i == 0 and $j == 4 or $i == 0 and $j == 5 or $i == 0 and $j == 6 or $i == 1 and $j == 2 or $i == 2 and $j == 2 or $i == 3 and $j == 4 or $i == 4 and $j == 5 or $i == 5 and $j == 6 or $i == 6 and $j == 5 or $i == 6 and $j == 4 or $i == 6 and $j == 3 or $i == 6 and $j == 2){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
////32
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($i == 0 or $j == 3){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}

////33
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 0 and $i != 7 or $j == 6 and $i !=7 or $i == 7 and $j == 2 or $i == 7 and $j == 3 or $i == 7 and $j == 4){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
////34
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 0 and $i != 7 or $j == 6 and $i != 7 or $i == 7 and $j == 3){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
//
////35
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 0 and $i != 7 or $j == 7 and $i != 7 or $i == 5 and $j == 2 or $i == 4 and $j == 3  or $i == 5 and $j == 5 or $i == 4 and $j == 4 or $i == 3 and $j == 3){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
//
////36
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($i == 0 and $j == 1 or $i == 1 and $j == 1 or $i == 2 and $j == 1 or $i == 3 and $j == 2 or $i == 4 and $j == 3 or $i == 6 and $j == 6 or $i == 0 and $j == 6 or $i == 1 and $j == 6 or $i == 2 and $j == 6 or $i == 3 and $j == 5 or $i == 6 and $j == 1){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
////37
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($j == 1 and $i < 3 or $i == 2 and $j == 2 or $i == 3 and $j == 3 or $i == 4 and $j == 3 or $i == 0 and $j == 5 or $i == 1 and $j == 5 or $i == 2 and $j ==4){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}
////38
echo "<br>";
echo "<pre>";

for($i = 0; $i <= 7; $i++){
	for($j = 0; $j <= 7; $j++){
		if($i == 0 or $i == 4 or $i == 1 and $j == 6 or $i == 2 and $j == 4 or $i == 3 and $j == 2){
			echo "*";
		}
		else{
			echo " ";
		}
	}
	echo"<br>";
}



?>