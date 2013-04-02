<?php

/**
 *
 * timestamp: Mar 31, 2013 10:15:54 PM
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
 * @package pelau\app\web
 */

namespace pelau\app\web;

use pelau\net\http\HttpListener;

class AppLauncher
{

    /**
     *
     * @var \pelau\net\http\Browser
     * @access private
     */
    private $brw;

    /**
     *
     * @var array listeners
     * @access private
     */
    private $listeners = array ();

    public function __construct(\pelau\net\http\Browser $brw)
    {

        $this->brw = $brw;

    }

    public function onGet(HttpListener $l)
    {

        $this->listeners['GET'][] = function() use ($l) {

                    $l->onGet($this->brw, new \pelau\net\http\GetEvent($this->brw));
                };

        return $this;

    }

    public function onPost(HttpListener $l)
    {

        $this->listeners['POST'][] = function() use ($l) {

                    $l->onPost($this->brw, new \pelau\net\http\PostEvent($this->brw));
                };

        return $this;

    }

    public function launch($method)
    {

        $map = new \pelau\util\Map($this->listeners);

        $list = $map->get($method);

        if ($list)
            foreach ($list as $f)
                $f();

    }

}