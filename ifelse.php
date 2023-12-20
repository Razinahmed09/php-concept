<?php

//  $x = 100;


// if ($x > 110) {
//      echo "code run succesfully";
// }
// else {
//     echo "code is not running";
// } 


// $a = "Im front end Developer";

// if ($a == "im front end developer") {
//     echo "yess";
// }
// else {
//     echo "no";
// }


$per = 55 ;


// if ($per >= 70 && $per <=80) {
//     echo "A";
// }
// elseif ($per >= 60 && $per <=70) {
//     echo "B";
// }
// elseif($per >=50 && $per <=60)
// {
//     echo "C";
// }
// elseif($per >=40 && $per <=50)
// {
//     echo "D";
// }
// elseif($per < 40)
// {
//     echo "Fail";
// }
// else{
//     echo "Please Valid Percentage";
// }


//second method

if ($per >= 70 && $per <=80):
    echo "A";

elseif ($per >= 60 && $per <=70):
    echo "B";

elseif($per >=50 && $per <=60):

    echo "C";

elseif($per >=40 && $per <=50):

    echo "D";

elseif($per < 40):

    echo "Fail";

else:
    echo "Please Valid Percentage";
 endif
?>