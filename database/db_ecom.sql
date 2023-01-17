-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 11:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `title`, `slug`, `short_description`, `long_description`, `blog_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Molestias hic qui aut et animi.', 'Assumenda eligendi ea labore quod et eius sunt.', 'assumenda-eligendi-ea-labore-quod-et-eius-sunt', 'Rerum aspernatur ab necessitatibus dicta. Aut autem ut voluptatum nobis vitae dolores. Iste odit et ut autem repellat non.', 'Necessitatibus aperiam debitis numquam tenetur. Beatae incidunt ut facere tempore quos explicabo nihil. Atque commodi id excepturi eius culpa excepturi commodi neque. Aliquid ut ad incidunt modi eum. Hic amet et ea fugit corrupti non inventore. Tempora quia qui dolores et quidem quia. Laudantium id dolore et velit sed facere. Est animi et pariatur recusandae a. Vitae tempora quos dignissimos molestias itaque et tempore. Excepturi eos non iure qui odio architecto. Aliquam molestiae aut quia pariatur sed sunt. Culpa animi eos ipsa unde voluptatibus consequuntur quo quia. Ea ab qui quo nisi. Aut laborum est ad dolorem dolor a. Odio quaerat quia sint fugiat. Voluptas voluptatem officiis quidem quis ipsam. Possimus sint et provident quisquam placeat quos. Fugit ratione tenetur neque facere quae sapiente vero ut. Reprehenderit dolorem consequatur aspernatur sed voluptatem. Et consequatur accusamus tenetur. Veritatis itaque suscipit qui est ipsam harum. Molestiae sed error accusantium delectus libero. Consequatur rerum ab ipsa vel porro quos cum. Est id dignissimos sed ut sed. Voluptas inventore ratione veniam facere quos. Doloribus sunt voluptatem aliquam est sit quam ad. Asperiores qui non eius veritatis ut sed id. Aperiam incidunt qui placeat deleniti. Reprehenderit sequi non quas. Id soluta et reprehenderit harum et quia ipsa. Dolorum aut expedita voluptatem. Aut quia minus tempora esse. Dolore et numquam et. Magnam autem officiis culpa rerum odio praesentium. Quia dolores impedit distinctio velit recusandae et hic. Dolorem minus occaecati et deleniti quibusdam nobis. Id distinctio non nobis impedit veritatis. Nesciunt quia praesentium qui nulla quia iure eveniet. Ut et placeat sed esse omnis fugiat molestiae. Corrupti corporis sit asperiores eos nemo sunt ut. Ab doloribus voluptatem quasi corrupti omnis doloremque et. Consequatur consectetur dolore tempora ipsa. Dignissimos qui qui odit maxime. Iusto velit minus quod corrupti. Non magni neque aut laborum minus. Iste tenetur repellat eveniet aperiam ipsum voluptate. Cupiditate adipisci id possimus autem dicta ratione. Minima iure adipisci voluptatem dicta aut. Explicabo fugiat sapiente eius voluptate doloribus. Sit atque nihil repudiandae ut ut. Laboriosam eum fugiat earum earum eum. Doloremque suscipit qui eaque voluptatem dolor. Officia nobis voluptatem possimus. At ut qui veniam odio est. Et similique assumenda quia qui aspernatur. Molestiae molestias assumenda eos nam nulla repellendus suscipit. Rerum qui vitae labore quaerat quo dolor quae. Reiciendis dolore et qui qui sed. Et non praesentium ex aut maiores. Ipsa molestiae quia maxime. Nulla unde omnis et eos nulla sequi itaque. Ex deserunt cum similique harum recusandae reprehenderit. Nostrum sint in ipsa fugiat alias et quo nihil. Rem ut optio dolorum.', 'blog_image.jpg', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(2, 'Saepe beatae voluptatem doloremque.', 'Voluptatum vero eos deserunt dignissimos sint qui aliquam.', 'voluptatum-vero-eos-deserunt-dignissimos-sint-qui-aliquam', 'Quia error et sit expedita impedit et non. Enim eum dolorum est nemo eos expedita iusto. Corporis porro harum laudantium veritatis voluptas.', 'Sed ut veritatis nobis inventore maiores eos. Nisi tempore commodi inventore quaerat expedita. Non autem blanditiis eligendi et. Est ullam sapiente neque. Similique molestiae excepturi aut nobis laborum. Eum provident ut voluptas quis. Numquam ea dolores quidem qui maiores fuga. Nesciunt quis ullam eos qui animi tempore ipsam. Dolor at ipsam eum eligendi placeat earum qui. Ipsa nihil asperiores sed illum enim. Dolore ut in voluptatem nesciunt. Placeat vel tempore libero quas officiis sequi dolores. Est a non numquam doloremque voluptas et. Et tempore corrupti ducimus qui enim. Reprehenderit nobis vitae quia ut est ea et. Aut nemo quo id enim maiores. Ut voluptates odio consequatur ducimus perferendis. Laudantium et velit animi consequatur similique rerum animi. Qui suscipit ipsa dolorem omnis cupiditate cupiditate. Minus vero ut amet omnis aut distinctio aliquam. Dolores provident rerum vel doloremque dolore voluptas harum vitae. Esse nemo provident voluptatem repudiandae. Et autem facilis sed fuga consequuntur excepturi. Nobis qui est eaque. Dolore reiciendis blanditiis qui natus dignissimos laudantium pariatur assumenda. Fugit aperiam aut eum sed nesciunt tempora. Dolor minima velit quia eum minus commodi accusamus. Enim quaerat accusamus itaque animi. Veritatis ratione voluptate consequatur autem magni. Temporibus quas ut et qui est. Voluptas itaque iure eveniet quae. In voluptatem illo voluptatum excepturi alias. Tempora et ut iusto eaque assumenda qui eos ea. Saepe nostrum omnis omnis unde blanditiis id expedita. Provident optio quo unde qui. Itaque quas eos architecto debitis. Et natus enim quia debitis soluta. Aliquam illo consectetur ea. Autem sed porro quibusdam. Hic quo non blanditiis. Rem non culpa excepturi ullam velit. Veritatis vel ut iure quo itaque dolorum animi possimus. Eum ab rem minima consequatur inventore. Magnam vitae animi itaque officia ullam quia. Quidem tempore sed explicabo omnis. Sunt consequuntur quas totam dolorem. Iure sit ducimus quam. Repudiandae quia non eligendi et est repellendus sequi. Aut repudiandae et voluptatem deleniti est corporis sit. Et laborum laborum ullam in animi officia. Incidunt maxime et itaque nisi. Error neque sunt doloribus ipsa nihil aliquid dolorum. Repellendus ut sint dolores ut molestiae nam nisi. Deleniti odit sit omnis eaque pariatur quia. Ut sapiente voluptates accusantium optio excepturi. Voluptatem culpa aut repellat exercitationem et. Fugiat officiis amet labore quis eos beatae id. Architecto fugit dolores fugit laboriosam quam molestiae. Unde nihil in illum laboriosam et eum. Veniam aspernatur deserunt rerum velit qui. Dicta est velit asperiores neque minima quod. Quia similique aut dolor et sed. Ipsam pariatur nemo quo amet totam sit perspiciatis labore. Nostrum nesciunt dolor officia deleniti aspernatur sit hic. Sequi aut minima aut illo. Sit qui officia quia distinctio reiciendis et mollitia numquam. Voluptatem dolor quos rerum sit et. Quasi incidunt inventore vitae accusamus cupiditate doloribus veritatis autem. Ut dolores voluptatem dolores dolores neque sint. Voluptatem sunt modi minima alias quod provident suscipit atque. Fuga corporis at beatae. Perferendis reiciendis nam ex aut. Perferendis et et voluptas aut quasi tempora omnis. Tempore rem numquam at. Nam at numquam consequatur nulla quia. Qui rem dolorum omnis officia deleniti voluptatum. Voluptatibus nam facilis voluptatem quasi magni. Facilis perspiciatis nisi minima at non qui omnis. Accusamus aliquam aliquid dolorem exercitationem. Omnis rerum sequi aut ut est laboriosam excepturi blanditiis.', 'blog_image.jpg', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(3, 'Odio qui commodi repudiandae.', 'Eius quis voluptatem exercitationem fuga eum perspiciatis.', 'eius-quis-voluptatem-exercitationem-fuga-eum-perspiciatis', 'Eos harum quaerat repellat dignissimos. Suscipit ea omnis non ipsam. Quam dolor tenetur sunt sit debitis labore. Aut mollitia qui aut hic at aut.', 'Eaque nam consequatur doloremque. Eaque officiis deserunt ducimus quisquam similique. Sequi ex natus aliquid ipsa. Sed mollitia eveniet mollitia a delectus. Nisi totam dolorum consequatur deleniti quisquam ex. Rerum vel exercitationem quod fugit quaerat. Molestiae et excepturi quas. Nihil repellat est quos voluptas veniam excepturi voluptatibus. Molestiae in corrupti nulla facilis mollitia aperiam quibusdam. Pariatur ut aut recusandae. Aut velit qui ut veritatis repellat quia. Atque voluptates quia ea sit. Deleniti id accusantium beatae earum excepturi quasi. At consequatur rerum laudantium autem. Hic recusandae et expedita excepturi porro velit quod et. Exercitationem et voluptas consectetur corrupti assumenda molestias. Vitae beatae aliquam cumque molestiae. Aut soluta alias nemo et aperiam sit. Non earum vero temporibus consectetur fuga. Id ex placeat nobis enim eos doloribus enim. Consequuntur et rerum autem nihil tenetur cupiditate nisi. Distinctio et fuga possimus ad architecto qui nihil. Provident totam est ex ut dignissimos. Enim sit ea itaque libero. Aut cum incidunt nesciunt voluptas. Minima exercitationem quia labore quo magnam sit. Voluptatem aut quisquam architecto illum ad qui. Necessitatibus ducimus similique minus veritatis. Consequatur aut ut quod aut consequatur accusantium. Consequatur qui facere sed doloribus vel nulla nulla occaecati. Deserunt accusamus qui ut corrupti eos officia ad. Quia maiores unde distinctio dolorem magni alias. Est impedit rerum animi repudiandae rerum. Odio voluptatem sunt eius sapiente ex. Ut reiciendis quasi ipsa non dolorem et voluptatem adipisci. In at molestiae iure id laudantium officiis autem. Officia autem amet perspiciatis ut fugit. Quis repellendus aut quaerat tenetur perspiciatis natus maiores reiciendis. Iste atque quam et ipsam est enim at. Non esse asperiores officia et. Et corrupti rerum totam est omnis. Velit quia repudiandae nemo possimus alias asperiores. Excepturi quisquam consequatur cupiditate quis omnis ea consequuntur. Consequatur facere nihil qui impedit. Cumque eaque perspiciatis voluptates et. Sit modi quo dicta consequatur. Architecto harum autem culpa voluptatibus quo. Natus qui eos qui maxime est nam. Deserunt veniam modi rem deserunt qui veritatis. Maiores voluptas dolores earum aut nobis molestias et. Aperiam repellendus sed dolor temporibus. Ratione quis nihil pariatur ut et esse aut. Facilis facere nemo labore quia fugiat. Qui rem et magni est cumque quia debitis. Veritatis et beatae nisi enim sed deserunt. Id odio vitae quia earum beatae quo ut qui. Molestiae quis eum eum libero assumenda fugit. Impedit pariatur et quibusdam quaerat ea. Aliquid voluptas eum blanditiis aliquam et perferendis nostrum. Vel quia impedit nisi ex. Eligendi sequi praesentium cum sit consequuntur. Quia eum eius enim commodi et. Laborum sit iste adipisci sed aut. Quibusdam dolore quibusdam fugit eaque. Repudiandae provident dolores sed et et repellendus animi dolores. Vitae voluptas ut fugit eum molestiae voluptatem. Et optio sint debitis dolores animi omnis. Enim qui qui ullam. Dolor beatae neque et veniam sed fugit aut. Mollitia debitis nihil est quos hic neque et. Officia ea non facilis voluptas sed debitis libero. Sapiente velit tempora eos laboriosam. Et sit consequatur commodi et accusamus. Praesentium voluptatem dolorem enim nam odio et pariatur. Animi placeat optio sint harum molestiae rem. Vero expedita omnis voluptatibus officia quia adipisci optio.', 'blog_image.jpg', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(4, 'Fuga corrupti rem quia.', 'Repudiandae amet mollitia minus in voluptatem exercitationem.', 'repudiandae-amet-mollitia-minus-in-voluptatem-exercitationem', 'Exercitationem aut ipsa eius. Autem fugit cum reiciendis neque. Voluptate porro porro maxime qui repudiandae qui blanditiis.', 'Aut ab labore error et omnis a fugit. Quis et dicta itaque et expedita qui id. Sint maiores ducimus dignissimos libero sed quidem. Quod nisi et quis qui in qui consequatur. Exercitationem cumque dolorum quae voluptas ut autem enim. Soluta esse quo et aut similique. Modi aut qui at et. Autem labore ut ullam porro occaecati. Vel ut nostrum dolore. Blanditiis earum eveniet tempora aliquid repellendus consequatur. Ipsam vero eum inventore ut et non. Aliquid deleniti sunt doloremque fugiat pariatur placeat est porro. Id velit dolore eum sunt et rerum repellat. Qui voluptas quam explicabo provident. Expedita repellendus sint qui vitae ut saepe iure. Numquam et non eveniet pariatur. Sunt similique sit et et. Accusamus voluptatem architecto sit inventore. Vel aliquam totam culpa similique. Temporibus cumque inventore quod occaecati voluptatum quia eum blanditiis. Non eveniet ut est dolores ea totam. Ratione harum nemo voluptas quidem recusandae maiores. Quis sit quo animi quo molestias nobis ut et. Iure libero neque quod fuga aliquid rerum molestiae. Quod quaerat aut et veritatis eos cupiditate facere. Dolores quia deserunt neque et quia nihil. Dolores ratione dolorem nihil velit est aut. Nihil similique quaerat sed nostrum cum. Ea ab vel aut qui. Totam cupiditate animi dolorem asperiores alias quia a assumenda. Amet tenetur aut voluptas velit. Omnis inventore nesciunt perspiciatis quod consequatur dolores natus. Ut autem maiores dolorem suscipit ut officia quae. Sed quia et corporis nostrum corrupti aperiam voluptate. Voluptas corporis maxime velit cumque sed. Quidem veniam occaecati temporibus aut fugiat voluptates. Similique quam ratione alias quo recusandae magni expedita impedit. Rerum ut sint rerum ex autem odit temporibus. Magni sed rerum quaerat sunt ullam iure. Et odio magnam provident aperiam aut autem. Corporis quis non officiis illum. Necessitatibus optio recusandae dolor aut minus sint. Neque quasi quia harum ducimus corporis et. Hic quas itaque provident sit voluptatibus itaque labore. Qui quia at et quo exercitationem cupiditate sit. Est quaerat earum sed dicta perspiciatis sapiente et. Est aperiam eos praesentium eum voluptatum autem. Reprehenderit sint non sed eveniet. Fuga unde ipsum aut eos praesentium. Eveniet molestiae ut ut est qui quae. Molestiae placeat qui dolor ut. Neque corporis at explicabo ea et neque repudiandae et. Soluta enim placeat debitis deleniti quo. Pariatur dicta sunt laudantium eum libero quos qui voluptatem. Aut eum itaque quis inventore rem quo. Aut quaerat porro ea. Modi sint est dolores at ipsam et. Et voluptatum est non praesentium aut at quisquam. Id fugiat et error dolor non. Doloremque earum facilis architecto eligendi. At eos similique cum distinctio omnis neque optio delectus. Neque id dolore sunt veniam. Ratione ad aspernatur voluptatum enim dolorum. Modi quaerat error in ut soluta rem qui. Harum corrupti consequatur officia labore ratione quia. Eos delectus voluptatem qui. Qui corporis deserunt consequatur facere recusandae ad voluptatibus voluptatibus. Sit atque et et cumque. Dolor repellendus tempora repudiandae perferendis rem quia quam. Enim nostrum voluptas in maiores. Et sed illo in ut perferendis. Ut mollitia blanditiis tempore reprehenderit earum odio. Porro natus ipsam perferendis repellat odit. Adipisci in sed mollitia quia. Fugiat minus odio dolorem. Similique est nisi dolore fugit incidunt fuga.', 'blog_image.jpg', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(5, 'Autem sit eius qui et sed.', 'Velit et suscipit omnis eos eum natus. Dicta magnam id nulla error nemo ea.', 'velit-et-suscipit-omnis-eos-eum-natus-dicta-magnam-id-nulla-error-nemo-ea', 'Praesentium qui inventore sit ipsum. Rem et minus consequatur accusantium.', 'Veniam ipsum id dolorem sed ut officiis. Qui ullam odit excepturi fugiat necessitatibus. Et nihil nulla eum dolor et quia accusamus numquam. Excepturi quia harum voluptatem facilis ut illo. In error nemo aut. Porro doloremque id facilis sed consequatur voluptate qui eaque. Commodi molestiae sit est quia quia voluptate non. Ea qui error provident et. Ut voluptates delectus et dolorem odit. Fugit reprehenderit temporibus repudiandae eligendi dolorem animi aut. Nihil reprehenderit tenetur fuga architecto officiis. Eum nulla ut qui itaque dignissimos unde qui. Ea nulla nisi aperiam molestias itaque. Modi deserunt excepturi ea natus est. Nam corrupti sit qui ea. Ad vero deleniti voluptatem nisi cum nesciunt. Illum veniam autem corporis eaque fuga nam sit. Optio laboriosam est vel temporibus et harum molestiae suscipit. Beatae consequatur voluptatum nihil nihil est et. Ut modi molestiae maxime et. Eum magni praesentium impedit quia quae in nam. Numquam unde non provident expedita eveniet quasi modi. Eius quam placeat quis commodi. Magnam alias cum voluptatem alias et numquam. Deleniti iste fugiat earum velit illo minus aperiam. Consequuntur quod modi aut. Voluptas occaecati nulla temporibus vero. Voluptas delectus dolor neque recusandae voluptates dignissimos sequi. Quibusdam accusamus doloribus dolor sit dolores vel. Odio consequatur id nam aut aperiam aut. Ut sint excepturi qui distinctio exercitationem. Dicta esse nulla ut doloribus magnam ea. Suscipit at dolorem sequi et. Architecto enim minus omnis cumque ut. Sed modi repellendus est sed. Sint similique cum illum harum velit voluptas. Ipsum aspernatur laudantium quis sed nostrum. Tempore iste sit distinctio eum hic. Voluptas molestiae officiis optio numquam in. Vero earum aut velit perferendis pariatur. Vel ipsa quidem voluptas minus totam voluptas dolores. Odit aut cumque voluptatem qui cumque. Ut nihil saepe accusamus amet porro soluta et nostrum.', 'blog_image.jpg', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(6, 'Hic porro maxime et itaque corporis.', 'Corporis sed voluptatem voluptatibus sed dolorem sit suscipit.', 'corporis-sed-voluptatem-voluptatibus-sed-dolorem-sit-suscipit', 'Non quia accusamus quia laborum aliquam libero. Odio autem dolorem ut sit aliquam. Est voluptas itaque numquam repellendus omnis possimus aut rerum.', 'Tempora laudantium non commodi quae. Eum explicabo quo tempore sint assumenda fugit. Quibusdam incidunt nihil tempora ullam non consequuntur vel. Asperiores enim ea qui. Aut nulla ipsum animi nostrum necessitatibus. In error porro a ad velit nihil accusamus. Atque quod et doloremque qui ea reprehenderit. Aliquid modi et ipsam qui voluptatum eveniet iste. Fugit in nobis nam et vel non. Voluptas itaque laudantium qui vel reiciendis libero autem velit. Ullam omnis iure velit nisi. Ea maxime voluptatem aperiam et. Quis corporis nihil excepturi consequuntur debitis quia non iure. Voluptate quasi repudiandae unde tempora ex. Rerum laborum eveniet porro voluptas quo et. Totam nam excepturi voluptatem nisi incidunt culpa laudantium. Est laboriosam modi ut qui quis ex. Expedita saepe in dolorem nulla adipisci consequatur aut. Dolorem distinctio aspernatur ut enim vero accusamus. Quae quo culpa excepturi quasi tempora explicabo. Eius modi distinctio iure delectus harum et. Exercitationem omnis delectus ea et et qui. Eveniet incidunt aliquam quia voluptatem hic dolore sit. Qui alias asperiores voluptatem esse qui repellat. Autem quos sed laudantium eius dolores repellat corrupti. Porro debitis saepe veritatis labore nulla qui reiciendis. Quae voluptas suscipit molestiae. Excepturi sit commodi vel quam sit. Vitae ipsam sed veniam et dolorem. Quo quisquam quasi illum ut enim voluptatem ratione. Dolorem corporis sit id saepe et exercitationem. Nostrum dolor sunt asperiores nihil sed et. Ea ut provident eaque ipsam ducimus molestiae voluptatem. Beatae dolores omnis omnis expedita dolores. Officiis et delectus et dolor. Voluptas omnis dolores sint sit. Ea explicabo eos quae in laborum ut sequi. Deleniti similique qui at est labore eum. Voluptas deleniti aut ut maiores tempora. Est qui libero debitis praesentium odit consequatur ut. Odit qui nemo nihil sunt sed iure facere. Nesciunt sunt dolor consectetur et. Et quasi nemo ab voluptates quas qui occaecati. Est temporibus explicabo et. Blanditiis omnis quam non et odit. Accusantium accusantium molestiae repellendus sint error ipsam. Dicta provident quod omnis aliquid molestiae quibusdam. At rerum doloribus nisi. Fugit omnis exercitationem illo illum cum laudantium mollitia. Odio voluptatibus distinctio quia optio. Harum dolores repudiandae fugiat eaque magni. Ut similique voluptate et omnis praesentium. Veniam qui molestias aut doloremque odio pariatur recusandae rerum. Veritatis officia nemo sapiente dolore consequatur quis quasi. Enim recusandae dolorem sapiente doloremque tenetur enim sed voluptatum. Dicta deleniti quo quia et. Et nisi quasi est ab odit. Laboriosam ducimus velit tempora ducimus consequatur est quo rerum. Rem doloremque corporis exercitationem et. Ut enim et nam ut est debitis. Et corporis quo doloremque odit reprehenderit voluptatum magnam. Eum temporibus a voluptas totam earum. Sed quia rem rerum quam a voluptatum perferendis. Qui consequatur adipisci itaque aut. Minima dolores itaque rerum ut molestiae. Error sit qui quisquam molestiae dolor facere beatae. Veritatis sed corrupti eos necessitatibus. Ipsa hic sunt possimus ut. Alias quia dignissimos repellat quis laudantium accusamus qui incidunt.', 'blog_image.jpg', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(7, 'Incidunt sint explicabo iste rerum qui.', 'Vel ut ullam alias. Debitis assumenda nisi ducimus et aut aliquid nesciunt itaque.', 'vel-ut-ullam-alias-debitis-assumenda-nisi-ducimus-et-aut-aliquid-nesciunt-itaque', 'Amet dolorum voluptatum hic iure quasi. Pariatur quo qui veritatis harum nihil sit amet.', 'Eos sit officiis eum tenetur qui non. Sint ex incidunt vitae quo delectus ea ab. Corporis quasi non reprehenderit. Ducimus quidem distinctio in eum cupiditate et. Tempora vero quae quibusdam blanditiis omnis laboriosam et. Est dolorem eos temporibus ut non iure. Aut mollitia quam aut. Veniam numquam est voluptatem et incidunt. Tenetur porro nemo blanditiis et dolorem magni dolor dolore. Reiciendis aut vitae dolores dolor aut aut. Aut pariatur harum voluptatem facilis magni eos. Aliquid adipisci et qui. Excepturi minima et alias numquam dolor delectus. Qui vitae labore in voluptatem. Soluta est officiis doloribus aut. Et quo qui dignissimos mollitia nostrum aliquam voluptatibus. Veritatis id ex fugit deserunt. Sed quisquam et pariatur fugit natus quasi. Natus quibusdam voluptas reiciendis dolores. Praesentium quidem sed autem iusto nulla iure. Sit dolorem laboriosam in quam molestiae et omnis possimus. Adipisci ut iusto dolorum labore cum veniam et. Officiis quam quo dolor est corrupti possimus. Sint ut atque earum dolores. Consequatur accusantium aperiam quia earum in sit. Assumenda totam qui qui dolorem. Praesentium aut recusandae natus ut suscipit doloremque consequatur. Ut vitae nisi sapiente. Quos delectus debitis consequatur quis animi. Itaque inventore qui at molestias. Ut corporis voluptatibus est eum. Voluptates eum voluptates at accusantium dolor. Ullam soluta unde quasi. Sed inventore id consequuntur molestiae autem doloremque vero iusto. Quia et rerum omnis minus dolores voluptatem inventore. Ducimus occaecati laudantium repellat et cumque iure. Vero pariatur iste excepturi illum est. Voluptas itaque quo sequi vel dicta iusto. Quia officiis inventore accusantium libero odio unde architecto. Quia aut sequi quisquam molestiae. Incidunt delectus animi consequatur qui facilis aspernatur. Quod repellendus corrupti cupiditate necessitatibus aut quo. Qui aut provident mollitia. Ullam iste eos eius repellendus. Amet illum rerum voluptate sed eos voluptatibus vel ratione. Corporis porro ipsa ea in eveniet. Numquam quisquam provident ratione cumque delectus. Ducimus quaerat qui veritatis magnam velit labore rem. Est dolore tempore dolores eum reiciendis voluptatibus est. Excepturi fugit quia facere consectetur doloremque. Sed a dolorum cupiditate voluptate. Ratione aliquam magni est similique molestiae.', 'blog_image.jpg', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(8, 'Doloribus optio sapiente.', 'Autem autem sit commodi deserunt quae.', 'autem-autem-sit-commodi-deserunt-quae', 'Ipsa est nulla et nemo qui voluptatem ipsum aut. Maxime corporis ullam laudantium ut consequuntur ut qui.', 'Quia laboriosam at architecto dolorem maiores. Eius tenetur distinctio et veritatis voluptatem. Dolorem quia est nihil quasi repellendus. Molestias rerum dolores molestiae ut necessitatibus. Minus quod distinctio deleniti est libero. Voluptates et quia at fugit eum in. Dolorem aut temporibus voluptatum et. Rerum numquam saepe magnam voluptatem. Quo totam incidunt expedita. Sit quia harum ut qui. Quas fugiat debitis non nulla. Tenetur neque numquam error ullam facere. Aperiam culpa ea perferendis voluptatem. Itaque amet vel neque ut eos voluptas. Qui recusandae a praesentium ut aut id explicabo. Deserunt id est eveniet minus provident id qui repellendus. Deleniti cum provident dignissimos quia sed non officia exercitationem. Omnis vel quia dolores laudantium quibusdam qui. Doloribus dolor at iste odio. Aut harum eligendi quia perspiciatis tempore voluptates ut. Ullam labore eos qui. Quaerat aut unde dolorem mollitia alias quisquam vitae ut. Et consequatur unde sed quia hic nihil inventore. Temporibus ipsum repellat optio molestiae voluptas earum dolores. Amet accusantium deleniti accusamus aut. Voluptatem est cupiditate est nostrum ipsum. Expedita nesciunt unde eos officiis sunt. Possimus atque reiciendis magni sint. Sint placeat deserunt omnis fuga magnam tenetur non. Vel sunt nihil similique omnis. Vel dolorum velit sed voluptatibus. Et enim corrupti aliquid reprehenderit qui et. Dolorem similique nostrum cumque. Omnis esse blanditiis est in consectetur et perferendis. Est quia modi corrupti voluptas voluptatum illo culpa. Unde autem harum non sit officia enim nulla. Sed animi vel iste autem aut et molestiae. Atque architecto atque ex a alias. Sit fugit amet eveniet culpa ipsum quae blanditiis commodi. Earum tempore amet est consectetur error. Aut perspiciatis minima qui magni eos. Sequi excepturi reiciendis omnis. Sequi et reprehenderit vero eligendi. Consequatur adipisci repellat laborum harum alias sed. Nostrum hic explicabo et doloribus itaque. Dicta temporibus quam qui dolor et possimus harum. Eum facilis sed est tenetur nihil ad. Pariatur quibusdam minus vel error iure sint. Recusandae vero expedita et ut laudantium. Impedit ex dicta soluta. Et autem sequi at labore. Eos quis quasi expedita eum cumque. Est a magnam quia voluptatem vitae ut. Eveniet occaecati accusamus enim assumenda dolor. Placeat atque iusto veritatis quisquam cupiditate cupiditate ullam. Quia quaerat et et nihil dolores debitis magni. Quisquam dolores cupiditate similique nobis. Et minus quia velit cupiditate sed voluptas fuga rerum. Similique vel molestiae placeat rerum nihil. Quasi debitis nobis sapiente autem explicabo sit. Sunt consequatur dolor omnis sit. Doloremque et quia sint culpa. Ratione qui deleniti iusto alias unde. Animi et adipisci quibusdam iure iusto magnam quas id. Qui doloremque rerum quo excepturi vitae dolor qui. Molestiae vero ut sit possimus cum pariatur. Cumque possimus nesciunt sed quia. Et maxime error praesentium quia natus quia quia. Praesentium nam quo maxime non odio quidem. Ea voluptate et enim reprehenderit aperiam ut. Eum culpa vero dolores consequatur quaerat autem sunt. Ullam et quas velit veritatis fugit. Quibusdam voluptas numquam ipsam asperiores adipisci qui. Corrupti ullam et hic minima fugiat consectetur modi nesciunt. Modi occaecati omnis voluptate suscipit. Dolores ipsam eos deserunt ullam. Cupiditate aut quos veniam. Deleniti maiores sit et ducimus rerum earum. Aut facilis nam at voluptas delectus consectetur ut. Consequatur quaerat molestiae velit veritatis. Id perspiciatis animi quo inventore.', 'blog_image.jpg', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(9, 'Neque labore non.', 'Sint excepturi illum quidem mollitia nesciunt. Et ratione voluptatem aut quod.', 'sint-excepturi-illum-quidem-mollitia-nesciunt-et-ratione-voluptatem-aut-quod', 'Fugiat ullam qui nostrum sed quod ut eligendi iure. Autem laudantium dolores esse deleniti corrupti velit impedit. Ducimus laboriosam ut esse ut.', 'Rerum ut quia molestias quam qui. Vel sapiente facere maxime earum alias. Doloremque rerum autem nihil amet nemo illum soluta. Fuga excepturi aspernatur numquam magnam deserunt odit aut et. Reiciendis rem illo molestiae veniam odit et ducimus ut. Nemo corporis dolorem earum at. A accusamus ipsum quas veritatis eligendi. Ipsam error autem laborum qui minus. Voluptatem necessitatibus sit facere quia. Totam maxime et repellendus corporis debitis omnis quae. Blanditiis ut aperiam est quam rem quia autem. Ut minus laudantium vel commodi repellat nesciunt. Error saepe dolorem odio quia quam tempore amet. Maxime impedit tempore blanditiis voluptatem. Ut voluptatem ea quibusdam ut et ex ut laboriosam. Culpa aut tempore non nulla est. Facere eaque sed qui. Dolore impedit quia enim suscipit. Fugiat id quo non id et quaerat. Et error possimus qui perspiciatis quisquam. Libero facere enim explicabo ea sit ab enim. Qui ullam ea dignissimos dolores est earum laudantium. Eaque sequi magnam ut et. Repellat harum ut corrupti vel quis laboriosam. Reprehenderit repellat error et itaque et vel. Amet velit dolorum dolor accusantium. Maxime est soluta vel rerum ea aut. Velit assumenda non et dolores unde. Id voluptatibus rerum nisi exercitationem sequi a enim sunt. Explicabo velit pariatur sequi rerum illum. Amet soluta rerum inventore eaque omnis voluptatibus. Omnis rerum non atque iusto alias fugiat. Nulla adipisci eveniet explicabo quia neque repellendus totam. Nulla velit corrupti voluptas libero et tenetur. Quis provident vero a iusto ex recusandae. Qui necessitatibus non ea eius amet velit. Sed praesentium nemo velit. Aut eligendi dolor voluptates eos sequi perferendis et. Facilis consequatur doloremque est quas sint. Itaque in excepturi dolorum omnis eligendi. Ut sed quaerat fugiat iure et suscipit. Quo iure a et tenetur animi possimus totam. Ipsa et perspiciatis tenetur nostrum veniam. Aut dolor voluptatem vel mollitia omnis aut. Qui officiis et doloremque ad qui dolorem. Possimus necessitatibus temporibus ex laudantium. Odio quos laudantium cupiditate dolor eum totam.', 'blog_image.jpg', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(10, 'Delectus voluptatem distinctio blanditiis.', 'Aut tempora ad facere aliquid aut sequi distinctio et.', 'aut-tempora-ad-facere-aliquid-aut-sequi-distinctio-et', 'Voluptatem ipsum eius earum est quis voluptatibus et. Molestiae sequi quae ea amet saepe quo est. Amet laudantium in in sed quis itaque maxime.', 'Nisi voluptate harum error nesciunt. Omnis nihil ea deleniti ut. Dicta enim molestiae porro fugit aut vero. Nam voluptatem ab maxime iste id doloremque. Perferendis nihil earum facilis odio nihil debitis vitae velit. Quis voluptas illo sint sunt ea deserunt assumenda. Maiores dolores quos ut ea enim quidem. Culpa vero et voluptatem molestiae. Ab eaque ullam cumque deserunt. Qui enim explicabo veniam corrupti consequatur ex. Ducimus quasi ipsa et pariatur voluptatem. Nisi nesciunt fuga non soluta adipisci. Quibusdam et et fugit. Qui qui enim quis ad nesciunt. Necessitatibus voluptas quisquam hic ipsum explicabo quod. Consequuntur laudantium qui soluta exercitationem perferendis numquam. Consequatur est optio similique ut eius. Molestias qui qui doloribus eligendi tempora tenetur distinctio fugiat. Aliquam qui consequatur fuga eius. Architecto culpa ab omnis est voluptas excepturi ut. Quod tenetur qui sequi quisquam amet ut. Hic eius et corrupti voluptatem. Blanditiis facilis rem rerum sapiente. Rem optio perferendis doloribus soluta. Hic et et vel nihil culpa tempore. At sit ut voluptas recusandae et est explicabo. Illo iste est quae excepturi veniam rem impedit. Voluptates veniam aut eum nam aut occaecati. Ad inventore optio ut nobis eos. Placeat at atque delectus ut hic reiciendis perferendis. Voluptates repellendus vitae voluptatibus nihil exercitationem vero. Unde qui est quia rerum et. Voluptas dolores odio asperiores quos voluptatum illum. Doloribus corrupti doloribus soluta. Doloremque perspiciatis sed repellat fuga quod iure sequi. Illum delectus error tenetur et sunt voluptatem qui. Ipsam delectus qui sapiente qui voluptas. Fugit voluptas et dolor laborum quidem. Dolorem voluptas dolores repudiandae omnis quia velit. Eos ipsum temporibus aut at quod qui. Dolorum quam eveniet porro ut. Quia deserunt beatae eaque id corporis odit dignissimos. Molestiae ipsa porro porro est ut aut omnis eius. Quae autem ea omnis inventore.', 'blog_image.jpg', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_metas`
--

CREATE TABLE `blog_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_metas`
--

INSERT INTO `blog_metas` (`id`, `blog_id`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Perspiciatis vero ipsam quidem nemo illum eveniet possimus. Est labore voluptates enim sed. Laboriosam eligendi vitae ipsam voluptatem dignissimos.', 'Consequatur ut animi quis qui. Dolorem a temporibus optio molestiae. Cum magnam aut quidem quisquam eaque.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(2, 2, 'Explicabo quibusdam consequuntur cum nemo et. Quia dolor similique sequi sapiente et. Nihil sit est deserunt quibusdam omnis cumque temporibus.', 'Et et sunt sed. Voluptatem ut est sequi qui dignissimos. Repudiandae eaque qui aut quasi tenetur. Optio aliquid voluptatem quod.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(3, 3, 'Dolorem voluptas consectetur eius aperiam. Necessitatibus et nostrum ipsum sunt praesentium dolores.', 'Hic iste veniam doloremque quia nostrum. Doloribus ab suscipit hic at non sunt. Labore fuga totam rerum consequatur ut et quaerat quisquam.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(4, 4, 'Iste quo autem et ullam ex animi error. Omnis ut quidem illo asperiores ducimus pariatur. Eveniet repudiandae rem commodi laudantium.', 'Quidem exercitationem tempora dolores laboriosam quasi distinctio. Ratione id nam veniam dolorem maxime. Cupiditate accusamus aut aut sunt.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(5, 5, 'Natus temporibus in eaque. Alias non qui eveniet debitis enim similique. Pariatur cumque qui reiciendis voluptates modi quis.', 'Totam placeat qui animi magni officia fugiat. Enim voluptatem et laborum nemo modi.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(6, 6, 'Voluptatem numquam consequatur ut inventore. Asperiores dignissimos ut qui fuga occaecati. Qui aut cum ut quis quia. Qui sint qui accusamus incidunt.', 'Repellat sint nam corporis dolor fugit tempora. Sunt natus dolores impedit et non. Sequi autem dolores voluptatum quasi praesentium excepturi.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(7, 7, 'Quasi ut velit eveniet quisquam nisi quasi. Quas nihil a id quibusdam harum. Odio aut quasi et commodi.', 'Ut laudantium ut et debitis iure. Quia repudiandae ex saepe incidunt. Ipsum dignissimos eos vel pariatur hic.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(8, 8, 'Nostrum qui magnam harum dolor expedita. Quae aut deserunt tempore fugit. Natus quae velit ut laborum cupiditate molestias vel placeat.', 'Deserunt quasi omnis ut. Impedit qui at odio animi.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(9, 9, 'Consequatur ipsam et neque. Voluptatem qui dolor laborum ratione id. Reprehenderit repellat ut rerum deserunt a et error.', 'Voluptas doloribus voluptate qui nemo at. Sapiente non ut sed repellendus recusandae eveniet. Animi expedita qui ullam.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(10, 10, 'Sed et est sit doloribus at modi similique sed. Laboriosam rerum officia provident sint dolor. Voluptatibus dolores assumenda dolorem quis excepturi.', 'Soluta architecto recusandae expedita. Quia error vitae accusamus odit eaque ea.', '2023-01-16 10:27:12', '2023-01-16 10:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `blog_related`
--

CREATE TABLE `blog_related` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `related_blog_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Laboriosam voluptate.', 'marlee83@marquardt.info', 'Vel quia consequatur totam ut velit. Tempora a eum ut eum. Placeat accusamus voluptas consequuntur earum illo doloribus. Unde aut velit quam iste eveniet quos quis. Aperiam veniam autem ratione voluptatem quae. Expedita nemo praesentium occaecati magnam aut earum eum. Ut laudantium et non sunt placeat aut qui qui. Corrupti eum sed ex qui. Neque odio fuga sit hic quis consequatur doloribus. Molestiae qui unde molestias necessitatibus vero perspiciatis doloribus. Voluptas velit et libero. Necessitatibus exercitationem aperiam porro quaerat dicta et. Voluptatum ullam incidunt ut sit itaque officia aut. Est rerum corrupti inventore et. Voluptatibus repudiandae rerum sequi voluptas debitis dolor possimus. Deserunt totam et ea tempore velit qui. Amet sunt consequuntur vitae minus alias voluptatum. Voluptatem id dolor ea mollitia illum non fuga voluptatibus. Nobis dolores eum fugiat. Doloremque voluptas dolorum modi repudiandae omnis dolor molestiae doloribus. Laboriosam optio quas voluptatem molestiae culpa inventore. Nesciunt corrupti molestiae quam hic. Vitae deleniti vel et earum non ut. Est qui ratione libero repellendus inventore neque nemo. Nam et molestias molestiae at consequuntur labore. Sit omnis ut quas maiores explicabo quibusdam repellat. Quibusdam sint voluptatibus soluta odio laudantium esse animi. Veniam iste et doloribus quo culpa voluptates sapiente iure. Maiores quo voluptatum ex doloribus voluptas velit. Sed perferendis et dolorem. Dolore incidunt ipsa nulla aut tempore. Ullam voluptates quibusdam autem sint id. Totam est expedita quia. Dicta placeat dolorem debitis aliquid ad illum. Nulla perferendis molestiae velit doloremque fugiat. Non hic est recusandae provident at fugiat et. Corrupti eum quia et consequatur dignissimos. Ut maiores libero excepturi velit itaque omnis. Itaque voluptas est rem suscipit ea provident. Commodi quae aspernatur autem. Dolore deleniti possimus velit assumenda deserunt expedita. Et consequuntur alias voluptatibus consectetur. Dignissimos fugit quidem sunt. Rem officia dolorum in et qui aut hic quasi. Porro fugiat doloremque omnis ipsam. Sit ex velit et est sit libero. Aut dolorem vel dicta ea qui sed eos quibusdam. Est tenetur totam rerum quam. Et sint non quibusdam saepe perferendis enim reiciendis. Excepturi quae distinctio veritatis officiis. Est quos nulla omnis eos. Et aut est ea accusamus rerum eaque. Eos atque similique unde aspernatur ullam aut odio. Repellendus voluptatem deleniti illo beatae facere eum accusantium. Et mollitia exercitationem perferendis facere esse eaque. Maxime rerum qui commodi aut. Eveniet quaerat eaque libero. Quibusdam minima ex recusandae sed sequi ex et. Velit eaque non doloremque eaque dolorem quaerat dolore. Quis facere possimus maiores magni dolor non odit. Corporis non quia officia dolorem quisquam. Qui voluptatem ea sapiente sit eligendi.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(2, 'Tempore magni et.', 'velda.nienow@hotmail.com', 'Et ab ex asperiores corrupti quis aliquam assumenda. Exercitationem neque dolor fuga tempora magnam mollitia. Autem iure ut est reprehenderit voluptatem. Consequuntur magnam soluta corrupti. Recusandae perferendis beatae sed voluptatem reprehenderit. Adipisci qui qui aliquam fugit quidem autem. Sed optio et deserunt repellendus. Quam quia beatae laborum nobis similique vitae aperiam facere. Et totam quis sunt qui. Facilis voluptas explicabo iusto culpa voluptatibus sunt est. Repellat porro quia accusantium harum odit labore. Corrupti eos voluptatem molestiae deleniti eligendi facilis dolores. Quibusdam aut minima dolorem at unde. Repellat harum nihil aliquam sit facere molestiae eos. Quibusdam laudantium adipisci perspiciatis ratione voluptas ut consequatur. Consequatur exercitationem dolores rem quae. Doloribus atque optio occaecati expedita. Omnis commodi odio enim possimus. Et voluptatum debitis modi ad qui reprehenderit inventore. Ipsa sit maiores et ipsum optio placeat. Similique ut quia iure sapiente et quidem. Quis expedita ratione aut suscipit perspiciatis. Voluptatem sint et ut rerum id a voluptatem. Sequi ut eos rerum ex cum inventore eaque. Laborum numquam eum ut et. Deserunt dolorem omnis cupiditate alias reiciendis. Sapiente vel culpa quos dignissimos aut sed dolores. Magni minima libero esse facere distinctio. Vel molestiae aut totam consequatur repudiandae. Eveniet sit ullam et repellat unde. A qui corporis aut ducimus. Et ut quod rerum autem. Odio nobis voluptates architecto molestiae enim. Aut sapiente aut harum iure et. Ea quo voluptatem itaque. Numquam eligendi fuga in quasi voluptas qui nisi. Alias consectetur cum pariatur autem. Esse libero aut cumque. Repudiandae repellat dolore quis eos et possimus nam atque. Aperiam ut laboriosam ab facere. Quia facere architecto accusantium est. Sint sint incidunt aut. Omnis cum et quis aut asperiores voluptatem voluptate. Numquam recusandae corrupti qui. Dolorum voluptatibus deserunt soluta sequi nesciunt id. Natus omnis molestiae reiciendis similique sint. Veniam voluptas ratione alias maxime. Possimus ipsa nihil placeat enim. Vero impedit earum inventore quia. Adipisci quia dignissimos sint incidunt repellat et. Omnis fugiat incidunt eos voluptatum modi dolorem quibusdam. Autem harum aperiam dolores blanditiis. Ut tempora rem repellat non id consequatur. Ut sit ut voluptate nesciunt. Est modi omnis est quia officiis perferendis adipisci nihil. Sint consequatur est et nihil blanditiis labore sint commodi. Quos nobis qui soluta molestiae et cum vel. Debitis est quia sed quos. Sunt ea distinctio est ut. Cumque quam omnis adipisci fugiat blanditiis molestiae. Recusandae ea neque dolorem eos deserunt natus adipisci. Sint molestiae et facilis mollitia vero ut perferendis.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(3, 'In pariatur quos.', 'langosh.vivian@bailey.net', 'Eum quas et incidunt voluptas maxime ab ab. Ipsum amet assumenda ratione aperiam tempore rerum nostrum autem. Natus esse et minus sequi. Voluptatem architecto a est eos quibusdam. Et ratione tempore sequi ullam occaecati corrupti cumque. Ipsa asperiores qui recusandae quod ut ullam ea. Ipsa ea ex quidem. Sint eos soluta tempore aut ut quisquam velit nam. Nemo minima accusantium temporibus ut velit laboriosam accusantium. Placeat temporibus a alias pariatur illo. At nisi temporibus enim. Sit omnis placeat ipsa autem. Animi alias id reiciendis maxime provident quasi. Itaque rerum ut ducimus enim. Laboriosam qui quia non nihil sapiente asperiores perferendis repellendus. Sunt adipisci minus et. Omnis totam provident ab assumenda nemo voluptatem odit. Corporis exercitationem distinctio nisi cum. Dolor officia ut cum aut provident nam. Qui quam voluptatum dignissimos nostrum. Rerum nisi est voluptatem quo quis sit. Consectetur eaque est tenetur quis et dolore consequatur voluptatem. Incidunt similique alias ipsum. Reiciendis iure modi sit et. Et tempora saepe earum nemo exercitationem debitis dolore. Enim modi sint sit aut illo dolorem. Quia reiciendis dolorum temporibus rem qui. Eveniet iste modi expedita exercitationem. Minus sit nesciunt omnis minus et facere. Possimus numquam cumque et voluptatem repellat. Nihil blanditiis doloribus est. Est cupiditate laborum illo sed omnis harum nesciunt perferendis. Ea voluptatem et assumenda animi facilis eos. Et voluptatem autem expedita inventore in facere. Excepturi vel nam eaque doloremque at. Fugiat aut alias corrupti velit hic. Natus magni nisi ut id officiis eaque est. Voluptates unde velit iusto cupiditate necessitatibus. Rerum sed commodi inventore qui dolorem excepturi minus. Quam non dolorem sunt exercitationem. Quia quis eligendi quis animi. Quod odio recusandae aut eos corrupti odit. Eligendi maiores nisi placeat ex eaque. Qui maxime nulla beatae porro ut velit voluptatem ipsam. Et exercitationem eveniet inventore cupiditate. Non quaerat fugiat sint. Hic repellendus quae qui et temporibus. Et ut enim voluptatem ea rerum exercitationem sint officia. Facilis recusandae vel delectus at expedita suscipit expedita. Ut commodi molestiae provident eos sunt ipsam odio ut. Molestiae odit earum ut ex repellat ut amet. Omnis blanditiis delectus deserunt eos ea voluptatem. Ut possimus perferendis quaerat aut. Aut autem soluta est aspernatur minus. Doloremque assumenda accusantium assumenda aut. Perferendis sequi ipsam unde et ut. Esse ut hic illo occaecati. Voluptate ratione debitis dolorem dolor. Ut saepe illo aliquid ea aut. A eaque ad officiis autem. Fugit fuga consequatur occaecati quis. Reiciendis qui omnis illo laboriosam minima sunt dolorum at. Impedit qui dolorem labore tenetur facere.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(4, 'Deleniti tempore.', 'dean.herzog@yahoo.com', 'Tenetur omnis minima est. Eius debitis rem voluptatibus quisquam numquam. Repellat sit et voluptatum expedita optio. Sit ullam iusto et ut soluta qui. Doloremque cupiditate id est error ut ipsum labore rerum. Eveniet aut dicta aut. Voluptatem nisi velit dolores provident fugit aperiam. Dignissimos iure temporibus eum vitae odit consectetur accusamus. Commodi quia placeat porro voluptate officiis et expedita quo. Vitae magnam architecto aut qui. Velit recusandae aperiam eveniet. Voluptas et laudantium commodi excepturi veniam libero. Aliquam iusto autem doloribus iste sequi et saepe tempora. Optio dolorem commodi atque odit. Voluptas doloremque porro dolores inventore quam. Occaecati quo eum aut rem tenetur esse. Aliquam ut cum et praesentium consequatur qui. Odio temporibus esse est vitae ut quos consectetur. Inventore sunt et incidunt velit dicta quis. Quos ducimus voluptas molestias doloremque sed hic. Id odit deleniti voluptatem repellat porro expedita. Porro dolor maiores esse dolor aliquam. Omnis saepe cumque voluptates quam ratione iusto. Adipisci animi ab distinctio tempora omnis ab placeat. Aliquid iusto ea rerum nulla. Est nesciunt earum odit culpa magnam illum. Et impedit voluptatem est adipisci non qui minus eaque. Ipsam quam rerum amet eum deleniti sint omnis. Qui fugiat aut est quisquam. Molestiae aspernatur repellat ullam quibusdam perferendis. Eum qui ipsam placeat quis vitae repudiandae quasi. Omnis ullam sapiente nihil qui temporibus. Recusandae incidunt sed est illo. Non placeat animi excepturi commodi dolor. Sint placeat qui ex sit incidunt quisquam odit. Et voluptates minus eius. Nisi dolor rerum ut sint aut ut nihil. Eligendi at ea et porro voluptatem. Neque fuga consequatur minima est sint aliquid. Ab id et rem similique. Maiores omnis iusto ea. Deserunt enim recusandae accusantium. Et reprehenderit et sed distinctio sed. Consectetur tenetur quaerat est doloremque numquam eum doloribus omnis. Repellendus consectetur quam non. Nostrum qui itaque sed. Aut corrupti exercitationem voluptates et. Et voluptatem vel fugiat aut at. Veniam sunt iure similique est enim quia. Voluptatum impedit est molestiae. Aut est non sit et. Et provident ut voluptatibus impedit accusamus beatae. Sed sint nobis architecto vel dolores assumenda enim sunt. Esse ducimus qui corrupti earum aut in. Est dolorum asperiores laborum nihil autem. Vitae similique eligendi iure veritatis accusamus sit aut. Quod quae molestias voluptatum. Dolorem eos minus iste. Vitae eos error ipsa harum. Explicabo veniam quo enim beatae ipsa et. Sit rerum qui molestiae blanditiis quod sunt. Nobis qui quo dolor dolor aspernatur error. Sunt aut eum at autem eum quasi in. Animi occaecati et dolore esse dolorum ut. Laboriosam eveniet aut quo quis corporis. Est aut nostrum fugit animi. Sunt nisi hic fugit doloremque saepe optio natus. Exercitationem error accusamus iste ab consectetur qui sit sit. Dolores et adipisci occaecati qui aut. Adipisci aliquid ut officiis qui. Nobis commodi sunt adipisci minima magnam dolor. Necessitatibus voluptatem adipisci voluptatem. Quisquam aut consectetur molestiae aut ab praesentium. Dignissimos deleniti accusantium sed qui voluptates sequi distinctio. Et reprehenderit ut placeat quo sint asperiores inventore. A atque animi quibusdam aspernatur repellat doloremque. Rerum dolores harum neque omnis voluptate. Ipsam repellendus doloremque aut eius laborum tenetur porro. Hic quia rerum laudantium eligendi. Laborum voluptatibus aut corrupti delectus laboriosam ex. Delectus beatae dolorem a quibusdam repellat. Optio placeat nesciunt optio accusantium. Sed et impedit est eligendi saepe praesentium aut. Nostrum dolor qui sed numquam. Ea dicta aliquid harum quae et ducimus et ratione.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(15, 'Voluptas eligendi.', 'cassandra.schultz@yahoo.com', 'Rem praesentium rerum sapiente enim placeat similique. Est autem vitae dolores sit modi quo occaecati. Ut excepturi sint doloremque earum alias labore officiis. Eum aut quae est dolores exercitationem. Exercitationem exercitationem odit consequatur voluptatibus cum quis qui. Ex sed aliquam debitis quia. Eaque nesciunt excepturi saepe voluptatem. Rerum consequatur enim ut velit eos dignissimos. Ut dolorum aut accusamus. In dolores commodi sed laudantium libero ratione pariatur. Aut aspernatur modi rem rerum harum consectetur. Eius dignissimos dignissimos quasi possimus. Veniam repellat nemo magnam. Modi recusandae repellat delectus enim consectetur. Nihil aliquid consequuntur quis expedita reiciendis at. Voluptatem id odio omnis quis ut quas beatae. Illo ullam culpa repellat odit excepturi. Saepe veniam nisi quos ut et eum voluptatem. Illum qui eveniet fugiat quia. Cumque neque a sed nisi quas magni facilis. Temporibus rerum quis soluta ut sunt maxime itaque. Dolorum eum ab quasi omnis a assumenda. Assumenda aliquam quia non alias quo. Voluptatem omnis saepe veritatis sit provident voluptatem sapiente. Eos occaecati ut dolorem ex voluptas sed. Tenetur nemo iste voluptatibus quas nobis odio neque. Quia nam itaque temporibus. Iure ad quia non molestiae. Impedit tempora voluptas maiores aperiam enim iure. Repudiandae earum dolor aut adipisci. Perspiciatis id et accusantium a possimus at distinctio quaerat. Quas aliquid quo aut explicabo. Omnis nulla reiciendis et facere optio. Odit voluptatibus saepe quaerat consequatur sequi sequi. Culpa illum inventore nam dignissimos. Cumque tempora beatae eum voluptatem. Blanditiis sequi praesentium facilis doloribus in iste fugit nihil. Itaque tempora tempora similique qui sed quaerat beatae. Sequi unde iste ex rerum. Magnam reprehenderit et minus nostrum blanditiis natus. Nisi rerum inventore magnam ducimus omnis. Voluptas pariatur fuga voluptatum facilis qui accusantium quasi repudiandae. Consectetur itaque ex et amet sunt nisi. Quia est sunt veritatis suscipit. Alias facilis quidem molestias id consequatur quo. Eveniet et quis debitis voluptatem qui aut. Dignissimos ut labore sapiente aut enim odit mollitia. Architecto quisquam assumenda repellat sit quibusdam. Sunt dicta et quisquam nihil suscipit sed. Qui rerum voluptatem veritatis. Est et eos eveniet corrupti molestiae et. Ut qui consequatur placeat quod. Quo nihil perspiciatis laudantium quam. Vel magnam laborum quia. Voluptas quod iste et odio quo occaecati nisi. Illum est aut voluptatem libero quis neque dicta. Maiores aspernatur qui ut ea. Iste deserunt non aut id ut. Dolorem id corporis voluptatem expedita architecto reiciendis quidem. Aperiam perspiciatis voluptas rerum perspiciatis et ea dolorem. Optio minima sint libero animi id. Sed atque recusandae ratione qui. Quibusdam numquam eos dolores et enim. Aut voluptas architecto sunt deserunt et vel vitae. Aspernatur sit explicabo sunt ut rerum molestiae doloremque sit. Tempore neque corrupti qui velit et. Quia ullam omnis recusandae accusamus porro quam. Quae sequi aut omnis et quis qui. Vitae cumque voluptas voluptate ullam. Ex quia tempore harum vero eos aut. Architecto ab totam laudantium debitis sint et non quos. Dolores similique quibusdam voluptatum.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(16, 'Commodi veniam tempora.', 'moises43@yahoo.com', 'Placeat doloribus sint est nesciunt autem autem et. Et fuga explicabo illum dolorem dignissimos repellendus placeat. Eligendi nesciunt adipisci dolores et. Suscipit labore nesciunt accusantium qui ullam earum qui. Rerum ut alias vel autem veniam nihil perferendis. Cupiditate pariatur cumque ut quam officia exercitationem. Ut quia culpa eos velit magnam. Possimus occaecati veritatis alias optio. Cum blanditiis voluptatem quod magnam perferendis ut ea. Adipisci iusto dolor odit enim corporis ducimus dolores. Earum ab ipsum aut laborum officiis consequatur sapiente. Sit quas dolores dolorum quia. Cupiditate in animi sint illum animi. Eum dolorem similique est ipsam et. Nulla quae quae eveniet est aut. Praesentium quas nostrum ea quae quaerat. Tenetur id fuga aperiam ex qui sed nam. Eum fugiat consequatur distinctio. Voluptatem ad vero delectus et exercitationem. Consequatur quia sed explicabo dolor molestiae eveniet enim. Atque reiciendis quis excepturi. Molestiae molestiae velit et ratione in tenetur id. Sunt dolor nulla animi dolorum praesentium. Porro facilis id illo suscipit quod illo. Praesentium rerum nihil qui commodi quas earum minima. Earum sint sed laboriosam. Sed est porro minima officia modi. Et occaecati cumque consectetur voluptates cumque veritatis ea. Facere eaque sint sed earum quaerat nostrum. Enim quis impedit maiores non. Quam aut sunt ullam iste. Harum quas aut perferendis qui dolorem doloremque eligendi voluptatum. Tenetur aut expedita inventore reprehenderit est quisquam sunt. Odit repellat dolorem nam vel corrupti. Consequatur omnis accusamus beatae tempora dignissimos reiciendis facere aperiam. Est tempora asperiores quia autem minus maxime exercitationem. Ipsam quod quos quaerat doloremque delectus. Exercitationem dolorum maiores consequatur voluptate. Aperiam consequuntur dolorem repudiandae quam quibusdam deleniti voluptatem. Quam sunt corporis veritatis modi cum et. Dolores consequatur quidem at omnis ipsam dolores. Consequuntur tempora eaque enim quisquam magni expedita incidunt. Voluptatem eos rerum veniam quo. Voluptatum eos quod ab. Ipsum occaecati magni non non consectetur. Ab ea consequatur nulla dolore numquam id temporibus. Consequatur amet occaecati vel est voluptatem dolores nesciunt. Architecto officiis libero sit officia rerum consectetur. Ut facilis quasi ipsam mollitia qui tempora rem. Sed sunt quasi quos. Et et magnam distinctio fugit voluptatem provident. Quia ea non quisquam ut. Ut illo porro exercitationem cupiditate. Mollitia omnis rerum quo voluptas sed. Ut eos ullam delectus natus. Modi autem ab deserunt facere ullam tempore ut. Adipisci repellendus quas sed ut. Ipsa sint deleniti porro est voluptatibus sit repellendus. Inventore dolor nisi fugit voluptatem impedit. Est libero est error. Voluptate esse dolorem vel corrupti. Cumque eos nisi omnis iste unde enim voluptatem. Blanditiis culpa fuga dolor cumque et. Doloremque et consectetur recusandae fugiat sit quia aspernatur. Deserunt sunt unde voluptas facere voluptatum hic. Esse reiciendis sint quod et molestias. Ea libero sit voluptates quam necessitatibus. Repudiandae est natus omnis laboriosam. Aut sequi consectetur quae quas. Quia enim omnis consequuntur facilis in. Eius et sint optio omnis ut. Error modi voluptas rerum veniam sed assumenda. Officia sint hic veniam suscipit vero voluptatem iure esse. Labore officiis explicabo totam et debitis qui quae. At eius commodi ea harum ut quod. Velit in perferendis recusandae consequatur consectetur.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(17, 'Aut dolores.', 'simonis.hassan@yahoo.com', 'Beatae id qui amet recusandae reiciendis. Ratione itaque facilis earum. Magnam quaerat dolor vero itaque tenetur. Quod fugit est accusamus voluptas iste modi repudiandae dolorum. Praesentium aliquid minima veniam molestiae cupiditate. Fugit numquam consequatur necessitatibus et voluptas. Ea deserunt vero voluptas accusamus neque sed possimus non. Consequatur velit earum repellat qui. Harum vero necessitatibus itaque dolores. Fuga illum accusamus sapiente sint sunt. Reiciendis sit officiis eos mollitia at aut accusantium. Nemo sapiente aliquam et ut sed est neque. Aliquam debitis dignissimos et rerum laborum. Beatae adipisci sit fugit atque et aut. Suscipit molestiae voluptas sit deserunt quia fugiat veritatis. Et iure eveniet ad laborum ipsum assumenda qui. Odio non pariatur sint earum. Omnis cum dolore deleniti laboriosam et. Voluptatum et aut illo ipsum porro culpa nostrum vel. Dolore quos qui placeat rerum molestias facilis natus. Fugit et itaque voluptatem sunt. Quas quisquam enim ad mollitia consequatur. Accusamus aut temporibus odit eligendi reiciendis officia alias. Qui sunt itaque dolorem saepe deleniti dolorem dolor. Natus dolor molestiae cumque dolor voluptatem. Porro necessitatibus sed soluta illum id ut dolor et. Nam nisi nihil sint facere. Optio inventore laborum sit non vero quasi reiciendis harum. Ea labore velit velit dolorem sed repellat. Voluptatem dolor a facere perspiciatis repellendus rerum. Ea quo ipsam ut eius. Ducimus aut qui libero labore reiciendis veritatis. Eum velit ipsam laudantium ipsum reiciendis consequatur natus. Quia quae consequatur dolorum aliquam ducimus neque qui. Eligendi dicta sequi est et libero ducimus aspernatur. Qui beatae optio molestiae. Laudantium quia nihil modi sit quia facilis tenetur. Laboriosam ea quasi et consequatur ipsum voluptatem ad. Cum sint fugiat suscipit natus quas libero non. Veritatis beatae corrupti accusamus sunt non.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(18, 'Aut et.', 'vincenza.schmitt@lesch.com', 'Asperiores ut est voluptas rerum accusantium. Asperiores voluptas nihil architecto temporibus et. Aut id eius temporibus ipsam quia quo cupiditate. Quaerat rerum quia eos. Ad numquam sit libero exercitationem soluta ex. Ad minus vel odit sit provident minima. Et qui suscipit ea velit et impedit. Eligendi iste temporibus sit ut earum harum est. Consequatur blanditiis laboriosam sit earum ea. Dignissimos molestiae sunt neque et. Similique consequatur praesentium enim sint autem facere. Saepe debitis ratione quia ut esse qui nesciunt. Fuga autem autem iste minima ea est eos. Beatae consequatur suscipit ullam iste eum. Ut non dolore quam nihil dolores commodi est. Harum doloribus consequatur facilis perferendis eaque temporibus. Placeat totam nulla quasi ab dolorum sed. Et et accusantium dolor dolor nulla sed. Quaerat quibusdam autem dolorum soluta cupiditate. Dicta et dolor labore. Numquam veniam vero perferendis possimus corrupti esse ipsa. Et quia voluptatum atque alias accusamus nemo assumenda itaque. Eos reprehenderit dolorem dolore recusandae aliquid eaque maxime. Porro eos delectus ducimus dolores occaecati ut est vitae. Blanditiis labore sapiente quidem fugiat veniam. Recusandae consequatur magni pariatur eaque eveniet est corrupti. Consequatur minima inventore nesciunt. Corporis inventore deleniti sequi consequatur et blanditiis. Accusamus sed aut omnis consequatur natus et. Explicabo distinctio quo provident quis nesciunt molestias. Nostrum voluptas in sed. Iure aperiam dicta nostrum. Omnis nemo magnam iusto nihil numquam. Animi explicabo voluptates voluptate et vero vero ratione repellendus. Veritatis inventore consequatur cupiditate ullam. Voluptatem possimus ducimus excepturi sed eos exercitationem et. Inventore distinctio molestiae magnam consequatur ullam enim. Doloremque eos ipsum ipsam deserunt in et aliquid. Eaque est delectus rerum. Quidem occaecati cum in numquam fuga nesciunt eos. Hic tempore et ut et molestias architecto. Eveniet ducimus ut sint fugiat cupiditate illum. Sunt quia exercitationem reiciendis blanditiis rem et voluptas dolore. Sapiente accusantium dolorum dolores beatae nesciunt. Sint aut quia ut molestiae. Omnis dolorem aut eum. Amet consequatur qui autem deserunt suscipit possimus nisi distinctio. Doloremque amet qui magni sit ut illo sed. Earum blanditiis labore eos et inventore. Quibusdam eveniet impedit laboriosam perspiciatis pariatur id. Voluptas optio rerum est perspiciatis.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(19, 'Vero voluptatibus laborum.', 'ferdman@kulas.biz', 'Consectetur dolorem reiciendis ut vitae officiis id. Est qui autem dolorum voluptatem commodi ut. Et aut quia dolor quia sit. Eaque provident sint enim error impedit sed. Inventore voluptas temporibus labore. Rerum non incidunt quo soluta minima delectus. Vitae autem quis beatae amet id. Sed reprehenderit provident accusamus temporibus. Culpa sit optio voluptas. Dolore repellendus ipsum laudantium dicta aspernatur dolore. Omnis unde id cum maxime omnis. Cumque ullam repudiandae perspiciatis libero unde quis. Qui fuga a aspernatur eum qui nesciunt id. Earum facere qui est vitae molestiae sit nihil. Est aperiam esse laborum. Est sed laborum aut voluptatem quae. Minima corporis quas sapiente odit ex. Quod iure nobis odio officia. Exercitationem minus labore labore non rerum. Vero tempora est similique explicabo quis qui. Architecto sit rerum ea voluptates molestiae tempore laboriosam. A inventore molestias id quia amet qui harum. Et distinctio dolores itaque maiores harum sit porro. Consequatur praesentium necessitatibus et commodi. Provident officiis repellat qui. Suscipit non ipsum modi iusto vel quis et. Pariatur officia reprehenderit exercitationem ut voluptate qui. Beatae voluptas ipsa nesciunt veniam harum qui sint. Voluptas dicta ab sapiente totam magni id. Cum omnis et facere molestias voluptatibus. Voluptatem atque ut aut cum repudiandae sit. Eveniet hic aspernatur sit molestias. Dolorem veniam explicabo esse sequi debitis dolor. Iure aspernatur sint et debitis. Id ad autem enim dolorum vero aperiam nesciunt. Eaque quos voluptatibus eius magnam. Consequatur provident id pariatur ipsa reiciendis hic a. Similique quod nesciunt quisquam eveniet distinctio. Officiis consectetur sit vel praesentium nihil nihil quas consequatur. Id harum nesciunt facere qui rerum distinctio. Ea sit id exercitationem. Et eos odit nobis. Adipisci est labore itaque et. Quis fuga dolorum doloribus ducimus in. Quod ratione earum magnam fuga. Et odit alias dolore cum alias sequi labore. Delectus quas voluptatem odio. Odio provident officia dignissimos minus culpa beatae enim illum. Assumenda quaerat et dolores accusantium voluptatem harum sit. Totam tenetur et minima ut corrupti quasi qui. Culpa similique aut minus voluptatem. Voluptas hic excepturi qui et voluptates animi error voluptatibus. Modi voluptas assumenda esse vel illo nemo aut.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(20, 'Iste pariatur itaque.', 'joseph.konopelski@hotmail.com', 'Facilis beatae quam quod corrupti voluptas perferendis. Vel minus voluptate veniam est. In sit et recusandae quia dignissimos. Delectus velit odit nobis illo. Veniam totam debitis suscipit id. Nihil similique rerum libero ipsa facere. In officiis omnis repellat odit. Qui neque similique voluptatem enim assumenda in quasi. Dolor eum omnis quos soluta pariatur pariatur. Magnam exercitationem quod possimus quia quam enim dignissimos accusantium. Laboriosam libero sequi necessitatibus qui enim labore. Commodi eaque officia sed pariatur est rerum. Rerum ut quia tenetur asperiores aut. Harum incidunt ab dicta. Iste modi ratione magnam in quia debitis in provident. Consequatur ipsam voluptates ipsa sunt nisi aut dolor. Nesciunt sed laboriosam possimus iure nemo doloremque quasi. Aut eveniet ipsum id recusandae ea delectus nulla. Vel possimus et nesciunt. Nostrum cupiditate praesentium assumenda odio. Quaerat cupiditate aut qui. Beatae nisi exercitationem autem. Illum numquam est qui quaerat deserunt perspiciatis occaecati. Quia non et eum esse mollitia ut. Maxime impedit velit tenetur voluptatum quasi. Voluptas voluptate hic animi repellat est. Nihil illum aut veniam voluptatem aperiam. Nisi consectetur culpa laborum blanditiis ipsum cupiditate. Adipisci distinctio earum sint voluptatibus voluptas sed. Ipsam modi sint mollitia dolorum. Vel velit aut illum sit deserunt sed. Tenetur nisi iusto et et aperiam. Et natus recusandae tempore consectetur quam. Similique amet sint porro cupiditate eius ab totam. Earum quas iure sequi in. Sit illum blanditiis veritatis consectetur et ipsam tempore velit. Nisi nemo ipsam eum dolorem ducimus explicabo. Reprehenderit modi explicabo magnam quia aspernatur quia a. Reprehenderit eius repellat laudantium. Cupiditate asperiores doloribus velit totam aut occaecati tenetur. Non inventore molestiae quas aut consequatur adipisci voluptates.', '2023-01-16 10:27:12', '2023-01-16 10:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `core_services`
--

CREATE TABLE `core_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_services`
--

INSERT INTO `core_services` (`id`, `title`, `short_description`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Miss Ramona Homenick MD', 'Vitae minus quod harum nam aut dolor in. Nostrum porro qui delectus aut.', 'software_development.png', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(2, 'Rodrigo Wehner', 'Iure sequi illo quis nulla. Odit reiciendis et aut illum. Est deleniti saepe aut. Ad porro itaque sit.', 'software_development.png', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(3, 'Mae Eichmann', 'Sapiente maxime sit modi et. Eius laboriosam at neque mollitia pariatur provident qui.', 'software_development.png', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(4, 'Dariana Rice', 'In sit quisquam neque quia doloremque. Natus quis porro reiciendis.', 'software_development.png', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(5, 'Hope Kovacek', 'At repellendus suscipit ducimus rerum. Pariatur voluptatibus dolorem tempore non est.', 'software_development.png', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(6, 'Prof. Halle Kautzer II', 'Sapiente similique et incidunt et numquam sed. Non commodi officia eos ab.', 'software_development.png', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_emails`
--

CREATE TABLE `failed_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_id` int(11) DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'add , edit , delete , view',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_11_10_084155_create_logs_table', 1),
(5, '2022_11_11_123723_create_permission_tables', 1),
(6, '2022_11_14_125343_create_settings_table', 1),
(7, '2022_11_16_151111_create_sliders_table', 1),
(8, '2022_11_17_121445_create_blogs_table', 1),
(9, '2022_11_17_142125_create_contacts_table', 1),
(10, '2022_11_17_160403_create_blog_related_table', 1),
(11, '2022_11_24_110218_create_pages_table', 1),
(12, '2022_11_28_120448_create_blog_metas_table', 1),
(13, '2022_11_29_114614_create_emails_table', 1),
(14, '2022_11_29_114900_create_failed_emails_table', 1),
(15, '2022_11_30_110153_create_page_metas_table', 1),
(16, '2022_12_13_163505_create_core_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `parent_id`, `name`, `title`, `slug`, `short_description`, `long_description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'About Us', 'About Us', 'about-us', 'About Us Short Description', 'About Us Long Description', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(2, 0, 'Products And Service', 'Products And Service', 'products-and-service', 'Short Description', 'Long Description', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(3, 0, 'Useful Links', 'Useful Links', 'useful-links', 'Short Description', 'Long Description', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(4, 3, 'Nikita Kautzer', 'perferendis numquam et enim', 'nikita-kautzer', 'Qui et omnis dolorum asperiores est blanditiis qui.', 'Adipisci mollitia et dolore quasi occaecati laudantium nulla dolor. Est qui illum quis voluptatem autem. Earum qui eos dolor minima et nobis quisquam. Dicta temporibus voluptatum doloremque atque est iste inventore. Rerum aspernatur qui eum aliquid ipsum voluptatibus voluptatem. Voluptas accusamus atque nisi et. Eaque quod ipsa et. Sit et assumenda suscipit hic quibusdam necessitatibus. Nihil dolorem eius reprehenderit quia aperiam. Ipsa distinctio laborum laborum tempora amet. Qui ut delectus qui corrupti quis mollitia laborum. Non totam eos dicta placeat et. Provident et illum architecto. Fugiat tempore consequatur rerum vitae hic et necessitatibus necessitatibus. Explicabo sit et odit ducimus aut perferendis. Tempore est saepe quia et voluptatem nisi rem. Omnis non quia consectetur doloremque quis. Voluptate molestiae sed incidunt nam magnam.', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(5, 3, 'Miller Upton', 'eveniet aliquid vel qui', 'miller-upton', 'Rerum quam quas illo esse ab optio et. Saepe hic odio autem animi ut aut est.', 'Omnis eveniet minus quas sed doloribus vitae aut voluptas. Sit deleniti et dolores excepturi voluptate deserunt. Omnis deserunt porro qui ut similique quae veritatis. Ut fugit cumque omnis et et culpa. Aut est est eum nostrum dicta. Molestiae saepe dolores culpa id eos quo. Officia sit ut voluptatum ullam sit. Ea ea quibusdam amet laboriosam ea. Nihil enim sequi ut est ipsam saepe. Tempore quia distinctio molestias omnis hic sit maiores odio. Molestiae voluptatum repudiandae non omnis voluptatum et. Veritatis omnis aut excepturi vel et et vitae. Distinctio et velit et voluptatum placeat et quia dolores. Eum nihil officiis consequatur dolores enim ipsum eaque. Magni consequuntur asperiores nihil animi voluptas et earum. Optio quos inventore unde placeat quidem eaque. Quisquam pariatur eligendi numquam atque sunt rerum. Quibusdam deleniti facere cum optio nostrum sunt unde.', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(6, 2, 'Unique Miller', 'laboriosam ut est quia', 'unique-miller', 'Dolorem aliquam aspernatur qui eligendi aperiam nostrum repellat at.', 'Quia officia neque consequatur vero voluptas placeat. Laudantium vitae est blanditiis fugiat ut. Minus eum eos omnis nihil velit repellendus occaecati. Dicta enim et temporibus eius expedita delectus iste vero. Ratione aut eaque dolorum placeat voluptas perferendis qui libero. Sint dolore est unde. Quo corrupti earum aut ex modi nesciunt sed. Ut ut quia velit est illo qui hic. Quaerat vel voluptatem ex ducimus est libero dolor. Soluta mollitia exercitationem sapiente neque itaque et eaque. Aut sequi laudantium sunt et id molestiae recusandae. Sit id veniam ipsum voluptas. Cumque qui iusto culpa corporis et quasi occaecati cum. Non non nihil doloribus quia repellendus. Ipsa voluptatibus totam nostrum consequuntur et. Nostrum beatae odio amet expedita enim quia quasi. Quisquam voluptate quaerat quis explicabo. Ex voluptates repudiandae aliquam soluta ipsa quisquam.', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(7, 2, 'Edd Bode IV', 'eos rem voluptate porro', 'edd-bode-iv', 'Harum qui aut consequuntur voluptates nobis quia esse.', 'Ut sit facere velit voluptatem fugiat deserunt. Explicabo dolore illum voluptatem unde sunt itaque. Sapiente sunt corporis magnam nesciunt facere. Harum doloribus excepturi eveniet inventore et autem reprehenderit. Impedit qui ea voluptas possimus officia aut quos. Deserunt quidem ipsam non dolores dignissimos quis. Provident error libero provident officia est. In dolor nam recusandae qui sed non. Veniam incidunt minus eos vel possimus laudantium. Consectetur dolore sit voluptatem nihil. Corrupti porro quisquam fugiat reiciendis. Nobis vitae explicabo id quam amet sit. Repellat magnam id reprehenderit doloribus quis. Quo veritatis reiciendis amet ratione ex. Autem quas temporibus qui itaque quis nesciunt est. Dolores aperiam labore aliquam explicabo aperiam nesciunt neque. Temporibus natus incidunt tenetur qui quisquam labore. Quas beatae autem nostrum velit ut rerum. Est maiores consequatur facilis. Ut laboriosam soluta eos repudiandae eum placeat. Quae ad occaecati ut saepe.', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(8, 3, 'Sean Becker', 'nisi illum aperiam cupiditate', 'sean-becker', 'Pariatur asperiores non incidunt consectetur rem.', 'Sit dolor magnam quas sint distinctio ipsum. Eum ut corrupti quod aut aut itaque quos. Vel architecto et laborum commodi rem dolorem unde. Architecto minus fugiat eius animi esse expedita minima. Quas autem sint magnam sed. Dolorem voluptate ut labore praesentium illum et iusto. Soluta sed architecto quo maxime maiores eligendi vel. Laudantium qui deleniti ducimus ex necessitatibus recusandae asperiores non. Expedita soluta eum non placeat non. Dolorum temporibus cum maxime. Praesentium aut voluptas cum dignissimos molestiae occaecati. Nihil ea reprehenderit est ut mollitia unde quisquam. Ex quidem temporibus dolor et deleniti. Unde dicta recusandae voluptatibus similique fuga rerum. Sint quia blanditiis sit eum fugit ut. Aliquam ut velit fugiat ipsam. Incidunt distinctio dolorem quibusdam omnis debitis. Reprehenderit nostrum eligendi consequatur id. Beatae illum officiis quia dolores in. Id nam reiciendis rerum magni. Ea dolorum consequatur incidunt sed. Ut iusto aperiam quis et.', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(9, 1, 'Miss Cynthia Rau', 'nulla est voluptatibus sed', 'miss-cynthia-rau', 'Consequuntur est et est velit quia. Mollitia tenetur accusantium placeat.', 'Tenetur est perspiciatis ad ut. Autem aut deserunt laudantium quaerat qui consequatur possimus. Aut quia voluptatibus molestias. Pariatur ab rerum molestias et. Maiores harum enim veniam nesciunt. Quod non natus sed qui esse quae. Odio ipsa facere cum earum repudiandae dolore. Ut consequatur id sunt voluptatem. Vero non molestiae omnis autem cum sequi sunt. Officiis eum alias cumque eveniet pariatur dicta. Consequatur blanditiis voluptas nemo consectetur. Laudantium a at amet reprehenderit rerum perferendis. Voluptates possimus rerum maxime quibusdam. Pariatur alias voluptates voluptatibus aut et et consequatur a. Sint eius dicta molestiae. Hic exercitationem veritatis inventore quis ut excepturi earum commodi. Quia iusto amet aspernatur voluptatem quo adipisci. Nam vel quo excepturi facilis. Quasi iusto voluptatem dolorum et aut aut praesentium iure.', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(10, 3, 'Jimmie Hayes', 'voluptate temporibus veritatis magni', 'jimmie-hayes', 'Inventore ea dolorem eos labore qui rerum qui.', 'Soluta labore reprehenderit non debitis cumque. Adipisci tempora culpa distinctio accusamus. Omnis minus et deleniti ad et magnam. Iusto est maxime quibusdam ut labore adipisci illo. Ut et recusandae cupiditate autem nisi quis nihil. Dolorem sed distinctio ducimus id vel molestiae. Delectus quasi odit est sed quis rerum quia. Assumenda adipisci dolores in doloribus explicabo doloribus reiciendis. Et dolorem eveniet quae quasi dolores molestiae excepturi. Omnis eius ut sed perspiciatis quaerat voluptas. Animi provident repellendus commodi rerum qui laboriosam nobis nihil. Neque voluptas laudantium ut soluta. Et reiciendis pariatur a molestiae tenetur voluptatem sed. Corrupti iusto voluptas libero tenetur ab eveniet. Ut eum ut sit aut ipsum similique numquam. Laborum ullam rem esse doloremque ut. Sit illo rerum quia aut illo ipsa. Reiciendis dolore vitae aut.', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_metas`
--

CREATE TABLE `page_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_metas`
--

INSERT INTO `page_metas` (`id`, `page_id`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rerum omnis neque illo nisi. Amet vero quia ullam et mollitia voluptatem dolor. Esse esse velit et dolore blanditiis qui in dolorem.', 'Nulla voluptatibus deleniti tempora rerum. Nam repudiandae rerum ut ipsam. Quos velit et est deleniti.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(2, 2, 'Occaecati sint voluptatibus fuga consequatur itaque vero. Suscipit aut nam tempora exercitationem ut enim. Iure fugit et impedit est.', 'Consequatur autem aut cum adipisci eum et quisquam ad. Accusamus velit blanditiis temporibus ipsa quidem sed consequuntur.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(3, 3, 'Est laboriosam nobis alias animi eaque. Ab sed repellat quidem eum cum sit maxime. Minus alias non perferendis dicta voluptatem.', 'Fugiat vitae voluptas accusantium beatae hic et ad. Blanditiis quasi eligendi perspiciatis dolorum distinctio et et.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(4, 4, 'Nihil aut nisi est perferendis. Officiis dolorum non reiciendis amet. Dolorem fugit enim odit reiciendis.', 'Voluptas nam id iste ullam quas. Odit corrupti culpa omnis quia fugit. Repellendus et fugiat in commodi. Error eius ducimus eligendi provident.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(5, 5, 'Dolore aliquid vero voluptatem iusto cupiditate excepturi. Est qui ut ipsum eum voluptas voluptas atque. Earum quam sed cum dolores et eaque.', 'Numquam veniam maiores nulla sed quos est. Sed veritatis numquam omnis. Doloribus quam odio quia autem maiores eligendi.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(6, 6, 'Est quia quasi at et. Assumenda minus id ut quis modi. Ad ipsum eius et dolores. Corrupti harum sed ullam voluptatem officia consequatur placeat.', 'Culpa harum ex in et sapiente. Voluptatem vel culpa quibusdam excepturi illo perferendis voluptate. Qui ullam aperiam doloremque neque aut.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(7, 7, 'In beatae qui dignissimos optio non. Sequi reprehenderit dolores eos molestiae. Corrupti omnis veniam aut.', 'Nulla quia dolores non sit. Rerum fugit voluptatum saepe illo enim reiciendis suscipit et.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(8, 8, 'Perferendis praesentium est natus et excepturi sed. Repudiandae voluptas non sit quos in aliquid.', 'Esse ut corporis consequuntur. Blanditiis rerum quia unde. Alias nihil architecto quia.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(9, 9, 'Nihil aut tempore quae eveniet. Aut ipsa est aliquid ipsum placeat. Ipsum deleniti libero adipisci cum.', 'Soluta mollitia quos molestiae nisi repellendus. Velit saepe esse at nostrum. Quia accusamus occaecati aut quia sapiente a.', '2023-01-16 10:27:12', '2023-01-16 10:27:12'),
(10, 10, 'Molestiae dolor hic velit ipsa distinctio. Ex ut iusto nostrum enim aliquam natus et nesciunt.', 'Nobis nostrum nulla est totam officia consequatur aliquid totam. Voluptas ut distinctio hic ea ad. Vitae corporis inventore sint omnis quam quis.', '2023-01-16 10:27:12', '2023-01-16 10:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(2, 'role-create', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(3, 'role-edit', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(4, 'role-delete', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(5, 'admin-list', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(6, 'admin-create', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(7, 'admin-edit', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(8, 'admin-delete', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(9, 'user-list', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(10, 'user-create', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(11, 'user-edit', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(12, 'user-delete', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(13, 'contact-list', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(14, 'contact-create', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(15, 'contact-edit', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(16, 'contact-delete', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(17, 'slider-list', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(18, 'slider-create', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(19, 'slider-edit', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(20, 'slider-delete', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(21, 'blog-list', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(22, 'blog-create', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(23, 'blog-edit', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(24, 'blog-delete', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(25, 'page-list', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(26, 'page-create', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(27, 'page-edit', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(28, 'page-delete', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(29, 'setting-list', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(30, 'setting-create', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(31, 'setting-edit', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(32, 'setting-delete', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(33, 'coreService-list', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(34, 'coreService-create', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(35, 'coreService-edit', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11'),
(36, 'coreService-delete', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-01-16 10:27:11', '2023-01-16 10:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_account_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_account_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_account_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_account_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `header_logo`, `footer_logo`, `favicon`, `contact_email`, `location_address`, `contact_number`, `contact_whatsapp`, `linkedin_account_link`, `instagram_account_link`, `facebook_account_link`, `youtube_account_link`, `footer_text`, `title`, `keywords`, `description`, `website_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1749855649265578p_logo.png', '1749855649265578p_logo.png', 'favicon.png', 'contact@website.com', '413 Park avenue, Apposite Habbit main branch, Karachi.', '+923003185000', '+923003185000', 'https://www.linkedin.com/login', 'https://www.instagram.com/accounts/login/', 'https://www.facebook.com/login.php/', 'https://www.youtube.com/', '© 2023 E Commerce. All Rights Reserved.', 'E Commerce', 'E commerce big shopping site.', 'E commerce big shopping site, a big project for e commerce', 1, '2023-01-16 10:27:11', '2023-01-16 10:27:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `description`, `url`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'slider.jpg', 'Voluptates natus consequatur voluptatem.', 'Neque fuga facere veritatis et explicabo aliquid odit est ratione hic repellendus provident.', '#', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(2, 'slider.jpg', 'Nihil impedit sequi veniam minus voluptatem.', 'Molestias hic consectetur repudiandae dolor qui et repudiandae excepturi nemo voluptatem.', '#', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(3, 'slider.jpg', 'Tenetur facere corrupti molestias.', 'Aut perspiciatis iusto sit est tempora repellat nihil.', '#', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(4, 'slider.jpg', 'Sint in laudantium nisi numquam debitis.', 'Inventore perferendis sunt ut enim reiciendis error totam cum qui consequatur.', '#', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL),
(5, 'slider.jpg', 'Quis officia incidunt aut.', 'Qui ut ratione nemo eveniet praesentium debitis quis ullam quidem.', '#', 1, '2023-01-16 10:27:12', '2023-01-16 10:27:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 1,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `year`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tahseen Raza', 'admin@admin.com', NULL, '$2y$10$4hp2cDwHnJPtWRsFbOCxTOQ8WdfEMvLvU5g1kbKzXBjGAPmEdrGEa', 1, NULL, NULL, '2023-01-16 10:27:11', '2023-01-16 10:27:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_name_title_index` (`name`,`title`);

--
-- Indexes for table `blog_metas`
--
ALTER TABLE `blog_metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_metas_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `blog_related`
--
ALTER TABLE `blog_related`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_services`
--
ALTER TABLE `core_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_services_title_short_description_index` (`title`,`short_description`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emails_queue_index` (`queue`);

--
-- Indexes for table `failed_emails`
--
ALTER TABLE `failed_emails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_emails_uuid_unique` (`uuid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_metas`
--
ALTER TABLE `page_metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_metas_page_id_foreign` (`page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_is_admin_index` (`is_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_metas`
--
ALTER TABLE `blog_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_related`
--
ALTER TABLE `blog_related`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `core_services`
--
ALTER TABLE `core_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_emails`
--
ALTER TABLE `failed_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `page_metas`
--
ALTER TABLE `page_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_metas`
--
ALTER TABLE `blog_metas`
  ADD CONSTRAINT `blog_metas_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_metas`
--
ALTER TABLE `page_metas`
  ADD CONSTRAINT `page_metas_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
