-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2018 lúc 08:21 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employers`
--

INSERT INTO `employers` (`id`, `avatar_company`, `name_company`, `address_company`, `email_company`, `phone_number_company`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'Công ty A', 'HN', 'congtya@gmail.com', '123456', '$2y$10$NaVmybxNDu.JAaZqEGFupuHutEA5utwr.wyp4OPyAtCVtWtnyLfw6', 'AokUevvFOH8kxRoEbtOrLeNfGWIwpxYgRDSU4Q8MIPppR8LzikMnAmvzMvmD', NULL, NULL),
(2, '', 'Công ty B', 'HN', 'hn@gmail.com', '1234556', 'hn@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_31_075952_create_tasks_table', 2),
(4, '2018_01_06_154910_create_students_table', 3),
(5, '2018_01_06_155336_create_employers_table', 3),
(6, '2018_01_06_160718_create_recruitments_table', 4),
(7, '2018_01_06_161442_create_recruitment_student_table', 4),
(8, '2018_01_06_162540_create_students_table', 5),
(9, '2018_01_07_080911_create_specializeds_table', 6),
(10, '2018_01_07_081202_create_specialized_recruitment_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitments`
--

CREATE TABLE `recruitments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attach_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pay` int(11) UNSIGNED NOT NULL,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recruitments`
--

INSERT INTO `recruitments` (`id`, `content`, `attach_file`, `employer_id`, `created_at`, `updated_at`, `pay`, `title`, `number`) VALUES
(1, 'djasjkdlhsaldhasjkdasaaaaaaaaaaaa <a href=\"#\">File đính kèm</a>\r\n<br>đasadsa\r\n<br>đasadsa\r\n<br>đasadsa\r\n<br>đasadsa\r\n<br>đasadsa\r\n<br>đasadsa\r\n<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa<br>đasadsa\\', '', 1, NULL, NULL, 0, 'Tuyển dụng PHP developer', 0),
(7, '<p>Chào mừng các bạn</p>', 'public/recruitment_attach_file/Nbu5yROH3oW6KbZtPORVJNve0whHA9QiY4ANTSuK.jpeg', 1, '2018-01-07 07:52:43', '2018-01-07 07:52:43', 0, 'Tuyển dụng nhân viên bán hàng', 0),
(8, '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Tuyển dụng lập tr&igrave;nh vi&ecirc;n PHP</strong></span></p>\n\n<p style=\"margin-left:80px\">Y&ecirc;u cầu:</p>\n\n<ul>\n	<li>Độ tuổi từ 23 đến 28</li>\n	<li>Tốt nghiệp đại học ch&iacute;nh quy</li>\n	<li>C&oacute; kinh nghiệm lập tr&igrave;nh &iacute;t nhất 1 ng&ocirc;n ngữ</li>\n	<li>Y&ecirc;u th&iacute;ch lập tr&igrave;nh</li>\n</ul>\n\n<p>dsadsadsa</p>\n\n<p style=\"margin-left:80px\">Quyền lợi:</p>\n\n<ul>\n	<li>Hưởng lương th&aacute;ng thứ 13</li>\n	<li>Được tổ chức đi chơi v&agrave;o c&aacute;c dịp lễ</li>\n	<li>Cơ hội thăng tiến tốt</li>\n	<li>C&oacute; cơ hội onside đi Nhật,H&agrave;n,Mỹ, Singapo</li>\n	<li>Xin ch&agrave;o c&aacute;c bạn</li>\n</ul>\n\n<p>&nbsp;</p>', 'public/recruitment_attach_file/Fqov5JZqK3g7GfnTGXH9uP6BCtKLOx57VnnZWpSS.docx', 1, '2018-01-17 08:46:13', '2018-01-17 10:00:00', 25, 'Tuyển lập trình viên PHP', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitment_student`
--

CREATE TABLE `recruitment_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(10) UNSIGNED NOT NULL,
  `file_attach` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `more_information` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recruitment_student`
--

INSERT INTO `recruitment_student` (`id`, `student_id`, `employer_id`, `file_attach`, `more_information`, `status`, `created_at`, `updated_at`, `title`) VALUES
(1, 1, 1, 'dsad', 'dsadsadsadsa', 0, NULL, NULL, ''),
(2, 1, 1, 'public/recruitment_attach_file/zn2V734c9ZoVrYZw7pfqukLVEiwjbmWwFYqiz6fI.docx', '<p>dsadsa</p>', 0, '2018-01-11 07:10:38', '2018-01-11 07:10:38', 'dsads'),
(3, 1, 1, 'public/recruitment_attach_file/6AwcqihpOz1t6HEFxZwhOOXM3rRU7e8FYp1HiV3k.docx', '<p>dsa</p>', 0, '2018-01-11 07:13:18', '2018-01-11 07:13:18', 'dsa'),
(4, 1, 1, 'public/recruitment_attach_file/3vZ44wqjjOTSUcFeHWqdRWz7D73Gv5RCKDBPHasw.docx', '<p>dsa</p>', 0, '2018-01-11 07:13:38', '2018-01-11 07:13:38', 'dsa'),
(5, 1, 1, 'public/recruitment_attach_file/tOq6DRfDJeUGWNNVGreXKz5Gk9A3y5Dl78OHbvRC.txt', '<p>dsa</p>', 0, '2018-01-11 07:18:25', '2018-01-11 07:18:25', 'dsa'),
(6, 1, 1, 'public/recruitment_attach_file/0kI6rXCWCRIBIi18TP8sBkDmAwit3DwQLgGjCLsh.txt', '<p>dsa</p>', 0, '2018-01-11 07:19:51', '2018-01-11 07:19:51', 'dsa'),
(7, 1, 1, 'public/recruitment_attach_file/iuluM8VtW2gNeYwv56AsClOl9JDUFKW6eVPr4cOe.pptx', '<p>dsa</p>', 0, '2018-01-11 07:31:37', '2018-01-11 07:31:37', 'sda'),
(8, 1, 1, 'public/recruitment_attach_file/rYGtchs5T0HkEQFFvnCT0PVhUghn4obJ3Cr4plZ7.txt', '<p><img alt=\"\" src=\"http://localhost:8000/dist/img/user2-160x160.jpg\"><br></p>', 0, '2018-01-11 20:50:18', '2018-01-11 20:50:18', 'dsadsa'),
(9, 1, 1, 'public/recruitment_attach_file/rnMiXTIlaMPxDcBBtKQeM8PISL46xf2dR7J6uaJu.txt', '<p><img alt=\"\" src=\"http://localhost:8000/dist/img/user2-160x160.jpg\">dsadsa<br></p>', 0, '2018-01-11 20:51:56', '2018-01-11 20:51:56', 'sa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `specializeds`
--

CREATE TABLE `specializeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_specialized` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `specializeds`
--

INSERT INTO `specializeds` (`id`, `name_specialized`, `created_at`, `updated_at`) VALUES
(1, 'Khoa học máy tính', NULL, NULL),
(2, 'Quản trị kinh doanh', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `specialized_recruitment`
--

CREATE TABLE `specialized_recruitment` (
  `id_specialized` int(11) NOT NULL,
  `id_recruitment` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name_student` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_student` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name_student` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_student` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_student` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number_student` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `first_name_student`, `avatar_student`, `last_name_student`, `address_student`, `email_student`, `code`, `phone_number_student`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Quân', '123', 'Đậu', 'HN', 'HN', 'A25428', '123456', '$2y$10$NaVmybxNDu.JAaZqEGFupuHutEA5utwr.wyp4OPyAtCVtWtnyLfw6', 'Y4sV9eBQKxHFyc5GQICh7nkFdl1RCCTQ9kab3dqRcyr6FdK8CvPyeuvtkFpx', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `completed`, `created_at`, `updated_at`) VALUES
(6, '1', 0, '2017-12-31 02:25:53', '2017-12-31 21:50:13'),
(9, '4', 0, '2017-12-31 02:26:35', '2018-01-01 05:23:03'),
(10, '123', 1, '2017-12-31 02:37:28', '2018-01-01 05:22:51'),
(12, '123456', 1, '2017-12-31 21:51:19', '2018-01-01 05:22:50'),
(13, 'dasdsa', 0, '2018-01-06 09:42:43', '2018-01-06 09:42:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employers_email_company_unique` (`email_company`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `recruitments`
--
ALTER TABLE `recruitments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recruitments_employer_id_foreign` (`employer_id`);

--
-- Chỉ mục cho bảng `recruitment_student`
--
ALTER TABLE `recruitment_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `frk_student` (`student_id`),
  ADD KEY `frk_employer` (`employer_id`);

--
-- Chỉ mục cho bảng `specializeds`
--
ALTER TABLE `specializeds`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `specialized_recruitment`
--
ALTER TABLE `specialized_recruitment`
  ADD PRIMARY KEY (`id_specialized`,`id_recruitment`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_student_unique` (`email_student`),
  ADD UNIQUE KEY `students_code_unique` (`code`);

--
-- Chỉ mục cho bảng `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `recruitments`
--
ALTER TABLE `recruitments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `recruitment_student`
--
ALTER TABLE `recruitment_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `specializeds`
--
ALTER TABLE `specializeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `recruitments`
--
ALTER TABLE `recruitments`
  ADD CONSTRAINT `recruitments_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`);

--
-- Các ràng buộc cho bảng `recruitment_student`
--
ALTER TABLE `recruitment_student`
  ADD CONSTRAINT `frk_employer` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frk_student` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
