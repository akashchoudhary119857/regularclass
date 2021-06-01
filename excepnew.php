<?php
/*$deno=4;
class Numberis4Exception extends Exception{
    function errorMessage(){
        return $this->getMessage();
    }
}
try{
    echo "inisde the try block before if condition";
    if($deno==0){
        echo "<br> inside the if condition before throw";
        throw new Exception('Provide a valid denominator except 0');
        echo "<br> after throw";
    }
    if($deno==4){
        throw new Numberis4Exception('Provide a valid denominator except 4');
    }
    echo 4354/$deno;
} catch (Exception $obj){
    echo "<br> inside the catch block <br>";
    echo $obj->getMessage();

} catch(Numberis4Exception $e){
    echo $e->getMessage();
} finally {
    echo "welcome to finally block";
}
echo "<br> outside the catch block";*/

function akash($denominator){
    // it will execute whenever control enters inside the function
    echo "<h3>welcome user you are in side the function named as Akash</h3>";
    // will executed everytime
    try{
        echo "<h5>Hello, User you are in side the try block before condition checking</h5>";
        if($denominator==0){
            // it will executed only when condition is true
            echo "<br> You are now inside the if block before throw";
            throw new Exception('please give valid denominator as zero never be used as denominator');
            // this will never be executed
            echo "<br> after throw ";
        }
    }catch (Exception $obj){
        echo "<h6>Now you are in catch block</h6>";
        echo $obj->getMessage();
    }
    echo "<br> outside the catch block as well as outside the try block";

}
akash(5);