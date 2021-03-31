<?php


/**
 * Base class for all types that represent a row in a table stored in the database.
 */
abstract class DatabaseObject
{
    protected int $id;

    /**
     * DatabaseObject constructor.
     * @param int $id The ID of the object
     */
    public function __construct(int $id = -1)
    {
        $this->id = $id;
    }

    /**
     * Gets the ID of this object.
     * @return int The ID of this object
     */
    public function getID(): int
    {
        return $this->id;
    }

    /**
     * Creates a new entry in the database using the data from this instance and updates the ID of this instance to
     * match the ID value of the created database entry.
     * The ID field is ignored when the entry is created since a free one will be assigned automatically.
     * @return int The ID of the newly created entry
     */
    public function create(): int
    {
        $newID = $this->getGatewayClass()::create($this);
        $this->id = $newID;
        return $newID;
    }

    /**
     * Updates the entry in the database corresponding to this instance using the data from this instance.
     */
    public function update(): void
    {
        $this->getGatewayClass()::update($this);
    }

    /**
     * Deletes the entry in the database corresponding to this instance.
     */
    public function delete(): void
    {
        $this->getGatewayClass()::delete($this);
    }

    /**
     * Gets the full name of the class to be used as gateway class for this object type.
     * @return mixed The name of the gateway class, which should be obtained using ::class
     */
    protected abstract function getGatewayClass();
}