<?php
 // created: 2018-03-31 17:07:03
$layout_defs["ayapp_Category"]["subpanel_setup"]['ayapp_category_ayapp_subcategory_1'] = array (
  'order' => 100,
  'module' => 'ayapp_SubCategory',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AYAPP_CATEGORY_AYAPP_SUBCATEGORY_1_FROM_AYAPP_SUBCATEGORY_TITLE',
  'get_subpanel_data' => 'ayapp_category_ayapp_subcategory_1',
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
