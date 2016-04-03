<?php

/**
* Lookup Server DB Lib
*
* @author Frank Karlitschek
* @copyright 2016 Frank Karlitschek frank@karlitschek.de
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

/**
* The LookUp util class
*/
class LookupUpServer_Util {

    /**
     *  Handle error
     * @param string $text
     */
    public function error($text) {
    	error_log($text);
    	if(LOOKUPSERVER_ERROR_VERBOSE) echo($text);
    	exit;
    }

    /**
     *  Generate random userid
     * @return string $userid
     */
    public function generateUserId() {
    	return('oc'.rand().rand().rand().rand());
    }

    /**
	 *  Sanitize some input
	 * @param string $text
	 */
	public function sanitize($text) {
		return(strip_tags($text));
	}

	/**
	 *  Logfile handler
	 * @param string $text
	 */
	public function log($text) {
		if(LOOKUPSERVER_LOG<>'') {
			file_put_contents(LOOKUPSERVER_LOG, $_SERVER['REMOTE_ADDR'].' '.'['.date('c').']'.' '.$text."\n", FILE_APPEND);
		}
	}

    /**
	 *  Replication Logfile handler
	 * @param string $text
	 */
	public function replicationLog($text) {
		if(LOOKUPSERVER_REPLICATION_LOG<>'') {
			file_put_contents(LOOKUPSERVER_REPLICATION_LOG, $_SERVER['REMOTE_ADDR'].' '.'['.date('c').']'.' '.$text."\n", FILE_APPEND);
		}
	}


}
