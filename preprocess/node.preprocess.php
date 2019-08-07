<?php

/**
 * @file
 * Preprocess functions related to node entities.
 *
 * Index:
 *
 * @see blackbird_preprocess_node()
 * @see blackbird_preprocess_node__full()
 * @see blackbird_preprocess_node__page__full()
 */

/**
 * Implements hook_preprocess_node().
 */
function blackbird_preprocess_node(array &$variables) {
  /*
   * Removing theme from field_components so it doesn't render wrapper
   * "field__item" on all our components
   */
  if (array_key_exists('field_components', $variables['content'])) {
    unset($variables['content']['field_components']['#theme']);
  }

}

/**
 * Implements hook_preprocess_node__VIEW_MODE() for full.
 */
function blackbird_preprocess_node__full(array &$variables) {
  // Nothing to see here.
}

/**
 * Implements hook_preprocess_node__BUNDLE__VIEW_MODE() for page, full.
 */
function blackbird_preprocess_node__landing_page__full(array &$variables) {
  // Nothing to see here.
}

/**
 * Implements hook_preprocess_node__BUNDLE__VIEW_MODE() for page, full.
 */
function blackbird_preprocess_node__page__full(array &$variables) {
  // Nothing to see here.
}
