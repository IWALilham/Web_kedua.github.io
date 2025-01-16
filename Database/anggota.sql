CREATE TABLE `anggota` (
    `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    `Nama_anggota` varchar(55) NOT NULL,
    `Jabatan` varchar(55) NOT NULL,
    `Riwayat` text,
    `Gambar` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci