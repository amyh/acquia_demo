<?php

namespace Drupal\testimonial\Plugin\Block;

/**
 * Provides a custom block type.
 *
 * @Block(
 *  id = "testimonial",
 *  admin_label = @Translation("Testimonial block"),
 *  category = @Translation("Custom"),
 *  deriver = "Drupal\block_content\Plugin\Derivative\BlockContent"
 * )
 */
class TestimonialBlock extends BlockContentBlock {

  /**
   * Overrides \Drupal\Core\Block\BlockBase::blockForm().
   *
   * Adds body and description fields to the block configuration form.
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $block = $this
      ->getEntity();
    if (!$block) {
      return $form;
    }
    $options = $this->entityDisplayRepository
      ->getViewModeOptionsByBundle('block_content', $block
        ->bundle());
    $form['view_mode'] = [
      '#type' => 'select',
      '#options' => $options,
      '#title' => $this
        ->t('View mode'),
      '#description' => $this
        ->t('Output the block in this view mode.'),
      '#default_value' => $this->configuration['view_mode'],
      '#access' => count($options) > 1,
    ];
    $form['title']['#description'] = $this
      ->t('The title of the block as shown to the user.');
    return $form;
  }

}
