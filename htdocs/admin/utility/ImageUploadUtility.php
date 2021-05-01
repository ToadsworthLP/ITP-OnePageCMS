<?php
include_once "common/config/PathConfig.php";
include_once "lib/phpThumb/phpthumb.class.php";

class ImageUploadUtility
{
    private string $tempPath;
    private string $filename;

    /**
     * Creates a new instance of the image upload utility
     * @param string $tempPath The temp path the image was saved to
     * @param string $filename The actual destination file name of the uploaded file
     */
    public function __construct(string $tempPath, string $filename)
    {
        $this->tempPath = $tempPath;
        $this->filename = $filename;
    }

    /**
     * Checks whether the uploaded file is a valid image file.
     * @return bool True if it is valid, otherwise false
     */
    public function isValidImage() : bool {
        $info = getimagesize($this->tempPath);
        if ($info != false && (($info[2] === IMAGETYPE_GIF) || ($info[2] === IMAGETYPE_JPEG) || ($info[2] === IMAGETYPE_PNG))) {
            return true;
        }

        return false;
    }

    /**
     * Moves the uploaded file from the temp path to its final destination.
     * Optionally generates a thumbnail with the given dimensions.
     * @param bool $generateThumbnail Whether to generate a thumbnail for the newly uploaded image
     * @param int $thumbnailWidth The width of the generated thumbnail in pixels
     * @param int $thumbnailHeight The height of the generated thumbnail in pixels
     * @return bool True if the operation was successful, otherwise false
     */
    public function upload(bool $generateThumbnail = false, int $thumbnailWidth = -1, int $thumbnailHeight = -1) : bool {
        $targetPath = PathConfig::IMAGE_PATH_FULL.$this->filename;
        $success = move_uploaded_file($this->tempPath, $targetPath);
        if($generateThumbnail) $success &= $this->generateThumbnail($thumbnailWidth, $thumbnailHeight);

        return $success;
    }

    private function generateThumbnail(int $thumbnailWidth = -1, int $thumbnailHeight = -1) : bool
    {
        $targetPath = realpath(PathConfig::IMAGE_PATH_THUMBNAIL)."/".$this->filename;
        $sourcePath = realpath(PathConfig::IMAGE_PATH_FULL)."/".$this->filename;

        $phpThumb = new phpThumb();
        $phpThumb->setSourceFilename($sourcePath);

        if($thumbnailWidth !== -1) $phpThumb->setParameter("w", $thumbnailWidth);
        if($thumbnailHeight !== -1) $phpThumb->setParameter("h", $thumbnailHeight);
        if($thumbnailWidth !== -1 && $thumbnailHeight != -1) $phpThumb->setParameter("zc", "1");
        $success = $phpThumb->GenerateThumbnail();

        if($success) {
            return $phpThumb->RenderToFile($targetPath);
        } else {
            return false;
        }
    }
}