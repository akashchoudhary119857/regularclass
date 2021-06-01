<?php
/*error_reporting(0);
$num=0;
try {
    echo "<br> inside try";
    if($num==0){
        echo "<br> inside if block";
        throw new Exception('Provide a valid denominator that is any number except 0');
        echo "<br> after throw ";
    }
    echo "<br> outside if block";
    echo 60 / $num;


} catch(Exception $e){
    echo "<br> inside catch block<br>";
    echo $e->getMessage();
}
echo "<br>outside catch";
function akash($denominator){
    // it will execute whenever the function calls
    echo "inside the function Akash but before try block";
    try{
        echo "<br> Inside the try block before checking denominator value";
        // it will execute if the denominator is zero
        if($denominator==0){
            echo "<br> inside the if block before throw ";
            throw new Exception('Number is zero');
            // it will never be executed
            echo "<br> After throw keyword";
        }
    }catch (Exception $obj){
        echo "<br> inside the catch block<br>";
        echo $obj->getMessage();
        echo $obj->getCode();
        echo $obj->getLine();
        echo $obj->getFile();
    }
    // it will execute in every situation
    echo "<br> outside the catch block <br>";
}
akash(5);
akash(0);*/

$deno=0;
class Numberis4Exception extends Exception{
    function errorMessage(){
        return $this->getMessage();
    }
}
try{
    if($deno==0){
        throw new Exception('Provide a valid denominator except 0');

    }
    if ($deno==4){
        throw new Numberis4Exception('provide a number except 4');
    }
    echo 78/$deno;
}catch (Exception $e){
    echo $e->getMessage();
}catch (Numberis4Exception $e){
    echo $e->getMessage();
} finally {
    echo "finally will call";
}

/*
 * try:  it represents a block of code in which exception can arise
 * catch: it represents a block of code  that will be executed when a
 * particular exception has been thrown
 * throw: it is used to throw an exception. It is  also used to list the exception that a
 * function throws. But doesn't handle itself
 * finally : it is used to hold that code which we want to run at any situation whether there is
 * an exception in our code or not. it is generally used for clean up activity.
 * WHY EXCEPTION HANDLING:
 * Grouping of error types: in php both basic types and objects can be throw as an exception
 * it can create a heirarchy of exception objects, group exceptions in namespaces of classes
 * categorize them accordingly.
 * seperation of error handling code from the normal code.
 */