<?php

require_once 'AbstractClass.php';

/**
 * Class ListDisplay
 */
class ListDisplay extends AbstractDisplay
{
  /**
   * ヘッダーを表示
   */
  protected function displayHeader()
  {
    echo '<dl>';
  }

  /**
   * ボディを表示
   */
  protected function displayBody()
  {
    foreach ($this->getData() as $key => $value) {
      echo '<dt>Item' . $key . '</dt>';
      echo '<dd>' . $value . '</dd>';
    }
  }

  /**
   * フッターを表示
   */
  protected function displayFooter()
  {
    echo '<dl>';
  }

}