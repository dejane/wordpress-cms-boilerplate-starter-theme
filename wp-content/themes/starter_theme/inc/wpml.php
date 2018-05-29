<?php

function get_all_lang_without_current($lang='en'){

    global $sitepress;
    $lang = array();

    $all_languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );

    foreach ($all_languages as $l) {
        if($l['code'] != ICL_LANGUAGE_CODE) {

          $l['home_url'] = $sitepress->language_url($l['code']);
          $lang[] = $l;
        }
    }

    return $lang;
}
