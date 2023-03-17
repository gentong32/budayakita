<?php

namespace App\Models;

use CodeIgniter\Model;

class BudayaModel extends Model
{
    public function getAllObject() {
        $query = $this->db->query("select CONCAT(w1.nama, ', ', w2.nama) as namakota, w1.id_level_wilayah, w1.mst_kode_wilayah, w1.kode_wilayah 
		from Referensi.ref.mst_wilayah w1, Referensi.ref.mst_wilayah w2 
		where w1.kode_bps is not null and (w1.id_level_wilayah = 1 OR w1.id_level_wilayah = 2) and ((w1.mst_kode_wilayah) = (w2.kode_wilayah)) 
		order by w1.id_level_wilayah, w2.nama, w1.nama");
        return $query;
    }

    public function getAllCB($kategori) {
        $wherekategori = "";
        if ($kategori>0)
            $wherekategori = "cb.jenis_id=".$kategori."AND";
        $query = $this->db->query("SELECT w.nama as propinsi, kode_pengelolaan, 
        cb.nama as nama, Jenis 
        FROM [Kebudayaan].[dbo].[cagar_budaya] cb 
        JOIN [Referensi].[ref].[mst_wilayah] w 
        ON LEFT(cb.kode_wilayah,2) = LEFT(w.kode_wilayah,2) 
        JOIN [Kebudayaan].[dbo].[jenis_cb] jc 
        ON cb.jenis_id = jc.jenis_id  
        WHERE ".$wherekategori." id_level_wilayah=1 AND cb.soft_delete=0 ORDER BY kode_pengelolaan");
        return $query;
    }

    public function getAllWbtb($kategori) {
        $wherekategori = "";
        if ($kategori>0)
            $wherekategori = "jenis=".$kategori."AND";
        $query = $this->db->query("SELECT w.nama as propinsi, kode_pengelolaan, cb.nama as nama, jc.jenis_wbtb  
        FROM [Kebudayaan].[dbo].[wbtb] cb 
        JOIN [Referensi].[ref].[mst_wilayah] w 
        ON LEFT(cb.kode_prov,2) = LEFT(w.kode_wilayah,2) 
        JOIN [Kebudayaan].[dbo].[jenis_wbtb] jc 
        ON cb.jenis = jc.jenis_id 
        WHERE ".$wherekategori." id_level_wilayah=1 AND cb.soft_delete = 0");
        return $query;
    }

    public function getAllMuseum($jenis) {
        // $query = $this->db->query("SELECT w.nama as propinsi, kode_pengelolaan, cb.nama as nama, cb.jenis_mus  
        // FROM [Kebudayaan].[dbo].[museum] cb 
        // JOIN [Referensi].[ref].[mst_wilayah] w 
        // ON LEFT(cb.kode_wilayah,2) = LEFT(w.kode_wilayah,2) 
        // WHERE cb.soft_delete = 0 AND id_level_wilayah=1");
        // return $query;
        $danjenis = "";
        if ($jenis!="all")
            $danjenis = "AND jenis_lk_id='".$jenis."' ";

        $query = $this->db->query("SELECT kode_pengelolaan,jenis_mus,entitas_lk_id as lembaga_id,w.nama as propinsi, m.nama as nama, nama_lk  
        FROM [Kebudayaan].[dbo].[lembaga_kebudayaan] m 
        LEFT JOIN [Referensi].[ref].[mst_wilayah] w 
        ON LEFT(m.kode_wilayah,2) = LEFT(w.kode_wilayah,2) 
        LEFT JOIN [kebudayaan].[dbo].[jenis_lk] z 
        ON z.jenis_lk_id = m.jenis_lk 
        WHERE id_level_wilayah=1 AND m.soft_delete=0 ".$danjenis." 
        ORDER BY jenis_lk,m.nama");
        return $query;
    }
    
    public function dafJenisLK() {
        $query = $this->db->query("SELECT jenis_lk_id,nama_lk FROM [Kebudayaan].[dbo].[jenis_lk] 
        ORDER BY jenis_lk_id");
        return $query;
    }

    public function getAllMaestro() {
        $query = $this->db->query("SELECT maestro_id,jenis_kelamin,w.nama as propinsi, m.nama_maestro as nama, m.jenis_kelamin 
        FROM [Kebudayaan].[dbo].[maestro] m 
        LEFT JOIN [Referensi].[ref].[mst_wilayah] w 
        ON LEFT(m.kode_wilayah,2) = LEFT(w.kode_wilayah,2) 
        WHERE id_level_wilayah=1");
        return $query;
    }

    public function getAllSanggar() {
        $query = $this->db->query("SELECT lembaga_id,fokus_bidang,w.nama as propinsi, m.nama_lembaga as nama  
        FROM [Kebudayaan].[dbo].[lembaga_kebudayaan] m 
        LEFT JOIN [Referensi].[ref].[mst_wilayah] w 
        ON LEFT(m.kode_provinsi,2) = LEFT(w.kode_wilayah,2) 
        WHERE id_level_wilayah=1");
        
        $query = $this->db->query("SELECT jenis_mus as fokus_bidang,entitas_lk_id as lembaga_id,w.nama as propinsi, m.nama as nama  
        FROM [Kebudayaan].[dbo].[lembaga_kebudayaan] m 
        LEFT JOIN [Referensi].[ref].[mst_wilayah] w 
        ON LEFT(m.kode_wilayah,2) = LEFT(w.kode_wilayah,2) 
        WHERE jenis_lk=3 AND id_level_wilayah=1");
        return $query;
    }

    public function getObjCB($kode) {
        $sql = "SELECT c.kode_wilayah,c.nama, no_sk_cb, tanggal, nama_level, jc.Jenis, w1.nama as propinsi, w2.nama as kota, deskripsi, bujur, lintang 
        FROM [Kebudayaan].[dbo].[cagar_budaya] c
        JOIN [Kebudayaan].[dbo].[sk_cb] s 
        ON c.entitas_cb_id = s.entitas_cb_id 
        JOIN [Kebudayaan].[dbo].[jenis_cb] jc 
        ON c.jenis_id = jc.jenis_id 
        JOIN [Referensi].[ref].[mst_wilayah] w1 
        ON LEFT(c.kode_wilayah,2) = LEFT(w1.kode_wilayah,2)
        JOIN [Referensi].[ref].[mst_wilayah] w2 
        ON LEFT(c.kode_wilayah,4) = LEFT(w2.kode_wilayah,4) 
        JOIN [Kebudayaan].[dbo].[kepemilikan_cb] km
        ON c.entitas_cb_id = km.entitas_cb_id 
        WHERE w1.id_level_wilayah=1 AND w2.id_level_wilayah=2 
        AND c.kode_pengelolaan = :kodepengelolaan:";

        $query = $this->db->query($sql, [
            'kodepengelolaan' => $kode
        ]);
        
        return $query;
    }

    public function getPicObjCB($kode) {
        $sql = "SELECT s.* 
        FROM [Kebudayaan].[dbo].[cagar_budaya] c 
        JOIN [Kebudayaan].[dbo].[foto_cb] s 
        ON c.entitas_cb_id = s.entitas_cb_id 
        WHERE c.kode_pengelolaan = :kodepengelolaan: AND s.soft_delete='off' 
        ORDER BY foto_no";

        $query = $this->db->query($sql, [
            'kodepengelolaan' => $kode
        ]);
        
        return $query;
    }

    public function getObjWbtb($kode) {
        $sql = "SELECT c.nama, sk_penetapan, tgl_penetapan, c.nama, jc.jenis_wbtb as domain, w1.nama as propinsi, deskripsi
        FROM [Kebudayaan].[dbo].[wbtb] c
        JOIN [Kebudayaan].[dbo].[jenis_wbtb] jc 
        ON c.jenis = jc.jenis_id 
        JOIN [Referensi].[ref].[mst_wilayah] w1 
        ON LEFT(c.kode_prov,2) = LEFT(w1.kode_wilayah,2)
        WHERE w1.id_level_wilayah=1 AND c.kode_pengelolaan = :kodepengelolaan:";

        $query = $this->db->query($sql, [
            'kodepengelolaan' => $kode
        ]);
        
        return $query;
    }

    public function getJenisWbtb() {
        $sql = "SELECT * FROM [Kebudayaan].[dbo].[jenis_wbtb]";
        $query = $this->db->query($sql);
        
        return $query;
    }

    public function getJenisCB() {
        $sql = "SELECT * FROM [Kebudayaan].[dbo].[jenis_cb]";
        $query = $this->db->query($sql);
        
        return $query;
    }
    
    public function getPicObjWbtb($kode) {
        $sql = "SELECT s.* 
        FROM [Kebudayaan].[dbo].[wbtb] c 
        LEFT JOIN [Kebudayaan].[dbo].[foto_wbtb] s 
        ON c.entitas_id = s.entitas_id 
        WHERE c.kode_pengelolaan = :kodepengelolaan: AND s.soft_delete=0  
        ORDER BY kategori_foto_id";

        $query = $this->db->query($sql, [
            'kodepengelolaan' => $kode
        ]);
        
        return $query;
    }

    public function getObjMuseum($kode) {
        // $sql = "SELECT c.nama, sk_pendirian, tgl_pendirian, c.nama, c.jenis_mus as jenismuseum, w1.nama as propinsi, jam_kunjung
        // FROM [Kebudayaan].[dbo].[museum] c
        // JOIN [Referensi].[ref].[mst_wilayah] w1 
        // ON LEFT(c.kode_wilayah,2) = LEFT(w1.kode_wilayah,2)
        // LEFT JOIN [Kebudayaan].[dbo].[kepemilikan_museum] km
        // ON c.entitas_mus_id = km.entitas_mus_id 
        // WHERE w1.id_level_wilayah=1 AND c.kode_pengelolaan = :kodepengelolaan:";

        // $query = $this->db->query($sql, [
        //     'kodepengelolaan' => $kode
        // ]);

        $sql = "SELECT jenis_mus as fokus_bidang,kontak,email,website,alamat,w.nama as propinsi, m.nama as nama_lembaga, * 
        FROM [Kebudayaan].[dbo].[lembaga_kebudayaan] m
        JOIN [Referensi].[ref].[mst_wilayah] w
        ON LEFT(m.kode_wilayah,2) = LEFT(w.kode_wilayah,2)
        WHERE w.id_level_wilayah=1 AND m.kode_pengelolaan = :kodelembaga:";

        $query = $this->db->query($sql, [
            'kodelembaga' => $kode
        ]);
        
        return $query;
    }

    public function getObjMaestro($kode) {
        $sql = "SELECT (CASE WHEN jenis_kelamin='L ' THEN 'Laki-laki' ELSE 'Perempuan' END) as sex,
        w.nama as propinsi, m.nama_maestro as nama 
        FROM [Kebudayaan].[dbo].[maestro] m
        JOIN [Referensi].[ref].[mst_wilayah] w
        ON LEFT(m.kode_wilayah,2) = LEFT(w.kode_wilayah,2)
        WHERE w.id_level_wilayah=1 AND m.maestro_id = :kodemaestro:";

        $query = $this->db->query($sql, [
            'kodemaestro' => $kode
        ]);
        
        return $query;
    }

    public function getObjSanggar($kode) {
        $sql = "SELECT jenis_mus as fokus_bidang,sumber_data,nama_kontak,nomor_kontak,email,website,instagram,youtube,alamat,w.nama as propinsi, m.nama_lembaga as nama 
        FROM [Kebudayaan].[dbo].[lembaga_kebudayaan] m
        JOIN [Referensi].[ref].[mst_wilayah] w
        ON LEFT(m.kode_provinsi,2) = LEFT(w.kode_wilayah,2)
        WHERE w.id_level_wilayah=1 AND m.lembaga_id = :kodelembaga:";

        $query = $this->db->query($sql, [
            'kodelembaga' => $kode
        ]);
        
        return $query;
    }

    public function getPicObjMuseum($kode) {
        $sql = "SELECT s.* 
        FROM [Kebudayaan].[dbo].[museum] c 
        JOIN [Kebudayaan].[dbo].[foto_lk] s 
        ON c.entitas_mus_id = s.entitas_lk_id 
        WHERE c.kode_pengelolaan = :kodepengelolaan: AND s.soft_delete='off' 
        ORDER BY foto_no";

        $query = $this->db->query($sql, [
            'kodepengelolaan' => $kode
        ]);
        
        return $query;
    }

    public function getSekolahTerdekat($lintang,$bujur,$kodewilayah) {
        $sql = "SELECT TOP 5 sekolah_id,npsn,nama,alamat_jalan,
        ROUND(GEOGRAPHY::Point(lintang , bujur , 4326).STDistance(geography::
        Point(:lintang:,:bujur:,4326))/1000,2) AS radius,
        lintang,bujur
        FROM Arsip.dbo.sekolah
        WHERE lintang between -90 and 90 AND lintang !=0
        AND bentuk_pendidikan_id in (5,6,7,8,13,14,15,18,11,12,27,29,53,54,55,40,39)
        AND LEFT(kode_wilayah,4) = :kodewilayah:
        AND soft_delete = 0
        ORDER BY radius";

        $query = $this->db->query($sql, [
            'lintang' => $lintang,
            'bujur' => $bujur,
            'kodewilayah' => $kodewilayah
        ]);

        return $query;
    }
    
}
