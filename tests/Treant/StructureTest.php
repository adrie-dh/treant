<?php

namespace Treant;

class StructureTest extends \PHPUnit_Framework_TestCase
{
    public function testInitializeStructure()
    {
        $rootNode = new Plugin\FileSystem\RootNode();
        $treantStucture = new Structure($rootNode);
        $this->assertInstanceOf(
            '\Treant\Structure',
            $treantStucture
        );
    }

    public function testRootNodeHasAcceptableChildNodeClassNamesList()
    {
        $rootNode = new Plugin\FileSystem\RootNode();
        $this->assertNotEmpty(
            $rootNode->getAcceptableChildNodeClassNamesList()
        );
    }
}
