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
namespace Platform\Yii\Interfaces;

/**
 * PageLocation.php
 */
interface PageLocation
{
	//**************************************************************************
	//* Constants
	//**************************************************************************

	/**
	 * @var int Within the <HEAD> section
	 */
	const HEAD = 0;
	/**
	 * @var int After the <BODY> tag
	 */
	const AFTER_BODY_START = 1;
	/**
	 * @var int Before the </BODY> tag
	 */
	const BEFORE_END_BODY = 2;
	/**
	 * @var int The window's "onload" function
	 */
	const WINDOW_ON_LOAD = 3;
	/**
	 * @var int Inside the jQuery doc-ready function
	 */
	const DOCUMENT_READY = 4;
}
