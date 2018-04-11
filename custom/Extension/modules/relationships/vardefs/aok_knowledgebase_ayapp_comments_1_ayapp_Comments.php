<?php
// created: 2018-04-02 15:45:43
$dictionary["ayapp_Comments"]["fields"]["aok_knowledgebase_ayapp_comments_1"] = array (
  'name' => 'aok_knowledgebase_ayapp_comments_1',
  'type' => 'link',
  'relationship' => 'aok_knowledgebase_ayapp_comments_1',
  'source' => 'non-db',
  'module' => 'AOK_KnowledgeBase',
  'bean_name' => 'AOK_KnowledgeBase',
  'vname' => 'LBL_AOK_KNOWLEDGEBASE_AYAPP_COMMENTS_1_FROM_AOK_KNOWLEDGEBASE_TITLE',
  'id_name' => 'aok_knowledgebase_ayapp_comments_1aok_knowledgebase_ida',
);
$dictionary["ayapp_Comments"]["fields"]["aok_knowledgebase_ayapp_comments_1_name"] = array (
  'name' => 'aok_knowledgebase_ayapp_comments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOK_KNOWLEDGEBASE_AYAPP_COMMENTS_1_FROM_AOK_KNOWLEDGEBASE_TITLE',
  'save' => true,
  'id_name' => 'aok_knowledgebase_ayapp_comments_1aok_knowledgebase_ida',
  'link' => 'aok_knowledgebase_ayapp_comments_1',
  'table' => 'aok_knowledgebase',
  'module' => 'AOK_KnowledgeBase',
  'rname' => 'name',
);
$dictionary["ayapp_Comments"]["fields"]["aok_knowledgebase_ayapp_comments_1aok_knowledgebase_ida"] = array (
  'name' => 'aok_knowledgebase_ayapp_comments_1aok_knowledgebase_ida',
  'type' => 'link',
  'relationship' => 'aok_knowledgebase_ayapp_comments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOK_KNOWLEDGEBASE_AYAPP_COMMENTS_1_FROM_AYAPP_COMMENTS_TITLE',
);
