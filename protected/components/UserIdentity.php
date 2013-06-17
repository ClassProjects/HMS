<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	public function authenticate()
	{
		$user = Users::model()->find('Username = :un', array(':un'=>$this->username));

                if($user instanceof Users)
                {
                    if(Users::encrypt($this->password) == $user->Password)
                        $this->errorCode=self::ERROR_NONE;
                    else
                        $this->errorCode=self::ERROR_PASSWORD_INVALID;
                }
                else
                {
                    $this->errorCode=self::ERROR_USERNAME_INVALID;
                }
                
                return !$this->errorCode;
	}

}