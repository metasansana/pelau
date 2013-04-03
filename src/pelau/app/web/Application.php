<?php

/**
 *
 * timestamp: Mar 31, 2013 10:42:54 PM
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
 *
 * Abstract class for creating a pelau web app.
 *
 */
namespace pelau\app\web;

abstract class Application
{

    /**
     * This method is implemented to initialize an appliaciton.
     */
    abstract protected function init();

    /**
     * Child classes implement this method to indicate what classes will be created by the application.
     * @var \pelau\app\web\AppLauncher $launcher
     */
    abstract protected function onMethod(\pelau\app\web\AppLauncher $launcher);


    /**
     * Runs the Application
     */
    final public function run()
    {

        $launcher = new \pelau\app\web\AppLauncher(new \pelau\net\http\Browser);

        $this->onMethod($launcher);

        $launcher->launch($_SERVER['REQUEST_METHOD']);

    }



}