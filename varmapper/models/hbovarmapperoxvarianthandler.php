<?php
/**
 * 
 */

class hboVarMapperOxVariantHandler extends hboVarMapperOxVariantHandler_parent {

    /**
     * @see OxVariantHandler::_fillVariantSelections
     * @param type $oVariantList
     * @param type $iVarSelCnt
     * @param type $aFilter
     * @param type $sActVariantId
     * @return array
     */
    protected function _fillVariantSelections($oVariantList, $iVarSelCnt, &$aFilter, $sActVariantId) {

        $aSelections = array();

        // filling selections
        foreach ($oVariantList as $oVariant) {

            $aNames = $this->_getSelections($oVariant->oxarticles__oxvarselect->getRawValue());
            $blActive = ($sActVariantId === $oVariant->getId()) ? true : false;
            for ($i = 0; $i < $iVarSelCnt; $i++) {
                $sName = isset($aNames[$i]) ? trim($aNames[$i]) : false;
                if ($sName) {
                    $sHash = md5($sName);

                    // filling up filter
                    if ($blActive) {
                        $aFilter[$i] = $sHash;
                    }

                    $sName = hboVarMapList::map($sName, ' (!)' /* ,'{key} ({value})'*/);

                    $aSelections[$oVariant->getId()][$i] = array('name' => $sName, 'disabled' => null, 'active' => false, 'hash' => $sHash);
                }
            }
        }

        return $aSelections;
    }

}
