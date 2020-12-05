<?php

//strict mode
declare(strict_types=1);


//type hinting i.e int ,string
function hotelAddress(int $hotelRoomNumber,string $hotelName,string $street,int $phNumber,string $Building=null){
    if($Building){

        //sprintf(); --PHP String sprintf() function. The sprintf() is an in-built function of PHP 
        //which writes a formatted string to a variable. It returns a formatted string.
        return sprintf('%d %s, #%s %d %s',$hotelRoomNumber,$hotelName,$street,$phNumber,$Building);
    }else{
        return sprintf('%d %s, #%s %d',$hotelRoomNumber,$hotelName,$street,$phNumber,$Building);
    }
}
//echo hotelAddress(108,"Hotel Ram","Park Street",223355,3); if we could comment out strict mode the last 3 could be preinted but it is string as below "Ayodhya"
echo hotelAddress(108,"Hotel Ram<br/>","Park Street <br/>",123456789,"<br/>Ayodhya");

?>