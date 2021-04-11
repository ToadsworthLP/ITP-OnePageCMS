<?php


/**
 * Represents a single block in the site tree
 */
class SiteTreeNode
{
    private string $type;
    private array $attributes;

    /**
     * Creates a new node of the given type.
     * @param string $type File name of the template to be included
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Adds an attribute to this node.
     * @param string $name The name of the attribute
     * @param string $value The value of the attribute
     */
    public function addAttribute(string $name, string $value) {
        $this->attributes[$name] = $value;
    }

    /**
     * Gets the type of this node.
     * @return string The file name of the template to be included
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Gets an attribute value by its name.
     * @param string $name The name of the attribute
     * @param string|null $default The default value, in case the attribute of the given name does not exist (defaults to null)
     * @return string|null The attribute value or the default value if the attribute was not found
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