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

namespace Google\Service\Contentwarehouse;

class GeostoreMediaItemProto extends \Google\Model
{
  /**
   * @var string
   */
  public $googleUrl;
  /**
   * @var string
   */
  public $mediaFormat;
  /**
   * @var string
   */
  public $mediaKey;
  /**
   * @var GeostoreMediaItemProtoMediaSize
   */
  public $mediaSize;
  protected $mediaSizeType = GeostoreMediaItemProtoMediaSize::class;
  protected $mediaSizeDataType = '';

  /**
   * @param string
   */
  public function setGoogleUrl($googleUrl)
  {
    $this->googleUrl = $googleUrl;
  }
  /**
   * @return string
   */
  public function getGoogleUrl()
  {
    return $this->googleUrl;
  }
  /**
   * @param string
   */
  public function setMediaFormat($mediaFormat)
  {
    $this->mediaFormat = $mediaFormat;
  }
  /**
   * @return string
   */
  public function getMediaFormat()
  {
    return $this->mediaFormat;
  }
  /**
   * @param string
   */
  public function setMediaKey($mediaKey)
  {
    $this->mediaKey = $mediaKey;
  }
  /**
   * @return string
   */
  public function getMediaKey()
  {
    return $this->mediaKey;
  }
  /**
   * @param GeostoreMediaItemProtoMediaSize
   */
  public function setMediaSize(GeostoreMediaItemProtoMediaSize $mediaSize)
  {
    $this->mediaSize = $mediaSize;
  }
  /**
   * @return GeostoreMediaItemProtoMediaSize
   */
  public function getMediaSize()
  {
    return $this->mediaSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeostoreMediaItemProto::class, 'Google_Service_Contentwarehouse_GeostoreMediaItemProto');
