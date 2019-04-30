<?php
/*
 * Cria posts do tipo pagina no banco de dados do wordpress
 */
function create_pages_fly($pageName,$slug, $template) {
  $createPage = array(
    'post_title' => $pageName,
    'post_content' => 'Substitua esse conteúdo se necessário.',
    'post_status' => 'publish',
    'post_author' => 1,
    'post_type' => 'page',
    'post_name' => $slug,
    'page_template' => $template // TODO not working
  );
  wp_insert_post($createPage);
}
function check_pages_live() {

  if (get_page_by_path('contato') == NULL) {
    create_pages_fly('CONTATO','contato','');
  }

  if (get_page_by_path('quem-sou-eu') == NULL) {
    create_pages_fly('QUEM SOU EU','quem-sou-eu','');
  }

  if (get_page_by_path('o-que-eu-faco') == NULL) {
    create_pages_fly('O QUE EU FAÇO','o-que-eu-faco','');
  }
}
add_action('init', 'check_pages_live');