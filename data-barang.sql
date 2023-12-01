DROP TABLE IF EXISTS `tblbarang`;
CREATE TABLE `tblbarang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) DEFAULT NULL,
  `stock` int(255) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL,

  PRIMARY KEY (`id`)
);

INSERT INTO `tblbarang` VALUES (1,'indomie aceh',10,3000),
(2,'kopi kapal api',20,1500),
(3,'aqua',20,3000),
(4,'le mineral',20,2500),
(5,'sabun lifeboy',20,1500),
(6,'pembalut',20,3000),
(7,'pepsodent',20,1500),
(8,'rokok 76',20,15000),
(9,'ciptadent',20,3500),
(10,'shampo shachet',20,1000),
(11,'popok bayi',20,5000),
(12,'telur',30,2000),
(13,'minyak goreng',20,15000),
(14,'makanan ringan',20,6000),
(15,'sandal jepit',20,12000),
(16,'gas lpg',20,30000),
(17,'buku',50,2500),
(18,'pilpen',20,5000),
(19,'teh',20,5000),
(20,'penghapus',15,2000),
(21,'kecap',20,11000),
(22,'susu kaleng',20,10000),
(23,'tissue isi 400',20,7000),
(24,'plastik kemasan 2kg',20,2000),
(25,'sunlight',20,6000),
(26,'indomie goreng',20,3000),
(27,'indomie soto',20,3000),
(28,'blue band',20,6000),
(29,'sprite',20,5000),
(30,'detergen',20,1500),
(31,'rokok djarum',20,18000),
(32,'sabun mandi cair',20,5000),
(33,'beng beng',20,1500),
(34,'lays',20,3000),
(35,'kalapa',20,2500),
(36,'roti tawar',20,2000),
(37,'susu bayi',20,10000),
(38,'indomilk',20,3000),
(39,'sukro',20,2000),
(40,'good time',20,2000);

-- DROP TABLE IF EXISTS `tbluser`;
-- CREATE TABLE `tbluser` (
--   `id` int(11) NOT NULL AUTO_INCREMENT,
--   `user` varchar(255) DEFAULT NULL,
--   `pass` varchar(255) DEFAULT NULL,
--   `as` varchar(255) DEFAULT NULL,
--   `foto` varchar(255) DEFAULT NULL,
--   PRIMARY KEY (`id`)
-- );

-- INSERT INTO `tbluser` VALUES (1,'pelanggan1','12345678','pelanggan','../user/user1.png'),
-- (2,'pelanggan2','12345678','pelanggan','../user/user1.png'),
-- (3,'pelanggan3','12345678','pelanggan','../user/user1.png'),
-- (4,'admin','12345678','admin','../user/user1.png'),
-- (5,'maulanaibnusahban','12345678','admin','../user/user1.png');


DROP TABLE IF EXISTS `massage`;
CREATE TABLE `massage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(255) DEFAULT NULL,
  `kontak` varchar(255) DEFAULT NULL,
  `massage` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `massage` VALUES (1,'maulana','081367738354','maulanaibnusahbannoyeee');

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `sebagai` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `tbluser` VALUES (1,'pelanggan1','12345678','pelanggan','../user/user1.png'),
(2,'pelanggan2','12345678','pelanggan','../user/user2.png'),
(3,'pelanggan3','12345678','pelanggan','../user/user2.png'),
(4,'admin','12345678','admin','../user/user3.png'),
(5,'maulanaibnusahban','12345678','admin','../user/maulana.png');
