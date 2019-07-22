DROP TABLE IF EXISTS bikes;

CREATE TABLE bikes (
    id serial PRIMARY KEY,
    bike_name VARCHAR(100),
    two_wheels_type VARCHAR(10),
    licence VARCHAR(2),
    cylinder integer,
    bike_type VARCHAR(10),
    recommended_height integer,
    brand VARCHAR(50),
    budget integer,
    image_link text
);

-- MOTOS

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link) VALUES ('S1000R', 'bike', 'A', 1000, 'roadster', 170, 'BMW', 12950, 'https://www.motoplanete.com/newsmpb/images/BMW-S-1000-R-2017-fiche-1.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link) VALUES ('MT07', 'bike', 'A2', 690, 'roadster', 175, 'Yamaha', 6800, 'https://cdn2.yamaha-motor.eu/prod/product-assets/2019/MT07/2019-Yamaha-MT07-EU-Ice_Fluo-Studio-001-03-1.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('Z650', 'bike', 'A2', 650, 'roadster', 160, 'Kawasaki', 6999, 'https://www.motoplanete.com/newsmpb/images/z650-static.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('CB500 F', 'bike', 'A2', 471, 'roadster', 170, 'Honda', 6200, 'http://www.lerepairedesmotards.com/img/essais/honda/cb-500/honda-cb500f-statique_hd.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('Z900', 'bike', 'A2', 900, 'roadster', 160, 'Kawasaki', 9099, 'http://www.moto-net.com/sites/default/files/images/photos-articles/2016/nouveautes-2017/kawasaki/z900-2017-studio-grise.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('TRACER 900', 'bike', 'A', 847, 'trail', 180, 'Yamaha', 10599, 'https://media.motoservices.com/media/cache/paragraph_picture/media/paragraph//yamaha-mt-09-tracer-2018-20-.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('R 1250 GS', 'bike', 'A', 1254, 'trail', 180, 'BMW', 17400, 'https://moto-station.com/wp-content/uploads/2018/09/17/BMW-R1250GS-2019-1.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('MT09', 'bike', 'A', 847, 'roadster', 175, 'Yamaha', 10000, 'https://patrickpons.com/nas/commun/annonces/e1118ae7cc7ad29269ac969cb749bc860aec5084/photo-annonce-mt-09_5a1c547bac8f3616373886.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('X ADV', 'bike', 'A2', 745, 'trail', 175, 'Honda', 11999, 'http://www.moto-net.com/sites/default/files/honda-x-adv-2018_s.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('CB125 F', 'bike', 'A1', 125, 'roadster', 160, 'Honda', 2899, 'http://www.werther.fr/wp-content/uploads/2015/04/99237_Honda_CB125F_2017.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('125 DUKE', 'bike', 'A1', 125, 'roadster', 175, 'KTM', 4899, 'http://shop.comptetoursmotos.com/images/stories/virtuemart/product/125duke18-white.jpg');

-- SCOOTERS

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('X MAX 125', 'scooter', 'A1', 125, null, 170, 'Yamaha', 5000, 'https://patrickpons.com/nas/commun/annonces/fbd4112628a3e9ef3a0b0e3abe33755c1ac6fec3/photo-annonce-yamaha-x-max-125_5bd1f221d5493348738079.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('FORZA 125', 'scooter', 'A1', 125, null, 170, 'Honda', 5099, 'https://media.motoservices.com/media/cache/paragraph_picture/media/paragraph//honda-forza-125-2018-01-.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('PCX 125', 'scooter', 'A1', 125, null, 160, 'Honda', 3099, 'https://alesiamoto.fr/nas/commun/annonces//f617b89f2a91add41bb9331ce0afb23a251d0d60/photo-annonce-pcx-125-abs-2019_5b1e26cb619c3542528101.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('TMAX', 'scooter', 'A2', 530, null, 175, 'Yamaha', 11499, 'https://patrickpons.com/nas/commun/annonces/548e574c18e63d605172732e897918c1717f4fbd/photo-annonce-yamaha-tmax-530-abs-2017_NaN-034019.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('N MAX 125', 'scooter', 'A1', 125, null, 160, 'Yamaha', 3199, 'https://patrickpons.com/nas/commun/annonces/5208cf02119f6227e466dd71c151023fab59a243/photo-annonce-nmax-125_5c10dc92739de542653041.jpg');

INSERT INTO bikes (bike_name, two_wheels_type, licence, cylinder, bike_type, recommended_height, brand, budget, image_link)
    VALUES ('X MAX 300', 'scooter', 'A2', 295, null, 170, 'Yamaha', 5999, 'https://cdn2.yamaha-motor.eu/prod/product-assets/2019/XMAX300ASP/2019-Yamaha-XMAX300ASP-EU-Sword_Grey-Studio-001-03.jpg');