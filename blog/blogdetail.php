<?php
include 'databaseconnect.php';
$sql = "SELECT * FROM `blogcontent`";
$result = mysqli_query($conn, $sql);
$no=1;
$blogid=$_GET['blogno'];
?>

<!DOCTYPE html><html lang="en-US" itemscope itemtype="http://schema.org/WebPage"><head><meta charset="utf-8"><script nonce="DNyFu3/SwOvKfZfjOE8hlw">var DOCS_timing={}; DOCS_timing['sl']=new Date().getTime();</script><script nonce="DNyFu3/SwOvKfZfjOE8hlw">function _DumpException(e) {throw e;}</script><script nonce="DNyFu3/SwOvKfZfjOE8hlw">_docs_flag_initialData={"docs-text-ecfs":true,"atari-emtpr":false,"atari-efpe":false,"atari-etsm":false,"atari-etss":false,"atari-etsswfm":false,"atari-ebidm":false,"atari-ebids":false,"docs-text-elei":false,"docs-text-usc":true,"docs-sup":"","docs-eldi":false,"docs-eiq":false,"docs-ecci":false,"docs-eeii":false,"docs-ipmmp":true,"docs-esi":false,"docs-liap":"/logImpressions","ilcm":{"eui":"AHKXmL0NwwWCXUXzNRh2J_jOzHMuL9B3Le6_9ki6ita7jaQ5i_mCx9_S0UzsQV2lGHHmaM31jjF5","je":1,"sstu":1646994835347000,"si":"CIys7vDtvfYCFYIEbwYdFzcG2g","gsc":null,"ei":[5703839,5704621,5706832,5706836,5707711,5708870,5711808,5713207,5714550,5714628,5720060,5720925,5721344,5729664,5732942,5734571,5734954,5735806,5737337,5737441,5738509,5738529,5739802,5739897,5740814,5741775,5742462,5743124,5745622,5747267,5747741,5748029,5749679,5750552,5752694,5753006,5753329,5754229,5756315,5758193,5761523,14101306,14101502,14101510,14101530,14101534],"crc":0,"cvi":[]},"docs-ccdil":false,"docs-eil":true,"docs-eoi":false,"info_params":{},"atari-jefp":"/_/view/jserror","docs-jern":"view","atari-rhpp":"/_/view"}; _docs_flag_cek= null ; if (window['DOCS_timing']) {DOCS_timing['ifdld']=new Date().getTime();}</script><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="referrer" content="strict-origin-when-cross-origin"><link rel="icon" href="https://lh4.googleusercontent.com/B9JXFK8cMFyoDfN8UnPdmI0Ym7qYkHWy5xbRUNqJeQQmAZJqWcFoQrLIoc2OWWrHD7ly3wszj8UZRWD2R8nVrI-tRiCBydY5V6YzJn66QPobiRrm"><meta property="og:title" content="FLAPONE - Blog Detail"><meta property="og:type" content="website"><meta property="og:url" content="https://www.flapone.com/home/about-us"><meta property="og:description" content="
Blog Detail"><meta itemprop="name" content="FLAPONE - Blog Detail"><meta itemprop="description" content="
Blog Detail"><meta itemprop="url" content="https://www.flapone.com/home/about-us"><meta itemprop="thumbnailUrl" content="https://lh6.googleusercontent.com/w-CeXoPl6D0dl4dcgAUdu-q89u1bM7ZpQ6F1JBt-Jw9LENHFkTsG5ifurhIfSOIeEb0ySB1MPnGHmOt1yMV3OlI=w16383"><meta itemprop="image" content="https://lh6.googleusercontent.com/w-CeXoPl6D0dl4dcgAUdu-q89u1bM7ZpQ6F1JBt-Jw9LENHFkTsG5ifurhIfSOIeEb0ySB1MPnGHmOt1yMV3OlI=w16383"><meta itemprop="imageUrl" content="https://lh6.googleusercontent.com/w-CeXoPl6D0dl4dcgAUdu-q89u1bM7ZpQ6F1JBt-Jw9LENHFkTsG5ifurhIfSOIeEb0ySB1MPnGHmOt1yMV3OlI=w16383"><meta property="og:image" content="https://lh6.googleusercontent.com/w-CeXoPl6D0dl4dcgAUdu-q89u1bM7ZpQ6F1JBt-Jw9LENHFkTsG5ifurhIfSOIeEb0ySB1MPnGHmOt1yMV3OlI=w16383"><link href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CBitter%3A400%2C700&display=swap" rel="stylesheet" nonce="GQfJ2RLlZLnsandxDUyttA"><link href="https://fonts.googleapis.com/css?family=Google+Sans_old:400,500|Roboto:300,400,500,700|Source+Code+Pro:400,700&display=swap" rel="stylesheet" nonce="GQfJ2RLlZLnsandxDUyttA"><link href="https://fonts.googleapis.com/css?family=Montserrat%3Ai%2Cbi%2C700%2C400%2C500%2C600&display=swap" rel="stylesheet" nonce="GQfJ2RLlZLnsandxDUyttA"><link rel="stylesheet" href="https://www.gstatic.com/_/atari/_/ss/k=atari.vw._Nw_lDjcyO8.L.W.O/d=1/rs=AGEqA5mKMSNs7T3I89WeVZvuG5ZFhiBy6Q" nonce="GQfJ2RLlZLnsandxDUyttA"><title>NAMAN - Blog Detail</title><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style jsname="ptDGoc" nonce="GQfJ2RLlZLnsandxDUyttA">.ImnMyf{background-color: rgba(255,255,255,1); color: rgba(33,33,33,1);}.Vs12Bd{background-color: rgba(240,240,240,1); color: rgba(33,33,33,1);}.S5d9Rd{background-color: rgba(58,58,58,1); color: rgba(255,255,255,1);}.O13XJf{height: 340px;}.O13XJf .IFuOkc{background-image: url(https://ssl.gstatic.com/atari/images/vision-header.jpg);}.O13XJf .IFuOkc:before{background-color: rgba(31,31,31,1); opacity: 0.5; display: block;}.O13XJf .zfr3Q{color: rgba(255,255,255,1);}.O13XJf .qnVSj{color: rgba(255,255,255,1);}.O13XJf .Glwbz{color: rgba(255,255,255,1);}.O13XJf .qLrapd{color: rgba(255,255,255,1);}.O13XJf .aHM7ed{color: rgba(255,255,255,1);}.O13XJf .NHD4Gf{color: rgba(255,255,255,1);}.O13XJf .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(0,0,0,1); color: rgba(0,0,0,1); font-family: Bitter; font-size: 11pt; line-height: normal;}@media only screen and (max-width: 479px){.O13XJf .QmpIrf{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.O13XJf .QmpIrf{font-size: 11pt;}}@media only screen and (max-width: 479px){.O13XJf{height: 250px;}}.SBrW1{height: 430px; padding-bottom: 120px; padding-top: 120px;}@media only screen and (min-width: 1280px){.yMcSQd .SBrW1{padding-bottom: 120px; padding-top: 176px;}}@media only screen and (max-width: 1279px){.Ly6Unf .SBrW1{padding-bottom: 120px; padding-top: 176px;}}.Wew9ke{fill: rgba(255,255,255,1);}.fOU46b .KJll8d{background-color: rgba(0,0,0,1);}.fOU46b .iWs3gf{color: rgba(255,255,255,1);}.fOU46b .G8QRnc .iWs3gf{color: rgba(0,0,0,1);}.fOU46b .aCIEDd .iWs3gf{color: rgba(0,0,0,1);}@media only screen and (min-width: 1280px){.b2Iqye.fOU46b .G8QRnc .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (min-width: 1280px){.b2Iqye.fOU46b .aCIEDd .iWs3gf{color: rgba(0,0,0,1);}}@media only screen and (min-width: 1280px){.XeSM4.b2Iqye.fOU46b .LBrwzc .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 1280px){.KuNac.b2Iqye.fOU46b .GBy4H .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (min-width: 1280px){.fOU46b .XeSM4 .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 1280px){.fOU46b .KuNac .iWs3gf{color: rgba(33,33,33,1);}}.fOU46b .YTv4We.chg4Jd:focus:before{border-color: rgba(0,0,0,1); display: block;}.fOU46b .zDUgLc{opacity: 1;}.fOU46b .LBrwzc .zDUgLc{border-bottom-style: none;}.YSH9J{color: rgba(0,0,0,1);}.oNsfjf{color: rgba(0,0,0,1);}.wgxiMe{background-color: rgba(19,172,189,1);}.JzO0Vc{background-color: rgba(19,172,189,1);}.M63kCb{background-color: rgba(255,255,255,1);}.zfr3Q{font-family: Bitter; color: rgba(33,33,33,1); font-size: 11pt; line-height: 1.6; margin-top: 15px;}.qnVSj{color: rgba(33,33,33,1);}.Glwbz{color: rgba(33,33,33,1);}.dhtgD{text-decoration: underline;}.dhtgD:hover{opacity: 0.7;}.dhtgD:active{opacity: 0.7;}.yaqOZd .duRjpb:not(.TYR86d):not(.Ap4VC):first-child{padding-top: 13px;}.yaqOZd .duRjpb:not(.TYR86d):first-of-type{padding-top: 13px;}.yaqOZd .duRjpb:not(.TYR86d):last-child{padding-bottom: 13px;}.duRjpb{font-family: Montserrat; font-size: 34pt; line-height: 1.2; font-weight: 700; color: rgba(0,0,0,1);}.duRjpb:not(.TYR86d){margin-top: 30px; padding-top: 13px; padding-bottom: 13px; border-bottom-color: rgba(240,240,240,1); border-top-color: rgba(240,240,240,1); border-bottom-style: solid; border-top-style: solid; border-bottom-width: 5px; border-top-width: 5px;}.Ap4VC{margin-bottom: -30px;}.qLrapd{color: rgba(0,0,0,1);}.JYVBee{font-family: Bitter; font-size: 21pt; line-height: 1.25; font-weight: 700; margin-top: 25px; color: rgba(33,33,33,1);}.CobnVe{margin-bottom: -25px;}.aHM7ed{color: rgba(33,33,33,1);}.OmQG5e{font-family: Bitter; font-size: 15pt; line-height: 1.25; margin-top: 20px; font-weight: 700; color: rgba(0,0,0,1);}.GV3q8e{margin-bottom: -20px;}.NHD4Gf{color: rgba(0,0,0,1);}.duRjpb .OUGEr{color: rgba(0,0,0,1);}.JYVBee .OUGEr{color: rgba(33,33,33,1);}.OmQG5e .OUGEr{color: rgba(0,0,0,1);}.TMjjoe{font-family: Montserrat; font-size: 9pt; line-height: 1.2; margin-top: 0px;}.Zjiec{font-family: Montserrat; font-weight: 400; font-size: 20pt; line-height: 1.75; margin-top: 48px; margin-left: 48px; margin-bottom: 62px; margin-right: 32px;}.XMyrgf{margin-top: 48px; margin-left: 48px; margin-bottom: 0px; margin-right: 32px;}.PsKE7e{font-family: Bitter; font-weight: 400; font-size: 12pt;}.IKA38e{border-left-width: 8px; border-left-style: solid; border-left-color: transparent;}.lhZOrc{color: 0.6; border-left-color: rgba(0,0,0,1); font-weight: 700;}.rysYnb .mohMlc{padding-left: 24px;}.Mz8gvb{color: rgba(0,0,0,1);}.LBrwzc .YSH9J{color: rgba(33,33,33,1);}.LBrwzc .oNsfjf{color: rgba(33,33,33,1);}.LBrwzc .KJll8d{background-color: rgba(33,33,33,1);}.LBrwzc .YTv4We.chg4Jd:focus:before{border-color: rgba(33,33,33,1); display: block;}.LBrwzc .Mz8gvb{color: rgba(33,33,33,1);}.LBrwzc .wgxiMe{background-color: rgba(255,255,255,1);}.LBrwzc .lhZOrc{border-left-color: rgba(19,172,189,1);}.LBrwzc .M9vuGd{border-bottom-color: rgba(19,172,189,1);}.LBrwzc .Mz8gvb{color: rgba(33,33,33,1);}.LBrwzc .zDUgLc{border-bottom-color: rgba(204,204,204,1); border-bottom-width: 1px; border-bottom-style: solid;}.GBy4H .oNsfjf{color: rgba(255,255,255,1);}.GBy4H .YSH9J{color: rgba(255,255,255,1);}.GBy4H .Mz8gvb{color: rgba(255,255,255,1);}.GBy4H .wgxiMe{background-color: rgba(0,0,0,1);}.GBy4H .M9vuGd{border-bottom-color: rgba(255,255,255,1);}.GBy4H .Mz8gvb{color: rgba(255,255,255,1);}.TlfmSc{font-family: Montserrat; font-weight: 400; font-size: 15pt; line-height: 1.33;}.jgXgSe{font-family: Bitter; font-weight: 400; font-size: 12pt; line-height: 28px;}.u5fiyc{line-height: 28px;}.IKA38e{padding-left: 28px; margin-top: 20px;}.hDrhEe{font-family: Bitter; font-weight: 400;}.iwQgFb{height: 2px; margin-top: 8px; background-color: rgba(0,0,0,0.150000006);}.ySLm4c{font-family: Bitter;}.CbiMKe{background-color: rgba(19,172,189,1);}.QmpIrf{background-color: rgba(19,172,189,1); border-color: rgba(0,0,0,1); color: rgba(0,0,0,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.qeLZfd:before{background-color: rgba(240,240,240,1); display: block;}.qeLZfd .iwQgFb{background-color: rgba(19,172,189,1);}.qeLZfd .zfr3Q{color: rgba(33,33,33,1);}.qeLZfd .qnVSj{color: rgba(33,33,33,1);}.qeLZfd .Glwbz{color: rgba(33,33,33,1);}.qeLZfd .duRjpb{border-bottom-color: rgba(255,255,255,1); border-top-color: rgba(255,255,255,1); color: rgba(0,0,0,1);}.qeLZfd .qLrapd{color: rgba(0,0,0,1);}.qeLZfd .JYVBee{color: rgba(33,33,33,1);}.qeLZfd .aHM7ed{color: rgba(33,33,33,1);}.qeLZfd .OmQG5e{color: rgba(0,0,0,1);}.qeLZfd .NHD4Gf{color: rgba(0,0,0,1);}.qeLZfd .duRjpb .OUGEr{color: rgba(0,0,0,1);}.qeLZfd .JYVBee .OUGEr{color: rgba(33,33,33,1);}.qeLZfd .OmQG5e .OUGEr{color: rgba(0,0,0,1);}.lQAHbd:before{background-color: rgba(58,58,58,1); display: block;}.lQAHbd .iwQgFb{background-color: rgba(19,172,189,1);}.lQAHbd .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(0,0,0,1); color: rgba(0,0,0,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.lQAHbd .CbiMKe{background-color: rgba(255,255,255,1);}@media only screen and (max-width: 479px){.lQAHbd .QmpIrf{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.lQAHbd .QmpIrf{font-size: 11pt;}}.lQAHbd .zfr3Q{color: rgba(255,255,255,1);}.lQAHbd .qnVSj{color: rgba(255,255,255,1);}.lQAHbd .Glwbz{color: rgba(255,255,255,1);}.lQAHbd .duRjpb{color: rgba(255,255,255,1); border-top-color: rgba(48,48,48,1); border-bottom-color: rgba(48,48,48,1);}.lQAHbd .qLrapd{color: rgba(255,255,255,1);}.lQAHbd .JYVBee{color: rgba(255,255,255,1);}.lQAHbd .aHM7ed{color: rgba(255,255,255,1);}.lQAHbd .OmQG5e{color: rgba(255,255,255,1);}.lQAHbd .NHD4Gf{color: rgba(255,255,255,1);}.lQAHbd .OUGEr{color: rgba(255,255,255,1);}.LB7kq{padding-bottom: 56px; padding-top: 56px;}@media only screen and (max-width: 479px){.LB7kq{padding-bottom: 28px; padding-top: 28px;}}@media only screen and (min-width: 1280px){.yMcSQd .LB7kq{padding-bottom: 56px; padding-top: 112px;}}@media only screen and (min-width: 1280px){.yMcSQd .iWs3gf{color: rgba(0,0,0,1);}}@media only screen and (min-width: 1280px){.yMcSQd .LBrwzc .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (min-width: 1280px){.yMcSQd .GBy4H .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 1280px){.KuNac.yMcSQd .GBy4H .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 480px) and (max-width: 1279px){.Ly6Unf .LB7kq{padding-bottom: 56px; padding-top: 112px;}}@media only screen and (min-width: 480px) and (max-width: 1279px){.Ly6Unf .iWs3gf{color: rgba(0,0,0,1);}}@media only screen and (min-width: 480px) and (max-width: 1279px){.Ly6Unf .GBy4H .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (min-width: 480px) and (max-width: 1279px){.Ly6Unf .LBrwzc .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (max-width: 479px){.Ly6Unf .LB7kq{padding-bottom: 28px; padding-top: 84px;}}@media only screen and (max-width: 479px){.Ly6Unf .iWs3gf{color: rgba(0,0,0,1);}}@media only screen and (max-width: 479px){.Ly6Unf .GBy4H .iWs3gf{color: rgba(255,255,255,1);}}@media only screen and (max-width: 479px){.Ly6Unf .LBrwzc .iWs3gf{color: rgba(33,33,33,1);}}@media only screen and (min-width: 480px) and (max-width: 767px){.Ly6Unf .gk8rDe{padding-top: 84px; padding-bottom: 28px;}}@media only screen and (max-width: 479px){.Ly6Unf .gk8rDe{padding-top: 56px; padding-bottom: 0px;}}.LB7kq .duRjpb{font-size: 58pt; line-height: 1.06; font-weight: 700; margin-top: 35px; border-bottom-style: none; border-top-style: none;}@media only screen and (max-width: 479px){.LB7kq .duRjpb{font-size: 37pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.LB7kq .duRjpb{font-size: 49pt;}}.cJgDec .zfr3Q{color: rgba(255,255,255,1); border-bottom-color: rgba(255,255,255,1); border-top-color: rgba(255,255,255,1);}.cJgDec .zfr3Q .OUGEr{color: rgba(255,255,255,1);}.cJgDec .qnVSj{color: rgba(255,255,255,1);}.cJgDec .Glwbz{color: rgba(255,255,255,1);}.cJgDec .qLrapd{color: rgba(255,255,255,1);}.cJgDec .aHM7ed{color: rgba(255,255,255,1);}.cJgDec .NHD4Gf{color: rgba(255,255,255,1);}.cJgDec .IFuOkc:before{background-color: rgba(33,33,33,1); opacity: 0.5; display: block;}.cJgDec .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(0,0,0,1); color: rgba(0,0,0,1); font-family: Bitter; font-size: 11pt; line-height: normal;}@media only screen and (max-width: 479px){.cJgDec .QmpIrf{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.cJgDec .QmpIrf{font-size: 11pt;}}.tpmmCb .zfr3Q{color: rgba(15,15,15,1); border-bottom-color: rgba(15,15,15,1); border-top-color: rgba(15,15,15,1);}.tpmmCb .zfr3Q .OUGEr{color: rgba(15,15,15,1);}.tpmmCb .qnVSj{color: rgba(15,15,15,1);}.tpmmCb .Glwbz{color: rgba(15,15,15,1);}.tpmmCb .qLrapd{color: rgba(15,15,15,1);}.tpmmCb .aHM7ed{color: rgba(15,15,15,1);}.tpmmCb .NHD4Gf{color: rgba(15,15,15,1);}.tpmmCb .IFuOkc:before{background-color: rgba(255,255,255,1); display: block;}.tpmmCb .Wew9ke{fill: rgba(15,15,15,1);}.tpmmCb .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(0,0,0,1); color: rgba(0,0,0,1); font-family: Bitter; font-size: 11pt; line-height: normal;}@media only screen and (max-width: 479px){.tpmmCb .QmpIrf{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.tpmmCb .QmpIrf{font-size: 11pt;}}.gk8rDe .duRjpb{font-size: 40pt;}.gk8rDe .zfr3Q{color: rgba(15,15,15,1);}.gk8rDe .duRjpb{color: rgba(15,15,15,1);}.gk8rDe .qLrapd{color: rgba(15,15,15,1);}.gk8rDe .OmQG5e{color: rgba(15,15,15,1);}.gk8rDe .NHD4Gf{color: rgba(15,15,15,1);}.gk8rDe .QmpIrf{background-color: rgba(19,172,189,1); border-color: rgba(0,0,0,1); color: rgba(0,0,0,1); font-family: Bitter; font-size: 11pt; line-height: normal;}@media only screen and (max-width: 479px){.gk8rDe .duRjpb{font-size: 27pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.gk8rDe .duRjpb{font-size: 34pt;}}@media only screen and (max-width: 479px){.gk8rDe .QmpIrf{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.gk8rDe .QmpIrf{font-size: 11pt;}}.zDUgLc{background-color: rgba(19,172,189,1); opacity: 1;}.qV4dIc{border-bottom-color: rgba(255,255,255,0); border-bottom-style: solid; border-bottom-width: 8px; padding-top: 14px; padding-bottom: 6px; padding-left: 2px; padding-right: 2px; margin-left: 10px; margin-right: 10px;}.M9vuGd{border-bottom-color: rgba(0,0,0,1);}.eWDljc{background-color: rgba(19,172,189,1); padding-bottom: 28px;}.PsKE7e:hover{opacity: 0.6;}.BFDQOb:hover{opacity: 0.6;}.QcmuFb{padding-left: 20px;}.vDPrib{padding-left: 40px;}.TBDXjd{padding-left: 60px;}.bYeK8e{padding-left: 80px;}.CuqSDe{padding-left: 100px;}.Havqpe{padding-left: 120px;}.JvDrRe{padding-left: 140px;}.o5lrIf{padding-left: 160px;}.yOJW7c{padding-left: 180px;}.rB8cye{padding-left: 200px;}.RuayVd{padding-right: 20px;}.YzcKX{padding-right: 40px;}.reTV0b{padding-right: 60px;}.vSYeUc{padding-right: 80px;}.PxtZIe{padding-right: 100px;}.ahQMed{padding-right: 120px;}.rzhcXb{padding-right: 140px;}.PBhj0b{padding-right: 160px;}.TlN46c{padding-right: 180px;}.GEdNnc{padding-right: 200px;}.xkUom{border-color: rgba(19,172,189,1); color: rgba(19,172,189,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.xkUom:hover{background-color: rgba(19,172,189,0.1000000015);}.KjwKmc{color: rgba(19,172,189,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.KjwKmc:hover{background-color: rgba(19,172,189,0.1000000015);}.lQAHbd .xkUom{border-color: rgba(255,255,255,1); color: rgba(255,255,255,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.lQAHbd .xkUom:hover{background-color: rgba(255,255,255,0.1000000015);}.lQAHbd .KjwKmc{color: rgba(255,255,255,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.lQAHbd .KjwKmc:hover{background-color: rgba(255,255,255,0.1000000015);}@media only screen and (max-width: 479px){.lQAHbd .xkUom{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.lQAHbd .xkUom{font-size: 11pt;}}@media only screen and (max-width: 479px){.lQAHbd .KjwKmc{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.lQAHbd .KjwKmc{font-size: 11pt;}}.cJgDec .xkUom{border-color: rgba(255,255,255,1); color: rgba(255,255,255,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.cJgDec .xkUom:hover{background-color: rgba(255,255,255,0.1000000015);}.cJgDec .KjwKmc{color: rgba(255,255,255,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.cJgDec .KjwKmc:hover{background-color: rgba(255,255,255,0.1000000015);}@media only screen and (max-width: 479px){.cJgDec .xkUom{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.cJgDec .xkUom{font-size: 11pt;}}@media only screen and (max-width: 479px){.cJgDec .KjwKmc{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.cJgDec .KjwKmc{font-size: 11pt;}}.tpmmCb .xkUom{border-color: rgba(19,172,189,1); color: rgba(19,172,189,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.tpmmCb .xkUom:hover{background-color: rgba(19,172,189,0.1000000015);}.tpmmCb .KjwKmc{color: rgba(19,172,189,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.tpmmCb .KjwKmc:hover{background-color: rgba(19,172,189,0.1000000015);}@media only screen and (max-width: 479px){.tpmmCb .xkUom{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.tpmmCb .xkUom{font-size: 11pt;}}@media only screen and (max-width: 479px){.tpmmCb .KjwKmc{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.tpmmCb .KjwKmc{font-size: 11pt;}}.gk8rDe .xkUom{border-color: rgba(19,172,189,1); color: rgba(19,172,189,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.gk8rDe .xkUom:hover{background-color: rgba(19,172,189,0.1000000015);}.gk8rDe .KjwKmc{color: rgba(19,172,189,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.gk8rDe .KjwKmc:hover{background-color: rgba(19,172,189,0.1000000015);}@media only screen and (max-width: 479px){.gk8rDe .xkUom{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.gk8rDe .xkUom{font-size: 11pt;}}@media only screen and (max-width: 479px){.gk8rDe .KjwKmc{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.gk8rDe .KjwKmc{font-size: 11pt;}}.O13XJf .xkUom{border-color: rgba(255,255,255,1); color: rgba(255,255,255,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.O13XJf .xkUom:hover{background-color: rgba(255,255,255,0.1000000015);}.O13XJf .KjwKmc{color: rgba(255,255,255,1); font-family: Bitter; font-size: 11pt; line-height: normal;}.O13XJf .KjwKmc:hover{background-color: rgba(255,255,255,0.1000000015);}@media only screen and (max-width: 479px){.O13XJf .xkUom{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.O13XJf .xkUom{font-size: 11pt;}}@media only screen and (max-width: 479px){.O13XJf .KjwKmc{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.O13XJf .KjwKmc{font-size: 11pt;}}.Y4CpGd{font-family: Bitter; font-size: 11pt;}.CMArNe{background-color: rgba(240,240,240,1);}@media only screen and (max-width: 479px){.duRjpb{font-size: 24pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.duRjpb{font-size: 29pt;}}@media only screen and (max-width: 479px){.JYVBee{font-size: 17pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.JYVBee{font-size: 19pt;}}@media only screen and (max-width: 479px){.OmQG5e{font-size: 13pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.OmQG5e{font-size: 14pt;}}@media only screen and (max-width: 479px){.TMjjoe{font-size: 9pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.TMjjoe{font-size: 9pt;}}@media only screen and (max-width: 479px){.Zjiec{font-size: 16pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.Zjiec{font-size: 18pt;}}@media only screen and (max-width: 479px){.PsKE7e{font-size: 12pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.PsKE7e{font-size: 12pt;}}@media only screen and (max-width: 479px){.TlfmSc{font-size: 13pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.TlfmSc{font-size: 14pt;}}@media only screen and (max-width: 479px){.jgXgSe{font-size: 12pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.jgXgSe{font-size: 12pt;}}@media only screen and (max-width: 479px){.QmpIrf{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.QmpIrf{font-size: 11pt;}}@media only screen and (max-width: 479px){.xkUom{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.xkUom{font-size: 11pt;}}@media only screen and (max-width: 479px){.KjwKmc{font-size: 11pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.KjwKmc{font-size: 11pt;}}</style><script nonce="DNyFu3/SwOvKfZfjOE8hlw">_at_config = [null,"AIzaSyChg3MFqzdi1P5J-YvEyakkSA1yU7HRcDI","897606708560-a63d8ia0t9dhtpdt4i3djab2m42see7o.apps.googleusercontent.com",null,null,"v2",null,null,null,null,null,null,null,"https://content.googleapis.com","SITES_%s",null,null,null,null,null,null,null,null,null,["AHKXmL0NwwWCXUXzNRh2J_jOzHMuL9B3Le6_9ki6ita7jaQ5i_mCx9_S0UzsQV2lGHHmaM31jjF5",1,"CIys7vDtvfYCFYIEbwYdFzcG2g",1646994835347000,[5703839,5704621,5706832,5706836,5707711,5708870,5711808,5713207,5714550,5714628,5720060,5720925,5721344,5729664,5732942,5734571,5734954,5735806,5737337,5737441,5738509,5738529,5739802,5739897,5740814,5741775,5742462,5743124,5745622,5747267,5747741,5748029,5749679,5750552,5752694,5753006,5753329,5754229,5756315,5758193,5761523,14101306,14101502,14101510,14101530,14101534]],null,null,null,null,0,null,null,null,null,null,null,null,null,null,"https://drive.google.com",null,null,null,null,null,null,1,1,null,0,1,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,"v2internal","https://docs.google.com",null,null,null,null,null,null,"https://sites.google.com/new/",null,null,null,null,null,0,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,1,"",null,null,null,null,null,null,null,null,null,null,null,null,6,null,null,"https://accounts.google.com/o/oauth2/auth","https://accounts.google.com/o/oauth2/postmessageRelay",null,null,null,null,78,"https://sites.google.com/new/?usp\u003dviewer_footer",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,[],null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,"https://www.gstatic.com/atari/embeds/7925c5f8e01bacb9b4b0a3783ae0b867/intermediate-frame-minified.html",1,null,"v2beta",null,null,null,null,null,null,4,"https://accounts.google.com/o/oauth2/iframe",null,null,null,null,null,null,"https://485839023-atari-embeds.googleusercontent.com/embeds/16cb204cf3a9d4d223a0a3fd8b0eec5d/inner-frame-minified.html",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,null,null,null,null,null,0,null,"",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,null,null,null,null,null,null,null,null,null,null,null,null,1,null,1,null,null,[1646994835355,"atari_2022.09-Tue-0500_RC01","431717579",null,1,1,""],null,null,null,null,0,null,null,0,null,null,0,null,null,null,null,0,20,500,"https://domains.google.com",null,0,null,null,null,null,null,0,null,null,0,null,null,0,0,null,0,0,0,0,null,0,0,0,0]; window.globals = {"enableAnalytics":true,"webPropertyId":"G-3ST6PCL00C","showDebug":false,"hashedSiteId":"c6d331829ef1d0d64286cbd71771752a2f1506eef5f0a0a0bdde0b540d5d20de","normalizedPath":"view/flapone/home/about-us","pageTitle":"Blog Detail"}; function gapiLoaded() {if (globals.gapiLoaded == undefined) {globals.gapiLoaded = true;} else {globals.gapiLoaded();}}window.messages = []; window.addEventListener && window.addEventListener('message', function(e) {if (window.messages && e.data && e.data.magic == 'SHIC') {window.messages.push(e);}});</script><script src="https://apis.google.com/js/client.js?onload=gapiLoaded" nonce="DNyFu3/SwOvKfZfjOE8hlw"></script><script nonce="DNyFu3/SwOvKfZfjOE8hlw">(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
/*

 Copyright 2011 Google LLC.
 SPDX-License-Identifier: Apache-2.0
*/
/*

 Copyright 2013 Google LLC.
 SPDX-License-Identifier: Apache-2.0
*/
/*

 Copyright 2020 Google LLC.
 SPDX-License-Identifier: Apache-2.0
*/
var a=(this||self)._jsa||{};a._cfc=void 0;a._aeh=void 0;/*

 Copyright 2005 Google LLC.
 SPDX-License-Identifier: Apache-2.0
*/
}).call(this);
</script><script async src="https://www.googletagmanager.com/gtag/js?id=G-3ST6PCL00C" nonce="DNyFu3/SwOvKfZfjOE8hlw"></script><script nonce="DNyFu3/SwOvKfZfjOE8hlw">
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date()); gtag('set', 'developer_id.dZWRiYj', true); gtag('config', 'G-3ST6PCL00C');</script><script nonce="DNyFu3/SwOvKfZfjOE8hlw">const imageUrl =  null ;
      function bgImgLoaded() {
        if (!globals.headerBgImgLoaded) {
          globals.headerBgImgLoaded = new Date().getTime();
        } else {
          globals.headerBgImgLoaded();
        }
      }
      if (imageUrl) {
        const img = new Image();
        img.src = imageUrl;
        img.onload = bgImgLoaded;
        globals.headerBgImgExists = true;
      } else {
        globals.headerBgImgExists = false;
      }
      </script>
	  <style>
* {box-sizing: border-box;}
a{text-decoration:none;color:#212121;}

.leftcolumn {   
  float: left;
  width: 75%;
}

.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
	  </head><body dir="ltr" itemscope itemtype="http://schema.org/WebPage" id="yDmH0d" css="yDmH0d"><div jscontroller="pc62j" jsmodel="iTeaXe" jsaction="rcuQ6b:WYd;GvneHb:og1FDd;vbaUQc:uAM5ec;YBArc:dj7Cne;"><div jscontroller="X4BaPc" jsaction="rcuQ6b:WYd;o6xM5b:Pg9eo;HuL2Hd:mHeCvf;VMhF5:FFYy5e;sk3Qmb:HI1Mdd;JIbuQc:rSzFEd(z2EeY),aSaF6e(ilzYPe);"><div jsname="tiN4bf"><div class="M63kCb"></div><div class="fktJzd AKpWA fOU46b yMcSQd Ly6Unf G9Qloe XeSM4" jsname="UzWXSb" data-uses-custom-theme="false" jscontroller="Md9ENb" jsaction="gsiSmd:Ffcznf;yj5fUd:cpPetb;HNXL3:q0Vyke;rcuQ6b:WYd;"><div role="main" tabindex="-1" class="UtePc RCETm SwuGbc" dir="ltr"><section id="h.55cc264a39cfa4f0_9" class="yaqOZd" style=""><div class="IFuOkc"></div><div class="mYVXT"><div class="LS81yb VICjCf" tabindex="-1"><div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc yYI8W "><div class="JNdkSc-SmKAyb"><div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId"><div class="oKdM2c Kzv0Me"><div id="h.55cc264a39cfa4f0_12" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc GNzUNc"><div class="jXK9ad-SmKAyb"><div class="tyJCtd mGzaTb baZpAe"><div id="h.92z8m4u3qltm" class="CobnVe aP9Z7e"></div><h2 id="h.92z8m4u3qltm_l" dir="ltr" class="CDt4Ke zfr3Q JYVBee" style="text-align: center;" tabindex="-1"><div jscontroller="Ae65rd" jsaction="touchstart:UrsOsc; click:KjsqPd; focusout:QZoaZ; mouseover:y0pDld; mouseout:dq0hvd;fv1Rjc:jbFSOd;CrfLRd:SzACGe;" class="CjVfdc"><div class="PPhIP rviiZ" jsname="haAclf"><div role="presentation" class="U26fgb mUbCce fKz7Od LRAOtb Znu9nd M9Bg4d" jscontroller="mxS5xe" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow aria-describedby="h.92z8m4u3qltm_l" aria-label="Copy heading link" aria-disabled="false" data-tooltip="Copy heading link" aria-hidden="true" data-tooltip-position="top" data-tooltip-vertical-offset="12" data-tooltip-horizontal-offset="0"><a class="FKF6mc TpQm9d" href="#h.92z8m4u3qltm" aria-label="Copy heading link" jsname="hiK3ld" role="button" aria-describedby="h.92z8m4u3qltm_l"><div class="VTBa7b MbhUzd" jsname="ksKsZd"></div><span jsslot class="xjKiLb"><span class="Ce1Y1c" style="top: -11px"><svg class="OUGEr QdAdhf" width="22px" height="22px" viewBox="0 0 24 24" fill="currentColor" focusable="false"><path d="M0 0h24v24H0z" fill="none"/><path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/></svg></span></span></a></div></div><span style="color: #13abcd; font-family: &#39;Montserrat&#39;; text-decoration: underline;"><em><strong>Blog Detail</strong></em></span></div></h2></div></div></div></div>
	  <div class="oKdM2c">
	  
	  <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h5><i class="fa fa-calendar-o" style="color:#13abcd;"></i>&nbsp; <?php include "blogdetailtimestamp.php"?></h5>
      <div class="image" ><?php include "blogdetailimg.php" ?></div>
      <!-- <div class="fakeimg" style="height:200px;">Image</div> -->
      <h2><?php include "blogdetailtitle.php" ;?> </h2>
      <h3><?php include "shortdesc.php" ?></h3>
      <p><?php include "longdesc.php" ?></p>
      <h5><?php include "writtenby.php" ?></h5>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
	<a href="blog.html">
      <h2>Recent Post</h2>
      <img src="<?php while($row = mysqli_fetch_assoc($result)){echo $row['image'];} ?>"alt="the image uploaded is unable to load"  width="50%" height="100">
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </a>
	<a href="blog.html">
      <img src="<?php while($row = mysqli_fetch_assoc($result)){echo $row['image'];} ?>"alt="the image uploaded is unable to load"  width="50%" height="100">
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </a>
	</div>
  </div>
</div>
	  
</div>
	  
	  </div></div></div></div></div></section></div><div class="Xpil1b"></div><div jscontroller="j1RDQb" jsaction="focusin:gBxDVb(srlkmf); focusout:zvXhGb(srlkmf); click:ro2KTd(psdQ5e),Toy3n(V2zOu);JIbuQc:DSypkd(Bg3gkf);MxH79b:JdcaS;rcuQ6b:rcuQ6b;" class="LqzjUe ynRLnc"><div jsname="psdQ5e" class="Q0cSn"></div><div jsname="bN97Pc" class="hBW7Hb"><div role="button" class="U26fgb mUbCce fKz7Od kpPxtd QMuaBc M9Bg4d" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="Bg3gkf" aria-label="Site actions" aria-disabled="false" tabindex="-1" aria-hidden="true"><div class="VTBa7b MbhUzd" jsname="ksKsZd"></div><span jsslot class="xjKiLb"><span class="Ce1Y1c" style="top: -12px"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class=" NMm5M"><path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"/></svg></span></span></div><div jsname="srlkmf" class="hUphyc"><div class="YkaBSd"><div role="button" class="U26fgb kpPxtd J7BuEb" jsshadow jsname="V2zOu" aria-disabled="false" tabindex="0">Google Sites</div></div><div class="YkaBSd" jscontroller="HYv29e" jsaction="click:dQ6O0c;" data-abuse-proto="%.@.null,null,&quot;https://sites.google.com/view/flapone/home/about-us&quot;,null,null,[],[]]"><div role="button" class="U26fgb kpPxtd J7BuEb" jsshadow aria-label="Report abuse" aria-disabled="false" tabindex="0">Report abuse</div></div></div></div></div></div></div><script nonce="DNyFu3/SwOvKfZfjOE8hlw">DOCS_timing['cov']=new Date().getTime();</script><script src="https://www.gstatic.com/_/atari/_/js/k=atari.vw.en_US.YLChfP3MHKQ.O/d=1/rs=AGEqA5mAH4pyl_8xhc2iapCIcDksNyCWFA/m=view" id="base-js" nonce="DNyFu3/SwOvKfZfjOE8hlw"></script></div></div><div jscontroller="YV8yqd" jsaction="rcuQ6b:npT2md"><div id="docs-aria-speakable" aria-live="assertive" aria-relevant="additions" aria-atomic="true" aria-hidden="false" role="region" class="IWfHH"></div></div></body></html>