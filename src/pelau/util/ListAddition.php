<?php

/**
 *
 * timestamp: Mar 3, 2013 2:36:38 AM
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
 * Trait class for providing Composite functionality for lists.
 *
 */

namespace pelau\util;


trait ListAddition
{



    private function _add($member)
    {

        ($this->members || ($this->members = new ArrayList));

        $this->members->set($member);

        return $this;

    }



}