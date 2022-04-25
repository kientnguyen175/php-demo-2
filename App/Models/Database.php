<?php
    class Database
    {
        protected $conn;
        public function __construct()
        {
            $this->conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DB_NAME);
            if (!$this->conn) {
                echo "Kết nối Database không thành công";
                echo '<br>';
                die("Connection Error: " . mysqli_connect_error());
            }
            mysqli_set_charset($this->conn,"utf8");
        }

        public function fetchAllRecords($query)
        {
            $sql_query = mysqli_query($this->conn, $query);
            if (!$sql_query) {
                die('Truy vấn tất cả bản ghi thất bại!');
            }
            $data = [];
            while ($result = mysqli_fetch_object($sql_query)) {
                array_push($data, $result);
            }
            return $data;
        }

        public function fetchARecord($query)
        {
            $sql_query = mysqli_query($this->conn, $query);
            if (!$sql_query) {
                die('Truy vấn một bản ghi thất bại!');
            }
            return mysqli_fetch_object($sql_query);
        }

        public function execute($query)
        {
            $query_sql = mysqli_query($this->conn, $query);
            if (!$query_sql) {
                return false;
            }
            return true;
        }

        public function checkExistRecord($query)
        {
            $query_sql = mysqli_query($this->conn, $query);
            if (!$query_sql) {
                die('Truy vấn kiểm tra thất bại!');
            }
            return mysqli_num_rows($query_sql);
        }
    }
