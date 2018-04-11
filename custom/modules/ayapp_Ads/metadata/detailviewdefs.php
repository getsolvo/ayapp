<?php
$module_name = 'ayapp_Ads';
$_object_name = 'ayapp_ads';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'headline',
            'label' => 'LBL_HEADLINE',
          ),
          1 => 
          array (
            'name' => 'image',
            'studio' => 'visible',
            'label' => 'LBL_IMAGE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'end_date',
            'label' => 'LBL_END_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ayapp_category_ayapp_ads_1_name',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'phone_office',
        ),
        1 => 
        array (
          0 => 'website',
          1 => 'email1',
        ),
        2 => 
        array (
          0 => 'billing_address_street',
          1 => 
          array (
            'name' => 'instangram_url',
            'label' => 'LBL_INSTANGRAM_URL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'terms_and_conditions',
            'studio' => 'visible',
            'label' => 'LBL_TERMS_AND_CONDITIONS',
          ),
        ),
      ),
    ),
  ),
);
;
?>
