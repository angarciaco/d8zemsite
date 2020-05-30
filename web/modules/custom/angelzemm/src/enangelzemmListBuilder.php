<?php

namespace Drupal\angelzemm;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Enangelzemm entities.
 *
 * @ingroup angelzemm
 */
class enangelzemmListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Enangelzemm ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var \Drupal\angelzemm\Entity\enangelzemm $entity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.enangelzemm.edit_form',
      ['enangelzemm' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
