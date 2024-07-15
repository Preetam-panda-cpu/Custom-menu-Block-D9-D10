<?php
/**
 * @file
 * Contains \Drupal\menu\Plugin\Block\XaiBlock.
 */

namespace Drupal\menu\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Provides a 'menu' block.
 *
 * @Block(
 *   id = "menu_block",
 *   admin_label = @Translation("menu block"),
 *   category = @Translation("Custom menu block example")
 * )
 */
class MenuBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => '<ul>
	  <li><a href="/">Home</a></li>
	  <li><a href="/d10/test">test</a></li><ul>',
    );
  }
}
