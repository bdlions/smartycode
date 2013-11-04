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
    public $functionsMap = array();
    public $actionsMap = array();
    public $variablesMap = array();
    
    public function __construct($xml, $mapping) {
        //$project = simplexml_load_string($xml);
        $this->blocks = $xml->stage->sprites->sprite->scripts->script->block;
        /*$block = get_object_vars($this->blocks);
        $b = $block['block'];
        $bl = get_object_vars($b);
        $keys = array_keys($bl);
        echo $keys[0];
        foreach ($bl as $key => $value) {
            print_r($value); echo "<br>";
        }
        echo "      ---------------------";*/
        //print_r($bl);
        //$this->blockMap = json_decode(file_get_contents("http://localhost:82/json/blockMap"), true);
        $this->blockMap = $mapping["operators"];
        $this->functionsMap = $mapping["functions"];
        $this->actionsMap = $mapping["actions"];
        $this->variablesMap = $mapping['variables'];
        //print_r(count($this->variablesMap));
    }
    
    public function getAlternateValue($name){
        if(isset($this->blockMap[(string)$name])){
            return $this->blockMap[(string)$name];
        }
        return $name;
    }
    
    public function isOperator($value) {
        if(isset($this->blockMap[(string)$value])){
            return true;
        }
        return false;
    }
    
    public function isFunction($name){
        if(isset($this->functionsMap[(string)$name])){
            return true;
        }
        return false;
    }
    
    
}

?>
