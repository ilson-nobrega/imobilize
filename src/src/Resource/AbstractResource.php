<?php
namespace Imobilize\Src\Resource;

abstract class AbstractResource
{
    protected $dbFactory = null;

    public function __construct($dbFactory)
    {
        $this->dbFactory = $dbFactory;
    }
}