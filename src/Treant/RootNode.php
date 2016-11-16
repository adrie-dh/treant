<?php

namespace Treant;

abstract class RootNode implements NodeInterface
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