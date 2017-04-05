<?php
 	/*  
 		Copyright 2017  Stephen Bungert  (email : hello@stephenbungert.com)
	
	    This program is free software; you can redistribute it and/or modify
	    it under the terms of the GNU General Public License, version 2, as 
	    published by the Free Software Foundation.
	
	    This program is distributed in the hope that it will be useful,
	    but WITHOUT ANY WARRANTY; without even the implied warranty of
	    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	    GNU General Public License for more details.
	
	    You should have received a copy of the GNU General Public License
	    along with this program; if not, write to the Free Software
	    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	*/
	
	
	
	/**
	 * An asbtract class for AJAX search responses to build upon.
	 * 
	 * @author Stephen Bungert <hello@stephenbungert.com>
	 * @package WordPress
	 * @subpackage SB Portfolio
	 * @since 0.1.0
	 */
	abstract class AbstractSearch extends AbstractAjax {
		/**
		 * Constructor.
		 *
		 * @return void
		 */
		public function __construct() {
			parent::__construct();
		}
	}
?>