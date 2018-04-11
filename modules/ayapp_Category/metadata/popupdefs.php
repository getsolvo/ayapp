<?php
$popupMeta = array (
    'moduleMain' => 'ayapp_Category',
    'varName' => 'ayapp_Category',
    'orderBy' => 'ayapp_category.name',
    'whereClauses' => array (
  'name' => 'ayapp_category.name',
  'status' => 'ayapp_category.status',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
),
);
