<?php

namespace Treant\Plugin\FileSystem;

class RootNode extends \Treant\RootNode
{
    public function getAcceptableChildNodeClassNamesList()
    {
        return array(
            '\Treant\Plugin\FileSystem\Folder',
            '\Treant\Plugin\FileSystem\File'
        );
    }
}