<?php
/*
 * Copyright 2005-2013 the original author or authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Current version of Mibew Messenger
 */
$version = '1.6.5';

/**
 * Current version of database structure
 */
$dbversion = '1.6.3';

/**
 * Current version of implemented features
 */
$featuresversion = '1.6.4';

/**
 * Prefix for session variables.
 * Provide an ability to instal several mibew instances on one server.
 */
$session_prefix = md5($mysqlhost.'##'.$mysqldb.'##'.$mysqlprefix) . '_';

/**
 * Default value for cron security key.
 * Another value can be set at operator/settings.php page.
 */
$default_cron_key = md5(
	$mysqlhost . '##' . $mysqldb . '##' . $mysqllogin. '##' .
	$mysqlpass . '##' . $mysqlprefix . '##'
);

/**
 * Name for cookie to track visitor
 */
$visitorcookie = "MIBEW_VisitorID";

?>