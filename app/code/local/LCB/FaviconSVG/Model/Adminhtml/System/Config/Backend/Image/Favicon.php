<?php

/**
 * Bring back svg as favicon allowed type
 * 
 * @author Silpion Tomasz Gregorczyk <tom@lcbrq.com>
 * @author Marcin Gierus <martin@lcbrq.com>
 */
class LCB_FaviconSVG_Model_Adminhtml_System_Config_Backend_Image_Favicon extends Mage_Adminhtml_Model_System_Config_Backend_Image_Favicon {

    /**
     * Getter for allowed extensions of uploaded files.
     *
     * @return array
     */
    protected function _getAllowedExtensions()
    {
        return array('ico', 'png', 'gif', 'jpg', 'jpeg', 'apng', 'svg');
    }

    /**
     * Overwritten parent method for adding validators
     *
     * @param Mage_Core_Model_File_Uploader $uploader
     */
    protected function addValidators(Mage_Core_Model_File_Uploader $uploader)
    {

        if ($uploader->getFileExtension() === "svg") {
            return $this;
        }

        parent::addValidators($uploader);
    }

}
