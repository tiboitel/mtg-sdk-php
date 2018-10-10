<?php

namespace mtgsdk;

class Type implements \JsonSerializable
{
    use DataBag, QueriesAllAsArray;

    const RESOURCE = 'types';
}
