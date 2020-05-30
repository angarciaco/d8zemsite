<?php

/**
 * @file
 * Contains enangelzemm.page.inc.
 *
 * Page callback for Enangelzemm entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Enangelzemm templates.
 *
 * Default template: enangelzemm.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_enangelzemm(array &$variables) {
  // Fetch enangelzemm Entity Object.
  $enangelzemm = $variables['elements']['#enangelzemm'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
