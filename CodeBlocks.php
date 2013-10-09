<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CodeBlocks
 *
 * @author Alamgir
 */
class CodeBlocks {
    public $blocks = array();
    public $firstBlock;
    public function __construct($xml) {
        $xmlObject = simplexml_load_string($xml);
        $this->firstBlock = $xmlObject->Pages[0]->Page[0]->PageBlocks[0]->Block[ 0 ];
        foreach ($xmlObject->Pages[0]->Page[0]->PageBlocks[0]->Block as $block) {
            $this->blocks[(int)$block['id']] = $block;
        }
    }

    public function getBlockById($blockId){
        return $this->blocks[(int)$blockId];
    }
    
    public function isOperator($value){
        return $value == "<" || 
                $value == "==" ||
                $value == ">";
    }
    
    public function isFunctionBlock($blockId){
        if($blockId <= 0) return false;
        $block = $this->getBlockById($blockId);
        if($block->Label == "UserAge" || $block->Label == "sleep"){
            return true;
        }
        return false;
    }

}

?>
