<?php
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group(array(
    'key' => 'group_1',
    'title' => 'project',
    'fields' => array (
       array (
        'key' => 'description',
        'label' => 'Description',
        'name' => 'description',
        'type' => 'text',
        'instructions' => 'Descrição do Projeto',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'project',
        ),
      ),
    ),
    'style' => 'seamless',
  ));
}

