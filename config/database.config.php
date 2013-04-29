<?php
/**
 * This file is part of the DreamFactory Services Platform(tm) (DSP)
 *
 * DreamFactory Services Platform(tm) <http://github.com/dreamfactorysoftware/dsp-core>
 * Copyright 2012-2013 DreamFactory Software, Inc. <developer-support@dreamfactory.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
/**
 * database.config.php
 * The database configuration file for the DSP
 */
if ( file_exists( '/var/www/.fabric_hosted' ) )
{
	require_once __DIR__ . '/../web/protected/components/Fabric.php';

	return Fabric::initialize();
}

$_dbName = 'dreamfactory';
$_dbUser = 'dsp_user';
$_dbPassword = 'dsp_user';

return array(
	'connectionString'      => 'mysql:host=localhost;port=3306;dbname=' . $_dbName,
	'username'              => $_dbUser,
	'password'              => $_dbPassword,
	'emulatePrepare'        => true,
	'charset'               => 'utf8',
//	'enableProfiling'    => true,
//	'enableParamLogging'    => true,
	'schemaCachingDuration' => 3600,
);