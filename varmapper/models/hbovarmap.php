<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hboVarMap
 *
 * Handle Mappings
 * 
 * currently simply replacing text w/o considering language or attribute 
 * thus extend oxBase
 * 
 * @author hboers
 */
class hboVarMap extends oxBase {

    /**
     * Current class name
     *
     * @var string
     */
    protected $_sClassName = 'hbovarmap';

     /**
     * Class constructor, initiates parent constructor (parent::oxBase()).
     */
    public function __construct() {
        parent::__construct();
        $this->init('hbovarmaps');
    }

    
    
}
