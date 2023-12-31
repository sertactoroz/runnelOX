<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Vision;

class WebPage extends \Google\Collection
{
  protected $collection_key = 'partialMatchingImages';
  /**
   * @var WebImage[]
   */
  public $fullMatchingImages;
  protected $fullMatchingImagesType = WebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  /**
   * @var string
   */
  public $pageTitle;
  /**
   * @var WebImage[]
   */
  public $partialMatchingImages;
  protected $partialMatchingImagesType = WebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  /**
   * @var float
   */
  public $score;
  /**
   * @var string
   */
  public $url;

  /**
   * @param WebImage[]
   */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /**
   * @return WebImage[]
   */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /**
   * @param string
   */
  public function setPageTitle($pageTitle)
  {
    $this->pageTitle = $pageTitle;
  }
  /**
   * @return string
   */
  public function getPageTitle()
  {
    return $this->pageTitle;
  }
  /**
   * @param WebImage[]
   */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /**
   * @return WebImage[]
   */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /**
   * @param float
   */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /**
   * @return float
   */
  public function getScore()
  {
    return $this->score;
  }
  /**
   * @param string
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WebPage::class, 'Google_Service_Vision_WebPage');
