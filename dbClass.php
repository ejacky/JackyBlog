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
                $con = mysql_connect("103.246.246.81", "jianfeideorg", "mmjUgAVZVk");
                mysql_select_db("jianfeideorg", $con);
                return $con;
        }

}