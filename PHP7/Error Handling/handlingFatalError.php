<?php

class User{
    public function __construct(){
        echo 'User Construct...<br/>';
    }
    public function __destruct(){
        echo 'User Destructor<br/>';
    }
}

function run($object){
    $object->hello();
}

try{
    $user=new User();
    run(null);
}catch(Error $e){
    echo '<strong>Error on Line:'.$e->getLine().' in '.$e->getFile().'</strong>'; 
}finally{
echo 'Finally Ran...<br/>';
}
?>