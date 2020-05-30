<?php

namespace Drupal\angelzemm\Entity;

use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityPublishedTrait;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines the Enangelzemm entity.
 *
 * @ingroup angelzemm
 *
 * @ContentEntityType(
 *   id = "enangelzemm",
 *   label = @Translation("Enangelzemm"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\angelzemm\enangelzemmListBuilder",
 *     "views_data" = "Drupal\angelzemm\Entity\enangelzemmViewsData",
 *     "translation" = "Drupal\angelzemm\enangelzemmTranslationHandler",
 *
 *     "form" = {
 *       "default" = "Drupal\angelzemm\Form\enangelzemmForm",
 *       "add" = "Drupal\angelzemm\Form\enangelzemmForm",
 *       "edit" = "Drupal\angelzemm\Form\enangelzemmForm",
 *       "delete" = "Drupal\angelzemm\Form\enangelzemmDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\angelzemm\enangelzemmHtmlRouteProvider",
 *     },
 *     "access" = "Drupal\angelzemm\enangelzemmAccessControlHandler",
 *   },
 *   base_table = "enangelzemm",
 *   data_table = "enangelzemm_field_data",
 *   translatable = TRUE,
 *   admin_permission = "administer enangelzemm entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "first_name",
 *     "uuid" = "uuid",
 *     "langcode" = "langcode",
 *     "published" = "status",
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/enangelzemm/{enangelzemm}",
 *     "add-form" = "/admin/structure/enangelzemm/add",
 *     "edit-form" = "/admin/structure/enangelzemm/{enangelzemm}/edit",
 *     "delete-form" = "/admin/structure/enangelzemm/{enangelzemm}/delete",
 *     "collection" = "/admin/structure/enangelzemm",
 *   },
 *   field_ui_base_route = "enangelzemm.settings"
 * )
 */
class enangelzemm extends ContentEntityBase implements enangelzemmInterface {

  use EntityChangedTrait;
  use EntityPublishedTrait;

  /**
   * {@inheritdoc}
   */
  public function getFirstName() {
    return $this->get('first_name')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setFirstName($first_name) {
    $this->set('first_name', $first_name);
    return $this;
  }

  
  /**
   * {@inheritdoc}
   */
  public function getLastName() {
    return $this->get('last_name')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setLastName($last_name) {
    $this->set('last_name', $last_name);
    return $this;
  }


  /**
   * {@inheritdoc}
   */
  public function getGender() {
    return $this->get('gender')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setGender($gender) {
    $this->set('gender', $gender);
    return $this;
  }


  /**
   * {@inheritdoc}
   */
  public function getBirthdate() {
    return $this->get('birthdate')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setBirthdate($birthdate) {
    $this->set('birthdate', $birthdate);
    return $this;
  }


  /**
   * {@inheritdoc}
   */
  public function getCity() {
    return $this->get('city')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCity($city) {
    $this->set('city', $city);
    return $this;
  }


  /**
   * {@inheritdoc}
   */
  public function getPhone() {
    return $this->get('phone')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setPhone($phone) {
    $this->set('phone', $phone);
    return $this;
  }


  /**
   * {@inheritdoc}
   */
  public function getAddress() {
    return $this->get('address')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setAddress($address) {
    $this->set('address', $address);
    return $this;
  }


  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    // Add the published field.
    $fields += static::publishedBaseFieldDefinitions($entity_type);

    $field_settings = ['max_length' => 50, 'text_processing' => 0];
    $view_display_options = ['label' => 'above', 'type' => 'string', 'weight' => -4];
    $form_display_options = ['type' => 'string_textfield', 'weight' => -4];

    // ---
    $fields['first_name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('First Name'))
      ->setDescription(t('The first name of the Enangelzemm entity.'))
      ->setSettings($field_settings)
      ->setDefaultValue('')
      ->setDisplayOptions('view', $view_display_options)
      ->setDisplayOptions('form', $form_display_options)
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    // ---
    $fields['last_name'] = BaseFieldDefinition::create('string')
    ->setLabel(t('Last Name'))
    ->setDescription(t('The last name of the Enangelzemm entity.'))
    ->setSettings($field_settings)
    ->setDefaultValue('')
    ->setDisplayOptions('view', $view_display_options)
    ->setDisplayOptions('form', $form_display_options)
    ->setDisplayConfigurable('form', TRUE)
    ->setDisplayConfigurable('view', TRUE)
    ->setRequired(TRUE);

    // ---
    $fields['gender'] = BaseFieldDefinition::create('string')
    ->setLabel(t('Gender'))
    ->setDescription(t('The gender of the Enangelzemm entity.'))
    ->setSettings($field_settings)
    ->setDefaultValue('')
    ->setDisplayOptions('view', $view_display_options)
    ->setDisplayOptions('form', $form_display_options)
    ->setDisplayConfigurable('form', TRUE)
    ->setDisplayConfigurable('view', TRUE)
    ->setRequired(TRUE);

    // ---
    $fields['birthdate'] = BaseFieldDefinition::create('string')
    ->setLabel(t('Birth of date'))
    ->setDescription(t('The birthdate of the Enangelzemm entity.'))
    ->setSettings($field_settings)
    ->setDefaultValue('')
    ->setDisplayOptions('view', $view_display_options)
    ->setDisplayOptions('form', $form_display_options)
    ->setDisplayConfigurable('form', TRUE)
    ->setDisplayConfigurable('view', TRUE)
    ->setRequired(TRUE);

    // ---
    $fields['city'] = BaseFieldDefinition::create('string')
    ->setLabel(t('City'))
    ->setDescription(t('The city of the Enangelzemm entity.'))
    ->setSettings($field_settings)
    ->setDefaultValue('')
    ->setDisplayOptions('view', $view_display_options)
    ->setDisplayOptions('form', $form_display_options)
    ->setDisplayConfigurable('form', TRUE)
    ->setDisplayConfigurable('view', TRUE)
    ->setRequired(TRUE);

    // ---
    $fields['phone'] = BaseFieldDefinition::create('string')
    ->setLabel(t('Phone'))
    ->setDescription(t('The phone of the Enangelzemm entity.'))
    ->setSettings($field_settings)
    ->setDefaultValue('')
    ->setDisplayOptions('view', $view_display_options)
    ->setDisplayOptions('form', $form_display_options)
    ->setDisplayConfigurable('form', TRUE)
    ->setDisplayConfigurable('view', TRUE);

    // ---
    $fields['address'] = BaseFieldDefinition::create('string')
    ->setLabel(t('Address'))
    ->setDescription(t('The address of the Enangelzemm entity.'))
    ->setSettings($field_settings)
    ->setDefaultValue('')
    ->setDisplayOptions('view', $view_display_options)
    ->setDisplayOptions('form', $form_display_options)
    ->setDisplayConfigurable('form', TRUE)
    ->setDisplayConfigurable('view', TRUE);

    // ---
    $fields['status']->setDescription(t('A boolean indicating whether the Enangelzemm is published.'))
    ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => -3,
      ]);

    // ---
    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    // ---
    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the entity was last edited.'));

    return $fields;
  }

}
