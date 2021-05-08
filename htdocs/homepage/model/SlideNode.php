<?php
include_once "common/config/PathConfig.php";

class SlideNode
{
    public string $title;
    public string $text;
    public string $buttonText;
    public string $buttonLink;
    public string $buttonColor;
    public string $buttonHoverColor;
    public string $buttonTextColor;
    public ?string $imagePath;

    /**
     * SlideNode constructor.
     * @param string $title
     * @param string $text
     * @param string $buttonText
     * @param string $buttonLink
     * @param string $buttonColor
     * @param string $buttonHoverColor
     * @param string $buttonTextColor
     * @param string|null $image
     */
    public function __construct(string $title, string $text, string $buttonText, string $buttonLink, string $buttonColor, string $buttonHoverColor, string $buttonTextColor, ?string $image)
    {
        $this->title = $title;
        $this->text = $text;
        $this->buttonText = $buttonText;
        $this->buttonLink = $buttonLink;
        $this->buttonColor = $buttonColor;
        $this->buttonHoverColor = $buttonHoverColor;
        $this->buttonTextColor = $buttonTextColor;
        $this->imagePath = $image ? PathConfig::IMAGE_PATH_FULL.$image : null;
    }
}
