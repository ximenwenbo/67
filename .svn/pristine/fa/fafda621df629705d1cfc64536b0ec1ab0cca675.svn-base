-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: php68
-- ------------------------------------------------------
-- Server version	5.5.53

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `sp_attribute`
--

DROP TABLE IF EXISTS `sp_attribute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `attr_name` varchar(32) NOT NULL COMMENT '属性名称',
  `type_id` smallint(5) unsigned NOT NULL COMMENT '外键，类型id',
  `attr_sel` enum('only','many') NOT NULL DEFAULT 'only' COMMENT '属性是否可选，only:唯一  many:单选/有多个可选值',
  `attr_vals` varchar(256) NOT NULL DEFAULT '' COMMENT '可选值列表信息,例如颜色：白色,红色,绿色 多个可选值通过,逗号分隔',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`attr_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='属性表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_attribute`
--

LOCK TABLES `sp_attribute` WRITE;
/*!40000 ALTER TABLE `sp_attribute` DISABLE KEYS */;
INSERT INTO `sp_attribute` VALUES (1,'cpu',4,'only','',NULL,1533629655,1533629655),(2,'颜色',4,'many','黑色,白色,灰色,红色',1533351517,1533351517,NULL),(4,'',0,'only','黑色,白色',1533351552,1533351552,NULL),(5,'',0,'only','',1533351606,1533351606,NULL),(6,'颜色',1,'many','黑色,白色,灰色,红色',1533351921,1533629497,NULL),(7,'网络',4,'many','联通,移动,电信',1533352220,1533352220,NULL),(10,'教材',5,'many','PHP教材,Java教材,Python教材',1533472277,1533472277,NULL),(11,'小人书',5,'many','动画,唱歌,画画',1533621034,1533621034,NULL);
/*!40000 ALTER TABLE `sp_attribute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_category`
--

DROP TABLE IF EXISTS `sp_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `cat_pid` int(11) NOT NULL COMMENT '父级id',
  `cat_name` varchar(50) NOT NULL COMMENT '分类名称',
  `cat_level` enum('0','1','2') DEFAULT '0' COMMENT '分类一共有3个级别，通过0/1/2表示',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_category`
--

LOCK TABLES `sp_category` WRITE;
/*!40000 ALTER TABLE `sp_category` DISABLE KEYS */;
INSERT INTO `sp_category` VALUES (1,0,'家用电器','0',NULL,1516192636,NULL),(2,0,'五金','0',NULL,1516193043,1516193043),(11,1,'厨卫家电','1',NULL,1516192703,NULL),(12,2,'男装','1',NULL,1516193041,1516193041),(111,11,'高压锅','2',NULL,NULL,NULL),(112,11,'电饭锅','2',NULL,NULL,NULL),(113,11,'油烟机','2',NULL,NULL,NULL),(114,11,'冰箱','2',NULL,1516192938,1516192938),(122,12,'衬衫','2',NULL,1516193039,1516193039),(125,2,'扳子','1',1516005404,1516193037,1516193037),(126,125,'老虎扳子','2',1516005414,1516193035,1516193035),(127,1,'空调','1',1516006929,1516192655,NULL),(128,11,'东多','2',1516006938,1516192932,1516192932),(129,0,'服装','0',1516007552,1516007552,NULL),(130,0,'图书','0',1516007649,1516193223,NULL),(131,130,'少儿','1',1516007709,1516193229,NULL),(132,1,'电视','1',1516192649,1516192649,NULL),(133,11,'new node','2',1516192661,1516192664,1516192664),(134,1,'洗衣机','1',1516192673,1516192673,NULL),(135,1,'冰箱','1',1516192681,1516192681,NULL),(136,1,'手机','1',1516192689,1516192689,NULL),(137,132,'曲面电视','2',1516192711,1516192711,NULL),(138,132,'超薄电视','2',1516192718,1516192718,NULL),(139,132,'HDR电视','2',1516192723,1516192723,NULL),(140,132,'OLED电视','2',1516192731,1516192731,NULL),(141,132,'4K超清电视','2',1516192743,1516192743,NULL),(142,132,'人工智能电视','2',1516192751,1516192751,NULL),(143,127,'壁挂式','2',1516192761,1516192761,NULL),(144,127,'柜式','2',1516192773,1516192773,NULL),(145,127,'中央','2',1516192779,1516192779,NULL),(146,127,'配件','2',1516192784,1516192784,NULL),(147,134,'滚筒','2',1516192809,1516192809,NULL),(148,134,'洗烘一体','2',1516192836,1516192836,NULL),(149,134,'波轮洗衣机','2',1516192847,1516192847,NULL),(150,134,'迷你洗衣机','2',1516192855,1516192855,NULL),(151,134,'烘干机','2',1516192863,1516192863,NULL),(152,134,'配件','2',1516192869,1516192869,NULL),(153,135,'多门对开','2',1516192887,1516192887,NULL),(154,135,'三门双开','2',1516192894,1516192894,NULL),(155,135,'冷柜冰吧','2',1516192903,1516192903,NULL),(156,135,'酒柜冰箱','2',1516192912,1516192912,NULL),(157,135,'配件','2',1516192920,1516192920,NULL),(158,136,'游戏手机','2',1516192947,1516192947,NULL),(159,136,'老人机','2',1516192954,1516192954,NULL),(160,136,'拍照神器','2',1516192963,1516192963,NULL),(161,136,'女性手机','2',1516192969,1516192969,NULL),(162,136,'充电宝','2',1516192974,1516192974,NULL),(163,136,'数据线','2',1516192981,1516192981,NULL),(164,136,'手机壳','2',1516192987,1516192987,NULL),(165,136,'贴膜','2',1516192995,1516192995,NULL),(166,136,'支架','2',1516193000,1516193000,NULL),(167,129,'女装','1',1516193020,1516193020,NULL),(168,129,'男装','1',1516193025,1516193025,NULL),(169,129,'童装','1',1516193050,1516193050,NULL),(170,167,'连衣裙','2',1516193056,1516193056,NULL),(171,167,'羽绒服','2',1516193062,1516193062,NULL),(172,167,'毛呢大衣','2',1516193068,1516193068,NULL),(173,167,'针织衬衫','2',1516193089,1516193089,NULL),(174,167,'卫衣','2',1516193094,1516193094,NULL),(175,167,'短外套','2',1516193102,1516193102,NULL),(176,168,'T桖','2',1516193123,1516193123,NULL),(177,168,'牛仔裤','2',1516193131,1516193131,NULL),(178,168,'休闲裤','2',1516193137,1516193137,NULL),(179,168,'衬衫','2',1516193150,1516193150,NULL),(180,168,'短裤','2',1516193155,1516193155,NULL),(181,168,'羽绒服','2',1516193160,1516193160,NULL),(182,168,'棉服','2',1516193164,1516193164,NULL),(183,168,'真皮皮衣 ','2',1516193171,1516193171,NULL),(184,169,'卫衣裤子','2',1516193178,1516193178,NULL),(185,169,'外套','2',1516193184,1516193184,NULL),(186,169,'套装','2',1516193188,1516193188,NULL),(187,169,'大衣','2',1516193201,1516193201,NULL),(188,169,'毛衣','2',1516193206,1516193206,NULL),(189,169,'针织衫','2',1516193215,1516193215,NULL),(190,130,'教育','1',1516193233,1516193233,NULL),(191,130,'文艺','1',1516193238,1516193238,NULL),(192,130,'经营励志','1',1516193248,1516193248,NULL),(193,131,'0-2岁','2',1516193257,1516193257,NULL),(194,131,'3-6岁','2',1516193265,1516193265,NULL),(195,131,'7-10岁','2',1516193271,1516193271,NULL),(196,131,'11-14岁','2',1516193278,1516193278,NULL),(197,131,'儿童文学','2',1516193285,1516193285,NULL),(198,131,'绘本','2',1516193291,1516193291,NULL),(199,131,'科普','2',1516193295,1516193295,NULL),(200,131,'儿童启蒙','2',1516193304,1516193304,NULL),(201,131,'手工游戏','2',1516193311,1516193311,NULL),(202,190,'教材','2',1516193317,1516193317,NULL),(203,190,'中小学','2',1516193321,1516193321,NULL),(204,190,'外语','2',1516193326,1516193326,NULL),(205,190,'字典词典','2',1516193331,1516193331,NULL),(206,190,'课外读物','2',1516193338,1516193338,NULL),(207,190,'英语四六级','2',1516193344,1516193344,NULL),(208,190,'会计类','2',1516193350,1516193350,NULL),(209,190,'国家公务员','2',1516193363,1516193363,NULL),(210,191,'小说','2',1516193373,1516193373,NULL),(211,191,'文学','2',1516193377,1516193377,NULL),(212,191,'传记','2',1516193382,1516193382,NULL),(213,191,'动漫','2',1516193386,1516193386,NULL),(214,191,'艺术','2',1516193390,1516193390,NULL),(215,191,'摄影','2',1516193394,1516193394,NULL),(216,191,'书法','2',1516193397,1516193397,NULL),(217,191,'音乐','2',1516193401,1516193401,NULL),(218,191,'绘画','2',1516193404,1516193404,NULL),(219,192,'管理','2',1516193410,1516193410,NULL),(220,192,'金融','2',1516193415,1516193415,NULL),(221,192,'投资','2',1516193419,1516193419,NULL),(222,192,'经济','2',1516193422,1516193422,NULL),(223,192,'励志与成功','2',1516193431,1516193431,NULL),(224,192,'市场营销','2',1516193438,1516193438,NULL),(225,192,'股票','2',1516193441,1516193441,NULL),(226,130,'人文社科','1',1516193454,1516193454,NULL),(227,226,'历史','2',1516193459,1516193459,NULL),(228,226,'心理学','2',1516193464,1516193464,NULL),(229,226,'政治/军事','2',1516193473,1516193473,NULL),(230,226,'国学/古籍','2',1516193483,1516193483,NULL),(231,226,'哲学/宗教','2',1516193508,1516193508,NULL),(232,226,'社会科学','2',1516193515,1516193515,NULL),(233,0,'理财','0',1516261927,1516261927,NULL),(234,0,'机票','0',1516261932,1516261932,NULL),(235,0,'艺术','0',1516261940,1516261940,NULL),(236,0,'玩具','0',1516261948,1516261948,NULL),(237,0,'乐器','0',1516261954,1516261954,NULL),(238,0,'美妆','0',1516261960,1516261960,NULL),(239,0,'医疗设备','0',1516261969,1516261969,NULL),(240,0,'食品','0',1516261975,1516261975,NULL),(241,0,'建材','0',1516261980,1516261980,NULL),(242,0,'汽车','0',1516261990,1516261990,NULL),(243,0,'户外','0',1516261994,1516261994,NULL),(244,0,'医药','0',1516261997,1516262032,1516262032),(245,0,'运动','0',1516262002,1516262024,1516262024),(246,0,'root node','0',1525678137,1526002907,1526002907),(247,136,'智能手机','2',1526002838,1526002838,NULL);
/*!40000 ALTER TABLE `sp_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_consignee`
--

DROP TABLE IF EXISTS `sp_consignee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_consignee` (
  `cgn_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `user_id` int(11) NOT NULL COMMENT '会员id',
  `cgn_name` varchar(32) NOT NULL COMMENT '收货人名称',
  `cgn_address` varchar(200) NOT NULL DEFAULT '' COMMENT '收货人地址',
  `cgn_tel` varchar(20) NOT NULL DEFAULT '' COMMENT '收货人电话',
  `cgn_code` char(6) NOT NULL DEFAULT '' COMMENT '邮编',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`cgn_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='收货人表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_consignee`
--

LOCK TABLES `sp_consignee` WRITE;
/*!40000 ALTER TABLE `sp_consignee` DISABLE KEYS */;
INSERT INTO `sp_consignee` VALUES (1,5,'王二柱','上海市徐汇区老沪闵路395号','13566771298','306810',NULL,NULL,NULL),(2,5,'铁锤','江苏省南京市江宁区禄口街道谢村社区','13126537865','600981',NULL,NULL,NULL),(3,224,'鸭蛋','山东省济南市市中区经四路343号','18902564321','600214',NULL,NULL,NULL),(4,12,'赵大海','山东省枣庄市市中区建华西路177号','15765329087','600983',NULL,NULL,NULL),(5,12,'变形金刚','湖南省衡阳市衡南县硫市镇富民路18号','15028374375','600912',NULL,NULL,NULL);
/*!40000 ALTER TABLE `sp_consignee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_goods`
--

DROP TABLE IF EXISTS `sp_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `goods_name` varchar(128) NOT NULL COMMENT '商品名称',
  `goods_price` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `goods_number` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '商品数量',
  `goods_weight` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '商品重量',
  `is_seckill` enum('0','1') NOT NULL DEFAULT '0' COMMENT '该商品是否正在被秒杀0:否  1:是(说明商品已经进入秒杀范围中，前台开始展示了)',
  `start_time` int(11) DEFAULT NULL COMMENT '秒杀开始时间',
  `end_time` int(11) DEFAULT NULL COMMENT '秒杀结束时间',
  `goods_price_seckill` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品秒杀的价格',
  `goods_number_seckill` tinyint(3) unsigned NOT NULL DEFAULT '10' COMMENT '商品秒杀的数量',
  `is_promotion` enum('0','1') DEFAULT '0' COMMENT '0：不促销，1：促销',
  `goods_salenum` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '商品卖出数量',
  `type_id` smallint(5) unsigned NOT NULL COMMENT '类型id',
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '分类id',
  `cat_one_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '分类一级id',
  `cat_two_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '分类二级id',
  `cat_three_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '分类三级id',
  `goods_attrs` text COMMENT '商品对应的属性信息',
  `goods_introduce` text COMMENT '商品详情介绍',
  `goods_logo` char(128) NOT NULL DEFAULT '' COMMENT '商品图片',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '记录删除时间，假(逻辑)删除',
  PRIMARY KEY (`goods_id`),
  UNIQUE KEY `goods_name` (`goods_name`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COMMENT='商品表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_goods`
--

LOCK TABLES `sp_goods` WRITE;
/*!40000 ALTER TABLE `sp_goods` DISABLE KEYS */;
INSERT INTO `sp_goods` VALUES (76,'谢谢你风雨里',234.88,234,123,'0',NULL,NULL,0.00,10,'0',0,1,234,234,0,0,'a:1:{i:6;a:1:{i:0;s:6:\"黑色\";}}','法国人','./uploads/goods/20180817/7903a43e490d97cd5e89fe36ff02be11.jpg',1534469446,1534469446,NULL),(77,'dasdas',4000.00,234,123,'0',NULL,NULL,0.00,10,'0',0,1,129,129,0,0,'a:1:{i:6;a:1:{i:0;s:6:\"黑色\";}}','dd','./uploads/goods/20180817/c1d593bed68359c9de64364e3f15a19c.jpg',1534469519,1534469519,NULL),(78,'一支穿云箭啊aafsfg',234.66,123,123,'0',NULL,NULL,0.00,10,'0',0,1,130,130,0,0,'a:1:{i:6;a:1:{i:0;s:6:\"白色\";}}','etre','./uploads/goods/20180817/e208d1a675cf728fa3ad6bead3791392.jpg',1534470044,1534470044,NULL),(79,'一支云箭啊aa',4000.00,234,123,'0',NULL,NULL,0.00,10,'0',0,5,235,235,0,0,'a:2:{i:10;a:1:{i:0;s:9:\"PHP教材\";}i:11;a:1:{i:0;s:6:\"动画\";}}','fsdf','./uploads/goods/20180817/4ce24e6c7ecafa0255b3af6a7a7493c0.jpg',1534473966,1534473966,NULL),(80,'一支云箭ds啊aafs',4000.00,234,123,'0',NULL,NULL,0.00,10,'0',0,5,235,235,0,0,'a:2:{i:10;a:1:{i:0;s:9:\"PHP教材\";}i:11;a:1:{i:0;s:6:\"动画\";}}','fsdf','./uploads/goods/20180817/852614692a5a053a3051f17136115807.jpg',1534474006,1534474006,NULL),(81,'一支云箭ds啊asdfsafs',4000.00,234,123,'0',NULL,NULL,0.00,10,'1',0,5,235,235,0,0,'a:2:{i:10;a:1:{i:0;s:9:\"PHP教材\";}i:11;a:1:{i:0;s:6:\"动画\";}}','fsdf','./uploads/goods/20180817/1948534a3c9ee75709265b993cebeae4.jpg',1534474058,1534488960,NULL),(82,'一支穿云箭啊aaffff',4000.00,234,123,'0',NULL,NULL,0.00,10,'0',0,1,233,233,0,0,'a:1:{i:6;a:1:{i:0;s:6:\"黑色\";}}','fs','./uploads/goods/20180817/69468338a4d9399f16a32d7511b92604.jpg',1534488992,1534488992,NULL),(83,'极品鹤顶红一碗',4000.00,234,123,'0',NULL,NULL,0.00,10,'0',0,1,1,1,0,0,'a:1:{i:6;a:1:{i:0;s:0:\"\";}}','水电费','./uploads/goods/20180819/03a74fb487d50195ef06fe4b52d02c11.jpg',1534676372,1534677335,NULL),(84,'一支穿云箭啊aafsad',4000.00,234,123,'0',NULL,NULL,0.00,10,'0',0,4,1,1,0,0,'a:2:{i:2;a:3:{i:0;s:6:\"白色\";i:1;s:6:\"白色\";i:2;s:6:\"蓝色\";}i:7;a:3:{i:0;s:6:\"联通\";i:1;s:6:\"移动\";i:2;s:6:\"电信\";}}','fsdfcsd','./uploads/goods/20180819/96bf698a0af7dcac43931b834c9b9f8c.jpg',1534677900,1534678800,NULL),(85,'一批汗血宝马',4000.00,234,123,'0',NULL,NULL,0.00,10,'0',0,5,136,1,136,0,'a:2:{i:10;a:2:{i:0;s:9:\"PHP教材\";i:1;s:10:\"Java教材\";}i:11;a:2:{i:0;s:6:\"唱歌\";i:1;s:6:\"唱歌\";}}','客户节开幕','./uploads/goods/20180820/0d82a23073351260fe9583a196708977.jpg',1534766713,1534766713,NULL),(86,'oppor22',5555.00,12,123,'0',NULL,NULL,0.00,10,'0',0,4,136,1,136,0,'a:2:{i:2;a:3:{i:0;s:6:\"白色\";i:1;s:6:\"红色\";i:2;s:6:\"蓝色\";}i:7;a:3:{i:0;s:6:\"联通\";i:1;s:6:\"移动\";i:2;s:6:\"电信\";}}','手机','./uploads/goods/20180821/f32381557c9659733050355e0060b86e.jpg',1534831828,1534831828,NULL),(87,'混江龙一大只',4000.00,234,123,'0',1535203971,1535722376,890.00,1,'0',0,1,233,233,0,0,'a:1:{i:6;a:3:{i:0;s:6:\"黑色\";i:1;s:6:\"红色\";i:2;s:6:\"灰色\";}}','违法','./uploads/goods/20180824/42f2328ba51d3f8a3366936a898ddfb3.jpg',1535117591,1535117591,NULL),(88,'追风千里驹啊',4000.00,234,66,'0',1535033664,1535722376,333.99,89,'0',0,1,234,234,0,0,'a:1:{i:6;a:2:{i:0;s:6:\"白色\";i:1;s:6:\"灰色\";}}','夫人色地方','./uploads/goods/20180824/41a8e64e35118b233262844e45efc3d9.jpg',1535120110,1535120110,NULL);
/*!40000 ALTER TABLE `sp_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_goods_pics`
--

DROP TABLE IF EXISTS `sp_goods_pics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_goods_pics` (
  `pics_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `goods_id` mediumint(8) unsigned NOT NULL COMMENT '商品id',
  `pics_mid` char(128) NOT NULL DEFAULT '' COMMENT '相册中图400*400',
  `pics_big` char(128) NOT NULL DEFAULT '' COMMENT '相册大图800*800',
  PRIMARY KEY (`pics_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COMMENT='商品-相册关联表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_goods_pics`
--

LOCK TABLES `sp_goods_pics` WRITE;
/*!40000 ALTER TABLE `sp_goods_pics` DISABLE KEYS */;
INSERT INTO `sp_goods_pics` VALUES (1,58,'./uploads/pics/20180810/mid_68fd7f52853dd78c1d8e75e41340602a.jpg','./uploads/pics/20180810/big_68fd7f52853dd78c1d8e75e41340602a.jpg'),(2,58,'./uploads/pics/20180810/mid_a8c0188af5a14c4ff737c36969396cc3.jpg','./uploads/pics/20180810/big_a8c0188af5a14c4ff737c36969396cc3.jpg'),(3,59,'./uploads/pics/20180810/mid_968ac9a11946998a521a6b6685bf078b.jpg','./uploads/pics/20180810/big_968ac9a11946998a521a6b6685bf078b.jpg'),(4,59,'./uploads/pics/20180810/mid_03fbaab7a42d7d1976fb96c3b2972ee8.jpeg','./uploads/pics/20180810/big_03fbaab7a42d7d1976fb96c3b2972ee8.jpeg'),(5,60,'./uploads/pics/20180810/mid_cdf9174f0453893a0df0beba6e6ba661.jpg','./uploads/pics/20180810/big_cdf9174f0453893a0df0beba6e6ba661.jpg'),(6,60,'./uploads/pics/20180810/mid_7803ab3ff5cf6b6ced39aac705b6b5b3.jpg','./uploads/pics/20180810/big_7803ab3ff5cf6b6ced39aac705b6b5b3.jpg'),(7,60,'./uploads/pics/20180810/mid_0be0a84c39fdd854bf9b9810e920602a.jpg','./uploads/pics/20180810/big_0be0a84c39fdd854bf9b9810e920602a.jpg'),(8,60,'./uploads/pics/20180810/mid_4686a268a268d4e1d8711317e561d9fe.jpeg','./uploads/pics/20180810/big_4686a268a268d4e1d8711317e561d9fe.jpeg'),(9,61,'./uploads/pics/20180810/mid_d0fa5a080e90712867338cb384907f4b.jpg','./uploads/pics/20180810/big_d0fa5a080e90712867338cb384907f4b.jpg'),(10,61,'./uploads/pics/20180810/mid_44a39a1f554dc2561838235613228313.jpg','./uploads/pics/20180810/big_44a39a1f554dc2561838235613228313.jpg'),(11,61,'./uploads/pics/20180810/mid_a987c57ead63c60db88215a6944469f1.jpg','./uploads/pics/20180810/big_a987c57ead63c60db88215a6944469f1.jpg'),(14,63,'./uploads/pics/20180810/mid_e032227452840d3bb6aa18417ac17042.jpg','./uploads/pics/20180810/big_e032227452840d3bb6aa18417ac17042.jpg'),(15,67,'./uploads/pics/20180811/mid_2d11a35a764c4a92eb25774f69571aa6.jpg','./uploads/pics/20180811/big_2d11a35a764c4a92eb25774f69571aa6.jpg'),(16,67,'./uploads/pics/20180811/mid_3dd2f5fb36455afd4aa816c630c45d04.jpg','./uploads/pics/20180811/big_3dd2f5fb36455afd4aa816c630c45d04.jpg'),(17,68,'./uploads/pics/20180811/mid_d9732847acf3bce056668ded339f2bb8.jpg','./uploads/pics/20180811/big_d9732847acf3bce056668ded339f2bb8.jpg'),(18,71,'./uploads/pics/20180814/mid_bfda85d2fb4de3e210b56f752eca110b.jpg','./uploads/pics/20180814/big_bfda85d2fb4de3e210b56f752eca110b.jpg'),(19,71,'./uploads/pics/20180814/mid_fb4f6d3440bc39f2cb13064ac9cfb805.jpg','./uploads/pics/20180814/big_fb4f6d3440bc39f2cb13064ac9cfb805.jpg'),(20,71,'./uploads/pics/20180814/mid_c756f3dc0c9841e1737b510b92b7ef9c.jpg','./uploads/pics/20180814/big_c756f3dc0c9841e1737b510b92b7ef9c.jpg'),(21,72,'./uploads/pics/20180814/mid_f99c4fab49265fe2d88bc65240bcd5e8.jpg','./uploads/pics/20180814/big_f99c4fab49265fe2d88bc65240bcd5e8.jpg'),(22,72,'./uploads/pics/20180814/mid_f4075e5af3a47576609768226e7ce191.jpg','./uploads/pics/20180814/big_f4075e5af3a47576609768226e7ce191.jpg'),(23,72,'./uploads/pics/20180814/mid_61925b76cd73271362356b603508fbfd.jpg','./uploads/pics/20180814/big_61925b76cd73271362356b603508fbfd.jpg'),(24,73,'./uploads/pics/20180814/mid_2c7a13c5819fef51a8380914403c3186.jpg','./uploads/pics/20180814/big_2c7a13c5819fef51a8380914403c3186.jpg'),(25,73,'./uploads/pics/20180814/mid_74634a38ce7440c8f68d0d1515efe79a.jpg','./uploads/pics/20180814/big_74634a38ce7440c8f68d0d1515efe79a.jpg'),(26,73,'./uploads/pics/20180814/mid_eb23c6f53cc989f2d1c50b01e8c07837.jpg','./uploads/pics/20180814/big_eb23c6f53cc989f2d1c50b01e8c07837.jpg'),(27,74,'./uploads/pics/20180814/mid_11b40e27ee92bcc4ae685cce17cf3e10.jpg','./uploads/pics/20180814/big_11b40e27ee92bcc4ae685cce17cf3e10.jpg'),(28,74,'./uploads/pics/20180814/mid_73819d61351174d40861a67231a26882.jpg','./uploads/pics/20180814/big_73819d61351174d40861a67231a26882.jpg'),(29,74,'./uploads/pics/20180814/mid_861442c66bdd33fd8b5e918c2f17e684.jpeg','./uploads/pics/20180814/big_861442c66bdd33fd8b5e918c2f17e684.jpeg'),(30,75,'./uploads/pics/20180814/mid_489418998873bc16e2afdbc97388f6ab.jpg','./uploads/pics/20180814/big_489418998873bc16e2afdbc97388f6ab.jpg'),(31,75,'./uploads/pics/20180814/mid_760c810b20a501734f3c8578b7d99bbd.jpg','./uploads/pics/20180814/big_760c810b20a501734f3c8578b7d99bbd.jpg'),(32,76,'./uploads/pics/20180817/mid_f5537afb54aff01f1ae3247eb6168550.jpg','./uploads/pics/20180817/big_f5537afb54aff01f1ae3247eb6168550.jpg'),(33,77,'./uploads/pics/20180817/mid_1ce0650adbefcebd6ee50531452c87e7.jpg','./uploads/pics/20180817/big_1ce0650adbefcebd6ee50531452c87e7.jpg'),(34,81,'./uploads/pics/20180817/mid_14bfcea2c097ad1572f6bb45652c6893.jpg','./uploads/pics/20180817/big_14bfcea2c097ad1572f6bb45652c6893.jpg'),(35,82,'./uploads/pics/20180817/mid_7fe37cb1e7d6910f100fe737a1eccec1.jpg','./uploads/pics/20180817/big_7fe37cb1e7d6910f100fe737a1eccec1.jpg'),(36,83,'./uploads/pics/20180819/mid_9882b59ba72e6c5cbb0ecd07575f3a1a.jpg','./uploads/pics/20180819/big_9882b59ba72e6c5cbb0ecd07575f3a1a.jpg'),(37,83,'./uploads/pics/20180819/mid_2dda1d7c7a186c47f9af8e3974189771.jpg','./uploads/pics/20180819/big_2dda1d7c7a186c47f9af8e3974189771.jpg'),(38,83,'./uploads/pics/20180819/mid_4ba671a156fe17fda4207148e657bb34.jpg','./uploads/pics/20180819/big_4ba671a156fe17fda4207148e657bb34.jpg'),(39,84,'./uploads/pics/20180819/mid_bc7fd84456f23f48bf6c9856fb5e8fcc.jpg','./uploads/pics/20180819/big_bc7fd84456f23f48bf6c9856fb5e8fcc.jpg'),(40,84,'./uploads/pics/20180819/mid_fb6f4ba58e63fae84806cc167e33cf54.jpg','./uploads/pics/20180819/big_fb6f4ba58e63fae84806cc167e33cf54.jpg');
/*!40000 ALTER TABLE `sp_goods_pics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_manager`
--

DROP TABLE IF EXISTS `sp_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_manager` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `mg_name` varchar(32) NOT NULL COMMENT '名称',
  `mg_pwd` char(32) NOT NULL COMMENT '密码',
  `role_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '归属角色id',
  `create_time` int(10) DEFAULT NULL COMMENT '添加时间',
  `update_time` int(10) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(10) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=509 DEFAULT CHARSET=utf8 COMMENT='管理员表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_manager`
--

LOCK TABLES `sp_manager` WRITE;
/*!40000 ALTER TABLE `sp_manager` DISABLE KEYS */;
INSERT INTO `sp_manager` VALUES (500,'admin','e10adc3949ba59abbe56e057f20f883e',0,NULL,1532509750,NULL),(501,'jack','e10adc3949ba59abbe56e057f20f883e',30,NULL,1532509756,NULL),(502,'linken','e10adc3949ba59abbe56e057f20f883e',31,NULL,NULL,NULL),(503,'asdfdskj','032b86621eb0ec7a25fd3e82b0a4d0a5',34,1532506953,1532564406,1532564406),(504,'sflksdf','e10adc3949ba59abbe56e057f20f883e',32,1532507016,1532564441,1532564441),(505,'dsgsdfgs','508df4cb2f4d8f80519256258cfb975f',35,1532507074,1532564467,1532564467),(506,'fgfdhdgh','ac09e2e0ac03e3f7dc32fd38a9634545',33,1532507138,1532507138,NULL),(507,'cvbnbvn','3ea1d7abbca2b03d2ef5b295244eeebb',33,1532511651,1532511651,NULL),(508,'hvgjhkgjk','e6cb846c105a2d302946df68284d52ff',37,1532511673,1532511673,NULL);
/*!40000 ALTER TABLE `sp_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_order`
--

DROP TABLE IF EXISTS `sp_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `user_id` mediumint(8) unsigned NOT NULL COMMENT '下订单会员id',
  `order_number` varchar(32) NOT NULL COMMENT '订单编号',
  `order_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '订单总金额',
  `order_pay` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '支付方式 0支付宝 1微信  2银行卡',
  `order_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '订单状态： 0未付款、1已付款',
  `order_pay_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '支付宝实际支付金额',
  `order_trade_no` char(32) NOT NULL DEFAULT '' COMMENT '支付交易流水号码',
  `cgn_address` text COMMENT 'consignee收货人详细信息：名称+地址+手机+邮编 的序列化信息',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_number` (`order_number`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COMMENT='订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_order`
--

LOCK TABLES `sp_order` WRITE;
/*!40000 ALTER TABLE `sp_order` DISABLE KEYS */;
INSERT INTO `sp_order` VALUES (17,12,'itcast-20180823php68-20421115386',5555.00,'0','0',0.00,'','a:5:{s:7:\"user_id\";i:12;s:8:\"cgn_name\";s:9:\"赵大海\";s:11:\"cgn_address\";s:45:\"山东省枣庄市市中区建华西路177号\";s:7:\"cgn_tel\";s:11:\"15765329087\";s:8:\"cgn_code\";s:6:\"600983\";}',1535028131,1535028131,NULL),(18,12,'itcast-20180823php68-20453231288',5555.00,'0','0',0.00,'','a:5:{s:7:\"user_id\";i:12;s:8:\"cgn_name\";s:9:\"赵大海\";s:11:\"cgn_address\";s:45:\"山东省枣庄市市中区建华西路177号\";s:7:\"cgn_tel\";s:11:\"15765329087\";s:8:\"cgn_code\";s:6:\"600983\";}',1535028332,1535028332,NULL),(19,12,'itcast-20180823php68-21264223568',5555.00,'0','0',0.00,'','a:5:{s:7:\"user_id\";i:12;s:8:\"cgn_name\";s:9:\"赵大海\";s:11:\"cgn_address\";s:45:\"山东省枣庄市市中区建华西路177号\";s:7:\"cgn_tel\";s:11:\"15765329087\";s:8:\"cgn_code\";s:6:\"600983\";}',1535030802,1535030802,NULL),(20,12,'itcast-20180823php68-21344821582',5555.00,'0','0',0.00,'','a:5:{s:7:\"user_id\";i:12;s:8:\"cgn_name\";s:9:\"赵大海\";s:11:\"cgn_address\";s:45:\"山东省枣庄市市中区建华西路177号\";s:7:\"cgn_tel\";s:11:\"15765329087\";s:8:\"cgn_code\";s:6:\"600983\";}',1535031288,1535031288,NULL),(21,12,'itcast-20180823php68-21383594545',4000.00,'0','0',0.00,'','a:5:{s:7:\"user_id\";i:12;s:8:\"cgn_name\";s:9:\"赵大海\";s:11:\"cgn_address\";s:45:\"山东省枣庄市市中区建华西路177号\";s:7:\"cgn_tel\";s:11:\"15765329087\";s:8:\"cgn_code\";s:6:\"600983\";}',1535031515,1535031515,NULL),(22,12,'itcast-20180824php68-14514372891',5555.00,'0','0',0.00,'','a:5:{s:7:\"user_id\";i:12;s:8:\"cgn_name\";s:9:\"赵大海\";s:11:\"cgn_address\";s:45:\"山东省枣庄市市中区建华西路177号\";s:7:\"cgn_tel\";s:11:\"15765329087\";s:8:\"cgn_code\";s:6:\"600983\";}',1535093503,1535093503,NULL),(23,12,'itcast-20180824php68-14524156856',4000.00,'0','0',0.00,'','a:5:{s:7:\"user_id\";i:12;s:8:\"cgn_name\";s:9:\"赵大海\";s:11:\"cgn_address\";s:45:\"山东省枣庄市市中区建华西路177号\";s:7:\"cgn_tel\";s:11:\"15765329087\";s:8:\"cgn_code\";s:6:\"600983\";}',1535093561,1535093561,NULL),(24,12,'itcast-20180824php68-15084597712',4000.00,'0','0',0.00,'','a:5:{s:7:\"user_id\";i:12;s:8:\"cgn_name\";s:9:\"赵大海\";s:11:\"cgn_address\";s:45:\"山东省枣庄市市中区建华西路177号\";s:7:\"cgn_tel\";s:11:\"15765329087\";s:8:\"cgn_code\";s:6:\"600983\";}',1535094525,1535094525,NULL),(25,12,'itcast-20180824php68-17424227075',4000.00,'0','0',0.00,'','a:5:{s:7:\"user_id\";i:12;s:8:\"cgn_name\";s:9:\"赵大海\";s:11:\"cgn_address\";s:45:\"山东省枣庄市市中区建华西路177号\";s:7:\"cgn_tel\";s:11:\"15765329087\";s:8:\"cgn_code\";s:6:\"600983\";}',1535103762,1535103762,NULL),(26,12,'itcast-20180825php68-19353272363',4000.00,'0','0',0.00,'','a:5:{s:7:\"user_id\";i:12;s:8:\"cgn_name\";s:9:\"赵大海\";s:11:\"cgn_address\";s:45:\"山东省枣庄市市中区建华西路177号\";s:7:\"cgn_tel\";s:11:\"15765329087\";s:8:\"cgn_code\";s:6:\"600983\";}',1535196932,1535196932,NULL);
/*!40000 ALTER TABLE `sp_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_order_goods`
--

DROP TABLE IF EXISTS `sp_order_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_order_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `order_id` int(10) unsigned NOT NULL COMMENT '订单id',
  `goods_id` mediumint(8) unsigned NOT NULL COMMENT '商品id',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品单价',
  `goods_number` tinyint(4) NOT NULL DEFAULT '1' COMMENT '购买单个商品数量',
  `goods_price_sum` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品小计价格',
  `goods_attrs` text COMMENT '序列化的商品单选属性',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='商品订单关联表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_order_goods`
--

LOCK TABLES `sp_order_goods` WRITE;
/*!40000 ALTER TABLE `sp_order_goods` DISABLE KEYS */;
INSERT INTO `sp_order_goods` VALUES (1,1,86,5555.00,2,11110.00,NULL,1534840853,1534840853),(2,2,85,4000.00,1,4000.00,NULL,1534903246,1534903246),(3,2,86,5555.00,1,5555.00,NULL,1534903246,1534903246),(4,10,86,5555.00,11,61105.00,NULL,1534946371,1534946371),(5,10,86,5555.00,1,5555.00,NULL,1534946371,1534946371),(6,10,86,5555.00,1,5555.00,NULL,1534946371,1534946371),(7,10,86,5555.00,1,5555.00,NULL,1534946371,1534946371),(8,10,84,4000.00,2,8000.00,NULL,1534946371,1534946371),(9,10,83,4000.00,5,20000.00,NULL,1534946371,1534946371),(10,10,85,4000.00,3,12000.00,NULL,1534946371,1534946371),(11,10,86,5555.00,1,5555.00,NULL,1534946371,1534946371),(12,13,86,5555.00,1,5555.00,NULL,1535023542,1535023542),(13,16,85,4000.00,1,4000.00,NULL,1535026797,1535026797),(14,17,86,5555.00,1,5555.00,NULL,1535028131,1535028131),(15,18,86,5555.00,1,5555.00,NULL,1535028332,1535028332),(16,19,86,5555.00,1,5555.00,NULL,1535030802,1535030802),(17,20,86,5555.00,1,5555.00,NULL,1535031288,1535031288),(18,21,85,4000.00,1,4000.00,NULL,1535031515,1535031515),(19,22,86,5555.00,1,5555.00,NULL,1535093503,1535093503),(20,23,85,4000.00,1,4000.00,NULL,1535093561,1535093561),(21,24,85,4000.00,1,4000.00,NULL,1535094525,1535094525),(22,25,85,4000.00,1,4000.00,NULL,1535103762,1535103762),(23,26,85,4000.00,1,4000.00,NULL,1535196932,1535196932);
/*!40000 ALTER TABLE `sp_order_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_permission`
--

DROP TABLE IF EXISTS `sp_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_permission` (
  `ps_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `ps_name` varchar(20) NOT NULL COMMENT '权限名称',
  `ps_pid` smallint(6) unsigned NOT NULL COMMENT '父id',
  `ps_c` varchar(32) NOT NULL DEFAULT '' COMMENT '控制器',
  `ps_a` varchar(32) NOT NULL DEFAULT '' COMMENT '操作方法',
  `ps_level` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '权限等级',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '记录删除时间，假(逻辑)删除',
  PRIMARY KEY (`ps_id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8 COMMENT='权限表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_permission`
--

LOCK TABLES `sp_permission` WRITE;
/*!40000 ALTER TABLE `sp_permission` DISABLE KEYS */;
INSERT INTO `sp_permission` VALUES (101,'商品管理',0,'','','0',1532326014,1532491052,NULL),(102,'订单管理',0,'','','0',1532326014,1532326014,NULL),(103,'权限管理',0,'','','0',1532326014,1532326014,NULL),(104,'商品列表',101,'Goods','index','1',1532326014,1532326014,NULL),(105,'品牌列表',101,'Brand','index','1',1532326014,1532326014,NULL),(106,'商品分类',101,'Category','index','1',1532326014,1532326014,NULL),(107,'订单列表',102,'Order','index','1',1532326014,1532326014,NULL),(108,'订单打印',102,'Order','dayin','1',1532326014,1532326014,NULL),(109,'添加订单',102,'Order','tianjia','1',1532326014,1532326014,NULL),(110,'管理员列表',103,'Manager','index','1',1532326014,1532326014,NULL),(111,'角色列表',103,'Role','index','1',1532326014,1532326014,NULL),(112,'权限列表',103,'Permission','index','1',1532326014,1532326014,NULL),(113,'商品删除',104,'Goods','del','2',NULL,1532491008,NULL),(114,'商品添加',104,'Goods','add','2',1532415351,1532415351,NULL),(115,'jhjj',101,'kj','kl','1',1532498530,1532498538,1532498538),(116,'商品修改',104,'Goods','edit','2',1532498605,1532498605,NULL),(117,'管理员添加',110,'Manager','add','2',1532504524,1532504577,NULL),(118,'商品类型',101,'type','index','1',1533263202,1533263202,NULL),(119,'秒杀商品',101,'Goods','index_seckill','1',1535119582,1535119582,NULL);
/*!40000 ALTER TABLE `sp_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_role`
--

DROP TABLE IF EXISTS `sp_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  `role_ps_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '把拥有的权限的id信息通过 ,逗号 连接为字符串，权限ids：1,2,5',
  `role_ps_ca` text COMMENT '控制器-操作,控制器-操作,控制器-操作',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '记录删除时间，假(逻辑)删除',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_role`
--

LOCK TABLES `sp_role` WRITE;
/*!40000 ALTER TABLE `sp_role` DISABLE KEYS */;
INSERT INTO `sp_role` VALUES (30,'主管2','101,104,105,106','Goods-index,Brand-index,Category-index',1532324759,1532501367,NULL),(31,'经理2','101,104,105,106,102,107,108','Goods-index,Brand-index,Category-index,Order-index,Order-dayin',1532324760,1532501401,NULL),(32,'主管3','101,104,105,106,102,107,113,108,109','Goods-index,Brand-index,Category-index,Order-index,Order-dayin,Order-tianjia,Ordr-xiugai',1532412784,1532412784,NULL),(33,'经理4','103,110,111,112','Manager-index,Role-index,Permission-index',1532413070,1532413070,NULL),(34,'经理','101,104,105,106','Goods-index,Brand-index,Category-index',1532489377,1532489377,NULL),(35,'主管','102,107,113,114,108,109','Order-index,Order-dayin,Order-tianjia,Ordr-xiugai,order-shanchu',1532489645,1532489645,NULL),(36,'fgfh','101,104,115,116,117,105,106,118','Goods-index,Brand-index,Category-index,Ordr-xiugai,Ordr-xiugai,Ordr-shancchu,Ordr-xiugai',1532501471,1532501475,1532501475),(37,'形参标准程序','104,115,116,117','Goods-index,Ordr-xiugai,Ordr-xiugai,Ordr-shancchu',1532511530,1532511530,NULL),(38,'fasdsd','101,104,113,114,116,105,106','Goods-index,Brand-index,Category-index,Goods-del,Goods-add,Goods-edit',1532823924,1532823924,NULL);
/*!40000 ALTER TABLE `sp_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_type`
--

DROP TABLE IF EXISTS `sp_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `type_name` varchar(32) NOT NULL COMMENT '类型名称',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='类型表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_type`
--

LOCK TABLES `sp_type` WRITE;
/*!40000 ALTER TABLE `sp_type` DISABLE KEYS */;
INSERT INTO `sp_type` VALUES (1,'电话',1533266876,1533630355,NULL),(2,'电视',1533266884,1533630166,NULL),(3,'洗衣机',1533266891,1533266891,NULL),(4,'手机',1533275708,1533275708,NULL),(5,'书',1533472233,1533472233,NULL),(6,'冰箱',1533613525,1533630850,NULL);
/*!40000 ALTER TABLE `sp_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_user`
--

DROP TABLE IF EXISTS `sp_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键自增id',
  `user_name` varchar(32) NOT NULL DEFAULT '' COMMENT '登录名',
  `user_pwd` char(32) NOT NULL DEFAULT '' COMMENT '登录密码',
  `user_email` varchar(64) NOT NULL DEFAULT '' COMMENT '邮箱',
  `verify_code` char(13) DEFAULT NULL COMMENT '新用户注册邮件激活唯一校验码',
  `is_active` enum('是','否') DEFAULT '否' COMMENT '新用户是否已经通过邮箱激活',
  `user_tel` char(11) NOT NULL DEFAULT '' COMMENT '会员手机号码',
  `login_time` int(11) NOT NULL DEFAULT '0' COMMENT '会员登录系统时间',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='会员';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_user`
--

LOCK TABLES `sp_user` WRITE;
/*!40000 ALTER TABLE `sp_user` DISABLE KEYS */;
INSERT INTO `sp_user` VALUES (5,'彼时年少','e10adc3949ba59abbe56e057f20f883e','424253555@qq.com','','是','13312341234',1535287829,1534419015,1535287829,NULL),(7,'西门吹雪','e10adc3949ba59abbe56e057f20f883e','2534305781@qq.com',NULL,'是','15899999999',0,1534509332,1534509332,NULL),(9,'jack','e10adc3949ba59abbe56e057f20f883e','2534305781@qq.com','5b76c5d989c50','否','15899999999',0,1534510553,1534510553,NULL),(10,'叶孤城','90925089429c79218ce211f87a5133f1','2534305781@qq.com','','是','15811076044',0,1534763081,1534763140,NULL),(11,'陆小凤','e10adc3949ba59abbe56e057f20f883e','2534305781@qq.com','','是','15811076044',0,1534935319,1534935346,NULL),(12,'龙飘飘','e10adc3949ba59abbe56e057f20f883e','2534305781@qq.com','','是','15811076044',1535195928,1534989361,1535195928,NULL),(13,'一刀斩','e10adc3949ba59abbe56e057f20f883e','2534305781@qq.com','','是','15811076044',0,1535272898,1535272998,NULL);
/*!40000 ALTER TABLE `sp_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_user_cart`
--

DROP TABLE IF EXISTS `sp_user_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_user_cart` (
  `cart_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_id` int(11) unsigned NOT NULL COMMENT '会员id',
  `cart_info` text COMMENT '存储序列化后的购物车商品信息',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='数据库购物车商品存储表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_user_cart`
--

LOCK TABLES `sp_user_cart` WRITE;
/*!40000 ALTER TABLE `sp_user_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `sp_user_cart` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-28 15:42:50
