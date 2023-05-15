-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `quantity` int NOT NULL,
  `description` varchar(10000) NOT NULL,
  `discount` varchar(45) NOT NULL,
  `made_in` int NOT NULL,
  `categories_type_id` int NOT NULL,
  `user_id` int NOT NULL,
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id_idx` (`categories_type_id`),
  KEY `fk_product_user1_idx` (`user_id`),
  KEY `nation_id_idx` (`made_in`),
  CONSTRAINT `fk_product_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `nation_id` FOREIGN KEY (`made_in`) REFERENCES `nation` (`id`),
  CONSTRAINT `product_id` FOREIGN KEY (`categories_type_id`) REFERENCES `categories_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=ucs2;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Stainless steel cooking pot',100000,'pot1.jpg',689,'Stainless steel cooking pot, easy to use and clean, very durable. It a perfect pot for your kitchen and  all of your cooking meals. Come in all size and color.','',2,1,1,'2021-05-01'),(2,'Stainless steel cooking pot',100000,'pot2.jpg',530,'Stainless steel cooking pot, easy to use and clean, very durable. It a perfect pot for your kitchen and  all of your cooking meals. Come in all size and color.','15',1,1,1,'2021-05-01'),(3,'Stainless steel cooking pot',100000,'pot3.jpg',9613,'Stainless steel cooking pot, easy to use and clean, very durable. It a perfect pot for your kitchen and  all of your cooking meals. Come in all size and color.','35',2,1,1,'2021-05-01'),(4,'Oversize stainless steel pot',100000,'pot4.jpg',9613,'Stainless steel cooking pot, easy to use and clean, very durable. It a perfect pot for your kitchen and  all of your cooking meals. Come in all size and color.','20',3,1,1,'2022-07-12'),(5,'Oversize stainless steel pot',500000,'pot5.jpg',689,'Stainless steel cooking pot, easy to use and clean, very durable. It a perfect pot for your kitchen and  all of your cooking meals. Come in all size and color.','50',4,1,1,'2022-07-12'),(6,'Non-stick cooking pan',500000,'pan1.jpg',213,'Non-stick durable cooking pan. A perfect kitchen need a perfect pan for the perfect chef. Easy to wash and clean with soap or hot water.','',1,2,1,'2022-07-12'),(7,'Non-stick cooking pan',100000,'pan2.jpg',9613,'Non-stick durable cooking pan. A perfect kitchen need a perfect pan for the perfect chef. Easy to wash and clean with soap or hot water.','',5,2,1,'2022-07-12'),(8,'Non-stick cooking pan',500000,'pan3.jpg',334,'Non-stick durable cooking pan. A perfect kitchen need a perfect pan for the perfect chef. Easy to wash and clean with soap or hot water.','',6,2,1,'2022-07-12'),(9,'Non-stick cooking pan',450000,'pan4.jpg',689,'Non-stick durable cooking pan. A perfect kitchen need a perfect pan for the perfect chef. Easy to wash and clean with soap or hot water.','20',8,2,1,'2022-07-12'),(10,'Non-stick cooking pan',100000,'pan5.jpg',530,'Non-stick durable cooking pan. A perfect kitchen need a perfect pan for the perfect chef. Easy to wash and clean with soap or hot water.','',1,2,1,'2022-07-12'),(11,'Non-stick cooking pan',450000,'pan6.jpg',213,'Non-stick durable cooking pan. A perfect kitchen need a perfect pan for the perfect chef. Easy to wash and clean with soap or hot water.','',3,2,1,'2022-07-12'),(12,'Iron skillet',450000,'fryingpan1.jpg',689,'Chef iron skillet to cook all your dream chef meals. Easy to clean and season, durable and can be used to up to 10+ year if regulary clean.','',8,3,1,'2022-07-12'),(13,'Iron skillet',100000,'fryingpan2.jpg',213,'Chef iron skillet to cook all your dream chef meals. Easy to clean and season, durable and can be used to up to 10+ year if regulary clean.','',10,3,1,'2022-07-12'),(14,'Non-stick frying pan',100000,'fryingpan3.jpg',530,'Chef iron skillet to cook all your dream chef meals. Easy to clean and season, durable and can be used to up to 10+ year if regulary clean.','35',1,3,1,'2022-07-12'),(15,'Non-stick frying pan',450000,'fryingpan4.jpg',213,'Chef iron skillet to cook all your dream chef meals. Easy to clean and season, durable and can be used to up to 10+ year if regulary clean.','',3,3,1,'2022-07-12'),(16,'Ultimate cookware set',450000,'cookwareset1.jpg',10398,'The \"All you ever need\" cookware for your kitchen. Stylist , modern , high-quality cookware set is \"all you ever need\"','',5,4,1,'2022-07-12'),(17,'Full color cookware set',450000,'cookwareset2.jpg',334,'The \"All you ever need\" cookware for your kitchen. Stylist , modern , high-quality cookware set is \"all you ever need\"','',7,4,1,'2022-07-12'),(18,'Modern cookware set',100000,'cookwareset3.jpg',9613,'The \"All you ever need\" cookware for your kitchen. Stylist , modern , high-quality cookware set is \"all you ever need\"','20',8,4,1,'2022-07-12'),(19,'India handis',450000,'handis1.jpg',334,'The inda handis is perfect for cooking, especially for slow-cooking so it can preserve all the nutrients in the foods.','',2,5,1,'2022-07-12'),(20,'India handis',500000,'handis2.jpg',213,'The inda handis is perfect for cooking, especially for slow-cooking so it can preserve all the nutrients in the foods.','20',1,5,1,'2022-07-12'),(21,'India handis',500000,'handis3.jpg',334,'The inda handis is perfect for cooking, especially for slow-cooking so it can preserve all the nutrients in the foods.','',8,5,1,'2023-05-01'),(22,'India karahi',500000,'karahi1.jpg',334,'Use to make the best famous India karahi dish. Even you can be the five star chef.','',10,6,1,'2023-05-01'),(23,'India karahi',100000,'karahi2.jpg',213,'Use to make the best famous India karahi dish. Even you can be the five star chef.','',10,6,1,'2023-05-01'),(24,'India karahi',100000,'karahi3.jpg',163,'Use to make the best famous India karahi dish. Even you can be the five star chef.','15',10,6,1,'2023-05-01'),(25,'Non-stick grilling pan',450000,'grillpan1.jpg',689,'Non-stick grilling pan. Mainly use to grill the best steak you have never tasted.','50',2,7,1,'2023-05-01'),(26,'Non-stick grilling pan',100000,'grillpan2.jpg',9613,'Non-stick grilling pan. Mainly use to grill the best steak you have never tasted.','',4,7,1,'2023-05-01'),(27,'Non-stick grilling pan',450000,'grillpan3.jpg',10398,'Non-stick grilling pan. Mainly use to grill the best steak you have never tasted.','',6,7,1,'2023-05-01'),(28,'India tawas',450000,'tawas1.jpg',213,'India tawas can be use to make Rotis & Dosas, a common dish in India.','',8,8,1,'2023-05-01'),(29,'India tawas',100000,'tawas2.jpg',163,'India tawas can be use to make Rotis & Dosas, a common dish in India.','15',1,8,1,'2023-05-01'),(30,'India tawas',100000,'tawas3.jpg',530,'India tawas can be use to make Rotis & Dosas, a common dish in India.','',2,8,1,'2023-05-01'),(31,'Colorfull egg poacher',100000,'eggpoacher1.jpg',213,'Want to boil the perfect eggs? This item is for you,this product can cook the egg super fast in just 5 minute or less, with all of your favorite color too.','35',4,9,1,'2023-05-01'),(32,'Modern egg poacher',230000,'eggpoacher2.jpg',163,'Want to boil the perfect eggs? This item is for you, this product can cook the egg super fast in just 5 minute or less, add a little style in your house.','',3,9,1,'2023-05-01'),(33,'Simple egg poacher',540000,'eggpoacher3.jpg',213,'Want to boil the perfect eggs? This item is for you,this product can cook the egg super fast in just 5 minute or less, that all (bc it simple).','35',3,9,1,'2023-05-01'),(34,'High-tech steamer',140000,'steamer1.jpg',530,'High-tech steamer,boils your all your food!. Vegestable? NO PROBLEM. Dumpling? NO PROBLEM! Also easy to use and super fast.','',3,10,1,'2023-05-01'),(35,'Modern steamer',500000,'steamer2.jpg',689,'Classy High-tech steamer,boils your all your food!. Vegestable? NO PROBLEM. Dumpling? NO PROBLEM! Also easy to use and super fast.','35',9,10,1,'2023-05-01'),(36,'Steamer 2000',500000,'steamer3.jpg',530,'\"The One\" steamer. Boils your all your food!. Vegestable? NO PROBLEM. Dumpling? NO PROBLEM! Also easy to use and super fast.','',9,10,1,'2023-05-01'),(37,'Meat holder freezer',10000000,'freezer1.jpg',163,'Mainly use to store meat with the capacity that can store of what a whole ELEPHANT. You read it right a WHOLE ELEPHANT!!','',6,11,1,'2023-05-01'),(38,'Super cool freezer',10000000,'freezer2.jpg',530,'Cool all your stuff super fast, carefull cause it can freeze your hand too.','',5,11,1,'2023-05-01'),(39,'Freezer size XL',10000000,'freezer3.jpg',10398,'Just a freezer but bigger. Well bigger than your house.','50',3,11,1,'2023-05-01'),(40,'Modern fridge 20233',6000000,'fridge1.jpg',163,'The Future is here. Introducing the \"super duper all ultility wombo combo creating ice and clean water with 16 spacing to store all your fresh foods\" fridge.','',2,12,1,'2023-05-01'),(41,'High-tech voice regconize fridge',6000000,'fridge2.jpg',213,'High-tech voice regconize fridge, just regconize your voice, that all.','',1,12,1,'2023-05-01'),(42,'Small old school fridge',6000000,'fridge3.jpg',9613,'2011 fridge, maybe unuseable.','',1,12,1,'2023-05-01'),(43,'M blender',100000,'blender1.jpg',334,'Small blender','20',1,13,1,'2023-05-01'),(44,'Modern look blender',340000,'blender2.jpg',9613,'It a blender but morden','',1,13,1,'2023-05-01'),(45,'Blender size XL',340000,'blender3.jpg',689,'Big blender','',1,13,1,'2023-05-01'),(46,'The super duper bread-maker 5000',220000,'breadmaker1.jpg',9613,'Make all the bread that you can eat for a lifetime.','15',1,14,1,'2023-05-01'),(47,'Modern bread-maker',100000,'breadmaker2.jpg',163,'It a morden bread maker.','',5,14,1,'2023-05-01'),(48,'Eco-friendly bread-maker',220000,'breadmaker3.jpg',213,'Make bread from soils, grass, etc (Because it eco-friendly)','',6,14,1,'2023-05-01'),(49,'The coffee terminator',100000,'coffeemaker1.jpg',9613,'\"I came from the future to terminate your sleepiness\". The coffee terminator will garantee you a super highly energized mood for a whole year. (dont use for more then 2 cup per year or else you\'ll have a heart failure)','',2,15,1,'2023-05-01'),(50,'\"Ai will dominate the world\" coffee maker',220000,'coffeemaker2.jpg',530,'Technology have become to advance so that even the coffee machine can rebel and take over the world. Better say \"thanks\" after a automatic coffee cup.','',1,15,1,'2023-05-01'),(51,'High tech modern looking coffee maker',500000,'coffeemaker3.jpg',530,'A coffee machine that every riches people have in they mansion.(Not sure if they even drink coffee)','20',1,15,1,'2023-05-01'),(52,'For \"hot summer\"  ice-cream maker',500000,'icecreammaker1.jpg',10398,'Make icecream that so cold it make your brain freeze till the next summer to melt all the ice off.','',1,16,1,'2023-05-01'),(53,'Easy ice-cream maker',360000,'icecreammaker2.jpg',334,'An icecream maker. Easy to use, full color variant.','50',1,16,1,'2023-05-01'),(54,'Modern sorbet maker',420000,'sorbetmaker1.jpg',9613,'High-tech modern technology sorbet maker. Can make up to 200 sorbet in 1hr.','',7,16,1,'2023-05-01'),(55,'Super duper fast electric kettle',500000,'electrickettle1.jpg',10398,'Boils your water in just under 2 minute. Introducing our brand new high-tech, modern eletric kettle. Easy to use, super fast, very durable.','',8,17,1,'2023-05-01'),(56,'\"The flash\" electric kettle',790000,'electrickettle2.jpg',689,'Just like the name, this electric kettle boils your water so fast it travel back in time. ','',9,17,1,'2023-05-01'),(57,'\"It\'ll take 1hr long\" electric kettle',220000,'electrickettle3.jpg',163,'You have nothing but time? Introducing our brand new \"1hr\" electric kettle where you waste your time just for some boiling water','',10,17,1,'2023-05-01'),(58,'The chomp chomp 3000',300000,'foodchopper1.jpg',689,'\"The chomp chomp 3000\" is a food chopper that chop your food fast and efficiency. With brand new 2 double blade that chop your food 3x fast any other food chopper. Want it? Buy Now!','35',10,18,1,'2023-05-01'),(59,'Lame food chopper',300000,'foodchopper2.jpg',9613,'Eh just a food chopper. Nothing special. But here i am squeezing my brain out just to write a simple discription.','',10,18,1,'2023-05-01'),(60,'Eco-friendly food chopper',300000,'foodchopper3.jpg',10398,'Eco-friendly food chopper made from recyling material like plastic, metal, raw-materials. Designed to be unbreakable, effeciency.','',9,18,1,'2023-05-01'),(61,'Assasin toaster',67000000,'toaster1.jpg',9613,'Toaster that all the hitmen use. Super effective and a one-time use.','20',9,19,1,'2023-05-01'),(62,'\"Crunchy bread making\" toaster',670000,'toaster2.jpg',334,'Make you the best toast you ever eat. Want it soft? You got it! Want it nice and crisp? You got it! Want it to produce a whole army of toast to envade the world? YOU GOT IT!!!','',7,19,1,'2023-05-01'),(63,'Vol.3 high-tech anything toaster',800000,'toaster3.jpg',334,'Super high-tech toaster that can make even a dough of bread to a toaster. It like an oven but very small and portable.','',5,19,1,'2023-05-01'),(64,'Waterproof flask',120000,'flask1.jpg',334,'Fully water proof cooking flask. 250ml stored cooking flask. Easy to clean and durable.','',6,20,1,'2023-05-01'),(65,'Waterproof eco-friendly flask ',120000,'flask2.jpg',9613,'Fully water proof eco-friendly cooking flask. Made from recyling materials. Easy to clean and durable.','',6,20,1,'2023-05-01'),(66,'Waterproof flask-all variant color',120000,'flask3.jpg',10398,'Fully water proof cooking flask. 250ml stored cooking flask. Easy to clean and durable. Come in all variant color.','50',8,20,1,'2023-05-01'),(67,'Colorful spice jar',300000,'spicejar1.jpg',9613,'Kitchen spice jars. Come with 5 jar and different color. Easy to clean and durable.','',1,21,1,'2023-05-01'),(68,'Modern style spice jar',300000,'spicejar2.jpg',334,'Kitchen spice jars. With modern look to make your kitchen a complete look brand new. Easy to clean and durable.','',4,21,1,'2023-05-01'),(69,'Ultility spice jar',120000,'spicejar3.jpg',10398,'Kitchen spice jars. Come with 5 wooden spoon and 2 different kind of lid for safely store your spices and avoid spoiling.','',3,21,1,'2023-05-01'),(70,'Convinience storage bag',250000,'storagebag1.jpg',334,'Cooking storage bag. Now have a ziplock to keep your food and vegetables fresh and clean.','15',3,22,1,'2023-05-01'),(71,'Convinience storage bag black-white-brown',250000,'storagebag2.jpg',689,'Cooking storage bag. Now have a ziplock to keep your food and vegetables fresh and clean. Come with black-white-brown color.','',3,22,1,'2023-05-01'),(72,'Convinience eco-friendly storage bag',250000,'storagebag3.jpg',10398,'Cooking storage bag. Now have a ziplock to keep your food and vegetables fresh and clean. Made from elastic plastic to help the enviroment and safely store your food and vegetables.','',2,22,1,'2023-05-01'),(73,'Modern lunch box',50000,'lunchbox1.jpg',689,'Modern lunch box. Have space to store a chopstick, a spoon, knife and fork. Inside divided into 3 compartments to easily store your favorite lunch.','',1,23,1,'2023-05-01'),(74,'Lover lunch box',50000,'lunchbox2.jpg',163,'Looking for something romantic and beautiful? This product is the perfect match for you and your lover. Twice the size to store all your shared cooking meal for you and your lover to enjoy a nice evening picnics with each other.','',1,23,1,'2023-05-01'),(75,'Lunch box',50000,'lunchbox3.jpg',10398,'Simple normal size lunch box that store your meal for the day. Can keep your meal hot and fresh so it doesn\'t stay cold and soggy.','20',1,23,1,'2023-05-01'),(76,'Full color vacuum bottle',30000,'vacuumbottle1.jpg',689,'Simple portable vacuum bottle for your picnic, your work day,... Come with different variable color.','',1,24,1,'2023-05-01'),(77,'Modern vacuum bottle',30000,'vacuumbottle2.jpg',163,'Have yourself a modern looking vacuum bottle to bring to your everyday life. Store up to 1l any kind water and keep the temperature to up to 5hr.','',1,24,1,'2023-05-01'),(78,'High-tech vacuum bottle',30000,'vacuumbottle3.jpg',163,'Super high-tech vacuum bottle. By using electric to adjust your temperature for 24h with an easy recharge for only 25 minute.','15',1,24,1,'2023-05-01');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-15 14:57:31
