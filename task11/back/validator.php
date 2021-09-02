<?php
trait validator
{
    private $error;
    public function checkPass($pass, $rePass)
    {
        if ($pass == $rePass) {
            if (strlen($pass) >= 8) {
                return true;
            }
            $this->error[] = 'To short Password';
            return false;
        }
        $this->error[] = 'Wrong rebeat Password';
    }

    public function emailExist($cont, $email)
    {
        if ($cont->find('email', $email)) {
            $this->error[] = 'Email is Alread Exist';
            return false;
        }
        return true;
    }

}
