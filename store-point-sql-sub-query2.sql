BEGIN
    -- search kode manifest
    -- where total payment
    -- > 100.000
    -- pada tahun 2019 (since 2019)
    BEGIN
        SELECT
            trck.kd_manifest
        /*
			,
			trck.posisi_brg,
			trck.tgl_pengiriman,
			trck.keterangan,
			alias.*
			*/
        FROM
            (
			SELECT
                tr.biaya_packing,
                tr.biaya_asuransi,
                tr.biaya_berat_brg,
                tr.biaya_jrk_kirim,
                (tr.biaya_packing + tr.biaya_asuransi + tr.biaya_berat_brg + tr.biaya_jrk_kirim) as 'Total'
            FROM
                tarif tr
            WHERE
				(tr.biaya_packing + tr.biaya_asuransi + tr.biaya_berat_brg + tr.biaya_jrk_kirim) > 100000
			)alias
			,
            tracking trck
        WHERE
			YEAR(trck.tgl_pengiriman) = 2019
            AND
            trck.keterangan = 'terkirim'
            AND
            trck.id_tarif IN
		(
				SELECT
                tr.id_tarif
            FROM
                tarif tr
            WHERE
					(tr.biaya_packing + tr.biaya_asuransi + tr.biaya_berat_brg + tr.biaya_jrk_kirim) > 100000
		)
    ;
    END
--
-- 					SELECT
-- 					     mn.*,
-- 					     pg.nama_pegawai,
-- 					     pg.tgl_lahir,
-- 					     pg.gender,
-- 					     pg.no_hp
-- 					  FROM
--  		  	 manifest mn,
--  		  	 pegawai pg
-- 					 WHERE
-- 					 		pg.id_pegawai = mn.id_pegawai
-- 					 		AND
--  		  mn.id_pegawai
--  		  				 IN
--  		  				  (
--  		  				   SELECT
-- 								pg.id_pegawai
-- 							FROM
-- 								pegawai pg
-- 							WHERE
-- 								pg.gender = 'P'
-- 							AND
-- 								YEAR(pg.tgl_lahir) <= 1998
-- 							)
-- 							AND
-- 	  	 mn.kd_manifest
-- 						 IN
-- 						  (

-- 		SELECT
-- 			trck.kd_manifest
-- 			/*
-- 			,
-- 			trck.posisi_brg,
-- 			trck.tgl_pengiriman,
-- 			trck.keterangan,
-- 			alias.*
-- 			*/
-- 		FROM
-- 		   (
-- 			SELECT
-- 				tr.biaya_packing,
-- 				tr.biaya_asuransi,
-- 				tr.biaya_berat_brg,
-- 				tr.biaya_jrk_kirim,
-- 				(tr.biaya_packing + tr.biaya_asuransi + tr.biaya_berat_brg + tr.biaya_jrk_kirim) as 'Total'
-- 			FROM
-- 				tarif tr
-- 			WHERE
-- 				(tr.biaya_packing + tr.biaya_asuransi + tr.biaya_berat_brg + tr.biaya_jrk_kirim) > 100000
-- 			)alias
-- 			,
-- 			tracking trck
-- 		WHERE
-- 			YEAR(trck.tgl_pengiriman) = 2019
-- 		AND
-- 			trck.keterangan = 'terkirim'
-- 		AND
-- 			trck.id_tarif IN
-- 		(
-- 				SELECT
-- 					tr.id_tarif
-- 				FROM
-- 					tarif tr
-- 				WHERE
-- 					(tr.biaya_packing + tr.biaya_asuransi + tr.biaya_berat_brg + tr.biaya_jrk_kirim) > 100000
-- 		)
-- 						)

-- ;
END