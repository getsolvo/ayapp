<?php
 // created: 2018-03-31 17:09:10
$layout_defs["Accounts"]["subpanel_setup"]['accounts_ayapp_recommendations_1'] = array (
  'order' => 100,
  'module' => 'ayapp_Recommendations',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AYAPP_RECOMMENDATIONS_1_FROM_AYAPP_RECOMMENDATIONS_TITLE',
  'get_subpanel_data' => 'accounts_ayapp_recommendations_1',
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
