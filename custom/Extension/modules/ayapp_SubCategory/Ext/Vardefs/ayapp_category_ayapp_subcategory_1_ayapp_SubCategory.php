<?php
// created: 2018-03-31 17:07:03
$dictionary["ayapp_SubCategory"]["fields"]["ayapp_category_ayapp_subcategory_1"] = array (
  'name' => 'ayapp_category_ayapp_subcategory_1',
  'type' => 'link',
  'relationship' => 'ayapp_category_ayapp_subcategory_1',
  'source' => 'non-db',
  'module' => 'ayapp_Category',
  'bean_name' => 'ayapp_Category',
  'vname' => 'LBL_AYAPP_CATEGORY_AYAPP_SUBCATEGORY_1_FROM_AYAPP_CATEGORY_TITLE',
  'id_name' => 'ayapp_category_ayapp_subcategory_1ayapp_category_ida',
);
$dictionary["ayapp_SubCategory"]["fields"]["ayapp_category_ayapp_subcategory_1_name"] = array (
  'name' => 'ayapp_category_ayapp_subcategory_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AYAPP_CATEGORY_AYAPP_SUBCATEGORY_1_FROM_AYAPP_CATEGORY_TITLE',
  'save' => true,
  'id_name' => 'ayapp_category_ayapp_subcategory_1ayapp_category_ida',
  'link' => 'ayapp_category_ayapp_subcategory_1',
  'table' => 'ayapp_category',
  'module' => 'ayapp_Category',
  'rname' => 'name',
);
$dictionary["ayapp_SubCategory"]["fields"]["ayapp_category_ayapp_subcategory_1ayapp_category_ida"] = array (
  'name' => 'ayapp_category_ayapp_subcategory_1ayapp_category_ida',
  'type' => 'link',
  'relationship' => 'ayapp_category_ayapp_subcategory_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AYAPP_CATEGORY_AYAPP_SUBCATEGORY_1_FROM_AYAPP_SUBCATEGORY_TITLE',
);
