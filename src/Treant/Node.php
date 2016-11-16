<?php

namespace Treant;

abstract class Node implements NodeInterface
{
    /**
     * Returns an array of classnames deemed acceptable as childnodes
     * @return array
     */
    public function getAcceptableChildNodeClassNamesList()
    {
        return array(); // Implement me
    }
}