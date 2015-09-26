<?php

/**
 * 
 *
 * @category      module
 * @package       varmapper
 * @author        Heinrich Boers
 * @link          www.heinrich-boers.net
 * @copyright (C) 2015 Heinrich Boers
 */
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
/**
 * TODO: Replace sample names and paths (like '[ParentClassName]', '[your_template]', etc.) with real ones You need.
 * TODO: Uncomment lines You need, add more if needed, delete not required.
 * TODO: Remove all this TODO comment.
 */
$aModule = array(
    'id' => 'hbovarmapper',
    'title' => array(
        'de' => 'HBo Variant Mapper',
        'en' => 'HBo Variant Mapper',
    ),
    'description' => array(
        'de' => 'HBo Variant Mapper Module',
        'en' => 'HBo Variant Mapper Module',
    ),
    'thumbnail' => 'out/pictures/picture.png',
    'version' => '0.0.1',
    'author' => 'Heinrich Boers',
    'url' => 'www.heinrich-boers.net',
    'email' => 'mail@heinrich-boers.net',
    'extend' => array(
        'oxVariantHandler' => 'hbo/varmapper/models/hbovarmapperoxvarianthandler',
    ),
    'files' => array(
        'hbovarmappermodule' => 'hbo/varmapper/core/hbovarmappermodule.php',
        'hbovarmapperevents' => 'hbo/varmapper/core/hbovarmapperevents.php',
        'hbovarmap' => 'hbo/varmapper/models/hbovarmap.php',
        'hbovarmaplist' => 'hbo/varmapper/models/hbovarmaplist.php',
    ),
    'templates' => array(),
    'blocks' => array(),
    'settings' => array(
        /*
        array(
            'group' => 'hboVarMapperConfiguration',
            'name' => 'hboVarMapperAddMarker',
            'type' => 'bool',
            'value' => false,
        ),
        //*/
    ),
    'events' => array(
        'onActivate' => 'hboVarMapperEvents::onActivate',
        'onDeactivate' => 'hboVarMapperEvents::onDeactivate',
    ),
);
