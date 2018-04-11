<?php
// created: 2018-03-31 17:09:10
$dictionary["ayapp_Recommendations"]["fields"]["accounts_ayapp_recommendations_1"] = array (
  'name' => 'accounts_ayapp_recommendations_1',
  'type' => 'link',
  'relationship' => 'accounts_ayapp_recommendations_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_AYAPP_RECOMMENDATIONS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ayapp_recommendations_1accounts_ida',
);
$dictionary["ayapp_Recommendations"]["fields"]["accounts_ayapp_recommendations_1_name"] = array (
  'name' => 'accounts_ayapp_recommendations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AYAPP_RECOMMENDATIONS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ayapp_recommendations_1accounts_ida',
  'link' => 'accounts_ayapp_recommendations_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ayapp_Recommendations"]["fields"]["accounts_ayapp_recommendations_1accounts_ida"] = array (
  'name' => 'accounts_ayapp_recommendations_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ayapp_recommendations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AYAPP_RECOMMENDATIONS_1_FROM_AYAPP_RECOMMENDATIONS_TITLE',
);
