<?php
class customException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
        return $errorMsg;
    }
}

$email = "someone@example.com";

try
{
    try
    {
        if(strpos($email, "example") !== FALSE)
        {
            throw new Exception($email);
        }
    }
    catch(Exception $e)
    {
        //استثنا دوباره راه اندازی می شود
        throw new customException($email);
    }
}

catch (customException $e)
{
    //display custom message
    echo $e->errorMessage();
}
?>

