<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

include_once ROOT_DIRECTORY . 'include/Webservices/QueryRelated.php';

function vtws_retrieve_related($id, $relatedType, $relatedLabel, $user)
{
	$query = sprintf('SELECT * FROM %s', $relatedType);
	return vtws_query_related($query, $id, $relatedLabel, $user);
}
