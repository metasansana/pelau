<?php

/**
 *
 * timestamp: Dec 22, 2012 6:48:02 PM
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
 * @package proof\net\http;
 *
 *  Interface for accepting POST events.
 *
 */

namespace proof\net\http;


interface PostListener
{

    /**
     *  React to a POST event.
     * @param \proof\net\http\PostEvent $e
     */
    public function onPost(PostEvent $e);


}