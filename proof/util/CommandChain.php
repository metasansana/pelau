<?php

/**
 *
 * timestamp: Dec 8, 2012 7:45:28 PM
 * encoding: UTF-8
 *
 * Copyright 2012  Lasana Murray <dev@trinistorm.org>
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
 * @package proof\util;
 *
 * Composite class for running Chainables.
 */

namespace proof\util;



class CommandChain
{

    /**
     * The list of commands.
     * @var proof\util\ArrayList $list
     * @access private
     */
    private $links;

    public function __construct()
    {
        $this->links = new ArrayList;

    }

    /**
     *  Adds a chainable to the list of commands.
     * @param \proof\util\Chainable $link
     * @return proof\util\CommandChain
     */
    public function add(Chainable $link)
    {
        $this->links->add($link);
        return $this;
    }

    /**
     * Attempts to handle a command internally.
     * @param mixed $link
     * @param \proof\util\ArrayList $args
     * @return boolean True if a command is handled , false if otherwise.
     */
    public function runCommand($link, ArrayList $args = null)
    {

        foreach($this->links as $link)
        {
            if($link->onCommand($link, $args))
                    return true;
        }

        return false;

    }
}