<?php

/**
 *
 * timestamp: Mar 31, 2013 11:02:16 PM
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
 * This class implements Application and HttpListener methods.
 *
 * Use this class to quickly write small Applications.
 */
namespace pelau\app\web;

class WebApplication extends Application implements \pelau\net\http\HttpListener
{

    protected function init()
    {

    }

    protected function onMethod(AppLauncher $launcher)
    {

    }

    public function onGet(\pelau\net\http\Browser $client, \pelau\net\http\GetEvent $evt)
    {

    }

    public function onPost(\pelau\net\http\Browser $client, \pelau\net\http\PostEvent $evt)
    {

    }
}