-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 02:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emoviesz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cpassword` varchar(250) NOT NULL,
  `token` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email_id`, `password`, `cpassword`, `token`, `status`) VALUES
(1, 'shahzaib', 'kshahzaib046@gmail.com', '$2y$10$6iGdXnndP6nf9gWciPUivu8LuotKpZPxtJnIj2DRccsHchE46I.6u', '$2y$10$Qg1CnY7btUiO0nksEV/S4urC/y4l8xRwH3awv8PWglae.v8MM1zPW', '14d96269ccf4c3b56fbb9a21d6fa0f', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `Add_Date` varchar(400) DEFAULT NULL,
  `Views` varchar(400) DEFAULT NULL,
  `Download_Rate` varchar(400) DEFAULT NULL,
  `Categories1` varchar(400) DEFAULT NULL,
  `Categories2` varchar(400) DEFAULT NULL,
  `CateFetch` varchar(400) DEFAULT NULL,
  `DBGNISO` varchar(400) DEFAULT NULL,
  `Description` longtext,
  `Poster` varchar(2000) DEFAULT NULL,
  `Downfolder` varchar(12000) DEFAULT NULL,
  `filename` varchar(12000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `Add_Date`, `Views`, `Download_Rate`, `Categories1`, `Categories2`, `CateFetch`, `DBGNISO`, `Description`, `Poster`, `Downfolder`, `filename`) VALUES
(1, 'Just Cause 4: Gold Edition', 'Dec 09, 2018', '5508', '2761', 'Action,', 'Adventure,', 'Action', 'JustCause4GoldEdition.2018.ISO', 'Rogue agent Rico Rodriguez journeys to Solis, a huge South American world home of conflict, oppression and extreme weather conditions. Strap into your wingsuit, equip your fully customizable grappling hook, and get ready to bring the thunder!', 'g1.jpg', 'Alluploadfolder/gamedownfolder/g1.rar', 'g1.rar'),
(2, 'FIFA 19', 'Dec 08, 2018', '5989', '4072', 'Sports,', '', 'Sports', 'FIFA19.2018.ISO', 'Following a recap of the events of the previous journey, the game starts out with both Alex Hunter, his half-sister Kim and Danny Williams watching a video of Hunter\'s grandfather, Jim Hunter, scoring his 100th career goal for his club in a First Division match at Coventry City.', 'g2.png', 'Alluploadfolder/gamedownfolder/g2.rar', 'g2.rar'),
(3, 'The Walking Dead: A New Frontier - Episode 4', 'Jun 12, 2017', '3032', '914', 'Adventure,', '', 'Adventure', 'TheWalkingDead: A New Frontier -Episode4.2017.iso', '	Certain decisions made by the player during both this game and the preceding Season One, and Season Two alter specific details. Therefore, this is only a broad overview of the plot.\r\nJavier is living with his family in Baltimore, including his brother, David and his wife, Kate, and children, Gabe and Mariana, at the onset of the walker epidemic. When their father dies and turns, biting their mother, David takes her to the hospital, but doesn\'t return. After several months, Javier and Kate agree it is time to move on and set off with Gabe and Mariana on the road.', 'g3.png', 'Alluploadfolder/gamedownfolder/g3.rar', 'g3.rar'),
(4, 'Tomb Raider', 'Jun 29, 2018', '14276', '6404', 'Action,', 'Adventure,', 'Action', 'TombRaider.2013.iso', '	Lara set out on her first expedition aboard the ship Endurance, with the intention of finding the lost kingdom of Yamatai. By her suggestion and against Whitman\'s advice, the expedition ventures into the Dragon\'s Triangle. The ship is struck by a violent storm and sinks, stranding the survivors on the isolated island. Lara is separated from the others, and is forced to escape the cave of a deranged savage. As Lara locates the other survivors, she finds more evidence that the island is inhabited. She finds her friend Sam and a man called Mathias, who claims to be one of the passengers.', 'g4.jpg', 'Alluploadfolder/gamedownfolder/g4.rar', 'g4.rar'),
(5, 'Assassins Creed', 'Jan 13, 2016', '7059', '4903', 'Action,', 'Adventure,', 'Adventure', 'AssassinsCreed.2007.iso', '	Assassin\'s Creed is a franchise centered on an action-adventure video game series developed by Ubisoft. It depicts a centuries-old struggle pitting the Assassins, who fight for peace and free will, against the Templars, who believe peace comes through control of humanity.', 'g5.jpg', 'Alluploadfolder/gamedownfolder/g5.rar', 'g5.rar'),
(6, 'Final Fantasy XV', 'Dec 06, 2018', '2444', '1019', 'Action,', 'Role Playing,', 'Action', 'FinalFantasyXV.2016.iso', 'Noctis and his three friends begin their journey to Altissia, the capital of Accordo, where Noctis\'s wedding to Lunafreya will take place. Finding the local boat services stopped, they receive news of Niflheim\'s attack on the city of Insomnia and theft of the Crystal; the Lucian King Regis has been assassinated, and both Noctis and Lunafreya are declared dead.', 'g6.jpg', 'Alluploadfolder/gamedownfolder/g6.rar', 'g6.rar'),
(7, 'Mafia III', 'Nov 18, 2018', '16132', '9043', 'Action,', 'Adventure,', 'Action', 'MafiaIII.2016.iso', '	Mafia III is set in the year 1968, and revolves around Lincoln Clay, a mixed-race African American orphan raised by New Bordeaux\'s \"black mob\".[8] After serving in the Vietnam War in the 5th Special Forces Group (United States) and in the 223rd Infantry Regiment (United States) , he returns to New Bordeaux and reunites with his surrogate father Sammy Robinson and his adopted brother Ellis. Planning to head out west to California, Lincoln then learns of an ongoing turf war between Sammy\'s gang and the Haitian Mob that has put him in serious debt with Sal Marcano, the Don of the Marcano crime family (loosely inspired by the real-life Carlos Marcello and the New Orleans crime family) who then tracks down the Haitian Mob to a shanty town and kills its leader, Baka. Lincoln then meets with Sal, who insinuates that Sammy is too weak to lead and suggests Lincoln take his place. However, Lincoln..', 'g7.png', 'Alluploadfolder/gamedownfolder/g7.rar', 'g7.rar'),
(8, 'Fortnite', 'Jul 18, 2018', '17428', '9431', 'Action,', 'Adventure,', 'Action', 'Fortnite.2017.zip', 'Fortnite Battle Royale is the completely free 100-player PvP mode in Fortnite. One giant map. A battle bus. Fortnite building skills and destructible environments combined with intense PvP combat. The last one standing wins. Download now for FREE and jump into the action.', 'g8.jpg', 'Alluploadfolder/gamedownfolder/g8.rar', 'g8.rar'),
(9, 'Counter Strike: Global Offensive', 'Jul 30, 2018', '27691', '19697', 'Counter Strike,', 'Shooter,', 'Counter Strike', 'CounterStrike: GlobalOffensive.2018.iso', '	Counter-Strike: Global Offensive is a multiplayer first-person shooter video game developed by Hidden Path Entertainment and Valve Corporation. It is the fourth game in the main Counter-Strike franchise.', 'g9.jpg', 'Alluploadfolder/gamedownfolder/g9.rar', 'g9.rar'),
(10, 'Splinter Cell: Chaos Theory', 'Feb 09, 2016', '123', '1749', 'Action,', '', 'Action', 'SplinterCell:ChaosTheory.iso', 'Proving you can\'t keep a good agent down, Sam Fisher returns for this third undercover outing, which takes him deep inside North Korea on an information warfare mission.', 'g10.jpg', 'Alluploadfolder/gamedownfolder/', 'g10.rar'),
(11, 'Assassins Creed Origins: The Curse of the Pharaohs', 'Oct 14, 2018', '3917', '1539', 'Action,', 'Adventure,', 'Adventure', 'AssassinsCreed Origins: The CurseofthePharaohs.2018.iso', '	The most mysterious secrets of Ancient Egypt will be released in The Curse Of the Pharaohs extension, included in the Assassin\'s Creed Origins Season Pass.', 'g11.jpg', 'Alluploadfolder/gamedownfolder/', 'g11.rar'),
(12, 'Sniper Elite 4', 'Jun 25, 2017', '123', '6152', 'Action,', 'Shooter,', 'Shooter', 'SniperElite4.2017.iso', '	Discover the freedom of sniping in the most advanced shooter of all time, which takes place during the Second World War. You are waiting for tactical battles with a third-person view, choice of gameplay and incredible long shots in the campaign for the liberation of Italy from the yoke of fascism. The action of the game Sniper Elite 4 takes place after the events of its successful previous part. Players will be transported to the beautiful Apennine peninsula, from sun-drenched cities on the Mediterranean coast to ancient forests, mountain valleys and the colossal megaconstructions of the Nazis. Agent undercover and elite sniper Carl Fairbairn must fight side by side with brave men and women of Italian resistance. Their goal is to defeat the terrible new threat that could hinder the forthcoming offensive of the Allies in Europe.', 'g12.jpg', 'Alluploadfolder/gamedownfolder/', 'g12.rar');

-- --------------------------------------------------------

--
-- Table structure for table `islamic`
--

CREATE TABLE `islamic` (
  `id` int(11) NOT NULL,
  `name` varchar(4000) DEFAULT NULL,
  `Add_Date` varchar(4000) DEFAULT NULL,
  `Naat_Bayan` varchar(4000) DEFAULT NULL,
  `Views_Rate` varchar(4000) DEFAULT NULL,
  `Down_Rate` varchar(4000) DEFAULT NULL,
  `Total_Tracks` varchar(4000) DEFAULT NULL,
  `VD_rate` varchar(4000) DEFAULT NULL,
  `Keywords` varchar(4000) DEFAULT NULL,
  `Categories` varchar(4000) DEFAULT NULL,
  `Description` longtext,
  `Poster` varchar(4000) DEFAULT NULL,
  `Down_folder` varchar(12000) DEFAULT NULL,
  `filename` varchar(12000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `islamic`
--

INSERT INTO `islamic` (`id`, `name`, `Add_Date`, `Naat_Bayan`, `Views_Rate`, `Down_Rate`, `Total_Tracks`, `VD_rate`, `Keywords`, `Categories`, `Description`, `Poster`, `Down_folder`, `filename`) VALUES
(1, 'Farhan Ali Qadri', '	Jul 21, 2020', 'Aagaye Sarkar', '665', '1154', '11', '662 / 1.2 k', 'Farhan Ali Qadri', 'Shareef', '	Farhan Ali Qadri is the young naat khawan of the time. He started naat khawani in very early age of just eleven years. This 11 year old grabbed the hearts of people and ruled over since now. Love of the Prophet Mohammad SAW is uttered in his sweet voice beautifully', 'is8.jpg', 'Alluploadfolder/islamicdownfolder/Aagaye.Sarkar.mp3', 'Aagaye.Sarkar.mp3'),
(2, 'Hafiz Tahir Qadri', 'Nov.30.2020', 'Milad Rahy Ga', '678', '134', '1', '12,4k', 'Hafiz Tahir Qadri', 'Shareef', 'Hafiz Tahir Qadri is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is1.jpg', 'Alluploadfolder/islamicdownfolder/Milad Rahy Ga - Rabi ul Awal Naat 2020 Hafiz Tahir Qadri.mp3', 'Milad Rahy Ga - Rabi ul Awal Naat 2020 Hafiz Tahir Qadri.mp3'),
(3, 'Hafiz Nisar Ahmed Marfani', 'Nov 30, 2020', 'Muhammad Sa Nahi Koi ', '123', '85', '1', '123', 'Hafiz Nisar Ahmed Marfani', 'Shareef', 'Hafiz Nisar Ahmed Marfani is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is12.jpg', 'Alluploadfolder/islamicdownfolder/Muhammad Sa Nahi Koi - Hafiz Dr Nisar Ahmed Marfani - New Naat 2017.mp3', 'Muhammad Sa Nahi Koi - Hafiz Dr Nisar Ahmed Marfani - New Naat 2017.mp3'),
(4, 'Muhammad Ali Soharwardi', 'Nov.30.2020', 'Sarkaar bulaye qadmo me', '45', '76', '1', '18,4k', 'Muhammad Ali Soharwardi', 'Shareef', ' Muhammad Ali Soharwardi is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is11.jpg', 'Alluploadfolder/islamicdownfolder/Sarkaar bulaye qadmo me.mp3', 'Sarkaar bulaye qadmo me.mp3'),
(5, 'Imran Sheikh Qadri Attari', 'Nov.30.2020', 'Meri tauba meri tauba', '67', '98', '1', '15,3k', 'Imran Sheikh Qadri Attari', 'Shareef', 'Imran Sheikh Qadri Attari  is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is6.jpg', 'Alluploadfolder/islamicdownfolder/Meri tauba meri tauba.mp3', 'Meri tauba meri tauba.mp3'),
(6, 'Hafiz Ahmed Raza Qadri', 'Nov.30.2020', 'Chote Na Kabhi Tera Daman', '665', '520', '1', '22,4k', 'Hafiz Ahmed Raza Qadri', 'Shareef', 'Hafiz Ahmed Raza Qadri  is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is3.jpg', 'Alluploadfolder/islamicdownfolder/Chote Na Kabhi Tera Daman MP3 Naat by Hafiz Ahmed Raza Qadri - NaatSharif.com.mp3', 'Chote Na Kabhi Tera Daman MP3 Naat by Hafiz Ahmed Raza Qadri - NaatSharif.com.mp3'),
(7, 'Bilal Qadr', 'Nov.30.2020', 'Ya Nabi dekha ye rutba', '61', '4', '1', '17,2k', 'Bilal Qadr', 'Bayaan', 'Bilal Qadr is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is4.jpg', 'Alluploadfolder/islamicdownfolder/Ya Nabi dekha ye rutba.mp3', 'Ya Nabi dekha ye rutba.mp3'),
(8, 'Syed Furqan Qadri', 'Nov.30.2020', 'Kab gunaaho se kinara mai karu ga ya Rab', '66', '7', '1', '19,2k', 'Syed Furqan Qadri', 'Shareef', 'Syed Furqan Qadri is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is9.jpg', 'Alluploadfolder/islamicdownfolder/kab-gunahoon.mp3', 'kab-gunahoon.mp3'),
(9, 'Mahmood ul Hassan', 'Nov.30.2020', 'Mola Ya Sali Wa Salim', '65', '98', '1', '16,4k', 'Mahmood ul Hassan', 'Shareef', 'Mahmood ul Hassan is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is7.jpg', 'Alluploadfolder/islamicdownfolder/Mola Ya Sali Wa Salim By Mahmood ul Hassan.mp3', 'Mola Ya Sali Wa Salim By Mahmood ul Hassan.mp3'),
(10, 'Muhammad Rizwan Qadri ', 'Nov.30.2020', 'Zamana Noor Hai ', '47', '95', '1', '87,4k', 'Muhammad Rizwan Qadri ', 'Bayaan', ' Muhammad Rizwan Qadri is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is5.jpg', 'Alluploadfolder/islamicdownfolder/Muhammad Rizwan Qadri _ Zamana Noor Hai _ Rabi Ul Awwal Naat _ Meelad Kalam _ Rabi Un Noor Naat.mp3', 'Muhammad Rizwan Qadri _ Zamana Noor Hai _ Rabi Ul Awwal Naat _ Meelad Kalam _ Rabi Un Noor Naat.mp3'),
(11, 'Ghulam Mustafa Qadri', 'Nov.30.2020', 'Woh suay lalaazar firte hai', 'ggggg', '7', '1', 'ggggg', 'Ghulam Mustafa Qadri', 'Shareef', 'Hafiz Ghulam Mustafa Qadri is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is10.jpg', 'Alluploadfolder/islamicdownfolder/Woh suay lalaazar firte hai.mp3', 'Woh suay lalaazar firte hai.mp3'),
(12, 'Owais Qadri', 'Nov.30.2020', 'Al Nabi Sallu Aleh', '123', '123', '1', '123', 'Owais Qadri', 'Shareef', 'Owais Qadri  is one the famous Naat khwans of Pakistan. He got marvelous accent which attracts his fans. He is a living legend and an asset for Islamic World & our Homeland; He is the symbol of pride for the Nation & Islamic Ummah. The service for the promotion of Hamd & Naat Khuwani he has rendered is the reflection of his love & dedication with the Prophet of Peace Hazrat Mu', 'is2.jpg', 'Alluploadfolder/islamicdownfolder/Al Nabi Sallu Aleh.mp3', 'Al Nabi Sallu Aleh.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `mobiapp`
--

CREATE TABLE `mobiapp` (
  `id` int(11) NOT NULL,
  `APkName` varchar(400) DEFAULT NULL,
  `Views` varchar(400) DEFAULT NULL,
  `Download_Rate` varchar(400) DEFAULT NULL,
  `Add_Date` varchar(400) DEFAULT NULL,
  `Description` longtext,
  `Poster` varchar(4000) DEFAULT NULL,
  `Icon` varchar(4000) DEFAULT NULL,
  `Downfolder` varchar(12000) DEFAULT NULL,
  `filename` varchar(12000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiapp`
--

INSERT INTO `mobiapp` (`id`, `APkName`, `Views`, `Download_Rate`, `Add_Date`, `Description`, `Poster`, `Icon`, `Downfolder`, `filename`) VALUES
(1, 'Viber Messenger', '84', '43', 'Dec.2.2020', 'Viber allows you to call your loved ones without any penny. For this you just need an internet connection. You can send your pictures to your friends and family members. Moreover you can privately text or send voice message like in whatsapp', 'Viber Messanger.jpg', '0B68EAC0.png', 'Alluploadfolder/mobifolder/Viber Messanger.rar', 'Viber Messanger.rar'),
(2, '	 Brave Private Browser', '77', '520', 'Dec.2.2020', 'Privately browse the internet, for free! The Brave Private Browser App is your fast, free, and safe private web browser with ad blocker and pop-up blocker. Privately browse and search the internet without being tracked by advertisers, malware and pop-ups', 'Brave Private Browser.jpg', '02D12986.png', 'Alluploadfolder/mobifolder/Brave Private Browser.rar', 'Brave Private Browser.rar'),
(3, 'Emoji Keyboard', '35', '87', 'Dec.2.2020', 'Once you have Emoji Keyboard installed and set up, you can start using its more than 800 emoji in any text field. In addition to the normal icons, you\'ll also find hundreds of smileys that can be pasted into a text field by simply clicking on them.', 'Emoji Keyboard.jpg', '3FF3A454.png', 'Alluploadfolder/mobifolder/Emoji Keyboard.rar', 'Emoji Keyboard.rar'),
(4, 'CM Browser', '62', '9', 'Dec.2.2020', 'CM Browser is a powerful Internet browser that was developed by KS Mobile, the company behind important security apps like CM Security and Clean Master. Because of this, security is only one of our main strong points', 'CM Browser.jpg', '4D5F75D0.png', 'Alluploadfolder/mobifolder/CM Browser.rar', 'CM Browser.rar'),
(5, 'ES File Explorer', '18', '87', 'Dec.2.2020', 'ES File Explorer is a great tool for managing files and programs. It comes with a multitude of additional features such as a tool for killing running applications, direct cloud drive storage (via Dropbox, Google Drive, or Skydrive), and an FTP client so you can use it both on your mobile device as well as your PC.', 'ES File Explorer.jpg', '5E9A6AB1.png', 'Alluploadfolder/mobifolder/ES File Explorer.rar', 'ES File Explorer.rar'),
(6, 'Amazon', '45', '98', 'Dec.2.2020', 'The seven deadly sins (pride, greed, lust, envy, gluttony, wrath and sloth) are more than present in our daily lives. For example, smartphones have become a must-have tool for ordering food when gluttony strikes, or to watch movies and shows on the couch when your feeling lazy. We also use our phones when we want to give in to lust or to appear to make our lives look better than they are, and boost our pride. For that reason, we\'ve made a list of a few apps that make it easier for us to act on these cardinal vices using our smartphones.', 'Amazon.jpg', '927ECC92.png', 'Alluploadfolder/mobifolder/Amazon.rar', 'Amazon.rar'),
(7, '	 VidMate - HD video downloader', '33', '56', 'Dec.2.2020', 'Vidmate is one of the best apps you can use to download videos and songs from popular online services such as Vimeo, Dailymotion, YouTube, Instagram, FunnyorDie, Sex Video, Vine, Tumblr, Soundcloud, Metacafe, and many other multimedia portals. You can download videos from practically any video platform with Vidmate', 'Vidmate.jpg', '2510D3EE.png', 'Alluploadfolder/mobifolder/Vidmate.rar', 'Vidmate.rar'),
(8, 'KineMaster ', '24', '98', 'Dec.2.2020', 'KineMaster is a video-editing tool that combines a well-designed interface with a great user experience and a wide range of potent features so you can create the videos you want exactly how you want them', 'KineMaster.jpg', '7782C95A.png', 'Alluploadfolder/mobifolder/KineMaster.rar', 'KineMaster.rar'),
(9, 'Screen Recorder', '76', '99', 'Dec.2.2020', 'Screen Recorder is a tool that will let you record your Android device screen in a simple and effective way. With the tap of a button you can create a video clip with no quality loss thanks to which you can save any content or action that\'s appearing onscreen.', 'Screen Recorder.jpg', 'A6D8CBDB.png', 'Alluploadfolder/mobifolder/Screen Recorder.rar', 'Screen Recorder.rar'),
(10, 'SHAREit', '22', '66', 'Dec.2.2020', ' SHAREit - Connect and Transfer you easily send files between two devices, regardless of the OS they run. That means your files send from your Android to an iPhone, iPad, and even onto a Windows PC. Otherwise, create groups of users so you can transfer any file to several people at once.', 'SHAREit.jpg', 'D70903E5.png', 'Alluploadfolder/mobifolder/SHAREit.rar', 'SHAREit.rar'),
(11, 'BeautyPlus - Magical Camera ', '55', '77', 'Dec.2.2020', 'The most subtle mods that you can make using BeautyPlus - Magical Camera allow you to smooth out your complexion, make your eyes bigger, brighten your face, make your face contour narrower, and in general make the person appearing in the photo more attractive. All of this can be done with small, almost imperceptible retouches that you can apply with the tap of a finger', 'BeautyPlus - Magical Camera.jpg', 'A9FB7DA8.png', 'Alluploadfolder/mobifolder/BeautyPlus - Magical Camera.rar', 'BeautyPlus - Magical Camera.rar'),
(12, 'Adobe Photoshop Lightroom', '84', '88', 'Dec.2.2020', 'Adobe Lightroom for Android mobile devices is an official app that lets you organize your pictures, synchronize them with other devices, and work with raw files from DSLR camera', 'Adobe Photoshop Lightroom.jpg', 'BE34FF7C.png', 'Alluploadfolder/mobifolder/Adobe Photoshop Lightroom.rar', 'Adobe Photoshop Lightroom.rar'),
(13, 'Zapya', '88', '55', 'Dec.2.2020', 'The Zapya interface is simple and intuitive. It lets you send files in seconds. There are different screens for different types of files: one for images, one for videos, one for music, and one for apps. Just click on the file you want to send and choose the appropriate option.', 'Zapya.jpg', 'C314DE5B.png', 'Alluploadfolder/mobifolder/Zapya.rar', 'Zapya.rar'),
(14, 'Snapchat', '98', '56', 'Dec.2.2020', 'Snapchat is an app that keeps you in touch with friends and family thanks to its interactive multimedia messaging system. Share your favorite events live or record them as video messages that automatically disappear without leaving a trace after a few seconds.', 'Snapchat.jpg', 'C8032188.png', 'Alluploadfolder/mobifolder/Snapchat.rar', 'Snapchat.rar'),
(15, 'Facebook', '333', '87', 'Dec.2.2020', 'Facebook is the official Android app for the iconic original social network par excellence. Once again, this app is here to simplify your Facebook experience by providing all your favorite features from one spot.\r\n\r\nEssentially, this Facebook app has all the same features as its original browser version, the only main difference you\'ll notice is that you can\'t play Facebook games on it', 'Facebook.jpg', 'DCD27765.png', 'Alluploadfolder/mobifolder/Facebook.rar', 'Facebook.rar'),
(17, 'Youtube', '765', 'ddd', 'Dec.2.2020', 'Youtube is the official app for the world\'s largest and most popular video platform. It\'s home to millions and millions of videos, with hundreds of thousands of new clips uploaded every day.\r\n\r\nFrom the official app you gain full access to all the featured videos for each day, as well as an easy way to locate videos that deal with topics of your interest. All this comes via a easy-to-use interface that\'s perfectly adapted to smartphones, and the added possibility to set up and use gesture shortcuts.', 'Youtube.jpg', 'F5ECF108.png', 'Alluploadfolder/mobifolder/Youtube.rar', 'Youtube.rar'),
(18, 'WhatsApp Messenger ', '235', '123', 'Dec.2.2020', 'WhatsApp Messenger is the most convenient way of quickly sending messages on your mobile phone to any contact or friend on your contacts list. The only requirement is that the other people must have the app installed on their own device.\r\n\r\nCurrently, WhatsApp is compatible with just about all mobile operating systems on the market: Android, iOS, Symbian and Windows Phone. So this basically means you’ll be able to use WhatsApp to communicate with any friend, regardless of what model of device they have.', 'WhatsApp Messenger.jpg', 'F5906E0E.png', 'Alluploadfolder/mobifolder/WhatsApp Messenger.rar', 'WhatsApp Messenger.rar');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `Categories1` varchar(400) DEFAULT NULL,
  `Categories2` varchar(400) DEFAULT NULL,
  `Categories3` varchar(400) DEFAULT NULL,
  `cate_single_preview_heading` varchar(400) DEFAULT NULL,
  `CateMainP` varchar(400) DEFAULT NULL,
  `View` varchar(400) DEFAULT NULL,
  `Add_Date` varchar(250) DEFAULT NULL,
  `Download_Rate` varchar(400) DEFAULT NULL,
  `Keywords` varchar(400) DEFAULT NULL,
  `movie_print_result` varchar(400) DEFAULT NULL,
  `Ratings` varchar(400) DEFAULT NULL,
  `Rated` varchar(400) DEFAULT NULL,
  `Genre` varchar(400) DEFAULT NULL,
  `Released` varchar(400) DEFAULT NULL,
  `Length` varchar(400) DEFAULT NULL,
  `Country` varchar(400) DEFAULT NULL,
  `Language` varchar(400) DEFAULT NULL,
  `DBMNP` varchar(400) DEFAULT NULL,
  `Description` longtext,
  `Actors` longtext,
  `Director` longtext,
  `Writer` longtext,
  `Poster` varchar(3000) DEFAULT NULL,
  `icon` varchar(3000) DEFAULT NULL,
  `Downfolder` varchar(12000) DEFAULT NULL,
  `filename` varchar(12000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `Categories1`, `Categories2`, `Categories3`, `cate_single_preview_heading`, `CateMainP`, `View`, `Add_Date`, `Download_Rate`, `Keywords`, `movie_print_result`, `Ratings`, `Rated`, `Genre`, `Released`, `Length`, `Country`, `Language`, `DBMNP`, `Description`, `Actors`, `Director`, `Writer`, `Poster`, `icon`, `Downfolder`, `filename`) VALUES
(1, '', '', 'Drama', 'Punjabi', 'Punjabi Movies', ' 25329', 'Dec 02, 2019', ' 12878', 'Qismat', 'HDRip', ' 8.5', ' Not Rated', 'Drama, Romance', 'Sep 21, 2018', '137 min', 'India', 'Punjabi', 'Qismat.2018.HDRip.mkv', 'The film follows a man who falls in love whilst studying in Chandigarh, despite his marriage being arranged to another woman.', '	Ammy Virk, Sargun Mehta Dubey, Guggu Gill, Harby Sangha, Mandeep Mani', '	Jagdeep Sidhu', 'Jagdeep Sidhu', 'm1.jpg', 'movies_hd_FE5D83B3.png', 'Alluploadfolder/Moviefolder/Qismat.mp4', 'Qismat.mp4'),
(2, 'Hollywood,', 'Dual Audio,', 'Adventure,', '', 'Adventure', '17295', 'Dec 24, 2018', '8157', 'Monster Hunt 2', 'BRRip', '  5.3 ', ' Not Rated', '	Adventure, Comedy, Sci-Fi', 'Feb 16, 2018', '110 min', 'China', '	English, Hindi', 'MonsterHunter2.2018.BRRip.Dual.mkv', 'The story continues with Wuba after he parts way with his human parents Tian and Lan for his own journey. Peace has not been restored in the monster world after the death of the evil monster king.', '	Tony Chiu-Wai Leung, Baihe Bai, Boran Jing, Yuchun Li, Tony Yo-ning Yang, Sandra Kwan Yue Ng, Eric Tsang', 'Raman Hui', 'Wai Lun Ng, Sunny Chan, Peter Cilella', 'm2.jpg', 'movies_bluray_50FC97C3.png', 'Alluploadfolder/Moviefolder/MONSTER HUNT 2.mp4', 'MONSTER HUNT 2.mp4'),
(3, 'Hollywood,', 'Dual Audio,', 'Action,', '', 'Hollywood', '107742', 'Nov 22, 2018', '68657', 'Mission: Impossible - Fallout', 'BRRip', '  7.9 ', ' PG-13', 'Action, Adventure, Thriller', 'Jul 27, 2018', '147 min', 'United States', 'English, Hindi', 'MissionImpossibleFallout.2018.BRRip.Dual.mkv', 'Ethan Hunt and his IMF team, along with some familiar allies, race against time after a mission gone wrong.', '	Tom Cruise, Henry Cavill, Ving Rhames, Simon Pegg, Rebecca Ferguson, Sean Harris, Angela Bassett, Vanessa Kirby, Michelle Monaghan, Wes Bentley, Frederick Schmidt, Alec Baldwin, Liang Yang, Kristoffer Joner, Wolf Blitzer, Raphael Acloque, Andrew Cazanave Pin, Christophe de Choisy, Raphael Desprez, Jean Baptiste Fillon, Max Geller, Olivier Huband, Vincent Latorre, Thierry Picaut, Alexandre Poole, Guy Remy, Alix Bénézech, Joey Ansah, Velibor Topic, Dean Ashton', 'Christopher McQuarrie', 'Christopher McQuarrie, Bruce Geller', 'm3.jpg', 'movies_bluray_5E14FFB4.png', 'Alluploadfolder/Moviefolder/Mission.mp4', 'Mission.mp4'),
(4, 'Hollywood,', '', 'Action,', '', 'Hollywood', '2432', '	Nov 22, 2018', '458', 'The Happytime Murders', 'BRRip', '  5.1', ' R', 'Action, Comedy, Crime, Mystery, Thriller', 'Aug 24, 2018', '91 min', 'United States', 'English', 'TheHappytimeMurders.2018.BRRip.mp4', 'When the puppet cast of a \'90s children\'s TV show begin to get murdered one by one, a disgraced LAPD detective-turned-private eye puppet takes on the case.', '	Melissa McCarthy, Elizabeth Banks, Maya Rudolph, Leslie David Baker, Joel McHale, Cynthy Wu, Michael McDonald, Mitch Silpa, Hemky Madera, Benjamin Cole Royer, Brekkan Spens, Ryan Tran, Fortune Feimster, Brian Palermo, John Damon Jones, Ryan Gaul, Jimmy O. Yang, Dennis Keiffer, Jim Palmer, Michael Croner, Barry Rothbart, Steve Mallory, Jaye Razor, Jen Sung, Bryan Cartago, Brett Wagner, Colleen Smith, Ben Falcone, Bill Barretta, Dorien Davies', 'Brian Henson', 'Todd Berger, Dee Austin Robertson', 'm4.jpg', 'movies_bluray_7235F247.png', 'Alluploadfolder/Moviefolder/THE HAPPYTIME MURDERS.mp4', 'THE HAPPYTIME MURDERS.mp4'),
(5, 'Bollywood,', '', 'Comedy,', '', 'Bollywood', '70525', 'Jan 29, 2019', '42552', 'Badhaai Ho', 'BRRip', '  8.1 ', ' Not Rated', 'Comedy, Drama', 'Oct 19, 2018', '124 min', 'India', 'Hindi', 'BadhaaiHo.2018.BRRip.mp4', 'A man faces embarrassment in the society when he finds out his mother is pregnant', '	Ayushmann Khurrana, Sanya Malhotra, Neena Gupta, Gajraj Rao, Sheeba Chaddha, Surekha Sikri, Rahul Tewari, Vimi Mehta', 'Amit Ravindernath Sharma', 'Akshat Ghildial, Jyoti Kapoor, Shantanu Srivastava', 'm5.jpg', 'movies_bluray_AE21F244.png', 'Alluploadfolder/Moviefolder/Badhaai Ho.mp4', 'Badhaai Ho.mp4'),
(6, 'Hollywood,', 'Dual Audio,', 'Crime,', '', 'Hollywood', '23671', 'Feb 23, 2020', '9687', 'Replica', 'HDRip', '  5.5', ' PG-13', 'Crime, Mystery, Sci-Fi, Thriller', 'Jan 11, 2019', '107 min', 'US, UK', 'English, Hindi', 'Replica.2020.HDRip.Dual.mkv', 'A scientist becomes obsessed with bringing back his family members who died in a traffic accident.', '	Alice Eve, Keanu Reeves, Emily Alyn Lind, Thomas Middleditch, John Ortiz, Emjay Anthony, Nyasha Hatendi, Aria Lyric Leabu, Amber Townsend, Amber Rivera, Sunshine Logroño, Jeffrey Holsman, Omar Cruz Soto, Iván J. Torres Lasanta, Jean Pierre Prats, Evelyn Dean-Olmsted', 'Jeffrey Nachmanoff', '	Chad St. John, Stephen Hamel', 'm6.jpg', 'movies_hd_FDF7F2CA.png', 'Alluploadfolder/Moviefolder/Replicas.mp4', 'Replicas.mp4'),
(7, 'Hollywood,', 'Dual Audio,', 'Action,', '', 'Hollywood', '25252', 'Jul 30, 2019', '8746', 'A-X-L', 'BRRip', '  5.2', ' PG', 'Action, Adventure, Family, Sci-Fi', 'Aug 24, 2018', '98 min', 'United States', 'English, Hindi', 'A-X-L.2018.BRRip.Dual.mkv', 'A.X.L. is a top-secret, robotic dog who develops a special friendship with Miles and will go to any length to protect his new companion.', '	Thomas Jane, Becky G, Ted McGinley, Lou Taylor Pucci, Dominic Rains, Alex Neustaedter, Eric Etebari, Hassie Harrison, Dorian Kingi, Alex MacNicoll, Patricia De Leon, Niko Guardado, Jonathan Camp, Sam Upton, Stacey Arwen Raab, Madeline Bertani, Maggy Vick, Ashley Gibson, Donnie Smith, Dominic Vedder, Chris Verdugo, Jerry DiLeo, Stanton Lee, Marie-Françoise Theodore, Nick Wayne, Alejandro Galang, Andrew Ortenberg', 'Oliver Daly', 'Oliver Daly', 'm7.jpg', 'movies_hd_DF9A5792.png', 'Alluploadfolder/Moviefolder/AXL.mp4', 'AXL.mp4'),
(8, 'Hollywood,', '', 'Action,', '', 'Hollywood', '4172', 'Apr 21, 2019', '1261', 'The Bouncer (Lukas)', 'BRRip', ' 6.1 ', ' 	R', 'Action, Drama, Thriller, Mystery', 'Aug 22, 2018', '94 min', 'United States', 'English', 'TheBouncer.2018.BRRip.Dual.mkv', 'A nightclub bouncer in his fifties who\'s taken punches, literally and figuratively, struggles to raise his 8-year-old daughter.', '	Jean-Claude Van Damme, Sveva Alviti, Sami Bouajila, Sam Louwyck, Kaaris, Kevin Janssens, Alice Verset, Dimitri \'Vegas\' Thivaios, Carlos Schram, Christian Bronchart, Laurent D\'Elia, Catherine Haduca, Cecilia Ngo, Jean-Claude Soetens, Kevin Van Doorslaer, Stijn Vandeput', 'Julien Leclercq', 'Jérémie Guez', 'm8.jpg', 'movies_bluray_207990EB.png', 'Alluploadfolder/Moviefolder/Lukas.mp4', 'Lukas.mp4'),
(9, 'Hollywood,', 'Dual Audio,', 'Action,', '', 'Dual Audio', '21281', 'Dec 25, 2018', '13418', 'Kill Zone 2', 'BRRip', ' 6.8', ' Not Rated', 'Action, Crime, Thriller', 'May 13, 2016', '120 min', 'China', 'English, Hindi', 'KillZone2.2016.BRRip.Dual.mkv', '	While undercover officer Kit is taken prisoner by the syndicate, he befriends his keeper and discovers an organ trafficking ring.', '	Tony Jaa, Jing Wu, Simon Yam, Jin Zhang, Louis Koo, Ken Lo, Jun Kung, Dominic Lam, Babyjohn Choi, Wai Al, Philip Keung, Andrew Ng, Aaron Chow, Alex Mai, Chik-Chi Tsim, Kiki Yeung, Chi Zhang', 'Soi Cheang', 'Lai-Yin Leung, Ying Wong', 'm9.jpg', 'movies_bluray_79FF747C.png', 'Alluploadfolder/Moviefolder/Kill Zone 2.mp4', 'Kill Zone 2.mp4'),
(10, 'Bollywood,', '', 'Action,', 'Tamil,', 'Tamil Movies', '185269', 'Apr 22, 2019', '104770', '2.0', 'BRRip', ' 6.9 ', ' Not Rated', 'Action, Sci-Fi, Thriller', 'Nov 29, 2018', '148 min', 'India', 'Tamil, Hindi', 'Roboto20.2018.HDRip.mkv', 'Dr Vaseegaran (Rajinikanth) and his android assistant Nila (Amy Jackson) are called in for help after mobiles start mysteriously flying out of the hands of people in Chennai. Vaseegaran summons his trusted robot Chitti (Rajinikanth) to ward off the bird-shaped supernatural powers of Pakshirajan (Akshay Kumar).', 'Rajinikanth, Akshay Kumar, Amy Jackson, Adil Hussain, Sudhanshu Pandey, Kalabhavan Shajohn, Ananth Narayan Mahadevan, Mayilsamy, Ishari Ganesh, Kaizaad Kotwal, Bharath Reddy, Maya S. Krishnan, Aishwarya Rai Bachchan', 'S. Shankar', 'Jayamohan, Lakshmi Saravanakumar, S. Shankar, Abbas Tyrewala', 'm10.jpg', 'movies_bluray_7E3AA8EC.png', 'Alluploadfolder/Moviefolder/2.0.mp4', '2.0.mp4'),
(11, 'Bollywood,', 'Dual Audio,', 'Animation,', 'Kids,', 'Kids Movies', '2862', 'Dec 10, 2018', '829', 'The Princess and the Dragon', 'HDRip', '  4.9 ', ' Not Rated', 'Animation, Fantasy', 'Aug 30, 2018', '75 min', 'United States', 'English', 'ThePrincessandtheDragon.2018.HDRip.mkv', 'On her 7th birthday, Princess Barbara discovers a magical book that transports her to Wonderland - an enchanted place filled with dragons and fantastic creatures.', '	Irina Kireeva, Konstantin Kozhevnikov, Ani Lorak, Sergey Smirnov, Diomid Vinogradov', 'Marina Nefedova', 'Vasiliy Rovenskiy', 'm11.jpg', 'movies_hd_43A0A0C9.png', 'Alluploadfolder/Moviefolder/The Princess and the Dragon.mp4', 'The Princess and the Dragon.mp4'),
(12, 'Bollywood,', '', 'Action,', '', 'Bollywood', '27122', 'Dec 09, 2018', '17074', 'Parmanu: The Story of Pokhran', 'BRRip', '  7.9 ', ' Not Rated', 'Action, Drama, History', 'May 25, 2018', '129 min', 'India', 'Hindi', 'ParmanuTheStoryofPokhran.2018.BRRip.mp4', 'A look at India\'s second confidential nuclear test series at Pokhran led by Dr. APJ Abdul Kalam, during the time of PM Atal Bihari Vajpayee\'s tenure.', '	John Abraham, Boman Irani, Diana Penty, Anuja Sathe, Vikas Kumar, Yogendra Tikku, Aditya Hitkari, Ajay Shankar, Darshan Pandya, Mark Bennington, Shyam Bhagat, Zachary Coffin, Satinder Singh Gahlot, Tan Raj Ghale, Rohan Khatri, Munna, Arush Nand, Nitesh Nath, Prahlad, Abhiroy Singh, Bhairao Singh', 'Abhishek Sharma', 'Saiwyn Quadras, Sanyukta Chawla Shaikh, Abhishek Sharma', 'm12.jpg', 'movies_bluray_A9DA8455.png', 'Alluploadfolder/Moviefolder/Parmanu.mp4', 'Parmanu.mp4'),
(13, 'Hollywood,', 'Dual Audio,', 'Animation,', 'Kids,', 'Kids Movies', '18361', 'May 14, 2020', '8969', 'Onward', 'HDRip', ' 7.5 ', ' PG', 'Animation, Adventure, Comedy, Family,', 'Mar 06, 2020', '102 min', 'United States', 'English, Hindi', 'Onward.2020.BRRip.mp4', '	Set in a suburban fantasy world, two teenage elf brothers embark on a quest to discover if there is still magic out there.', 'Tom Holland, Chris Pratt, Julia Louis-Dreyfus, Octavia Spencer, Mel Rodriguez, Kyle Bornheimer, Lena Waithe, Ali Wong, Grey Griffin, Tracey Ullman, Wilmer Valderrama, George Psarras, John Ratzenberger', 'Dan Scanlon', 'Dan Scanlon, Jason Headley, Keith Bunin', '13.jpg', 'movies_hd_D4706BE1.png', 'Alluploadfolder/Moviefolder/Onward.mp4', 'Onward.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `Movie_Name` varchar(4000) DEFAULT NULL,
  `Add_Date` varchar(400) DEFAULT NULL,
  `Views` varchar(400) DEFAULT NULL,
  `Down_Rate` varchar(400) DEFAULT NULL,
  `Total_Track` varchar(400) DEFAULT NULL,
  `Song_name` varchar(400) DEFAULT NULL,
  `V_Drate` varchar(400) DEFAULT NULL,
  `Keywords` varchar(400) DEFAULT NULL,
  `Categories` varchar(400) DEFAULT NULL,
  `Description` longtext,
  `Poster` varchar(4000) DEFAULT NULL,
  `musicfolder` varchar(12000) DEFAULT NULL,
  `filename` varchar(12000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `Movie_Name`, `Add_Date`, `Views`, `Down_Rate`, `Total_Track`, `Song_name`, `V_Drate`, `Keywords`, `Categories`, `Description`, `Poster`, `musicfolder`, `filename`) VALUES
(1, 'Jagga Jasoos', 'Nov.30.2020', ' 368', '33', '1', 'Galti Se Mistake', '12,4k', 'Jagga Jasoos', 'Bollywood-Movies-Songs', 'Join Jagga, a gifted teenage detective, who along with a female companion, is on a quest to find his missing father', 'mu1.jpg', 'Alluploadfolder/Musicfolder/Galti Se Mistake.mp3', 'Galti Se Mistake.mp3'),
(2, 'Jab Harry Met Sejal', 'Nov.30.2020', '84', '36', '1', 'Parinda-Search', '16,1k', 'Jab Harry Met Sejal', 'Bollywood-Movies-Songs', '	The story revolves around Harry and Sejal\'s journey across Europe. A search for Sejal\'s engagement ring makes Harry understand love and relationships better. Sejal experiences new found freedom, security and solace in Harry\'s company and in between all of this - there is love, life, lies, thrill, fantasy and the search for the voice within.', 'mu2.jpg', 'Alluploadfolder/Musicfolder/Parinda-Search.mp3', 'Parinda-Search.mp3'),
(3, 'Thoda Pyaar Thoda Magic', 'Nov.30.2020', ' 33', '39', '1', 'Pyaar.Ke.Liye', '15,9k', 'Thoda Pyaar Thoda Magic', 'Bollywood-Movies-Songs', '	Four reluctant orphans fall under the care of an industrialist who accidentally killed their parents. As the dejected children hate him and cause trouble, God sends an angel to help make things righ', 'mu10.jpg', 'Alluploadfolder/Musicfolder/Pyaar.Ke.Liye.mp3', 'Pyaar.Ke.Liye.mp3'),
(4, 'Tiger Zinda Hai', 'Nov.30.2020', ' 54', '7', '1', 'Dil Diyan Gallan', '1,4k', 'Tiger Zinda Hai', 'Bollywood-Movies-Songs', 'Inspired by real events, Tiger Zinda Hai is a sequel to the blockbuster Ek Tha Tiger, and an espionage action thriller that follows an adventurous rescue mission in Iraq.', 'mu6.jpg', 'Alluploadfolder/Musicfolder/Dil.Diyan.Gallan-Unplugged.mp3', 'Dil.Diyan.Gallan-Unplugged.mp3'),
(5, 'Awarapan', 'Nov.30.2020', ' 68', '9', '1', 'Toh Phir Aao', '22,8k', 'Awarapan', 'Bollywood-Movies-Songs', 'Shivam, a hitman, is asked to keep an eye on his boss\'s mistress. However, he soon learns that she has been a victim of sex trafficking and decides to unite her with her lover.', '1.jpg', 'Alluploadfolder/Musicfolder/Toh.Phir.Aao.mp3', 'Toh.Phir.Aao.mp3'),
(6, 'A Flying Jatt', 'Nov.30.2020', '7', '3', '1', 'Khair Mangda', '11,3k', 'A Flying Jatt', 'Bollywood-Movies-Songs', 'Tiger Shroff is a Flying Jatt whose aim is to save the world.', '2.jpg', 'Alluploadfolder/Musicfolder/KhairMangda.mp3', 'KhairMangda.mp3'),
(7, 'Baaghi 3', 'Nov.30.2020', '78', '6', '1', 'jhe Rab Mana', '15,4k', 'Baaghi 3', 'Bollywood-Movies-Songs', '	Ronnie and Vikram are brothers who share an unbreakable bond. Since childhood, Ronnie always comes to the rescue whenever Vikram falls in any trouble. Their journey begins when a certain turn in events, leads Vikram to travel abroad to complete some work. On this trip, Vikram gets kidnapped by people who are not to be messed with but as Ronnie witnesses his brother getting beaten and kidnapped, he knows that he will do whatever it takes to destroy anyone and anything that stands in the way of Vikram\'s safety. Ronnie goes on a rampage of destruction to see his brother safe again, even if it means that he independently has to take on an entire country.', '3.jpg', 'Alluploadfolder/Musicfolder/Tujhe.Rab.Mana.mp3', 'Tujhe.Rab.Mana.mp3'),
(8, 'Bol Bachchan', 'Nov.30.2020', ' 3', '98', '1', 'Bol Bachchan', '32,8k', 'Bol Bachchan', 'Bollywood Movies Songs', '	When Abbas breaks open the lock of an ancestral Hindu temple to save a child trapped inside, he faces trouble. He tries to hide his true identity with a fake Hindu name, which leads to a web of lies.', '4.jpg', 'Alluploadfolder/Musicfolder/Bol.Bachchan.mp3', 'Bol.Bachchan.mp3'),
(9, 'Creature 3D', 'Nov.30.2020', '87', '13', '1', 'Sawan Aaya Hai', '17,4k', 'Creature 3D', 'Bollywood-Movies-Songs', '	Ahana is the owner of a new hotel in the hills. She meets Kunal at the launch party and they fall in love but they are soon terrorised by a dinosaur-like creature that begins to kill the residents.', '5.jpg', 'Alluploadfolder/Musicfolder/Sawan.Aaya.Hai.mp3', 'Sawan.Aaya.Hai.mp3'),
(10, ' Don', 'Nov.30.2020', '2', '33', '1', 'Main Hoon Don', '18,4k', 'Don', 'Bollywood-Movies-Songs', '	Vijay, a lookalike of criminal kingpin Don, is hired by DCP D\'Silva in order to find Don\'s secrets. But after D\'Silva dies, Vijay struggles to reveal his real identity.', '6.jpg', 'Alluploadfolder/Musicfolder/Main.Hoon.Don.mp3', 'Main.Hoon.Don.mp3'),
(11, 'Dilwale', 'Nov.30.2020', '45', '87', '1', 'Gerua', '52,4k', 'Dilwale', 'Bollywood-Movies-Songs', '	Raj and Meera fall in love, but are forced to stay away from each other as they belong to rival mafia families. Years later, they get a second chance when their siblings fall for each other.', '7.jpg', 'Alluploadfolder/Musicfolder/Gerua.mp3', 'Gerua.mp3'),
(12, 'Munna Michael', 'Nov.30.2020', ' 33', '98', '1', 'Ding Dang', '16,4k', 'Munna Michael', 'Bollywood-Movies-Songs', '	A young man, tries to follow the footsteps of his idol, The King of Pop, Michael Jackson.', 'mu9.jpg', 'Alluploadfolder/Musicfolder/Ding.Dang.mp3', 'Ding.Dang.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `onlinegame`
--

CREATE TABLE `onlinegame` (
  `id` int(11) NOT NULL,
  `GameName` varchar(400) DEFAULT NULL,
  `Add_Date` varchar(400) DEFAULT NULL,
  `Views` varchar(400) DEFAULT NULL,
  `Keywords` varchar(400) DEFAULT NULL,
  `Categories` varchar(400) DEFAULT NULL,
  `game_link` varchar(20000) DEFAULT NULL,
  `Poster` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlinegame`
--

INSERT INTO `onlinegame` (`id`, `GameName`, `Add_Date`, `Views`, `Keywords`, `Categories`, `game_link`, `Poster`) VALUES
(1, 'Cadillac and Dinosaurs', 'Nov.30.2020', ' 368', 'Cadillac and Dinosaurs', 'Fighting', 'https://files.twoplayergames.org/files/games/o4/Cadillac_and_Dinosaurs.swf', 'f1.png'),
(2, 'Street Fighter', 'Nov.30.2020', '23', 'Street Fighter', 'Fighting', 'https://files.twoplayergames.org/files/games/o1/124618764336984_street_fighter.swf', '1.png'),
(3, 'King of Fighters 5', 'Nov.30.2020', '8', 'King of Fighters 5', 'Fighting', 'https://files.twoplayergames.org/files/games/o4/King_of_Fighters_5.swf', '2.png'),
(4, 'Super Heroes 2', 'Nov.30.2020', '35', 'Super Heroes 2', 'Fighting', 'https://files.twoplayergames.org/files/games/o3/Super_Heroes_2.swf', '3.png'),
(5, 'Two Player Bowling', 'Nov.30.2020', '55', 'Two Player Bowling', 'Sports', 'https://files.twoplayergames.org/files/games/o1/two_player_bowling.swf', '4.png'),
(6, 'IPL Cricket Ultimate', 'Nov.30.2020', '67', 'IPL Cricket Ultimate', 'Sports', 'https://img-hws.y8.com/cloud/y8-flash-game/contents/item_versions/flash_games/31390/original/ipl_cricket_ultimate.swf', 'big.png'),
(7, 'Referee Challenge', 'Nov.30.2020', '98', 'Referee Challenge', 'Sports', 'https://img-hws.y8.com/cloud/y8-flash-game/contents/item_versions/flash_games/57744/original/referee_challenge.swf', '6.png'),
(8, '2 Player Goalkeeper Game', 'Nov.30.2020', '36', '2 Player Goalkeeper Game', 'Sports', 'https://files.twoplayergames.org/files/games/o3/2_Player_Goalkeeper.swf', '7.png'),
(9, 'Vex', 'Nov.30.2020', '98', 'Vex', 'Adventure', 'https://img-hws.y8.com/cloud/y8-flash-game/contents/item_versions/flash_games/60345/original/vex.swf', '8.png'),
(10, 'adventure-drivers', 'Nov.30.2020', '77', 'adventure-drivers', 'Adventure', 'https://play.famobi.com/adventure-drivers/A-5U0J1', '9.png'),
(11, 'super plumber run', 'Nov.30.2020', '623', 'super plumber run', 'Adventure', 'https://play.famobi.com/super-plumber-run/A-5U0J1', '10.png'),
(12, 'Relic Runway', 'Nov.30.2020', '56', 'Relic Runway', 'Adventure', 'https://storage.y8.com/y8-studio/html5/akeemywka/relic_runway/index.html', '11.png'),
(13, 'Sky Driver Extreme', 'Nov.30.2020', '56', 'Sky Driver Extreme', 'Racing', 'https://files.twoplayergames.org/files/games/o5/Sky_Driver_Extreme.swf', '12.png'),
(14, 'Max Fury Death Racer', 'Nov.30.2020', '34', 'Max Fury Death Racer', 'Racing', 'https://img-hws.y8.com/cloud/y8-flash-game/contents/item_versions/flash_games/65660/original/max_fury.swf?1521737937', '13.png'),
(15, 'Super Drift 2', 'Nov.30.2020', '28', 'Super Drift 2', 'Racing', 'https://img-hws.y8.com/cloud/y8-flash-game/contents/item_versions/flash_games/50996/original/super_drift_2.swf?1521598154', '14.png'),
(16, 'Rapid Gun 3', 'Nov.30.2020', ' 368', 'Rapid Gun 3', 'Shooter', 'https://img-hws.y8.com/cloud/y8-flash-game/contents/item_versions/flash_games/64400/original/rapid_gun_3.swf', '15.png'),
(17, 'Zombotron', 'Nov.30.2020', '87', 'Zombotron', 'Shooter', 'https://img-hws.y8.com/cloud/y8-flash-game/contents/item_versions/flash_games/22665/original/zombotron.swf', '17.png'),
(18, 'Cammando 2', 'Nov.30.2020', '45', 'Cammando 2', 'Racing', 'https://img-hws.y8.com/cloud/y8-flash-game/contents/item_versions/flash_games/404/original/commando_2.swf', '18.png'),
(19, 'Bear in Super Action Adventure', 'Nov.30.2020', '27', 'Bear in Super Action Adventure', 'Action', 'https://img-hws.y8.com/cloud/y8-flash-game/contents/item_versions/flash_games/66997/original/bear_in_super_action_adventure.swf', '19.png'),
(20, 'puzzle buble', 'Nov.30.2020', '84', 'puzzle buble', 'puzzle', 'https://play.famobi.com/bubbles-shooter/A-LOGICPLAYS', '20.jpg'),
(21, 'papas sushiria', 'Nov.30.2020', '87', 'papas sushiria', 'Adventure', 'https://papasgames.org/content/upload/games/files/papas-sushiria.swf', 'ong1.jpg'),
(22, 'moto x3m 2 ', 'Nov.30.2020', '39', 'moto x3m 2 ', 'Racing', 'https://html5.gamedistribution.com/5b0abd4c0faa4f5eb190a9a16d5a1b4c/', 'ong9.jpg'),
(23, 'Pizza Challenge', 'Nov.30.2020', '623', 'Pizza Challenge', 'Adventure', 'https://files.twoplayergames.org/files/games/other/Pizza_Challenge/', '21 (1).png'),
(24, 'Tic Tac Toe: Paper Note 2', 'Nov.30.2020', '87', 'Tic Tac Toe: Paper Note 2', 'Action', 'https://files.twoplayergames.org/files/games/other/Tic_Tac_Toe_Paper_Note_2', 'ong13.png'),
(25, 'Sonic Bomberman', 'Nov.30.2020', '84', 'Sonic Bomberman', 'Adventure', 'https://files.twoplayergames.org/files/games/o5/Sonic_Bomberman.swf', '22.png'),
(26, 'Bubble Trouble', 'Nov.30.2020', '39', 'Bubble Trouble', 'Bombs', 'https://html5.GameDistribution.com/3fe4479c00364fce8e00f5881ab8a588/', '23.png'),
(27, 'Pool 8 Ball', 'Nov.30.2020', ' 368', 'Pool 8 Ball', 'puzzle', 'https://files.twoplayergames.org/files/games/other/Pool_8_Ball/index.html', '24.png'),
(28, 'Cut The Rope', 'Nov.30.2020', '39', 'Cut The Rope', 'Action', 'https://games.gamepix.com/play/40071?sid=110903', '25.png'),
(29, 'Angry Birds', 'Nov.30.2020', '98', 'Angry Birds', 'Strategy', 'https://files.twoplayergames.org/files/games/o3/Angry_Birds.swf', '26.jpg'),
(30, 'Flappy Bird', 'Nov.30.2020', '94', 'Flappy Bird', 'Strategy', 'https://html5.gamedistribution.com/08163ea04d194377b4f7aa044145b5c5/', '27.png');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimage`
--

CREATE TABLE `sliderimage` (
  `id` int(11) NOT NULL,
  `slider_img` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliderimage`
--

INSERT INTO `sliderimage` (`id`, `slider_img`) VALUES
(24, 'sd3.jpg'),
(25, 'sd4.jpg'),
(26, 'sd7.jpg'),
(28, 'sd10.jpg'),
(29, 'sd5.jpg'),
(31, '60ef314036e45.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `name` varchar(4000) DEFAULT NULL,
  `Add_Date` varchar(4000) DEFAULT NULL,
  `Views` varchar(4000) DEFAULT NULL,
  `Download_Rate` varchar(4000) DEFAULT NULL,
  `Categories1` varchar(4000) DEFAULT NULL,
  `Categories2` varchar(4000) DEFAULT NULL,
  `Keywords` varchar(4000) DEFAULT NULL,
  `DBWNISO` varchar(4000) DEFAULT NULL,
  `Description` longtext,
  `poster` varchar(4000) DEFAULT NULL,
  `Downfolder` varchar(12000) DEFAULT NULL,
  `filename` varchar(12000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `name`, `Add_Date`, `Views`, `Download_Rate`, `Categories1`, `Categories2`, `Keywords`, `DBWNISO`, `Description`, `poster`, `Downfolder`, `filename`) VALUES
(1, 'VMware Works Pro 15tation', 'May 18, 2019', '1818', '783', 'Desktop,', 'Network Tools,', 'VMware Works Pro 15tation', ' VMwareWorkstationPro 15.zip', '	VMware Workstation Pro is a very powerful virtualization solution for Desktop users. You can virtualize many operating systems on VMware Workstation Pro such as Ubuntu/Debian, CentOS and many more. The user interface of VMware Workstation Pro is simple. I really like the simplicity of VMware Workstation Pro.', 's1.jpg', 'Alluploadfolder/softdownfolder/s1.rar', 's1.rar'),
(2, 'VanDyke SecureCRT & SecureFX 8 (86-64bit)', 'Nov.30.2020', '1234', '123', 'Network Tools', 'MacOS', 'VanDyke SecureCRT & SecureFX 8', ' VanDykeSecureCRT & SecureFX 8 .86-64bit', '	SecureCRT: client for Windows, Mac, and Linux provides rock-solid terminal emulation for computing professionals.\r\nSecureFX: our flexible file transfer client gives you the tools you need to increase the security and efficiency of file transfer operations and site synchronization.', 's2.jpg', 'Alluploadfolder/softdownfolder/s2.rar', 's2.rar'),
(3, 'Parallels Desktop Business Edition 2019 (MacOS)', 'Nov.30.2020', ' 368', '43', 'MacOS', '', 'Parallels Desktop Business Edition 2019', ' ParallelsDesktopBusinessEdition.2019.v14.1.1-45476', '	Parallels Desktop crack supports for USB 2.0 devices as well as iSight USB webcams. This latest edition of Parallels Desktop comes with numerous new features for the designers. This edition also provides additional support for its technical tools.', 's3.jpg', 'Alluploadfolder/softdownfolder/s3.rar', 's3.rar'),
(4, 'Internet Download Manager 6.38 Build 2', 'Nov 30, 2020', '84', '520', 'Internet Tools', '', 'Internet Download Manager', ' Internet Download Manager 6.38 Build 2', '	Internet Download Manager has a smart download logic accelerator that features intelligent dynamic file segmentation and safe multi part downloading technology to accelerate your downloads. Unlike other download accelerators and managers that segment files before downloading starts, Internet Download Manager segments downloaded files dynamically during download process.', 's4.jpg', 'Alluploadfolder/softdownfolder/s4.rar', 's4.rar'),
(6, 'BlueStacks App Player (Win & MacOS)', 'Nov.30.2020', '623', '123', 'Developer Tools', 'MacOS', 'BlueStacks App Player (Win & MacOS)', ' BlueStacksAppPlayer4.32.75-Win', '	BlueStacks App Player is a great tool for allowing you to run your favorite mobile apps/games in full screen in your browser using a PC or Mac.', 's7.jpg', 'Alluploadfolder/softdownfolder/s7.rar', 's7.rar'),
(7, 'Adguard Premium 6.4.1639.4553', 'Nov.30.2020', '62', '23', 'Anti-Malware', '', 'Adguard Premium ', ' AdguardPremium6.4.1639.4553.zip', 'Adguard is a unique program that has all the necessary features for the best web experience. First of all, it’s an ad blocker. Adguard lets you fully enjoy the Internet without any distractions. Watch the videos you want to watch, not annoying pre-rolls, and browse websites for content not tons of banners. Adguard gives you freedom of choice and saves your nerves.', 's12.jpg', 'Alluploadfolder/softdownfolder/s12.rar', 's12.rar'),
(8, 'VLC Media Player (86-64bit)', 'Nov.30.2020', '61', '34', 'Desktop', '', 'VLC Media Player', ' VLC3.0.4-x86', '	VLC Media Player is the most popular and robust multi format, free media player available. The open source media player was publically released in 2001 by non-profit organization VideoLAN Project.', 's9.jpg', 'Alluploadfolder/softdownfolder/s9.rar', 's9.rar'),
(9, 'Maxon Cinema 4D Studio R20.026', 'Nov.30.2020', '128', '52', 'Graphics', '', 'Maxon Cinema 4D Studio ', ' MaxonCinema4DStudio.R20.026.zip', 'Cinema 4D is the professional 3D package for your needs. If you want to create advanced 3D graphics and need a helping hand to ensure you create jaw-dropping graphics quickly and easily, then Cinema 4D is the choice for you. It comes in four different flavours for everyone\'s taste.', 's11.jpg', 'Alluploadfolder/softdownfolder/s11.rar', 's11.rar'),
(10, 'Microsoft Office 2019 Professional (86-64bit)', 'Nov.30.2020', '35', '43', 'Office', '', 'Microsoft Office 2019 Professional', ' MicrosoftOffice2019Professional-1808-x86x64.iso', '	Office 365 ProPlus, the cloud-connected version of Office, delivers the most productive and most secure Office experience-with the lowest total cost of ownership for deployment and management.', 's10.jpg', 'Alluploadfolder/softdownfolder/s10.rar', 's10.rar'),
(11, 'Adobe Premiere Pro CC 2018 (x64)', 'Nov.30.2020', '2685', '1234', 'Graphics', 'Multimedia', 'Adobe Premiere Pro CC 2018', ' AdobePremiereProCC.2018.v12.0.0.224_x64.zip', '	Adobe Premiere Pro is a real-time video editing software wrapped around the timeline concept, designed to simplify the video production process. Adobe Premiere Pro owns the capability to edit video in resolutions up to 10,240 x 8,192 and includes a plugin system that makes it possible to import or export a wide array of media formats. All of these, together with the 3D editing features gained itself a decent reputation among a wide crowd, from beginners to the sharks in the film industry.', 's13.jpg', 'Alluploadfolder/softdownfolder/s13.rar', 's13.rar'),
(12, 'Adobe Photoshop CC 2018 (x86x64)', 'Nov.30.2020', '723', '123', 'Graphics', '', 'Adobe Photoshop CC 2018', ' Photoshop-x86.zip', 'Adobe Photoshop, What’s new in Photoshop 2018 CC 2017/ 2018 appears when you begin dealing with a new image. Selecting New Papers provides a dialog offering templates such as Distinctive Geometric Masks, Instant Movie Mockups, as well as Picture Collection Layouts. Filter categories throughout the leading let you restrict the proposed templates to Photo, Print, Art & Image, Web, Mobile, and also Movie & Video clip. You could obtain more design templates by searching Adobe Supply in all-time low of the dialog, yet I only found a couple of layouts there when searching on words “collage.” W..', 's14.jpg', 'Alluploadfolder/softdownfolder/', 's14.rar');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `Epifullname` varchar(400) DEFAULT NULL,
  `Add_Date` varchar(400) DEFAULT NULL,
  `Views` varchar(400) DEFAULT NULL,
  `Download_Rate` varchar(400) DEFAULT NULL,
  `Shortname` varchar(400) DEFAULT NULL,
  `Categories` varchar(400) DEFAULT NULL,
  `Keywords` varchar(400) DEFAULT NULL,
  `Poster` varchar(400) DEFAULT NULL,
  `Videofolder` varchar(12000) DEFAULT NULL,
  `filename` varchar(12000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `Epifullname`, `Add_Date`, `Views`, `Download_Rate`, `Shortname`, `Categories`, `Keywords`, `Poster`, `Videofolder`, `filename`) VALUES
(1, 'Tantra - 3rd December 2018', 'Dec 04, 2018', '660', '86', 'Tantra', 'Urdu Shows,', 'Tantra', 'v1.jpg', 'Alluploadfolder/videofolder/Tantra(p)1.mp4', 'Tantra(p)1.mp4'),
(2, 'Tantra - 4th December 2018', 'Dec 05, 2018', '488', '84', 'Tantra', 'Urdu Shows,', 'Tantra', 't2.jpg', 'Alluploadfolder/videofolder/Tantra (p)2.mp4', 'Tantra (p)2.mp4'),
(3, 'Tantra - 5th December 2018', 'Dec 06,2018', '500', '88', 'Tantra ', 'Urdu Shows,', 'Tantra ', 't3.jpg', 'Alluploadfolder/videofolder/Tantra(p)3.mp4', 'Tantra(p)3.mp4'),
(4, 'Tantra - 6th December 2018', 'Dec 07, 2018', '489', '77', 'Tantra ', 'Urdu Shows,', 'Tantra ', 't4.jpg', 'Alluploadfolder/videofolder/Tantra(p)4.mp4', 'Tantra(p)4.mp4'),
(5, 'Tantra - 7th December 2018', 'Dec 08, 2018', '448', '71', 'Tantra ', 'Urdu Shows,', 'Tantra ', 't5.jpg', 'Alluploadfolder/videofolder/Tantra(p)5.mp4', 'Tantra(p)5.mp4'),
(6, 'Tantra - 10th December 2018', 'Dec 11, 2019', '474', '78', 'Tantra ', 'Urdu Shows,', 'Tantra ', 't6.jpg', 'Alluploadfolder/videofolder/Tantra(p)6.mp4', 'Tantra(p)6.mp4'),
(7, 'Tantra - 11th December 2018', 'Dec 12, 2018', '406', '67', 'Tantra', 'Urdu Shows,', 'Tantra', 't7.jpg', 'Alluploadfolder/videofolder/Tantra(p)7.mp4', 'Tantra(p)7.mp4'),
(8, 'Sitara - 3rd December 2018', 'Dec 04, 2018', '1178', '181', 'Sitara ', 'Urdu Shows,', 'Sitara ', 'sitara1.jpg', 'Alluploadfolder/videofolder/Vish (p)1.mp4', 'Vish (p)1.mp4'),
(9, 'Sitara - 4th December 2018', 'Dec 05, 2018', '1176', '181', 'Sitara', 'Urdu Shows,', 'Sitara', 'sitara2.jpg', 'Alluploadfolder/videofolder/Vish (p)2.mp4', 'Vish (p)2.mp4'),
(10, 'Sitara - 5th December 2018', 'Dec 06, 2018', '903', '174', 'Sitara', 'Urdu Shows,', 'Sitara', 'sitara3.jpg', 'Alluploadfolder/videofolder/Vish (p)3.mp4', 'Vish (p)3.mp4'),
(11, 'Sitara - 6th December 2018', 'Dec 07, 2018', '1183', '187', 'Sitara', 'Urdu Shows,', 'Sitara', 'sitara4.jpg', 'Alluploadfolder/videofolder/Vish (p)4.mp4', 'Vish (p)4.mp4'),
(12, 'Sitara - 7th December 2018', 'Dec 08, 2018', '985', '172', 'Sitara', 'Urdu Shows,', 'Sitara', 'sitara5.jpg', 'Alluploadfolder/videofolder/Vish (p)5.mp4', 'Vish (p)5.mp4'),
(13, 'Sitara - 10th December 2018', 'Dec 11, 2018', '1136', '182', 'Sitara', 'Urdu Shows,', 'Sitara', 'sitara6.jpg', 'Alluploadfolder/videofolder/Vish (p)6.mp4', 'Vish (p)6.mp4'),
(14, 'Silsila Badalte Rishton Ka - 5th June 2018', 'Jun 06, 2018', '483', ' 65', 'Silsila Badalte Rishton Ka', 'Urdu Shows,', 'Silsila Badalte Rishton Ka', 'silsila1.jpg', 'Alluploadfolder/videofolder/Silsila(p)1.mp4', 'Silsila(p)1.mp4'),
(15, 'Silsila Badalte Rishton Ka - 6th June 2018', 'Jun 07, 2018', '415', '55', 'Silsila Badalte Rishton Ka', 'Urdu Shows,', 'Silsila Badalte Rishton Ka', 'silsila2.jpg', 'Alluploadfolder/videofolder/Silsila(p)2.mp4', 'Silsila(p)2.mp4'),
(16, 'Silsila Badalte Rishton Ka - 7th June 2018', 'Jun 08, 2018', ' 368', '46', 'Silsila Badalte Rishton Ka', 'Urdu Shows,', 'Silsila Badalte Rishton Ka', 'silsila3.jpg', 'Alluploadfolder/videofolder/Silsila(p)3.mp4', 'Silsila(p)3.mp4'),
(17, 'Silsila Badalte Rishton Ka - 8th June 2018', 'June 09, 2018', ' 446', '43', 'Silsila Badalte Rishton Ka', 'Urdu Shows,', 'Silsila Badalte Rishton Ka', 'silsila4.jpg', 'Alluploadfolder/videofolder/Silsila(p)4.mp4', 'Silsila(p)4.mp4'),
(18, 'Silsila Badalte Rishton Ka - 11th June 2018', 'Jun 11, 2018', '335', ' 48', 'Silsila Badalte Rishton Ka', 'Urdu Shows,', 'Silsila Badalte Rishton Ka', 'silsila5.jpg', 'Alluploadfolder/videofolder/Silsila(p)5.mp4', 'Silsila(p)5.mp4'),
(19, 'Silsila Badalte Rishton Ka - 12th June 2018', 'Jun 13, 2018', '335', '40', 'Silsila Badalte Rishton Ka', 'Urdu Shows,', 'Silsila Badalte Rishton Ka', 'silsila6.jpg', 'Alluploadfolder/videofolder/Silsila(p)6.mp4', 'Silsila(p)6.mp4'),
(20, 'Shakti - 3rd February 2020', 'Feb 04, 2020', '602', '109', 'Shakti', 'Urdu Shows,', 'Shakti', 'shk1.jpg', 'Alluploadfolder/videofolder/Shakti(p)1.mp4', 'Shakti(p)1.mp4'),
(21, 'Shakti - 4th February 2020', 'Feb 05, 2020', '623', '102', 'Shakti ', 'Urdu Shows,', 'Shakti ', 'shk2.jpg', 'Alluploadfolder/videofolder/Shakti(p)2.mp4', 'Shakti(p)2.mp4'),
(22, 'Shakti - 5th February 2020', 'Feb 06, 2020', '450', '97', 'Shakti', 'Urdu Shows,', 'Shakti', 'shk3.jpg', 'Alluploadfolder/videofolder/Shakti(p)3.mp4', 'Shakti(p)3.mp4'),
(23, 'Shakti - 6th February 2020', 'Feb 07, 2020', '583', '100', 'Shakti', 'Urdu Shows,', 'Shakti', 'shk4.jpg', 'Alluploadfolder/videofolder/Shakti(p)4.mp4', 'Shakti(p)4.mp4'),
(24, 'Shakti - 7th February 2020', 'Feb 09, 2020', '445', '101', 'Shakti ', 'Urdu Shows,', 'Shakti', 'shk5.jpg', 'Alluploadfolder/videofolder/Shakti(p)5.mp4', 'Shakti(p)5.mp4'),
(25, 'Shakti - 11th February 2020', 'Feb 12, 2020', '571', '117', 'Shakti', 'Urdu Shows,', 'Shakti', 'shk6.jpg', 'Alluploadfolder/videofolder/Shakti(p)6.mp4', 'Shakti(p)6.mp4'),
(26, 'Taarak Mehta Ka Ooltah Chashmah - 25th November', 'Nov 26, 2016', '10928', '364', 'Taarak Mehta Ka Ooltah Chashmah', 'Urdu Shows,', 'Taarak Mehta Ka Ooltah Chashmah', 'tarak1.jpg', 'Alluploadfolder/videofolder/TaarakMehta(p)1.mp4', 'TaarakMehta(p)1.mp4'),
(27, 'Taarak Mehta Ka Ooltah Chashmah - 28th November', 'Nov 30, 2016', ' 3069', '253', 'Taarak Mehta Ka Ooltah Chashmah', 'Urdu Shows,', 'Taarak Mehta Ka Ooltah Chashmah', 'tarak2.jpg', 'Alluploadfolder/videofolder/TaarakMehta(p)2.mp4', 'TaarakMehta(p)2.mp4'),
(28, 'Taarak Mehta Ka Ooltah Chashmah - 29th November 2016', 'Nov 30, 2016', '2108', '218', 'Taarak Mehta Ka Ooltah Chashmah', 'Urdu Shows,', 'Taarak Mehta Ka Ooltah Chashmah', 'tarak3.jpg', 'Alluploadfolder/videofolder/TaarakMehta(p)3.mp4', 'TaarakMehta(p)3.mp4'),
(29, 'Taarak Mehta Ka Ooltah Chashmah - 30th November 2016', 'Dec 01, 2016', ' 1697', '188', 'Taarak Mehta Ka Ooltah Chashmah ', 'Urdu Shows,', 'Taarak Mehta Ka Ooltah Chashmah ', 'tarak4.jpg', 'Alluploadfolder/videofolder/TaarakMehta(p)4.mp4', 'TaarakMehta(p)4.mp4'),
(30, 'Taarak Mehta Ka Ooltah Chashmah - 1st December 2016', 'Dec 02, 2016', '1397', '198', 'Taarak Mehta Ka Ooltah Chashmah ', 'Urdu Shows,', 'Taarak Mehta Ka Ooltah Chashmah ', 'tarak5.jpg', 'Alluploadfolder/videofolder/TaarakMehta(p)5.mp4', 'TaarakMehta(p)5.mp4'),
(31, 'Taarak Mehta Ka Ooltah Chashmah - 2nd December 2016', 'Dec 03, 2016', ' 1311', '143', 'Taarak Mehta Ka Ooltah Chashmah ', 'Urdu Shows,', 'Taarak Mehta Ka Ooltah Chashmah ', 'tarak6.jpg', 'Alluploadfolder/videofolder/TaarakMehta(p)6.mp4', 'TaarakMehta(p)6.mp4'),
(32, 'Hatim - Episode 01', 'Feb 05, 2018', ' 2951', ' 586', 'Hatim', 'Urdu Shows,', 'Hatim', 'hatim1.jpg', 'Alluploadfolder/videofolder/Hatim(p)1.mp4', 'Hatim(p)1.mp4'),
(33, 'Hatim - Episode 02', 'Feb 05, 2018', ' 1900', '468', 'Hatim', 'Urdu Shows,', 'Hatim', 'hatim2.jpg', 'Alluploadfolder/videofolder/hatim2.jpg', 'Hatim(p)2.mp4'),
(34, 'Hatim - Episode 03', 'Feb 05, 2018', ' 1649', ' 369', 'Hatim', 'Urdu Shows,', 'Hatim', 'hatim3.jpg', 'Alluploadfolder/videofolder/Hatim(p)3.mp4', 'Hatim(p)3.mp4'),
(35, 'Hatim - Episode 04', 'Feb 05, 2018', ' 1538', '312', 'Hatim', 'Urdu Shows,', 'Hatim', 'hatim4.jpg', 'Alluploadfolder/videofolder/Hatim(p)4.mp4', 'Hatim(p)4.mp4'),
(36, 'Hatim - Episode 05', 'Feb 05, 2018', '1534', '313', 'Hatim', 'Urdu Shows,', 'Hatim', 'hatim5.jpg', 'Alluploadfolder/videofolder/Hatim(p)5.mp4', 'Hatim(p)5.mp4'),
(37, 'Hatim - Episode 06', 'Feb 05, 2018', '1508', '295', 'Hatim', 'Urdu Shows,', 'Hatim', 'hatim6.jpg', 'Alluploadfolder/videofolder/Hatim(p)6.mp4', 'Hatim(p)6.mp4'),
(38, 'Hasad - Episode 01 & 02 - 10th June 2019', 'Jun 12, 2019', '84', '8', 'Hasad', 'Urdu Shows,', 'Hasad', 'hasad1.jpg', 'Alluploadfolder/videofolder/Hasad(p)1.mp4', 'Hasad(p)1.mp4'),
(39, 'Hasad - Episode 03 & 04 - 17th June 2019', 'Jun 18, 2019', '74', '7', 'Hasad', 'Urdu Shows,', 'Hasad', 'hasad2.jpg', 'Alluploadfolder/videofolder/Hasad(p)2.mp4', 'Hasad(p)2.mp4'),
(40, 'Hasad - Episode 05 & 06 - 24th June 2019', 'Jun 25, 2019', '69', '6', 'Hasad', 'Urdu Shows,', 'Hasad', 'hasad3.jpg', 'Alluploadfolder/videofolder/Hasad(p)3.mp4', 'Hasad(p)3.mp4'),
(41, 'Hasad - Episode 07 & 08 - 1st July 2019', 'Jul 02, 2019', '66', '15', 'Hasad ', 'Urdu Shows,', 'Hasad ', 'hasad4.jpg', 'Alluploadfolder/videofolder/Hasad(p)4.mp4', 'Hasad(p)4.mp4'),
(42, 'Hasad - Episode 09 & 10 - 8th July 2019', 'Jul 09, 2019', '74', '9', 'Hasad', 'Urdu Shows,', 'Hasad', 'hasad5.jpg', 'Alluploadfolder/videofolder/Hasad(p)5.mp4', 'Hasad(p)5.mp4'),
(43, 'Hasad - Episode 11 & 12 - 15th July 2019', 'Jul 18, 2019', '78', '10', 'Hasad', 'Urdu Shows,', 'Hasad', 'hasad6.jpg', 'Alluploadfolder/videofolder/Hasad(p)6.mp4', 'Hasad(p)6.mp4'),
(44, 'Thora Sa Haq - Episode 01 - 23rd October 2019', 'Oct  24, 2019', '505', '84', 'Thora Sa Haq', 'Urdu Shows,', 'Thora Sa Haq', 'throrasahaq1.jpg', 'Alluploadfolder/videofolder/ThoraSaHaq(p)1.mp4', 'ThoraSaHaq(p)1.mp4'),
(45, 'Thora Sa Haq - Episode 02 - 30th October 2019', 'Oct 31, 2019', '385', '65', 'Thora Sa Haq', 'Urdu Shows,', 'Thora Sa Haq', 'throrasahaq2.jpg', 'Alluploadfolder/videofolder/ThoraSaHaq(p)2.mp4', 'ThoraSaHaq(p)2.mp4'),
(46, 'Thora Sa Haq - Episode 03 - 6th November 2019', 'Oct  07, 2019', '349', '67', 'Thora Sa Haq', 'Urdu Shows,', 'Thora Sa Haq', 'throrasahaq3.jpg', 'Alluploadfolder/videofolder/ThoraSaHaq(p)3.mp4', 'ThoraSaHaq(p)3.mp4'),
(47, 'Thora Sa Haq - Episode 04 - 13th November 2019', 'Nov 14, 2019', '337', '55', 'Thora Sa Haq', 'Urdu Shows,', 'Thora Sa Haq', 'throrasahaq4.jpg', 'Alluploadfolder/videofolder/ThoraSaHaq(p)4.mp4', 'ThoraSaHaq(p)4.mp4'),
(48, 'Thora Sa Haq - Episode 06 - 27th November 2019', 'Nov 28, 2019', '421', '45', 'Thora Sa Haq', 'Urdu Shows,', 'Thora Sa Haq', 'throrasahaq5.jpg', 'Alluploadfolder/videofolder/ThoraSaHaq(p)5.mp4', 'ThoraSaHaq(p)5.mp4'),
(49, 'Thora Sa Haq - Episode 14 - 22nd January 2020', 'Jan 23, 2020', '485', '60', 'Thora Sa Haq', 'Urdu Shows,', 'Thora Sa Haq', 'throrasahaq6.jpg', 'Alluploadfolder/videofolder/ThoraSaHaq(p)6.mp4', 'ThoraSaHaq(p)6.mp4'),
(50, 'Deewangi - Season 01 Episode 01', 'May 01, 2020', '88', '21', 'Deewangi - Season 01', 'Urdu Shows,', 'Deewangi', 'dewangi1.jpg', 'Alluploadfolder/videofolder/Deewangi (p)1.mp4', 'Deewangi (p)1.mp4'),
(51, 'Deewangi - Season 01 Episode 02', 'May 01, 2020', '50', '22', 'Deewangi - Season 01', 'Urdu Shows,', 'Deewangi', 'dewangi2.jpg', 'Alluploadfolder/videofolder/Deewangi (p)2.mp4', 'Deewangi (p)2.mp4'),
(52, 'Deewangi - Season 01 Episode 03', 'May 01, 2020', '52', '21', 'Deewangi - Season 01', 'Urdu Shows,', 'Deewangi ', 'dewangi3.jpg', 'Alluploadfolder/videofolder/Deewangi (p)3.mp4', 'Deewangi (p)3.mp4'),
(53, 'Deewangi - Season 01 Episode 04', 'May 01, 2020', '90', '23', 'Deewangi - Season 01', 'Urdu Shows,', 'Deewangi', 'dewangi4.jpg', 'Alluploadfolder/videofolder/Deewangi (p)4.mp4', 'Deewangi (p)4.mp4'),
(54, 'Deewangi - Season 01 Episode 05', 'May 01, 2020', '44', '23', 'Deewangi - Season 01 ', 'Urdu Shows,', 'Deewangi', 'dewangi5.jpg', 'Alluploadfolder/videofolder/Deewangi (p)5.mp4', 'Deewangi (p)5.mp4'),
(55, 'Deewangi - Season 01 Episode 06', 'May 01, 2020', '82', '22', 'Deewangi - Season 01', 'Urdu Shows,', 'Deewangi ', 'dewangi6.jpg', 'Alluploadfolder/videofolder/Deewangi (p)6.mp4', 'Deewangi (p)6.mp4'),
(56, 'Kasam - 25th November 2016', 'Nov 26, 2016', '822', '51', 'Kasam ', 'Urdu Shows,', 'Kasam ', 'kasam1.jpg', 'Alluploadfolder/videofolder/Kasam(p)1.mp4', 'Kasam(p)1.mp4'),
(57, 'Kasam - 28th November 2016', 'Nov 30, 2016', '576', '51', 'Kasam ', 'Urdu Shows,', 'Kasam ', 'kasam2.jpg', 'Alluploadfolder/videofolder/Kasam(p)2.mp4', 'Kasam(p)2.mp4'),
(58, 'Kasam - 29th November 2016', 'Nov 30, 2016', '438', '35', 'Kasam', 'Urdu Shows,', 'Kasam', 'kasam3.jpg', 'Alluploadfolder/videofolder/Kasam(p)3.mp4', 'Kasam(p)3.mp4'),
(59, 'Kasam - 30th November 2016', 'Dec 01, 2016', '369', '35', 'Kasam', 'Urdu Shows,', 'Kasam', 'kasam4.jpg', 'Alluploadfolder/videofolder/Kasam(p)4.mp4', 'Kasam(p)4.mp4'),
(60, 'Kasam - 1st December 2016', 'Dec 02, 2016', '371', '45', 'Kasam', 'Urdu Shows,', 'Kasam', 'kasam5.jpg', 'Alluploadfolder/videofolder/Kasam(p)5.mp4', 'Kasam(p)5.mp4'),
(61, 'Kasam - 2nd December 2016', 'Dec 03, 2016', '397', '50', 'Kasam', 'Urdu Shows,', 'Kasam', 'kasam6.jpg', 'Alluploadfolder/videofolder/Kasam(p)6.mp4', 'Kasam(p)6.mp4'),
(62, 'Koi Chand Rakh - Episode 01 - 19th July 2018', 'Jul 20, 2018', '868', '182', 'Koi Chand Rakh', 'Urdu Shows,', 'Koi Chand Rakh', 'KoiChandRakh1.jpg', 'Alluploadfolder/videofolder/KoiChand Rakh(p)1.mp4', 'KoiChand Rakh(p)1.mp4'),
(63, 'Koi Chand Rakh - Episode 02 - 26th July 2018', 'Jul 27, 2018', '663', '133', 'Koi Chand Rakh', 'Urdu Shows,', 'Koi Chand Rakh', 'KoiChandRakh2.jpg', 'Alluploadfolder/videofolder/KoiChand Rakh(p)2.mp4', 'KoiChand Rakh(p)2.mp4'),
(64, 'Koi Chand Rakh - Episode 03 - 2nd August 2018', 'Aug 03, 2018', '723', '141', 'Koi Chand Rakh', 'Urdu Shows,', 'Koi Chand Rakh', 'KoiChandRakh3.jpg', 'Alluploadfolder/videofolder/KoiChand Rakh(p)3.mp4', 'KoiChand Rakh(p)3.mp4'),
(65, 'Koi Chand Rakh - Episode 04 - 9th August 2018', 'Aug 10, 2018', '557', '112', 'Koi Chand Rakh', 'Urdu Shows,', 'Koi Chand Rakh', 'KoiChandRakh4.jpg', 'Alluploadfolder/videofolder/KoiChand Rakh(p)4.mp4', 'KoiChand Rakh(p)4.mp4'),
(66, 'Koi Chand Rakh - Episode 05 - 16th August 2018', 'Aug 18, 2018', '594', '109', 'Koi Chand Rakh', 'Urdu Shows,', 'Koi Chand Rakh', 'KoiChandRakh5.jpg', 'Alluploadfolder/videofolder/KoiChand Rakh(p)5.mp4', 'KoiChand Rakh(p)5.mp4'),
(67, 'Koi Chand Rakh - Episode 06 - 30th August 2018', 'Aug 31, 2018', '720', '103', 'Koi Chand Rakh', 'Urdu Shows,', 'Koi Chand Rakh', 'KoiChandRakh6.jpg', 'Alluploadfolder/videofolder/KoiChand Rakh(p)6.mp4', 'KoiChand Rakh(p)6.mp4'),
(68, 'Do Bol - Episode 01 & 02 - 5th March 2019', 'Mar 06, 2019', '1432', '214', 'Do Bol', 'Urdu Shows,', 'Do Bol', 'dobol1.jpg', 'Alluploadfolder/videofolder/DoBol(p)1.mp4', 'DoBol(p)1.mp4'),
(69, 'Do Bol - Episode 03 & 04 - 12th March 2019', 'Mar 28, 2019', '579', '86', 'Do Bol', 'Urdu Shows,', 'Do Bol', 'dobol2.jpg', 'Alluploadfolder/videofolder/DoBol(p)2.mp4', 'DoBol(p)2.mp4'),
(70, ' Do Bol - Episode 05 & 06 - 19th March 2019', 'Mar 28, 2019', '543', '102', ' Do Bol', 'Urdu Shows,', ' Do Bol', 'dobol3.jpg', 'Alluploadfolder/videofolder/DoBol(p)3.mp4', 'DoBol(p)3.mp4'),
(71, 'Do Bol - Episode 07 & 08 - 26th March 2019', 'Mar 28, 2019', '681', '111', 'Do Bol', 'Urdu Shows,', 'Do Bol', 'dobol4.jpg', 'Alluploadfolder/videofolder/DoBol(p)4.mp4', 'DoBol(p)4.mp4'),
(72, 'Do Bol - Episode 09 & 10 - 2nd April 2019', 'Apr  03, 2019', '771', '141', 'Do Bol', 'Urdu Shows,', 'Do Bol', 'dobol5.jpg', 'Alluploadfolder/videofolder/DoBol(p)5.mp4', 'DoBol(p)5.mp4'),
(73, 'Do Bol - Episode 11 & 12 - 9th April 2019', 'Apr 10, 2019', '253', '54', 'Do Bol', 'Urdu Shows,', 'Do Bol', 'dobol6.jpg', 'Alluploadfolder/videofolder/DoBol(p)6.mp4', 'DoBol(p)6.mp4'),
(74, 'Silsila Badalte Rishton Ka - 13th June 2018', 'Jun 14, 2018', '453', '43', 'Silsila Badalte Rishton Ka', 'Urdu Shows,', 'Silsila Badalte Rishton Ka', 'SilsilaBadalteRishtonKa(p)7.jpg', 'Alluploadfolder/videofolder/SilsilaBadalte RishtonKa (p)7.mp4', 'SilsilaBadalte RishtonKa (p)7.mp4'),
(75, 'Tantra - 12th December 2018', 'Dec 13, 2018', '424', '76', 'Tantra', 'Urdu Shows,', 'Tantra', 'Tantra(p)7.jpg', 'Alluploadfolder/videofolder/Tantra(p)7.mp4', 'Tantra(p)7.mp4'),
(76, 'Sitara - 11th December 2018', 'Dec 12, 2018', '1033', '166', 'Sitara', 'Urdu Shows,', 'Sitara', 'Sitara(p)7.jpg', 'Alluploadfolder/videofolder/Sitaara(p)7.mp4', 'Sitaara(p)7.mp4'),
(77, 'Shakti - 12th Febaury 2020', 'Feb 13, 2020', '520', '91', 'Shakti', 'Urdu Shows,', 'Shakti', 'shakti(p)7.jpg', 'Alluploadfolder/videofolder/Shakti(p)7.mp4', 'Shakti(p)7.mp4'),
(78, 'Taarak Mehta Ka Ooltah Chashmah - 4th December', 'Dec 06, 2016', '1424', '153', 'Taarak Mehta Ka Ooltah Chashmah', 'Urdu Shows,', 'Taarak Mehta Ka Ooltah Chashmah', 'TaarakMehtaKaOoltahChashmah(p)7.jpg', 'Alluploadfolder/videofolder/TaarakMehta(p)7.mp4', 'TaarakMehta(p)7.mp4'),
(79, 'Hatim - Episode 07', 'Feb 05, 2018', ' 1408', '280', 'Hatim', 'Urdu Shows,', 'Hatim', 'Hatim(p)7.jpg', 'Alluploadfolder/videofolder/Hatim(p)7.mp4', 'Hatim(p)7.mp4'),
(80, 'Kasam - 4th December 2016', 'Dec 06, 2016', '378', '40', 'Kasam', 'Urdu Shows,', 'Kasam', 'Kasam(p)7.jpg', 'Alluploadfolder/videofolder/Kasam(p)7.mp4', 'Kasam(p)7.mp4'),
(81, 'Koi Chand Rakh - Episode 07 - 13th September 2018', 'Sep 14, 2018', '592', '112', 'Koi Chand Rakh ', 'Urdu Shows,', 'Koi Chand Rakh ', 'KoiChandRakh(p)7.jpg', 'Alluploadfolder/videofolder/KoiChand Rakh(p)7.mp4', 'KoiChand Rakh(p)7.mp4'),
(82, 'Do Bol - Episode 13 & 14 - 10th April 2019', 'Apr 11, 2019', '270', '56', 'Do Bol', 'Urdu Shows,', 'Do Bol', 'DoBol(p)7.jpg', 'Alluploadfolder/videofolder/DoBol(p)7.mp4', 'DoBol(p)7.mp4'),
(83, 'Hasad - Episode 13 & 14 - 22nd July 2019', 'Jul 23, 2019', '62', '8', 'Hasad', 'Urdu Shows,', 'Hasad', 'Hasad(p)7.jpg', 'Alluploadfolder/videofolder/Hasad(p)7.mp4', 'Hasad(p)7.mp4'),
(84, 'Thora Sa Haq - Episode 15 - 29th January 2020', 'Jan 30, 2020', '475', '57', 'Thora Sa Haq', 'Urdu Shows,', 'Thora Sa Haq', 'ThoraSaHaq(p)7.jpg', 'Alluploadfolder/videofolder/ThoraSaHaq (p)7.mp4', 'ThoraSaHaq (p)7.mp4'),
(85, 'Deewangi - Season 01 Episode 07', 'May 01, 2020', '63', '123', 'Deewangi - Season 01', 'Urdu Shows,', 'Deewangi', 'Deewangi(p)7.jpg', 'Alluploadfolder/videofolder/Deewangi (p)7.mp4', 'Deewangi (p)7.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `wallpaper`
--

CREATE TABLE `wallpaper` (
  `id` int(11) NOT NULL,
  `FullName` varchar(400) DEFAULT NULL,
  `Add_Date` varchar(400) DEFAULT NULL,
  `Views` varchar(400) DEFAULT NULL,
  `Download_Rate` varchar(400) DEFAULT NULL,
  `PicRelateN` varchar(400) DEFAULT NULL,
  `Categories` varchar(400) DEFAULT NULL,
  `Keywords` varchar(400) DEFAULT NULL,
  `poster` varchar(4000) DEFAULT NULL,
  `filename` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallpaper`
--

INSERT INTO `wallpaper` (`id`, `FullName`, `Add_Date`, `Views`, `Download_Rate`, `PicRelateN`, `Categories`, `Keywords`, `poster`, `filename`) VALUES
(1, 'Macro', 'Nov.30.2020', ' 1716', ' 927', 'Aero', 'Aero', 'Macro', 'Alluploadfolder/walpaperposter/Macro.jpg', 'Macro.jpg'),
(2, 'White', 'Nov.30.2020', ' 1160', '480', 'Aero', 'Aero', 'White', 'Alluploadfolder/walpaperposter/White.jpg', 'White.jpg'),
(3, 'Creative', 'Nov.30.2020', ' 1053', ' 422', 'Aero', 'Aero', 'Creative', 'Alluploadfolder/walpaperposter/Creative.jpg', 'Creative.jpg'),
(4, 'Autunm', 'Nov.30.2020', '84', '123', 'Aero', 'Aero', 'Autunm', 'Alluploadfolder/walpaperposter/Autunm.jpg', 'Autunm.jpg'),
(5, 'Vector Art', 'Nov.30.2020', ' 1112', ' 542', 'Aero', 'Aero', 'Vector Art', 'Alluploadfolder/walpaperposter/Vector Art.jpg', 'Vector Art.jpg'),
(6, 'Physalis Alkekengi', 'Nov.30.2020', '623', '520', 'black', 'Black', 'Physalis Alkekengi', 'Alluploadfolder/walpaperposter/Physalis Alkekengi.jpg', 'Physalis Alkekengi.jpg'),
(7, 'Maiden life Birds', 'Nov.30.2020', '84', '123', 'Creative', 'Creative', 'Maiden life Birds', 'Alluploadfolder/walpaperposter/Maiden life Birds.jpg', 'Maiden life Birds.jpg'),
(8, 'Ladybirds on a Dandelion', 'Nov.30.2020', '1234', '43', 'Macro', 'Macro', 'Ladybirds on a Dandelion', 'Alluploadfolder/walpaperposter/Ladybirds on a Dandelion.jpg', 'Ladybirds on a Dandelion.jpg'),
(9, 'Colorful', 'Nov.30.2020', '135', '96', 'Aero', 'Aero', 'Colorful', 'Alluploadfolder/walpaperposter/Colorful.jpg', 'Colorful.jpg'),
(10, 'Ganut', 'Nov.30.2020', '623', '520', 'Colorful', 'Colorfull', 'Ganut', 'Alluploadfolder/walpaperposter/Ganut.jpg', 'Ganut.jpg'),
(11, 'Dream Home', 'Nov.30.2020', '825', '264', 'Creative', 'Creative', 'Dream Home', 'Alluploadfolder/walpaperposter/Dream Home.jpg', 'Dream Home.jpg'),
(12, 'Pacific Ocean Rocks', 'Nov.30.2020', '143', '835', 'Island', 'Island', 'Pacific Ocean Rocks', 'Alluploadfolder/walpaperposter/Pacific Ocean Rocks.jpg', 'Pacific Ocean Rocks.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `webtv`
--

CREATE TABLE `webtv` (
  `id` int(11) NOT NULL,
  `channel_name` varchar(400) DEFAULT NULL,
  `Views` varchar(400) DEFAULT NULL,
  `Keywords` varchar(400) DEFAULT NULL,
  `Categories` varchar(400) DEFAULT NULL,
  `Channel_link` varchar(20000) DEFAULT NULL,
  `Poster` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webtv`
--

INSERT INTO `webtv` (`id`, `channel_name`, `Views`, `Keywords`, `Categories`, `Channel_link`, `Poster`) VALUES
(1, 'Geo News', ' 368', 'Geo News', 'News', 'https://www.youtube.com/embed/sOdRPZwcxOw', 'tv2.jpg'),
(2, 'samma news', '1234', 'samma news', 'News', 'https://www.youtube.com/embed/VBr_zye54wQ', 'tv3.jpg'),
(3, 'Down news', '623', 'Down news', 'News', 'https://www.youtube.com/embed/mIYa8oearAc', 'Dawn_News.jpg'),
(4, 'ARY NEWS ', '623', 'ARY NEWS ', 'News', 'https://www.youtube.com/embed/brVXJjT_Bes', 'tv1.jpg'),
(5, 'GNN HD ', '56', 'GNN HD ', 'News', 'https://www.youtube.com/embed/3WcZqMCqcAM', 'tv10.jpg'),
(6, 'BOL News', '987', 'BOL News', 'News', 'https://www.youtube.com/embed/HwxHZYm8iz8', 'tv11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `islamic`
--
ALTER TABLE `islamic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onlinegame`
--
ALTER TABLE `onlinegame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderimage`
--
ALTER TABLE `sliderimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallpaper`
--
ALTER TABLE `wallpaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webtv`
--
ALTER TABLE `webtv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islamic`
--
ALTER TABLE `islamic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `onlinegame`
--
ALTER TABLE `onlinegame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sliderimage`
--
ALTER TABLE `sliderimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `wallpaper`
--
ALTER TABLE `wallpaper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `webtv`
--
ALTER TABLE `webtv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `test` FOREIGN KEY (`id`) REFERENCES `video` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
