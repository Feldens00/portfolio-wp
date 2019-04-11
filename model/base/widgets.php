<?php
function register_widgets(){
    if (function_exists('register_sidebar')) {
        $widgets = array(
            'img-menu'    => 'Imagem Icone Menu',
            'img-menu-mobile'    => 'Imagem Icone Menu Mobile',
            'service1'    => 'Serviço - Criação de sites',
            'service2'    => 'Serviço - Design gráfico',
            'service3'    => 'Serviço - Midias sociais' 
        );
        foreach ($widgets as $id => $value) {
            $name = is_array($value) ? $value[0] : $value;
            $description = is_array($value) ? $value[1] : '';
            register_sidebar(array(
                'name' => __($name, 'tecnosinos'),
                'description' => __($description),
                'id' => $id,
                'before_widget' => '<div id="%1$s" class="%2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h1>',
                'after_title' => '</h1>'
            ));
            
        }
    }
}
add_action('init', 'register_widgets'); 