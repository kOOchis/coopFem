<?php

class N2SmartSliderFeatureLazyLoad
{

    private $slider;

    public $isEnabled = 0, $neighborCount = 0, $layerImageOptimize = 0, $layerImageTablet = 50, $layerImageMobile = 30;

    public function __construct($slider) {

        $this->slider = $slider;

        $this->isEnabled     = intval($slider->params->get('imageload', 0));
        $this->neighborCount = intval($slider->params->get('imageloadNeighborSlides', 0));

        $this->layerImageOptimize = intval($slider->params->get('layer-image-optimize', 0)) && !$slider->isAdmin;
        $this->layerImageTablet   = min(100, max(1, intval($slider->params->get('layer-image-tablet', 50)))) / 100;
        $this->layerImageMobile   = min(100, max(1, intval($slider->params->get('layer-image-mobile', 30)))) / 100;

        $this->layerImageSizeBase64     = intval($slider->params->get('layer-image-base64', 0)) && !$slider->isAdmin;
        $this->layerImageSizeBase64Size = max(0, intval($slider->params->get('layer-image-base64-size', 5))) * 1024;

    }

    public function makeJavaScriptProperties(&$properties) {

        $properties['lazyLoad']         = $this->isEnabled;
        $properties['lazyLoadNeighbor'] = $this->neighborCount;
    }

    public function isSlideLazyLoaded($slideIndex) {
        if ($this->isEnabled == 0) {
            return false;
        }
        if ($this->slider->_activeSlide == $slideIndex) {
            return false;
        }

        if ($this->lazyLoad->neighborCount) {
            $dist         = abs($this->slider->_activeSlide - $slideIndex);
            $distanceBack = abs($slideIndex - count($this->_slides) - 1);
            if ($distanceBack < $dist) {
                $dist = $distanceBack;
            }
            if ($dist <= $this->lazyLoad->neighborCount) {
                return false;
            }
        }
        return true;
    }
}