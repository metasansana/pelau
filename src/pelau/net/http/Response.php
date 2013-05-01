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


class Response extends \pelau\php\Object
{


    /**
     * Replies to the client with a http status.
     * @param int $code
     */
    public function reply($code)
    {

        http_response_code($code);

    }

    /**
     * Sends a header to the client.
     * @param string $header
     * @param int $status
     * @return \pelau\net\http\Response
     */
    public function respond($header, $status=200)
    {

        header("$header", true, $status);

        return $this;

    }

    /**
     * Redirects the client to a new location.
     * @param string $location
     */
    public function redirect($location)
    {

        $this->respond("Location: $location", 302);

    }


    /**
     * Writes output to the client.
     * @param mixed $txt
     */
    public function write($txt)
    {

        echo $txt;

    }


}