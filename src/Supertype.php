<?php

namespace mtgsdk;

class Supertype implements \JsonSerializable
{
    use DataBag, QueriesAllAsArray;

    const RESOURCE = 'supertypes';
}
