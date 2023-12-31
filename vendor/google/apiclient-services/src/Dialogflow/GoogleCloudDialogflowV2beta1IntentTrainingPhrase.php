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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowV2beta1IntentTrainingPhrase extends \Google\Collection
{
  protected $collection_key = 'parts';
  /**
   * @var string
   */
  public $name;
  /**
   * @var GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart[]
   */
  public $parts;
  protected $partsType = GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart::class;
  protected $partsDataType = 'array';
  /**
   * @var int
   */
  public $timesAddedCount;
  /**
   * @var string
   */
  public $type;

  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart[]
   */
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1IntentTrainingPhrasePart[]
   */
  public function getParts()
  {
    return $this->parts;
  }
  /**
   * @param int
   */
  public function setTimesAddedCount($timesAddedCount)
  {
    $this->timesAddedCount = $timesAddedCount;
  }
  /**
   * @return int
   */
  public function getTimesAddedCount()
  {
    return $this->timesAddedCount;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2beta1IntentTrainingPhrase::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentTrainingPhrase');
