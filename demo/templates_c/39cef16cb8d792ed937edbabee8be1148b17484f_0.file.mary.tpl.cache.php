<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-20 07:14:29
  from 'C:\xampp\htdocs\coding\guestbook\demo\templates\mary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e2545454db3c4_87782054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39cef16cb8d792ed937edbabee8be1148b17484f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\coding\\guestbook\\demo\\templates\\mary.tpl',
      1 => 1579500868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2545454db3c4_87782054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7810235245e2545454af9e6_62119090';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Crazy Mary</title>
    <?php echo '<script'; ?>
 src="jquery-3.4.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="Marry.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../bootstrap-4.4.1/css/bootstrap.css">
    <?php echo '<script'; ?>
 src="../bootstrap-4.4.1/js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="popper.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
    <style>
        body{
            font-family: 'Microsoft JhengHei', Arial, Helvetica, sans-serif;
        }
        table {
            border-collapse: separate;
            margin-left: auto;
            margin-right: auto;
        }
        td {
            border-collapse: separate;
            border: 3px solid rgba(255,255,255,0);
            width: 54px;
            height: 54px;
        }
        #central{
            text-align: center;
        }
        #runningArea {
            width: 100%;
            height: 278px;
        }
        #Flycoin{
            width:64px;
            height:64px;
            position:absolute;
            top:35%;left:60%;
            visibility: hidden;
        }
        @keyframes borderColor{
            0%{
                border: 3px solid yellow;
            }
            25%{
                border: 3px solid red;
            }
            50%{
                border: 3px solid white;
            }
            75%{
                border: 3px solid red;
            }
            100%{
                border: 3px solid yellow;
            }
        }
        .yellowLight {
            animation-name: borderColor ;
            animation-duration:2s ;
            border: 3px solid yellow;
        }
        .normal {
            border: 3px solid rgba(255,255,255,0);
        }
        #setBoard>div {
            padding: auto;
            margin-top: 9px;
            margin-left: 3px;
            margin-right: 3px;
            margin-bottom: 6px;
            text-align: center;
            display: inline-block;
            width: 74px;
            height: 155px;
        }
        h3{
            margin: 0px;
        }
        p>input {
            width: 68px;
        }
        @keyframes fontColor{
            0%{
                color: yellow;
            }
            25%{
                color: red;
            }
            50%{
                color: white;
            }
            75%{
                color: red;
            }
            100%{
                color: yellow;
            }
        }
        .font{
            animation-name: fontColor;
            animation-duration:2s ;
            color:yellow;
        }
        @keyframes navFont{
            0%{
                font-size: 1.5rem;
            }
            99%{
                font-size: 1.5rem;
            }
            100%{
                font-size: 1rem;
            }
        }
        .navFont{
            animation-name: navFont;
            animation-duration:1s ;
        }

        @keyframes flyCoin{
            0%{
                visibility: visible;
                top: 74%;
                left: 77%;
            }
            10%{
                top: 68%;
                left: 79%;
            }
            20%{
                top: 62%;
                left: 80%;
            }
            30%{
                top: 56%;
                left: 81%;
            }
            40%{
                top: 50%;
                left: 82%;
            }
            50%{
                top: 44%;
                left: 83%;
            }
            60%{
                top: 38%;
                left: 83%;
            }
            70%{
                top: 32%;
                left: 84%;
            }
            80%{
                top: 26%;
                left: 84%;
            }
            90%{
                top: 20%;
                left: 85%;
            }
            99%{
                top: 14%;
                left: 85%;
                visibility: visible;
            }
            100%{
                top: 14%;
                left: 85%;
                visibility: hidden;
            }
        }
        .Coin{
            animation-name: flyCoin;
            animation-duration:1s ;
        }
    </style>
</head>
<body style="width:100%;height:100%;background-color:black">
    <div style="height:82px"></div>
    <!-- 轉盤區域 -->
    <div id="runningArea">
        <table>
            <tr>
                <td id="1"></td>
                <td id="2"></td>
                <td id="3"></td>
                <td id="4"></td>
                <td id="5"></td>
                <td id="6"></td>
                <td id="7"></td>
                <td id="8"></td>
                <td id="9"></td>
                <td id="10"></td>
                <td id="11"></td>
            </tr>
            <tr>
                <td id="28"></td>
                <td colspan="9" rowspan="3" id="central">
                    <button id="100" onclick="changeMode(100)" class="btn btn-info">100</button>
                    <button id="200" onclick="changeMode(200)" class="btn btn-warning">200</button>
                    <button id="500" onclick="changeMode(500)" class="btn btn-danger">500</button>
                    <h2 id="Gold"></h2>
                </td>
                <td id="12"></td>
            </tr>
            <tr>
                <td id="27"></td>
                <td id="13"></td>
            </tr>
            <tr>
                <td id="26"></td>
                <td id="14"></td>
            </tr>
            <tr>
                <td id="25"></td>
                <td id="24"></td>
                <td id="23"></td>
                <td id="22"></td>
                <td id="21"></td>
                <td id="20"></td>
                <td id="19"></td>
                <td id="18"></td>
                <td id="17"></td>
                <td id="16"></td>
                <td id="15"></td>
            </tr>
        </table>
    </div>
        <!-- 轉盤區域結束 -->
    <!-- 投注區域 -->
    <div id="setBoard" class="text-center">
        <div id="odds1" style="color:yellow">
            <h3></h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button onclick="increse(1)" class="btn btn-success">+</button>
                <button onclick="decrese(1)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust1" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds2" style="color:yellow">
            <h3></h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button onclick="increse(2)" class="btn btn-success">+</button>
                <button onclick="decrese(2)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust2" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds3" style="color:yellow">
            <h3></h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button onclick="increse(3)" class="btn btn-success">+</button>
                <button onclick="decrese(3)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust3" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds4" style="color:yellow">
            <h3></h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button onclick="increse(4)" class="btn btn-success">+</button>
                <button onclick="decrese(4)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust4" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds5" style="color:yellow">
            <h3></h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button onclick="increse(5)" class="btn btn-success">+</button>
                <button onclick="decrese(5)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust5" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds6" style="color:yellow">
            <h3></h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button onclick="increse(6)" class="btn btn-success">+</button>
                <button onclick="decrese(6)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust6" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds7" style="color:yellow">
            <h3></h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button onclick="increse(7)" class="btn btn-success">+</button>
                <button onclick="decrese(7)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust7" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds8" style="color:yellow">
            <h3></h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button onclick="increse(8)" class="btn btn-success">+</button>
                <button onclick="decrese(8)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust8" value="0" readonly="readonly" /></p>
        </div>
        <div id="odds9" style="color:yellow">
            <h3></h3>
            <img v-bind:src='pic'>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button onclick="increse(9)" class="btn btn-success">+</button>
                <button onclick="decrese(9)" class="btn btn-success">-</button>
            </div>
            <p><input type="number" id="coinAdjust9" value="0" readonly="readonly" /></p>
        </div>
        <p style="margin-bottom:6px">
            <input type="number" id="coin" value="0" readonly="readonly">
            <button onclick="btnInsert()" id="insertButton">insert coins</button>
            <button type="submit" onclick="btnStart()" id="startButton">Start</button>
        </p>
    </div>
    <!-- 投注區域結束 -->
</body>
</html><?php }
}
