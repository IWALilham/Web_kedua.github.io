CREATE TABLE `pembeli` (
    `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    `Nama` varchar(255) NOT NULL,
    `Alamat` varchar(255) NOT NULL,
    `Barang` varchar(50) NOT NULL,
    `Jumlah` int NOT NULL,
    `Pesan` text,
    `Nomor` int NOT NULL COMMENT 'Nomor Telp/Wa',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci