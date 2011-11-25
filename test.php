<?php
session_start();
if( isset($_SESSION['last_key']) )
	$isLogin="1";
else
	header('Location: index.php');


include_once( 'config.php' );
include_once( 'weibooauth.php' );


// 获取新浪微博账号信息

	$c = new WeiboClient( WB_AKEY , 
						  WB_SKEY , 
						  $_SESSION['last_key']['oauth_token'] , 
						  $_SESSION['last_key']['oauth_token_secret']  );

	$msg = $c->verify_credentials();

	if ($msg === false || $msg === null){
		echo "Error occured";
		return false;
	}
	if (isset($msg['error_code']) && isset($msg['error'])){
		echo ('Error_code: '.$msg['error_code'].';  Error: '.$msg['error'] );
		return false;
	}

	//if (isset($msg['name'])){
	//	echo($msg['name']);
	//}

	$SendToWeibo = new SaeTClient( WB_AKEY , WB_SKEY , $_SESSION['last_key']['oauth_token'] , $_SESSION['last_key']['oauth_token_secret']  );

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns=" http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>测试结果 - 测测你是哪个奥特曼</title>

	<style type="text/css">
		body {
			background:#436eb2 url(testbg.jpg) no-repeat fixed top;
		}
	</style>

</head>

<body>

<div id="container">

	<div id="header">

		<?php
					$Name_01			=	"初代奥特曼";
						$Pic_01			=	"/pics/01.jpg";
						$Weibo_01		=	"首位登场地球的宇宙英雄奥特曼，揭开奥特传奇序章的战士。";
						$Point_01		=	50;
						$Description_01	=	"";
					$Name_02			=	"杰克奥特曼";
						$Pic_02			=	"/pics/02.jpg";
						$Weibo_02		=	"第三位登场的归来的奥特曼，靠意念即可变身，格斗技巧灵活。";
						$Point_02		=	50;
						$Description_02	=	"";
					$Name_03			=	"佐菲奥特曼";
						$Pic_03			=	"/pics/03.jpg";
						$Weibo_03		=	"宇宙警备队队长，奥特曼兄弟中排行第一，胸前挂满荣耀的勋章。";
						$Point_03		=	72;
						$Description_03	=	"";
					$Name_04			=	"赛文奥特曼";
						$Pic_04			=	"/pics/04.jpg";
						$Weibo_04		=	"综合能力在奥特兄弟中最强，可操控胶囊怪兽，身体能微缩化。";
						$Point_04		=	70;
						$Description_04	=	"";
					$Name_05			=	"艾斯奥特曼";
						$Pic_05			=	"/pics/05.jpg";
						$Weibo_05		=	"奥特兄弟中的光线之王，通过合体变身。";
						$Point_05		=	55;
						$Description_05	=	"";
					$Name_06			=	"泰罗奥特曼";
						$Pic_06			=	"/pics/06.jpg";
						$Weibo_06		=	"奥特之父与奥特之母的独子，名副其实的奥特王子。";
						$Point_06		=	55;
						$Description_06	=	"";
					$Name_07			=	"爱迪奥特曼";
						$Pic_07			=	"/pics/07.jpg";
						$Weibo_07		=	"M78星云光之国宇宙警备队的年轻战士。";
						$Description_07	=	"";
						$Point_07		=	55;
					$Name_08			=	"雷欧奥特曼";
						$Pic_08			=	"/pics/08.jpg";
						$Weibo_08		=	"来自被毁灭的狮子座L77星云的王子，昭和系奥特曼中的格斗王。";
						$Point_08		=	55;
						$Description_08	=	"";
					$Name_09			=	"阿斯特拉";
						$Pic_09			=	"/pics/09.jpg";
						$Weibo_09		=	"雷欧奥特曼的弟弟，来自被毁灭的L77星云的王子。";
						$Point_09		=	45;
						$Description_09	=	"";
					$Name_10			=	"葛雷奥特曼";
						$Pic_10			=	"/pics/10.jpg";
						$Weibo_10		=	"来自M78星云光之国的战士，首位降临于日本本土之外的澳大利亚的奥特曼。";
						$Point_10		=	50;
						$Description_10	=	"";
					$Name_11			=	"帕瓦德奥特曼";
						$Pic_11			=	"/pics/11.jpg";
						$Weibo_11		=	"活跃于美国的奥特战士，最懂得运用战术的头脑型奥特曼之一。";
						$Point_11		=	50;
						$Description_11	=	"";
					$Name_12			=	"哉阿斯奥特曼";
						$Pic_12			=	"/pics/12.jpg";
						$Weibo_12		=	"最另类搞笑的奥特曼，他来自Z95星云光之国，有洁癖，靠刷牙变身。";
						$Point_12		=	35;
						$Description_12	=	"";
					$Name_13			=	"迪迦奥特曼";
						$Pic_13			=	"/pics/13.jpg";
						$Weibo_13		=	"光的化身，超古代的守护神。具有力量、敏捷和复合三种形态。";
						$Point_13		=	60;
						$Description_13	=	"";
					$Name_14			=	"戴拿奥特曼";
						$Pic_14			=	"/pics/14.jpg";
						$Weibo_14		=	"宇宙之光的奥特曼。具有闪亮、强壮和奇迹三种形态。";
						$Point_14		=	61;
						$Description_14	=	"";
					$Name_15			=	"盖亚奥特曼";
						$Pic_15			=	"/pics/15.jpg";
						$Point_15		=	62;
						$Weibo_15		=	"代表大地意志的强大奥特曼，经过V1、V2和至高形态的进化过程。";
						$Description_15	=	"";
					$Name_16			=	"阿古茹奥特曼";
						$Pic_16			=	"/pics/16.jpg";
						$Weibo_16		=	"代表海洋意志的强大奥特曼，经过V1、V2和至高形态的进化过程。";
						$Point_16		=	64;
						$Description_16	=	"";
					$Name_17			=	"奈欧斯奥特曼";
						$Pic_17			=	"/pics/17.jpg";
						$Weibo_17		=	"宇宙警备队的一员，隶属于宇宙保安厅，与赛文21奥特曼搭档作战。";
						$Point_17		=	53;
						$Description_17	=	"";
					$Name_18			=	"高斯奥特曼";
						$Pic_18			=	"/pics/18.jpg";
						$Weibo_18		=	"性格最温和的奥特曼，具有蓝色月神形态和红色日冕形态。";
						$Point_18		=	56;
						$Description_18	=	"";
					$Name_19			=	"杰斯提斯奥特曼";
						$Pic_19			=	"/pics/19.jpg";
						$Weibo_19		=	"作为正义审判者的女性奥特曼，曾在剧场版中试图毁灭地球以净化宇宙。";
						$Point_19		=	65;
						$Description_19	=	"";
					$Name_20			=	"奈克斯特奥特曼";
						$Pic_20			=	"/pics/20.jpg";
						$Weibo_20		=	"代号NEXT的神秘奥特曼，奈克瑟斯奥特曼的前身。";
						$Point_20		=	60;
						$Description_20	=	"";
					$Name_21			=	"奈克瑟斯奥特曼";
						$Pic_21			=	"/pics/21.jpg";
						$Point_21		=	65;
						$Weibo_21		=	"利用美塔领域作战的系列另类奥特曼，具有青年和成年形态，最终变身为诺亚奥特曼。";
						$Description_21	=	"";
					$Name_22			=	"诺亚奥特曼";
						$Pic_22			=	"/pics/22.jpg";
						$Weibo_22		=	"存在于传说中的奥特曼，拥有无限的力量并可穿梭时空。";
						$Point_22		=	80;
						$Description_22	=	"";
					$Name_23			=	"麦克斯奥特曼";
						$Pic_23			=	"/pics/23.jpg";
						$Weibo_23		=	"拥有MAX力量和MAX速度的超强力光之战士。";
						$Point_23		=	70;
						$Description_23	=	"";
					$Name_24			=	"杰诺奥特曼";
						$Pic_24			=	"/pics/24.jpg";
						$Weibo_24		=	"具有独特存在感，出场时间最短的神秘奥特曼，身体可微缩化。";
						$Point_24		=	66;
						$Description_24	=	"";
					$Name_25			=	"梦比优斯奥特曼";
						$Pic_25			=	"/pics/25.jpg";
						$Weibo_25		=	"被派遣到地球战斗的新的奥特战士，具有炎之勇者形态和无限凤凰形态。";
						$Point_25		=	66;
						$Description_25	=	"";
					$Name_26			=	"希卡利奥特曼";
						$Pic_26			=	"/pics/26.jpg";
						$Point_26		=	57;
						$Weibo_26		=	"因无力拯救阿柏星而穿上复仇铠甲的奥特科学家，后受感化成为正义的猎手骑士剑。";
						$Description_26	=	"";
					$Name_27			=	"雷杰多奥特曼";
						$Pic_27			=	"/pics/27.jpg";
						$Weibo_27		=	"代表大宇宙意志的传说中的奥特曼，曾由高斯和杰斯提斯合体短暂降临并拯救地球。";
						$Point_27		=	80;
						$Description_27	=	"";
					$Name_28			=	"赛罗奥特曼";
						$Pic_28			=	"/pics/28.jpg";
						$Weibo_28		=	"赛文之子，新宇宙警备队队长，成功解救了被贝利亚威胁的光之国，新世代最强大的奥特展示之一。";
						$Point_28		=	72;
						$Description_28	=	"";
					$Name_29			=	"博伊奥特曼";
						$Pic_29			=	"/pics/29.jpg";
						$Weibo_29		=	"爱迪奥特曼和尤里安奥特曼的儿子，很可爱，是奥特小学的学生，梦想是成为和父亲一样的奥特警备队队员。";
						$Point_29		=	20;
						$Description_29	=	"";
					$Name_30			=	"奥特之父";
						$Pic_30			=	"/pics/30.jpg";
						$Weibo_30		=	"银河和平的守护者、“宇宙警备队”的大队长。作为宇宙警备队的创始人，是经受了为全宇宙所传承地“奥特大战争”洗礼的勇士。";
						$Point_30		=	74;
						$Description_30	=	"";
					$Name_31			=	"奥特之母";
						$Pic_31			=	"/pics/31.jpg";
						$Weibo_31		=	"慈爱的M78星云银十字队队长，以治疗和复活为主要职责，泰罗奥特曼的母亲。";
						$Point_31		=	55;
						$Description_31	=	"";
					$Name_32			=	"奥特之王";
						$Pic_32			=	"/pics/32.jpg";
						$Weibo_32		=	"独自一人居住在国王星的神秘老人，ULTRA族传说中的超人，100万年的岁月见证了光之国诞生至今的所有历史。";
						$Point_32		=	76;
						$Description_32	=	"";
					$Name_33			=	"初代奥特曼";
						$Pic_33			=	"/pics/01.jpg";
						$Weibo_33		=	"首位登场地球的宇宙英雄奥特曼，揭开奥特传奇序章的战士。";
						$Point_33		=	50;
						$Description_33	=	"";
					$Name_34			=	"杰克奥特曼";
						$Pic_34			=	"/pics/02.jpg";
						$Weibo_34		=	"第三位登场的归来的奥特曼，靠意念即可变身，格斗技巧灵活。";
						$Point_34		=	50;
						$Description_34	=	"";
					$Name_35			=	"佐菲奥特曼";
						$Pic_35			=	"/pics/03.jpg";
						$Weibo_35		=	"宇宙警备队队长，奥特曼兄弟中排行第一，胸前挂满荣耀的勋章。";
						$Point_35		=	72;
						$Description_35	=	"";
					$Name_36			=	"赛文奥特曼";
						$Pic_36			=	"/pics/04.jpg";
						$Weibo_36		=	"综合能力在奥特兄弟中最强，可操控胶囊怪兽，身体能微缩化。";
						$Point_36		=	70;
						$Description_36	=	"";
					$Name_37			=	"艾斯奥特曼";
						$Pic_37			=	"/pics/05.jpg";
						$Weibo_37		=	"奥特兄弟中的光线之王，通过合体变身。";
						$Point_37		=	55;
						$Description_37	=	"";
					$Name_38			=	"泰罗奥特曼";
						$Pic_38			=	"/pics/06.jpg";
						$Weibo_38		=	"奥特之父与奥特之母的独子，名副其实的奥特王子。";
						$Point_38		=	55;
						$Description_38	=	"";
					$Name_39			=	"爱迪奥特曼";
						$Pic_39			=	"/pics/07.jpg";
						$Weibo_39		=	"M78星云光之国宇宙警备队的年轻战士。";
						$Description_39	=	"";
						$Point_39		=	55;
					$Name_40			=	"雷欧奥特曼";
						$Pic_40			=	"/pics/08.jpg";
						$Weibo_40		=	"来自被毁灭的狮子座L77星云的王子，昭和系奥特曼中的格斗王。";
						$Point_40		=	55;
						$Description_40	=	"";
					$Name_41			=	"阿斯特拉";
						$Pic_41			=	"/pics/09.jpg";
						$Weibo_41		=	"雷欧奥特曼的弟弟，来自被毁灭的L77星云的王子。";
						$Point_41		=	45;
						$Description_41	=	"";
					$Name_42			=	"葛雷奥特曼";
						$Pic_42			=	"/pics/10.jpg";
						$Weibo_42		=	"来自M78星云光之国的战士，首位降临于日本本土之外的澳大利亚的奥特曼。";
						$Point_42		=	50;
						$Description_42	=	"";
					$Name_43			=	"帕瓦德奥特曼";
						$Pic_43			=	"/pics/11.jpg";
						$Weibo_43		=	"活跃于美国的奥特战士，最懂得运用战术的头脑型奥特曼之一。";
						$Point_43		=	50;
						$Description_43	=	"";
					$Name_44			=	"哉阿斯奥特曼";
						$Pic_44			=	"/pics/12.jpg";
						$Weibo_44		=	"最另类搞笑的奥特曼，他来自Z95星云光之国，有洁癖，靠刷牙变身。";
						$Point_44		=	35;
						$Description_44	=	"";
					$Name_45			=	"迪迦奥特曼";
						$Pic_45			=	"/pics/13.jpg";
						$Weibo_45		=	"光的化身，超古代的守护神。具有力量、敏捷和复合三种形态。";
						$Point_45		=	60;
						$Description_45	=	"";
					$Name_46			=	"戴拿奥特曼";
						$Pic_46			=	"/pics/14.jpg";
						$Weibo_46		=	"宇宙之光的奥特曼。具有闪亮、强壮和奇迹三种形态。";
						$Point_46		=	61;
						$Description_46	=	"";
					$Name_47			=	"盖亚奥特曼";
						$Pic_47			=	"/pics/15.jpg";
						$Point_47		=	62;
						$Weibo_47		=	"代表大地意志的强大奥特曼，经过V1、V2和至高形态的进化过程。";
						$Description_47	=	"";
					$Name_48			=	"阿古茹奥特曼";
						$Pic_48			=	"/pics/16.jpg";
						$Weibo_48		=	"代表海洋意志的强大奥特曼，经过V1、V2和至高形态的进化过程。";
						$Point_48		=	64;
						$Description_48	=	"";
					$Name_49			=	"奈欧斯奥特曼";
						$Pic_49			=	"/pics/17.jpg";
						$Weibo_49		=	"宇宙警备队的一员，隶属于宇宙保安厅，与赛文21奥特曼搭档作战。";
						$Point_49		=	53;
						$Description_49	=	"";
					$Name_50			=	"高斯奥特曼";
						$Pic_50			=	"/pics/18.jpg";
						$Weibo_50		=	"性格最温和的奥特曼，具有蓝色月神形态和红色日冕形态。";
						$Point_50		=	56;
						$Description_50	=	"";
					$Name_51			=	"杰斯提斯奥特曼";
						$Pic_51			=	"/pics/19.jpg";
						$Weibo_51		=	"作为正义审判者的女性奥特曼，曾在剧场版中试图毁灭地球以净化宇宙。";
						$Point_51		=	65;
						$Description_51	=	"";
					$Name_52			=	"奈克斯特奥特曼";
						$Pic_52			=	"/pics/20.jpg";
						$Weibo_52		=	"代号NEXT的神秘奥特曼，奈克瑟斯奥特曼的前身。";
						$Point_52		=	60;
						$Description_52	=	"";
					$Name_53			=	"奈克瑟斯奥特曼";
						$Pic_53			=	"/pics/21.jpg";
						$Point_53		=	65;
						$Weibo_53		=	"利用美塔领域作战的系列另类奥特曼，具有青年和成年形态，最终变身为诺亚奥特曼。";
						$Description_53	=	"";
					$Name_54			=	"诺亚奥特曼";
						$Pic_54			=	"/pics/22.jpg";
						$Weibo_54		=	"存在于传说中的奥特曼，拥有无限的力量并可穿梭时空。";
						$Point_54		=	80;
						$Description_54	=	"";
					$Name_55			=	"麦克斯奥特曼";
						$Pic_55			=	"/pics/23.jpg";
						$Weibo_55		=	"拥有MAX力量和MAX速度的超强力光之战士。";
						$Point_55		=	70;
						$Description_55	=	"";
					$Name_56			=	"杰诺奥特曼";
						$Pic_56			=	"/pics/24.jpg";
						$Weibo_56		=	"具有独特存在感，出场时间最短的神秘奥特曼，身体可微缩化。";
						$Point_56		=	66;
						$Description_56	=	"";
					$Name_57			=	"梦比优斯奥特曼";
						$Pic_57			=	"/pics/25.jpg";
						$Weibo_57		=	"被派遣到地球战斗的新的奥特战士，具有炎之勇者形态和无限凤凰形态。";
						$Point_57		=	66;
						$Description_57	=	"";
					$Name_58			=	"希卡利奥特曼";
						$Pic_58			=	"/pics/26.jpg";
						$Point_58		=	57;
						$Weibo_58		=	"因无力拯救阿柏星而穿上复仇铠甲的奥特科学家，后受感化成为正义的猎手骑士剑。";
						$Description_58	=	"";
					$Name_59			=	"雷杰多奥特曼";
						$Pic_59			=	"/pics/27.jpg";
						$Weibo_59		=	"代表大宇宙意志的传说中的奥特曼，曾由高斯和杰斯提斯合体短暂降临并拯救地球。";
						$Point_59		=	80;
						$Description_59	=	"";
					$Name_60			=	"赛罗奥特曼";
						$Pic_60			=	"/pics/28.jpg";
						$Weibo_60		=	"赛文之子，新宇宙警备队队长，成功解救了被贝利亚威胁的光之国，新世代最强大的奥特展示之一。";
						$Point_60		=	72;
						$Description_60	=	"";
					$Name_61			=	"博伊奥特曼";
						$Pic_61			=	"/pics/29.jpg";
						$Weibo_61		=	"爱迪奥特曼和尤里安奥特曼的儿子，很可爱，是奥特小学的学生，梦想是成为和父亲一样的奥特警备队队员。";
						$Point_61		=	20;
						$Description_61	=	"";
					$Name_62			=	"奥特之父";
						$Pic_62			=	"/pics/30.jpg";
						$Weibo_62		=	"银河和平的守护者、“宇宙警备队”的大队长。作为宇宙警备队的创始人，是经受了为全宇宙所传承地“奥特大战争”洗礼的勇士。";
						$Point_62		=	74;
						$Description_62	=	"";
					$Name_63			=	"奥特之母";
						$Pic_63			=	"/pics/31.jpg";
						$Weibo_63		=	"慈爱的M78星云银十字队队长，以治疗和复活为主要职责，泰罗奥特曼的母亲。";
						$Point_63		=	55;
						$Description_63	=	"";
					$Name_64			=	"奥特之王";
						$Pic_64			=	"/pics/32.jpg";
						$Weibo_64		=	"独自一人居住在国王星的神秘老人，ULTRA族传说中的超人，100万年的岁月见证了光之国诞生至今的所有历史。";
						$Point_64		=	76;
						$Description_64	=	"";



			//获取用户昵称
			$sina_profile = $c->verify_credentials();
			$u_name = $sina_profile['name'];

			//测试输出
			//echo "Nick:";
			//echo $u_name;
			//echo "<br />";
			//echo "MD5:".md5($u_name);
			//echo "<br />";
			//echo "Cut:".substr(md5($u_name),0,2);
			//echo "<br />";

			//获取昵称MD5后前两位作为判断依据
			$StrName = substr(md5($u_name),0,2);

			//开始数字结果判断 （64种组合）

				if ($StrName == "00" || $StrName == "01" || $StrName == "02" || $StrName == "03")
					
					$Result = "01";

				elseif ($StrName == "04" || $StrName == "05" || $StrName == "06" || $StrName == "07")
				
					$Result = "02";

				elseif ($StrName == "08" || $StrName == "09" || $StrName == "0a" || $StrName == "0b")

					$Result = "03";

				elseif ($StrName == "0c" || $StrName == "0d" || $StrName == "0e" || $StrName == "0f")

					$Result = "04";

				elseif ($StrName == "10" || $StrName == "11" || $StrName == "12" || $StrName == "13")
					
					$Result = "05";

				elseif ($StrName == "14" || $StrName == "15" || $StrName == "16" || $StrName == "17")
				
					$Result = "06";

				elseif ($StrName == "18" || $StrName == "19" || $StrName == "1a" || $StrName == "1b")

					$Result = "07";

				elseif ($StrName == "1c" || $StrName == "1d" || $StrName == "1e" || $StrName == "1f")

					$Result = "08";

				elseif ($StrName == "20" || $StrName == "21" || $StrName == "22" || $StrName == "23")
					
					$Result = "09";

				elseif ($StrName == "24" || $StrName == "25" || $StrName == "26" || $StrName == "27")
				
					$Result = "10";

				elseif ($StrName == "28" || $StrName == "29" || $StrName == "2a" || $StrName == "2b")

					$Result = "11";

				elseif ($StrName == "2c" || $StrName == "2d" || $StrName == "2e" || $StrName == "2f")

					$Result = "12";

				elseif ($StrName == "30" || $StrName == "31" || $StrName == "32" || $StrName == "33")
					
					$Result = "13";

				elseif ($StrName == "34" || $StrName == "35" || $StrName == "36" || $StrName == "37")
				
					$Result = "14";

				elseif ($StrName == "38" || $StrName == "39" || $StrName == "3a" || $StrName == "3b")

					$Result = "15";

				elseif ($StrName == "3c" || $StrName == "3d" || $StrName == "3e" || $StrName == "3f")

					$Result = "16";

				elseif ($StrName == "40" || $StrName == "41" || $StrName == "42" || $StrName == "43")
					
					$Result = "17";

				elseif ($StrName == "44" || $StrName == "45" || $StrName == "46" || $StrName == "47")
				
					$Result = "18";

				elseif ($StrName == "48" || $StrName == "49" || $StrName == "4a" || $StrName == "4b")

					$Result = "19";

				elseif ($StrName == "4c" || $StrName == "4d" || $StrName == "4e" || $StrName == "4f")

					$Result = "20";

				elseif ($StrName == "50" || $StrName == "51" || $StrName == "52" || $StrName == "53")
					
					$Result = "21";

				elseif ($StrName == "54" || $StrName == "55" || $StrName == "56" || $StrName == "57")
				
					$Result = "22";

				elseif ($StrName == "58" || $StrName == "59" || $StrName == "5a" || $StrName == "5b")

					$Result = "23";

				elseif ($StrName == "5c" || $StrName == "5d" || $StrName == "5e" || $StrName == "5f")

					$Result = "24";

				elseif ($StrName == "60" || $StrName == "61" || $StrName == "62" || $StrName == "63")
					
					$Result = "25";

				elseif ($StrName == "64" || $StrName == "65" || $StrName == "66" || $StrName == "67")
				
					$Result = "26";

				elseif ($StrName == "68" || $StrName == "69" || $StrName == "6a" || $StrName == "6b")

					$Result = "27";

				elseif ($StrName == "6c" || $StrName == "6d" || $StrName == "6e" || $StrName == "6f")

					$Result = "28";

				elseif ($StrName == "70" || $StrName == "71" || $StrName == "72" || $StrName == "73")
					
					$Result = "29";

				elseif ($StrName == "74" || $StrName == "75" || $StrName == "76" || $StrName == "77")
				
					$Result = "30";

				elseif ($StrName == "78" || $StrName == "79" || $StrName == "7a" || $StrName == "7b")

					$Result = "31";

				elseif ($StrName == "7c" || $StrName == "7d" || $StrName == "7e" || $StrName == "7f")

					$Result = "32";

				elseif ($StrName == "80" || $StrName == "81" || $StrName == "82" || $StrName == "83")
					
					$Result = "33";

				elseif ($StrName == "84" || $StrName == "85" || $StrName == "86" || $StrName == "87")
				
					$Result = "34";

				elseif ($StrName == "88" || $StrName == "89" || $StrName == "8a" || $StrName == "8b")

					$Result = "35";

				elseif ($StrName == "8c" || $StrName == "8d" || $StrName == "8e" || $StrName == "8f")

					$Result = "36";

				elseif ($StrName == "90" || $StrName == "91" || $StrName == "92" || $StrName == "93")
					
					$Result = "37";

				elseif ($StrName == "94" || $StrName == "95" || $StrName == "96" || $StrName == "97")
				
					$Result = "38";

				elseif ($StrName == "98" || $StrName == "99" || $StrName == "9a" || $StrName == "9b")

					$Result = "39";

				elseif ($StrName == "9c" || $StrName == "9d" || $StrName == "9e" || $StrName == "9f")

					$Result = "40";

				elseif ($StrName == "a0" || $StrName == "a1" || $StrName == "a2" || $StrName == "a3")
					
					$Result = "41";

				elseif ($StrName == "a4" || $StrName == "a5" || $StrName == "a6" || $StrName == "a7")
				
					$Result = "42";

				elseif ($StrName == "a8" || $StrName == "a9" || $StrName == "aa" || $StrName == "ab")

					$Result = "43";

				elseif ($StrName == "ac" || $StrName == "ad" || $StrName == "ae" || $StrName == "af")

					$Result = "44";

				elseif ($StrName == "b0" || $StrName == "b1" || $StrName == "b2" || $StrName == "b3")
					
					$Result = "45";

				elseif ($StrName == "b4" || $StrName == "b5" || $StrName == "b6" || $StrName == "b7")
				
					$Result = "46";

				elseif ($StrName == "b8" || $StrName == "b9" || $StrName == "ba" || $StrName == "bb")

					$Result = "47";

				elseif ($StrName == "bc" || $StrName == "bd" || $StrName == "be" || $StrName == "bf")

					$Result = "48";

				elseif ($StrName == "c0" || $StrName == "c1" || $StrName == "c2" || $StrName == "c3")
					
					$Result = "49";

				elseif ($StrName == "c4" || $StrName == "c5" || $StrName == "c6" || $StrName == "c7")
				
					$Result = "50";

				elseif ($StrName == "c8" || $StrName == "c9" || $StrName == "ca" || $StrName == "cb")

					$Result = "51";

				elseif ($StrName == "cc" || $StrName == "cd" || $StrName == "ce" || $StrName == "cf")

					$Result = "52";

				elseif ($StrName == "d0" || $StrName == "d1" || $StrName == "d2" || $StrName == "d3")
					
					$Result = "53";

				elseif ($StrName == "d4" || $StrName == "d5" || $StrName == "d6" || $StrName == "d7")
				
					$Result = "54";

				elseif ($StrName == "d8" || $StrName == "d9" || $StrName == "da" || $StrName == "db")

					$Result = "55";

				elseif ($StrName == "dc" || $StrName == "dd" || $StrName == "de" || $StrName == "df")

					$Result = "56";

				elseif ($StrName == "e0" || $StrName == "e1" || $StrName == "e2" || $StrName == "e3")
					
					$Result = "57";

				elseif ($StrName == "e4" || $StrName == "e5" || $StrName == "e6" || $StrName == "e7")
				
					$Result = "58";

				elseif ($StrName == "e8" || $StrName == "e9" || $StrName == "ea" || $StrName == "eb")

					$Result = "59";

				elseif ($StrName == "ec" || $StrName == "ed" || $StrName == "ee" || $StrName == "ef")

					$Result = "60";

				elseif ($StrName == "f0" || $StrName == "f1" || $StrName == "f2" || $StrName == "f3")
					
					$Result = "61";

				elseif ($StrName == "f4" || $StrName == "f5" || $StrName == "f6" || $StrName == "f7")
				
					$Result = "62";

				elseif ($StrName == "f8" || $StrName == "f9" || $StrName == "fa" || $StrName == "fb")

					$Result = "63";

				elseif ($StrName == "fc" || $StrName == "fd" || $StrName == "fe" || $StrName == "ff")

					$Result = "64";

				else

					$Result = "00";//判断结束，如果没有则值为0



			//根据数字结果判断角色结果

			switch ($Result){

				case "01":

					$Name			=	$Name_01;
					$Pic			=	$Pic_01;
					$Weibo			=	$Weibo_01;
					$Point			=	$Point_01;
					break;

				case "02":

					$Name			=	$Name_02;
					$Pic			=	$Pic_02;
					$Weibo			=	$Weibo_02;
					$Point			=	$Point_02;
					break;

				case "03":

					$Name			=	$Name_03;
					$Pic			=	$Pic_03;
					$Weibo			=	$Weibo_03;
					$Point			=	$Point_03;
					break;

				case "04":

					$Name			=	$Name_04;
					$Pic			=	$Pic_04;
					$Weibo			=	$Weibo_04;
					$Point			=	$Point_04;
					break;

				case "05":

					$Name			=	$Name_05;
					$Pic			=	$Pic_05;
					$Weibo			=	$Weibo_05;
					$Point			=	$Point_05;
					break;

				case "06":

					$Name			=	$Name_06;
					$Pic			=	$Pic_06;
					$Weibo			=	$Weibo_06;
					$Point			=	$Point_06;
					break;

				case "07":

					$Name			=	$Name_07;
					$Pic			=	$Pic_07;
					$Weibo			=	$Weibo_07;
					$Point			=	$Point_07;
					break;

				case "08":

					$Name			=	$Name_08;
					$Pic			=	$Pic_08;
					$Weibo			=	$Weibo_08;
					$Point			=	$Point_08;
					break;

				case "09":

					$Name			=	$Name_09;
					$Pic			=	$Pic_09;
					$Weibo			=	$Weibo_09;
					$Point			=	$Point_09;
					break;

				case "10":

					$Name			=	$Name_10;
					$Pic			=	$Pic_10;
					$Weibo			=	$Weibo_10;
					$Point			=	$Point_10;
					break;

				case "11":

					$Name			=	$Name_11;
					$Pic			=	$Pic_11;
					$Weibo			=	$Weibo_11;
					$Point			=	$Point_11;
					break;

				case "12":

					$Name			=	$Name_12;
					$Pic			=	$Pic_12;
					$Weibo			=	$Weibo_12;
					$Point			=	$Point_12;
					break;

				case "13":

					$Name			=	$Name_13;
					$Pic			=	$Pic_13;
					$Weibo			=	$Weibo_13;
					$Point			=	$Point_13;
					break;

				case "14":

					$Name			=	$Name_14;
					$Pic			=	$Pic_14;
					$Weibo			=	$Weibo_14;
					$Point			=	$Point_14;
					break;

				case "15":

					$Name			=	$Name_15;
					$Pic			=	$Pic_15;
					$Weibo			=	$Weibo_15;
					$Point			=	$Point_15;
					break;

				case "16":

					$Name			=	$Name_16;
					$Pic			=	$Pic_16;
					$Weibo			=	$Weibo_16;
					$Point			=	$Point_16;
					break;

				case "17":

					$Name			=	$Name_17;
					$Pic			=	$Pic_17;
					$Weibo			=	$Weibo_17;
					$Point			=	$Point_17;
					break;

				case "18":

					$Name			=	$Name_18;
					$Pic			=	$Pic_18;
					$Weibo			=	$Weibo_18;
					$Point			=	$Point_18;
					break;

				case "19":

					$Name			=	$Name_19;
					$Pic			=	$Pic_19;
					$Weibo			=	$Weibo_19;
					$Point			=	$Point_19;
					break;

				case "20":

					$Name			=	$Name_20;
					$Pic			=	$Pic_20;
					$Weibo			=	$Weibo_20;
					$Point			=	$Point_20;
					break;

				case "21":

					$Name			=	$Name_21;
					$Pic			=	$Pic_21;
					$Weibo			=	$Weibo_21;
					$Point			=	$Point_21;
					break;

				case "22":

					$Name			=	$Name_22;
					$Pic			=	$Pic_22;
					$Weibo			=	$Weibo_22;
					$Point			=	$Point_22;
					break;

				case "23":

					$Name			=	$Name_23;
					$Pic			=	$Pic_23;
					$Weibo			=	$Weibo_23;
					$Point			=	$Point_23;
					break;

				case "24":

					$Name			=	$Name_24;
					$Pic			=	$Pic_24;
					$Weibo			=	$Weibo_24;
					$Point			=	$Point_24;
					break;

				case "25":

					$Name			=	$Name_25;
					$Pic			=	$Pic_25;
					$Weibo			=	$Weibo_25;
					$Point			=	$Point_25;
					break;

				case "26":

					$Name			=	$Name_26;
					$Pic			=	$Pic_26;
					$Weibo			=	$Weibo_26;
					$Point			=	$Point_26;
					break;

				case "27":

					$Name			=	$Name_27;
					$Pic			=	$Pic_27;
					$Weibo			=	$Weibo_27;
					$Point			=	$Point_27;
					break;

				case "28":

					$Name			=	$Name_28;
					$Pic			=	$Pic_28;
					$Weibo			=	$Weibo_28;
					$Point			=	$Point_28;
					break;

				case "29":

					$Name			=	$Name_29;
					$Pic			=	$Pic_29;
					$Weibo			=	$Weibo_29;
					$Point			=	$Point_29;
					break;

				case "30":

					$Name			=	$Name_30;
					$Pic			=	$Pic_30;
					$Weibo			=	$Weibo_30;
					$Point			=	$Point_30;
					break;

				case "31":

					$Name			=	$Name_31;
					$Pic			=	$Pic_31;
					$Weibo			=	$Weibo_31;
					$Point			=	$Point_31;
					break;

				case "32":

					$Name			=	$Name_32;
					$Pic			=	$Pic_32;
					$Weibo			=	$Weibo_32;
					$Point			=	$Point_32;
					break;

				case "33":

					$Name			=	$Name_33;
					$Pic			=	$Pic_33;
					$Weibo			=	$Weibo_33;
					$Point			=	$Point_33;
					break;

				case "34":

					$Name			=	$Name_34;
					$Pic			=	$Pic_34;
					$Weibo			=	$Weibo_34;
					$Point			=	$Point_34;
					break;

				case "35":

					$Name			=	$Name_35;
					$Pic			=	$Pic_35;
					$Weibo			=	$Weibo_35;
					$Point			=	$Point_35;
					break;

				case "36":

					$Name			=	$Name_36;
					$Pic			=	$Pic_36;
					$Weibo			=	$Weibo_36;
					$Point			=	$Point_36;
					break;

				case "37":

					$Name			=	$Name_37;
					$Pic			=	$Pic_37;
					$Weibo			=	$Weibo_37;
					$Point			=	$Point_37;
					break;

				case "38":

					$Name			=	$Name_38;
					$Pic			=	$Pic_38;
					$Weibo			=	$Weibo_38;
					$Point			=	$Point_38;
					break;

				case "39":

					$Name			=	$Name_39;
					$Pic			=	$Pic_39;
					$Weibo			=	$Weibo_39;
					$Point			=	$Point_39;
					break;


				case "40":

					$Name			=	$Name_40;
					$Pic			=	$Pic_40;
					$Weibo			=	$Weibo_40;
					$Point			=	$Point_40;
					break;

				case "41":

					$Name			=	$Name_42;
					$Pic			=	$Pic_42;
					$Weibo			=	$Weibo_42;
					$Point			=	$Point_42;
					break;

				case "43":

					$Name			=	$Name_43;
					$Pic			=	$Pic_43;
					$Weibo			=	$Weibo_43;
					$Point			=	$Point_43;
					break;

				case "44":

					$Name			=	$Name_44;
					$Pic			=	$Pic_44;
					$Weibo			=	$Weibo_44;
					$Point			=	$Point_44;
					break;

				case "45":

					$Name			=	$Name_45;
					$Pic			=	$Pic_45;
					$Weibo			=	$Weibo_45;
					$Point			=	$Point_45;
					break;

				case "46":

					$Name			=	$Name_46;
					$Pic			=	$Pic_46;
					$Weibo			=	$Weibo_46;
					$Point			=	$Point_46;
					break;

				case "47":

					$Name			=	$Name_47;
					$Pic			=	$Pic_47;
					$Weibo			=	$Weibo_47;
					$Point			=	$Point_47;
					break;

				case "48":

					$Name			=	$Name_48;
					$Pic			=	$Pic_48;
					$Weibo			=	$Weibo_48;
					$Point			=	$Point_48;
					break;

				case "49":

					$Name			=	$Name_49;
					$Pic			=	$Pic_49;
					$Weibo			=	$Weibo_49;
					$Point			=	$Point_49;
					break;

				case "50":

					$Name			=	$Name_50;
					$Pic			=	$Pic_50;
					$Weibo			=	$Weibo_50;
					$Point			=	$Point_50;
					break;

				case "51":

					$Name			=	$Name_51;
					$Pic			=	$Pic_51;
					$Weibo			=	$Weibo_51;
					$Point			=	$Point_51;
					break;

				case "52":

					$Name			=	$Name_52;
					$Pic			=	$Pic_52;
					$Weibo			=	$Weibo_52;
					$Point			=	$Point_52;
					break;

				case "53":

					$Name			=	$Name_53;
					$Pic			=	$Pic_53;
					$Weibo			=	$Weibo_53;
					$Point			=	$Point_53;
					break;

				case "54":

					$Name			=	$Name_54;
					$Pic			=	$Pic_54;
					$Weibo			=	$Weibo_54;
					$Point			=	$Point_54;
					break;

				case "55":

					$Name			=	$Name_55;
					$Pic			=	$Pic_55;
					$Weibo			=	$Weibo_55;
					$Point			=	$Point_55;
					break;

				case "56":

					$Name			=	$Name_56;
					$Pic			=	$Pic_56;
					$Weibo			=	$Weibo_56;
					$Point			=	$Point_56;
					break;

				case "57":

					$Name			=	$Name_57;
					$Pic			=	$Pic_57;
					$Weibo			=	$Weibo_57;
					$Point			=	$Point_57;
					break;

				case "58":

					$Name			=	$Name_58;
					$Pic			=	$Pic_58;
					$Weibo			=	$Weibo_58;
					$Point			=	$Point_58;
					break;

				case "59":

					$Name			=	$Name_59;
					$Pic			=	$Pic_59;
					$Weibo			=	$Weibo_59;
					$Point			=	$Point_59;
					break;

				case "60":

					$Name			=	$Name_60;
					$Pic			=	$Pic_60;
					$Weibo			=	$Weibo_60;
					$Point			=	$Point_60;
					break;

				case "61":

					$Name			=	$Name_61;
					$Pic			=	$Pic_61;
					$Weibo			=	$Weibo_61;
					$Point			=	$Point_61;
					break;

				case "62":

					$Name			=	$Name_62;
					$Pic			=	$Pic_62;
					$Weibo			=	$Weibo_62;
					$Point			=	$Point_62;
					break;

				case "63":

					$Name			=	$Name_63;
					$Pic			=	$Pic_63;
					$Weibo			=	$Weibo_63;
					$Point			=	$Point_63;
					break;

				case "64":

					$Name			=	$Name_64;
					$Pic			=	$Pic_64;
					$Weibo			=	$Weibo_64;
					$Point			=	$Point_64;
					break;

			}


				//生成随机三围数字（战斗力、敏捷度、耐久力）

				$RandomPoint1	=	rand(0,30);
				$Point1			=	$Point + $RandomPoint1;
				$RandomPoint2	=	rand(0,25);
				$Point2			=	$Point + $RandomPoint2;
				$RandomPoint3	=	rand(0,20);
				$Point3			=	$Point + $RandomPoint3;

				$ResultText	=	"原来 @".$u_name." 就是".$Name."的人间体！".$Weibo."【战斗力】？？ 【敏捷度】？？ 【耐久力】？？（发布微博后可见）。来测试一下你的奥特身份吧：http://ultramantest.sinaapp.com";
				
				$WeiboText	=	"原来 @".$u_name." 就是".$Name."的人间体！".$Weibo."【战斗力】".$Point1." 【敏捷度】".$Point2." 【耐久力】".$Point3."。来看看你的奥特身份吧：http://ultramantest.sinaapp.com";				


?>


		<div align="center">
			<form action="postweibo.php" >
				<div>
					<br/>
					<img src="<?php echo $Pic ?>" />
					<br/><br/>
					<textarea rows="5" cols="68" name="text"><?php echo $ResultText ?></textarea>
					<input type="hidden" name="sourceurl" value="<?php echo AppPath.$_SERVER["REQUEST_URI"] ?>"/>
				</div>
					<br/>
				<div>
					<a href="postweibo.php?text=<?php echo $WeiboText ?>&pic=<?php echo $Pic ?>"><img src="sinabt.gif" /></a>
					<br />
				</div>
				</form>
		</div>



	</div>

</div>


</body>
</html>