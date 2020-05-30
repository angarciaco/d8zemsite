<?php

namespace Drupal\angelzemm\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;

/**
 * Provides an interface for defining Enangelzemm entities.
 *
 * @ingroup angelzemm
 */
interface enangelzemmInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Enangelzemm first name.
   *
   * @return string
   *   First Name of the Enangelzemm.
   */
  public function getFirstName();

  /**
   * Sets the Enangelzemm first name.
   *
   * @param string $first_name
   *   The Enangelzemm first name.
   *
   * @return \Drupal\angelzemm\Entity\enangelzemmInterface
   *   The called Enangelzemm entity.
   */
  public function setFirstName($first_name);


  /**
   * Gets the Enangelzemm last name.
   *
   * @return string
   *   Last Name of the Enangelzemm.
   */
  public function getLastName();

  /**
   * Sets the Enangelzemm name.
   *
   * @param string $last_name
   *   The Enangelzemm last name.
   *
   * @return \Drupal\angelzemm\Entity\enangelzemmInterface
   *   The called Enangelzemm entity.
   */
  public function setLastName($last_name);


  /**
   * Gets the Enangelzemm gender.
   *
   * @return string
   *   Gender of the Enangelzemm.
   */
  public function getGender();

  /**
   * Sets the Enangelzemm gender.
   *
   * @param string $gender
   *   The Enangelzemm gender.
   *
   * @return \Drupal\angelzemm\Entity\enangelzemmInterface
   *   The called Enangelzemm entity.
   */
  public function setGender($gender);


  /**
   * Gets the Enangelzemm birthdate.
   *
   * @return string
   *   Birthdate of the Enangelzemm.
   */
  public function getBirthdate();

  /**
   * Sets the Enangelzemm birthdate.
   *
   * @param string $birthdate
   *   The Enangelzemm birthdate.
   *
   * @return \Drupal\angelzemm\Entity\enangelzemmInterface
   *   The called Enangelzemm entity.
   */
  public function setBirthdate($birthdate);


  /**
   * Gets the Enangelzemm city.
   *
   * @return string
   *   City of the Enangelzemm.
   */
  public function getCity();

  /**
   * Sets the Enangelzemm city.
   *
   * @param string $city
   *   The Enangelzemm city.
   *
   * @return \Drupal\angelzemm\Entity\enangelzemmInterface
   *   The called Enangelzemm entity.
   */
  public function setCity($city);


  /**
   * Gets the Enangelzemm phone.
   *
   * @return string
   *   Phone of the Enangelzemm.
   */
  public function getPhone();

  /**
   * Sets the Enangelzemm phone.
   *
   * @param string $phone
   *   The Enangelzemm phone.
   *
   * @return \Drupal\angelzemm\Entity\enangelzemmInterface
   *   The called Enangelzemm entity.
   */
  public function setPhone($phone);


  /**
   * Gets the Enangelzemm address.
   *
   * @return string
   *   Address of the Enangelzemm.
   */
  public function getAddress();

  /**
   * Sets the Enangelzemm address.
   *
   * @param string $address
   *   The Enangelzemm address.
   *
   * @return \Drupal\angelzemm\Entity\enangelzemmInterface
   *   The called Enangelzemm entity.
   */
  public function setAddress($address);


  /**
   * Gets the Enangelzemm creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Enangelzemm.
   */
  public function getCreatedTime();

  /**
   * Sets the Enangelzemm creation timestamp.
   *
   * @param int $timestamp
   *   The Enangelzemm creation timestamp.
   *
   * @return \Drupal\angelzemm\Entity\enangelzemmInterface
   *   The called Enangelzemm entity.
   */
  public function setCreatedTime($timestamp);

}
