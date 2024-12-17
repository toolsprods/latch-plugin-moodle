<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 2.1 of the License, or
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
 * DB install file for profilefield_latch
 *
 * @package   profilefield_latch
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v2.1 or later
 * @author     TU Latch Developer Team
 * @copyright 2024 Telefónica Innovación Digital S.L.U. (https://latch.tu.com)
 */

/**
 * Creating custom user category and field.
 */
function xmldb_profilefield_latch_install() {
    global $DB;
    $category = new stdClass();
    $category->name = 'Latch';
    $categoryid = $DB->insert_record('user_info_category', $category);

    $field = new stdClass();
    $field->name = 'Latch';
    $field->shortname = 'Latch';
    $field->datatype = 'latch';
    $field->categoryid = $categoryid;
    $field->visible = '1';
    $fieldid = $DB->insert_record('user_info_field', $field);

    return true;
}
