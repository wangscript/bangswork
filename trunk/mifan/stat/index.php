<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="�ط�,����,����,twitter,΢����,Ӧ��,API" />
<meta name="description" content="�ط���һ�����������������ͷ�����Ϣ����վ������Ҫ�����ʺţ�ֻ��Ҫ��������˵�Ļ���������ͼ��ɡ�" />
<title>����ͳ��</title>
<link rel="shortcut icon" href="../img/favicon.ico" />
<link type="text/css" rel="stylesheet" href="../css/index.css" />
<link type="text/css" rel="stylesheet" href="../css/main.css" />
<script type="text/javascript" src="FusionCharts/FusionCharts.js"></script>
</head>

<body>
	<div id="container">
    	<div id="sideBar">
        	<h1><a href="../index.php"><img src="../img/logo.png" id="logo" title="�ط�" /></a></h1>
            <div id="introduce">
            	<p>�ط���һ�����������������ͷ�����Ϣ����վ������Ҫ�����ʺţ�ֻ��Ҫ��������˵�Ļ���������ͼ��ɡ�����ʲô���أ�һЩ��̫�ʺ����㷹���ʻ�˵�Ļ������ֺ���˵�ģ��Ϳ��������﷢��Ҳ����˵�����е����ܡ������ַ�ʽ���Է���������ܣ�</p>
            	<p>1.���ط���ҳ�Ϸ���,����ȫ������,IP��ַҲ���ᱻ��¼,���ͺ���Ҫͨ����֤���ܷ������ط��ϡ�</p>
            	<p>2.<a href="http://fanfou.com/privatemsg.create/mysecret">ͨ��������ط���˽��</a>,ͬ����Ҫ������֤,������ֻ�й���Ա���õ�,�������ط���������,���ұ�֤����͸¶������������</a></p>
            	<p>3.ͨ������ @�ط� ������Ϣ,��Щ��Ϣ����Ҫͨ����֤,��ֱ����ʾ�� <a href="../public.php">����������</a> ҳ����,��Ҫ�� <a href="http://fanfou.com/mysecret">���ط�Ϊ����</a></p>
            	<p>��ӭ��ע <a href="http://fanfou.com/mysecret">�ط�</a></p>
            </div>
        </div>
        <div id="main">
            <div id="nav">
            <span class="navNormal">�û��ֲ�ͳ��</span>
            <span class="navLink"><a href="followers.php">��ע������</a></span>
            <span class="navLink"><a href="statuses.php">��Ϣ����</a></span>
            <span class="navLink"><a href="province.php">��ʡ����</a></span>
            </div>
          <?php 
            require_once 'inc/config.php';
            require_once 'inc/User.php';
            require_once 'inc/FusionCharts.php';
            
            
            	
            echo "<div style='margin:20px 0 0 40px;'>��ʡ�����ֲ���</div>";
            $userdal = new UserDAL();
            $pArr = $userdal->provinceStat(20);
            $count = 1;
            $xml = "<chart caption='��ʡ�����ֲ�' xAxisName='' showValues='0' formatNumberScale='0' showBorder='0'>";
            
            foreach ($pArr as $key => $value) {
              $key = iconv("UTF-8","GB2312//TRANSLIT",$key);
              $xml .= "<set label='$key' value='$value' />";
              if ($count ++ ==25) break;
            }
            $xml .= "</chart>";
            echo renderChart("FusionCharts/Column3D.swf", "", $xml, "province", 500, 400, false, false);
            
            
            
            echo "<span style='margin:20px 0 0 40px;'>��ʡƽ��ÿ����Ϣ������</span>";
            $count = 1;
            $statusProvinceArr = $userdal->statusProvince();
            $xml = "<chart caption='��ʡƽ��ÿ����Ϣ����' yAxisName='����' showValues='0' formatNumberScale='0' showBorder='0'>";
            
            foreach ($statusProvinceArr as $key => $value) {
              $key = iconv("UTF-8","GB2312//TRANSLIT",$key);
              $xml .= "<set label='$key' value='$value' />";
              if ($count ++ ==20) break;
            }
            $xml .= "</chart>";
            echo renderChart("FusionCharts/Column3D.swf", "", $xml, "statusProvince", 500, 400, false, false);
            
            
            echo "<span style='margin:20px 0 0 40px;'>��Ϣ�����ֲ���</span>";
            $statusArr = $userdal->statusStat();
            $xml = "<chart caption='��Ϣ�����ֲ�' yAxisName='����' showValues='0' formatNumberScale='0' showBorder='0'>";
            
            foreach ($statusArr as $key => $value) {
              $key = iconv("UTF-8","GB2312//TRANSLIT",$key);
              $xml .= "<set label='$key' value='$value' />";
            }
            $xml .= "</chart>";
            echo renderChart("FusionCharts/Pie3D.swf", "", $xml, "status", 500, 400, false, false);
            
            
            
          ?>
    </div>
        <div id="bottom">
        </div>
    </div>
    <div id="footer">
    	<div id="footerMain">
        	<a href="http://fanfou.com/bang590" target="_blank"><img src="../img/power.png" /></a>
        </div>
    </div>
    
<script src='http://www.google-analytics.com/ga.js' type='text/javascript'></script>
</body>
</html>
