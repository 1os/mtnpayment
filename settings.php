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
 * Stript enrolments plugin settings and presets.
 *
 * @package    enrol_mtnpayment
 * @copyright  2015 Dualcube, Arkaprava Midya, Parthajeet Chakraborty
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_heading('enrol_mtnpayment_settings', '', get_string('pluginname_desc', 'enrol_mtnpayment')));
    // --- settings ------------------------------------------------------------------------------------------
    $settings->add(new admin_setting_configtext('enrol_mtnpayment/mtn_merchantId', get_string('mtn_merchantId', 'enrol_mtnpayment'),
    get_string('mtn_merchantId_desc', 'enrol_mtnpayment'), '', PARAM_TEXT));
    $settings->add(new admin_setting_configtext('enrol_mtnpayment/mtn_productId', get_string('mtn_productId', 'enrol_mtnpayment'),
        get_string('mtn_productId_desc', 'enrol_mtnpayment'), '', PARAM_TEXT));
    $settings->add(new admin_setting_configtext('enrol_mtnpayment/mtn_apiKey', get_string('mtn_apiKey', 'enrol_mtnpayment'),
        get_string('mtn_apiKey_desc', 'enrol_mtnpayment'), '', PARAM_TEXT));
    // ---------------------------------------------------------------------------------------------
    $settings->add(new admin_setting_configcheckbox('enrol_mtnpayment/mailstudents',
    get_string('mailstudents', 'enrol_mtnpayment'), '', 0));
    $settings->add(new admin_setting_configcheckbox('enrol_mtnpayment/mailteachers',
    get_string('mailteachers', 'enrol_mtnpayment'), '', 0));
    $settings->add(new admin_setting_configcheckbox('enrol_mtnpayment/mailadmins',
    get_string('mailadmins', 'enrol_mtnpayment'), '', 0));
    // Note: let's reuse the ext sync constants and strings here, internally it is very similar,
    // it describes what should happen when users are not supposed to be enrolled any more.
    $options = array(
        ENROL_EXT_REMOVED_KEEP           => get_string('extremovedkeep', 'enrol'),
        ENROL_EXT_REMOVED_SUSPENDNOROLES => get_string('extremovedsuspendnoroles', 'enrol'),
        ENROL_EXT_REMOVED_UNENROL        => get_string('extremovedunenrol', 'enrol'),
    );
    $settings->add(new admin_setting_configselect('enrol_mtnpayment/expiredaction',
    get_string('expiredaction', 'enrol_mtnpayment'), get_string('expiredaction_help', 'enrol_mtnpayment'),
    ENROL_EXT_REMOVED_SUSPENDNOROLES, $options));
    $settings->add(new admin_setting_configcheckbox('enrol_mtnpayment/validatezipcode',
            get_string('validatezipcode', 'enrol_mtnpayment'),
            get_string('validatezipcode_desc', 'enrol_mtnpayment'), 1));
    $settings->add(new admin_setting_configcheckbox('enrol_mtnpayment/billingaddress',
            get_string('billingaddress', 'enrol_mtnpayment'),
            get_string('billingaddress_desc', 'enrol_mtnpayment'), 0));
    // --- enrol instance defaults ----------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('enrol_mtnpayment_defaults',
        get_string('enrolinstancedefaults', 'admin'), get_string('enrolinstancedefaults_desc', 'admin')));
    $options = array(ENROL_INSTANCE_ENABLED  => get_string('yes'),
                     ENROL_INSTANCE_DISABLED => get_string('no'));
    $settings->add(new admin_setting_configselect('enrol_mtnpayment/status',
        get_string('status', 'enrol_mtnpayment'), get_string('status_desc', 'enrol_mtnpayment'), ENROL_INSTANCE_DISABLED, $options));
    $settings->add(new admin_setting_configtext('enrol_mtnpayment/cost', get_string('cost', 'enrol_mtnpayment'), '', 0, PARAM_FLOAT, 4));
    $mtncurrencies = enrol_get_plugin('mtnpayment')->get_currencies();
    $settings->add(new admin_setting_configselect('enrol_mtnpayment/currency',
    get_string('currency', 'enrol_mtnpayment'), '', 'USD', $mtncurrencies));
    $settings->add(new admin_setting_configtext('enrol_mtnpayment/maxenrolled',
        get_string('maxenrolled', 'enrol_mtnpayment'), get_string('maxenrolled_help', 'enrol_mtnpayment'), 0, PARAM_INT));
    if (!during_initial_install()) {
        $options = get_default_enrol_roles(context_system::instance());
        $student = get_archetype_roles('student');
        $student = reset($student);
        $settings->add(new admin_setting_configselect('enrol_mtnpayment/roleid',
            get_string('defaultrole', 'enrol_mtnpayment'), get_string('defaultrole_desc', 'enrol_mtnpayment'), $student->id, $options));
    }
    $settings->add(new admin_setting_configduration('enrol_mtnpayment/enrolperiod',
        get_string('enrolperiod', 'enrol_mtnpayment'), get_string('enrolperiod_desc', 'enrol_mtnpayment'), 0));
}