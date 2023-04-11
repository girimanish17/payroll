CREATE TABLE `master_qualification` (
  `id` int(11) NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `master_confirmation_reason` (
  `id` int(11) NOT NULL,
  `confirmation_reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `master_currency` (
  `id` int(11) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `it_declaration_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `it_declaration_categories` (`id`, `name`, `status`) VALUES
(1, 'Chapter 6 - Manual Items', 1),
(2, 'Deduction Under Chapter VI A', 1),
(3, 'Deduction Under Section 24', 1),
(4, 'House Rent Paid', 1),
(5, 'Other Income', 1),
(6, 'Previous Employment Salary', 1),
(7, 'Rebate Under Section 88', 1),
(8, 'Short Term Gain\r\n', 1);

CREATE TABLE `it_declaration_sections` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `max_limit` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `it_declaration_sections` (`id`, `name`, `max_limit`, `status`) VALUES
(1, '10(13)', '', 1),
(2, '80C', '150000', 1),
(3, '80CCC', '', 1),
(4, '80CCD1(B)', '50000', 1),
(5, '80CCD(2)', '750000', 1),
(6, '80CCG', '', 1),
(7, '80D', '', 1),
(8, '80DD', '', 1),
(9, '80DDB', '', 1),
(10, '80E', '', 1),
(11, '80EE', '', 1),
(12, '80EEA', '', 1),
(13, '80EEB', '', 1),
(14, '80G', '', 1),
(15, '80TTA', '', 1),
(16, '80TTB', '', 1),
(17, '80U', '125000', 1);


CREATE TABLE `master_it_declarations` (
  `id` int(11) NOT NULL,
  `financial_year` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `section_id` int(11) NOT NULL,
  `max_limit` varchar(255) NOT NULL,
  `deduct` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `visible` varchar(50) NOT NULL,
  `is_infra` varchar(50) NOT NULL,
  `consider_as` varchar(50) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;