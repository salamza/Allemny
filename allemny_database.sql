-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2013 at 01:57 PM
-- Server version: 5.5.23
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allemny_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE IF NOT EXISTS `newsletters` (
  `mail_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mail_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`mail_id`, `email`) VALUES
(2, 'eng.hazemalaa@yahoo.com'),
(54, 'rewan.nabeel@gmail.com'),
(4, 'hagarh@live.com'),
(5, 'mahmoudelbshnaky@yahoo.com'),
(6, 'mohamedmeca_90@yahoo.com'),
(7, 'mostafa_biglord@yahoo.com'),
(8, 'eng_emi1312@yahoo.com'),
(9, 'abdelrhman.hassan@hotmail.com'),
(10, 'lovelygirlhagoor@yahoo.com'),
(11, 'shimaa79ahmad@gmail.com'),
(12, 'eng_mohammedheshamsaadeldin@hotmail.com'),
(13, 'abdallah.elabd@live.com'),
(14, 'hanan.samir34@yahoo.com'),
(15, 'hamadaman_tiger2000@yahoo.com'),
(16, 'm.gommaa2010@gmail.com'),
(17, 'ahmed.elsharkasy@gmail.com'),
(18, 'Eng.sara_2007@yahoo.com'),
(19, 'kakahimo@yahoo.com'),
(20, 'mando_mert_2016@yahoo.com'),
(21, 'elmoghany@live.com'),
(22, 'ibrahimhany@live.com'),
(23, 'muhammad.ossaama@gmail.com'),
(24, 'engnona84@yahoo.com'),
(25, 'engahmedkhairythebest@gmail.com'),
(26, 'dell_shark@yahoo.com'),
(27, 'marwanzeitoun1@gmail.com'),
(28, 'mahmoudashraf20082009@yahoo.com'),
(29, 'mohamedmostafa168@gmail.com'),
(30, 'dominixman@yahoo.com'),
(31, 'most_fitness@yahoo.com'),
(32, 'samehelashry2014@gmail.com'),
(33, 'elsaghier_mahmoud@yahoo.com'),
(34, 'a.latef@ieee.org'),
(35, 'sherif.bassiony@yahoo.com'),
(36, 'mohamed.dynamo@gmail.com'),
(37, 'marwan_eng52@yahoo.com'),
(38, 'eng_waleed_89_2008@yahoo.com'),
(39, 'hamdy_ma96@yahoo.com'),
(40, 'Thegold_engineering@yahoo.com'),
(41, 'sup_zero_super_2005@yahoo.com'),
(42, 'K.beltagy@gmail.com'),
(43, 'kemo_moharm@yahoo.com'),
(44, 'usama3_4@yahoo.com'),
(45, 'thelostdream56@yahoo.com'),
(46, 'mohamedmosad93@gmail.com'),
(49, 'ahmed.gebril1991@yahoo.com'),
(56, 'raghdahany550@gmail.com'),
(51, 'mahmoudashraf20082009@hotmail.com'),
(55, 'moudyonline2010@gmail.com'),
(57, 'ahmedelkashlawy@yahoo.com'),
(58, 'Eng.islamsh@yahoo.com'),
(59, 'samy_sayed42@yahoo.com'),
(60, 'engmelnaggar@live.com');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `title`) VALUES
(1, 'PCB Design'),
(2, 'Descriptive Geometry'),
(4, 'Physics 1'),
(5, 'Matlab Basics'),
(6, 'Autodesk Inventor');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `num` bigint(20) unsigned NOT NULL,
  `yt_id` varchar(11) CHARACTER SET latin1 NOT NULL,
  `title` varchar(50) NOT NULL,
  `thumbnail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `description` text NOT NULL,
  `yt_url` varchar(50) CHARACTER SET latin1 NOT NULL,
  `playlist_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`yt_id`),
  KEY `FK_videos_playlist` (`playlist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`num`, `yt_id`, `title`, `thumbnail`, `description`, `yt_url`, `playlist_id`) VALUES
(9, '09_KAW1U1fw', 'Autodesk Inventor Lesson 9', '', '', 'http://www.youtube.com/watch?v=09_KAW1U1fw', 6),
(14, '4zg3Nfdf3Lo', 'Descriptive Geometry 9-2', '', '', 'http://www.youtube.com/watch?v=4zg3Nfdf3Lo', 2),
(23, '5AQWXugQK8M', 'Descriptive Geometry 14-2', '', '', 'http://www.youtube.com/watch?v=5AQWXugQK8M', 2),
(7, '5ExgDmkm9KA', 'Autodesk Inventor Lesson 7', '', '', 'http://www.youtube.com/watch?v=5ExgDmkm9KA', 6),
(4, '5qzk3t66bf0', 'Physics 2-3 Thermodynamics', '', '', 'http://www.youtube.com/watch?v=5qzk3t66bf0', 4),
(16, '5TPgbRZBcxU', 'Autodesk Inventor Lesson 16', '', '', 'http://www.youtube.com/watch?v=5TPgbRZBcxU', 6),
(3, '6DTZfeBkKa4', 'Autodesk Inventor Lesson 3', '', '', 'http://www.youtube.com/watch?v=6DTZfeBkKa4', 6),
(1, '6l2SKWmCopg', ' PCB 1 - Introduction', 'http://i.ytimg.com/vi/6l2SKWmCopg/hqdefault.jpg', 'مقدمة عن ال PCB\nIntroduction Session\nMostafa el Said\n3rd Year Student - Electrical Dept. Power & Control Systems\nFaculty of Engineering, Alexandria University.\n\n--\nContact us through\nAllemny Youtube Channel: http://goo.gl/Mmf2q\nAllemny Facebook Fan Page: http://goo.gl/L2UqK\nAllemny Twitter Account: http://goo.gl/Jgh5E\nAllemny E-mail: allemny@gmail.com', 'http://www.youtube.com/watch?v=6l2SKWmCopg&feature', 1),
(9, '7Kf-TxpfPL8', 'Matlab basics Lesson 9', '', '', 'http://www.youtube.com/watch?v=7Kf-TxpfPL8', 5),
(17, '9GvAiT3bZqg', 'Autodesk Inventor Lesson 17', '', '', 'http://www.youtube.com/watch?v=9GvAiT3bZqg', 6),
(10, '9zS1a6V8A2g', 'Matlab basics Lesson 10', '', '', 'http://www.youtube.com/watch?v=9zS1a6V8A2g', 5),
(2, 'acNn0noefjA', 'Physics 2-1 Thermodynamics', 'http://i.ytimg.com/vi/acNn0noefjA/hqdefault.jpg', 'الديناميكا الحرارية - الجزء الاول\nالقانون العام للغازات \nالقانون الاول فى الديناميكا الحرارية\n\nالمحاضر: د. عمرو محروس\nقسم هندسة الفيزياء و الرياضة \nكلية الهندسة - جامعة الاسكندرية\nhttp://amrmahros.wordpress.com/about/\n\nFor more Physics Videos\nhttp://www.youtube.com/playlist?list=PLE3E9373CA1D95724\n\nAllemny Facebook page:\nhttps://www.facebook.com/allemny', 'http://www.youtube.com/watch?v=acNn0noefjA&feature', 4),
(5, 'aNVqhH2UK1g', ' PCB 5- Arranging Components', 'http://i.ytimg.com/vi/aNVqhH2UK1g/hqdefault.jpg', 'Arranging Components - تسيق المكونات\nCourse information: http://goo.gl/Qm4yQ\n--\nللتواصل معنا\nقناة اليوتيوب: http://goo.gl/Mmf2q\nصفحة الفيسبوك: http://goo.gl/L2UqK\nتويتر: http://goo.gl/Jgh5E\nصفحة صنّاع الحياة http://on.fb.me/YY4KCI\nالبريد الالكتروني allemny@gmail.com', 'http://www.youtube.com/watch?v=aNVqhH2UK1g&feature', 1),
(5, 'baNjnGxpbiE', 'Matlab basics Lesson 5', '', '', 'http://www.youtube.com/watch?v=baNjnGxpbiE', 5),
(6, 'biEZbqI4AKo', ' PCB 6- Automatic & Manual Routing', 'http://i.ytimg.com/vi/biEZbqI4AKo/hqdefault.jpg', 'Automatic and Manual Circuit Routing\nCourse information: http://goo.gl/Qm4yQ\n--\nللتواصل معنا\nقناة اليوتيوب: http://goo.gl/Mmf2q\nصفحة الفيسبوك: http://goo.gl/L2UqK\nتويتر: http://goo.gl/Jgh5E\nصفحة صنّاع الحياة http://on.fb.me/YY4KCI\nالبريد الالكتروني allemny@gmail.com', 'http://www.youtube.com/watch?v=biEZbqI4AKo&feature', 1),
(17, 'Ca9MwkW4ReE', 'Descriptive Geometry 11-2', '', '', 'http://www.youtube.com/watch?v=Ca9MwkW4ReE', 2),
(6, 'cjAgc_NS4-k', 'Matlab basics Lesson 6', '', '', 'http://www.youtube.com/watch?v=cjAgc_NS4-k', 5),
(12, 'CkvwRGLv7bo', 'Autodesk Inventor Lesson 12', '', '', 'http://www.youtube.com/watch?v=CkvwRGLv7bo', 6),
(2, 'd1leslJqxvY', 'Matlab basics Lesson 2', '', '', 'http://www.youtube.com/watch?v=d1leslJqxvY', 5),
(4, 'DEYrZLIKE4A', 'Matlab basics Lesson 4', '', '', 'http://www.youtube.com/watch?v=DEYrZLIKE4A', 5),
(15, 'DKjSdpLrchY', 'Autodesk Inventor Lesson 15', '', '', 'http://www.youtube.com/watch?v=DKjSdpLrchY', 6),
(7, 'fcX72Q7LMdw', 'Matlab basics Lesson 7', '', '', 'http://www.youtube.com/watch?v=fcX72Q7LMdw', 5),
(18, 'fVsSqREvtIg', 'Descriptive Geometry 11-3', '', '', 'http://www.youtube.com/watch?v=fVsSqREvtIg', 2),
(13, 'H4fJP6nF7vw', 'Descriptive Geometry 9-1', '', '', 'http://www.youtube.com/watch?v=H4fJP6nF7vw', 2),
(14, 'h9BZ56hPRzc', 'Autodesk Inventor Lesson 14', '', '', 'http://www.youtube.com/watch?v=h9BZ56hPRzc', 6),
(7, 'Hfw_5rSddn0', 'Descriptive Geometry 5', 'http://i.ytimg.com/vi/Hfw_5rSddn0/hqdefault.jpg', '5- هندسة وصفية - تمثيل المستوى\n\nاحمد الحنبوشي\nطالب بكلية الهندسة جامعة الاسكندرية\nالسنة الثانية - قسم الهندسة الميكانيكية', 'http://www.youtube.com/watch?v=Hfw_5rSddn0&feature', 2),
(1, 'Hiq8lqOK1IA', 'Matlab basics Lesson 1', '', '', 'http://www.youtube.com/watch?v=Hiq8lqOK1IA', 5),
(5, 'HnDeYVZKnvA', 'Autodesk Inventor Lesson 5', '', '', 'http://www.youtube.com/watch?v=HnDeYVZKnvA', 6),
(3, 'hz2oPlYK6BM', 'Physics 2-2 Thermodynamics', 'http://i.ytimg.com/vi/hz2oPlYK6BM/hqdefault.jpg', 'الديناميكا الحرارية - الجزء الثاني\nالقانون العام للغازات \nالقانون الاول فى الديناميكا الحرارية\nحساب الشغل تحت ضغط ثابت\nحساب الشغل عند ثبوت الحجم\n\n\nالمحاضر: د. عمرو محروس\nقسم هندسة الفيزياء و الرياضة \nكلية الهندسة - جامعة الاسكندرية\nhttp://amrmahros.wordpress.com/about/\n\nFor more Physics Videos\nhttp://www.youtube.com/playlist?list=PLE3E9373CA1D95724\n\nAllemny Facebook page:\nhttps://www.facebook.com/allemny', 'http://www.youtube.com/watch?v=hz2oPlYK6BM&feature', 4),
(5, 'J8LNMNITH4o', 'Physics 2-4 Thermodynamics', '', '', 'http://www.youtube.com/watch?v=J8LNMNITH4o', 4),
(3, 'KyBhkCVm2Es', 'Matlab basics Lesson 3', '', '', 'http://www.youtube.com/watch?v=KyBhkCVm2Es', 5),
(2, 'lgPwXYRCeOE', 'Autodesk Inventor Lesson 2', '', '', 'http://www.youtube.com/watch?v=lgPwXYRCeOE', 6),
(22, 'lMrElxs_w5k', 'Descriptive Geometry 14-1', '', '', 'http://www.youtube.com/watch?v=lMrElxs_w5k', 2),
(3, 'M20rab0NSGE', 'Descriptive Geometry 3', 'http://i.ytimg.com/vi/M20rab0NSGE/hqdefault.jpg', 'اثر الخط المستقيم\n\nاحمد الحنبوشي\nطالب بكلية الهندسة جامعة الاسكندرية \nالسنة الثانية - قسم الهندسة الميكانيكية', 'http://www.youtube.com/watch?v=M20rab0NSGE&feature', 2),
(1, 'mGpxqRbkqSw', 'Physics 1-Moment of Inertia', 'http://i.ytimg.com/vi/mGpxqRbkqSw/hqdefault.jpg', 'ايجاد عزم القصور الذاتى لقرص و قضيب و حلقة\n\nالمحاضر\nد. عمرو محروس\nقسم هندسة الفيزياء و الرياضة \nكلية الهندسة - جامعة الاسكندرية\nhttp://amrmahros.wordpress.com/about/\n\nFor more Physics Videos\nhttp://www.youtube.com/playlist?list=PLE3E9373CA1D95724\n\nOur Facebook page:\nhttps://www.facebook.com/allemny', 'http://www.youtube.com/watch?v=mGpxqRbkqSw&feature', 4),
(4, 'MOiD6QZgm20', 'Descriptive Geometry 4-1', 'http://i.ytimg.com/vi/MOiD6QZgm20/hqdefault.jpg', 'الحالات الخاصة للمستقيم\n\nاحمد الحنبوشي\nطالب بكلية الهندسة جامعة الاسكندرية\nالسنة الثانية - قسم الهندسة الميكانيكية', 'http://www.youtube.com/watch?v=MOiD6QZgm20&feature', 2),
(7, 'mU4AGPs6iqc', ' PCB 7- Layout', 'http://i.ytimg.com/vi/mU4AGPs6iqc/hqdefault.jpg', '7- Layout\n--\nللتواصل معنا\nقناة اليوتيوب: http://goo.gl/Mmf2q\nصفحة الفيسبوك: http://goo.gl/L2UqK\nتويتر: http://goo.gl/Jgh5E\nصفحة صنّاع الحياة http://on.fb.me/YY4KCI\nالبريد الالكتروني allemny@gmail.com', 'http://www.youtube.com/watch?v=mU4AGPs6iqc&feature', 1),
(5, 'mWD-wj_83fU', 'Descriptive Geometry 4-2', 'http://i.ytimg.com/vi/mWD-wj_83fU/hqdefault.jpg', 'امثلة على الحالات الخاصة من المستقيم\n\nاحمد الحنبوشي\nطالب بكلية الهندسة جامعة الاسكندرية \nالسنة الثانية', 'http://www.youtube.com/watch?v=mWD-wj_83fU&feature', 2),
(19, 'nFvOU6V03AY', 'Autodesk Inventor Lesson 19', '', '', 'https://www.youtube.com/watch?v=nFvOU6V03AY', 6),
(6, 'NpIYqm9ljgo', 'Descriptive Geometry 4-3', 'http://i.ytimg.com/vi/NpIYqm9ljgo/hqdefault.jpg', '[4-3] امثلة على الحالات الخاصة للمستقيم \n\nاحمد الحنبوشي\nطالب بكلية الهندسة جامعة الاسكندرية\nالسنة الثانية - قسم الهندسة الميكانيكية', 'http://www.youtube.com/watch?v=NpIYqm9ljgo&feature', 2),
(18, 'nWeI_lsBINk', 'Autodesk Inventor Lesson 18', '', '', 'http://www.youtube.com/watch?v=nWeI_lsBINk', 6),
(21, 'nzyG-S2wLKc', 'Descriptive Geometry 13-2', '', '', 'http://www.youtube.com/watch?v=nzyG-S2wLKc', 2),
(4, 'o6bXaAs8EKo', 'Autodesk Inventor Lesson 4', '', '', 'http://www.youtube.com/watch?v=o6bXaAs8EKo', 6),
(12, 'oVrgeW5FGYs', 'Descriptive Geometry 8-2', '', '', 'http://www.youtube.com/watch?v=oVrgeW5FGYs', 2),
(2, 'pEsRe-NUFn8', 'Descriptive Geometry 2', 'http://i.ytimg.com/vi/pEsRe-NUFn8/hqdefault.jpg', 'تمثيل الخط المستقيم\n\nاحمد الحنبوشي\nطالب بكلية الهندسة جامعة الاسكندرية \nالسنة الثانية - قسم الهندسة الميكانيكية', 'http://www.youtube.com/watch?v=pEsRe-NUFn8&feature', 2),
(16, 'QCDnOm7BJQE', 'Descriptive Geometry 11-1', '', '', 'http://www.youtube.com/watch?v=QCDnOm7BJQE', 2),
(2, 'qgCobALprDI', ' PCB 2 Installation and terminology ', 'http://i.ytimg.com/vi/qgCobALprDI/hqdefault.jpg', 'General Description & Installation\nCourse information: http://goo.gl/Qm4yQ\n--\nContact us through\nAllemny Youtube Channel: http://goo.gl/Mmf2q\nAllemny Facebook Fan Page: http://goo.gl/L2UqK\nAllemny Twitter Account: http://goo.gl/Jgh5E\nAllemny E-mail: allemny@gmail.com', 'http://www.youtube.com/watch?v=qgCobALprDI&feature', 1),
(11, 'QO1Dqx62-HI', 'Autodesk Inventor Lesson 11', '', '', 'http://www.youtube.com/watch?v=QO1Dqx62-HI', 6),
(9, 'RbEpmZTycUE', 'Descriptive Geometry 6-2', 'http://i.ytimg.com/vi/RbEpmZTycUE/hqdefault.jpg', 'هندسة وصفية - أمثلة على الأوضاع الخاصة للمستوى \n \nأمثلة على الأوضاع الخاصة للمستوى\n\nاحمد الحنبوشي\nطالب بكلية الهندسة جامعة الاسكندرية \nالسنة الثانية - قسم الهندسة الميكانيكية', 'http://www.youtube.com/watch?v=RbEpmZTycUE&feature', 2),
(10, 'tD_8hdcGAaM', 'Autodesk Inventor Lesson 10', '', '', 'http://www.youtube.com/watch?v=tD_8hdcGAaM', 6),
(24, 'ts-JdfHguCI', 'Descriptive Geometry 14-3', '', '', 'http://www.youtube.com/watch?v=ts-JdfHguCI', 2),
(3, 'USjlzaRG8K0', ' PCB 3 - How to use Eagle Software', 'http://i.ytimg.com/vi/USjlzaRG8K0/hqdefault.jpg', 'Using Eagle Library to get Electronic Components\nCourse information: http://goo.gl/Qm4yQ\n--\nContact us through\nAllemny Youtube Channel: http://goo.gl/Mmf2q\nAllemny Facebook Fan Page: http://goo.gl/L2UqK\nAllemny Twitter Account: http://goo.gl/Jgh5E\nAllemny E-mail: allemny@gmail.com', 'http://www.youtube.com/watch?v=USjlzaRG8K0&feature', 1),
(19, 'VaN-ErnReRE', 'Descriptive Geometry 12', '', '', 'http://www.youtube.com/watch?v=VaN-ErnReRE', 2),
(8, 'vivG4r6SLcQ', 'Matlab basics Lesson 8', '', '', 'http://www.youtube.com/watch?v=vivG4r6SLcQ', 5),
(4, 'W7aaPFxh4o4', ' PCB 4 - Wiring electronic ', 'http://i.ytimg.com/vi/W7aaPFxh4o4/hqdefault.jpg', 'Wiring Electronic Components\nCourse information: http://goo.gl/Qm4yQ\n--\nContact us through\nAllemny Youtube Channel: http://goo.gl/Mmf2q\nAllemny Facebook Fan Page: http://goo.gl/L2UqK\nAllemny Twitter Account: http://goo.gl/Jgh5E\nAllemny E-mail: allemny@gmail.com', 'http://www.youtube.com/watch?v=W7aaPFxh4o4&feature', 1),
(20, 'wAF9Ma5K9Bk', 'Descriptive Geometry 13-1', '', '', 'http://www.youtube.com/watch?v=wAF9Ma5K9Bk', 2),
(11, 'wEAWiz5_m8k', 'Descriptive Geometry 8-1', 'http://i.ytimg.com/vi/wEAWiz5_m8k/hqdefault.jpg', 'الدرس الثامن من دروس الهندسة الوصفية\n\nشرح وقوع نقطة على مستوى مع الامثلة\n\nم. احمد الحنبوشي\nطالب بكلية الهندسة جامعة الاسكندرية\nقسم الهندسة الميكانيكية', 'http://www.youtube.com/watch?v=wEAWiz5_m8k&feature', 2),
(1, 'W_5Mtx6-XOI', 'Descriptive Geometry 1', 'http://i.ytimg.com/vi/W_5Mtx6-XOI/hqdefault.jpg', 'الاسقاط الهندسي الدرس الاول\nالاسقاط العمودي على مستويين هندسيين ( اسقاط مونج )\n\nاحمد الحنبوشي\nطالب بكلية الهندسة جامعة الاسكندرية \nالسنة الثانية', 'http://www.youtube.com/watch?v=W_5Mtx6-XOI&feature', 2),
(6, 'X4_NqtSCrmg', 'Autodesk Inventor Lesson 6', '', '', 'http://www.youtube.com/watch?v=X4_NqtSCrmg', 6),
(13, 'xE0Y38vkM2w', 'Autodesk Inventor Lesson 13', '', '', 'http://www.youtube.com/watch?v=xE0Y38vkM2w', 6),
(8, 'yBEPfj46dkY', 'Autodesk Inventor Lesson 8', '', '', 'http://www.youtube.com/watch?v=yBEPfj46dkY', 6),
(1, 'YBmUwEoXfMU', 'Autodesk Inventor Lesson 1', '', '', 'http://www.youtube.com/watch?v=YBmUwEoXfMU', 6),
(8, 'yfBCH3eAe4o', 'Descriptive Geometry 6-1', 'http://i.ytimg.com/vi/yfBCH3eAe4o/hqdefault.jpg', '6- هندسة وصفية - الحالات الخاصة للمستوى\n \nشرح الحالات الخاصة للمستوى مع أمثله\n\nاحمد الحنبوشي\nطالب بكلية الهندسة جامعة الاسكندرية\nالسنة الثانية - قسم الهندسة الميكانيكية', 'http://www.youtube.com/watch?v=yfBCH3eAe4o&feature', 2),
(10, 'ztGZZs6eKvE', 'Descriptive Geometry 7', '', '', 'http://www.youtube.com/watch?v=ztGZZs6eKvE', 2),
(15, 'ZzoDCB39x2Q', 'Descriptive Geometry 10', '', '', 'http://www.youtube.com/watch?v=ZzoDCB39x2Q', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `FK_videos_playlist` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
