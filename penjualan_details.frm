TYPE=VIEW
query=select `p`.`idpenjualan` AS `idpenjualan`,`p`.`created_at` AS `created_at`,`p`.`subtotal_nilai` AS `subtotal_nilai`,`p`.`ppn` AS `ppn`,`p`.`total_nilai` AS `total_nilai`,`dp`.`iddetail_penjualan` AS `iddetail_penjualan`,`dp`.`harga_satuan` AS `harga_satuan`,`dp`.`jumlah` AS `jumlah`,`dp`.`subtotal` AS `subtotal`,`b`.`idbarang` AS `idbarang`,`b`.`jenis` AS `jenis`,`b`.`nama` AS `nama_barang` from ((`uts_pbd`.`penjualans` `p` join `uts_pbd`.`detail_penjualans` `dp` on(`p`.`idpenjualan` = `dp`.`idpenjualan`)) join `uts_pbd`.`barangs` `b` on(`dp`.`idbarang` = `b`.`idbarang`))
md5=6175999850c9d1170cfd366bf8e4fd00
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001703139118163940
create-version=2
source=SELECT p.idpenjualan, p.created_at, p.subtotal_nilai, p.ppn, p.total_nilai,\n       dp.iddetail_penjualan, dp.harga_satuan, dp.jumlah, dp.subtotal,\n       b.idbarang, b.jenis, b.nama AS nama_barang\nFROM penjualans p\nJOIN detail_penjualans dp ON p.idpenjualan = dp.idpenjualan\nJOIN barangs b ON dp.idbarang = b.idbarang
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `p`.`idpenjualan` AS `idpenjualan`,`p`.`created_at` AS `created_at`,`p`.`subtotal_nilai` AS `subtotal_nilai`,`p`.`ppn` AS `ppn`,`p`.`total_nilai` AS `total_nilai`,`dp`.`iddetail_penjualan` AS `iddetail_penjualan`,`dp`.`harga_satuan` AS `harga_satuan`,`dp`.`jumlah` AS `jumlah`,`dp`.`subtotal` AS `subtotal`,`b`.`idbarang` AS `idbarang`,`b`.`jenis` AS `jenis`,`b`.`nama` AS `nama_barang` from ((`uts_pbd`.`penjualans` `p` join `uts_pbd`.`detail_penjualans` `dp` on(`p`.`idpenjualan` = `dp`.`idpenjualan`)) join `uts_pbd`.`barangs` `b` on(`dp`.`idbarang` = `b`.`idbarang`))
mariadb-version=100428
