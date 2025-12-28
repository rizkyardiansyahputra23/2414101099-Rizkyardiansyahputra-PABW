CREATE DATABASE tour_travel;
USE tour_travel;
CREATE TABLE pemesanan(
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(100),
email VARCHAR(100),
no_hp VARCHAR(20),
paket VARCHAR(50),
jumlah INT,
tanggal DATE
);