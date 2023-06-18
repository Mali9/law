<?php

/**
 * @file
 * Contains \Drupal\law_module\Controller\ReportController.
 */

namespace Drupal\law_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller for law_module List Report
 */
class ReportController extends ControllerBase
{

  function get_default_values($category)
  {

    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'templates')
      ->condition('field_category', $category)->execute();
    $nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);

    // Prepare the response.
    $response = [];
    foreach ($nodes as $node) {
      $values = $node->get('field_judicial_benefits')->getValue();
      foreach ($values as $key => $value) {
        $response['field_judicial_benefits'][] = strip_tags($value['value']);
      }

      $values = $node->get('field_challenges_faced')->getValue();
      foreach ($values as $key => $value) {
        $response['field_challenges_faced'][] = strip_tags($value['value']);
      }



      $values = $node->get('field_negatives')->getValue();
      foreach ($values as $key => $value) {
        $response['field_negatives'][] = strip_tags($value['value']);
      }

      $values = $node->get('field_legal_grounds')->getValue();
      foreach ($values as $key => $value) {
        $response['field_legal_grounds'][] = strip_tags($value['value']);
      }



      $values = $node->get('body')->getValue();
      foreach ($values as $key => $value) {
        $response['body1'][] = strip_tags($value['value']);
      }




      foreach ($node->get('field_improper_administrative')->getValue() as $element) {
        $p = \Drupal\paragraphs\Entity\Paragraph::load($element['target_id']);
        $text = $p->field_body_improper->getValue()[0]['value'];
        $response['field_improper_administrative'][] = strip_tags($text);
      }



      foreach ($node->get('field_distinctive_grounds')->getValue() as $element) {
        $p = \Drupal\paragraphs\Entity\Paragraph::load($element['target_id']);
        $text = $p->field_body_grounds->getValue()[0]['value'];
        $response['field_distinctive_grounds'][] = strip_tags($text);
      }

      foreach ($node->get('field_regulations_and_circulars')->getValue() as $element) {
        $p = \Drupal\paragraphs\Entity\Paragraph::load($element['target_id']);
        $text = $p->field_body->getValue()[0]['value'];
        $response['field_regulations_and_circulars'][] = strip_tags($text);
      }
    }

    // dd($response);
    return new JsonResponse($response);
  }
}
