<?php
namespace pelau\web;
/**
 * timestamp Oct 20, 2012 4:29:02 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\web
 *
 *  Filter for safe html input.
 *
 */

class HtmlFilter implements pelau\util\Filter
{

    /**
     * The encoding used in filtering.
     * @var string $enc
     * @access private
     */
    private $enc;

    /**
     * A bitmask of flags, which specify how to handle quotes.
     * @var int $flags
     * @access private
     */
    private $flags;

    /**
     * Constructs a new HtmlFilter.
     * @param string $enc   The encoding used in filtering.
     * @param int $flags    A bitmask of flags, which specify how to handle quotes.
     */
    public function __construct($enc, $flags)
    {

        $this->enc = $enc;
        $this->flags = $flags;

    }

    public function on($target)
    {
        return htmlentities($target, $this->flags, $this->enc);
    }




}