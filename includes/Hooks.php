<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 *
 * @file
 */

namespace MediaWiki\Extension\AlbaCustomStuff;

class Hooks {

	/**
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/BeforePageDisplay
	 * @param string $arg1 First argument
	 * @param array $arg2
	 */
	public static function onBeforePageDisplay( \OutputPage &$out, \Skin &$skin ) {
		$out->addStyle( "https://use.typekit.net/vcd3usu.css" );
		// $out is an instance of the OutputPage object.
		// Add a meta tag
		$out->addMeta( 'msapplication-TileColor', '#da532c' );
		$out->addMeta( 'theme-color', '#ffffff' );

		$wgHeadScriptCode = <<<EOF

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

EOF;

		$out->addHeadItem('Alba', $wgHeadScriptCode );

		// Required return value of a hook function.
		return true;
	}

}
