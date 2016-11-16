<?php

namespace Treant;

class StructureTest extends \PHPUnit_Framework_TestCase
{
    public function testInitializeStructure()
    {
        $rootNode = new Structure\FileSystem\RootNode();
        $treantStucture = new Structure($rootNode);
    }
}