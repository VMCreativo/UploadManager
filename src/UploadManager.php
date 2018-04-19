<?php

namespace VMCreativo\UploadManager;

/**
 * Class UploadManager
 *
 * Handles file upload and storage
 * @package VMCreativo\UploadManager
 */
class UploadManager
{

    /**
     * UploadManager constructor.
     */
    public function __construct()
    {

    }


    /**
     * Return property if exit here or in service object, otherwise null.
     *
     * @param $property
     * @return mixed / null
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }

        return null;
    }
}