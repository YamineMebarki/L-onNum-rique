-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 10 Novembre 2019 à 15:42
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--
CREATE DATABASE IF NOT EXISTS `dbs213189` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbs213189`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `image`, `name`, `content`, `create_at`, `category_id`) VALUES
(1, 'Excepturi architecto eum qui cumque repellat quaerat at in.', 'https://lorempixel.com/640/480/?40463', 'Xavier Picard-Martins', '<p>Quisquam ipsum vel amet modi assumenda quae iste. Sit et est est est voluptatem qui commodi. Porro ratione dicta sapiente minima. Totam impedit ea occaecati.</p><p>Error corporis amet vero officiis. Sed odit deserunt eius aut eos voluptates ut. Est facilis ut harum cumque molestias enim.</p><p>Excepturi quia beatae et hic eum quia iusto. Ipsam voluptas et incidunt dolor velit laudantium harum.</p><p>Non ut porro perferendis voluptatem voluptatem magnam sit. Maxime modi consectetur vel et quam sunt aspernatur. Nulla itaque eos quia aut. Nemo autem saepe quibusdam voluptas.</p><p>Non et dolorem omnis quia. Fugiat maiores quisquam exercitationem rerum qui. Praesentium eligendi tenetur rerum esse eum repellendus et quibusdam. Consequatur nam eum atque vitae quisquam.</p>', '2019-06-24 22:29:39', 1),
(2, 'Illum quis ut earum ut repellat recusandae neque quaerat.', 'https://lorempixel.com/640/480/?10279', 'Denis-Nicolas Chartier', '<p>Tempore iure cum eveniet tempora numquam. Temporibus nostrum architecto mollitia aut similique omnis. Aperiam deleniti iusto sunt similique et molestias rerum. Iste repellat nam rerum eos consequatur maiores.</p><p>Odio sed itaque illum velit porro aut. Unde architecto maxime quam et rerum.</p><p>Ipsum autem assumenda et doloremque corporis. Numquam non et accusantium et et. Quod doloremque ut aliquid. Et enim illum eum quis.</p><p>Delectus aut vitae explicabo possimus earum. Officia quia nobis explicabo molestiae tempore maiores. Cumque nostrum sed officia sequi iste beatae et sunt. Sed rerum labore voluptatibus consequatur iste. Ipsam ipsam impedit quod pariatur ea.</p><p>Aut fuga dolorem cumque quia animi. Aut illo voluptate velit nihil qui. Sequi totam deserunt rerum iste dolor quas. Itaque qui voluptatem expedita esse occaecati quas.</p>', '2019-05-14 07:48:29', 1),
(3, 'Minus adipisci occaecati error maiores.', 'https://lorempixel.com/640/480/?36466', 'Émilie-Christelle Pierre', '<p>Reprehenderit unde fugiat accusantium ut itaque. Iste cupiditate dolorem sint hic dolores. Ea aspernatur odio quo veniam voluptates harum.</p><p>Fuga aut accusantium ut aut voluptas voluptatem qui. Dolores tempora corrupti rerum nemo quas ea unde. Exercitationem accusantium odit id quod. Laborum sapiente qui consequatur voluptas eos quaerat veniam.</p><p>Aut accusantium nihil nihil officiis natus qui. Aspernatur ut consequuntur magni nobis. Veniam qui voluptates qui nostrum culpa ea.</p><p>Dicta officia sit omnis. Omnis voluptate quia quaerat unde. Porro possimus cum inventore et molestias explicabo.</p><p>Est perspiciatis repudiandae labore neque. Voluptatem quis nesciunt nobis ullam non. Alias totam est qui laboriosam. Quae aut quo rem illo cupiditate molestias.</p>', '2019-09-10 15:12:55', 1),
(4, 'Repellat sit vel quasi dolore occaecati veritatis dignissimos.', 'https://lorempixel.com/640/480/?78136', 'Louise-Amélie Ramos', '<p>Sed nemo aut voluptatibus consectetur velit nisi. Vitae ex perspiciatis quam totam tempore. Aliquam iusto veniam est est impedit amet. Natus at illum qui aut quaerat dolorem.</p><p>Cupiditate cupiditate culpa ut ipsum. Quia non dignissimos sed ipsum maxime quam consequuntur. Aut quia nesciunt natus sed hic quis et.</p><p>Pariatur assumenda accusamus culpa et ut veritatis velit. Fugit facilis atque rerum quaerat est autem. Voluptas aspernatur voluptatem eligendi consequuntur perferendis enim reprehenderit neque.</p><p>Labore accusamus dolorum eveniet quibusdam nihil commodi aliquam. Officia sed quibusdam voluptas quos officia ab sed. Perferendis vel omnis et aut officiis impedit molestias. Vitae id numquam neque necessitatibus ea et voluptatem. Omnis voluptatem nulla in.</p><p>Beatae non repudiandae minima nulla vel et. Culpa fugit totam asperiores et praesentium aut et.</p>', '2019-08-16 15:04:32', 1),
(5, 'Ducimus ipsam dolorum ea doloribus blanditiis.', 'https://lorempixel.com/640/480/?96355', 'Léon-Xavier Bernier', '<p>Est vel labore ipsum unde consectetur exercitationem facilis. Autem vel et numquam animi totam et adipisci. Eaque eum eveniet repellat sed veniam temporibus.</p><p>Sed quo est est maxime. Itaque id voluptas reprehenderit atque placeat quisquam quae nihil. Ut repudiandae ea autem est quae. Inventore minima dolorem eveniet laudantium nemo maiores dolor.</p><p>Est corporis maiores quo eum. Reprehenderit blanditiis nam omnis facilis excepturi quisquam. Earum adipisci quasi fugit iusto autem officia rem dicta. Sapiente laboriosam eum tenetur omnis quis.</p><p>Ipsam nam expedita sequi voluptas dignissimos qui. Velit velit neque corrupti nemo possimus rem. Dolorum molestiae velit iusto.</p><p>Commodi sequi distinctio eos provident voluptatem dolorem amet. Aut est soluta consequuntur iusto ea voluptatum maxime. Iure cupiditate porro cum eos. Ut eum eum alias recusandae amet tempora et quas.</p>', '2019-06-19 10:53:19', 2),
(6, 'Fugit illum modi eum quis reiciendis inventore consequatur.', 'https://lorempixel.com/640/480/?71554', 'Stéphanie Lebreton', '<p>Nisi asperiores modi et molestiae. Natus exercitationem nobis ipsam eos rerum rem voluptatibus. Blanditiis aut dolorum incidunt deleniti quis.</p><p>Tempore error voluptatem et debitis. Corrupti nisi eligendi repellat tempore voluptatem voluptatem doloremque. Reiciendis rerum voluptatum molestiae veniam.</p><p>Quasi quis consequuntur consequuntur et suscipit nemo ut eaque. Ut nulla ab enim aut aut non odit. Excepturi dolorem et et.</p><p>Autem quia explicabo hic dolores molestiae possimus consequatur. Sed nemo tempore quibusdam voluptatem facere. Temporibus consequatur repellat sequi sed quia. Error tempore est fugiat temporibus.</p><p>Nesciunt est est quia quis ipsa. Et accusamus eum tenetur voluptatum distinctio qui mollitia. Ducimus commodi sint cum. Nisi facilis hic nostrum.</p>', '2019-07-10 16:59:14', 2),
(7, 'Ut distinctio officiis ratione dolor sunt hic.', 'https://lorempixel.com/640/480/?73142', 'Lorraine Legros', '<p>Velit quas voluptatum eos vel ea. Ut repellat quisquam eum illo. Dolores fugit blanditiis cupiditate velit.</p><p>Voluptates et est non molestiae esse. Voluptatem id corrupti aspernatur praesentium est earum. Omnis facilis sunt enim ipsa corporis ad. Quaerat labore eius ab soluta ea recusandae.</p><p>Adipisci quidem inventore consequatur blanditiis vel nam. Omnis magni velit et earum est officiis molestiae sapiente. Rem qui nisi quia accusamus.</p><p>Totam qui magni labore quia dolorem magni consequuntur nihil. Est quo quo quidem quas voluptatem. Dolores facilis quos dignissimos.</p><p>Aspernatur quia assumenda qui facilis. Repudiandae vel qui sunt eum optio. Placeat asperiores sed veniam quo accusamus distinctio. At ut perspiciatis neque dolore dolor architecto sit ea.</p>', '2019-10-24 00:33:24', 2),
(8, 'Perspiciatis deleniti recusandae veritatis exercitationem eius itaque.', 'https://lorempixel.com/640/480/?83161', 'Benjamin Bonneau', '<p>Dignissimos nam cupiditate voluptas qui eum accusantium nisi. Qui in laborum distinctio dolores ipsa est est. Recusandae quod aut minus id quos dolorum. Et quaerat voluptas aspernatur ut facilis vel. Commodi vel sit laboriosam ut.</p><p>Dignissimos sit autem aspernatur facere quasi. Suscipit quas deleniti consectetur voluptatem ab reiciendis. Corporis ratione aut qui sint ut.</p><p>Vel non ea libero est laudantium. Iusto ullam enim eum consequuntur et nulla mollitia.</p><p>Sint repudiandae eligendi quod rem. Voluptatem error facilis repellat voluptatem rerum ad magni. Enim omnis sit quidem eaque et cum. Debitis quo voluptatem labore iusto enim dolores.</p><p>Consequatur natus deleniti aperiam consequatur voluptatem non aliquam ad. Exercitationem assumenda voluptas assumenda ipsa. Iusto dolore dolores qui unde. Quia quam vitae harum laudantium voluptatibus.</p>', '2019-06-19 08:18:30', 2),
(9, 'Non quos fuga ipsum reprehenderit ab.', 'https://lorempixel.com/640/480/?49082', 'Henriette-Marie Dufour', '<p>Fugit ut qui velit quo occaecati consectetur doloremque. Exercitationem reprehenderit voluptatem doloremque aut illo qui. Eius est vero ipsam dolores quis voluptatem.</p><p>Illum blanditiis ea et distinctio. Natus odit velit nulla sint voluptatibus qui. Et error eveniet vitae.</p><p>Alias ea quibusdam ratione enim rem. Facilis vel aspernatur quia sit.</p><p>Officiis quas vel voluptatibus molestiae. Asperiores cum magni eum in nesciunt facilis. Libero impedit dicta atque optio rerum quo. Vitae itaque ducimus quas eveniet vero explicabo provident.</p><p>Accusamus debitis neque est nisi. Ex suscipit sunt consectetur autem accusantium ullam. Alias exercitationem ut quae.</p>', '2019-05-19 15:38:55', 3),
(10, 'Molestias amet rerum dolor omnis.', 'https://lorempixel.com/640/480/?56898', 'Amélie Brun', '<p>Error similique laudantium quod harum excepturi. Quia quas ducimus aliquam eius. Perspiciatis est eveniet quia culpa sit provident ex. Commodi blanditiis fugit sit tempora. Voluptas id illum vitae corporis.</p><p>Qui modi veniam qui temporibus molestiae. Temporibus veritatis aut possimus nam inventore non. Maxime a illo recusandae magni dolorem et.</p><p>Molestiae eum voluptatem aperiam voluptatibus saepe voluptates. In qui nam adipisci reprehenderit provident modi. Atque dignissimos harum natus rerum. Tenetur architecto et numquam dolorem sint voluptatibus neque.</p><p>Consequatur quod dicta qui laboriosam sit enim dolor. Velit maxime nostrum ex ab ullam eveniet accusantium vel. Nemo dolor aliquam velit autem placeat. Quibusdam fugiat ut placeat facere nemo.</p><p>Itaque et consequatur impedit iure expedita ipsa. Et commodi voluptates placeat tempore. Voluptatem voluptas blanditiis nisi adipisci harum debitis ab.</p>', '2019-06-24 02:03:48', 3),
(11, 'Aut aut deleniti neque nesciunt.', 'https://lorempixel.com/640/480/?99861', 'Anaïs du Brun', '<p>Occaecati temporibus vitae earum. Eveniet id sint dolorem autem quis officia. Consequatur recusandae blanditiis mollitia dolores dignissimos quasi sunt. Omnis dolorem incidunt aut ea id.</p><p>Expedita ipsum iusto totam earum dolores ea. Aut sint quos sunt aut unde.</p><p>Nam delectus cupiditate est eum veritatis. Distinctio voluptatem iusto maiores autem alias ipsa quasi. In accusantium aliquid saepe ut autem. Sit corrupti ut minima quos odit neque quia ullam.</p><p>Cupiditate doloremque omnis et. Sed perspiciatis velit et et. Culpa necessitatibus rerum molestiae nobis velit sunt illum animi. Et asperiores quasi sunt hic aut. Est et modi eos delectus.</p><p>Id dolorem voluptatem optio quae dolorem qui. Sit placeat magni consequatur quidem. Magni qui cumque odio quis porro maiores unde. Consequuntur quia temporibus amet et voluptatibus. Voluptates incidunt quasi voluptatem.</p>', '2019-06-25 03:22:18', 3),
(12, 'Dolorem aut explicabo ad dignissimos qui et.', 'https://lorempixel.com/640/480/?29843', 'Adrienne Seguin', '<p>Aut et accusantium neque doloribus. Delectus cupiditate facilis sint nihil. Quidem natus labore voluptatibus molestiae odio vel ipsum.</p><p>Maxime quae sint minima nemo consectetur. Hic voluptatem omnis illo adipisci itaque natus animi.</p><p>Ea nemo veritatis soluta et quaerat soluta. Dolores magnam illo quasi vel maxime alias illo iusto. Quo ut repudiandae voluptatem modi voluptas non. Itaque vel provident voluptate perspiciatis et beatae in.</p><p>Earum corporis officiis quis laboriosam neque. Aut est possimus quas velit quisquam explicabo esse. Hic quaerat ratione in dolores praesentium perferendis iure.</p><p>Aut illo similique a ut corrupti asperiores. Possimus rerum doloribus debitis magnam tenetur. Sit nihil molestiae error molestias quasi modi. Magnam eos dolorum dolore ipsa alias.</p>', '2019-10-18 14:24:41', 4),
(13, 'Id debitis aut nihil vitae optio quis dolores.', 'https://lorempixel.com/640/480/?56345', 'Laure Renard', '<p>Ullam explicabo dolores eos sed. Error ea quia rerum necessitatibus odit est est quisquam. Quo molestiae et enim itaque adipisci. Animi molestiae voluptatibus eum optio.</p><p>Veniam omnis unde nulla qui. Tenetur ipsam eaque a. Ipsam et qui ipsum blanditiis.</p><p>Quia ipsam in illo vitae voluptatem vitae delectus. Perferendis enim possimus modi sunt qui libero. Non et totam optio.</p><p>Possimus tenetur deserunt atque nobis. Voluptatum rerum sit eveniet quam vero veniam illo. Rerum sit saepe omnis eveniet cum. Est aut dolor harum tempore.</p><p>Vel quia eos consequuntur aut. Et quisquam enim maiores beatae. A iste aliquam dolore sequi nemo. Quo delectus et rem nisi libero.</p>', '2019-05-19 14:55:25', 4),
(14, 'Nemo enim laborum omnis voluptatum.', 'https://lorempixel.com/640/480/?80694', 'Susan Bousquet-Gallet', '<p>Deserunt assumenda quo alias sequi. Accusantium fuga est fugiat commodi quasi rerum molestiae laboriosam.</p><p>Excepturi sunt commodi cumque quia quam explicabo. Sunt ut voluptas omnis quis doloribus inventore temporibus. Aut deserunt necessitatibus ut velit eaque animi. Dolorem asperiores doloremque id et omnis voluptatem illo asperiores.</p><p>Laudantium temporibus aut qui delectus. Doloribus sequi quibusdam totam aspernatur fugiat ex dolores. Voluptatem qui et qui ullam.</p><p>Eveniet dolor quidem impedit cum fuga occaecati sint. Repellendus delectus quia consectetur velit. Culpa impedit nemo esse cumque aut qui.</p><p>Consequuntur et et beatae excepturi reiciendis corrupti nesciunt. Dolores laborum et quia qui molestias. Voluptas excepturi suscipit ut corrupti iste.</p>', '2019-08-12 01:00:56', 4),
(15, 'Mon Article', 'http://yamine-mebarki.com/assets/img/myAvatar.png', 'yms', 'aie aie aie', '2019-11-05 14:26:17', 2),
(16, 'moi', 'http://yamine-mebarki.com/assets/img/portrait.png', 'yms', 'ahahahah', '2019-11-05 14:28:44', 1);

-- --------------------------------------------------------

--
-- Structure de la table `article_like`
--

CREATE TABLE `article_like` (
  `id` int(11) NOT NULL,
  `article_id_id` int(11) DEFAULT NULL,
  `user_id_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `title`, `content`) VALUES
(1, 'sexe', 'Nemo perferendis in ut eligendi unde. Et voluptatem non libero nemo. Reiciendis et officia voluptatem quis molestias.'),
(2, 'adultere', 'Soluta blanditiis recusandae vel. Sed ab dignissimos dignissimos ut ut. Porro animi unde voluptas quasi. Qui quasi natus quaerat rem pariatur aut. Quisquam unde aut vel quia ut neque voluptatem.'),
(3, 'anal', 'Ea perferendis consequatur aliquid est facilis. Consequatur omnis velit doloremque suscipit cum ut dolorum. Voluptas placeat aspernatur maiores eum doloremque est unde aut. Aut sunt illum qui aut.'),
(4, 'bucal', 'Nobis rem debitis vel perspiciatis quae ducimus. Hic alias rem consequatur soluta.');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `stats` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id`, `article_id`, `author`, `content`, `created_at`, `stats`) VALUES
(2, 15, 'yms', 'salut toi ca va ?', '2019-11-05 14:26:26', 1);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20191031121255', '2019-11-05 13:15:36'),
('20191031174938', '2019-11-05 13:15:36'),
('20191101140436', '2019-11-05 13:15:38'),
('20191101193225', '2019-11-05 13:15:38'),
('20191103194729', '2019-11-05 13:15:40');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `age`) VALUES
(9, 'yms', 'dzaidzai@hotmail.fr', '$argon2id$v=19$m=65536,t=4,p=1$asNzlOuEVlqC3tGiCoeT0g$OhnX7ubqgRd74Ic/YOrdgjMArzWTilXyBdFmyIgAUcI', 'admin', 27),
(11, 'jessica', 'jess@ayle.fr', '$argon2id$v=19$m=65536,t=4,p=1$aIMy2ZmTMtfv2oSyiN/9PQ$r9RHe4Q7e3jNeaKoor2H4ONfDE8i4ml95eU5f2jE9Pw', 'user', 29);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E6612469DE2` (`category_id`);

--
-- Index pour la table `article_like`
--
ALTER TABLE `article_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1C21C7B28F3EC46` (`article_id_id`),
  ADD KEY `IDX_1C21C7B29D86650F` (`user_id_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526C7294869C` (`article_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `article_like`
--
ALTER TABLE `article_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E6612469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `article_like`
--
ALTER TABLE `article_like`
  ADD CONSTRAINT `FK_1C21C7B28F3EC46` FOREIGN KEY (`article_id_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_1C21C7B29D86650F` FOREIGN KEY (`user_id_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
