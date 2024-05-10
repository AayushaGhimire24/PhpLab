
<?php
//multiple and custom exception
class DivideByZeroException extends Exception{ }
//class DivideByNegativeNoException extends Exception{ }
function checkdivisor($dividend,$divisor){
    //throw exception if divisor is zero
    try{
        if($divisor==0){
            throw new DivideByZeroException;
        }
        // else if($divisor<0){
        //     throw new DivideByNegativeNoException;
        // }
        else{
            $result=$dividend/$divisor;
            echo "Result of division=$result </br>";
        }
    }
    catch (DivideByZeroException $dze){
        echo "Divide by zero Exception!</br>";
    }
    // catch(DivideByNegativeNoException $dnne){
    //     echo"Divide by negative number exception</br>";
    // }
    catch(Exception $ex){
        echo "Unknown Exception";
    }
}
checkdivisor(18,3);
checkdivisor(34,-6);
checkdivisor(27,0);
//wap in php to generate an exception if the email address is in incorrect pattern
?>