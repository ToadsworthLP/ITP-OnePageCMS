<?php
include_once "common/gateway/FileGateway.php";

class FileAttribute extends BlockAttribute
{
    private int $fileID;

    /**
     * Gets the file referenced by this attribute.
     * @return File The referenced file
     */
    public function getFile(): File
    {
        return FileGateway::fetch(["id" => $this->fileID]);
    }

    /**
     * Sets the file referenced by this attribute.
     * @param File $file The file to reference
     */
    public function setFile(File $file): void
    {
        $this->fileID = $file->getID();
    }

    /**
     * Sets the file ID of this attribute with force.
     * Do not use this unless you know what you are doing.
     * No validation checks are done when this is used, so be careful.
     * @param int $id The ID of the file to assign
     */
    public function forceFileID(int $id): void
    {
        $this->fileID = $id;
    }
}