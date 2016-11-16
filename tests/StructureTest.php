<?php

namespace Treant;

class StructureTest extends \PHPUnit_Framework_TestCase
{
    public function testInitializeStructure()
    {
        $rootNode = new Plugin\FileSystem\RootNode();
        $treantStucture = new Structure($rootNode);
    }
}