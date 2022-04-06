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
class TestimonialBlock extends BlockContentBlock {}
