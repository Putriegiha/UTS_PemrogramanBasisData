TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER update_penjualan_status\nAFTER INSERT ON penjualans\nFOR EACH ROW\nBEGIN\n    UPDATE penjualans\n    SET STATUS = 1\n    WHERE idpenjualan = NEW.idpenjualan;\nEND'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='utf8mb4_general_ci'
created=1703139246747719
