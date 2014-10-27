<?php

namespace Gsdev\Wordpress\Data;

/**
 * @todo read through the docs and ad all the values
 *
 * Class PostValues
 * @package Gsdev\Wordpress\Data
 */
class Values
{

    const TYPE_POST = 'post';
    const TYPE_PAGE = 'page';

    const STATUS_PUBLISH = 'publish';
    const STATUS_DRAFT   = 'draft';
    const STATUS_FUTURE  = 'future';
    const STATUS_PENDING = 'pending';
    const STATUS_PRIVATE = 'private';

    const ORDER_DESC = 'desc';
    const ORDER_ASC  = 'asc';

    const ORDERBY_DATE = 'post_date';
}
