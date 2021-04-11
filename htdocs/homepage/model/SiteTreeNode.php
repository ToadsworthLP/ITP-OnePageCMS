<?php


/**
 * Class SiteTreeNode
 */
class SiteTreeNode
{
    private string $type;
    private array $attributes;

    /**
     * SiteTreeNode constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param string $name
     * @param string $value
     */
    public function addAttribute(string $name, string $value) {
        $this->attributes[$name] = $value;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $name
     * @param string|null $default
     * @return string|null
     */
    public function getAttribute(string $name, string $default = null): ?string
    {
        if(isset($this->attributes[$name])) {
            return $this->attributes[$name];
        } else {
            return $default;
        }
    }
}