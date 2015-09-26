<?php

/**
 * 
 * @category      module
 * @package       varmapper
 * @author        Heinrich Boers
 * @link          www.heinrich-boers.net
 * @copyright     (C) 2015 Heinrich Boers
 */
class hboVarMapperEvents {

    static function onDeactivate() {
        // Nothing to do yet
    }

    static function onActivate() {
        self::createTable();
    }

    /**
     * Create variant mapping table on activate   
     *
     */
    static function createTable() {
        $sSql = "CREATE TABLE IF NOT EXISTS `hbovarmaps` (
            `OXID` char(32) NOT NULL,
            `OXACTIVE` tinyint(1) NOT NULL DEFAULT '1',
            `OXSHOPID` char(32) NOT NULL,
            `KEY` text NOT NULL,
            `VALUE` text NOT NULL,
            PRIMARY KEY (`OXID`)
          );";

        oxDb::getDb()->execute($sSql);
    }

}
