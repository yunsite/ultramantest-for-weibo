【UltramanTest for Weibo（测测你是哪个奥特曼）】

基于新浪微博开放平台的趣味测试组件，用PHP写成，本例为演示DEMO。

架设在SinaAppEngine（SAE，新浪应用引擎）上，同时接入微博开放平台以调用用户授权和发布微博API。


安装方法：

1、配置config.php中的AKey和Skey的数值（在新浪微博开放平台创建应用取得）。
2、将全部文件通过SVN方式提交到SAE项目中。
3、直接在Web端执行 yourapp.sinaapp.com 即可看到效果。


文件说明：

-config.yaml     SAE所需应用配置文件
-config.php      配置文件，主要用于配置AKey和SKey（需修改相应参数）
-weibooauth.php  包含OAuth模块的SDK
-callback.php    回调文件，用于授权后的回调
-index.php       首页
-ready           获取用户授权后的页面
-test.php        显示测试结果页面
-postweibo.php   发布一条微博（比较懒，直接用URL传参数了）
-suc             发布微博成功提示
-pics/           显示测试结果所需的角色图片（32张奥特曼图）

by @XDash  http://www.fanbing.net 2011.11.24
