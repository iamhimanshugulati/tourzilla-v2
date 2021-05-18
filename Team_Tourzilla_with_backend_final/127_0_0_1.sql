-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 09:50 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourzilla_2`
--
CREATE DATABASE IF NOT EXISTS `tourzilla_2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tourzilla_2`;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(100) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_min_des` varchar(255) NOT NULL,
  `blog_desc` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_name`, `blog_min_des`, `blog_desc`, `dt`) VALUES
(1, 'Rishikesh', 'Adventure Hub of Uttrakhand', 'Enjoy an adventure-Packed vacay at Rishikesh. You will love pleasant and sunny days with the comparatively colder evening. Rishikesh also has many pilgrimage sites.', '2021-03-14 17:47:50'),
(2, 'Amritsar', 'The Spiritual Capital of Punjab', 'Embark on a soul-soothing pilgrimage to Amritsar. You will love exploring sightseeing attraction and attending the various festival. The Local cuisines at Amritsar are worth trying out too', '2021-03-14 17:49:09'),
(3, 'Neemrana', 'Rajasthan Magnificent Historical Town', 'Dive into the precious Heritage of Neemrana. You will love sightseeing adventure activities, and the Navratri and Diwali celebration. You can also enjoy the various adventure activities at Neemrana.', '2021-03-14 17:49:09'),
(4, 'Jaipur', 'Jaipur is the beautiful Jal Mahal or Lake Palace.', 'Planned by Vidyadhar Bhattacharya, Jaipur holds the distinction of being the first planned city of India. Renowned globally for its coloured gems, the capital city of Rajasthan combines the allure of its ancient history with all the advantages of a metropolis. The bustling modern city is one of the three corners of the golden triangle that includes Delhi, Agra and Jaipur.', '2021-03-17 16:47:47'),
(5, 'Jammu and Kashmir', ' Jammu & Kashmir. \"Paradise on the Earth\".', 'Jammu & Kashmir is known for its religious shrines. The state abounds with important pilgrimage sites for people of all religions, whether Hindu, Muslim or Buddhist.  The state has several national parks and sanctuaries, aimed at protecting some of these endangered species.', '2021-03-17 16:47:47'),
(6, 'Shimla', 'Shimla, the beautiful hill station of Himachal Pradesh.', 'Shimla, one of India\'s most famous hill stations, derives its name from Goddess Shyamala, an incarnation of Goddess Kali, the deity of power and wrath. However, unlike its name, Shimla is a perfect heaven for the ones in search of tranquility.', '2021-03-17 16:47:47'),
(7, 'Tamil Nadu', 'Tamil Nadu- A land of cultural and religious heritage.', 'The art and culture are so deeply embedded in Tamil Nadu that as a tourist here, you have plenty of experiences to relish. Welcome to Tamil Nadu! The land where the tales and influence of Cholas, Pandyas, and Pallavas can still be seen and the beaut landscape, sacred temples, and imposing wildlife make you feel instantly connected with this tourist destination in India.', '2021-03-17 16:47:47'),
(8, 'Mussoorie', 'Mussoorie-\"The Qween Of Hills\".', 'The muse of a romantic, a loner’s wonderland and a nature lover’s paradise, the glittering hill station of Mussoorie has always been the favourite of many. Once you visit here you cannot wipe off the memories from your heart as the kaleidoscopic hills will always remind you of your betrothal.', '2021-03-17 16:47:47'),
(9, 'Agra', 'Agra is world famous city for Taj Mahal.', 'Agra is one of the most popular tourist destinations in India. It is renowned for being home to one the Seven Wonders of the world, the Taj Mahal.The glorious city of Agra is one of the most-visited tourist destinations in India given the fact.Agra has three UNESCO World Heritage sites, the Taj Mahal and the Agra Fort in the city and Fatehpur Sikri nearby. ', '2021-03-17 16:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_thread`
--

CREATE TABLE `blogs_thread` (
  `blogs_id` int(100) NOT NULL,
  `blogs_title` varchar(100) NOT NULL,
  `blogs_desc` text NOT NULL,
  `blogs_cat_id` int(100) NOT NULL,
  `blogs_user_id` int(100) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs_thread`
--

INSERT INTO `blogs_thread` (`blogs_id`, `blogs_title`, `blogs_desc`, `blogs_cat_id`, `blogs_user_id`, `timestamp`) VALUES
(1, 'agra', 'agra is best', 9, 1, '2021-03-17 21:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `s_no` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email__id` varchar(100) NOT NULL,
  `contact__no` int(100) NOT NULL,
  `c__message` text NOT NULL,
  `dt` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`s_no`, `name`, `email__id`, `contact__no`, `c__message`, `dt`) VALUES
(1, 'Priyam', 'noemail_id@admin.com', 123, 'thanku', '2021-03-17 10:13:33.985827'),
(2, '', 'dsds@dd.com', 0, '', '2021-04-17 15:02:47.028262'),
(3, 'Himanshu', 'sdsd@sdds.cm', 2147483647, 'Hi', '2021-04-19 01:14:24.975283');

-- --------------------------------------------------------

--
-- Table structure for table `dinein_book`
--

CREATE TABLE `dinein_book` (
  `sno` int(100) NOT NULL,
  `dine_date` date NOT NULL,
  `dinein_num` varchar(100) NOT NULL,
  `dinein_sess` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `contact_num` varchar(100) NOT NULL,
  `dinein_book_desc` text NOT NULL,
  `rest_name` varchar(100) NOT NULL,
  `rest_loc` varchar(100) NOT NULL,
  `dt` datetime(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dinein_book`
--

INSERT INTO `dinein_book` (`sno`, `dine_date`, `dinein_num`, `dinein_sess`, `f_name`, `email_id`, `contact_num`, `dinein_book_desc`, `rest_name`, `rest_loc`, `dt`) VALUES
(1, '2021-04-17', '6+', 'Dinner', 'Himanshu Gulati', 'himanshugulati138@gmail.com', '7015948964', 'No Request', 'Malabar Restaurant', 'Dehradun', '2021-04-17 19:10:47.83061'),
(2, '2021-04-24', '1', 'Break', 'Himanshu', 'no@no.com', '789456124', 'Yes', 'The 3 Pines Cafe', 'Dehradun', '2021-04-17 19:17:12.42673'),
(3, '2021-04-14', '3', 'Lunch', 'Himanshu Gulati', 'himanshugulati138@gmail.com', '7015948964', 'dssdsd', 'Malabar Restaurant', 'Dehradun', '2021-04-18 23:29:51.71438');

-- --------------------------------------------------------

--
-- Table structure for table `dine_in`
--

CREATE TABLE `dine_in` (
  `sno` int(255) NOT NULL,
  `rest_name` varchar(255) NOT NULL,
  `res_min_desc` varchar(255) NOT NULL,
  `res_desc` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `dt` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dine_in`
--

INSERT INTO `dine_in` (`sno`, `rest_name`, `res_min_desc`, `res_desc`, `location`, `dt`) VALUES
(1, 'Alankar Restaurants', 'North Indian', 'A venture by Alankar Restaurants, in Dehradun, Uttrakhand is one of the good restaurants in Dehradun which is ranked amongst the topmost elite restaurants in the hospitality industry. It is one of the top 10 restaurants in Dehradun which is known for serving top quality Mughlai, and North Indian cuisine with an aim to plate the authentic flavors of North-west frontier foods for its customers. It is one of the best pure veg restaurants in Dehradun.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(2, 'Ancient Table', 'Chinese', 'Located on the famous Rajpur road, Ancient Table is one of the finest restaurants in Dehradun. For an exquisite rooftop dining experience. This restaurant is not only known for its lipsmacking food, but also for its exotic drinks menu, and an opulent ambiance, and serene location, and enthralling views of the surrounding Buildings. No doubt, it is one of the top open air restaurants in Uttrakhand. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(3, 'Barbeque Nation', 'Chinese', 'Looking for restaurants in Rajpur road Dehradun? Step into the most famous family restaurant Dehradun, the Punjab Restaurant. Known for fine dining feel, and family style ambiance, this popular restaurant serves the best North Indian food in town with different variations in the dishes without giving up on its authentic flavors. It is one of the best chinese restaurant in Dehradun.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(4, 'Black Pepper', 'Chinese', 'Mastering the authentic Indian cuisine, Black Pepper restaurant in Dehradun is one of the top-rated restaurants in the city. Any list of restaurants in Dehradun will be incomplete without including Black Pepper not only because of its food but also because of the exemplary ambiance, extensive sitting, and an extremely professional staff. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(5, 'Cafe De Piccolo', 'North Indian', 'Feel like eating vegetarian food in North? Head to Town Table, one of the best vegetarian restaurants in Dehradun. Even though this restaurant is not amongst the top pure veg restaurants in Dehradun, it is still known for its wide, and delicious variety of vegetarian dishes. Also, its exquisite ambiance makes it an ideal place for dining with friends as well as family. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(6, 'Chulbul\'s cafe', 'Italian', 'Boasting of an opulent outdoor sitting, Chulbul\'s Cafe is one of the finest buffet restaurants in Dehradun. It\'s open-air setting, and extensive buffet along with top-notch service, combine together to deliver an unforgettable experience of rooftop dining. The buffet menu features a number of cuisines like North Indian, Chinese, and Italian, to satisfy every palate. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(7, 'Doon Darbar', 'North Indian', 'Featuring Buddhist style interiors, Doon Darbar is designed to give you a perfect tibetan feel. If you are looking for good non veg restaurants in Dehradun that serve toothsome Tibetan, and Chinese food, then Kalsang would be your best pick. Its elaborate menu features numerous Tibetan, and Chinese dishes which are prepared with different variations. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(8, 'Dunkin\'s Donuts', 'Continental', 'Located inside Hotel Inderlok, Dunkin\'s Donuts is a fine dining restaurant known for its art of gourmet. The innovative kitchen of this elegant restaurant is run by extremely professional chefs who work to deliver the best quality food on the customer\'s table. Also, the sophisticated ambiance of the restaurant complements its family-style theme, making it one of the most famous restaurants in Dehradun. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(9, 'Eddi\'s Restaurant', 'Continental', 'Nested amidst a tranquil environment of the surrounding hills, Eddie\'s Restaurant. is a casual dining restaurant located near the famous attraction of Dehradun, the Sahastradhara. Offering both outdoor, and indoor sitting, and a small pool, it is one of best restaurants for couples in Dehradun where they can enjoy flavourful food in a quaint environment, and an intimate ambiance. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(10, 'Haveli', 'North Indian', 'Haveli is one of the top restaurants in Dehradun. If you are looking for decent places to eat with your loved ones. Set up amidst lush green surroundings, It offers a tranquuil environment where you can spend quality time with your friends and family while savoring palatable North Indian, and Chinese food. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(11, 'Kabila Restaurants', 'North Indian', 'Kabila Restaurants is one of the most popular restaurants in Dehradun, known for its unique way of preparing even the most basic South Indian dishes. With an extremely decent, and cozy ambiance, and close proximity to the city center, this restaurant is the best place to savor the real taste of fusion food.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(12, 'Kalsang Ama Cafe', 'Continental ', 'The KAC is a restaurant and bar located on the property of Brentwood Hotels & Resorts. Overlooking The Mall road, it is one of the most extravagant restaurants in Dehradun, that features and extensive bar, live music, a rustic ambiance, and of course delicious food. This restro bar is a perfect blend of fine and casual dining.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(13, 'Madhuban Sweets', 'North Indian', 'If you are a true sweet lover, if you should defenitely visit Madhuban Sweets. You will find a shop of \'Madhuban Sweets\' at every Nukkad as they are very famous. There are variety of sweets available. I will highly recommend you to try their Rasmalai atleast once. It is one of the best sweet shop in Uttar Pradesh.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(14, 'Malabar Restaurant', 'Italian', 'With a rustic looking ambiance, and an elegant seating, Malabar Restaurants is one of the best restaurants in Dehradun for a fine dining experience. Savor a wide range of dishes in a tranquil countryside setting, amidst the greenery of the Doon plains, accompanied by fine wines, and exotic drinks. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(15, 'Nukkad Ke Bhukkad', 'North Indian', 'Located inside Hotel President, Nukkad Ke Bhukkad is one of the oldest restaurant in Dehradun. This restaurant has maintained its reputation of serving the best North food in town, and plating unmatched flavors of Continental, and Chinese as well. Apart from the good food, this restaurant is also known for its courteous staff who work hard to provide excellent service.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(16, 'Orchard', 'Italian', 'Looking for family restaurant in Dehradun? Then book a table at Orchard restaurant to enjoy an unforgettable dining experience with your loved ones. With an extensive food menu featuring North Indian, and Continental dishes, and a soothing ambiance, the Orchard is one of the top restaurants in Dehradun where you would live to go again and again. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(17, 'Rave 3', 'North Indian ', 'A part of the luxurious IDA Hotel in Dehradun, Rave 3 is one of the most romantic South Indian restaurants in Dehradun. Set alongside a pool, this open-air restaurant is designed exquisitely to provide a luxury dining experience. the intimate open-air setting renders this restaurant as one of top places to go out on a dinner date with your partner where the ambiance will compliment your mood and the food will satisfy your palate. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(18, 'Razzmataz', 'Italian', 'Razzmatazz is a popular restro lounge located on the Rajpur Road. It features a dark ambiance lit with blue LEDs throughout. It is one of the best budget-friendly restaurants in Dehradun which serves mouth-watering North Indian, and Chinese cuisines, in a lavish environment like nowhere else.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(19, 'Royal Food Corner', 'Continental ', 'If you\'re a party animal, this place is exactly what you\'he been looking for. With its unique blend cocktails, wild parties, and good music, Summer House Cafe has something for everyone. Have memorable conversations on their terrace, or dance the night away with your partners during their Salsa night. Dine at one of the best restaurants in Dehradun, with your loved ones for an unforgettable day out.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(20, 'Salt and Cravings', 'Italian', 'Salt and cravings, and relaxing environment as you dine out at one of the most luxurious restaurants in Dehradun. This restaurant is a part of the dining arena of the Solitaire group of hotels. With and utterly professional team of chefs, this restaurant provides one of kind dining experience, and serves one of the best Mughlai, and Continental dishes in the whole town.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(21, 'Sher-e-Punjab', 'North Indian', 'Sher-e-Punjab is a fine dining restaurant located inside the Four Points Hotel Sheraton, Dehradun. It is one of the best restaurants in Dehradun, where the courteous staff works to deliver perfection, and satisfaction to the customer. Apart from the service, the food served if of superior taste and quality which is complemented by a variety of alocoholic drinks, and cocktail. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(22, 'Spicy', 'Continental', 'Nothing can beat the surreal ambiance and interior of Spicy, you\'ll be pleased by their commitment to the food they cater too. In a sea of new places, Spicy has definitely stood out with its original concept and exquisite meals. You\'ll surely have a pitcher perfect moment at this best restaurant in Dehradun and it\'s definitely one of those places where you would want to bring your loved one for a dinner. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(23, 'Tasty Taste', 'North Indian', 'Tasty Taste is famous for their authentic North Indian preparations. The food is hygienic here and the ambiance is soothing and comfy. South Indian Thali is worth trying with mouth watering Rasam, Sambhar and Dosa. In short, with good food at a good price with good service, this place never fails to amaze.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(24, 'The 3 Pines Cafe', 'Italian ', 'It\'s the ultimate destination. We\'he been all over the city, but have still not found a match for the fruit ice creams that this cafe is so famous for. The only con of visiting this place is that there are so many options available, you\'ll wish you had a black hole for a stomach. You\'he got to cure your sweet tooth craving at one of the best ice cream parlous in Dehradun.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(25, 'The Food Cafe', 'Continental ', 'The Food Cafe literally means great enthusiasm or passion. The vibes of this place is exactly like the meaning; on the first floor you\'ll experience a laid back ambiance with oh-so soothing ghazals whereas on the second floor you can unleash your party animal in the lounge, in short, this place is a perfect package. If you are still looking for more, then this place also has a classy rooftop where you can enjoy their delish food with oozing drinks. They host a number of live music events such as Sufi and Bollywood nights, so plan your visit accordingly,', 'Dehradun', '0000-00-00 00:00:00.000000'),
(26, 'Town Table', 'NonVegetarian ', 'An enthralling place to be at for new experiences and, as the name suggests, socializing. Town Table, beautiful rooftop, mesmerizing view of the lake and some of the most happening people come together to create an enchanting ambiance, that is perfect for partying or just hanging out. An excellent range of drinks and toothsome multi-cuisine preparations are served here, in the familiar quirky manner that this outlet\'s chain is famous for. Don\'t leave this place without trying their butter chicken biryani.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(27, 'Y Cafe', 'Chinese', 'Featuring a casual dining setup, Y Cafe and restaurant is one of the best restaurant in Dehradun for hanging out with your best friends. This cafe is famous for its live music sessions, elegant ambiance and limited but delectable variety of food. It is also a good place to spend time in solitude where one can peacefully read a novel from their book collections while sipping a mug of coffee, and enjoying some light snacks. So, if you\'re looking for a live music restaurant in Dehradun, this is the place3 to be.', 'Dehradun', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `explore`
--

CREATE TABLE `explore` (
  `sno` int(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `state_desc` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `explore`
--

INSERT INTO `explore` (`sno`, `region`, `state`, `state_desc`, `dt`) VALUES
(1, 'South India', 'Andhra Pradesh', 'Andhra Pradesh India is known for its glorious past. The ancient temples, monuments, forts, palaces, old markets are testimony to its rich history, culture and architecture. There are many sacred pilgrimage shrines in Andhra Pradesh of which Tirumala and Puttaparthi are visited by millions of devotees from all across the world. Andhra Pradesh is blessed with breathtaking natural beauty. Surrounded by misty hills, dense forests, undulating mountains, silvery cascades, and shimmering rivers, Andhra Pradesh is home to many famous hill stations, wildlife sanctuaries, national parks and, virgin beaches.', '2021-03-16 18:52:58'),
(2, 'North India', 'Arunachal Pradesh', 'Popularly known as \'Land of the Dawn-lit-Mountains\', Arunachal Pradesh is India\'s remotest state and the first Indian soil to greet the rising sun. Located on the northeastern tip of India with its borders touching China, Bhutan and Burma (Myanmar), this beautiful land is endowed with dazzling array of flora and fauna that is sure to allure any tourist. More than 500 rare species of Orchids are found in the dense jungles of Arunachal Pradesh. The misty hills, sparkling rivers, gurgling waterfalls add charm to the beauty of this incredible land. Arunachal Pradesh finds its mention in the literature of Kalika Purana and the great Hindu Epic Mahabharata.\r\n', '2021-03-22 10:24:24'),
(3, 'East India', 'Assam', 'Dominated by the mighty Brahmaputra River, the state of Assam is the gateway to the northeastern part of India. This beautiful land finds its reference in the great Hindu epic Mahabharata as \"Pragiyotisha\" and \"Kamarupa\" in the first millennium. Assam gets its name from the Ahom kingdom, which flourished from 1228 to 1826. It became a British province after 1838 and the Indian state after 1947 which came to be known as Assam. Endowed with lush greenery, Assam India is renowned for Assam tea, silk, petroleum resources and rich flora and fauna, the world famous one horned rhinoceros and other rare species of wildlife on the verge of extinction.\r\n', '2021-03-22 10:24:24'),
(4, 'East India', 'Bihar', 'Bihar is nestled on the banks of the holy river Ganga in the eastern part of India. The state shares its borders with Bengal, Orissa, Madhya Pradesh, Uttar Pradesh and Nepal. Bihar derives its name from a word \"Vihara\" that means monastery since the place in the past was a major learning centre of Buddhism. Ruled over by many great empires, it is renowned for its glorious past. Every nook and corner of this sacred land is dotted with historical monuments and Buddhist monasteries. Bihar is also renowned for its religious places. There are many Hindu, Buddhist, Jain, Muslim and Sikh shrines, which abound this ancient land. Some of the noteworthy Bihar travel destinations are Nalanda, Rajgir, Bodh Gaya, Patna,Vaishali, Vikramshila, and Pawapuri.', '2021-03-22 10:24:24'),
(5, 'North India', 'Chhattisgarh', 'Chhattisgarh is believed to be the place where Lord Rama spent some part of his exile. A tribal-dominated state, Chhattisgarh is an exquisitely scenic, covered with dense forest and crisscrossed by two mighty rivers, Indravati and Mahanadi. Ancient underground caves and gurgling waterfalls dot the breathtaking landscape. Incredible natural beauty blended with rich cultural heritage make Chhattisgarh one of the most promising tourist destinations of India.', '2021-03-22 10:24:24'),
(6, 'West India', 'Goa', 'Popularly referred to as \"Rome of the East\" and \"Pearl of the Orient\", the small state of Goa nestles on the lush green Konkan coast on the western coast of India. Goa is renowned for its breathtaking scenic beauty and the architectural splendors of Old Portuguese mansions magnificent churches, massive forts, and ornate temples. Commanded by various dynasties, this exotic land is a potpourri of various cultures and traditions.', '2021-03-22 10:24:24'),
(7, 'West India', 'Gujarat', 'Located on the country\'s western coast, Gujarat is one of the most vibrant coastal states of India, rich in crafts, history and natural beauty. The place derives its name from \'Gujaratta\' meaning the land of Gurjars who passed through Punjab and settled in some parts of Western India. They were the sub tribes of the Huns who ruled the area during 8th and 9th centuries AD. The history of Gujarat dates back to 2000 BC. It is believed that Lord Krishna evacuated Mathura and settled his new capital on the west coast of Surashatra at Dwarka. Gujarat is bounded by the Arabian Sea on the west, Pakistan and Rajasthan in the north and northeast respectively, Madhya Pradesh in the southeast and Maharashtra in south. Gujarat with the longest coastline (1290km) in the country is renowned for its ancient temples.\r\n', '2021-03-22 10:24:24'),
(8, 'North India', '\r\nHaryana', 'Set in the foothills of Aravalli, the small state of Haryana sprawls over an area of over 44,000 square kilometers in North India. It was founded in 1966 when the former state of Punjab was divided into Haryana and the modern Punjab.Haryana, meaning Home of Hari (goddess Vishnu) has a proud history that dates back to the Vedic age. It has witnessed the rise and fall of many an empire. The battle between the Kauravas and the Pandavas, described in the great epic Mahabharata is believed to have been fought on the site of the modern Kurukshetra in Haryana. It was here that Lord Krishna imparted to the Pandava warrior, Arjun the teachings of the Bhagwad Gita. Haryana is renowned for its ancient temples.', '2021-03-22 10:24:24'),
(9, 'North India', 'Himachal Pradesh', 'The picturesque state of Himachal Pradesh is nestled between the snow topped Himalayan ranges in North India. Known for its spectacular and panoramic landscapes, this traveler\'s paradise is blessed with lofty snow peaks, deep gorges, verdant valleys, thundering rivers, enchanting mountain lakes, flower carpeted meadows, ancient temples, and magnificent monasteries steeped in time. Dotted with numerous hill stations, Himachal Pradesh proves to be a wonderful location for the tourists who want to relax and simply feel rejuvenated. The state also offers amazing opportunities for trekking, mountaineering, para gliding, skiing, golf , river rafting and ice skating.\r\n', '2021-03-22 10:24:24'),
(10, 'North India', 'Jammu and Kashmir', 'The Union Territory of Jammu And Kashmir encompassing the Jammu region and the Kashmir valley is home to some truly beautiful valleys such as the Chenab Valley, Lidder Valley, Sindh Valley, and not to mention the Kashmir Valley. Dubbed as ‘heaven on earth’, the northernmost state of India is known for its picture-postcard scenery that comprises gurgling brooks, flowering gardens, snow-capped hills, lush meadows, apple orchards and serene lakes with the iconic shikaras.Srinagar, the summer capital of Jammu and Kashmir, lies in the Kashmir Valley along the banks of the Jhelum River, and all-round Srinagar you will be stupefied by its natural beauty, its abundant gardens, houseboats and waterfronts.\r\n', '2021-03-22 10:24:24'),
(11, 'East india', 'Jharkhand\r\n', 'The beautiful state of Jharkhand is set in the picturesque Chhotanagpur Plateau in eastern India. Carved out of Bihar, the state came in to existence on 15 November 2000. Jharkhand shares its borders with Bihar in the North, Chhattisgarh in the West, Orissa in the South and West Bengal in the East. Surrounded by lush green hills, Jharkhand is renowned for its rich mineral wealth, untouched beauty of the wooded forest, amazing wild life, and magnificent waterfalls. The rich and diverse culture and breathtaking scenic splendour of Jharkhand draw large number of tourists every year.\r\n', '2021-03-22 10:24:24'),
(12, 'South India', '\r\nKarnataka', 'Karnataka, the land of ultimate natural beauty and rich cultural heritage is situated in the Southern India, bounded by Maharashtra and Goa in the north, Andhra Pradesh on the east and Tamil Nadu and Kerala on the south. The western coast of the state is splashed by Arabian Sea, which is dotted with picturesque beaches. Karnataka is blessed with the lush green Western Ghats, roaring Jog waterfalls, densely forested Sahayadri, and the rich wildlife sanctuaries like Nagarhole and Bandipur. Apart from its awe-inspiring natural beauty, majestic architecture, and pilgrimage sties, Karnataka is also renowned for its software industry, Carnatic music, and the exciting festivals that make it one of the most celebrated states in India.', '2021-03-22 10:24:24'),
(13, 'South India', 'Kerala', 'Popularly known as \"God\'s Own Country\", Kerala is one of the most sought after tourist destinations in the world. This exotic land is renowned for its rich cultural heritage, tropical climate, palm fringed beaches, misty hill stations, health resorts, wild life sanctuaries, enchanting art forms, grand festivals and, the serenity of the backwaters and the emerald blue Arabian Sea which promise an unforgettable holidaying experience to travellers. According to \"National Geographic Travel\", the leading travel Magazine, Kerala is one of the 50 must see destinations of a lifetime and one of the 10 paradises of the World.', '2021-03-22 10:24:24'),
(14, 'North India', 'Madhya Pradesh', 'Madhya Pradesh, often called the \"Heart of India\" is a state located in the central India. This historical land shares its boundaries with Uttar Pradesh, Chhattisgarh, Maharashtra, Gujarat and Rajasthan. Madhya Pradesh is known for its religious hubs of Hinduism, Buddhism, Jainism and Islam, Khajuraho temples, impregnable forts, exquisitely carved Jain temples, palaces, which are the glorious reminders of erstwhile era of the royal Rajas and Maharajahs. Endowed with immense natural beauty and splendour, Madhya Pradesh is also famous for its wildlife sanctuaries and national parks, which are home to a rich variety of flora and fauna.\r\n', '2021-03-22 10:24:24'),
(15, 'West India', 'Maharashtra', 'The beautiful state of Maharashtra is situated the north centre of Indian peninsula is bordered by the states of Karnataka, Goa, Gujarat, Madhya Pradesh and Andhra Pradesh. The western cost of the state is splashed by the vast Arabian Sea. Maharashtra literally means the \"Great State\" or \"Great Nation\". The name is believed to have been originated perhaps from the word Rathi, which means \"Chariot driver\" and \"builders of chariot\" who were called as \"Maharathis\" or \"Fighting Force\". Known for its amazing natural beauty and rich cultural heritage, Maharashtra is one of the most industrialized states of India. Some of the prime cities of Maharashtra include Mumbai, Pune, Nagpur, Nashik, Shirdi, and Kolhapur.', '2021-03-22 10:24:24'),
(16, 'East India', '\r\nManipur', 'Manipur, popularly referred to as the \'Switzerland of India\', is nestled in the slopes of the south flowing Sub-Himalayan ranges in the north east of India. This beautiful land is bounded by Nagaland in the north, Mizoram in the south and Cachar district of Assam in the west, and shares an international border with Upper Burma in the east. Manipur, literally meaning \'the jeweled land or the land of jewels\' boasts of an picturesque landscapes with misty hills, shimmering lakes, verdant valleys, gurgling rivers, and luxuriant forests. Manipur is also renowned for its rich culture and tradition, which is depicted in its art forms, handloom clothes and exquisite handicrafts.\r\n', '2021-03-22 10:24:24'),
(17, 'East India', 'Meghalaya', 'Meghalaya, of Scottish scenery and Indian charm is a beautiful state nestled amid Assam and Bangladesh. Meghalaya, literally meaning \"Abode of the Clouds\" takes distinction of being among the wettest places on earth. The Cherrapunji belt receives the highest rainfall in the world. Home to an extraordinary diversity of peoples, the Khasi, Jantia and Garo tribes, Meghalaya is one of the most picturesque states of India, which serves as an ideal gateway for people in search of beauty and tranquility. The panoramic landscapes, foggy hills, cascading waterfalls, serpentine rivers, and terraced slopes soothe the minds of weary travellers. Meghalaya is blessed with rich wildlife. The dense forests of Meghalaya are inhabited by many rare species of birds and animal including elephants, Tigers, Golden Cats, Binturongs.', '2021-03-22 10:24:24'),
(18, 'East India', '\r\nMizoram', 'Tucked away, between the lush green mountains, Mizoram is the youngest state in the Northeastern Corner of India. Formerly Known as the Lushai Hills, this tiny land is flanked by Bangladesh and Tripura in the West and Burma in the East. Mizoram is a dazzling treasure trove for the discerning travellers with its amazing array of cultures, festivals, dances, handicrafts, and rich flora and fauna. This beautiful land of the Blue Mountains is dotted with steep hills, wooded forests, verdant valleys, cascading waterfalls, and placid lakes, and offers unmatched tranquility and serenity. ', '2021-03-22 10:24:24'),
(19, 'East India', 'Nagaland\r\n', 'The picturesque state of Nagaland is located in the extreme North Eastern end of India. It is bounded by Myanmar in the East; Assam in the West; Arunachal Pradesh and a part of Assam in the North with Manipur in the south. The exquisitely scenic landscape, rich flora, fauna, rich traditional and cultural heritage, and serene amibence make Nagaland one of the most colourful states of India.', '2021-03-22 10:24:24'),
(20, 'East India', '\r\nOrissa', 'The historical state of Orissa is situated amidst beautiful lush green mountains of the Eastern Ghats. This historical land is bounded by the states of Andhra Pradesh, Chhattisgarh, Jharkhand and West Bengal. Orissa is blessed its palm-fringed beaches, shimmering lakes, serpentine rivers, mighty waterfalls, forest-clad blue hills of Eastern Ghats, which are home to rich flora and fauna that impress and lure tourists from all over the world. Orissa is famous for its fairs festivals, stone carving, silver filigree, applique work, exquisite handicrafts, and beautiful textiles. Dotted with numerous architecturally celebrated temples, sacred shrines, and historical monuments, Orissa is considered India’s one of the most hidden splendid cultural landscapes.\r\n', '2021-03-22 10:24:24'),
(21, 'North India', 'Punjab', 'Punjab, the land of five rivers and astounding cultural history is located in the north west of India. Popularly referred to as the \"Granary of India\", it is the second largest producer of major agricultural products in the country. Punjab is renowned for its sports and hosiery goods industry. It is one of the most prosperous states of India in terms of infrastructure and per capita income. The charming cities and towns of Punjab are dotted with numerous ancient monuments, gurudwaras, temples, ashrams, serene lakes, sacred shrines, museums, and wildlife sanctuaries, which are home to many rare species of animals and migratory birds.', '2021-03-22 10:24:24'),
(22, 'West India', '\r\nRajasthan\r\n', 'Recognized as the \"Land of Kings\" and having sheer variety of experiences to offer, Rajasthan is the largest state of India located on the northwestern side and is one of India\'s most popular tourist destinations.\r\nSteeped in tales of chivalry and romance, also famous for striking desert landscape, massive forts, mesmerizing lakes and fabulous palaces, Rajasthan represents the quintessential India. Also, the crafts and folk arts originated here are world famous.With the legendary cities of Jaipur, Udaipur, Jaisalmer, and Jodhpur, built by the Rajput warriors, and the artisan communities and indigenous tribal, Rajasthan is a unique combination of royal and tribal India. Rajputs ruled the Land of Royalty for a long time and till today they are regarded in very high esteem.', '2021-03-22 10:24:24'),
(23, 'East India', 'Sikkim', 'A landlocked state of India, Sikkim is nestled in the foothills of the eastern Himalayas and nature has blessed this state with distinctive beauty. A Himalayan wonderland, bestowed with a variety of vegetation and undisturbed valleys, five climatic zones, peaceful environment, hospitable and humble people and a rich cultural heritage - all of it is unmatched and hard to find anywhere else.\r\n', '2021-03-22 10:24:24'),
(24, 'South India', '\r\nTamil Nadu', 'Bounded by the Bay of Bengal on the east, the Indian Ocean to the south and the Arabian Sea on the west, Tamil Nadu depicts the heart of Dravidian culture in India. Along with its glorious past, vibrant culture, rich history, and natural bounty in the form of beaches and clear skies it is also the 11th largest state in India.\r\nIt is the historical home of the famous Chola, Chera, Pallava and Pandya kingdoms which blossomed in ancient and medieval India. Tamil Nadu is renowned for its classical dance form - Bharatanatyam, rich jewel colored silks of Kancheepuram, intricately carved wood, stone pillars, and brass temple lamps. Known as the \'Land of Temples the state harbors 274 of India’s holiest Shiva temples, and 108 are devoted to Vishnu.', '2021-03-22 10:24:24'),
(25, 'East India', 'Tripura', 'Tripura the hidden gem of lndia lies tucked away in the north East corner, bordered by Bangladesh on all three sides, except the East where it shares its borders with Assam and Mizoram. A land of beautiful green mountains and dense forests, criss-crossed by numerous rivers and lakes, Tripura has deep roots in its indigenous culture and is marked by its spirit of harmony.\r\n', '2021-03-22 10:24:24'),
(26, 'North India', 'Uttrakhand', 'Uttarakhand formerly known as Uttaranchal, and often referred to as the Dev Bhumi- the Land of Gods, owing to numerous pilgrimage centres and Hindu temples throughout the state.With soaring Himalayan peaks and steamy lowland jungles, peaceful hill stations and busy cities, revered temples and renowned ashrams - Uttarakhand is an enticingly diverse state. Also boasting of some of India’s best trekking, yoga schools, wildlife-watching and holiday towns all tucked into one little corner of the country.', '2021-03-22 10:24:24'),
(27, 'East India', 'Uttar Pradesh', 'Uttar Pradesh conjures an image of acres and acres wide swaying fields; ancient Hindu temples on the bank of meandering rivers; and towns and cities with narrow alleys where a rich culture inhabits. Home to one of the world’s ancient most cities, and that of the iconic Taj Mahal; the origin place of two most prominent religions as well as of one of the important classical dance forms in India, Uttar Pradesh in North India is an unmissable holiday destination.\r\n', '2021-03-22 10:24:24'),
(28, 'East India.', '\r\nWest Bengal', 'Situated in the eastern region of India, West Bengal is home to beautiful coastal areas, dense vegetation, magnificent Himalayan hills, historical monuments and ancient temples.The terrain of the state is varied, some of the highest mountains are found in the upper part of Darjeeling and the swampiest mangroves in the Sundarbans where the Bengal Tigers roam in the jungles while crocodiles infest the river.The land of West Bengal has intricately woven many civilizations that have left their footprints here. Awash in the memory of that rich history and heritage the state boasts of different ethnicities, cultures, religions.\r\n', '2021-03-22 10:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `exp_book`
--

CREATE TABLE `exp_book` (
  `sno` int(100) NOT NULL,
  `exp_name` varchar(100) NOT NULL,
  `exp_telephone` varchar(100) NOT NULL,
  `exp_city` varchar(100) NOT NULL,
  `exp_state` varchar(100) NOT NULL,
  `exp_pincode` varchar(100) NOT NULL,
  `exp_country` varchar(100) NOT NULL,
  `exp_email` varchar(100) NOT NULL,
  `exp_travelers` varchar(100) NOT NULL,
  `exp_travelType` varchar(100) NOT NULL,
  `exp_budget` varchar(100) NOT NULL,
  `exp_travelFromCity` varchar(100) NOT NULL,
  `exp_travelFromState` varchar(100) NOT NULL,
  `exp_travelFromCountry` varchar(100) NOT NULL,
  `exp_travelFromRegion` varchar(100) NOT NULL,
  `exp_travelPlaceCity` varchar(100) NOT NULL,
  `exp_travelPlaceState` varchar(100) NOT NULL,
  `exp_travelPlaceCountry` varchar(100) NOT NULL,
  `exp_travelPlaceRegion` varchar(100) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `endDate` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `explore_state` varchar(100) NOT NULL,
  `dt` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exp_book`
--

INSERT INTO `exp_book` (`sno`, `exp_name`, `exp_telephone`, `exp_city`, `exp_state`, `exp_pincode`, `exp_country`, `exp_email`, `exp_travelers`, `exp_travelType`, `exp_budget`, `exp_travelFromCity`, `exp_travelFromState`, `exp_travelFromCountry`, `exp_travelFromRegion`, `exp_travelPlaceCity`, `exp_travelPlaceState`, `exp_travelPlaceCountry`, `exp_travelPlaceRegion`, `startDate`, `endDate`, `description`, `explore_state`, `dt`) VALUES
(1, 'Him', '4894', 'dfdfdf', 'dsdsf', '', 'dsfsdf', 'sdfsd@ddf.com', '4', 'sdsdsd', '198', 'dssd', 'sdsd', 'sdsd', 'dsdssd', 'sdsdds', 'sddssd', 'dssds', 'dsdsds', '01/01/2020', '01/11/2025', 'sdsdsdsd', 'Chhattisgarh', '2021-04-18 00:55:54.498697'),
(2, 'Him', '4894', 'dfdfdf', 'dsdsf', '5525', 'dsfsdf', 'sdfsd@ddf.com', '4', 'sdsdsd', '198', 'dssd', 'sdsd', 'sdsd', 'dsdssd', 'sdsdds', 'sddssd', 'dssds', 'dsdsds', '01/01/2020', '01/11/2025', 'sdsdsdsd', 'Chhattisgarh', '2021-04-18 00:56:46.192391'),
(3, 'Him', '4894', 'dfdfdf', 'dsdsf', '5525', 'dsfsdf', 'sdfsd@ddf.com', '4', 'sdsdsd', '198', 'dssd', 'sdsd', 'sdsd', 'dsdssd', 'sdsdds', 'sddssd', 'dssds', 'dsdsds', '01/01/2020', '01/11/2025', 'sdsdsdsd', 'Chhattisgarh', '2021-04-18 00:57:06.274111'),
(4, 'Him', '4894', 'dfdfdf', 'dsdsf', '5525', 'dsfsdf', 'sdfsd@ddf.com', '4', 'sdsdsd', '198', 'dssd', 'sdsd', 'sdsd', 'dsdssd', 'sdsdds', 'sddssd', 'dssds', 'dsdsds', '01/01/2020', '01/11/2025', 'sdsdsdsd', 'Chhattisgarh', '2021-04-18 01:00:18.631886'),
(5, 'fsdff', '4981', 'sdfdsf', 'sdfsd', '15156', 'sdsdsd', 'ssd@dssd.com', '4', 'sdsdsd', '15000', 'sdsd', 'sdsdsd', 'sdffeg', 'dfgfdgfg', 'gfdgfdg', 'dfgdfgfd', 'gdfgfd', 'dgdgd', '10/10/2020', '10/10/2015', 'dfdfdf', 'Jammu and Kashmir', '2021-04-18 01:06:45.527040');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `sno` int(255) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `hotel_desc` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `dt` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`sno`, `hotel`, `hotel_desc`, `location`, `dt`) VALUES
(1, 'Best in Rest', 'It feels like you might be in London when you\'re at Best in Rest, The heavenly air of mussoorie fills the entire hotel and you can feel this. the hotel\'s custom tuk-tuk reminds you that you\'re in Thailand. Rich, warm, toffee tones carry throughout the lobby and lounges; the space offers grand views. \r\n', 'Dehradun', '0000-00-00 00:00:00.000000'),
(2, 'Brooks Villa', 'Though it’s a sleek, modern hotel with impeccable high-tech hardware in its 185 rooms, Brooks Villa address in Uttrakhand still channels the city’s Byzantine charm and mystery. Chalk it up to the gorgeous views from almost every room and lush Turkish textiles, handicrafts (like pierced metal-and-glass similar to those found in the Blue Mosque), and dramatic, oversized framed photos of its most famous sites. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(3, 'Claudia', 'Perfectly located in the heart of Dehradun across the street from the Museum of Civilization, this 40-room boutique inhabits a 19th-century bank building but sheds any trace of colonial pretense. The lobby is a welcome breath of modernity, with limestone walls and a walnut ceiling. The rooms themselves, which take up the building’s top four floors (the rest is rented out as office space), offer loft-like splendor.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(4, 'Country Inn', 'With views of the mussoorie mountains ,in the distance. Country Inn design evokes an 18th-century Charleston home (this one filled with eclectic art, including a collection of wooden sheep). Beautiful rooms in earth tones have Brazilian hardwood floors, antiques such as Chinese bamboo storage trunks and Indian cabinets, and mahogany soaking tubs. Enjoy drinks on the terrace or, head to the Beach Restaurant for Indian and Italian Food.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(5, 'Crew Fort', 'Crew Fort, richly appointed accommodations are the hallmark of the guest experience at Acqualina. Designed to offer a sense of modern luxury with classic furnishings and finishes, each of the 54 guest rooms and 44 suites present oversized floor plans and private terraces. Celebrated Miami designer Isabel Tragash and her team of designers imbued the hotel room design with their unique vision of a South Florida Five Star Resort.\r\n', 'Dehradun', '0000-00-00 00:00:00.000000'),
(6, 'Dayana Palace', '\r\nDayana Palace, a fairy-tale-like castle built during the 19th century, is perched on a peaceful hilltop above Zurich with magnificent views of the city, the lake and the Alps. The city resort mixes tradition with innovation that beautifully merges past and future. It boasts an exquisite setting in which to relax and enjoy. The hotel’s exceptional art collection showcases more than 100 artworks including works from Andy Warhol, Henry Moore and Salvador Dalí.\r\n', 'Dehradun', '0000-00-00 00:00:00.000000'),
(7, 'Dream Land', '\r\nThe Archer is located in north of Dehradun, about 20 minutes from downtown (without traffic). Though it\'s bustling with high-end shops and restaurants, the quiet area offers a reprieve from the crushes of tourists in downtown, hipster-fied Austin. And the guests know that: It draws young couples who want a boutique hotel experience.\r\n', 'Dehradun', '0000-00-00 00:00:00.000000'),
(8, 'Drew\'s Home', '\r\nRooms at this Drew\'s Home, just east of Dehradun, display Pueblo Mission Revival architecture, are decorated with rich woods, and furnished with chaise lounges; those on the ground floor have French doors opening onto patios. The Terrace serves contemporary California cuisine in a poolside setting, while small dishes are the norm at The Bar. The 11,000-square-foot spa was renovated in 2010.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(9, 'Eddi Residency', 'Away from the crowds and nightly live music. Rooms are spacious and understated, most with a single accent wall; but the bathroom is where this hotel shines. Complimentary his-and-hers slippers are embroidered with a mustache or puckered lips, respectively. The robes are Frette, and the oversized shower has a rainshower head and Malin + specialsproducts.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(10, 'Fantasy', 'The rooms are no less ornate—baroque buffs will appreciate the gilded bed frames and mirrors, along with the high ceilings, floor-sweeping curtains, and wall sconces. There’s a pool plunked directly in the lake, embedded neatly like a sapphire, that’s worth dipping into once you’ve had a treatment at the T Spa. At the main restaurant you will get varieties of food.\r\n', 'Dehradun', '0000-00-00 00:00:00.000000'),
(11, 'Galeri', '\r\nFew hotels are as synonymous with their destination as Galeria. In fact, if you don’t end up overnighting in one of this former palace’s tiled guest rooms, it’s almost as though you were never in Dehradun at all. That’s because this opulent, more-is-absolutely-more pocket of palm trees, landscaped gardens and fountains, where sultry lobby spaces and bars are draped in silks and dark velvets.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(12, 'Indra Palace', 'Rising like a great gilded cake from the western shores of Lake Pichola, magnificent Indira Palace is just the spot to wash up after a dusty Dehradun road trip. This particular pleasure palace is a relatively recent arrival, but, like the 18th-century mansions it overlooks, it was built to showcase the craftsmanship of the Rajput era: marble-carved lotus ponds.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(13, 'Laliberte Villa', 'An extended-stay property befitting the glamour of Uttrakhand, the 88 spacious one- and two-bedroom furnished residences, private access townhomes, and penthouse suites are truly luxurious (you\'re in Beverly Hills after all). Residences include gourmet kitchens, fireplaces, and private balconies—some of which boast views of the Hollywood sign.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(14, 'Lattouf', '\r\nThere\'s nothing staid or traditional about LATTOUF, a boutique hotel with stylish decor not found anywhere else in India. Even check-in strays from the norm: Settle in to a teal velvet chair as you\'re welcomed into this seductive, appealing home-away-from-home. Rooms are also very seductive.\r\n', 'Dehradun', '0000-00-00 00:00:00.000000'),
(15, 'Maldives', '\r\nOpened in November 2018, the Foundry Hotel helped cement Asheville, Dehradun as a bona-fide travel destination. Modern and hip but still grounded in the town’s history.The lobby bar is perfect for a pre-dinner cocktail, and the restaurant, Benne on Eagle, is led by Kulkarni\'s.\r\n', 'Dehradun', '0000-00-00 00:00:00.000000'),
(16, 'Planet', 'Relatively new to the natural scene—it opened in early 2019—Planet has already made quite the impression on travelers. The downtown hotel has 229 pet-friendly rooms, with 12 to 14-foot ceilings and rainfall showers in the bathrooms. But perhaps the best reason to book a stay here is to take advantage.the in-house restaurant focused on Northern Italian cuisine and specializing in small plates, freshly made pasta, and oven-fired pizzas using locally sourced ingredients.\r\n', 'Dehradun', '0000-00-00 00:00:00.000000'),
(17, 'Reno', 'Formerly known as the Madison Hotel, this downtown Memphis space was reopened in 2018 under Aparium Hotel Group, undergoing a major rebranding and renovation in the process.Windows restaurant, followed by a guided whiskey tasting—there are more than 50 kinds offered.Reno\r\nis very famous for it\'s guest services.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(18, 'Sweet Home', 'Artwork isn’t just a design flourish here—it’s the main objective of the hotel itself. If that\'s not enough.Forget a tired valet pull-through: At this boutique hotel in Denver’s thriving Cultural District.Rooms are minimal and sleek, but have pops of artwork on the walls, lest you forget where you are for a moment. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(19, 'The Bellevue', 'When The Belleve was opened in 2013, it quickly became one of the hottest places to stay in the city. The tony space offers a truly intimate feel—there are just 49 rooms and suites and six townhouses—that\'ll make you feel as though you\'re staying at the well-appointed home of a friend. You’re greeted by a personal assistant in the wood- and marble-clad lobby before being escorted to a spacious, elegant room. ', 'Dehradun', '0000-00-00 00:00:00.000000'),
(20, 'The Bhavan', 'Each room have hints of Art Deco influence, and lots of luxurious little touches: complimentary non-alcoholic beverages in the minibar, freshly cut flowers.the interior is pure, intimate hospitality. Instead of a flashy, bustling lobby, the concierge desk sits in a space surrounded by high, gray walls painted with flowers.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(21, 'The Colombian', 'Every hotel prizes its design, but The Colombian hostel space in collaboration with Kapoor and Sons takes the category to a new level. Have a drink under soaring ceilings in the 1930s tiled bar as you sit in Craftsman-inspired furniture, or take dinner in the restaurant. The architecture blends Federal and Empire styles; the ornate lobby features dramatic marble columns.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(22, 'The Palace', '\r\nGuests may be surprised to hear that this exquisitely restored 1835 palace in Dehradun, with all its courtyards and pageantry, wasn’t built for a queen—but rather, for the queen’s favorite handmaiden. Later on, it was used as a royal guesthouse and hunting lodge, though it’s since comfortably taken its place as one of Dehradun’s most luxurious hotels. Enjoy an evening of Champagne, moonlight, and candles in a private dining tent illuminated by flaming torches and pitched on the palace greens.', 'Dehradun', '0000-00-00 00:00:00.000000'),
(23, 'The Vizard', '\r\nThe Vizard is situated right in the heart of the capital city.  \r\nWith only seven guest rooms per floor, the hotel has a distinctly residential feel, and the rooms themselves are spacious, but still intimate.You can expect colorful, modern decor in all 168 guest rooms—especially in the Extreme Wow Suite, which includes a king-size bed with floral canopy, an avant-garde (and purple!) circular sofa, and 180-degree views of the city\'s skyline. Grab brunch or dinner at the Martin Kitchen before kicking back with a drink and live music.\r\n', 'Dehradun', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_book`
--

CREATE TABLE `hotel_book` (
  `sno` int(100) NOT NULL,
  `hot_pincode` varchar(100) NOT NULL,
  `hot_ch_in` date NOT NULL,
  `hot_ch_out` date NOT NULL,
  `hot_num_room` varchar(100) NOT NULL,
  `hot_num_adult` varchar(100) NOT NULL,
  `hot_num_child` varchar(100) NOT NULL,
  `hot_email` varchar(100) NOT NULL,
  `hot_num` varchar(100) NOT NULL,
  `hot_name` varchar(100) NOT NULL,
  `hotelname` varchar(100) NOT NULL,
  `dt` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_book`
--

INSERT INTO `hotel_book` (`sno`, `hot_pincode`, `hot_ch_in`, `hot_ch_out`, `hot_num_room`, `hot_num_adult`, `hot_num_child`, `hot_email`, `hot_num`, `hot_name`, `hotelname`, `dt`) VALUES
(1, '1515', '2021-03-31', '2021-04-07', '2', '2', '1', 'hh@dd.com', '891891', 'Him', 'Indra Palace', '2021-04-18 00:24:16.369271'),
(2, '1515', '2021-04-14', '2021-04-14', '1', '3', '1', 'himanshugulati138@gmail.com', '7015948964', 'Himanshu Gulati', 'Brooks Villa', '2021-04-18 00:40:33.105502'),
(3, '1515', '2021-03-30', '2021-04-08', '2', '2', '1', 'hhdddd@dd.com', '891891', 'Him', 'Dayana Palace', '2021-04-18 00:42:33.646831'),
(4, '134003', '2021-04-21', '2021-04-29', '2', '3', '2', 'dfdf@ss.cm', '156156165', 'Himanshu', 'Brooks Villa', '2021-04-18 23:14:28.103589'),
(5, '511', '2021-04-22', '2021-04-15', '2', '3', '2', 'himanshugulati@outlook.in', '701594864', 'Himanshu Gulati', 'Brooks Villa', '2021-04-19 01:03:04.515529');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `sno` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `review_desc` varchar(100) NOT NULL,
  `dt` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`sno`, `full_name`, `email`, `category`, `review_desc`, `dt`) VALUES
(1, 'Ajay Kumar', 'no@no.com', 'tourzilla', 'Good experience thumbs up!!!!, kindly approve our madhubhan restro in your site.', '0000-00-00 00:00:00.000000'),
(2, 'Shubham Kumar', 'no@no.com', 'tourzilla', 'made my day', '0000-00-00 00:00:00.000000'),
(3, 'Deepika Pandey', 'no@no.com', 'tourzilla', 'plzz add my chulbuli\'s cafe in your website, I will soon get GST number. ', '0000-00-00 00:00:00.000000'),
(4, 'Simran', 'no@no.com', 'tourzilla', 'zomato must take inspiration, good services provided by u guys keep it up.', '0000-00-00 00:00:00.000000'),
(5, 'Rupanjali Sharma', 'no@no.com', 'tourzilla', 'We only charge for after sale services, give us a chance..........\r\nTeam Codex', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `travel_book`
--

CREATE TABLE `travel_book` (
  `sno` int(100) NOT NULL,
  `exp_name` varchar(100) NOT NULL,
  `exp_telephone` varchar(100) NOT NULL,
  `exp_city` varchar(100) NOT NULL,
  `exp_state` varchar(100) NOT NULL,
  `exp_pin` varchar(100) NOT NULL,
  `exp_country` varchar(100) NOT NULL,
  `exp_email` varchar(100) NOT NULL,
  `exp_travelers` varchar(100) NOT NULL,
  `exp_travelType` varchar(100) NOT NULL,
  `exp_budget` varchar(100) NOT NULL,
  `exp_travelFromCity` varchar(100) NOT NULL,
  `exp_travelFromState` varchar(100) NOT NULL,
  `exp_travelFromCountry` varchar(100) NOT NULL,
  `exp_travelFromRegion` varchar(100) NOT NULL,
  `exp_travelPlaceCity` varchar(100) NOT NULL,
  `exp_travelPlaceState` varchar(100) NOT NULL,
  `exp_travelPlaceCountry` varchar(100) NOT NULL,
  `exp_travelPlaceRegion` varchar(100) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `endDate` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `dt` datetime(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `sno` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `timestamp` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`sno`, `full_name`, `email_id`, `mob_no`, `password`, `timestamp`) VALUES
(1, 'Himanshu Gulati', 'himanshugulati138@gmail.com', '7015948964', 'Him@123', '2021-04-17 18:41:46.014129'),
(2, 'Himanshu Gulati', 'himanshugulati@outlook.in', '701594864', 'Him@123', '2021-04-18 23:35:06.905040');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`),
  ADD UNIQUE KEY `blog_id_2` (`blog_id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `blogs_thread`
--
ALTER TABLE `blogs_thread`
  ADD PRIMARY KEY (`blogs_id`),
  ADD KEY `blogs_title` (`blogs_title`),
  ADD KEY `blogs_desc` (`blogs_desc`(768));

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `dinein_book`
--
ALTER TABLE `dinein_book`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `dine_in`
--
ALTER TABLE `dine_in`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `explore`
--
ALTER TABLE `explore`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `exp_book`
--
ALTER TABLE `exp_book`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hotel_book`
--
ALTER TABLE `hotel_book`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `travel_book`
--
ALTER TABLE `travel_book`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blogs_thread`
--
ALTER TABLE `blogs_thread`
  MODIFY `blogs_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dinein_book`
--
ALTER TABLE `dinein_book`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dine_in`
--
ALTER TABLE `dine_in`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `explore`
--
ALTER TABLE `explore`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `exp_book`
--
ALTER TABLE `exp_book`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hotel_book`
--
ALTER TABLE `hotel_book`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travel_book`
--
ALTER TABLE `travel_book`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
