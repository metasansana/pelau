<?php

/**
 *
 * timestamp: Dec 22, 2012 5:43:57 PM
 * encoding: UTF-8
 *
 * Copyright 2012  Lasana Murray <dev@trinistorm.org>
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
 * @package pelau\web
 *
 *  Class representing a client browser.
 */

namespace pelau\net\http;


class Browser extends \pelau\php\Object
{

    use \pelau\util\Composition;
    use \pelau\util\ListAddition;


    public function send(Header $h, $status)
    {

        header("$h", true, $status);

        return $this;

    }

    public function addListener(HttpListener $l)
    {

        $this->_add($l);
        return $this;

    }

    public function request(HttpInvoker $invoker)
    {

        $this->_each(function (HttpListener $l) use ($invoker) {

                    $invoker->invoke($l);
                }
        );

    }

}