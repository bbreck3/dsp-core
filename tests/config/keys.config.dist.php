<?php
/**
 * This file is part of the DreamFactory Services Platform(tm) (DSP)
 *
 * DreamFactory Services Platform(tm) <http://github.com/dreamfactorysoftware/dsp-core>
 * Copyright 2012-2014 DreamFactory Software, Inc. <support@dreamfactory.com>
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
 * keys.config.dist.php
 *
 * Copy this file to keys.config.php and place your free-form keys pairs. Nesting is allowed
 *
 * Some basic examples are shown below. Be sure to remove them from your copy.
 */
return array(
    /** Examples **/
    'twitter.user_name'    => '@CoolTwitterName',
    'twitter.timeline_url' => '/#CoolTwitterName',
    /** Nesting Examples **/
    'my_service'           => array(
        'settings'       => array(
            'deep_clean_arrays' => true,
        ),
        'auto_start'     => true,
        'update_url'     => 'https://example.com/latest/',
        'enable_logging' => true,
    ),
);