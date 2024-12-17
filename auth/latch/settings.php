<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Settings for the Latch authentication plugin.
 *
 * @package    auth_latch
 * @copyright 2024 Telefónica Innovación Digital S.L.U. (https://latch.tu.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // App ID setting.
    $settings->add(new admin_setting_configtext(
        'auth_latch/appId',
        get_string('appid', 'auth_latch'),
        get_string('appid_desc', 'auth_latch'),
        '',
        PARAM_TEXT
    ));

    // App Secret setting.
    $settings->add(new admin_setting_configtext(
        'auth_latch/appSecret',
        get_string('appsecret', 'auth_latch'),
        get_string('appsecret_desc', 'auth_latch'),
        '',
        PARAM_TEXT
    ));
}
