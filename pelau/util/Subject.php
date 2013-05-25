<?php

/**
 *
 * timestamp: Mar 28, 2013 5:25:29 AM
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
 * @package pelau\util
 *
 * Subject classs for implementing the Observer pattern.
 *
 */
namespace pelau\util;

class Subject implements Observable
{

    /**
     *
     * @var pelau\util\ArrayList $obs
     * @access private
     */
    private $obs;

    /**
     *
     * @var \pelau\util\Observable
     * @access private
     */
    private $realSubject;



    /**
     * Constructs a new Subject class.
     * @param \pelau\util\Observable $realSubject    This Observable will be passed as the subject.
     */
    public function __construct(Observable $realSubject)
    {

        $this->obs = new \pelau\util\ArrayList;

        $this->realSubject = $realSubject;


    }

    public function attach(Observer $o)
    {

        $this->obs->add($o);
        return $this;

    }

    public function notify(\pelau\php\Object $args)
    {

        foreach($this->obs as $o)
            $o->update($this, $args);

    }

}