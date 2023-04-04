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


-- added on 04-April-23

CREATE TABLE `general_options` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `system_email` varchar(150) NOT NULL,
  `contact_email` varchar(150) NOT NULL,
  `logo_position` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `currency` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `profession_tax_slabs` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `salary_from` varchar(100) NOT NULL,
  `salary_till` varchar(100) NOT NULL,
  `tax_amount` varchar(50) NOT NULL,
  `deduction_month` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `list_of_values` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(11) NOT NULL,
  `description` varchar(750) NOT NULL,
  `code` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;