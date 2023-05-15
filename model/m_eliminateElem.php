<?php
function eliminElem($elem, $index)
{
    unset($elem[$index]);

    return $elem;
}

function elimAll($elem)
{
    unset($elem);
}