<?php
 // created: 2018-04-02 15:45:43
$layout_defs["AOK_KnowledgeBase"]["subpanel_setup"]['aok_knowledgebase_ayapp_comments_1'] = array (
  'order' => 100,
  'module' => 'ayapp_Comments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOK_KNOWLEDGEBASE_AYAPP_COMMENTS_1_FROM_AYAPP_COMMENTS_TITLE',
  'get_subpanel_data' => 'aok_knowledgebase_ayapp_comments_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
