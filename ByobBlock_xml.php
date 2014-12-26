<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ByobBlock
 *
 * @author Alamgir
 */
class ByobBlock {
    public $blocks = array();
    public $blockMap = array();
    
    public function __construct($xml) {
        $project = simplexml_load_string(file_get_contents($xml));
        $this->blocks = $project->stage->sprites->sprite->scripts->script->block;
        
        $this->blockMap = json_decode(file_get_contents("http://localhost/smartycode/json/blockMap.json"), true);
    }
    
    public function getAlternateValue($name){

        if(isset($this->blockMap[(string)$name])){
            return $this->blockMap[(string)$name];
        }
        return $name;
    }
    
    public function isOperator($value) {
        return $value == "reportAnd" ||
                $value == "reportOr";
    }
    
    
}

?>
