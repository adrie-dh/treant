<?php

namespace Treant;

class Structure
{
    /**
     * A structure should contain, and start with, exactly one rootnode.
     * The rootnode implementation also defines which childnodes are acceptable
     * and therefore determines the nature of the structure.
     *
     * @param RootNode $rootNode
     */
    public function __construct(RootNode $rootNode)
    {
    }
}
