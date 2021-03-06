<?php

namespace LinkPreview\Model;

/**
 * Class Link
 */
class Link implements LinkInterface
{
    /**
     * @var string $content Website content
     */
    private $content;
    /**
     * @var string $contentType Website content type
     */
    private $contentType;
    /**
     * @var string $description Link description
     */
    private $description;
    /**
     * @var string $image Url to image
     */
    private $image;
    /**
     * @var array $images Urls to images
     */
    private $pictures;
    /**
     * @var string $realUrl
     */
    private $realUrl;
    /**
     * @var string $title Link title
     */
    private $title;
    /**
     * @var string $pageTitle Page title
     */
    private $pageTitle;
    /**
     * @var string $url
     */
    private $url;

    /**
     * @param string $url
     */
    public function __construct($url = null)
    {
        if (null !== $url) {
            $this->setUrl($url);
        }
    }

    /**
     * @inheritdoc
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @inheritdoc
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @inheritdoc
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @inheritdoc
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @inheritdoc
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * @inheritdoc
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getRealUrl()
    {
        return $this->realUrl;
    }

    /**
     * @inheritdoc
     */
    public function setRealUrl($realUrl)
    {
        $this->realUrl = $realUrl;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @inheritdoc
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * @inheritdoc
     */
    public function setPageTitle($title)
    {
        $this->pageTitle = $title;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @inheritdoc
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setPictures(array $urls)
    {
        $this->pictures = $urls;

        return $this;
    }
}