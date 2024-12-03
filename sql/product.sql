-- drop database if exists shop;
-- create database shop default character set utf8 collate utf8_general_ci;
-- grant all on shop.* to 'staff'@'localhost' identified by 'password';
-- use shop;
-- useコマンドでデータベース接続。これ以降の捜査はshopデータベースに接続。

create table product (
	id int auto_increment primary key, 
	name varchar(200) not null, 
	price int not null
);

insert into product values(null, 'JAZZ STANDARD BIBLE', 3850);
insert into product values(null, 'ビル・エヴァンス：ジャズピアニストの肖像
', 4900);
insert into product values(null, 'Jazz Guitar Magazine Vol.10', 2750);
insert into product values(null, 'デヴィット・ストーン・マーティンの素晴らしい世界', 2400);
insert into product values(null, '３年後、確実にジャズ・ベースが弾ける練習法', 2420);
insert into product values(null, 'ドラム・パターン大事典326', 2200);
insert into product values(null, 'Jazz it up!マンが丸ごとジャズ100年史', 1980);
insert into product values(null, '鍵盤ハーモニカのしらべ', 3300);
insert into product values(null, 'INDEPENDENT BLACK JAZZ OF AMERICA', 3080);
insert into product values(null, 'Jazzピアノ基礎練習ドリル', 2970);
insert into product values(null, 'レーベルで聴くジャズ名盤1374', 2860);
