<?php
namespace proof\net\http;
/**
 * timestamp Nov 5, 2012 4:30:15 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Interface representing http session interaction.
 *
 */
interface HttpSessionState extends Cache
{

    public function  begin();

    public function regenerate();

    public function destroy();

    public function getPrevious();



}