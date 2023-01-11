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
 * Strings for component 'enrol_mtnpayment', language 'en'.
 *
 * @package    enrol_mtnpayment
 * @copyright  2015 Dualcube, Arkaprava Midya, Parthajeet Chakraborty
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['addtogroup'] = 'Add to group';
$string['addtogroup_help'] = 'If you select a group here, then when a user completes the payment process and is enrolled in this course, they will be added to this group.';
$string['assignrole'] = 'Assign role';
$string['assignrole_help'] = 'If you select a role here, then when a user completes the payment process and is enrolled in this course, they will be assigned this role.';
$string['btntext']= 'Pay Now';
$string['billingaddress'] = 'Require users to enter their billing address';
$string['billingaddress_desc'] = 'This sets the mtn payment option for whether the user should be asked to input their billing address. It is off by default, but it is a good idea to turn it on.';
$string['mtn_merchantId'] = 'mtn merchantId';
$string['mtn_productId'] = 'mtn productId';
$string['mtn_apiKey'] = 'mtn apiKey';
$string['mtn_merchantId_desc'] = 'The merchantId of mtn account';
$string['mtn_productId_desc'] = 'The productId of mtn account';
$string['mtn_apiKey_desc'] = 'The apiKey of mtn account';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['currency'] = 'Currency';
$string['customwelcomemessage'] = 'Custom welcome message';
$string['customwelcomemessage_help'] = 'If you enter some text here, it will be shown instead of the standard text "This course requires a payment for entry." on the Enrolment options page that students see when they attempt to access a course they are not enrolled in. If you leave this blank, the standard text will be used.';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during mtn enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolmentnew']='New Enrolment';
$string['enrolmentnewuser']='New User Enrolment';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['messageprovider:mtn_enrolment'] = 'mtn enrolment messages';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['paymentthanks']='Thanks for your payment';
$string['mtn:config'] = 'Configure mtn enrol instances';
$string['mtn:manage'] = 'Manage enrolled users';
$string['mtn:unenrol'] = 'Unenrol users from course';
$string['mtn:unenrolself'] = 'Unenrol self from the course';
$string['mtnaccepted'] = 'mtn payments accepted';
$string['pluginname'] = 'mtn Payment';
$string['pluginname_desc'] = 'The mtn module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['sendpaymentbutton'] = 'Send payment via mtn';
$string['status'] = 'Allow mtn enrolments';
$string['status_desc'] = 'Allow users to use mtn to enrol into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
$string['messageprovider:mtnpayment_enrolment'] = 'Message Provider';
$string['validatezipcode'] = 'Validate the billing postal code';
$string['validatezipcode_desc'] = 'This sets the mtn payment option for whether the billing address should be verified as part of processing the payment. They strongly recommend that this option should be on, to reduce fraud.';
$string['maxenrolled'] = 'Max enrolled users';
$string['maxenrolled_help'] = 'Specifies the maximum number of users that can mtnpayment enrol. 0 means no limit.';
$string['maxenrolledreached'] = 'Maximum number of users allowed to mtnpayment-enrol was already reached.';
$string['canntenrol'] = 'Enrolment is disabled or inactive';
$string['mtnpayment:config'] = 'Configure mtnpayment';
$string['mtnpayment:manage'] = 'Manage mtnpayment';
$string['mtnpayment:unenrol'] = 'Unenrol mtnpayment';
$string['mtnpayment:unenrolself'] = 'Unenrolself mtnpayment';
$string['charge_description1'] = "create customer for email receipt";
$string['charge_description2'] = 'Charge for Course Enrolment Cost.';
$string['mtn_sorry'] = "Sorry, you can not use the script that way.";
