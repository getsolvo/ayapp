<?php
// created: 2018-04-11 09:40:52
$dictionary["Account"]["fields"]["ayapp_subcategory_accounts_1"] = array (
  'name' => 'ayapp_subcategory_accounts_1',
  'type' => 'link',
  'relationship' => 'ayapp_subcategory_accounts_1',
  'source' => 'non-db',
  'module' => 'ayapp_SubCategory',
  'bean_name' => 'ayapp_SubCategory',
  'vname' => 'LBL_AYAPP_SUBCATEGORY_ACCOUNTS_1_FROM_AYAPP_SUBCATEGORY_TITLE',
  'id_name' => 'ayapp_subcategory_accounts_1ayapp_subcategory_ida',
);
$dictionary["Account"]["fields"]["ayapp_subcategory_accounts_1_name"] = array (
  'name' => 'ayapp_subcategory_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AYAPP_SUBCATEGORY_ACCOUNTS_1_FROM_AYAPP_SUBCATEGORY_TITLE',
  'save' => true,
  'id_name' => 'ayapp_subcategory_accounts_1ayapp_subcategory_ida',
  'link' => 'ayapp_subcategory_accounts_1',
  'table' => 'ayapp_subcategory',
  'module' => 'ayapp_SubCategory',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["ayapp_subcategory_accounts_1ayapp_subcategory_ida"] = array (
  'name' => 'ayapp_subcategory_accounts_1ayapp_subcategory_ida',
  'type' => 'link',
  'relationship' => 'ayapp_subcategory_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AYAPP_SUBCATEGORY_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
