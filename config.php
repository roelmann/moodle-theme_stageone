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
 * stageone config.
 *
 * @package   theme_stageone
 * @copyright 2016 Richard Oelmann
 * @credits   2016 Theme_boost MoodleHQ
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/theme/boost/lib.php');

$THEME->name = 'stageone';
$THEME->scssfile = theme_boost_get_scss_file($THEME);
$THEME->sheets = ['stageone'];
$THEME->editor_sheets = ['editor'];

$THEME->parents = ['boost'];
$THEME->enable_dock = false;
$THEME->csstreepostprocessor = 'theme_boost_css_tree_post_processor';
$THEME->extrascsscallback = 'theme_boost_get_extra_scss';
$THEME->scssvariablescallback = 'theme_boost_get_scss_variables';
$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
