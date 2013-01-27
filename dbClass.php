<?php
class dbClass
{
        private $con;
//        function __construct($host, $name, $password) 
//        {
//                $this->con = mysql_connect($host, $name, $password);
//        }

        public function insertSth($tableName, $contentArray) 
        {
                $sql = "";
                mysql_query();      
        }
        
        static public function connect2Db()
        {
                $con = mysql_connect("127.0.0.1", "jianfeideorg", "");
                mysql_select_db("jianfeideorg", $con);
                return $con;
        }

}
