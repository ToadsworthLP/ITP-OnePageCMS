<?php

/**
 * Base class for classes that provide access to the database (gateway classes)
 */
abstract class DatabaseGateway
{
    /**
     * Fetches the object with the given ID from the database.
     * @param int $id The ID of the desired entry
     * @return mixed The instance of the object corresponding to the database row
     */
    public static abstract function fetch(int $id);

    /**
     * Creates a new entry in the database using the data from the given object.
     * The ID field is ignored when the entry is created since a free one will be assigned automatically.
     * @param object $object The source object
     * @return int The ID of the newly created entry
     */
    public static abstract function create(object $object): int;

    /**
     * Updates the entry in the database corresponding to the given object using the data from the given object.
     * @param object $object The object to update
     */
    public static abstract function update(object $object): void;

    /**
     * Deletes the entry in the database corresponding to the given object.
     * @param object $object The object to delete
     */
    public static abstract function delete(object $object): void;
}