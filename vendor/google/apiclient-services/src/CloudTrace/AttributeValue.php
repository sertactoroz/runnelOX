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

namespace Google\Service\CloudTrace;

class AttributeValue extends \Google\Model
{
  /**
   * @var bool
   */
  public $boolValue;
  /**
   * @var string
   */
  public $intValue;
  /**
   * @var TruncatableString
   */
  public $stringValue;
  protected $stringValueType = TruncatableString::class;
  protected $stringValueDataType = '';

  /**
   * @param bool
   */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /**
   * @return bool
   */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /**
   * @param string
   */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /**
   * @return string
   */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /**
   * @param TruncatableString
   */
  public function setStringValue(TruncatableString $stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /**
   * @return TruncatableString
   */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AttributeValue::class, 'Google_Service_CloudTrace_AttributeValue');
