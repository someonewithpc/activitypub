<?php

/*
 * This file is part of the ActivityPub package.
 *
 * Copyright (c) landrok at github.com/landrok
 *
 * For the full copyright and license information, please see
 * <https://github.com/landrok/activitypub/blob/master/LICENSE>.
 */

namespace ActivityPub\Type\Core;

/**
 * \ActivityPub\Type\Core\Collection is an implementation of one of the 
 * Activity Streams Core Types.
 *
 * Collection objects are a specialization of the base Object that serve
 * as a container for other Objects or Links.
 *
 * @see https://www.w3.org/TR/activitystreams-core/#collections
 */
class Collection extends ObjectType
{
    /**
     * @var string
     */
    protected $type = 'Collection';

    /**
     * @var string
     */
    protected $id;

    /**
     * A non-negative integer specifying the total number of objects 
     * contained by the logical view of the collection.
     * This number might not reflect the actual number of items 
     * serialized within the Collection object instance.
     * 
     * @see https://www.w3.org/TR/activitystreams-vocabulary/#dfn-totalitems
     *
     * @var int
     */
    protected $totalItems;

    /**
     * In a paged Collection, indicates the page that contains the most 
     * recently updated member items. 
     * 
     * @see https://www.w3.org/TR/activitystreams-vocabulary/#dfn-current
     * 
     * @var string
     *    | null
     *    | \ActivityPub\Type\Core\Link
     */
    protected $current;

    /**
     * @var string
     */
    protected $first;

    /**
     * @var string
     */
    protected $last;

    /**
     * @var array
     */
    protected $items = [];
}
