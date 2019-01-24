<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_topic`;");
E_C("CREATE TABLE `ty_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topic_title` varchar(100) DEFAULT NULL COMMENT '专题标题',
  `topic_image` varchar(100) DEFAULT NULL COMMENT '专题封面',
  `topic_background_color` varchar(20) DEFAULT NULL COMMENT '专题背景颜色',
  `topic_background` varchar(100) DEFAULT NULL COMMENT '专题背景图',
  `topic_content` text COMMENT '专题详情',
  `topic_repeat` varchar(20) DEFAULT '背景重复方式',
  `topic_state` tinyint(1) DEFAULT '1' COMMENT '专题状态1-草稿、2-已发布',
  `topic_margin_top` tinyint(3) DEFAULT '0' COMMENT '正文距顶部距离',
  `ctime` int(11) DEFAULT NULL COMMENT '专题创建时间',
  PRIMARY KEY (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ty_topic` values('1','小米5手机专题','/Public/upload/topic/2016/02-20/56c814f3ae981.jpg','#000000','/Public/upload/topic/2016/02-20/56c8150dd970b.png','<!doctype html>\r\n<html lang=\"zh-CN\" xml:lang=\"zh-CN\">\r\n<head>\r\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\" />\r\n<meta charset=\"UTF-8\" />\r\n<title>小米手机 5 概述 － 小米手机官网</title>\r\n<meta name=\"viewport\" content=\"width=1226\" />\r\n<link rel=\"shortcut icon\" href=\"http://s01.mifile.cn/favicon.ico\" type=\"image/x-icon\" />\r\n<link rel=\"icon\" href=\"http://s01.mifile.cn/favicon.ico\" type=\"image/x-icon\" />\r\n<link rel=\"stylesheet\" href=\"http://s01.mifile.cn/css/base.min.css?v2016a\" />\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"http://s01.mifile.cn/css/product/mi5/index.min.css?749bd4\" />\r\n<script type=\"text/javascript\">var _head_over_time = (new Date()).getTime();</script>\r\n<meta name=\"__hash__\" content=\"c7d0845ebe9c999f29296d05c0748516_42a9f1e763b3b7ef795761be2c71a65c\" /></head>\r\n<body>\r\n<div class=\"xm-product-box\">\r\n    <div class=\"hd nav-bar_xg J_headNav\">\r\n\r\n    </div>\r\n\r\n\r\n    <div id=\"overall\" class=\"mi5-overall \">\r\n        <div class=\"J_miOneScroller\">\r\n            <div class=\"section section-start\" data-title=\"综述\" data-shrik=''0''>           \r\n                <div class=\"side-text\">\r\n                    <h2 class=\"title font\">小米手机5<br>十余项黑科技，很轻狠快</h2>\r\n                    <p class=\"content\">骁龙820处理器 / 最大可选4GB内存、128GB闪存<br>4轴防抖相机 / 3D陶瓷机身 / 3D玻璃机身</p>\r\n                    <p class=\"price\">\r\n                        1999 <span>元起</span>\r\n                    </p>\r\n                    <p class=''link'' style=''font-family:\"Helvetica Neue\",Helvetica,Arial,\"Microsoft Yahei\",\"Hiragino Sans GB\",\"Heiti SC\",\"WenQuanYi Micro Hei\",sans-serif''>\r\n                        <span class=''play-logo''>\r\n                            <i class=\"iconfont\"></i>\r\n                        </span>\r\n                        <a href=\"javascript:void(0);\" class=''J_videoBtn'' data-video=''XMTQ4MDU2MTkzMg''  data-video-title=''小米手机5 外观视频''>外观视频</a> \r\n                        \r\n                        <span class=''play-logo''>\r\n                            <i class=\"iconfont\"></i>\r\n                        </span>  \r\n                        <a href=\"javascript:void(0);\" class=''J_videoBtn'' data-video=''XMTQ4MDU2MTU5Ng==''  data-video-title=''4 轴防抖视频'' >4 轴防抖视频</a> \r\n                        \r\n                    </p>\r\n                </div>  \r\n                <img class=\"shrik J_shrik\" data-src=\"http://c1.mifile.cn/f/i/16/mi5/index/h-12.jpg\" alt=\"\">\r\n            </div>\r\n            <div class=\"section section-grade\" data-title=''性能'' data-shrik=''1''>\r\n                <div class=\"side-text side-text-a common-section center\">\r\n                    <h2 class=\"title\">14 万分，快得有点狠</h2>\r\n                    <p class=\"content\">\r\n                        CPU 性能翻倍的骁龙 820 处理器，提速 87% 的 UFS 闪存，快 40% 的 Adreno 530 图形引擎，<br>快 100% 的双通道 LPDDR4，Antutu 跑分性能测试高达惊人的 14 万分。\r\n                    </p>\r\n                    <a class=\"href-link\" href=''/mi5/features/'' target=''_blank''> 了解性能 ></a>\r\n                </div>\r\n                <ul class=\"side-text side-text-b\">\r\n                    <li>\r\n                        <h2 class=\"side-title\">\r\n                            骁龙820\r\n                        </h2>\r\n                        <p class=\"side-cont\">旗舰处理器</p>\r\n                    </li>\r\n                    <li class=''mid''>\r\n                        <h2 class=\"side-title\">\r\n                            4GB\r\n                        </h2>\r\n                        <p class=\"side-cont\">可选最大内存</p>\r\n                    </li>\r\n                    <li>\r\n                        <h2 class=\"side-title\">\r\n                            128GB\r\n                        </h2>\r\n                        <p class=\"side-cont\">可选最大闪存</p>\r\n                    </li>\r\n                </ul>\r\n                <img class=\"shrik J_shrik\" data-src=\"http://c1.mifile.cn/f/i/16/mi5/index/h-8.jpg\" alt=\"\">\r\n            </div>\r\n            <div class=\"section section-feel\" data-title=''设计''  data-shrik=''2''>\r\n                <div class=\"side-text common-section center\">\r\n                    <h2 class=\"title\">129克，手感轻得不真实</h2>\r\n                    <p class=\"descText\">5.15\" 大屏幕，整机仅 129 克。<br>还有 3D 纤细侧腰，曲面玻璃的温润手感。握在手中的一刻，仿佛轻轻握住整个世界的倒影。</p>\r\n                    <a class=\"href-link\" href=''/mi5/design/'' target=''_blank''>了解设计></a>\r\n                </div>\r\n                <img class=\"shrik J_shrik\" data-src=\"http://c1.mifile.cn/f/i/16/mi5/index/h-13.jpg\" alt=\"\">\r\n            </div>            \r\n            <div class=\"section section-camera\" data-title=''相机''  data-shrik=''3''>\r\n                <div class=\"side-text common-section center\">\r\n                    <h2 class=\"title\">4 轴防抖相机，感动、激动、不抖动</h2>\r\n                    <p class=\"descText\">采用源自专业相机的 4 轴光学防抖技术，比一般手机 2 轴防抖效果更佳，<br>阳光、暗光、运动、单手，都能稳定记录，清晰成像。</p>\r\n                    <a class=\"href-link\" href=''/mi5/camera/'' target=''_blank''>了解相机></a>\r\n                </div>\r\n                <img class=\"shrik J_shrik\" data-src=\"http://c1.mifile.cn/f/i/16/mi5/index/h-14.jpg\" alt=\"\">\r\n                <ul class=\"pic-block J_picGlass\">\r\n                    <li class=\"pic-a\">\r\n                        <div class=\"circle\">\r\n                            <div class=\"sml-circle\"></div>\r\n                        </div>\r\n                        <div class=\"border-line\"></div>\r\n                        <div class=\"circle-text\">\r\n                            蓝宝石<br>镜头保护玻璃\r\n                        </div>\r\n                    </li>\r\n                    <li class=\"pic-b\">\r\n                        <div class=\"circle\">\r\n                            <div class=\"sml-circle\"></div>\r\n                        </div>\r\n                        <div class=\"border-line\"></div>\r\n                        <div class=\"circle-text\">\r\n                            6P镜片组\r\n                        </div>\r\n                    </li>\r\n                    <li class=\"pic-c\">\r\n                        <div class=\"circle\">\r\n                            <div class=\"sml-circle\"></div>\r\n                        </div>\r\n                        <div class=\"border-line\"></div>\r\n                        <div class=\"circle-text\">\r\n                            4轴光学防抖\r\n                        </div>\r\n                    </li>\r\n                    <li class=\"pic-d\">\r\n                        <div class=\"circle\">\r\n                            <div class=\"sml-circle\"></div>\r\n                        </div>\r\n                        <div class=\"border-line\"></div>\r\n                        <div class=\"circle-text\">\r\n                            索尼新一代<br>16MP感光元件\r\n                        </div>\r\n                    </li>\r\n                    <li class=\"pic-e\">\r\n                        <div class=\"circle\">\r\n                            <div class=\"sml-circle\"></div>\r\n                        </div>\r\n                        <div class=\"border-line\"></div>\r\n                        <div class=\"circle-text\">\r\n                            DTI<br>深槽隔离技术\r\n                        </div>\r\n                    </li>\r\n                    <li class=\"pic-f\">\r\n                        <div class=\"circle\">\r\n                            <div class=\"sml-circle\"></div>\r\n                        </div>\r\n                        <div class=\"border-line\"></div>\r\n                        <div class=\"circle-text\">\r\n                            暗光增强<br>夜景防抖\r\n                        </div>\r\n                    </li>\r\n                </ul>\r\n            </div>\r\n            <div class=\"section section-highlight\" data-title=''屏幕''  data-shrik=''4''>\r\n                <div class=\"side-text common-section\">\r\n                    <h2 class=\"title\">16颗灯省电高亮屏幕<br>鲜艳通透</h2>\r\n                    <p class=\"descText\">屏幕深度定制，在仅有 5.15\" 屏幕上精密排布 16 颗 LED 灯珠，亮度提升 30%，色彩依旧鲜艳。灯光下看起来更通透，阳光下看得更清晰，这才是好屏幕应有的亮度。</p>\r\n                    <a class=\"href-link\" href=''/mi5/screen'' target=''_blank''>了解屏幕></a>\r\n                </div>\r\n                <img class=\"shrik J_shrik\" data-src=\"http://c1.mifile.cn/f/i/16/mi5/index/h-24.jpg\" alt=\"\">\r\n            </div>\r\n            \r\n            <div class=\"section section-miui\" data-title=''操作系统''   data-shrik=''5''>\r\n                <div class=\"side-text common-section center\">\r\n                    <h2 class=\"title\">MIUI 7 再升级，1.7亿 用户的新惊喜</h2>\r\n                    <p class=\"descText\">好看、好用的 MIUI 系统，在小米5 上有了新惊喜。离线一键换机、<br>手机远程锁定防丢失，还有美颜视频电话等有趣的新玩法。</p>\r\n                    <p class=\"href-link\">\r\n                        <span class=''play-logo''>\r\n                            <i class=\"iconfont\"></i>\r\n                        </span>\r\n                        <a href=\"javascript:void(0);\" class=''J_videoBtn'' data-video=''XMTQ4MDYzMjkyOA''  data-video-title=''一键换机演示''>一键换机演示</a> \r\n                        \r\n                        <a class=\"link-url\"  href=''/mi5/features#miui'' target=''_blank''>了解操作系统> </a>\r\n                    </p>\r\n                </div>\r\n                <img class=\"shrik J_shrik\" data-src=\"http://c1.mifile.cn/f/i/16/mi5/index/h-21.jpg\" alt=\"\">\r\n            </div>\r\n            \r\n            <div class=\"section section-version \" data-title=''版本选择''  data-shrik=''5''>\r\n                <div class=\"side-text common-section\">\r\n                    <h2 class=\"title\">\r\n                        哪一款是你的最爱？\r\n                    </h2>\r\n                    <h3 class=\"sub-title\">\r\n                    <!--    对比机型-->\r\n                    </h3>\r\n                </div>\r\n                <ul class=\"version-list\">\r\n                    <li class=''left show-a''>\r\n                        <div class=\"v-img-list\">\r\n                            <div class=\"img-a\"></div>\r\n                            <div class=\"img-b\"></div>\r\n                            <div class=\"img-c\"></div>\r\n                        </div>\r\n                        <div class=\"v-col-circle\">\r\n                            \r\n                            <div class=\"circle-c J_circle\" data-cls=''show-a''>\r\n                                <i></i>\r\n                            </div>\r\n                            <div class=\"circle-a J_circle\"  data-cls=''show-b''>\r\n                                <i></i>\r\n                            </div>\r\n                            <div class=\"circle-b J_circle\"  data-cls=''show-c''>\r\n                                <i></i>\r\n                            </div>\r\n                        </div>\r\n                        <h2 class=\"v-title\">\r\n                            标准版<span> |</span> 1999元 \r\n                        </h2>\r\n                        <p class=\"v-content\">\r\n                            骁龙820 最高主频 1.8GHz<br>3GB LPDDR4 + 32GB UFS 闪存、3D曲面玻璃机身\r\n                        </p>\r\n                    </li>\r\n                    <li class=''mid show-b''>\r\n                        <div class=\"v-img-list\">\r\n                            <div class=\"img-a\"></div>\r\n                            <div class=\"img-b\"></div>\r\n                            <div class=\"img-c\"></div>\r\n                        </div>\r\n                        <div class=\"v-col-circle\">\r\n                            <div class=\"circle-c J_circle\" data-cls=''show-a''>\r\n                                <i></i>\r\n                            </div>\r\n                            <div class=\"circle-a J_circle\"  data-cls=''show-b''>\r\n                                <i></i>\r\n                            </div>\r\n                            <div class=\"circle-b J_circle\"  data-cls=''show-c''>\r\n                                <i></i>\r\n                            </div>\r\n                        </div>\r\n                        <h2 class=\"v-title\">\r\n                            高配版 <span> |</span> 2299元 \r\n                        </h2>\r\n                        <p class=\"v-content\">\r\n                            骁龙820 最高主频 2.15GHz<br>3GB LPDDR4 + 64GB UFS 闪存、3D曲面玻璃机身\r\n                        </p>\r\n                    </li> \r\n                    <li  class=''right show-c''>\r\n                        <div class=\"v-img-list\">\r\n                            <div class=\"img-a\"></div>\r\n                            <div class=\"img-b\"></div>\r\n                            <div class=\"img-c\"></div>\r\n                        </div>\r\n                        <div class=\"v-col-circle\">\r\n                            <div class=\"circle-b\">\r\n                                <i></i>\r\n                            </div>\r\n                        </div>\r\n                        <h2 class=\"v-title\">\r\n                            尊享版 <span> |</span> 2699元 \r\n                        </h2>\r\n                        <p class=\"v-content\">\r\n                            骁龙820 最高主频 2.15GHz<br>4GB LPDDR4 + 128GB UFS 闪存、3D陶瓷机身\r\n                        </p>\r\n                    </li> \r\n                </ul>\r\n            </div> \r\n        </div>\r\n    </div>\r\n    \r\n</div>\r\n\r\n\r\n\r\n\r\n</div>\r\n<div id=\"J_modalVideo\" class=\"modal modal-video fade modal-hide\">\r\n    <div class=\"modal-hd\">\r\n        <h3 class=\"title\">视频播放</h3>\r\n        <a class=\"close\" data-dismiss=\"modal\" href=\"javascript: void(0);\"><i class=\"iconfont\"></i></a>\r\n    </div>\r\n    <div class=\"modal-bd\">\r\n        <div class=\"loading\"><div class=\"loader\"></div></div>\r\n    </div>\r\n</div>\r\n\r\n\r\n<div id=\"J_modalWeixin\" class=\"modal fade modal-hide modal-weixin\" data-width=\"480\" data-height=\"520\">\r\n        <div class=\"modal-hd\">\r\n            <a class=\"close\" data-dismiss=\"modal\"><i class=\"iconfont\"></i></a>\r\n            <h3>小米手机官方微信二维码</h3>\r\n        </div>\r\n        <div class=\"modal-bd\">\r\n            <p style=\"margin: 0 0 10px;\">打开微信，点击右上角的“+”，选择“扫一扫”功能，<br/>对准下方二维码即可。</p>\r\n            <img alt=\"\" src=\"http://c1.mifile.cn/f/i/2014/cn/qr.png\" width=\"375\" height=\"375\" />\r\n        </div>\r\n    </div>\r\n<!-- .modal-weixin END -->\r\n<div class=\"modal modal-hide modal-bigtap-queue\" id=\"J_bigtapQueue\">\r\n    <div class=\"modal-body\">\r\n        <span class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"iconfont\"></i></span>\r\n        <h3>正在排队，请稍候喔！</h3>\r\n        <p class=\"queue-tip\">抱歉，目前排队人数较多，导致服务器压力山大，请您耐心排队等待，<br>我们将在稍后告诉您排队结果。</p>\r\n        <div class=\"queue-animate\">\r\n            <div id=\"J_mituWalking\" class=\"mitu-walk\"> </div>\r\n            <div class=\"animate-mask animate-mask-left\"></div>\r\n            <div class=\"animate-mask animate-mask-right\"></div>\r\n        </div>\r\n    </div>\r\n</div>\r\n<!-- .xm-dm-queue END -->\r\n<div id=\"J_bigtapError\" class=\"modal modal-hide modal-bigtap-error\">\r\n    <span class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"iconfont\"></i></span>\r\n    <div class=\"modal-body\">\r\n        <h3>抱歉，网络拥堵无法连接服务器</h3>\r\n        <p  class=\"error-tip\">由于访问人数太多导致服务器压力山大，请您稍后再重试。</p>\r\n        <p >\r\n            <a class=\"btn btn-primary\" id=\"J_bigtapRetry\">重试</a>\r\n        </p>\r\n    </div>\r\n</div>\r\n<!-- .xm-dm-error END -->\r\n<div id=\"J_modal-globalSites\" class=\"modal fade modal-hide modal-globalSites\" data-width=\"640\">\r\n       <div class=\"modal-hd\">\r\n            <a class=\"close\" data-dismiss=\"modal\"><i class=\"iconfont\"></i></a>\r\n            <h3>Select Region</h3>\r\n        </div>\r\n        <div class=\"modal-bd\">\r\n            <h3>Welcome to Mi.com</h3>\r\n            <p class=\"modal-globalSites-tips\">Please select your country or region</p>\r\n            <p class=\"modal-globalSites-links clearfix\">\r\n                <a href=\"http://www.mi.com/index.html\">Mainland China</a>\r\n                <a href=\"http://www.mi.com/hk/\">Hong Kong</a>\r\n                <a href=\"http://www.mi.com/tw/\">TaiWan</a>\r\n                <a href=\"http://www.mi.com/sg/\">Singapore</a>\r\n                <a href=\"http://www.mi.com/my/\">Malaysia</a>\r\n                <a href=\"http://www.mi.com/ph/\">Philippines</a>\r\n                <a href=\"http://www.mi.com/in/\">India</a>\r\n                <a href=\"http://www.mi.com/id/\">Indonesia</a>\r\n                <a href=\"http://br.mi.com/\">Brasil</a>\r\n                <a href=\"http://www.mi.com/en/\">Global Home</a>\r\n            </p>\r\n        </div>\r\n    </div>\r\n<!-- .modal-globalSites END -->\r\n<script src=\"http://s01.mifile.cn/js/base.min.js?v2016a\"></script>\r\n<script>\r\n(function() {\r\n    MI.namespace(''GLOBAL_CONFIG'');\r\n    MI.GLOBAL_CONFIG = {\r\n        orderSite: ''http://order.mi.com'',\r\n        wwwSite: ''http://www.mi.com'',\r\n        cartSite: ''http://cart.mi.com'',\r\n        itemSite: ''http://item.mi.com'',\r\n        assetsSite: ''http://s01.mifile.cn'',\r\n        listSite: ''http://list.mi.com'',\r\n        searchSite: ''http://search.mi.com'',\r\n        mySite: ''http://my.mi.com'',\r\n        damiaoSite: ''http://tp.hd.mi.com/'',\r\n        damiaoGoodsId:[\"2160200002\",\"2134900369\",\"2160400010\",\"2160700016\",\"2160700017\",\"2160700024\"],\r\n        logoutUrl: ''http://order.mi.com/site/logout'',\r\n        staticSite: ''http://static.mi.com'',\r\n        quickLoginUrl: ''https://account.xiaomi.com/pass/static/login.html''\r\n    };\r\n    MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + ''/user/order'';\r\n    MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;\r\n    MI.setLoginInfo.init(MI.GLOBAL_CONFIG);\r\n    MI.miniCart.init();\r\n    MI.updateMiniCart();\r\n})();\r\n</script>\r\n<script type=\"text/javascript\" src=\"http://s01.mifile.cn/js/product/mi5/index.min.js?a1bfe2\"></script>\r\n<script src=\"http://c1.mifile.cn/f/i/15/stat/js/xmsg_ti.js\"></script>\r\n<script>\r\nvar _msq = _msq || [];\r\n_msq.push([''setDomainId'', 100]);\r\n_msq.push([''trackPageView'']);\r\n(function() {\r\n    var ms = document.createElement(''script'');\r\n    ms.type = ''text/javascript'';\r\n    ms.async = true;\r\n    ms.src = ''http://c1.mifile.cn/f/i/15/stat/js/xmst.js'';\r\n    var s = document.getElementsByTagName(''script'')[0];\r\n    s.parentNode.insertBefore(ms, s);\r\n})();\r\n</script>\r\n</body>\r\n</html>\r\n \r\n','repeat','2','10','1455953179');");

require("../../inc/footer.php");
?>