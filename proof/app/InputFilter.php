<?php
namespace proof\app;
/**
 * timestamp Oct 20, 2012 4:24:22 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Interface for filtering user input to an app.
 *
 */
interface InputFilter
{

    /**
     * The value to be filtered.
     * @param mixed $input
     * @return mixed    The filtered value input to the app.
     */
    public function filter($input);

}