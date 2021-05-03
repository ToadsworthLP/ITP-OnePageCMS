<?php
include_once "common/config/PathConfig.php";

/**
 * Represents a single block in the site tree
 */
class SiteTreeNode
{
    private int $id;
    private string $type;
    private array $attributes = [];

    /**
     * Creates a new node of the given type.
     * @param string $type File name of the template to be included
     * @param int $id The ID of the block, as saved in the DB
     */
    public function __construct(string $type, int $id)
    {
        $this->type = $type;
        $this->id = $id;
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
     * Gets the type of this node.
     * @return string The file name of the template to be included
     */
    public function getID(): string
    {
        return $this->id;
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

    /**
     * Gets an attribute value by its name and interprets it as a file reference.
     * @param string $name The name of the attribute
     * @param string|null $default The default value, in case the attribute of the given name does not exist (defaults to null)
     * @return string|null The path to the file referenced by the attribute
     */
    public function getAttributeFilePath(string $name, string $default = null): ?string
    {
        if(isset($this->attributes[$name])) {
            return PathConfig::IMAGE_PATH_FULL.$this->attributes[$name];
        } else {
            return $default;
        }
    }
}