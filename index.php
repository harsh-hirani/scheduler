
<?php
if (!isset($_COOKIE['div']) || !isset($_COOKIE['branch'])) {
    echo '<script>location.replace("select.php")</script>';
}else{
$div = $_COOKIE['div'];
$branch = $_COOKIE['branch'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php 
        switch ($_COOKIE['branch']) {
            case 'c':
                echo 'com';
                break;
            case 'i':
                echo 'ict';
                break;
            default:
                echo 'unknown';
                break;
        }
        echo ' |'.$_COOKIE['div'];
    ?> Schedule</title>

    <!-- <link rel="stylesheet" href="dipan/main.css"> -->
    <style >
<?php include "dipan/main.css"; ?>
    </style>
    <!-- <link rel="stylesheet" href="dipan/todo_list.css"> -->
</head>
<body>

<main id="main">
    <nav>
        <div class="cal">
            <input type="date" name="datetime" id="datetime" />
            <h2 onclick="location.replace('select.php')"> <?php 
            if ($branch == 'c') {
                echo "computer - ";
            }elseif($branch == 'i'){
                echo "ict - ";
            }
            echo $div;
            ?> </h2>
        </div>
    </nav>
    <div class="timeline">
        <div class="container right" id="costom">
        </div>
    </div>
</main>
<footer>
    <h3 >
        Powerd By
    </h3>
        <h1 class="story-indicator"> Tachyon </h1>
</footer><span></span>
    <script type="text/javascript">
        <?php
        include '../../globle/JQ/jquery-3.6.0.js';
        ?>
        const d = new Date();
        let cuurentHour = d.getHours();
        document.getElementById('datetime').valueAsDate = new Date();
        const divisn = <?php echo $div;?>;// default
        const barnchee = "<?php echo $branch;?>";
        let subList = {
            "20CH101P": "Chemistry Lab",
            "20CH101T": "Chemistry",
            "20CP102P": "Fundamentals of Python Programming",
            "20HS101P": 'Communication Skills - I',
            "20HS102T": 'Environmental Studies',
            "20IC101P": 'Basic Electronics - Lab',
            "20IC101T": 'Basic Electronics',
            "20MA103T": 'Mathematics - II',
            "20ME101P": 'Engineering Graphics Lab CAD',
            "20ME101P": 'Engineering Graphics Lab',
            "20ME102P": 'Element of Mechanical Engineering - LAB',
            "20ME102T": 'Element of Mechanical Engineering',
            "16HS109T": 'Professional Ethics and Human Values',
            "16ME103P": 'Workshop Practice',
            "16SP101" : 'NCC - I',
            "16SP102" : 'NSS - I',
            "16SP103" : 'SPORTS - I',
            "20CE101P": 'Element of Civil Engineering & Mechanics Lab',
            "20CE101T": 'Element of Civil Engineering & Mechanics',
            "20EE101P": 'Elements of Electrical Engineering Lab',
            "20EE101T": 'Elements of Electrical Engineering',
            "20PH101P": 'Physics Lab',
            "20PH101T": 'Physics',
            "free": 'MOj KarO'
        }
        let faclTlist = {
            "ANKC": 'Ankur Changela',
            "ASR" : 'Abhinaya Srinivas',
            "CSN" : 'Chandrashekhar Nishad',
            "MBK" : 'M B KIRAN',
            "MWI" : 'Mallika Wadhwani',
            "PATI": 'Ranjan Pati',
            "POSA": 'Pooja Shah',
            "PPP" : 'Parth P Prajapati',
            "RACH": 'Rajendra Chaudhary',
            "SBMA": 'Shabimam M A',
            "SOPA": 'Soumyashree Panda',
            "SYSH": 'Syed Shahabuddin',
            "VIV" : 'Vinay Vakharia',
            "VVJ" : 'Vivek Jaiswal',
            "ACH" : 'Ankur Chaurasia',
            "HDV" : 'Hardik Vyas',
            "KALM": 'Kalisadhan Mukherjee',
            "MWI" : 'Mallika Wadhwani',
            "PATI": 'Ranjan Pati',
            "RAD" : 'Rahul Deharkar',
            "RAGA": 'Rama Gaur',
            "VNK" : 'Vinayak',
            "ATM" : 'Anilkumar Markana',
            "DEB" : 'Debasis Sarkar',
            "DHPU": 'Dhaval Pujara',
            "DIP" : 'Dishant Pandya',
            "HRD" : 'Hiren Dave',
            "MAH" : 'Mary Hepzibah',
            "MAK" : 'Manoj Kumar',
            "MBH" : 'Milan Bhatt',
            "MKR" : 'Meera Karamta',
            "NESI": 'Neelam Singha',
            "RAG" : 'Rajesh Gujar',
            "VIM" : 'Vima Mali',
            "YOKU": 'Yogesh Kumar',
            "YOU" : 'Your SeLf'
        }
        let main = document.getElementById('main');
        function creater(data,f,s){
            console.log(data);
            let renderstring = '';
            var isActive = '';
            let grp ='';
            let timestr = f[0]+f[1]+" - "+s[2]+s[3]; 
            if(cuurentHour >= parseInt(f[0]+f[1]) && cuurentHour < parseInt(s[2]+s[3]) ){
                isActive = 'active';
            }
            if(data[0]=='b'){

                grp = 'G'+ (2*divisn-1) + '/G' + (2*divisn);
            }else{
                grp = 'G'+ (2*divisn-1);
            }
            for(let i=0; i<data.length; i++){
                renderstring += '<div class="content '+isActive+'">';
                renderstring += '<span class="time">'+timestr+'</span>';
                renderstring += '<h2>'+subList[data[1]]+' <span class="sub-code" >#'+data[1]+'</span></h2>';
                renderstring += '<div class="bottom-container"><div class="b1"><span class="forGrp">'+grp+'</span>\n<span class="location"> '+data[2]+' </span></div>';
                renderstring += '<div class="b2"><span class="faclt">'+faclTlist[data[3]]+' - <span class="fac-code" >'+data[3]+'</span> </span></div></div>';
                if(data[0]!='b'){
                    renderstring += '<h2>'+subList[data[4]]+' <span class="sub-code" >#'+data[4]+'</span></h2>';
                    renderstring += '<div class="bottom-container"><div class="b1"><span class="forGrp">G'+(parseInt(data[0])+1)+'</span>\n<span class="location"> '+data[5]+' </span></div>';
                    renderstring += '<div class="b2"><span class="faclt">'+faclTlist[data[6]]+' - <span class="fac-code" >'+data[6]+'</span> </span></div></div>';
                }
                renderstring += '<section class="remark"></section></div>';
                return renderstring;
            }
        }
        let arr = ['0910','1011','1112','1213','1314','1415','1516','1617','1718'];
        function doing(data){
            console.log(data);
            document.getElementById('costom').innerHTML = '';
            jsonData = jQuery.parseJSON(data);
            console.log(jsonData);
            if(jsonData.addData.msg == 'done'){
                for(i=0;i<arr.length;i++){
                    if(jsonData.mainData[arr[i+1]]=='same'){
                        document.getElementById('costom').innerHTML += creater(jsonData.mainData[arr[i]].split('||'),arr[i],arr[i+1]);
                        i++;
                    }else if(jsonData.mainData[arr[i]]=='free'){
                        let myActive =(cuurentHour >= parseInt(arr[i][0]+arr[i][1]) && cuurentHour < parseInt(arr[i][2]+arr[i][3]) )?'active':''; 
                        document.getElementById('costom').innerHTML += '<div class="content free oddd '+myActive+'"> <span class="time">'+arr[i][0]+arr[i][1]+' - '+arr[i][2]+arr[i][3]+'</span> <h2> Free </h2> </div>';
                    }else if(jsonData.mainData[arr[i]]=='lunch'){
                        let myActive =(cuurentHour >= parseInt(arr[i][0]+arr[i][1]) && cuurentHour < parseInt(arr[i][2]+arr[i][3]) )?'active':''; 
                        document.getElementById('costom').innerHTML += '<div class="content lunch oddd '+myActive+'"> <span class="time">'+arr[i][0]+arr[i][1]+' - '+arr[i][2]+arr[i][3]+'</span> <h2> Lunch </h2></div>';
                    }else{
                        document.getElementById('costom').innerHTML += creater(jsonData.mainData[arr[i]].split('||'),arr[i],arr[i]);
                    }
                    console.log(i)
                }
            }else{
                // on sunday or saturday
                document.getElementById('costom').innerHTML = '<div class="content free oddd"> <span class="time">for whole day</span> <h2> '+jsonData.addData.msg+' </h2></div>';
                
            }
        }
        $.post('api.php',
        {
            div:<?php echo $div; ?>,
            branch:'<?php echo $branch; ?>',
            targetDate: new Date().toISOString().slice(2, 10)
        },
        (data,sts)=>{
            doing(data)
        });
        
        
        document.getElementById('datetime').addEventListener('input',(e) =>{
            document.getElementById('costom').innerHTML = 'Loading...';
            targetDater = String(e.target.value);
            lauchingDate = targetDater[2]+targetDater[3]+targetDater[4]+targetDater[5]+targetDater[6]+targetDater[7]+targetDater[8]+targetDater[9];
            // console.log(lauchingDate)
            $.post('api.php',
            {
                div:divisn,
                branch:barnchee,
                targetDate:lauchingDate
            },
            (data,sts)=>{
                doing(data);
            });

        })
    </script>
</body>
</html>
<?php
}
?>