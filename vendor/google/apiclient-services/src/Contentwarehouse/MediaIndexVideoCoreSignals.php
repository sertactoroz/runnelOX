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

class MediaIndexVideoCoreSignals extends \Google\Collection
{
  protected $collection_key = 'videoFrames';
  /**
   * @var MediaIndexVideoCentroid
   */
  public $centroid;
  protected $centroidType = MediaIndexVideoCentroid::class;
  protected $centroidDataType = '';
  /**
   * @var MediaIndexVideoFrame[]
   */
  public $videoFrames;
  protected $videoFramesType = MediaIndexVideoFrame::class;
  protected $videoFramesDataType = 'array';

  /**
   * @param MediaIndexVideoCentroid
   */
  public function setCentroid(MediaIndexVideoCentroid $centroid)
  {
    $this->centroid = $centroid;
  }
  /**
   * @return MediaIndexVideoCentroid
   */
  public function getCentroid()
  {
    return $this->centroid;
  }
  /**
   * @param MediaIndexVideoFrame[]
   */
  public function setVideoFrames($videoFrames)
  {
    $this->videoFrames = $videoFrames;
  }
  /**
   * @return MediaIndexVideoFrame[]
   */
  public function getVideoFrames()
  {
    return $this->videoFrames;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MediaIndexVideoCoreSignals::class, 'Google_Service_Contentwarehouse_MediaIndexVideoCoreSignals');
