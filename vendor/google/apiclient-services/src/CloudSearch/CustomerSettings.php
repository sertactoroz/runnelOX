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

namespace Google\Service\CloudSearch;

class CustomerSettings extends \Google\Model
{
  /**
   * @var AuditLoggingSettings
   */
  public $auditLoggingSettings;
  protected $auditLoggingSettingsType = AuditLoggingSettings::class;
  protected $auditLoggingSettingsDataType = '';
  /**
   * @var VPCSettings
   */
  public $vpcSettings;
  protected $vpcSettingsType = VPCSettings::class;
  protected $vpcSettingsDataType = '';

  /**
   * @param AuditLoggingSettings
   */
  public function setAuditLoggingSettings(AuditLoggingSettings $auditLoggingSettings)
  {
    $this->auditLoggingSettings = $auditLoggingSettings;
  }
  /**
   * @return AuditLoggingSettings
   */
  public function getAuditLoggingSettings()
  {
    return $this->auditLoggingSettings;
  }
  /**
   * @param VPCSettings
   */
  public function setVpcSettings(VPCSettings $vpcSettings)
  {
    $this->vpcSettings = $vpcSettings;
  }
  /**
   * @return VPCSettings
   */
  public function getVpcSettings()
  {
    return $this->vpcSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerSettings::class, 'Google_Service_CloudSearch_CustomerSettings');
