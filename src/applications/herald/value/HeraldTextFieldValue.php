<?php

final class HeraldTextFieldValue
  extends HeraldFieldValue {

  public function getFieldValueKey() {
    return 'text';
  }

  public function getControlType() {
    return self::CONTROL_TEXT;
  }

}
