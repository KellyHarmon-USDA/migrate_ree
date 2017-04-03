<?php
namespace Drupal\migrate_rpd\Plugin\migrate\source;
use Drupal\migrate\Plugin\migrate\source\SqlBase;
/**
 * Source plugin for REE spotlights.
 *
 * @MigrateSource(
 *   id = "spotlights"
 * )
 */
class CategoryTerm extends SqlBase {
  /**
   * {@inheritdoc}
   */
  public function query() {
    $query = $this->select('item', 'c');
    $query->addField('c', 'ID');
    $query->addField('c', 'TITLE', 'TItle');
    $query->addField('c', 'field_item_url', 'URL');
    return $query;
  }
  /**
   * {@inheritdoc}
   */
  public function fields() {
    return [
      'ID' => $this->t('item ID'),
      'name' => $this->t('Name'),
      'description' => $this->t('Description'),
    ];
  }
  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return [
      'ID' => [
        'type' => 'integer',
        'alias' => 'c',
      ],
    ];
  }
}