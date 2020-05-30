<?php

/**
 * @file
 * Contains \Drupal\angelzemm\Form\Multistep\MultistepOneForm.
 */

namespace Drupal\angelzemm\Form\Multistep;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\ReplaceCommand;

use Drupal\Core\Form\FormStateInterface;

class MultistepOneForm extends MultistepFormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'multistep_form_one';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form = parent::buildForm($form, $form_state);

    $form['first_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('First Name'),
      '#default_value' => $this->store->get('first_name') ? $this->store->get('first_name') : '',
      '#required' => true,
      '#ajax' => [
        'callback' => '::ajaxFirstNameCallback',
        'event' => 'blur',
        'wrapper' => 'editt-first-name',
        'progress' => [
          'type' => 'throbber',
          'message' => $this->t('Updating data ...'),
        ],
      ]
    );

    $form['last_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Last Name'),
      '#default_value' => $this->store->get('last_name') ? $this->store->get('last_name') : '',
      '#required' => true,
    );

    $genders = ['male' => 'male', 'female' => 'female'];
    $form['gender'] = array(
      '#type' => 'select',
      '#title' => $this->t('Gender'),
      '#default_value' => $this->store->get('gender') ? $this->store->get('gender') : 'male',
      '#options' => $genders,
      '#required' => true,
      '#ajax' => [
        'callback' => '::ajaxGenderCallback',
        'event' => 'change',
        'wrapper' => 'editt-selected-gender',
        'progress' => [
          'type' => 'throbber',
          'message' => $this->t('Changing data ...'),
        ],
      ]
    );

    $form['selected_gender'] = array(
      '#type' => 'textfield',
      '#size' => '60',
      '#disabled' => TRUE,
      '#value' => $this->store->get('gender') ? 'Ajax Callback :: You selected: ' . $this->store->get('gender') : 'Ajax Callback :: By default: male',      
      '#prefix' => '<div id="editt-selected-gender">',
      '#suffix' => '</div>',
    );

    $form['blur_first_name'] = array(
      '#type' => 'textfield',
      '#size' => '60',
      '#disabled' => TRUE,
      '#value' => $this->store->get('first_name') ? 'Ajax Command :: Your first name is: ' . $this->store->get('first_name') : 'Ajax Callback :: By default: none',      
      '#prefix' => '<div id="editt-first-name">',
      '#suffix' => '</div>',
    );

    $form['birthdate'] = array(
      '#type' => 'date',
      '#title' => $this->t('Date of birth'),
      '#format' => 'Y/m/d',
      '#date_date_format' => 'Y/m/d',
      '#default_value' => $this->store->get('birthdate') ? $this->store->get('birthdate') : '',
      '#required' => true,
    );

    $form['actions']['submit']['#value'] = $this->t('Next');

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->store->set('first_name', $form_state->getValue('first_name'));
    $this->store->set('last_name', $form_state->getValue('last_name'));
    $this->store->set('gender', $form_state->getValue('gender'));
    $this->store->set('birthdate', $form_state->getValue('birthdate'));
    $form_state->setRedirect('angelzemm.multistep_two');
  }

  /**
   * {@inheritdoc}
   */
  public function ajaxGenderCallback(array &$form, FormStateInterface $form_state) {
    $selectedValue = $form_state->getValue('gender');

    $element = array(
      '#type' => 'textfield',
      '#size' => '60',
      '#disabled' => TRUE,
      '#value' => 'Ajax Callback :: You selected: ' . $selectedValue,
      '#prefix' => '<div id="editt-selected-gender">',
      '#suffix' => '</div>',
    );

    return $element; 
  }

  /**
   * {@inheritdoc}
   */
  public function ajaxFirstNameCallback(array &$form, FormStateInterface $form_state) {
    $selectedValue = $form_state->getValue('first_name');

    $element = array(
      '#type' => 'textfield',
      '#size' => '60',
      '#disabled' => TRUE,
      '#value' => "Ajax Command :: Your first name is: $selectedValue!",
      '#prefix' => '<div id="editt-first-name">',
      '#suffix' => '</div>',
    );
    $renderer = \Drupal::service('renderer');
    $renderedField = $renderer->render($element);

    $response = new AjaxResponse();
    $response->addCommand(new ReplaceCommand('#editt-first-name', $renderedField));
    return $response;
  }
}
