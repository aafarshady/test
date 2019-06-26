<?php
class customException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

function testemail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
    {
        throw new customException($email);
    } elseif(strpos($email, "example") !== FALSE)
    {
        throw new Exception("$email is an example e-mail");
    }else{
        echo 'dorost';
    }
}


try
{
    testemail("someoneexampl.com");
    testemail("someone@example.com");


}

catch (customException $e)
{
    echo $e->errorMessage();
}

catch(Exception $e)
{
    echo $e->getMessage();
}
?>

