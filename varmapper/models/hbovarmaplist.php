<?php

/**
 * Variant Map List manager.
 *
 *  
 */
class hboVarMapList extends oxList {

    protected $_sObjectsInListName = 'hbovarmap';
    protected $_bMappingsLoaded = false;

    /**
     * Load Variant Mappings
     * 
     * @todo load should be limited to specific attributes by oxattributs::oxid
     */
    function loadMappings() {
        if (!$this->_bMappingsLoaded) {
            $sViewName = $this->getBaseObject()->getViewName();
            $oDb = oxDb::getDb();
            $sQ = "select * from {$sViewName} where oxactive=1 and oxshopid='" .
                    $this->getConfig()->getShopId() . "';";
            $this->selectString($sQ);
            $this->_bMappingsLoaded = true;
        }
        return $this;
    }

    /**
     * Try to lookup variant text in key an replace with processed sFormat string 
     * if found. Otherwise append marker to given key.
     * 
     * @todo optimize? i.e. preprocess list on load and use isset
     * 
     * @param string $sString
     * @param string $sMarker - append as Marker if key not present, defaults to '' 
     * @param string $sFormat - e.g. "{key} ({value})" to append additional infos,  
     *                          defaults to replace i.e. "{value}"
     * @return string
     */
    function mapVariant($sString, $sMarker = '', $sFormat = "{value}") {
        $sReturn = $sString . $sMarker;
        foreach ($this->getArray() as $oHboVarMap) {
            $key = $oHboVarMap->hbovarmaps__key->value;
            if ($key === $sString) {
                $value = $oHboVarMap->hbovarmaps__value->value;
                $sReturn = str_replace(['{key}', '{value}'], [$key, $value], $sFormat);
                break;
            }
        }
        return $sReturn;
    }

    /**
     * @see mapVariant
     * @param type $sString
     * @param type $sFormat
     * @param type $sMarker
     * @return string
     */
    static function map($sString, $sMarker = '', $sFormat = "{value}") {
        return oxRegistry::get('hboVarMapList')
                        ->loadMappings()
                        ->mapVariant($sString, $sMarker, $sFormat);
    }

}
