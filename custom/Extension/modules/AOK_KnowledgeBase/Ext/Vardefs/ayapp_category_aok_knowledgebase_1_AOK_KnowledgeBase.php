<?php
// created: 2018-04-11 09:57:15
$dictionary["AOK_KnowledgeBase"]["fields"]["ayapp_category_aok_knowledgebase_1"] = array (
  'name' => 'ayapp_category_aok_knowledgebase_1',
  'type' => 'link',
  'relationship' => 'ayapp_category_aok_knowledgebase_1',
  'source' => 'non-db',
  'module' => 'ayapp_Category',
  'bean_name' => 'ayapp_Category',
  'vname' => 'LBL_AYAPP_CATEGORY_AOK_KNOWLEDGEBASE_1_FROM_AYAPP_CATEGORY_TITLE',
  'id_name' => 'ayapp_category_aok_knowledgebase_1ayapp_category_ida',
);
$dictionary["AOK_KnowledgeBase"]["fields"]["ayapp_category_aok_knowledgebase_1_name"] = array (
  'name' => 'ayapp_category_aok_knowledgebase_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AYAPP_CATEGORY_AOK_KNOWLEDGEBASE_1_FROM_AYAPP_CATEGORY_TITLE',
  'save' => true,
  'id_name' => 'ayapp_category_aok_knowledgebase_1ayapp_category_ida',
  'link' => 'ayapp_category_aok_knowledgebase_1',
  'table' => 'ayapp_category',
  'module' => 'ayapp_Category',
  'rname' => 'name',
);
$dictionary["AOK_KnowledgeBase"]["fields"]["ayapp_category_aok_knowledgebase_1ayapp_category_ida"] = array (
  'name' => 'ayapp_category_aok_knowledgebase_1ayapp_category_ida',
  'type' => 'link',
  'relationship' => 'ayapp_category_aok_knowledgebase_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AYAPP_CATEGORY_AOK_KNOWLEDGEBASE_1_FROM_AOK_KNOWLEDGEBASE_TITLE',
);
