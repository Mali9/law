<?php
/**
 * @file
 * Contains \Drupal\rsvp\Plugin\Block\RSVPBlock
 */
 namespace Drupal\rsvp\Plugin\Block;
 
 use Drupal\Core\Block\BlockBase;
 use Drupal\Core\Session\AccountInterface;
 use Drupal\Core\Access\AccessResult;


 /**
 * Provides a 'RSVP' List Block
 *
 * @Block(
 *   id = "rsvp_block",
 *   admin_label = @Translation("RSVP Block"),
 *   category = @Translation("Blocks")
 * )
 */
class RSVPBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\rsvp\Form\RSVPForm');
    }

  /**
   * {@inheritdoc}
   */
  public function blockAccess(AccountInterface $account) {
    /** @var \Drupal\node\Entity\Node $node */
    $node = \Drupal::routeMatch()->getParameter('node');
    $nid = $node->nid->value ??1;
    /** @var \Drupal\rsvp\EnablerService $enabler */
    // $enabler = \Drupal::service('rsvp.enabler');
    if(is_numeric($nid)) {
      // if($enabler->isEnabled($node)) {
        return AccessResult::allowedIfHasPermission($account, 'view rsvp');
      // }
    }
    return AccessResult::forbidden();
  }
  
}

