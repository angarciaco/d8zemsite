<?php

/**
 * @file
 * Contains \Drupal\angelzemm\Form\Multistep\MultistepTwoForm.
 */

namespace Drupal\angelzemm\Form\Multistep;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class MultistepTwoForm extends MultistepFormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'multistep_form_two';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form = parent::buildForm($form, $form_state);

    $form['city'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('City'),
      '#default_value' => $this->store->get('city') ? $this->store->get('city') : '',
      '#required' => true,
      '#ajax' => [
        'callback' => '::ajaxSaveTemporaryDataCallback',
        'event' => 'blur',
      ]
    );

    $form['phone'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Phone'),
      '#default_value' => $this->store->get('phone') ? $this->store->get('phone') : '',
      '#ajax' => [
        'callback' => '::ajaxSaveTemporaryDataCallback',
        'event' => 'blur',
      ]
    );

    $form['address'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Address'),
      '#default_value' => $this->store->get('address') ? $this->store->get('address') : '',
      '#ajax' => [
        'callback' => '::ajaxSaveTemporaryDataCallback',
        'event' => 'blur',
      ]
    );

    $form['actions']['previous'] = array(
      '#type' => 'link',
      '#title' => $this->t('Previous'),
      '#attributes' => array(
        'class' => array('button'),
      ),
      '#weight' => 0,
      '#url' => Url::fromRoute('angelzemm.multistep_one'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->store->set('city', $form_state->getValue('city'));
    $this->store->set('phone', $form_state->getValue('phone'));
    $this->store->set('address', $form_state->getValue('address'));

    // Save the data
    parent::saveData();
    $form_state->setRedirect('angelzemm.multistep_one');
  }

  /**
   * {@inheritdoc}
   */
  public function ajaxSaveTemporaryDataCallback(array &$form, FormStateInterface $form_state) {
    $this->store->set('city', $form_state->getValue('city'));
    $this->store->set('phone', $form_state->getValue('phone'));
    $this->store->set('address', $form_state->getValue('address'));
  }
}
