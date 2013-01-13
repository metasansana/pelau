<?php

/**
 *
 * timestamp: Dec 26, 2012 2:22:57 PM
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
 * @package pelau\sql\pdo
 */

namespace pelau\sql\pdo;

use pelau\util\Map;
use pelau\app\Configuration;
use pelau\util\AbstractObservable;
use pelau\app\Logger;

class PDOFactory extends AbstractObservable
{

    /**
     *
     * @var pelau\util\Map $pool
     */
    private $pool;

    /**
     *
     * @var pelau\app\Configuration $config
     */
    private $config;


    /**
     * The logger that will be logged to upon failure.
     * @var pelau\app\Logger $err
     * @access private;
     */
    private $err;


    public function __construct(Configuration $config, Logger $err)
    {

        $this->pool = new Map;
        $this->config = $config;
        $this->err = $err;


    }


    /**
     * Creates a new PDO object
     * @param mixed $name
     * @return \PDO
     */
    public function create($name)
    {

        if ($this->pool->itemAt($name))
            return $this->pool->get($name);

        if (!$this->config->exists($name))
            return $this->err->log ("Database defintion '$name' not found!");

        try
        {

            $creds = new Map($this->config->get($name));

            $pdo = new \PDO($creds->get("dsn"), $creds->get("user"), $creds->get("password"));

            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_SILENT);

            $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

            $this->pool->add($name, $pdo);

            return $pdo;

        }
        catch (\PDOException $exc)
        {

            return $this->log("Could not connect: ".$exc->getMessage());

        }

    }


}