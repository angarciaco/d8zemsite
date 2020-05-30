<?php

namespace Drupal\angelzemm;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Enangelzemm entity.
 *
 * @see \Drupal\angelzemm\Entity\enangelzemm.
 */
class enangelzemmAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\angelzemm\Entity\enangelzemmInterface $entity */

    switch ($operation) {

      case 'view':

        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished enangelzemm entities');
        }


        return AccessResult::allowedIfHasPermission($account, 'view published enangelzemm entities');

      case 'update':

        return AccessResult::allowedIfHasPermission($account, 'edit enangelzemm entities');

      case 'delete':

        return AccessResult::allowedIfHasPermission($account, 'delete enangelzemm entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add enangelzemm entities');
  }


}
