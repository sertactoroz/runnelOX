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

class GoogleInternalAppsWaldoV1alphaUpcomingCommitmentContext extends \Google\Model
{
  /**
   * @var GoogleInternalAppsWaldoV1alphaUserStatus
   */
  public $nextCommitmentStatus;
  protected $nextCommitmentStatusType = GoogleInternalAppsWaldoV1alphaUserStatus::class;
  protected $nextCommitmentStatusDataType = '';
  /**
   * @var string
   */
  public $nextCommitmentTime;

  /**
   * @param GoogleInternalAppsWaldoV1alphaUserStatus
   */
  public function setNextCommitmentStatus(GoogleInternalAppsWaldoV1alphaUserStatus $nextCommitmentStatus)
  {
    $this->nextCommitmentStatus = $nextCommitmentStatus;
  }
  /**
   * @return GoogleInternalAppsWaldoV1alphaUserStatus
   */
  public function getNextCommitmentStatus()
  {
    return $this->nextCommitmentStatus;
  }
  /**
   * @param string
   */
  public function setNextCommitmentTime($nextCommitmentTime)
  {
    $this->nextCommitmentTime = $nextCommitmentTime;
  }
  /**
   * @return string
   */
  public function getNextCommitmentTime()
  {
    return $this->nextCommitmentTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleInternalAppsWaldoV1alphaUpcomingCommitmentContext::class, 'Google_Service_Contentwarehouse_GoogleInternalAppsWaldoV1alphaUpcomingCommitmentContext');
