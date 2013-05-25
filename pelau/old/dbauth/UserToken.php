<?php

/**
 *
 * timestamp: Mar 30, 2013 3:41:07 PM
 * encoding: UTF-8
 *
 * Copyright 2013  Lasana Murray <dev@trinistorm.org>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package pelau\app\dbauth
 */
namespace pelau\app\dbauth;

class UserToken implements AuthToken
{

    /**
     *
     * @var string
     * @access private
     */
   private $user;

    /**
     *
     * @var string
     * @access private
     */
   private $password;

    /**
     *
     * @var mixed
     * @access private
     */
   private $userField;

    /**
     *
     * @var mixed
     * @access private
     */
   private $passwordField;

    /**
     *
     * @param string $user
     * @param string $password
     * @param mixed $userField
     * @param mixed $passwordField
     */
    public function __construct($user, $password, $userField, $passwordField)
    {

        $this->user = $user;
        $this->password  = $password;
        $this->userField = $userField;
        $this->passwordField = $passwordField;

    }

    public function utilize(\pelau\sql\PreparedStatement $pstmt)
    {

            $pstmt->bindString($this->userField, $this->user);
            $pstmt->bindString($this->passwordField, $this->password);

    }



}