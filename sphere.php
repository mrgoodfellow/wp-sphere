<?php

/*

Plugin Name:  360 Sphere Images

Plugin URI:   https://cssanimation.rocks/spheres/

Description:  Thank you to CssAnimation.Rocks for the sphere CSS

Version:      2018314

Author:       Goodfellow.us

Author URI:   http://Goodfellow.us

License:      GPL2

License URI:  https://www.gnu.org/licenses/gpl-2.0.html

Text Domain:  wporg

Domain Path:  /languages

*/



// [360sphere size="100px" url="http://360production.services/wp-content/uploads/sites/57/2017/11/SAM_100_1093.jpg"]

function sphere_func( $atts ) {

    $a = shortcode_atts( array(

        'size' => '300',

        'url' => 'http://360production.services/wp-content/uploads/sites/57/2017/11/SAM_100_1093.jpg',

        'speed' => '30',

    ), $atts );

	$b = $a['size'] * 2;
	
	 static $i=0;
 $i++;

	 //init the counter

//{$a['size']}

//{$a['url']}

//{$a['speed']}

//{$b}

    return "<section class='ball{$i}'>

    <figure class='sphere{$i}'><span class='gradient{$i}'></span></figure>

  </section>

<style>

.sphere{$i} {

  display: inline-block;

  width: {$a['size']}px;

  height: {$a['size']}px;

  margin: 0;

  border-radius: 50%;

  position: relative;

  -webkit-transform-style: preserve-3d;

  background: url('{$a['url']}') repeat-x;

  background-size: auto 100%;

  -webkit-animation: spin-sphere{$i} {$a['speed']}s infinite linear;

  -moz-animation: spin-sphere{$i} {$a['speed']}s infinite linear;

  -o-animation: spin-sphere{$i} {$a['speed']}s infinite linear;

  -ms-animation: spin-sphere{$i} {$a['speed']}s infinite linear;

  animation: spin-sphere{$i} {$a['speed']}s infinite linear;

}

@-moz-keyframes spin-sphere{$i} {

  0% {

    background-position: -{$b}px 0; }



  100% {

    background-position: 0 0; } }



@-webkit-keyframes spin-sphere{$i} {

  0% {

    background-position: 0 0; }

  100% {

    background-position: -{$b}px 0; }

}





@-o-keyframes spin-sphere{$i} {

  0% {

    background-position: -{$b}px 0; }



  100% {

    background-position: 0 0; } }



@-ms-keyframes spin-sphere{$i} {

  0% {

    background-position: -{$b}px 0; }



  100% {

    background-position: 0 0; } }



@keyframes spin-sphere{$i} {

  0% {

    background-position: -{$b}px 0; }



  100% {

    background-position: 0 0; } }

</style>";

}

add_shortcode( 'sphere', 'sphere_func' );
