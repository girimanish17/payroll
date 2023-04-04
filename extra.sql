CREATE TABLE `company_settings` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` longtext NOT NULL,
  `states` varchar(255) NOT NULL,
  `time_zone` varchar(150) NOT NULL,
  `pf_no` varchar(150) NOT NULL,
  `tan_no` varchar(150) NOT NULL,
  `pan_no` varchar(150) NOT NULL,
  `esi_no` varchar(150) NOT NULL,
  `lin_no` varchar(150) NOT NULL,
  `gst_no` varchar(150) NOT NULL,
  `registration_certificate_no` varchar(150) NOT NULL,
  `twitter_handle` varchar(150) NOT NULL,
  `company_logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Date 040423 */
ALTER TABLE `user_bank_detail` ADD `micr` VARCHAR(255) NOT NULL AFTER `bank_ifsc_code`;

ALTER TABLE `users` ADD `blood_group` VARCHAR(50) NOT NULL AFTER `designation_id`;

ALTER TABLE `users` ADD `marital_status` VARCHAR(50) NOT NULL AFTER `blood_group`;

ALTER TABLE `users` ADD `marrige_date` date NULL DEFAULT NULL AFTER `marital_status`, ADD `spouse_name` VARCHAR(255) NOT NULL AFTER `marrige_date`,
ADD `nationality` VARCHAR(50) NOT NULL AFTER `spouse_name`,ADD `religion` VARCHAR(50) NOT NULL AFTER `nationality`,
ADD `place_of_birth` VARCHAR(50) NOT NULL AFTER `religion`,ADD `country_of_origin` VARCHAR(50) NOT NULL AFTER `place_of_birth`
,ADD `international_employee` VARCHAR(20) NOT NULL AFTER `country_of_origin`,ADD `physically_challenged` VARCHAR(20) NOT NULL AFTER `international_employee`
,ADD `is_director` VARCHAR(20) NOT NULL AFTER `physically_challenged`,ADD `confirmation_date` date NULL DEFAULT NULL `is_director`
,ADD `esi_joindate` date NULL DEFAULT NULL AFTER `confirmation_date`,ADD `covered_members` INT(11) NOT NULL AFTER `esi_joindate`
,ADD `PF` VARCHAR(255) NOT NULL AFTER `covered_members`,ADD `pf_joindate` date NULL DEFAULT NULL AFTER `PF`
,ADD `joining_status` VARCHAR(50) NOT NULL AFTER `pf_joindate`,ADD `probation_period` VARCHAR(100) NOT NULL AFTER `joining_status`
,ADD `notice_period` VARCHAR(100) NOT NULL AFTER `probation_period`,ADD `current_comp_exp` VARCHAR(50) NOT NULL AFTER `notice_period`
,ADD `previous_exp` VARCHAR(50) NOT NULL AFTER `current_comp_exp`,ADD `total_exp` VARCHAR(50) NOT NULL AFTER `previous_exp`;


