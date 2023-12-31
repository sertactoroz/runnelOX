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

namespace Google\Service\Cloudchannel;

class GoogleCloudChannelV1ChangeRenewalSettingsRequest extends \Google\Model
{
  /**
   * @var GoogleCloudChannelV1RenewalSettings
   */
  public $renewalSettings;
  protected $renewalSettingsType = GoogleCloudChannelV1RenewalSettings::class;
  protected $renewalSettingsDataType = '';
  /**
   * @var string
   */
  public $requestId;

  /**
   * @param GoogleCloudChannelV1RenewalSettings
   */
  public function setRenewalSettings(GoogleCloudChannelV1RenewalSettings $renewalSettings)
  {
    $this->renewalSettings = $renewalSettings;
  }
  /**
   * @return GoogleCloudChannelV1RenewalSettings
   */
  public function getRenewalSettings()
  {
    return $this->renewalSettings;
  }
  /**
   * @param string
   */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /**
   * @return string
   */
  public function getRequestId()
  {
    return $this->requestId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudChannelV1ChangeRenewalSettingsRequest::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ChangeRenewalSettingsRequest');
