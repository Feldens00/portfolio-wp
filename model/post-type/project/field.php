<?php
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group(array(
    'key' => 'group_1',
    'title' => 'project',
    'fields' => array (
       array(
        'key' => 'project-link',
        'label' => 'Link do Projeto',
        'name' => 'link',
        'type' => 'text',
        'maxlength' => 250,
        'placeholder' => 'http://www.site.com'
      )
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