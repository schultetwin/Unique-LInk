<?php


/**
 * Allows one to alter the loading of a link.
 *
 * Available fields in a link object (for now)
 *   lid - link id, unique identifier
 *   key_code - the unique key that is identified with this url
 *   type - the callback that is going to get called
 *   arguments - (array) the arguments to get passed to the type function
 *   expire - (timestamp) when the link expires
 */
function hook_unique_link_load(&$link) {
  $link->extra_field = array();
}

/**
 * A true or false function that checks to make sure a link is a valid.
 * The module provides many default cases, but if you'd like to provide more to
 * check then go for
 * @param type $link A full link object
 * @param type $key The key that was given in the url.
 */
function hook_unique_link_check($link, $key) {

}

/**
 * To provide a new unique_link type, you need to register your
 * callbacks with this function
 */
function hook_unique_link_info() {
  $type = array(
    'type_name' => array(
      'name' => 'Name of Type',
      'callbacks' => array(
        'accept' => 'function_name', // The function that gets called when a link as be accepted
        'page' => 'function_name', // The function the tells us what to do after you've been accepted
        'denied' => 'function_name', // The function that tell us what to after a link of this type has bee
                                   // denied
      ),
    ),
  );
}

?>
