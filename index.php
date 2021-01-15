<?php

/*
Plugin Name: RowanSays: Reposition Kint
Description: Allows for better display of kint debug box in wp-admin/.
Version: 1.1.1
Requires PHP: 7.4
Author: Rowan Weathers
Author URI: https://rowansays.com/

License: GPL-3.0-or-later

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types = 1);

namespace RowanSays\Wp\Plugin\RepositionKint;

if (WP_DEBUG === true) {
  add_action('admin_enqueue_scripts', function () {
    $file = 'style.css';
    $path = plugin_dir_path(__FILE__) . $file;
    $url = plugin_dir_url(__FILE__) . $file;
    wp_enqueue_style('RowanSayRepositionKint', $url, [], filemtime($path));
  });
}
