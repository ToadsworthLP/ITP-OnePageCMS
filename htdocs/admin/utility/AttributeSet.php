<?php
include_once "common/model/Block.php";
include_once "common/gateway/AttributeGateway.php";

class AttributeSet
{
    private array $attributes;

    /**
     * Creates an AttributeSet for the given block.
     * @param Block $target The block to create this instance for
     */
    public function __construct(Block $target)
    {
        $attributeList = AttributeGateway::fetchAll(["block" => $target->getID()]);

        $this->attributes = array();
        foreach ($attributeList as $a) {
            $this->attributes[$a->name] = ($a instanceof TextAttribute ? $a->text : $a->getFile()->getID());
        }
    }

    public function get(string $key, string $default = "") : string {
        if(isset($this->attributes[$key])) {
            return $this->attributes[$key];
        } else {
            return $default;
        }
    }
}