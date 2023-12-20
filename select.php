<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <style>*{margin:0;padding:0;}
        .coner{
            background-color: #474e5d;
            min-height: 100vh;
            width: 100%;
            display: flex;
            font-family: monospace;
            font-size: 20px;
            font-weight: bolder;
        }
        .row{
            width: 60%;
            min-height: 50vh;
            /* background-color: #fff; */
            margin: auto;
        }.container-my {
    height: 100%;
    display: flex;
    width: clamp(200px,990%,100%);
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 2px auto;
}
.radio_container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #cecece;
    width: clamp(200px,280px,100%);
    height: 50px;
    border-radius: 999px;
    box-shadow: inset 0.5px 0.5px 2px 0 rgba(0, 0, 0, 0.15);
}

input[type="radio"] {
    appearance: none;
    display: none;
}

label {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: inherit;
    height: 30px;
    margin-bottom: 10px;
    margin-top: 10px;
    min-width: 100px;
    text-align: center;
    border-radius: 9999px;
    overflow: hidden;
    transition: linear 0.3s;
    color: #000;
}
input[type="radio"]:checked + label {
    background-color: rgb(53, 241, 172);
    padding: 6px 12px;
    color: #000;
    transition: 0.3s;
}
.expo input[type="radio"]:checked + label{
    background-color: rgb(255,250,97);
    padding: 3px 8px;
}
.expo{
    margin-top: 20px;
    width: 100%;
}
.btns div{
    height: 40px;
    width: 200px;
    margin: 10px auto;
    text-align: center;
    font-weight: bolder;
    font-size: 2rem;
    padding: 10px 20px;
    border-radius: 20px;
}
.btns div:first-child{
    color: black;
    background-color: rgba(53, 241, 172,0.669);
    border-bottom: 6px solid  rgb(53, 241, 172);
}
.btns div:last-child{
    color: black;
    background-color: rgba(255,250,97,0.669);
    border-bottom: 6px solid  rgb(255,250,97);
}
@media (max-width: 767px) { 
    .expo {
        display: block;
        height: 100%;
        background-color: transparent !important;
        color: #fff !important;
    }
    .expo label {
        transition: all 0.21s ease-in-out;
        color: #fff !important;
    }.expo input[type="radio"]:checked + label{
    background-color: rgb(255,250,97);
    padding: 1px 12px;
    color: #000 !important;
}

}
    </style>
</head>
<body>
    <div class="coner">
        <div class="row">
            <div class="container-my">
                <div class="radio_container">
                    <input type="radio" name="branch" id="one" checked value="c">
                    <label for="one">computer</label>
                    <input type="radio" name="branch" id="two" value="i">
                    <label for="two">ict</label>
                </div>
                <div class="radio_container expo">
                    <input type="radio" name="div" id="done" checked value="1">
                    <label for="done">Div 1</label>
                    <input type="radio" name="div" id="dtwo" value="2">
                    <label for="dtwo">Div 2</label>
                    <input type="radio" name="div" id="dthree" value="3">
                    <label for="dthree">Div 3</label>
                    <input type="radio" name="div" id="dfour" value="4">
                    <label for="dfour">Div 4</label>
                    <input type="radio" name="div" id="dfive" value="5">
                    <label for="dfive">Div 5</label>
                </div>
                <div class="btns">
                    <div class="btn" onclick="go();">Submit</div>
                    <div class="btn" onclick="location.replace('index.php');">Back</div>
                </div>
            </div>
        </div>
    </div>
    <script>
        <?php
        include '../../globle/JQ/jquery-3.6.0.js';
        ?>
        function go(){
            var branch = $("input[type='radio'][name='branch']:checked").val();
            var div = $("input[type='radio'][name='div']:checked").val();
            let locatonstr = 'handle.php?div='+div+'&branch='+branch;
            location.replace(locatonstr)
        }
    </script>
</body>
</html>