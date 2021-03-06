<?php
// created: 2018-03-31 17:07:03
$dictionary["ayapp_category_ayapp_subcategory_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ayapp_category_ayapp_subcategory_1' => 
    array (
      'lhs_module' => 'ayapp_Category',
      'lhs_table' => 'ayapp_category',
      'lhs_key' => 'id',
      'rhs_module' => 'ayapp_SubCategory',
      'rhs_table' => 'ayapp_subcategory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ayapp_category_ayapp_subcategory_1_c',
      'join_key_lhs' => 'ayapp_category_ayapp_subcategory_1ayapp_category_ida',
      'join_key_rhs' => 'ayapp_category_ayapp_subcategory_1ayapp_subcategory_idb',
    ),
  ),
  'table' => 'ayapp_category_ayapp_subcategory_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ayapp_category_ayapp_subcategory_1ayapp_category_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ayapp_category_ayapp_subcategory_1ayapp_subcategory_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ayapp_category_ayapp_subcategory_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ayapp_category_ayapp_subcategory_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ayapp_category_ayapp_subcategory_1ayapp_category_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ayapp_category_ayapp_subcategory_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ayapp_category_ayapp_subcategory_1ayapp_subcategory_idb',
      ),
    ),
  ),
);