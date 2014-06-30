<?php
/**
 * Description of CodeBlock
 *
 * @author Nazmul
 */
class CodeBlock {
    public $block = array();
    public $blockMap = array();
    public $arithmeticOperatorsMap = array();
    public $functionsMap = array();
    public $actionsMap = array();
    public $variablesMap = array();
    public $functionParamsMap = array();
    public function __construct($xml, $mapping) {
        $this->block = $xml;
        $this->blockMap = $mapping["operators"];
        $this->arithmeticOperatorsMap = $mapping["arithmetic_operators"];
        $this->functionsMap = $mapping["functions"];
        $this->actionsMap = $mapping["actions"];
        $this->functionParamsMap = $mapping["function_params"];
        if( isset($mapping['variables']))
        {
            $this->variablesMap = $mapping['variables'];
        }
    }
    
    public function getAlternateValue($name){
        if(isset($this->blockMap[(string)$name])){
            return $this->blockMap[(string)$name];
        }
        return $name;
    }
    
    public function isArithmeticOperator($value) {
        if(isset($this->arithmeticOperatorsMap[(string)$value])){
            return true;
        }
        return false;
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
    
    public function getAlternateFunctionParamName($name){
        if(isset($this->functionParamsMap[(string)$name])){
            return $this->functionParamsMap[(string)$name];
        }
        return $name;
    }
}

?>
