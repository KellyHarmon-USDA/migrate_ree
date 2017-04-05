<?php
namespace Drupal\migrate_ree\Plugin\migrate\source;
use Drupal\migrate\Plugin\migrate\source\SqlBase;
/**
 * Source plugin for REE spotlights.
 *
 * @MigrateSource(
 *   id = "spotlights"
 * )
 */
class Spotlights extends SqlBase {
  /**
   * {@inheritdoc}
   */
  public function query() {
    $query = $this->select('node', 'n');
    $query->addField('n', 'nid');
    $query->addField('n', 'title');
    $query->condition('type', 'item');
    return $query;
  }
  /**
   * {@inheritdoc}
   */
  public function fields() {
    return [
      'nid' => $this->t('Spotlight node ID'),
      'title' => $this->t('Title'),
    ];
  }
  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return [
      'nid' => [
        'type' => 'integer',
        'alias' => 'n',
      ],
    ];
  }
}
