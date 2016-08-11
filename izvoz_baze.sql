--
-- Zbirka podatkov: `pikantna lestvica`
--

-- --------------------------------------------------------

--
-- Struktura tabele `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `blog_title` varchar(120) COLLATE utf8_slovenian_ci NOT NULL,
  `blog_content` text COLLATE utf8_slovenian_ci NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `blog`
--

INSERT INTO `blog` (`id_blog`, `blog_title`, `blog_content`, `date_added`) VALUES
(1, 'O čilijih', 'The chili pepper (also chile pepper or chilli pepper, from Nahuatl chīlli [ˈt͡ʃiːli]) is the fruit of plants from the genus Capsicum, members of the nightshade family, Solanaceae. In Australia, Britain, India, Ireland, New Zealand, Pakistan, South Africa and in other Asian countries, it is usually known simply as chilli.\r\n\r\nThe substances that give chili peppers their intensity when ingested or applied topically are capsaicin and several related chemicals, collectively called capsaicinoids.\r\n\r\nChili peppers originated in the Americas. After the Columbian Exchange, many cultivars of chili pepper spread across the world, used in both food and medicine. Chilies were brought to Asia by Portuguese navigators during the 16th century.\r\n\r\nWorldwide, some 3.8 million hectares (about 9.4 million acres) of land produce 33 million tons of chili peppers (2010 data). India is the world''s biggest producer, consumer and exporter of chili peppers. Guntur in the South Indian state of Andhra Pradesh produces 30% of all the chilies produced in India. Andhra Pradesh as a whole contributes 75% of India''s chili exports.', '2016-08-11 19:02:18'),
(2, 'Ostrina', 'The substances that give chili peppers their intensity when ingested or applied topically are capsaicin (8-methyl-N-vanillyl-6-nonenamide) and several related chemicals, collectively called capsaicinoids.[16][17] Capsaicin is also the primary component in pepper spray, a less-than-lethal weapon.\r\n\r\nWhen consumed, capsaicinoids bind with pain receptors in the mouth and throat that are responsible for sensing heat. Once activated by the capsaicinoids, these receptors send a message to the brain that the person has consumed something hot. The brain responds to the burning sensation by raising the heart rate, increasing perspiration and release of endorphins. A 2008 study[18] reports that capsaicin alters how the body''s cells use energy produced by hydrolysis of ATP. In the normal hydrolysis the SERCA protein uses this energy to move calcium ions into the sarcoplasmic reticulum. When capsaicin is present, it alters the conformation of the SERCA, and thus reduces the ion movement; as a result the ATP energy (which would have been used to pump the ions) is instead released as thermal energy.[19]\r\n\r\nThe "heat" of chili peppers was historically measured in Scoville heat units (SHU), which is a measure of the dilution of an amount of chili extract added to sugar syrup before its heat becomes undetectable to a panel of tasters; the more it has to be diluted to be undetectable, the more powerful the variety and therefore the higher the rating.[20] The modern commonplace method for quantitative analysis of SHU rating uses high-performance liquid chromatography to directly measure the capsaicinoid content of a chili pepper variety. Pure capsaicin is a hydrophobic, colorless, odorless, and crystalline-to-waxy solid at room temperature, and measures 16,000,000 SHU.', '2016-08-11 19:01:32'),
(4, 'Zgodovina čilijev', 'Chili peppers have been a part of the human diet in the Americas since at least 7500 BCE. The most recent research shows that chili peppers were domesticated more than 6000 years ago in Mexico, in the region that extends across southern Puebla and northern Oaxaca to southeastern Veracruz, and were one of the first self-pollinating crops cultivated in Mexico, Central and parts of South America.\r\n\r\nPeru is considered the country with the highest cultivated Capsicum diversity because it is a center of diversification where varieties of all five domesticates were introduced, grown, and consumed in pre-Columbian times. Bolivia is considered to be the country where the largest diversity of wild Capsicum peppers are consumed. Bolivian consumers distinguish two basic forms: ulupicas, species with small round fruits including C. eximium, C. cardenasii, C. eshbaughii, and C. caballeroi landraces; and arivivis with small elongated fruits including C. baccatum var. baccatum and C. chacoense varieties.\r\n\r\nChristopher Columbus was one of the first Europeans to encounter them (in the Caribbean), and called them "peppers" because they, like black and white pepper of the Piper genus known in Europe, have a spicy hot taste unlike other foodstuffs. Upon their introduction into Europe, chilies were grown as botanical curiosities in the gardens of Spanish and Portuguese monasteries. Christian monks experimented with the culinary potential of chili and discovered that their pungency offered a substitute for black peppercorns, which at the time were so costly that they were used as legal currency in some countries.\r\n\r\nChilies were cultivated around the globe after Indigenous people shared them with travelers. Diego Álvarez Chanca, a physician on Columbus'' second voyage to the West Indies in 1493, brought the first chili peppers to Spain and first wrote about their medicinal effects in 1494.\r\n\r\nThe spread of chili peppers to Asia was most likely a natural consequence of its introduction to Portuguese traders (Lisbon was a common port of call for Spanish ships sailing to and from the Americas) who, aware of its trade value, would have likely promoted its commerce in the Asian spice trade routes then dominated by Portuguese and Arab traders. It was introduced in India by the Portuguese towards the end of 15th century. Today chilies are an integral part of South Asian and Southeast Asian cuisines.\r\n\r\nThere is a verifiable correlation between the chili pepper geographical dissemination and consumption in Asia and the presence of Portuguese traders, India and southeast Asia being obvious examples.\r\n\r\nThe chili pepper features heavily in the cuisine of the Goan region of India, which was the site of a Portuguese colony (e.g., vindaloo, an Indian interpretation of a Portuguese dish). Chili peppers journeyed from India, through Central Asia and Turkey, to Hungary, where they became the national spice in the form of paprika.\r\n\r\nAn alternate, although not so plausible account (no obvious correlation between its dissemination in Asia and Spanish presence or trade routes), defended mostly by Spanish historians, was that from Mexico, at the time a Spanish colony, chili peppers spread into their other colony the Philippines and from there to India, China, Indonesia. To Japan, it was brought by the Portuguese missionaries in 1542, and then later, it was brought to Korea.\r\n\r\nIn 1995 archaeobotanist Hakon Hjelmqvist published an article in Svensk Botanisk Tidskrift claiming there was evidence for the presence of chili peppers in Europe in pre-Columbian times. According to Hjelmqvist, archaeologists at a dig in St Botulf in Lund found a Capsicum frutescens in a layer from the 13th century. Hjelmqvist thought it came from Asia. Hjelmqvist also said that Capsicum was described by the Greek Theophrastus (370–286 BCE) in his Historia Plantarum, and in other sources. Around the first century CE, the Roman poet Martialis (Martial) mentioned "Piperve crudum" (raw pepper) in Liber XI, XVIII, allegedly describing them as long and containing seeds (a description which seems to fit chili peppers - but could also fit the long pepper, which was well known to ancient Romans).', '2016-08-11 18:59:18');

-- --------------------------------------------------------

--
-- Struktura tabele `blog_users`
--

CREATE TABLE `blog_users` (
  `id_blog_users` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `blog_users`
--

INSERT INTO `blog_users` (`id_blog_users`, `id_users`, `id_blog`) VALUES
(1, 4, 1),
(2, 4, 2),
(3, 4, 3),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Struktura tabele `chillis`
--

CREATE TABLE `chillis` (
  `id_chillis` int(11) NOT NULL,
  `chili_name` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `chili_scoville` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `chili_description` text COLLATE utf8_slovenian_ci NOT NULL,
  `chili_picture_url` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_sorts` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `chillis`
--

INSERT INTO `chillis` (`id_chillis`, `chili_name`, `chili_scoville`, `chili_description`, `chili_picture_url`, `id_users`, `id_sorts`) VALUES
(1, 'Habanero', '350,000', 'The name means "someone or something from La Habana", or as it is known in English, Havana ("b" and "v" being interchangeable phonetically in Spanish). As the Spanish name "La Habana" contains a normal "n" instead of an "ñ", the pepper''s name contains an "n" as well.\r\n\r\nThe demonym in this case is formed using the suffix -ero; demonyms may also be formed with the suffix -eño, such as in the case of jalapeños, which come from Jalapa. During the process of importing "jalapeño" and "habanero" into English, the similarity of the words and their subject matter have led to a hyperforeignism in which the tilde is sometimes incorrectly added to "habanero" resulting in habañero.', 'uploads/chili-2.jpg', 3, 1),
(3, 'Piri piri', '170,000', 'Piri piri (/ˌpiːriˈpiːri/ pir-ree-pir-ree, also spelled peri peri, pili pili),[1] also called African bird''s eye chili, is a cultivar of Capsicum frutescens, one of the sources of chili pepper that grows both wild and domesticated.\r\n\r\nIt is a small member of the Capsicum genus. It grows in Angola, Uganda, Malawi, South Africa, Ghana, Nigeria, Zambia, Zimbabwe, Mozambique, the tropical forests of South Sudan and the highlands of Ethiopia. It was brought to Goa, India by the Portuguese.', 'assets/images/predstavitvena-2.jpg', 3, 2),
(6, 'Scotch bonnet', '350,000', 'Scotch bonnet, also known as scotty bons, bonney peppers or Caribbean red peppers is a variety of chili pepper. It is named for its resemblance to a tam o'' shanter hat. Also called ''Ata rodo'' by Yoruba natives of Nigeria and "Kpakpo shitto" by natives of Accra, Ghana. Found mainly in the Caribbean islands, it is also in Guyana (where it is called the ball-of-fire pepper), the Maldives Islands (where it is called mirus), Panama (Where it is called "Aji Chombo") and West Africa. Most Scotch bonnets have a heat rating of 100,000–350,000 Scoville units. For comparison, most jalapeño peppers have a heat rating of 2,500 to 8,000 on the Scoville scale. However there are completely sweet varieties of Scotch bonnet grown on some of the Caribbean islands, called cachucha peppers.\r\n\r\nThese peppers are used to flavour many different dishes and cuisines worldwide and are often used in hot sauces and condiments. The Scotch bonnet has a sweeter flavour and stouter shape, distinct from its habanero cousin with which it is often confused, and gives jerk dishes (pork/chicken) and other Caribbean dishes their unique flavour. Scotch bonnets are mostly used in West African, Antiguan, Kittitian, Anguilan, Dominican, St. Lucian and St Vincentian, Grenadian, Trinidadian, Jamaican, Barbadian, Guyanese, Surinamese, Haitian and Cayman cuisine and pepper sauces, though they often show up in other Caribbean recipes. It''s also used in other countries like Costa Rica and Panama (Where it is called "Aji Chombo") for caribbean-styled recipes such as "Rice and Peas", "Rondon", "Saus", "Beef Patties" and also "Ceviches".\r\n\r\nFresh, ripe scotch bonnets change from green to colours ranging from yellow to scarlet red.', 'uploads/chili-8.jpg', 4, 3),
(4, 'Malagueta', '100,000', 'Malagueta pepper (Portuguese pronunciation: [malaˈgeta]), a kind of Capsicum frutescens, is a type of chili widely used in Brazil, Portugal, and Mozambique but also used throughout the Caribbean, specially its Spanish speaking countries. It is heavily used in the Bahia state of Brazil. It apparently gets its name from the unrelated melegueta pepper from West Africa (Zingiberaceae).\r\n\r\nIt is a small, tapered, green pepper that turns red as it matures at about 5 cm (2 in) in length. It has a range of 60,000 to 100,000 Scoville units. Two sizes are seen in markets, which sometimes have different names: the smaller ones are called malaguetinha in Brazil and piri piri in Portugal and Mozambique, and the larger ones are called malagueta in Brazil and Portugal. They are not different varieties, just peppers of different maturities from the same plant.', 'uploads/chili-6.jpg', 3, 3),
(7, 'Tabasco', '50,000', 'The tabasco pepper is a variety of chili pepper spices Capsicum frutescens with its origins in Mexico. It is best known through its use in Tabasco sauce, followed by peppered vinegar.\r\n\r\nLike all C. frutescens cultivars, the tabasco plant has a typical bushy growth, which commercial cultivation makes stronger by trimming the plants. The tapered fruits, around 4 cm long, are initially pale yellowish-green and turn yellow and orange before ripening to bright red. Tabascos rate from 30,000 to 50,000 on the Scoville scale of heat levels, and are the only variety of chili pepper whose fruits are "juicy"; i.e., they are not dry on the inside. Tabasco fruits, like all other members of the C. frutescens species remain upright when mature, rather than hanging down from their stems.\r\n\r\nA large part of the tabasco pepper stock fell victim to the tobacco mosaic virus in the 1960s; the first resistant variety (Greenleaf tabasco) was not cultivated until around 1970.', 'uploads/tabasco.jpg', 5, 5);

-- --------------------------------------------------------

--
-- Struktura tabele `comments`
--

CREATE TABLE `comments` (
  `id_comments` int(11) NOT NULL,
  `comment` text COLLATE utf8_slovenian_ci,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_users` int(11) DEFAULT NULL,
  `id_chillis` int(11) DEFAULT NULL,
  `id_blog` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `comments`
--

INSERT INTO `comments` (`id_comments`, `comment`, `date_added`, `id_users`, `id_chillis`, `id_blog`) VALUES
(1, 'dsadas', '2016-08-07 20:03:17', 3, 1, NULL),
(2, 'Ali komentiranje deluje?', '2016-08-07 20:23:33', 3, 1, NULL),
(3, 'yoooooooooo\r\n', '2016-08-07 20:32:14', 3, 2, NULL),
(4, 'nov komentar\r\n', '2016-08-07 20:37:15', 3, 3, NULL),
(5, 'Kjutkan', '2016-08-07 21:28:17', 3, 4, NULL),
(6, 'gašper je bltu', '2016-08-08 12:16:41', 3, 1, NULL),
(7, 'dasds', '2016-08-08 13:01:11', 3, 2, NULL),
(8, 'dsasddasdas', '2016-08-08 17:56:14', 4, 1, NULL),
(9, 'nice chilli brah', '2016-08-08 17:57:42', 3, 6, NULL),
(10, 'Epic blog post', '2016-08-10 20:38:08', 4, NULL, 1),
(11, 'Prvi komentar na tej objavi', '2016-08-11 16:54:43', 4, NULL, 4),
(12, 'Nice post!', '2016-08-11 19:03:45', 5, NULL, 4),
(13, 'Super duper predstavitev', '2016-08-11 19:03:59', 5, NULL, 1),
(14, 'Najboljši čili vseh časov', '2016-08-11 19:08:39', 5, 7, NULL),
(15, 'Omaka je dobila ime po tem čiliju', '2016-08-11 19:11:30', 4, 7, NULL),
(16, 'a to je kaj s piro v sorodu?', '2016-08-11 19:58:20', 6, 3, NULL);

-- --------------------------------------------------------

--
-- Struktura tabele `sorts`
--

CREATE TABLE `sorts` (
  `id_sorts` int(11) NOT NULL,
  `sort_name` varchar(70) COLLATE utf8_slovenian_ci NOT NULL,
  `sort_description` text COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `sorts`
--

INSERT INTO `sorts` (`id_sorts`, `sort_name`, `sort_description`) VALUES
(1, 'Capsicum annuum', 'Capsicum annuum is a species of the plant genus Capsicum native to southern North America and northern South America. This species is the most common and extensively cultivated of the five domesticated capsicums. The species encompasses a wide variety of shapes and sizes of peppers, both mild and hot, ranging from bell peppers to chili peppers. Cultivars are descended from the wild American bird pepper still found in warmer regions of the Americas. In the past some woody forms of this species have been called C. frutescens, but the features that were used to distinguish those forms appear in many populations of C. annuum and there is no consistently recognizable C. frutescens species.'),
(2, 'Capsicum baccatum', 'The C. baccatum species, particularly the AjÃ­ amarillo chili, has its origins in ancient Peru and across the Andean region of South America. It is typically associated with Peruvian cuisine, and is considered part of its condiment trinity together with red onion and cilantro. AjÃ­ amarillo literally means yellow chili; however, the yellow color appears when cooked, as the mature pods are bright orange.\r\n\r\nCultivated baccatum (C. baccatum var. pendulum) is the domesticated pepper of choice of Bolivia, Ecuador, Peru and Chile.'),
(3, 'Capsicum chinense', 'Capsicum chinense, commonly known as "yellow lantern chili", is a species of chili pepper native to the Americas. C. chinense varieties are well known for their exceptional heat and unique flavors. The hottest peppers in the world are members of this species, with Scoville Heat Unit scores of over 1.5 million. Some taxonomists consider them to be part of the species C. annuum, and they are a member of the C. annuum complex. However, C. annuum and C. chinense pepper plants can generally be identified by the number of flowers or fruit per node—one for C. annuum and two to five for C. chinense, though this method is not always correct. The two species can also hybridize and generate inter-specific hybrids.'),
(4, 'Capsicum pubescens', 'Capsicum pubescens is a species of the genus Capsicum (pepper), known as rukutu, ruqutu (Quechua, hispanicized rocoto) and luqutu (Aymara, hispanicized locoto) and in Mexico known as the "Manzano" pepper which means "apple" for its apple-shaped fruit. This species is found primarily in Central and South America, and is known only in cultivation. The species name, pubescens, means hairy, which refers to the hairy leaves of this pepper. The hairiness of the leaves, along with the black seeds, distinguish this species from others. As they reach a relatively advanced age and the roots lignify quickly, sometimes they are called tree chili. Of all the domesticated species of peppers, this is the least widespread and systematically furthest away from all others. It is reproductively isolated from other species of the genus Capsicum. A very notable feature of this species is its ability to withstand cooler temperatures than other cultivated pepper plants, although it cannot withstand frost.'),
(5, 'Capsicum frutescens', 'Capsicum frutescens is a species of chili pepper that is sometimes considered to be part of the species Capsicum annuum. Pepper cultivars of Capsicum frutescens can be annual or short-lived perennial plants. Flowers are white with a greenish white or greenish yellow corolla, and are either insect- or self-pollinated. The plants'' berries typically grow erect; ellipsoid-conical to lanceoloid shaped. They are usually very small and pungent, growing 10–20 millimetres (0.39–0.79 in) long and 3–7 millimetres (0.12–0.28 in) in diameter. Fruit typically grows a pale yellow and matures to a bright red, but can also be other colors. C. frutescens has a smaller variety of shapes compared to other Capsicum species, likely because of the lack of human selection. More recently, however, C. frutescens has been bred to produce ornamental strains, because of its large quantities of erect peppers growing in colorful ripening patterns.');

-- --------------------------------------------------------

--
-- Struktura tabele `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `first_name` varchar(40) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `last_name` varchar(60) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `users`
--

INSERT INTO `users` (`id_users`, `first_name`, `last_name`, `email`, `pass`, `admin`) VALUES
(6, 'Mihela', 'Krepek', 'mihelakrepek@gmail.com', 'c9648faa8cda9cb96bc33a9deb62cc26', 0),
(3, 'Pob', 'Golob', 'pob@golob.si', '211340d1aab430caaadba78431c3e810', 0),
(4, 'Grega', 'Novak', 'grega.novak@gmail.com', '211340d1aab430caaadba78431c3e810', 1),
(5, 'Nima', 'Imena', 'gasper.novak@gmail.com', '211340d1aab430caaadba78431c3e810', 0);

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeksi tabele `blog_users`
--
ALTER TABLE `blog_users`
  ADD PRIMARY KEY (`id_blog_users`);

--
-- Indeksi tabele `chillis`
--
ALTER TABLE `chillis`
  ADD PRIMARY KEY (`id_chillis`);

--
-- Indeksi tabele `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Indeksi tabele `sorts`
--
ALTER TABLE `sorts`
  ADD PRIMARY KEY (`id_sorts`);

--
-- Indeksi tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT tabele `blog_users`
--
ALTER TABLE `blog_users`
  MODIFY `id_blog_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT tabele `chillis`
--
ALTER TABLE `chillis`
  MODIFY `id_chillis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT tabele `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT tabele `sorts`
--
ALTER TABLE `sorts`
  MODIFY `id_sorts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT tabele `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
