<?php

/*
 * implement of HOOK_preprocess_image
 * 
 * Get rid of the width and height attributes of images
 * 		so that the images could resize responsively
 * 
 */
function hou_preprocess_image(&$variables) {
  $attributes = $variables['attributes'];

  foreach (array('width', 'height') as $key) {
    unset($attributes[$key]);
    unset($variables[$key]);
  }

  $variables['attributes'] = $attributes;
}
