/**
* $Id: README.txt,v 3.0 2007-05-31
* @package Mamhoo3.0
* @Copyright (C) 2004 - 2007 mamhoo.com
* @Autor: lang3
* @URL: http://www.mamhoo.com
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mamhoo is free Software
**/

曼虎自述

1. 曼虎简介

曼虎 (Mamhoo) ，Mambo  Hooks的组合词和音译，是功能强大的系统整合平台，可同时钩住多个优秀的系统，和曼波一起构成完美无缝的整合系统。

曼虎的口号是 'Hook The Best!'，曼虎只整合在某领域的顶级优秀系统。目前能整合的系统有 phpbb2.0.10 ~ 2.0.19, vBulletin3.5, IPB2.0.0 ~ 2.0.4, Mediawiki1.4 ~ 1.5.6, Discuz4.0.0-5.5.0, PHPWind3.0.1 。

曼虎钩子的设计宗旨是，使整合后的系统保持其原有的功能特性、界面风格和可扩展性。

曼虎的核心由曼虎组件和曼虎钩子构成，曼虎组件是系统整合的基础平台，同时提供一些实用的用户管理和扩展功能，曼虎钩子根据不同的系统量身定制，实现系统整合。

用户只需一次在一个系统中注册、修改个人资料、登录、退出，就能同时在其它所有系统中进行同样的操作。
管理员只需一次在一个系统后台中新增、修改、删除用户资料，就能同时在其它所有系统中进行同样的操作。

曼虎 3.0 是免费的自由软件，遵循 GNU/GPL 开源许可协议。

欲了解更详细的信息，请访问 http://www.mamhoo.com 


2. 曼虎的组成和功能
曼虎由曼虎组件、曼虎登录模块和曼虎钩子组成。

2.1 曼虎组件
曼虎组件具有管理后台和网站前台。

1) 管理后台
管理后台包括用户管理、用户资料扩展、安装/卸载钩子等功能。

用户管理中可以进行新增、修改、删除用户、禁用用户、强制退出用户等操作，这些操作都是整合同步的，即同时操作其它被整合系统的用户资料，使之同步。请不要使用原有的曼波用户管理功能，避免用户资料不一致。

用户资料扩展功能可以扩展 20 个字段，字段的标题、长度、显示、必填等项目可以自己设置。

安装/卸载钩子功能具有曼波风格的安装界面，在安装钩子时，安装程序会自动修改整合系统的文件，非常容易上手。

2) 网站前台
网站前台具有用户注册、修改资料、登录和退出等功能，表面看和曼波原有的功能无异，实际都已经做了系统同步处理。

网站前台增强了 Session 功能，使访问统计更加准确，增强了 SEF 的功能，使搜索引擎优化更具功效。

网站前台支持同一域名下的子域名的同步。例如，用户可同时登录 www.domain.com 和 domain.com ，不会出现未登录情况。

2.2 曼虎登录模块
已经合并入曼波的登录模块，实现多系统同时登录和退出的功能。

2.3 曼虎钩子
目前曼虎钩子有 hook_phpbb, hook_vbb, hook_ipb, hook_mediawiki, hook_discuz, hook_phpwind，分别能整合 phpbb2.0.10 ~ 2.0.19, vBulletin3.5, IPB2.0.0 ~ 2.0.4, Mediawiki1.4 ~ 1.5.6, Discuz4.0.0-5.5.0, PHPWind3.0.1 。

每个曼虎钩子的文件包中都带有详细的自述文件 README.txt ，欲了解曼虎钩子的具体情况，请参阅其自述文件 README.txt 。


3. 曼虎的安装、升级和卸载，请参阅文件 INSTALL_cn.txt 。


4. 曼虎的发布
2005-03-16, 发布曼虎1.0
2005-05-05, 发布曼虎1.1
2005-06-25, 发布曼虎1.2
2005-09-20, 发布曼虎1.5
2006-01-13, 发布曼虎2.0
2006-03-06, 发布曼虎2.1
2007-06-03, 曼虎3.0 改为遵循 GNU/GPL 开源许可协议，做为曼波整站系统5.1.0 的核心组件，一起发布。
