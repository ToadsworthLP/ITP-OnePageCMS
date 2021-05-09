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
            $this->attributes[$a->name] = $a;
        }
    }

    public function get(string $key, string $default = "") : string {
        if(isset($this->attributes[$key])) {
            $attr = $this->attributes[$key];
            return ($attr instanceof TextAttribute ? $attr->text : $attr->getFile()->getID());
        } else {
            return $default;
        }
    }

    public function getRawArray() : array {
        return $this->attributes;
    }
}
