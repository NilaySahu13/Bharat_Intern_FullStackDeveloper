-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 09:10 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE IF NOT EXISTS `blogposts` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `btitle` varchar(500) NOT NULL,
  `bcontent` varchar(15000) NOT NULL,
  `bauthor` varchar(20) NOT NULL,
  `bdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bcategory` varchar(50) NOT NULL,
  `bedit` date DEFAULT NULL,
  `bimage` varchar(200) NOT NULL,
  `bvideo` varchar(50) DEFAULT NULL,
  `bkey` varchar(50) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`bid`, `btitle`, `bcontent`, `bauthor`, `bdate`, `bcategory`, `bedit`, `bimage`, `bvideo`, `bkey`) VALUES
(1, '11 Types of Summer Squash', 'One of my favorite parts of summer is all the types of squash that are in season. Weâ€™re not just talking yellow squash and zucchini. Head to the farmers market, and you might find Zephyr squash, Mexicana squash, patty pan squash, and more.', 'ME', '2023-06-27 00:00:00', 'food', NULL, '64a0a741c4387_types-of-squash-1-683x1024.jpg', NULL, '64a137360b8'),
(2, 'Champagne Vinaigretter', 'Pop the champagne (vinaigrette)! This bright, citrusy salad dressing has become one of my favorites lately, and I think you need it in your back pocket too.', 'ME', '2023-06-29 00:00:00', 'food', NULL, '64a0a7dc89bcc_champagne-vinaigrette-1-888x1024.jpg', NULL, '64a137726b2'),
(3, 'THE BEST WALKING TOURS IN LISBON', 'Lisbon is one of my favorite cities in the world. Itâ€™s home to impressive museums, historic buildings, picturesque plazas, chilled-out cafes, and a lively mix of clubs and candlelit music venues where people go to listen to traditional fado music. I fell in love with the city as soon as I arrived â€” and it was even better the second time!\r\n\r\nToday, Lisbon is one of the most popular cities on the continent. From cruisers to digital nomads, everyone loves this sunny city. Iâ€™ve visited a few times over the years and always look forward to going back. The warm weather, inviting colors, and laid-back vibe really make people feel welcome.', 'MEE', '2023-06-30 00:00:00', 'travel', NULL, '64a0aa9e929f2_lisbonwalkingtours.jpg', NULL, '64a1377f66e'),
(4, 'HOW TO SPEND 5 DAYS IN OAXACA', 'Oaxaca is one of my favorite cities. From the moment I first visited, I knew this was a place I would return to again and again and again. Iâ€™ve been half a dozen times now, even leading tours around the city.\r\n\r\nLocated in southwestern Mexico in a valley surrounded by craggy mountains, Oaxaca has been inhabited for thousands of years by indigenous Zapotec and Mixtec peoples. Today, itâ€™s a center for food, mezcal production, and artisan textiles and pottery, and features a rich history, owing to places like Monte AlbÃ¡n and Mitla.\r\nTake all that history, food, and drink, and package it in a place brimming with colorful buildings, scenic rooftop restaurants and bars, unique street art, and picturesque parks, and itâ€™s no surprise so many people â€” myself included â€” love Oaxaca.\r\n\r\nSince Iâ€™ve visited this city a lot, to help you plan your trip, I put together this five-day Oaxaca itinerary. It covers all the highlights, my favorite things to see and do, and some off-the-beaten-path activities too!', 'ME', '2023-06-20 00:00:00', 'travel', NULL, '64a0ab0f0e758_oaxitinerary.jpeg', NULL, '64a1378fe55'),
(5, 'Warm-Weather Accents: 9 Summer Accessories Every Man Needs', 'There are no two ways about it, dressing for summer isnâ€™t especially fun. With the autumn and winter months, you can experiment with layering, combining multiple garments and styles of clothing to create outfits full of depth and interest. Thereâ€™s much more room for individuality, allowing you to flex your style nous in the process.\r\n\r\nWith summer, youâ€™re usually limited to some variation of a T-shirt/polo shirt and shorts look, with what you wear largely dictated by the heat. But there are a few ways you can subtly jazz things up.\r\n\r\nWarm-weather accessories can make or break a look when temperatures rise. For instance, a well-chosen pair of sunglasses can elevate said T-shirt and shorts combo into something greater than the sum of its parts. The right cap, jewellery or watch make all the difference too, with complementary pieces working together to inject that much needed slice of individuality into an otherwise pedestrian outfit.\r\n\r\nFrom socks and summer fragrances to bracelets and tote bags, these are the summer accessories every man needs.', 'Me', '2023-07-01 00:00:00', 'fashion', NULL, '64a0ac443354b_The-Resort-Co-Hacienda-Bourbon-Brown-1000x709.jpg', NULL, '64a1379f600'),
(6, '3 Types Of Products You Should Use If Youâ€™re Losing Your Hair (Straight Away)', 'So youâ€™ve noticed youâ€™re losing your hair and it feels like the end of the world. Trust me, I get it. Iâ€™ve been there, done that and bought the T-shirt. As a seasoned veteran of no less than 13 hair transplants myself, I can tell you for sure that the sooner you get a jump on treating your hair loss, the better off youâ€™ll be.\r\n\r\nBut where do you start? Iâ€™ve researched thousands of hair loss treatment products over the years, testing many of them on my own scalp and hair. In my role as a world-recognised hair loss advisor and mainstream media correspondent, I only advocate the use of brands I personally use and whose quality and efficacy I can verify from experience.\r\n\r\nHair loss is progressive so itâ€™s important you tackle it head on by implementing a strong, appropriate, proven regime. Dense is a brand that Iâ€™ve found to cover all bases of hair loss treatment, short of a transplant itself.\r\n\r\nTheyâ€™ve put together a variety of effective treatments, each serving a specific purpose, and this is why Iâ€™m thrilled to have joined them as a brand ambassador to help their products get the exposure they deserve. I know for a fact Denseâ€™s range will be able to help many hair loss sufferers that were in a similar situation to myself.\r\n\r\nSo, with that in mind, here are the three specific types of products every guy suffering from thinning hair or a receding hairline should consider, to give themselves the best chance of keeping (and in some cases even regrowing) their precious locks.\r\n\r\n1. Scientifically-Proven Prescription Topicals\r\nThe most potent solution you can use, Denseâ€™s prescription-only products are legitimate, pharmaceutical-grade treatments that have been scientifically proven to regrow hair while catering to sensitive scalps.\r\n\r\nThese are topical treatments that help fight the primary cause of hair loss. Although side effects are rare with prescription tablets like oral Minoxidil, Finasteride and Dutasteride, those that do suffer them find themselves stuck â€“ wanting to use these proven solutions but their body unable to tolerate them.\r\n\r\nNot any more. Dense are the only UK provider to offer topical Finasteride and Dutasteride, and alongside that they are combining it with varying strength Minoxidil.', '@nsh', '2023-07-02 00:00:00', 'fashion', NULL, '64a0acb0df9e0_hair-loss-product-essentials-1000x583.jpg', 'lgo.mp4', '64a137b01f3'),
(7, 'THE TOP Safari Destinations IN AFRICA', 'Best Regions For Safari: MalaMala, Sabi Sands (within Kruger), Southern Kruger National Park\r\n\r\nBest Time Of Year For Safari: May to September (Winter)\r\n\r\nBest Accommodations for Safari: Lion Sands Ivory Lodge and Treehouses (3-5 stars), The Royal Malewane in South Africa (5 stars), Gondwana Game Reserve (4 stars), Cheetah Plains (5 stars)\r\n\r\nMy newly adopted home country is one of my favorite places on the planet. While Cape Town has some impressive sights, thereâ€™s nothing quite like getting out into the bush of South Africa!\r\n\r\nOne of my favorite spots is the Lion Sands Ivory Lodge and Treehouses. They have a treehouse under the stars you have to see to believe!\r\n\r\nThe Royal Malewane in South Africa is an ace option for exploring Kruger National Park. And, just four hours from Cape Town, Gondwana Game Reserve offers a once-in-a-lifetime chance to see the Big Five (African lions, African elephants, African leopards, Cape buffalos, and rhinoceros).\r\n\r\nYou truly canâ€™t go wrong with any one of these placesâ€¦ And then thereâ€™s Cheetah Plainsâ€”one of the most incredible and luxurious safari lodges in Africa. Situated adjacent of the Kruger National Park, Sabi Sands boasts some of the best wildlife viewings in South Africa.', 'me', '2023-05-31 00:00:00', 'travel', NULL, '64a1399516aae_Top-Safari-Destinations-in-Africa.jpg', '64a13995176d5_safari-destination-africa.jpg', '64a1399516a'),
(9, 'THE TOP Safari Destinations IN AFRICA', 'Best Regions For Safari: MalaMala, Sabi Sands (within Kruger), Southern Kruger National Park\r\n\r\nBest Time Of Year For Safari: May to September (Winter)\r\n\r\nBest Accommodations for Safari: Lion Sands Ivory Lodge and Treehouses (3-5 stars), The Royal Malewane in South Africa (5 stars), Gondwana Game Reserve (4 stars), Cheetah Plains (5 stars)\r\n\r\nMy newly adopted home country is one of my favorite places on the planet. While Cape Town has some impressive sights, thereâ€™s nothing quite like getting out into the bush of South Africa!\r\n\r\nOne of my favorite spots is the Lion Sands Ivory Lodge and Treehouses. They have a treehouse under the stars you have to see to believe!\r\n\r\nThe Royal Malewane in South Africa is an ace option for exploring Kruger National Park. And, just four hours from Cape Town, Gondwana Game Reserve offers a once-in-a-lifetime chance to see the Big Five (African lions, African elephants, African leopards, Cape buffalos, and rhinoceros).\r\n\r\nYou truly canâ€™t go wrong with any one of these placesâ€¦ And then thereâ€™s Cheetah Plainsâ€”one of the most incredible and luxurious safari lodges in Africa. Situated adjacent of the Kruger National Park, Sabi Sands boasts some of the best wildlife viewings in South Africa.', 'me', '2023-05-31 00:00:00', 'travel', NULL, '64a13a2c2226f_Top-Safari-Destinations-in-Africa.jpg', '64a13a2c227d1_safari-destination-africa.jpg', '64a13a2c222'),
(15, 'a', 'a', 'a', '2023-07-25 00:00:00', 'diy', NULL, '64a26cc8204ac_wallpaperflare.com_wallpaper.jpg', '64a26cc8210e3_wallpaperflare.com_wallpaper (3).jpg', '64a26cc82040f'),
(16, 'a', 'a', 'a', '2023-07-25 00:00:00', 'diy', NULL, '64a26cc822de0_wallpaperflare.com_wallpaper.jpg', NULL, '64a26cc82040f');

-- --------------------------------------------------------

--
-- Table structure for table `subposts`
--

CREATE TABLE IF NOT EXISTS `subposts` (
  `sid` int(30) NOT NULL AUTO_INCREMENT,
  `stitle` varchar(100) NOT NULL,
  `scontent` varchar(250) NOT NULL,
  `sdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `skey` varchar(25) NOT NULL,
  `scategory` varchar(25) NOT NULL,
  `simage` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subposts`
--

INSERT INTO `subposts` (`sid`, `stitle`, `scontent`, `sdate`, `skey`, `scategory`, `simage`) VALUES
(1, 'Scientifically-Proven Prescription Topicals', 'The most potent solution you can use, Denseâ€™s prescription-only products are legitimate, pharmaceutical-grade treatments that have been scientifically proven to regrow hair while catering to sensitive scalps.', '2023-07-02 20:57:59', '64a137b01f3', 'fashion', '64a1977fbd972_dense-dust-3.jpg'),
(4, 'Scientifically-Proven Prescription Topicals', 'asdfasdfasdf', '2023-07-03 12:08:32', '64a26cc82040f', 'health', '64a26ce86b7ec_broccoli-salad-683x1024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `utype` varchar(10) NOT NULL DEFAULT 'user',
  `udate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uemail` varchar(25) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `utype`, `udate`, `uemail`) VALUES
(1, 'user', 'user', 'user', '2023-06-29 22:17:11', 'user@gmail.com'),
(2, 'admin', 'admin', 'admin', '2023-06-29 22:23:12', 'admin@gmail.com'),
(3, 'Ansh', 'ansh32', 'user', '2023-06-30 17:02:44', 'ansh32@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
