
-- Ini Adalah Code Database Nya

CREATE DATABASE rekam_medis;

CREATE TABLE `admin`(

  `id` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
   PRIMARY KEY(id)

);


   INSERT INTO `admin` (`id`, `username`, `password`, `nama`,`foto`) VALUES
   (1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Gembrot', 'admin.png');

   -- Username = admin dan password = password--

 CREATE TABLE pasien(

   id int(25) NOT NULL AUTO_INCREMENT,
   nik varchar(250) NOT NULL,
   nama varchar(200) NOT NULL,
   kelamin varchar(210) NOT NULL,
   alamat varchar(230) NOT NULL,
   nomor varchar(240) NOT NULL,
   PRIMARY KEY(id)

 );


 CREATE TABLE tenagamedis(
   id int(25) NOT NULL AUTO_INCREMENT,
   nama varchar(200) NOT NULL,
   alamat varchar(239) NOT NULL,
   nomor varchar(240) NOT NULL,
   PRIMARY KEY(id)
 );


 CREATE TABLE obat(
   id int(25) NOT NULL AUTO_INCREMENT,
   nama varchar(230) NOT NULL,
   keterangan varchar(250) NOT NULL,
   jumlah varchar(240) NOT NULL,
   PRIMARY KEY(id)

 );

CREATE TABLE rekammedis(

  id int(25) NOT NULL AUTO_INCREMENT,
  nama_pasien varchar(230) NOT NULL,
  nama_tenaga varchar(250) NOT NULL,
  tanggal varchar(240) NOT NULL,
  keluhan varchar(255) NOT NULL,
  diagnosa varchar(240) NOT NULL,
  obat varchar(240) NOT NULL,
  PRIMARY KEY(id)


);
