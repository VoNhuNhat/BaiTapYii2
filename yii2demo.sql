-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 29, 2019 lúc 11:24 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `yii2demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doc_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `document`
--

INSERT INTO `document` (`id`, `user_id`, `doc_name`, `description`, `content`) VALUES
(11, 17, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', 'NHẬT KÝ THỰC TẬP TẠI DOANH NGHIỆP.docx'),
(12, 18, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', 'Vo_Nhu_Nhat_NhatKy.docx'),
(13, 18, 'shkjdhajh', 'íadjlaksdjkasjd', 'Vo_Nhu_Nhat_NhatKy.docx'),
(14, 19, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', '1016137_159868130863161_23751488_n.jpg'),
(18, 19, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', ''),
(23, 18, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', 'medium-1557470904_71093-650.jpg'),
(24, 18, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', 'vine-1948358_1280.png'),
(25, 18, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', 'Practice PHP-test.doc'),
(26, 18, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', ''),
(27, 18, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', 'buon-qua-thi-phai-lam-gi-1558669232-650.jpg'),
(28, 18, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', ''),
(29, 18, 'PHP_Practice', 'Bài tập PHP Yii2 Framework', 'Practice PHP-test.doc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exp`
--

CREATE TABLE `exp` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `exp_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `exp`
--

INSERT INTO `exp` (`id`, `user_id`, `exp_name`, `start_date`, `end_date`, `company`, `description`) VALUES
(17, 17, 'Nhân viên văn phòng', '2019-07-30', '2019-07-23', 'LinxHQ', 'Thực tập sinh PHP công ty LinxHQ'),
(18, 18, 'Thực tập sinh PHP', '2019-07-01', '2030-01-09', 'LinxHQ', 'Thực tập sinh PHP công ty LinxHQ'),
(19, 19, 'Thực tập sinh PHP', '2019-07-01', '2019-06-30', 'LinxHQ', 'Thực tập sinh PHP công ty LinxHQ'),
(20, 19, 'Thực tập sinh PHP', '2019-07-01', '2019-07-31', 'adadsa', 'Thực tập sinh PHP công ty LinxHQ'),
(23, 18, 'Thực tập sinh PHP', '2019-07-17', '2019-07-09', 'LinxHQ', 'Thực tập sinh PHP công ty LinxHQ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1563939625),
('m130524_201442_init', 1563939628),
('m190124_110200_add_verification_token_column_to_user_table', 1563939629),
('m190724_090119_create_exp_table', 1563958972),
('m190724_101751_create_exp_table', 1563963522),
('m190725_031003_create_document_table', 1564024273);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `surname`, `birthday`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `phone`, `avatar`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(17, 'nhatbett', 'Bùi', 'Tuyến', '2019-07-18', 'mlDSi3wIOxIJsuMr-j2VVc9sKBsCULGV', '$2y$13$HkM8jvhab2g2yFq4r2EAOeNTHYm7svMXZsB1hT8D650U.AKLt5NWO', NULL, 'nhatbet@gmail.com', '0355388343', 'Đề website.jpg', 9, 1564129181, 1564129181, '1SqWO1Ub0d_hlEkQl7VWVeVMVgWsPXEn_1564129181'),
(18, 'c1808j1', 'Bùi', 'Tuyến', '2019-07-23', 'B4F2v4fD37FOlblFUPmoFIKue0CJ2kjM', '$2y$13$1sCkB6b.lcSs8LE6Hny/Ied/yJLsZWic6mJmpCl7S4qU/RFX7CFJG', NULL, 'c1808j1@gmail.com', '0355388343', 'vine-1948358_1280.png', 9, 1564135291, 1564135291, '7ZvJM5nWsG3KHf-TfbzYKz-95hUGseE2_1564135291'),
(19, 'nhatvo', 'Võ', 'Nhất', '2019-07-01', '99RhVaPyonsjIRAJ_Pprm4TTtim38U2W', '$2y$13$4JygUHMWNdczJ4IK7NsCJerOdQrFR.GeSouN8qtNvI2CSRq4E18iG', NULL, 'vonhat@gmail.com', '0355388343', 'vine-1948358_1280.png', 9, 1564329130, 1564329130, 'E2mFubMI0Kxm_9D_lXtgp9MGKx1mEtn6_1564329130'),
(20, 'kaiokitt', NULL, NULL, NULL, 'YtxUuF1nKiec7aOVN-J4-72BNzcQCvHi', '$2y$13$SYIHsHaKoWMdlUktdY2cROCfORsJC7mtXztov3u8qEKybGQ6c/Ak2', NULL, 'kaiokitt@gmail.com', NULL, NULL, 9, 1564330378, 1564330378, '5amKE1JOpMNbQsv68z7frEVHA5FHdsf5_1564330378'),
(21, 'vonhat20041999', NULL, NULL, NULL, '_EfhHI4mNMCBbXdNzHJvU9wcvjmWh-Ow', '$2y$13$UrjE8SAR9TmwLS90yR8zd.gugvE3ROILbcEAPHUarQGQt0B/SFOUm', NULL, 'vonhat20041999@gmail.com', NULL, NULL, 9, 1564386486, 1564386486, 'QbtaVHejQHwS3KOjnN1a70ZLZuDi6jzq_1564386486');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-document-user_id` (`user_id`);

--
-- Chỉ mục cho bảng `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-exp-user_id` (`user_id`);

--
-- Chỉ mục cho bảng `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `fk-document-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `exp`
--
ALTER TABLE `exp`
  ADD CONSTRAINT `fk-exp-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
