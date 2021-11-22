<?php require '../clconfig.php';?>
<!DOCTYPE HTML>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>CLPHP订单系统2017 WEB、WAP自适应版官方正式版 - 样式10</title>

<script type="text/javascript" src="js/cldq.js" charset="utf-8"></script>


<link href="css/clwebapstyle.css" rel="stylesheet" type="text/css">

<style type="text/css">

    /**
  **************************************************************************************************
  **********  CLPHP订单系统2017 WEB、WAP自适应版官方正式版  *****  官方正版 *** 版权所有 *** 盗版必究  **********
  **********------------------------------------------------------------------------------**********
  * 官方网站：http://www.chunleinet.com/ 官方店铺：http://jxlcl.taobao.com/  *  官方店铺旺旺:chunlei2615 请认准再购买 *
  **************************************************************************************************
*/

#clorder{width:100%;max-width:630px;background:#FFF;}

.clwarp{border:5px solid #FF5000;}

.cltitlea,.cltitleb{border-bottom:1px solid #FF5000;}

.clrxian{border-right:1px solid #FF5000;}

.clsubbox input{background:#FF5000;}

</style>
<link href="css/clrespond.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="clorder">

    <div class="clwarp">

            <form id="clform" name="clform" action="../clorder.php" method="post" onsubmit="return postcheck()" target="_parent">

                 <input type="hidden" value="" name="referer" id="referer">
                <input type="hidden" value="" name="url" id="url">
                <input type="hidden" value="" name="purl" id="purl">
<input type="hidden" name="bdproduct" value="喜喜喜喜喜喜 4盒 580元">
        <input type="hidden" name="bdnum" value="1">

        <input type="hidden" name="bdprice" value="580">

        <div class="cltitlea"></div>

        <div class="clbdbox">

            <label class="clbdxx"><em>*</em>选择产品</label>

            <div class="cldxbox red">

                        <input type="checkbox" name="box" id="bdproduct1" value="恭恭恭恭恭恭 2盒 385元" alt="385" onclick="pricec()"><label for="bdproduct1">恭恭恭恭恭恭 2盒 385元</label><br>

                        <input type="checkbox" checked name="box" id="bdproduct2" value="喜喜喜喜喜喜 4盒 580元" alt="580" onclick="pricec()"><label for="bdproduct2">喜喜喜喜喜喜 4盒 580元 <img src="images/hot.gif"></label><br>

                        <input type="checkbox" name="box" id="bdproduct3" value="发发发发发发 6盒 785元" alt="785" onclick="pricec()"><label for="bdproduct3">发发发发发发 6盒 785元</label><br>

                        <input type="checkbox" name="box" id="bdproduct4" value="财财财财财财 8盒 960元" alt="960" onclick="pricec()"><label for="bdproduct4">财财财财财财 8盒 960元</label><br>

                    </div>

                </div>
                
                
                <div class="clbdbox">
            <div class="cltext4box" align="center">
                您选择了<div id="showmun">1</div>个产品，总价：<div id="showprice">580</div>（元）
            </div>
        </div>

        <div class="clbdbox">

            <label class="clbdxx"><em>*</em>姓名</label>

            <div class="cltextbox">

                <input type="text" name="bdname" placeholder="请填写姓名">

            </div>

        </div>

        <div class="clbdbox">

            <label class="clbdxx"><em>*</em>手机号码</label>

            <div class="cltextbox">

                <input type="text" name="bdmob" placeholder="请填写手机号码">

            </div>

        </div>

        <div class="clbdbox">

            <label class="clbdxx"><em>*</em>所在地区</label>

            <div class="clxlbox">

                <select name="bdprovince" class="cldqxl"></select><select name="bdcity" class="cldqxl"></select><select name="bdarea" class="cldqxl"></select>

            </div>

        </div>

        <div class="clbdbox">

            <label class="clbdxx"><em>*</em>详细地址</label>

            <div class="cltextbox">

                <input type="text" name="bdaddress" placeholder="请填写详细地址">

            </div>

        </div>

         <div class="clbdbox">

            <label class="clbdxx"><em>*</em>付款方式</label>

            <div class="cldxbox">
<input type="radio" checked="checked" name="bdpay" id="b1" value="cod" onClick="opay();return changeItem(0);" /><label for="b1"><img src="images/fka.gif" /></label>
                        <input type="radio" name="bdpay" id="b2" value="alipay" onClick="opay2();return changeItem(1);" /><label for="b2"><img src="images/fkb.gif" style="max-width: 97px; min-width: 88px; width: 23%;" /></label><br>
                        <input type="radio" name="bdpay" id="b3" value="wx" onClick="opay2();return changeItem(2);" /><label for="b3"><img src="images/fkd.gif" /></label>
                        <input type="radio" name="bdpay" id="b4" value="bank" onClick="opay();return changeItem(3);" /><label for="b4"><img src="images/fkc.gif" /></label>
               

            </div>

        </div>
          <div class="clbdbox">
          <div id="paydiv0" class="clpayps">

                        <p><span class="green">温馨提示：</span>选择货到付款在家等快递公司送货上门，先验货后付款！</p>

                    </div>


                  <div id="paydiv1" class="clpayps" style="display:none;">
                  		
                        <p><span class="green">温馨提示：</span>全球领先的第三方支付平台，在线支付，安全可靠！</p>							

                    </div>                    

                                        <div id="paydiv2" class="clpayps" style="display:none;">					

                        <p><span class="green">温馨提示：</span>全球领先的第三方支付平台，在线支付，安全可靠！</p>							

                    </div>                    

                                        <div id="paydiv3" class="clpayps" style="display:none;">

                        <p><span class="green">温馨提示：</span>请拨打我们网站上的免费客服电话，索要银行汇款帐号。</p>

                </div>
</div>

        <div class="clbdbox">

            <label class="clbdxx">留言</label>

            <div class="cltext2box">

                <textarea name="bdother" placeholder="请填写留言或备注"></textarea>

            </div>

        </div>
          <?php if($clcodeon==1){?>	
               <div class="clbdbox">
                    <label class="clbdxx"><em>*</em>验证码</label>
                    <div class="cltext3box">
                        <input name="wfcode" type="text" class="bdcode" size="6" /><img id="wfcode" src="../public/wfcode.php?wfaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?wfaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><img src="images/wh.gif" /><a href='javascript:;' onclick="refreshCode()">换一个！</a>
                    </div>
                </div>			
                <?php }?>
                <?php if($clcodeon==2){?>	
<div class="clbdbox">
                    <label class="clbdxx"><em>*</em>验证码</label>
                    <div class="cltext3box">
                        <input name="wfcode" type="text" class="bdcode" size="6" /><img id="bdcode" src="../public/bdcode.php?bdaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?bdaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><a href='javascript:;' onclick="refreshCode1()">换一个！</a>
                    </div>
                </div>		
                <?php }?>

                <div class="clform-box btnbox">
              <input type="submit" name="bdsubmit" value="立即提交订单" class="clbtn btn-r">
            </div>

        </form>

        <div style="clear:both;"></div>

    </div>

</div>

<script type="text/javascript" src="js/clbd.js"></script>

</body>

</html>