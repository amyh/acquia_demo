<?php

namespace Drupal\testimonial\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "testimonial_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("testimonial")
 * )
 */
class TestimonialBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
