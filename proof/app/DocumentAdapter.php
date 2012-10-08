<?php
namespace proof\app;
/**
 * timestamp Oct 8, 2012 4:36:26 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Parent class of classes that modify Document implementors.
 *
 */
abstract class DocumentAdapter
{

    /**
     * The document that will be modified.
     * @var proof\app\Document
     * @access private
     */
    private $doc;

    /**
     * Constructs a new Document Adapter
     * @param \proof\app\Document $doc    The document that will be modified.
     */
    public function __construct(Document $doc)
    {

        $this->doc = $doc;

    }

}