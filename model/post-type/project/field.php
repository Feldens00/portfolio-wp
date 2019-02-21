<?php
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group(array(
    'key' => 'group_1',
    'title' => 'project',
    'fields' => array (
      array(
        'key' => 'project-img-1',
        'label' => 'Imagem 1',
        'name' => 'img-1',
        'type' => 'image',
        'instructions' => 'Imagem 500 x 500',
        'required' => 1,
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'array'
      ),
     
      array(
        'key' => 'project-img-2',
        'label' => 'Imagem 2',
        'name' => 'img-2',
        'type' => 'image',
        'instructions' => 'Imagem 800 x 800',
        'required' => 1,
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'array'
      ),
      array(
        'key' => 'project-img-3',
        'label' => 'Imagem 3',
        'name' => 'img-3',
        'type' => 'image',
        'instructions' => 'Imagem 800 x 800',
        'required' => 1,
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'array'
      ),
      array(
        'key' => 'project-img-4',
        'label' => 'Imagem 4',
        'name' => 'img-4',
        'type' => 'image',
        'instructions' => 'Imagem 1500 x 1500',
        'required' => 1,
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'array'
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

