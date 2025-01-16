CREATE TABLE `prestasi` (
    `ID` int NOT NULL,
    `Nama` varchar(50) NOT NULL,
    `Gambar` varchar(255) DEFAULT NULL,
    `Prestasi` varchar(50) NOT NULL,
    `Deskripsi` text,
    `Tanggal` date DEFAULT NULL,
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci