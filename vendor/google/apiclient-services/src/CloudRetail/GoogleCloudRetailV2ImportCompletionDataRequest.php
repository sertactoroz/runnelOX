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

namespace Google\Service\CloudRetail;

class GoogleCloudRetailV2ImportCompletionDataRequest extends \Google\Model
{
  /**
   * @var GoogleCloudRetailV2CompletionDataInputConfig
   */
  public $inputConfig;
  protected $inputConfigType = GoogleCloudRetailV2CompletionDataInputConfig::class;
  protected $inputConfigDataType = '';
  /**
   * @var string
   */
  public $notificationPubsubTopic;

  /**
   * @param GoogleCloudRetailV2CompletionDataInputConfig
   */
  public function setInputConfig(GoogleCloudRetailV2CompletionDataInputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /**
   * @return GoogleCloudRetailV2CompletionDataInputConfig
   */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /**
   * @param string
   */
  public function setNotificationPubsubTopic($notificationPubsubTopic)
  {
    $this->notificationPubsubTopic = $notificationPubsubTopic;
  }
  /**
   * @return string
   */
  public function getNotificationPubsubTopic()
  {
    return $this->notificationPubsubTopic;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRetailV2ImportCompletionDataRequest::class, 'Google_Service_CloudRetail_GoogleCloudRetailV2ImportCompletionDataRequest');
