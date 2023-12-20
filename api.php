<?php
$div = $_POST['div'];
$branch = $_POST['branch'];
$date = isset($_POST['targetDate'])?$_POST['targetDate']:date('y-m-d');
$dayOfWeek = date("l", strtotime($date));
$week = array("Monday","Tuesday","Wednesday","Thursday","Friday");
$times = array('0910','1011','1112','1213','1314','1415','1516','1617','1718');
// $date = '2320';//date('y');

// list of tabels
$tabels = array(
    "c1"=>array(
        $week[0]=>array(//monday
            $times[0]=>array("b","20CH101T","E204","SYSH"),
            $times[1]=>array("free"),
            $times[2]=>array("1","20ME101P","D006","PPP","20IC101P","E112/113","SOPA"),
            $times[3]=>array("same"),
            $times[4]=>array("lunch"),
            $times[5]=>array("b","20ME102T","E203","MBK"),
            $times[6]=>array("b","20MA103T","E204","CSN"),
            $times[7]=>array("free"),
            $times[8]=>array("free")
        ),$week[1]=>array(
            $times[0]=>array("1","20IC101P","E204","ANKC",'20ME101P','D006','PPP'),
            $times[1]=>array("same"),
            $times[2]=>array("b",'20IC101T','E204','SOPA'),
            $times[3]=>array("b",'20HS101P','C006','MWI'),
            $times[4]=>array("lunch"),
            $times[5]=>array("b",'20MA103T',"E203","CSN"),
            $times[6]=>array('free'),
            $times[7]=>array("b",'20HS102T','E204','SBMA'),
            $times[8]=>array("free")
        ),$week[2]=>array(
            $times[0]=>array("1",'20CH101P','C012','SYSH','20CP102P','C008','RACH'),
            $times[1]=>array('same'),
            $times[2]=>array('b','20IC101T','E203','SOPA'),
            $times[3]=>array('b','20HS101P','C007','MWI'),
            $times[4]=>array('lunch'),
            $times[5]=>array('b','20MA103T','E203','CSN'),
            $times[6]=>array('b','20HS102T','E203','SBMA'),
            $times[7]=>array('free'),
            $times[8]=>array('free')
        ),$week[3]=>array(
            $times[0]=>array('1','20CP102P','C008','POSA','20CH101P',' C012','PATI'),
            $times[1]=>array('same'),
            $times[2]=>array('free'),
            $times[3]=>array('b','20MA103T','D007','CSN'),
            $times[4]=>array('lunch'),
            $times[5]=>array('b','20HS102T','E204','SBMA'),
            $times[6]=>array('b','20ME102T','E102','MBK'),
            $times[7]=>array('b','20CH101T','D008','SYSH'),
            $times[8]=>array('free')
        ),$week[4]=>array(
            $times[0]=>array('b','20CH101T','E203','SYSH'),
            $times[1]=>array('b','20ME102T','E203','MBK'),
            $times[2]=>array('1','20ME101P','E111A','VIV','20ME102P','F002','ASR'),
            $times[3]=>array('same'),
            $times[4]=>array('lunch'),
            $times[5]=>array('1','20ME102P','F002','ASR','20ME101P','E111A','VVJ'),
            $times[6]=>array('same'),
            $times[7]=>array('free'),
            $times[8]=>array('free')
        )
    ),
    "c2"=>array(
        $week[0]=>array(
            $times[0]=>array('free'),
            $times[1]=>array('b','20CH101T','D007','PATI'),
            $times[2]=>array('3','20ME101P','E111A','ACH','20ME102P',' F02','RAD'),
            $times[3]=>array('same'),
            $times[4]=>array('lunch'),
            $times[5]=>array('3','20ME101P','D006','PPP','20IC101P',' E11213','HDV'),
            $times[6]=>array('same'),
            $times[7]=>array('b','20ME102T','E204','PPP'),
            $times[8]=>array('b','20HS102T','E203',' VNK')
        ),$week[1]=>array(
            $times[0]=>array('b','20MA103T','E204','CSN'),
            $times[1]=>array('free'),
            $times[2]=>array('3','20ME102P',' F02','RAD','20ME101P','E111B','VVJ'),
            $times[3]=>array('same'),
            $times[4]=>array('lunch'),
            $times[5]=>array('3','20IC101P',' F04','SOPA','20ME101P','D006','PPP'),
            $times[6]=>array('same'),
            $times[7]=>array('free'),
            $times[8]=>array('free')
        ),$week[2]=>array(
            $times[0]=>array('b','20MA103T','E204','CSN'),
            $times[1]=>array('b','20CH101T','E204','PATI'),
            $times[2]=>array('b','20ME102T','D008','PPP'),
            $times[3]=>array('lunch'),
            $times[4]=>array('b','20HS102T','E203','VNK'),
            $times[5]=>array('3','20CH101P','C012','KALM','20CP102P','C008','POSA'),
            $times[6]=>array('same'),
            $times[7]=>array('free'),
            $times[8]=>array('free')
        ),$week[3]=>array(
            $times[0]=>array('b','20ME102T','E203, PPP'),
            $times[1]=>array('b','20MA103T','E204','CSN'),
            $times[2]=>array('free'),
            $times[3]=>array('b','20IC101T','E204','SOPA'),
            $times[4]=>array('lunch'),
            $times[5]=>array('3','20CP102P','C008','POSA','20CH101P','C012','RAGA'),
            $times[6]=>array('same'),
            $times[7]=>array('b','20HS101P',' C007','MWI'),
            $times[8]=>array('same')
        ),$week[4]=>array(
            $times[0]=>array('free'),
            $times[1]=>array('b','20MA103T','E005','CSN'),
            $times[2]=>array('b','20IC101T','E005','SOPA'),
            $times[3]=>array('free'),
            $times[4]=>array('lunch'),
            $times[5]=>array('b','20CH101T','E202','PATI'),
            $times[6]=>array('b','20HS102T','E005','VNK'),
            $times[7]=>array('free'),
            $times[8]=>array('free')
        )
    ),
    "c3"=>array(),
    "c4"=>array(),
    "c5"=>array(),
    "c6"=>array(),
    "i1"=>array(
        $week[0]=>array(
            $times[0]=>array("b","20MA103T","C202","DIP"),
            $times[1]=>array("b","20PH101T","C202","MAK"),
            $times[2]=>array("b","20EE101T","C202","VIM"),
            $times[3]=>array("b","20CE101T","C202","RAG"),
            $times[4]=>array("lunch"),
            $times[5]=>array("1","20HS101P","C105","MAK",'free','23FF000P','YOU'),
            $times[6]=>array("same"),
            $times[7]=>array("free")
        ),$week[1]=>array(
            $times[0]=>array("free"),
            $times[1]=>array("free"),
            $times[2]=>array('1','16ME103P','C014','HRD','20CP102P','F202','YOKU'),
            $times[3]=>array('same'),
            $times[4]=>array("lunch"),
            $times[5]=>array('1','20EE101P','F102','MKR','20CE101P','C017','DEB'),
            $times[6]=>array('same'),
            $times[7]=>array('b','20CE101T','C202','RAG'),
            $times[8]=>array("free")
        ),$week[2]=>array(
            $times[0]=>array('b','20EE101T','C202','VIM'),
            $times[1]=>array('b','20MA103T','C202','DIP'),
            $times[2]=>array('1','20CP102P','E214','YOKU','20HS101P','C105','MAK'),
            $times[3]=>array('same'),
            $times[4]=>array('lunch'),
            $times[5]=>array('1','20CE101P','C017','DEB','20EE101P','F102','VIM'),
            $times[6]=>array('same'),
            $times[7]=>array('free'),
            $times[8]=>array('free')
        ),$week[3]=>array(
            $times[0]=>array('b','20EE101T','C202','VIM'),
            $times[1]=>array('b','20MA103T','C202','DIP'),
            $times[2]=>array('b','20HS101P','C006','MAH'),
            $times[3]=>array('same'),
            $times[4]=>array('lunch'),
            $times[5]=>array('1','free','23FF000P','YOU','16ME103P','C014','HRD'),
            $times[6]=>array('same'),
            $times[7]=>array('free'),
            $times[8]=>array('free')
        ),$week[4]=>array(
            $times[0]=>array('b','20CE101T','C202','RAG'),
            $times[1]=>array('b','16HS109T','C202','DHPU'),
            $times[2]=>array('b','20PH101T','C202','MAK'),
            $times[3]=>array('b','20MA103T','C002','NESI'),
            $times[4]=>array('lunch'),
            $times[5]=>array('b','20CE101T','C202','RAG'),
            $times[6]=>array('b','20PH101T','C202','MAK'),
            $times[7]=>array('b','16SP103','Sports Ground','MBH'),
            $times[8]=>array('same')
        )
    ),
    "i2"=>array(),
    "i3"=>array(),
);

$conn = mysqli_connect('localhost','root','','test');
   
if($dayOfWeek == 'Sunday' || $dayOfWeek == 'Saturday'){
    echo "{ \"addData\":{\"msg\": \"hurray it's ".$dayOfWeek.'",'."\"date\":\"$date\",\"weekday\":\"$dayOfWeek\",\"div\":\"$div\",\"branch\":\"$branch\"".'}}';
}else{
    if($conn){
        $searchKey = $branch.$div;
        $sql = "SELECT * FROM `cr_control` where forWhich='$searchKey' and changingDate='$date'";
        $result = mysqli_query($conn, $sql);
        // echo $sql;
        if($result){
            $rows = mysqli_num_rows($result);
            if($rows>0){
                $fetched = mysqli_fetch_array($result);
                // print_r($fetched);
                $extraJSON = ",\"extraJSON\":{\"whatToDo\": $fetched[4] }";
            }else{
                $extraJSON = ',"extraJSON":{}';
            }
            if(isset($tabels[$searchKey][$dayOfWeek])){
                
                $returnString = "{\"addData\":{\"msg\":\"done\",\"date\":\"$date\",\"weekday\":\"$dayOfWeek\",\"div\":\"$div\",\"branch\":\"$branch\"},\"mainData\":{";
                for($i=0;$i<count($tabels[$searchKey][$dayOfWeek]);$i++){
                    $returnString .= '"'.$times[$i].'"'.':"';
                    for($j=0; $j < count($tabels[$searchKey][$dayOfWeek][$times[$i]]); $j++) { 
                        $returnString .= $tabels[$searchKey][$dayOfWeek][$times[$i]][$j];
                        if (($j+1) < count($tabels[$searchKey][$dayOfWeek][$times[$i]])){
                            $returnString .= '||';
                        }
                    }
                    $returnString .= '"';
                    if(($i+1) < count($tabels[$searchKey][$dayOfWeek])){
                        $returnString .= ',';
                    }
                }
                $returnString .= '}'.$extraJSON.'}';
                echo $returnString;
            }else{
                echo '{"addData":{"msg":"NO data inserted for your division <br /> conact your CR or Technical Team of Tachyon :)"}}';
            }
        }
    }
} 
?>
