CREATE DATABASE bof;
USE bof;

CREATE TABLE IF NOT EXISTS `khachhang`(
	makh int NOT NULL AUTO_INCREMENT,
	hoten varchar(255),
	sdt varchar(255),
	PRIMARY KEY (makh)
);

CREATE TABLE IF NOT EXISTS `hoadon`(
	sohd int NOT NULL AUTO_INCREMENT,
	makh int NOT NULL,
	ngayhd datetime,
	PRIMARY KEY (sohd),
	FOREIGN KEY (makh) REFERENCES khachhang(makh)
);

CREATE TABLE IF NOT EXISTS `loaisanpham`(
	maloai int NOT NULL AUTO_INCREMENT,
	tenloai varchar(255),
	PRIMARY KEY (maloai)
);

CREATE TABLE IF NOT EXISTS `sanpham`(
	masp int NOT NULL AUTO_INCREMENT,
	tensp varchar(255),
	gia int,
	maloai int,
	PRIMARY KEY (masp),
	FOREIGN KEY (maloai) REFERENCES loaisanpham(maloai)
);

CREATE TABLE IF NOT EXISTS `chitiethd`(
	sohd int,
	masp int,
	soluong int,
	PRIMARY KEY (sohd,masp),
	FOREIGN KEY (sohd) REFERENCES hoadon(sohd),
	FOREIGN KEY (masp) REFERENCES sanpham(masp)
);

INSERT INTO khachhang(hoten, sdt) 
values ("Tran Van A","0909009001"),
("Tran Van B","0909009002"),
("Tran Van C","0909009003"),
("Tran Van D","0909009004"),
("Tran Van E","0909009005");

INSERT INTO loaisanpham(tenloai) 
values ("Điện Thoại"),
("Laptop"),
("PC"),
("Loa"),
("Phụ kiện");


INSERT INTO hoadon(makh,ngayhd) 
values (1,NOW()),
(2,NOW()),
(1,NOW()),
(3,NOW()),
(1,NOW());


INSERT INTO sanpham(tensp,gia,maloai) 
values ("SAMSUNG",10000000,1),
("Laptop DELL",20000000,2),
("IPhone 20",50000000,1),
("Dây sạc điện thoại",150000,5),
("RAM",2000000,5);


INSERT INTO chitiethd(sohd,masp,soluong) 
values (1,2,2),
(1,1,3),
(2,3,2),
(2,5,2),
(3,2,2),
(3,5,2),
(3,1,2),
(4,3,2),
(5,4,2);