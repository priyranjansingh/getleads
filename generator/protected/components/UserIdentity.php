<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $user = User::model()->authUser($this->username, $this->password);
        if ($user) {
            $this->_id = $user->id;
            $this->setState('username', $user->username);
            $this->setState('first_name', $user->first_name);
            $this->setState('last_name', $user->last_name);
            $this->setState('email', $user->email);
            $this->setState('company', $user->company);
            $this->setState('is_companyadmin', $user->is_companyadmin);
            if($user->is_admin) {
                $this->setState('role', 'admin');
            }
            else {
                $this->setState('role', 'user');
            }
             if($user->is_shop) {
                $this->setState('role', 'shop');
            }
            $this->errorCode = self::ERROR_NONE;
        } else {

            $this->errorCode = self::ERROR_UNKNOWN_IDENTITY;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}