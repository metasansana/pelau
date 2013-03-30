<?php

/**
 *
 * timestamp: Mar 30, 2013 2:45:36 PM
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
 * @package pelau\app\dbauth;
 */
namespace pelau\app\dbauth;

class Authenticator implements \pelau\util\Observable
{

    /**
     *
     * @var \pelau\sql\PreparedStatement $authStatement
     * @access private
     */
    private $authStatement;

    /**
     *
     * @var type
     */
    private $sub;

    public function __construct(\pelau\sql\PreparedStatement $authStatement)
    {

        $this->authStatement = $authStatement;

        $this->sub = new \pelau\util\Subject($this);

    }

    public function authenticate(AuthToken $token)
    {

        $token->utilize($this->authStatement);

        $record= $this->authStatement->query()->getRows();

        if($record->size() === 1)
        {

            $this->sub->notify($record);

            return true;

        }

        return false;

    }

    public function attach(\pelau\util\Observer $o)
    {

        $this->sub->attach($o);

        return $this;

    }

}