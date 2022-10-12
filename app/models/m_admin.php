<?php

class m_admin
{

    private $db;
    private $error;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahAdmin($data)
    {
        try {
            // buat hash dari password yang dimasukkan 
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            //Masukkan user baru ke database 
            $query = "INSERT INTO admin VALUES ('',:username,:password)";
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $password);
            $this->db->execute();
            // return $this->db->rowCount();
            return true;
        } catch (PDOException $e) {
            // Jika terjadi error 
            if ($e->errorInfo[0] == 23000) {
                //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan 
                //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique 
                $this->error = "Email sudah digunakan!";
                return false;
            } else {
                echo $e->getMessage();
                return false;
            }
        }
    }

    public function login($data)
    {
        try {
            // buat hash dari password yang dimasukkan 
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            // Ambil data dari database 
            $query = "SELECT * FROM admin WHERE username = :username";
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $password);
            $this->db->execute();

            return $this->db->rowCount();
            // Jika jumlah baris > 0 
            if ($this->db->rowCount() > 0) {
                // jika password yang dimasukkan sesuai dengan yg ada di database 
                if (password_verify($data['password'], $password)) {
                    $_SESSION['user_session'] = $data['id'];
                    return true;
                } else {
                    $this->error = "Email atau Password Salah";
                    return false;
                }
            } else {
                $this->error = "Email atau Password Salah";
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
