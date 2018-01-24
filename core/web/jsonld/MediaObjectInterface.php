<?php

namespace luya\web\jsonld;

/**
 * http://schema.org/MediaObject
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.3
 */
interface MediaObjectInterface extends CreativeWorkInterface
{
    /**
     * Actual bytes of the media object, for example the image file or video file.
     *
     * @param UrlValue $url
     */
    public function setContentUrl(UrlValue $url);
    
    public function getContentUrl();
    
    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag.
     *
     * @param UrlValue $url
     */
    public function setEmbedUrl(UrlValue $url);
    
    public function getEmbedUrl();
    
    /**
     * Date when this media object was uploaded to this site.
     * @param DateValue $date
     */
    public function setUploadDate(DateValue $date);
    
    public function getUploadDate();
}