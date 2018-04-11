<?php
$module_name = 'AOK_KnowledgeBase';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'AYAPP_CATEGORY_AOK_KNOWLEDGEBASE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AYAPP_CATEGORY_AOK_KNOWLEDGEBASE_1_FROM_AYAPP_CATEGORY_TITLE',
    'id' => 'AYAPP_CATEGORY_AOK_KNOWLEDGEBASE_1AYAPP_CATEGORY_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'AUTHOR' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_AUTHOR',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'APPROVER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_APPROVER',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
