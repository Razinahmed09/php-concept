<?php

// $weekday = 5;

// switch ($weekday) {
//     case 1: case 2: case 3:
//         echo "Today is Monday";
//         echo " <br>This is just text";
//         break;
//     case 2:
//         echo "Today is Tuesday";
//        break;
    
//     case 3:
//         echo "Today is Wednesday";
//     break;
    
//     case 4:
//         echo "Today is Thursday";
//         break;
//     case 5:
//         echo "today is Friday";
//         break;    
//     case 6:
//         echo "Today is Saturday";
//         break;
//     case 7:
//         echo "Today is Sunday";
//         break;    

//     default:
//         echo "Please Enter Valid Weekday";
        
// }


//second method


$age = 16;

switch (true) {
    case ($age >= 18 && $age <=21):
    echo "you are eligible";
    break;
    
    case ($age >= 21 && $age <=30):
    echo "you are not eligible";
    break;   


    default:
        echo "Please Enter Valid Age";
        break;
}

?>