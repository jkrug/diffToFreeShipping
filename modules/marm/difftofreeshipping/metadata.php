<?php

/**
 * @author  Joscha Krug <krug@marmalade.de>
 * @url     http://www.marmalade.de
 * @license MIT License http://www.opensource.org/licenses/mit-license.html
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'marm/difftofreeshipping',
    'title'        => 'marmalade :: Diff to free shipping',
    'description'  => 'Display the difference to free shipping.',
    'thumbnail'    => 'marmalade.jpg',
    'version'      => '1.1',
    'author'       => 'Joscha Krug',
    'url'          => 'http://www.marmalade.de',
    'email'        => 'krug@marmalade.de',
    'extend'       => array(
        'oxbasket' => 'marm/difftofreeshipping/models/marm_diff_oxbasket'
    ),
    'blocks'       => array(
        array(
            'template'  => 'widget/minibasket/minibasket.tpl',
            'block'     => 'widget_minibasket_total',
            'file'      => '/views/blocks/diffToFree.tpl',
        )
    )
);
