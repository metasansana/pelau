<?php

/**
 *
 * timestamp: Mar 25, 2013 8:59:09 PM
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
 * @package pelau\sql\pdo
 *
 *  Class class for creating PDO connections.
 */
namespace pelau\sql\pdo;

abstract class PDOConnector
{

    /**
     * Attempts to create a PDOConnection.
     * @param string $dsn
     * @param string $user = ''
     * @param string $passwd = ''
     * @return \pelau\sql\pdo\PDOConnection
     */
    public function connect($dsn, $user='', $passwd='')
    {

        try
        {

            $pdo = new \PDO($dsn, $user, $passwd);

            $this->configure($pdo);

            return new \pelau\sql\pdo\PDOConnection($pdo);

        }
        catch (\PDOException $err)
        {

            $this->onError($err);

        }


    }

    /**
     * Method called when a \PDOException occurs upon connecting.
     * @var \PDOException $err
     */
    abstract protected function onError(\PDOException $err);

    /**
     * Method for configuring a PDO object.
     * @var \PDO
     */
    abstract protected function configure(\PDO $pdo);


}