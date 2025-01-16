CREATE TABLE `barang_jualan` (
    `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    `Nama_barang` varchar(55) NOT NULL,
    `Harga` int NOT NULL,
    `Deskripsi` text,
    `Jumlah` int NOT NULL,
    `Gambar` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 2 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci