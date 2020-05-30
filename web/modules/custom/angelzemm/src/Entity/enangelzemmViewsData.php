<?php

namespace Drupal\angelzemm\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Enangelzemm entities.
 */
class enangelzemmViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
