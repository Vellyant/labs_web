-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 27 2022 г., 17:13
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: ` list_enterprises`
--

-- --------------------------------------------------------

--
-- Структура таблицы `enterprises`
--

CREATE TABLE `enterprises` (
  `id` int UNSIGNED NOT NULL,
  `photo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'no_image.png',
  `name` varchar(45) NOT NULL,
  `id_region` int UNSIGNED NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `annual_production` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `enterprises`
--

INSERT INTO `enterprises` (`id`, `photo`, `name`, `id_region`, `description`, `annual_production`) VALUES
(1, 'riatom.png', ' ООО ПЗ \"РИАТОМ\"', 3, 'Основное направление деятельности компании «РИАТОМ» - комплексная разработка, производство и сервисное обслуживание автоматики для малой энергетики. \r\n\r\nРазработка ТУ, КД и программного обеспечения, корректировка ЧТД и изготовление опытных образцов проводятся с учетом требований ГОСТов как общепромышленного назначения, так и требований Министерства Обороны (МО) РФ, Правил Российского Морского Регистра судоходства (РМРС) и Российского Речного Регистра (РРР).\r\nВ процессе разработки опытных образцов производится 100% макетирование и математическое моделирование с использованием современных компьютерных технологий.\r\nВся продукция компании «РИАТОМ» имеет высокий технический уровень, изготовлена на современной микропроцессорной элементной базе с использованием современных технологий, включающих поверхностный монтаж радиоэлементов, и успешно конкурирует с импортными аналогами.', 63700000),
(2, 'technotrend.jpg', 'ООО Технотренд', 1, 'ООО «ТЕХНОТРЕНД» является российским производителем экологически безопасного промышленного очистителя «ЭКОАКТИВ» (ТУ 2381-001-27472201-2015), который обеспечивает высокую степень очистки деталей и узлов. Так же является производителем профессиональных моющих средств серии \"КС\" и \"Техноклин\".\r\n\r\n', 3450000),
(3, 'skb_4.png', 'СКБ-4', 78, 'ООО «СКБ-4» – уже более 20 лет поставляет промышленное оборудование и компоненты для предприятий машиностроения, металлургии, нефтегазовой промышленности, железнодорожного транспорта, судостроения, строительства и других промышленных отраслей. «СКБ-4» - ключевой поставщик и постоянный партнер крупнейших российских предприятий: РЖД, АвтоВАЗ, Лукойл, Уралкалий, ЕВРАЗ, Концерн Тракторные заводы и многих других.', 150500000),
(4, 'royal.png', 'ООО \"Роял Финанс\"', 78, 'Предоставляем услуги на получение финансирования для бизнеса:\r\n1. Беззалоговое кредитование бизнеса с господдержкой субъектов МСП на пополнение оборотных средств;\r\n2. Факторинг (открытый/закрытый);\r\n3. Лизинг на оборудование, транспорт и спецтехнику;\r\n4. Кредитование на исполнение контрактов и БГ;\r\n5. Инвестиционное кредитование на развитие бизнеса и материально технической базы;', 84500000),
(5, 'SVV_group.png', 'ООО \"СВВ ГРУПП\"', 78, 'Лизинг на специальных условиях под 0% для юр. лиц и ИП.\r\n\r\nОставьте заявку и мы подберем для Вас лучшие лизинговые условия со 100% одобрением от ведущих банков России.\r\n\r\nОформление напрямую с банком. Никаких комиссий и предоплат.\r\n\r\nСубсидия Минпромторга на лизинг легковых и коммерческих автомобилей, грузовой и специальной техники, оборудования и пр.', 57000000),
(6, 'china_tech.jpg', 'ООО \"Чайна Тэк\"', 40, 'Компания «Чайна Тэк» занимается подбором и поставками промышленного оборудования из Юго-Восточной Азии (КНР,  Сингапур, Республика Корея) с 2018 года.\r\n\r\nАзиатский технологический рынок находится в постоянном динамичном развитии, что позволяет удовлетворить любые производственные потребности, подстроиться под различные финансовые возможности и условия сотрудничества.\r\n\r\nНаши специалисты в России и за рубежом готовы прийти на помощь как в решении масштабных задач, так и мелких повседневных рабочих моментов. Наши основные приоритеты — обеспечение бесперебойной работы и вовлеченность в процессы производства.\r\n\r\nЗаказчикам мы готовы предложить индивидуальный подход на всех этапах сотрудничества – от обсуждения проектов, планов оптимизации производственных процессов до пост-продажного сервиса и консультаций.\r\n\r\nООО «Чайна Тэк» является прямым импортером на территорию Российской Федерации. А это значит, что Ваш заказ будет укомплектованы полным пакетом разрешительной документации – в том числе, надлежащими сертификатами о соответствии.\r\n\r\nМы любим нашу работу и верим, что международное сотрудничество – залог благополучного будущего как экономики всей нашей страны, так и каждого предприятия в частности!', 15550000),
(7, 'pamir.png', 'ООО \"АЛЮМИНИЕВЫЕ КОНСТРУКЦИИ\"', 1, 'ООО\"АЛЮМИНИЕВЫЕ КОНСТРУКЦИИ\" занимается производством и разработкой легких и удобных в использовании алюминиевых конструкций ПРОФЕССИОНАЛЬНОЙ КАТЕГОРИИ ЭКСПЛУАТАЦИИ, которые используются при проведении строительных и монтажных работ , на складах и в промышленном производстве. Мы выпускаем большой ассортимент стандартной продукции, такой как : стремянки передвижные , лестницы специальные  различного назначения, вышки-тура, леса строительные алюминиевые площадки навесные для полувагонов и лестницы для полувагонов, подмости (подставки ), лестницы-платформы, площадки навесные на строительные конструкции и др .ООО\"АЛЮМИНИЕВЫЕ КОНСТРУКЦИИ\" имеет конструкторский отдел, который занимается разработкой  конструкторской и технической документации для производства нестандартного оборудования.', 145500000),
(8, 'no_image.png', 'OOO ЮСянь', 64, 'Китайская  машиностроительная компания «ЮСянь», однa из ведущих  специальных  производители и поставщиков оборудования и и строительные материалы,профессионально занимается проектированием,разработким,производством и экспортом станков с десятилетним опытом.Оборудование,которое можно в нашем заводе производить , включает профилегибочные станки для производства строительных материалов, как:станок для производства профнастила, металлочерепицы,конька кровли; профилегибочная машина для стеновых и дверных панелей; оборудование  для изготовления профиля для гипсокартона;станок для изготовления сварных сеток и др.Мы ищем партнеров со всего мира, таких как Россия, СНГ и т.д. для совместного развития и прогресса и достижения взаимовыгодного сотрудничества.', 95000000),
(9, 'no_image.png', 'ООО СК', 78, NULL, 35000000),
(10, 'no_image.png', 'Чехов и Ко', 78, NULL, 9100000),
(11, 'no_image.png', 'ИП Татьянин', 29, 'Торговля новым и б.у. оборудованием и запчастями. \r\n', 19000000),
(12, 'avanta_group.jpg', 'ООО АВАНТА-ГРУПП', 50, NULL, 85000000),
(13, 'cilco.png', 'ООО \"СИЛКО ИНДУСТРИЯ\"', 78, 'Производство и поставка промышленного оборудования, станки и запасных частей.\r\nМеталлопродуция по европейским стандартам. ', 45600000),
(14, 'global_74.png', 'ГЛОБАЛ74', 70, 'ООО \"ГЛОБАЛ 74\" - развивающаяся многопрофильная организация с производственным опытом более 10 лет на российском рынке.\r\nЗа годы успешной работы был реализован сложный инженерный проект - промышленное производство электронагревателей, теплового оборудования, комплектующих для грузовых авто, логистике и продажах.\r\nНаша компания сотрудничает с одним из крупнейших заводов Китая дает вам возможность купить оборудование и запчасти с завода с сохранением гарантийного срока и по привлекательным ценам.\r\nСотрудничество с нами принесет вам четкое понимание и бесперебойную поставку оборудований от прямых производителей.\r\nКоманда наших мастеров с удовольствием осуществит установку согласно всем правилам и требованиям, научит управлять и продуктивно взаимодействовать с данным оборудованием, быстро произведут замену из оригинальных запчастей, что благополучно скажется на времени простоя.\r\nЕсли запчасти или оборудование не окажутся в наличии на нашем складе, логисты профессионально проложат маршрут, подберут транспорт и доставят вам нужный товар в кротчайшие сроки и по приятной цене. Мы ценим каждого клиента и дорожим своей репутацией.', 18500000),
(15, 'izmbt.jpg', 'ООО ТК \"ИЗМБТ\"', 7, 'Ишимбайский завод мобильной и буровой техники является производителем установок для освоения и бурения нефтяных и газовых скважин А50М,А5-40(АПРС-40),УПА-60/80 и УПА-80М', 650000000),
(16, 'transsertico.png', 'Транссертико', 78, NULL, 7500000),
(17, 'stm.jpg', 'СТМ-Оскол', 8, 'Наша компания является производителем блочно-модульных и встроенных котельных, блочных тепловых пунктов и блочных парогенераторов, сушильных установок и прочего энергетического оборудования. Оборудование поставляется полной заводской готовности и не требует специального разрешения на транспортировку', 6100000),
(18, 'avangard.png', 'ПКФ Авангард', 78, 'ООО “ПКФ АВАНГАРД” с 1992 года успешно работает на российском рынке грузоподъёмных средств и оборудования и занимает лидирующие позиции в этом секторе.\r\n\r\nООО \"ПКФ АВАНГАРД\" является серьёзным и надёжным поставщиком оборудования и всех видов приспособлений для грузоподъёмных работ. Значительная часть продукции изготавливается на собственном производстве, что позволяет поставлять товар в самые короткие сроки.\r\n\r\nНаша компания располагает собственной производственной базой, позволяющей в кратчайшие сроки выполнять заказы на изготовление канатных, цепных и текстильных строп грузоподъёмностью до 100 тонн. Поставляем все виды комплектующих для сборки строп: звенья, крюки, коуши, скобы, стальные канаты, грузовые цепи класса прочности 8 и 10. В комплектацию строп по желанию заказчика могут быть включены траверсы, захваты и другие грузовые приспособления для металла.\r\n\r\nМы работаем с юридическими и физическими лицами.', 47890000),
(19, 'PK_MKL_.png', ' ПК МКЛ', 1, 'Производство, монтаж, доставка..Проектирование (можно заказать отдельно проект). \r\nСобственная обработка металла, производство сэндвич-панелей, профнастила, проектная документация, что снижает стоимость конструкций для наших клиентов!\r\nНесущий каркас конструкции выполняется из качественного металла, используется холоднокатаный швеллер, шаги обрешеток-из профильной трубы.\r\nРабота по России, РБ,...\r\nБыстровозводимые здания (без сварочных работ., сборка конструкций при помощи болтов, срок службы наших зданий до 30 лет!) \r\nТиповые конструкции. Индивидуальные проекты.\r\nАнгары (холодные и теплые), склады, торговые павильоны, \r\nгаражи, автостоянки, автомойки, автобоксы, автосервисы, СТО, навесы, пристройки, возведение этажей, цеха, пилорамы, рыбное производство, офисы,,,,,\r\nДля утепления используются сэндвич-панели, листы поликарбоната, гипсокартон, профлист, и др.,\r\nфундамент: блочный, монолитный свайный, ростверк..\r\nВыполняем весь цикл работ! Устанавливаем окна, двери, ворота, коммуникации.\r\nДоставка осуществляется автотранспортом.', 48900000),
(20, 'uranus.png', 'ООО «РУСПРОМТЕХСНАБ»', 78, 'Искробезопасный инструмент URANUS из бронзовых сплавов.\r\n\r\nПрименение:\r\nнефтегазовые и нефтехимические предприятия и объекты;\r\nшахты, верфи;\r\nтрубопроводы, газопроводы, нефтепроводы;\r\nкислородные станции;\r\nпожароопасные и взрывобезопасные объекты;\r\nаэропорты.\r\nМы поддерживаем постоянный ассортимент искробезопасного инструмента на складе. Отдел логистики обеспечивает оперативную доставку при заказе импортного инструмента.', 3520000);

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
(1, 'Санкт-Петербург и область'),
(2, 'Адыгея'),
(3, 'Алтайский край'),
(4, 'Амурская обл.'),
(5, 'Архангельская обл.'),
(6, 'Астраханская обл.'),
(7, 'Башкортостан(Башкирия)'),
(8, 'Белгородская обл.'),
(9, 'Брянская обл.'),
(10, 'Бурятия'),
(11, 'Владимирская обл.'),
(12, 'Волгоградская обл.'),
(13, 'Вологодская обл.'),
(14, 'Воронежская обл.'),
(15, 'Дагестан'),
(16, 'Еврейская обл.'),
(17, 'Ивановская обл.'),
(18, 'Иркутская обл.'),
(19, 'Кабардино-Балкария'),
(20, 'Калининградская обл.'),
(21, 'Калмыкия'),
(22, 'Калужская обл.'),
(23, 'Камчатская обл.'),
(24, 'Карелия'),
(25, 'Кемеровская обл.'),
(26, 'Кировская обл.'),
(27, 'Коми'),
(28, 'Костромская обл.'),
(29, 'Краснодарский край'),
(30, 'Красноярский край'),
(31, 'Курганская обл.'),
(32, 'Курская обл.'),
(33, 'Липецкая обл.'),
(34, 'Магаданская обл.'),
(35, 'Марий Эл'),
(36, 'Мордовия'),
(37, 'Мурманская обл.'),
(38, 'Нижегородская (Горьковская)'),
(39, 'Новгородская обл.'),
(40, 'Новосибирская обл.'),
(41, 'Омская обл.'),
(42, 'Оренбургская обл.'),
(43, 'Орловская обл.'),
(44, 'Пензенская обл.'),
(45, 'Пермский край'),
(46, 'Приморский край'),
(47, 'Псковская обл.'),
(48, 'Ростовская обл.'),
(49, 'Рязанская обл.'),
(50, 'Самарская обл.'),
(51, 'Саратовская обл.'),
(52, 'Саха (Якутия)'),
(53, 'Сахалин'),
(54, 'Свердловская обл.'),
(55, 'Северная Осетия'),
(56, 'Смоленская обл.'),
(57, 'Ставропольский край'),
(58, 'Тамбовская обл.'),
(59, 'Татарстан'),
(60, 'Тверская обл.'),
(61, 'Томская обл.'),
(62, 'Тува (Тувинская Респ.)'),
(63, 'Тульская обл.'),
(64, 'Тюменская обл. и Ханты-Мансийский АО'),
(65, 'Удмуртия'),
(66, 'Ульяновская обл.'),
(67, 'Уральская обл.'),
(68, 'Хабаровский край'),
(69, 'Хакасия'),
(70, 'Челябинская обл.'),
(71, 'Чечено-Ингушетия'),
(72, 'Читинская обл.'),
(73, 'Чувашия'),
(74, 'Чукотский АО'),
(75, 'Ямало-Ненецкий АО'),
(76, 'Ярославская обл.'),
(77, 'Карачаево-Черкесская Республика'),
(78, 'Москва и Московская обл.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `enterprises`
--
ALTER TABLE `enterprises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_region` (`id_region`) USING BTREE;

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `enterprises`
--
ALTER TABLE `enterprises`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `enterprises`
--
ALTER TABLE `enterprises`
  ADD CONSTRAINT `foreign_key_region` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
