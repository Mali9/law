<?php

namespace Drupal\rsvp\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RSVPForm extends FormBase
{
    public function getFormId()
    {
        return 'rsvp_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $node = \Drupal::routeMatch()->getParameter('node');
        $nid = $node->nid->value ?? '';

        $form['email'] = [
            '#title' => t('Email'),
            '#type' => 'textfield',
            '#size' => 25,
            '#required' => TRUE
        ];

        $form['submit'] = [
            '#value' => t('Rsvp'),
            '#type' => 'submit'
        ];

        $form['nid'] = [
            '#value' => $nid,
            '#type' => 'hidden'
        ];

        return $form;
    }


    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        $email = $form_state->getValue('email');
        if ($email == !\Drupal::service('email.validator')->isValid($email)) {
            $form_state->setErrorByName('email', t(
                'thie email address is not valid'
            ));
        }
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
        \Drupal::database()->insert('rsvp')
            ->fields([
                'mail' => $form_state->getValue('email'),
                'uid' => $user->id(),
                'nid' => $form_state->getValue('nid'),
                'created' => time()
            ])->execute();
        \Drupal::messenger()->addMessage(t('inserted successfully !'));
    }
}
