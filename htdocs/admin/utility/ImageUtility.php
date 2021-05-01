<?php
include_once "common/config/PathConfig.php";
include_once "lib/phpThumb/phpthumb.class.php";

class ImageUtility
{
    private string $tempPath;
    private string $filename;

    /**
     * ImageUtility constructor.
     * @param string $tempPath
     * @param string string $filename
     */
    public function __construct(string $tempPath, string $filename)
    {
        $this->tempPath = $tempPath;
        $this->filename = $filename;
    }

    public function isValidImage() : bool {
        $info = getimagesize($this->tempPath);
        if ($info != false && (($info[2] === IMAGETYPE_GIF) || ($info[2] === IMAGETYPE_JPEG) || ($info[2] === IMAGETYPE_PNG))) {
            return true;
        }

        return false;
    }

    public function upload(string $filename, bool $generateThumbnail = false, int $thumbnailWidth = -1, int $thumbnailHeight = -1) : bool {
        $targetPath = PathConfig::IMAGE_PATH_FULL.$filename;
        $success = move_uploaded_file($this->tempPath, $targetPath);
        if($generateThumbnail) $success &= $this->generateThumbnail($thumbnailWidth, $thumbnailHeight);

        return $success;
    }

    private function generateThumbnail(int $thumbnailWidth = -1, int $thumbnailHeight = -1) : bool
    {
        $targetPath = realpath(PathConfig::IMAGE_PATH_THUMBNAIL)."\\".$this->filename;
        $sourcePath = realpath(PathConfig::IMAGE_PATH_FULL)."\\".$this->filename;

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