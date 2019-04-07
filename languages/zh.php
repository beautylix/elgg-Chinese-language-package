<?php
return array(
/**
 * Sites
 */

	'item:site' => '页面',

/**
 * Sessions
 */

	'login' => "登录",
	'loginok' => "你已经登录",
	'loginerror' => "无法登录，请检查你的凭证，然后重新尝试",
	'login:empty' => "需要用户名或者Email地址和密码",
	'login:baduser' => "不能装载你的账户",
	'auth:nopams' => "内部错误 尚未安装用户身份验证方法",

	'logout' => "登出",
	'logoutok' => "你已经登出",
	'logouterror' => "无法登出 请重新尝试",
	'session_expired' => "你的session已经过期 请重新装载页面登录",

	'loggedinrequired' => "此页仅限登录用户查看",
	'adminrequired' => "此页仅限管理员查看",
	'membershiprequired' => "此页仅限小组成员查看",
	'limited_access' => "你尚无权限查看此页",


/**
 * Errors
 */

	'exception:title' => "致命错误",
	'exception:contact_admin' => '发生了无法恢复的错误，已被纪录 以下面的信息联系网站管理员:',

	'actionundefined' => "系统尚未定义(%s)操作",
	'actionnotfound' => "尚未发现%s的操作文件",
	'actionloggedout' => "抱歉, 登出后无法完成此操作",
	'actionunauthorized' => '你无权进行此操作',
	
	'ajax:error' => '调用AJAX发生错误 可能服务器连接已经断开',
	'ajax:not_is_xhr' => '你不能直接访问AJAX视图',

	'PluginException:MisconfiguredPlugin' => "%s (guid: %s) 是一个错配插件 已被关闭 预知原因，请搜索：(http://learn.elgg.org/)",
	'PluginException:CannotStart' => '%s (guid: %s) 不能启动，已被禁用  原因是: %s',
	'PluginException:InvalidID' => "%s是一个无效插件ID",
	'PluginException:InvalidPath' => "%s是一个无效插件路径",
	'PluginException:InvalidManifest' => '%s插件的manifest文件无效',
	'PluginException:InvalidPlugin' => '%s不是一个有效插件',
	'PluginException:InvalidPlugin:Details' => '%s不是一个有效插件: %s',
	'PluginException:NullInstantiated' => 'Elgg插件不能是空例化 必须有一个GUID, 一个插件ID, 或者一个完整路径',
	'ElggPlugin:MissingID' => '插件ID (guid %s)以丢失',
	'ElggPlugin:NoPluginPackagePackage' => '插件ID为%s (guid %s)的插件包已经丢失',
	'ElggPluginPackage:InvalidPlugin:MissingFile' => '文件"%s"已经丢失',
	'ElggPluginPackage:InvalidPlugin:InvalidId' => '为了匹配manifest中的ID，此插件的路径必须重新命名到"%s"',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'manifest保护无效的依赖类型"%s"',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'manifest包含无效的提供类型"%s"',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => '无效的 %s 依赖 "%s" 在插件 %s  插件不能和它们的要求冲突!',
	'ElggPlugin:Exception:CannotIncludeFile' => '不能包含%s 到插件 %s (guid: %s)于%s',
	'ElggPlugin:Exception:CannotRegisterViews' => '插件%s (guid: %s)于%s的视图路径不能打开',
	'ElggPlugin:Exception:CannotRegisterLanguages' => '插件%s (guid: %s)于%s不能注册语言',
	'ElggPlugin:Exception:NoID' => '插件guid %s!尚无ID',
	'PluginException:NoPluginName' => "插件名称未发现",
	'PluginException:ParserError' => 'API版本%s的manifest于插件%s中解析错误',
	'PluginException:NoAvailableParser' => 'API 版本 %s 的manifest于插件%s中无法解析',
	'PluginException:ParserErrorMissingRequiredAttribute' => "manifest中的'%s' 属性来自于插件%s已经丢失",
	'ElggPlugin:InvalidAndDeactivated' => '%s 是一个无效插件，已被禁用',

	'ElggPlugin:Dependencies:Requires' => '必须',
	'ElggPlugin:Dependencies:Suggests' => '建议',
	'ElggPlugin:Dependencies:Conflicts' => '冲突',
	'ElggPlugin:Dependencies:Conflicted' => '已经冲突',
	'ElggPlugin:Dependencies:Provides' => '提供',
	'ElggPlugin:Dependencies:Priority' => '优先',

	'ElggPlugin:Dependencies:Elgg' => 'Elgg版本',
	'ElggPlugin:Dependencies:PhpVersion' => 'PHP版本',
	'ElggPlugin:Dependencies:PhpExtension' => 'PHP扩展: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'PHP ini设置: %s',
	'ElggPlugin:Dependencies:Plugin' => '插件: %s',
	'ElggPlugin:Dependencies:Priority:After' => '在%s之后',
	'ElggPlugin:Dependencies:Priority:Before' => '在%s之前',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s尚未安装',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => '丢失',
	
	'ElggPlugin:Dependencies:ActiveDependent' => '其他插件将%s作为依赖，停用插件%s之前，你必须先停用如下插件',

	'ElggMenuBuilder:Trees:NoParents' => '菜单无母菜单',
	'ElggMenuBuilder:Trees:OrphanedChild' => '菜单[%s]的母菜单[%s]已经丢失',
	'ElggMenuBuilder:Trees:DuplicateChild' => '菜单[%s]重复',

	'RegistrationException:EmptyPassword' => '密码字段不能为空',
	'RegistrationException:PasswordMismatch' => '密码必须匹配',
	'LoginException:BannedUser' => '你已被禁止，不能登录',
	'LoginException:UsernameFailure' => '无法登录，请检查用户名或者Email和密码',
	'LoginException:PasswordFailure' => '无法登录，请检查用户名或者Email和密码',
	'LoginException:AccountLocked' => '多次失败登录，你的账户已被锁定',
	'LoginException:ChangePasswordFailure' => '密码检查失败',
	'LoginException:Unknown' => '未知错误，无法登录',

	'deprecatedfunction' => '警告: 代码使用了过时的函数\'%s\'，无法兼容当前版本',

	'pageownerunavailable' => '警告: 页主无法访问%d',
	'viewfailure' => '视图%s有内部错误',
	'view:missing_param' => "参数'%s'已经从视图%s丢失",
	'changebookmark' => '请为此页改变书签',
	'noaccess' => '此页已被移除，或者你无权访问',
	'error:missing_data' => '请求的数据丢失',
	'save:fail' => '保存数据错误',
	'save:success' => '数据已经保存',

	'error:default:title' => '糟糕',
	'error:default:content' => '糟了，出错了',
	'error:400:title' => '错误请求',
	'error:400:content' => '请求无效或者不完整',
	'error:403:title' => '禁止',
	'error:403:content' => '无权访问此页',
	'error:404:title' => '页面不存在',
	'error:404:content' => '请求的页面未发现',

	'upload:error:ini_size' => '上传文件过大',
	'upload:error:form_size' => '上传文件过大',
	'upload:error:partial' => '文件上传未完成',
	'upload:error:no_file' => '未选中文件',
	'upload:error:no_tmp_dir' => '无法保存上传的文件',
	'upload:error:cant_write' => '无法保存上传的文件',
	'upload:error:extension' => '无法保存上传的文件',
	'upload:error:unknown' => '文件上传失败',


/**
 * User details
 */

	'name' => "显示名字",
	'email' => "Email地址",
	'username' => "用户名",
	'loginusername' => "用户名或者Email地址",
	'password' => "密码",
	'passwordagain' => "再次输入密码",
	'admin_option' => "标记此用户为管理员?",

/**
 * Access
 */

	'PRIVATE' => "私用",
	'LOGGED_IN' => "登录用户",
	'PUBLIC' => "公开",
	'LOGGED_OUT' => "登出的用户",
	'access:friends:label' => "好友",
	'access' => "访问",
	'access:overridenotice' => "仅小组成员可以访问此内容",
	'access:limited:label' => "访问受限",
	'access:help' => "访问级别",
	'access:read' => "只读访问",
	'access:write' => "可写访问",
	'access:admin_only' => "仅限管理员",
	'access:missing_name' => "失去访问级别名",
	'access:comments:change' => "此讨论仅针对部分听众",

/**
 * Dashboard and widgets
 */

	'dashboard' => "控制面板",
	'dashboard:nowidgets' => "控制面板让你跟踪与你相关的活动和其他页面的内容",

	'widgets:add' => '添加应用',
	'widgets:add:description' => "点击下面任意应用的按钮，添加到此页",
	'widgets:panel:close' => "关闭应用面板",
	'widgets:position:fixed' => '(页面的固定位置)',
	'widget:unavailable' => '已经添加此应用',
	'widget:numbertodisplay' => '显示数目',

	'widget:delete' => '去除%s',
	'widget:edit' => '定制此应用',

	'widgets' => "工具",
	'widget' => "工具",
	'item:object:widget' => "工具",
	'widgets:save:success' => "此应用不能成功保存",
	'widgets:save:failure' => "无法保存此应用",
	'widgets:add:success' => "成功添加应用",
	'widgets:add:failure' => "无法添加应用",
	'widgets:move:failure' => "无法存储新的应用位置",
	'widgets:remove:failure' => "无法去除此应用",

/**
 * Groups
 */

	'group' => "小组",
	'item:group' => "小组",

/**
 * Users
 */

	'user' => "用户",
	'item:user' => "用户",

/**
 * Friends
 */

	'friends' => "好友",
	'friends:yours' => "你的好友",
	'friends:owned' => "%s的好友",
	'friend:add' => "加为好友",
	'friend:remove' => "删除好友",

	'friends:add:successful' => "成功添加%s作为好友",
	'friends:add:failure' => "无法添加%s作为好友",

	'friends:remove:successful' => "成功将%s从好友名单去除",
	'friends:remove:failure' => "无法将%s从你的好友名单去除",

	'friends:none' => "尚无好友",
	'friends:none:you' => "尚无任何好友",

	'friends:none:found' => "未发现好友",

	'friends:of:none' => "尚无人加此用户为好友",
	'friends:of:none:you' => "无人加你为好友，请增加内容，充实首页，让更多人发现你!",

	'friends:of:owned' => "%s的好友",

	'friends:of' => "全部关注",
	'friends:collections' => "关注分组",
	'collections:add' => "新加关注",
	'friends:collections:add' => "新加关注",
	'friends:addfriends' => "选择好友",
	'friends:collectionname' => "关注名称",
	'friends:collectionfriends' => "关注好友",
	'friends:collectionedit' => "编辑关注",
	'friends:nocollections' => "尚无关注",
	'friends:collectiondeleted' => "你的关注已被删除",
	'friends:collectiondeletefailed' => "我们无法删除此关注，你无权限或者有其他问题",
	'friends:collectionadded' => "成功创建关注",
	'friends:nocollectionname' => "先输入关注名称",
	'friends:collections:members' => "关注的成员",
	'friends:collections:edit' => "编辑关注",
	'friends:collections:edited' => "保存关注",
	'friends:collection:edit_failed' => '无法保存关注',

	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

	'avatar' => '头像',
	'avatar:noaccess' => "你不被允许编辑此用户头像",
	'avatar:create' => '创建你的头像',
	'avatar:edit' => '编辑头像',
	'avatar:preview' => '预览',
	'avatar:upload' => '上传新的头像',
	'avatar:current' => '当前头像',
	'avatar:remove' => '去除头像，设定默认图标',
	'avatar:crop:title' => '头像裁剪工具',
	'avatar:upload:instructions' => "你的头像显示于整个页面，你能随时改变，图片类型是: GIF, JPG or PNG",
	'avatar:create:instructions' => '点击拖拽下面的方框，裁剪出自己满意的头像，右边是预览图，点击 创建头像，你的头像添加工作完成',
	'avatar:upload:success' => '头像成功上传',
	'avatar:upload:fail' => '头像上传失败',
	'avatar:resize:fail' => '调整图像尺寸失败',
	'avatar:crop:success' => '头像裁剪成功',
	'avatar:crop:fail' => '头像裁剪失败',
	'avatar:remove:success' => '头像去除成功',
	'avatar:remove:fail' => '头像去除失败',

	'profile:edit' => '编辑首页',
	'profile:aboutme' => "关于我",
	'profile:description' => "关于我",
	'profile:briefdescription' => "简要描述",
	'profile:location' => "位置",
	'profile:skills' => "技能",
	'profile:interests' => "兴趣",
	'profile:contactemail' => "联系Email",
	'profile:phone' => "电话",
	'profile:mobile' => "手机",
	'profile:website' => "网站",
	'profile:twitter' => "Twitter账号",
	'profile:saved' => "首页已经成功保存",

	'profile:field:text' => '短文本',
	'profile:field:longtext' => '大文本区',
	'profile:field:tags' => '标签',
	'profile:field:url' => '网站地址',
	'profile:field:email' => 'Email地址',
	'profile:field:location' => '位置',
	'profile:field:date' => '日期',

	'admin:appearance:profile_fields' => '编辑首页字段',
	'profile:edit:default' => '编辑首页字段',
	'profile:label' => "首页标签",
	'profile:type' => "首页类型",
	'profile:editdefault:delete:fail' => '去除首页字段失败',
	'profile:editdefault:delete:success' => '首页字段已经删除',
	'profile:defaultprofile:reset' => '首页字段复位到系统默认值',
	'profile:resetdefault' => '复位首页字段到系统默认值',
	'profile:resetdefault:confirm' => '确认想删除你的定制首页字段?',
	'profile:explainchangefields' => "你能用下面的表单去定制自己的首页字段 \n\n 给新的字段一个标签，比如 '最喜欢的小组', 然后选择字段类型(例如：文本，URL，标签), 然后点击 '添加' 按钮，拖拽重新排序字段，点击字段标签的文本使其进入可编辑状态，然后重新编辑\n\n 任何时候你都可以回到默认的首页设置，但你将丢失定制的数据信息",
	'profile:editdefault:success' => '新的首页字段已经添加',
	'profile:editdefault:fail' => '默认字段不能保存',
	'profile:field_too_long' => '因为字段"%s"太长，无法保存',
	'profile:noaccess' => "你无权编辑此首页",
	'profile:invalid_email' => '%s 必须是一个有效的Email地址',


/**
 * Feeds
 */
	'feed:rss' => 'RSS订阅',
/**
 * Links
 */
	'link:view' => '查看链接',
	'link:view:all' => '查看全部',


/**
 * River
 */
	'river' => "活动汇总",
	'river:friend:user:default' => "%s 和 %s是好友",
	'river:update:user:avatar' => '%s 有新头像',
	'river:update:user:profile' => '%s 更新了首页',
	'river:noaccess' => '无权查看',
	'river:posted:generic' => '%s 发布了',
	'riveritem:single:user' => '一个用户r',
	'riveritem:plural:user' => '许多用户',
	'river:ingroup' => '在小组%s',
	'river:none' => '无活动',
	'river:update' => '为%s更新',
	'river:delete' => '去除此活动项目',
	'river:delete:success' => '活动汇总项目已被删除',
	'river:delete:fail' => '活动汇总项目不能被删除',
	'river:subject:invalid_subject' => '无效用户',
	'activity:owner' => '查看活动',

	'river:widget:title' => "活动",
	'river:widget:description' => "显示最新的活动",
	'river:widget:type' => "活动类型",
	'river:widgets:friends' => '朋友的活动',
	'river:widgets:all' => '所有的活动',

/**
 * Notifications
 */
	'notifications:usersettings' => "通知设置",
	'notification:method:email' => 'Email',

	'notifications:usersettings:save:ok' => "通知设计成功保存",
	'notifications:usersettings:save:fail' => "保存通知设置遇到问题",

	'notification:subject' => '关于%s的通知',
	'notification:body' => '在%s查看新的活动',

/**
 * Search
 */

	'search' => "搜索",
	'searchtitle' => "搜索: %s",
	'users:searchtitle' => "搜索用户: %s",
	'groups:searchtitle' => "搜索小组: %s",
	'advancedsearchtitle' => "%s 结果和 %s匹配",
	'notfound' => "未找到所需内容",
	'next' => "下一页",
	'previous' => "上一页",

	'viewtype:change' => "改变列表类型",
	'viewtype:list' => "列表查看",
	'viewtype:gallery' => "相册",

	'tag:search:startblurb' => "标签匹配与于 '%s'的项目:",

	'user:search:startblurb' => "匹配于'%s'的用户:",
	'user:search:finishblurb' => "查看更多, 点击此处",

	'group:search:startblurb' => "匹配于'%s'的小组:",
	'group:search:finishblurb' => "查看更多, 点击此处",
	'search:go' => '开始',
	'userpicker:only_friends' => '仅限好友',

/**
 * Account
 */

	'account' => "账户",
	'settings' => "设置",
	'tools' => "工具",
	'settings:edit' => '编辑设置',

	'register' => "注册",
	'registerok' => "你已经成功注册为 %s",
	'registerbad' => "由于未知原因，你的注册不成功",
	'registerdisabled' => "注册已经被系统管理员停用",
	'register:fields' => '全部字段为必填',

	'registration:notemail' => '你提供的Email地址无效',
	'registration:userexists' => '此用户名已经存在',
	'registration:usernametooshort' => '你的用户名长度至少 %u 个字符',
	'registration:usernametoolong' => '你的用户名太长，最大长度为%u个字符',
	'registration:passwordtooshort' => '密码必须至少%u个字符',
	'registration:dupeemail' => '此Email地址已经被注册',
	'registration:invalidchars' => '你d用户名包含无效字符%s， 下面的字符无效: %s',
	'registration:emailnotvalid' => '输入的Email地址无效',
	'registration:passwordnotvalid' => '输入的密码无效',
	'registration:usernamenotvalid' => '输入的用户名无效',

	'adduser' => "添加用户",
	'adduser:ok' => "你已经成功添加一个新用户",
	'adduser:bad' => "不能创建新用户",

	'user:set:name' => "账户名称设置",
	'user:name:label' => "显示名称",
	'user:name:success' => "成功改变显示名称",
	'user:name:fail' => "不能改变显示名称",

	'user:set:password' => "账户密码",
	'user:current_password:label' => '输入当前密码',
	'user:password:label' => "输入新密码",
	'user:password2:label' => "再次输入新密码",
	'user:password:success' => "密码修改完成",
	'user:password:fail' => "无法修改密码",
	'user:password:fail:notsame' => "两次输入的密码不相同!",
	'user:password:fail:tooshort' => "密码太短!",
	'user:password:fail:incorrect_current_password' => '当前密码输入不正确',
	'user:changepassword:unknown_user' => '无效的用户名',
	'user:changepassword:change_password_confirm' => '这将改变你的密码',

	'user:set:language' => "语言设置",
	'user:language:label' => "语言",
	'user:language:success' => "语言设置成功更新",
	'user:language:fail' => "语言设置不能保存",

	'user:username:notfound' => '用户名 %s未发现',

	'user:password:lost' => '忘记密码',
	'user:password:changereq:success' => '成功重置了密码, 邮件已经发出',
	'user:password:changereq:fail' => '不能重置新密码',

	'user:password:text' => '输入你的用户名或者Email地址，点击找回密码按钮找回密码',

	'user:persistent' => '记住我',

	'walled_garden:welcome' => '欢迎来到',

/**
 * Administration
 */
	'menu:page:header:administer' => '管理',
	'menu:page:header:configure' => '配置',
	'menu:page:header:develop' => '开发',
	'menu:page:header:default' => '其他',

	'admin:view_site' => '查看页面',
	'admin:loggedin' => '以%s身份登入',
	'admin:menu' => '菜单',

	'admin:configuration:success' => "你的设置已经保存",
	'admin:configuration:fail' => "你的设置不能保存",
	'admin:configuration:dataroot:relative_path' => '不能设置"%s" 作为数据存放点，因为它不是一个绝对路径',
	'admin:configuration:default_limit' => '每页的项目数必须至少1个',

	'admin:unknown_section' => '无效的管理区段',

	'admin' => "管理",
	'admin:description' => "管理面板允许你控制系统的各个方面，从用户管理到插件行为，从下面选择一个选项开始",

	'admin:statistics' => "统计",
	'admin:statistics:overview' => '总览',
	'admin:statistics:server' => '服务器信息',
	'admin:statistics:cron' => 'Cron',
	'admin:cron:record' => '最新Cron工作',
	'admin:cron:period' => 'Cron周期',
	'admin:cron:friendly' => '最新完成',
	'admin:cron:date' => '日期与时间',

	'admin:appearance' => '外观',
	'admin:administer_utilities' => '功用',
	'admin:develop_utilities' => '功用',
	'admin:configure_utilities' => '功用',
	'admin:configure_utilities:robots' => 'Robots.txt',

	'admin:users' => "用户",
	'admin:users:online' => '当前在线用户',
	'admin:users:newest' => '最新用户',
	'admin:users:admins' => '管理员',
	'admin:users:add' => '添加新用户',
	'admin:users:description' => "管理面板允许你控制用户设置，从下面选择一个选项开始",
	'admin:users:adduser:label' => "点击此处添加新用户",
	'admin:users:opt:linktext' => "配置用户",
	'admin:users:opt:description' => "配置用户和账户信息",
	'admin:users:find' => '查找',

	'admin:administer_utilities:maintenance' => '维护模式',
	'admin:upgrades' => '升级',

	'admin:settings' => '设置',
	'admin:settings:basic' => '基本设置',
	'admin:settings:advanced' => '高级设置',
	'admin:site:description' => "管理面板允许你控制全局设置，从下面选择一个选项开始",
	'admin:site:opt:linktext' => "配置页面",
	'admin:settings:in_settings_file' => '此设置在settings.php里面配置',

	'admin:legend:security' => '安全',
	'admin:site:secret:intro' => 'Elgg使用一个密钥为不同目的创建安全标记',
	'admin:site:secret_regenerated' => "你的页面秘密已经重新生成",
	'admin:site:secret:regenerate' => "重新生成页面秘密",
	'admin:site:secret:regenerate:help' => "注意: 重新生成秘密会使许多用户不便，这将使用户的 \"记住我\" cookies, Email验证请求，邀请码等的标记无效",
	'site_secret:current_strength' => '密钥强度',
	'site_secret:strength:weak' => "弱",
	'site_secret:strength_msg:weak' => "我们强烈推荐你重新生成页面秘密",
	'site_secret:strength:moderate' => "版务",
	'site_secret:strength_msg:moderate' => "为了页面安全，我们强烈建议你重新生成页面秘密",
	'site_secret:strength:strong' => "强",
	'site_secret:strength_msg:strong' => "你的页面秘密足够强，无需重新生成",

	'admin:dashboard' => '控制面板',
	'admin:widget:online_users' => '在线用户',
	'admin:widget:online_users:help' => '列出当前正在访问网站的用户',
	'admin:widget:new_users' => '新用户',
	'admin:widget:new_users:help' => '列出最新用户',
	'admin:widget:banned_users' => '被禁用户',
	'admin:widget:banned_users:help' => '列出被禁的用户',
	'admin:widget:content_stats' => '内容统计',
	'admin:widget:content_stats:help' => '跟踪用户创建的内容',
	'admin:widget:cron_status' => 'Cron状态',
	'admin:widget:cron_status:help' => '显示上次Cron工作完成的状态',
	'widget:content_stats:type' => '内容类型',
	'widget:content_stats:number' => '数量',

	'admin:widget:admin_welcome' => '欢迎',
	'admin:widget:admin_welcome:help' => "管理区域的一条简短介绍",
	'admin:widget:admin_welcome:intro' =>
'欢迎使用Elgg! 现在你正在查看管理面板，它可以跟踪网站使用情况',

	'admin:widget:admin_welcome:admin_overview' =>
"管理区域的导航在右边的菜单，它包含三个部分:
	<dl>
		<dt>管理员</dt><dd>每天的任务，比如监控报告的内容，检查谁在线，查看统计数据</dd>
		<dt>配置</dt><dd>偶尔任务，比如设置网站名称，激活插件</dd>
		<dt>开发</dt><dd>针对开发插件和主题的开发者(开发者插件必须激活)</dd>
	</dl>
	",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />通过底部连接检查需要的资源，感谢使用Elgg!',

	'admin:widget:control_panel' => '控制面板',
	'admin:widget:control_panel:help' => "提供普通控制的快捷访问",

	'admin:cache:flush' => '清除缓存',
	'admin:cache:flushed' => "网站的缓存已经被清除",

	'admin:footer:faq' => '管理FAQ',
	'admin:footer:manual' => '管理手册',
	'admin:footer:community_forums' => 'Elgg社区论坛',
	'admin:footer:blog' => 'Elgg Blog',

	'admin:plugins:category:all' => '全部插件',
	'admin:plugins:category:active' => '激活的插件',
	'admin:plugins:category:inactive' => '未激活的插件',
	'admin:plugins:category:admin' => '管理',
	'admin:plugins:category:bundled' => '捆绑',
	'admin:plugins:category:nonbundled' => '非捆绑',
	'admin:plugins:category:content' => '内容',
	'admin:plugins:category:development' => '开发',
	'admin:plugins:category:enhancement' => '增强',
	'admin:plugins:category:api' => '服务/API',
	'admin:plugins:category:communication' => '通讯',
	'admin:plugins:category:security' => '安全与垃圾',
	'admin:plugins:category:social' => '社交',
	'admin:plugins:category:multimedia' => '多媒体',
	'admin:plugins:category:theme' => '主题',
	'admin:plugins:category:widget' => '栏目',
	'admin:plugins:category:utility' => '功用',

	'admin:plugins:markdown:unknown_plugin' => '未知插件',
	'admin:plugins:markdown:unknown_file' => '未知文件',

	'admin:notices:could_not_delete' => '不能删除通知',
	'item:object:admin_notice' => '管理通知',

	'admin:options' => '管理选项',
	
/**	
* External Pages
**/
	
	'item:object:about' => '关于我们',
	'item:object:privacy' => '隐私保护',
	'item:object:terms' => '使用条款',
		

/**
 * Plugins
 */

	'plugins:disabled' => '一个名为“disabled”的文件位于mod路径，插件不能装载',
	'plugins:settings:save:ok' => "%s插件的设置成功保存",
	'plugins:settings:save:fail' => "保存 %s 插件设置时遇到问题",
	'plugins:usersettings:save:ok' => "%s插件的用户设置成功保存",
	'plugins:usersettings:save:fail' => "保存%s插件的用户设置时遇到问题",
	'item:object:plugin' => '插件',

	'admin:plugins' => "插件",
	'admin:plugins:activate_all' => '激活全部',
	'admin:plugins:deactivate_all' => '禁用全部',
	'admin:plugins:activate' => '激活',
	'admin:plugins:deactivate' => '禁用',
	'admin:plugins:description' => "管理面板允许你控制和配置安装于网站的工具",
	'admin:plugins:opt:linktext' => "配置工具",
	'admin:plugins:opt:description' => "配置安装于网站的工具",
	'admin:plugins:label:author' => "作者",
	'admin:plugins:label:copyright' => "版权",
	'admin:plugins:label:categories' => '类别',
	'admin:plugins:label:licence' => "授权",
	'admin:plugins:label:website' => "网址",
	'admin:plugins:label:repository' => "代码",
	'admin:plugins:label:bugtracker' => "报告问题",
	'admin:plugins:label:donate' => "捐赠",
	'admin:plugins:label:moreinfo' => '更多信息',
	'admin:plugins:label:version' => '版本',
	'admin:plugins:label:location' => '位置',
	'admin:plugins:label:contributors' => '贡献者',
	'admin:plugins:label:contributors:name' => '名字',
	'admin:plugins:label:contributors:email' => 'E-mail',
	'admin:plugins:label:contributors:website' => '网站',
	'admin:plugins:label:contributors:username' => '社区用户名',
	'admin:plugins:label:contributors:description' => '描述',
	'admin:plugins:label:dependencies' => '依赖',

	'admin:plugins:warning:elgg_version_unknown' => '插件使用legacy manifest文件，不能指定一个版本，可能无法工作!',
	'admin:plugins:warning:unmet_dependencies' => '插件无法满足依赖，不能被激活，检查依赖性了解更多信息',
	'admin:plugins:warning:invalid' => '无效插件: %s',
	'admin:plugins:warning:invalid:check_docs' => '检查 <a href="http://learn.elgg.org/en/stable/appendix/faqs.html">Elgg文档</a>了解解决方案',
	'admin:plugins:cannot_activate' => '不能激活',

	'admin:plugins:set_priority:yes' => "重新排序%s",
	'admin:plugins:set_priority:no' => "不能重新排序%s",
	'admin:plugins:set_priority:no_with_msg' => "不能重新排序 %s 错误: %s",
	'admin:plugins:deactivate:yes' => "禁用 %s",
	'admin:plugins:deactivate:no' => "不能禁用%s",
	'admin:plugins:deactivate:no_with_msg' => "不能禁用 %s 错误: %s",
	'admin:plugins:activate:yes' => "激活 %s",
	'admin:plugins:activate:no' => "不能激活 %s",
	'admin:plugins:activate:no_with_msg' => "不能激活%s 错误: %s",
	'admin:plugins:categories:all' => '全部分类',
	'admin:plugins:plugin_website' => '插件网站',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => '版本 %s',
	'admin:plugin_settings' => '插件设置',
	'admin:plugins:warning:unmet_dependencies_active' => '插件已经激活，但是无法满足依赖要求，你可能会遇到问题。查看下面的"更多信息" 了解细节',

	'admin:plugins:dependencies:type' => '类型',
	'admin:plugins:dependencies:name' => '名称',
	'admin:plugins:dependencies:expected_value' => '期望值',
	'admin:plugins:dependencies:local_value' => '实际值',
	'admin:plugins:dependencies:comment' => '评论',

	'admin:statistics:description' => "网站统计总览，如果你需要更多详细统计，专业管理特色是可用的",
	'admin:statistics:opt:description' => "查看网站用户和对象的统计信息",
	'admin:statistics:opt:linktext' => "查看统计",
	'admin:statistics:label:basic' => "基本网站统计",
	'admin:statistics:label:numentities' => "网站实体",
	'admin:statistics:label:numusers' => "用户数量",
	'admin:statistics:label:numonline' => "在线用户数量",
	'admin:statistics:label:onlineusers' => "当前在线用户",
	'admin:statistics:label:admins'=>"管理",
	'admin:statistics:label:version' => "Elgg版本",
	'admin:statistics:label:version:release' => "发布",
	'admin:statistics:label:version:version' => "版本",

	'admin:server:label:php' => 'PHP',
	'admin:server:label:web_server' => '网站服务器',
	'admin:server:label:server' => '服务器',
	'admin:server:label:log_location' => 'log位置',
	'admin:server:label:php_version' => 'PHP版本',
	'admin:server:label:php_ini' => 'PHP.ini文件位置',
	'admin:server:label:php_log' => 'PHP Log',
	'admin:server:label:mem_avail' => '可用存储',
	'admin:server:label:mem_used' => '已用存储',
	'admin:server:error_log' => "网站服务器错误记录",
	'admin:server:label:post_max_size' => '帖子最大尺寸',
	'admin:server:label:upload_max_filesize' => '上传最大尺寸',
	'admin:server:warning:post_max_too_small' => '(注意: 帖子最大尺寸必须大于此值才能支持这个尺寸的上传)',

	'admin:user:label:search' => "查找用户:",
	'admin:user:label:searchbutton' => "搜索",

	'admin:user:ban:no' => "不能禁止用户",
	'admin:user:ban:yes' => "被禁用户",
	'admin:user:self:ban:no' => "你不能禁止自己",
	'admin:user:unban:no' => "不能解禁自己",
	'admin:user:unban:yes' => "解禁用户",
	'admin:user:delete:no' => "不能删除用户",
	'admin:user:delete:yes' => "用户%s已被删除",
	'admin:user:self:delete:no' => "你不能删除自己",

	'admin:user:resetpassword:yes' => "密码重置，用户通知",
	'admin:user:resetpassword:no' => "密码不能重置",

	'admin:user:makeadmin:yes' => "用户当前为管理员",
	'admin:user:makeadmin:no' => "不能标记此用户为管理员",

	'admin:user:removeadmin:yes' => "用户不再是管理员",
	'admin:user:removeadmin:no' => "我们不能从这个用户去除管理员特权",
	'admin:user:self:removeadmin:no' => "你不能去除自己的管理员特权",

	'admin:appearance:menu_items' => '菜单项',
	'admin:menu_items:configure' => '配置主菜单项',
	'admin:menu_items:description' => '选择哪一个菜单项显示作为特色连接，未用项目将被添加作为“更多”',
	'admin:menu_items:hide_toolbar_entries' => '从工具栏菜单去除连接?',
	'admin:menu_items:saved' => '菜单项已经保存',
	'admin:add_menu_item' => '添加定制菜单项',
	'admin:add_menu_item:description' => '填入显示名称和URL，加定制菜单到你的导航菜单',

	'admin:appearance:default_widgets' => '默认应用',
	'admin:default_widgets:unknown_type' => '未知应用类型',
	'admin:default_widgets:instructions' => '为选定的应用页添加, 去除, 定位, 配置默认应用，此改变仅对网站的新用户有效',

	'admin:robotstxt:instructions' => "编辑网站的robots.txt文件",
	'admin:robotstxt:plugins' => "插件正在添加下面的内容到robots.txt文件",
	'admin:robotstxt:subdir' => "robots.txt工具不能工作，因为Elgg安装在子目录",
	'admin:robotstxt:physical' => "robots.txt工具不能工作，因为另一个robots.txt文件已经存在",

	'admin:maintenance_mode:default_message' => '网站正在维护',
	'admin:maintenance_mode:instructions' => '维护模式用户升级和大型修改，当维护状态开始时，仅管理员可以登入和浏览',
	'admin:maintenance_mode:mode_label' => '维护模式',
	'admin:maintenance_mode:message_label' => '维护模式时，显示给用户的信息',
	'admin:maintenance_mode:saved' => '维护模式设置已经保存',
	'admin:maintenance_mode:indicator_menu_item' => '网站处于维护模式',
	'admin:login' => '管理员登陆',

/**
 * User settings
 */
		
	'usersettings:description' => "用户设置面板允许你控制所有个人设置, 从用户管理到插件行为，从下面选择一个选项开始吧",

	'usersettings:statistics' => "你的统计",
	'usersettings:statistics:opt:description' => "你的页面的访问量统计",
	'usersettings:statistics:opt:linktext' => "账户统计",

	'usersettings:user' => "%s'的设置",
	'usersettings:user:opt:description' => "此允许你控制用户设置",
	'usersettings:user:opt:linktext' => "改变你的设置",

	'usersettings:plugins' => "工具",
	'usersettings:plugins:opt:description' => "为你的工具配置设置",
	'usersettings:plugins:opt:linktext' => "配置你的工具",

	'usersettings:plugins:description' => "此面板允许你控制和配置个人设置",
	'usersettings:statistics:label:numentities' => "你的内容",

	'usersettings:statistics:yourdetails' => "你的细节",
	'usersettings:statistics:label:name' => "全名",
	'usersettings:statistics:label:email' => "Email",
	'usersettings:statistics:label:membersince' => "成员自从",
	'usersettings:statistics:label:lastlogin' => "最后登录",

/**
 * Activity river
 */
		
	'river:all' => '全部活动',
	'river:mine' => '我的活动',
	'river:owner' => '%s的活动',
	'river:friends' => '好友的活动',
	'river:select' => '显示 %s',
	'river:comments:more' => '+%u 更多',
	'river:comments:all' => '查看 %u 的全部评论',
	'river:generic_comment' => '评论于 %s %s',

	'friends:widget:description' => "显示好友",
	'friends:num_display' => "显示好友数量",
	'friends:icon_size' => "图标尺寸",
	'friends:tiny' => "极小",
	'friends:small' => "小",

/**
 * Icons
 */

	'icon:size' => "图标尺寸",
	'icon:size:topbar' => "顶部栏",
	'icon:size:tiny' => "极小",
	'icon:size:small' => "小",
	'icon:size:medium' => "中",
	'icon:size:large' => "大",
	'icon:size:master' => "特大",
		
/**
 * Generic action words
 */

	'save' => "保存",
	'reset' => '重置',
	'publish' => "发布",
	'cancel' => "取消",
	'saving' => "保存 ",
	'update' => "更新",
	'preview' => "预览",
	'edit' => "编辑",
	'delete' => "删除",
	'accept' => "接受",
	'reject' => "拒绝",
	'decline' => "拒绝",
	'approve' => "核准",
	'activate' => "激活",
	'deactivate' => "停用",
	'disapprove' => "取消核准",
	'revoke' => "废除",
	'load' => "装载",
	'upload' => "上传",
	'download' => "下载",
	'ban' => "禁止",
	'unban' => "取消禁止",
	'banned' => "禁止的",
	'enable' => "开启",
	'disable' => "关闭",
	'request' => "找回密码",
	'complete' => "完成",
	'open' => '开启',
	'close' => '关闭',
	'hide' => '隐藏',
	'show' => '显示',
	'reply' => "回复",
	'more' => '更多',
	'more_info' => '更多信息',
	'comments' => '评论',
	'import' => '导入',
	'export' => '导出',
	'untitled' => '未标明的',
	'help' => '帮助',
	'send' => '发送',
	'post' => '发布',
	'submit' => '提交',
	'comment' => '评论',
	'upgrade' => '升级',
	'sort' => '分类',
	'filter' => '过滤',
	'new' => '新的',
	'add' => '添加',
	'create' => '创建',
	'remove' => '去除',
	'revert' => '恢复',

	'site' => '页面',
	'activity' => '活动',
	'members' => '成员',
	'menu' => '菜单',

	'up' => '向上',
	'down' => '向下',
	'top' => '顶部',
	'bottom' => '底部',
	'right' => '向右',
	'left' => '向左',
	'back' => '返回',

	'invite' => "邀请",

	'resetpassword' => "重置密码",
	'changepassword' => "改变密码",
	'makeadmin' => "加为管理员",
	'removeadmin' => "去除管理员",

	'option:yes' => "是",
	'option:no' => "否",

	'unknown' => '未知',
	'never' => '从未',

	'active' => '活跃',
	'total' => '总共',
	
	'ok' => '好',
	'any' => '任何',
	'error' => '错误',
	
	'other' => '其他',
	'options' => '选项',
	'advanced' => '高级',

	'learnmore' => "点击获取详情",
	'unknown_error' => '未知错误',

	'content' => "内容",
	'content:latest' => '最新活动',
	'content:latest:blurb' => '另外, 点击此处查看所有最新内容',

	'link:text' => '查看链接',
	
/**
 * Generic questions
 */

	'question:areyousure' => '确定?',

/**
 * Status
 */

	'status' => '状态',
	'status:unsaved_draft' => '未保存的草稿',
	'status:draft' => '草稿',
	'status:unpublished' => '尚未发布',
	'status:published' => '已经发布',
	'status:featured' => '特色',
	'status:open' => '开启',
	'status:closed' => '关闭',

/**
 * Generic sorts
 */

	'sort:newest' => '最新',
	'sort:popular' => '流行',
	'sort:alpha' => '按字母顺序',
	'sort:priority' => '优先级',
		
/**
 * Generic data words
 */

	'title' => "标题",
	'description' => "描述",
	'tags' => "标签",
	'all' => "全部",
	'mine' => "自己",

	'by' => '由',
	'none' => '无人',

	'annotations' => "注释",
	'relationships' => "关系",
	'metadata' => "Meta数据",
	'tagcloud' => "标签云",

	'on' => '开启',
	'off' => '关闭',

/**
 * Entity actions
 */
		
	'edit:this' => '编辑',
	'delete:this' => '删除',
	'comment:this' => '评论',

/**
 * Input / output strings
 */

	'deleteconfirm' => "确定想删除此项目?",
	'deleteconfirm:plural' => "确定想删除此项目?",
	'fileexists' => "一个文件已经上传去替换, 从下面选择:",

/**
 * User add
 */

	'useradd:subject' => '用户账户创建了',
	'useradd:body' => '
%s,

你d账户%s已经被创建，请访问:

%s

并且用下面的凭据登录:

用户名: %s
密码: %s

一旦你登入系统, 我们强烈推荐你修改密码
',

/**
 * System messages
 */

	'systemmessages:dismiss' => "点击去解除",


/**
 * Import / export
 */
		
	'importsuccess' => "导入数据成功",
	'importfail' => "OpenDD导入数据失败",

/**
 * Time
 */

	'friendlytime:justnow' => "刚才",
	'friendlytime:minutes' => "%s 分钟之前",
	'friendlytime:minutes:singular' => "一分钟之前",
	'friendlytime:hours' => "%s 小时之前",
	'friendlytime:hours:singular' => "一小时之前",
	'friendlytime:days' => "%s 天之前",
	'friendlytime:days:singular' => "昨天",
	'friendlytime:date_format' => 'j F Y @ g:ia',
	
	'friendlytime:future:minutes' => "%s 分钟后",
	'friendlytime:future:minutes:singular' => "一分钟后",
	'friendlytime:future:hours' => " %s 小时后",
	'friendlytime:future:hours:singular' => "一小时后",
	'friendlytime:future:days' => " %s 天后",
	'friendlytime:future:days:singular' => "明天",

	'date:month:01' => '一月 %s',
	'date:month:02' => '二月 %s',
	'date:month:03' => '三月 %s',
	'date:month:04' => '四月 %s',
	'date:month:05' => '五月 %s',
	'date:month:06' => '六月 %s',
	'date:month:07' => '七月 %s',
	'date:month:08' => '八月 %s',
	'date:month:09' => '几月 %s',
	'date:month:10' => '十月 %s',
	'date:month:11' => '十一月 %s',
	'date:month:12' => '十二月 %s',

	'date:weekday:0' => '星期天',
	'date:weekday:1' => '星期一',
	'date:weekday:2' => '星期二',
	'date:weekday:3' => '星期三',
	'date:weekday:4' => '星期四',
	'date:weekday:5' => '星期五',
	'date:weekday:6' => '星期六',
	
	'interval:minute' => '每分钟',
	'interval:fiveminute' => '每五分钟',
	'interval:fifteenmin' => '每十五分钟',
	'interval:halfhour' => '每半小时',
	'interval:hourly' => '每小时',
	'interval:daily' => '每天',
	'interval:weekly' => '每周',
	'interval:monthly' => '每月',
	'interval:yearly' => '每年',
	'interval:reboot' => '每次重启',

/**
 * System settings
 */

	'installation:sitename' => "网站名称:",
	'installation:sitedescription' => "网站的简短描述(可选):",
	'installation:wwwroot' => "网站URL:",
	'installation:path' => "Elgg安装的完整路径:",
	'installation:dataroot' => "数据目录的完整路径:",
	'installation:dataroot:warning' => "你必须手动创建这个路径，它应该不同于你的Elgg安装路径",
	'installation:sitepermissions' => "默认访问权限",
	'installation:language' => "网站默认语言:",
	'installation:debug' => "控制写入服务器纪录的信息量",
	'installation:debug:label' => "纪录级别:",
	'installation:debug:none' => '关闭纪录(推荐)',
	'installation:debug:error' => '仅纪录关键错误',
	'installation:debug:warning' => '纪录错误和警告',
	'installation:debug:notice' => '纪录全部错误、警告和通知',
	'installation:debug:info' => '纪录全部',

	// Walled Garden support
	'installation:registration:description' => '用户注册默认开启，如果你不想让他们自己注册，请关闭此项',
	'installation:registration:label' => '允许新用户注册',
	'installation:walled_garden:description' => '开启将阻止非成员访问网站，除非你期望网站标记为公开（比如注册登录）',
	'installation:walled_garden:label' => '限制页面仅对登陆用户开放',

	'installation:httpslogin' => "开启让用户已HTTPS登录，要求服务器开启HTTPS!",
	'installation:httpslogin:label' => "开启HTTPS登陆",
	'installation:view' => "输入view或者留空作为网站的默认值 (如果怀疑，留空作为默认值):",

	'installation:siteemail' => "网站Email地址（用于发送系统邮件):",
	'installation:default_limit' => "每页的默认项目数",

	'admin:site:access:warning' => "用户创建新内容的建议隐私设置，改变它不改变对内容的访问权限",
	'installation:allow_user_default_access:description' => "开启允许用户设置他们自己的建议隐私设置，将覆盖系统建议",
	'installation:allow_user_default_access:label' => "允许用户默认访问",

	'installation:simplecache:description' => "简单缓存通过缓存静态内容，包括CSS和Javascript文件来提升网站性能",
	'installation:simplecache:label' => "使用简单缓存(推荐)",

	'installation:minify:description' => "简单缓存也能通过压缩Javascript和CSS文件来提升性能(简单缓存需开启)",
	'installation:minify_js:label' => "压缩JavaScript (推荐)",
	'installation:minify_css:label' => "压缩CSS (推荐)",

	'installation:htaccess:needs_upgrade' => "你必须升级你的.htaccess文件，让路径注入到 GET parameter __elgg_uri (你能用install/config/htaccessdist作为指导)",
	'installation:htaccess:localhost:connectionfailed' => "Elgg无法连接到它自身去测试重写规则，检查curl是否工作，没有IP限制阻止localhost连接",
	
	'installation:systemcache:description' => "系统缓存通过缓存数据到文件减少系统的装载时间",
	'installation:systemcache:label' => "使用系统缓存(推荐)",

	'admin:legend:system' => '系统',
	'admin:legend:caching' => '缓存',
	'admin:legend:content_access' => '内容访问',
	'admin:legend:site_access' => '网站访问',
	'admin:legend:debug' => '调试和纪录',

	'upgrading' => '升级',
	'upgrade:db' => '数据库已经升级',
	'upgrade:core' => 'Elgg安装已经升级',
	'upgrade:unlock' => '解锁升级',
	'upgrade:unlock:confirm' => "数据库被另一个升级锁定，允许并行升级非常危险，只有你确认没有其他升级正在运行，才应该解锁",
	'upgrade:locked' => "无法升级，另一个升级正在运行，访问管理平台清除升级锁定",
	'upgrade:unlock:success' => "升级成功解锁",
	'upgrade:unable_to_upgrade' => '无法升级',
	'upgrade:unable_to_upgrade_info' =>
		'安装无法升级，因为在Elgg核心views路径检测到老化的views， 此views已经过时，需要去除以便Elgg正常工作。如果你不得不改变Elgg核心，你可以简单删除这个views路径
		从最新下载的Elgg包里找来一个替代。下载地址 <a href="http://elgg.org">elgg.org</a><br /><br />
		如果你需要详细的指导，请访问<a href="http://learn.elgg.org/en/stable/admin/upgrading.html">
		Upgrading Elgg documentation</a> 如果你寻求帮助，请发帖到
		<a href="http://community.elgg.org/pg/groups/discussion/">Community Support Forums</a>',

	'update:twitter_api:deactivated' => 'Twitter API (旧名 Twitter Service) 在升级期间被禁用，如果需要，请手动激活',
	'update:oauth_api:deactivated' => 'OAuth API (旧名 OAuth Lib) 在升级期间被禁用，如果需要，请手动激活',
	'upgrade:site_secret_warning:moderate' => "鼓励你重新生成你的网站密钥去改进系统安全，参见 系统 &gt; 设置 &gt; 高级",
	'upgrade:site_secret_warning:weak' => "强烈鼓励你重新生成网站密钥改进系统安全 参见 配置 &gt; 设置 &gt; 高级",

	'deprecated:function' => '%s() 已经被%s()废弃',

	'admin:pending_upgrades' => '网站有待处理的升级，需要你的注意',
	'admin:view_upgrades' => '查看待处理的升级',
 	'admin:upgrades' => '升级',
	'item:object:elgg_upgrade' => '网站升级',
	'admin:upgrades:none' => '安装已经是最新',

	'upgrade:item_count' => ' <b>%s</b>个项目需要升级',
	'upgrade:warning' => '<b>警告:</b> 大型网站的升级可能需要相当长的时间!',
	'upgrade:success_count' => '升级:',
	'upgrade:error_count' => '错误:',
	'upgrade:river_update_failed' => '=项目id %s的详细活动更新失败',
	'upgrade:timestamp_update_failed' => '项目id %s的时间戳更新失败',
	'upgrade:finished' => '升级完成',
	'upgrade:finished_with_errors' => '<p>升级完成，但是仍有错误，刷新页面重新运行升级</p></p><br />如果错误重现，检查服务器错误log找到可能的原因，你也可以从<a href="http://community.elgg.org/groups/profile/179063/elgg-technical-support">Technical support group</a> 寻求帮助</p>',

	// Strings specific for the comments upgrade
	'admin:upgrades:comments' => '评论升级',
	'upgrade:comment:create_failed' => '转换评论 id %s 到实体失败',
	'admin:upgrades:commentaccess' => '评论访问升级',

	// Strings specific for the datadir upgrade
	'admin:upgrades:datadirs' => '数据路径升级',

	// Strings specific for the discussion reply upgrade
	'admin:upgrades:discussion_replies' => '讨论回复升级',
	'discussion:upgrade:replies:create_failed' => '转换讨论回复id %s到实体失败',

/**
 * Welcome
 */

	'welcome' => "欢迎",
	'welcome:user' => '欢迎%s',

/**
 * Emails
 */
		
	'email:from' => '发件人',
	'email:to' => '收件人',
	'email:subject' => '主题',
	'email:body' => '内容',
	
	'email:settings' => "Email设置",
	'email:address:label' => "Email地址",

	'email:save:success' => "新Email地址已经保存，尚需验证",
	'email:save:fail' => "新Email地址无法保存",

	'friend:newfriend:subject' => "%s已经加你为好友!",
	'friend:newfriend:body' => "%s已经加你为好友!

查看首页，点击此处:

%s

请不要回复此邮件",

	'email:changepassword:subject' => "修改密码!",
	'email:changepassword:body' => "%s, 你好,

你的密码已经成功修改",

	'email:resetpassword:subject' => "密码重置!",
	'email:resetpassword:body' => "你好， %s,

你的密码已经重置到: %s",

	'email:changereq:subject' => "要求修改密码",
	'email:changereq:body' => "你好， %s,

某人 (从IP地址 %s) 要求修改此账户的密码

如果你本人要求，请点击下面的连接，否则，请忽略此邮件

%s
",

/**
 * user default access
 */

	'default_access:settings' => "你的默认访问级别",
	'default_access:label' => "默认访问",
	'user:default_access:success' => "新的默认访问级别已经保存",
	'user:default_access:failure' => "新的默认访问级别不能保存",

/**
 * Comments
 */

	'comments:count' => "%s 评论",
	'item:object:comment' => '评论',

	'river:comment:object:default' => '%s 评论于 %s',

	'generic_comments:add' => "留下评论",
	'generic_comments:edit' => "编辑评论",
	'generic_comments:post' => "发布评论",
	'generic_comments:text' => "评论",
	'generic_comments:latest' => "最新评论",
	'generic_comment:posted' => "评论已经成功发布",
	'generic_comment:updated' => "评论成功更新",
	'generic_comment:deleted' => "评论成功删除",
	'generic_comment:blank' => "请先输入评论内容",
	'generic_comment:notfound' => "无法发现指定内容",
	'generic_comment:notfound_fallback' => "无法发现指定内容, 回到先前页",
	'generic_comment:notdeleted' => "无法删除此评论",
	'generic_comment:failure' => "保存评论时出错",
	'generic_comment:none' => '尚无评论',
	'generic_comment:title' => '%s评论',
	'generic_comment:on' => '%s评论了%s',
	'generic_comments:latest:posted' => '发布了',

	'generic_comment:email:subject' => '你有新评论',
	'generic_comment:email:body' => "你有新的评论来自于主题 \"%s\" ， %s写道:


%s


评论或者查看，点击此处

%s

查看%s'的首页, 点击此处:

%s

请不要回复此邮件",

/**
 * Entities
 */
	
	'byline' => '作者%s',
	'byline:ingroup' => '在小组%s',
	'entity:default:missingsupport:popup' => '此单元不能正确显示，可能它需要尚未安装的插件的支持',
	'entity:delete:item' => '项目',
	'entity:delete:item_not_found' => '项目未能发现.',
	'entity:delete:permission_denied' => '你无权删除此项目.',
	'entity:delete:success' => '%s单元已经被删除',
	'entity:delete:fail' => '%s单元不能被删除',
	
	'entity:can_delete:invaliduser' => '由于用户不存在，无法通过canDelete() 删除user_guid [%s]的用户 ',


/**
 * Action gatekeeper
 */

	'actiongatekeeper:missingfields' => '表单丢失了 __token 或者 __ts 字段',
	'actiongatekeeper:tokeninvalid' => "你正在使用的页面已经过期，请重试",
	'actiongatekeeper:timeerror' => '你正在使用的页面已经过去，请刷新重试',
	'actiongatekeeper:pluginprevents' => '由于未知原因，你的表单不能提交',
	'actiongatekeeper:uploadexceeded' => '上传文件尺寸超出管理员设置的限制',
	'actiongatekeeper:crosssitelogin' => "从不同的域名登录不被允许（有无www被认定为两个不同的域名），请重新尝试",

/**
 * Word blacklists
 */

	'word:blacklist' => '黑名单词汇',

/**
 * Tag labels
 */

	'tag_names:tags' => '标签',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => '联系 %s失败，你可能经历了问题，请保存内容，刷新页面',
	'js:security:token_refreshed' => '到%s的连接已经重置!',
	'js:lightbox:current' => "图片 %s 来自于 %s",

/**
 * Miscellaneous
 */
	'elgg:powered' => "",

/**
 * Languages according to ISO 639-1 (with a couple of exceptions)
 */

	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "Arabic",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "Byelorussian",
	"bg" => "Bulgarian",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali; Bangla",
	"bo" => "Tibetan",
	"br" => "Breton",
	"ca" => "Catalan",
	"cmn" => "Mandarin Chinese", // ISO 639-3
	"co" => "Corsican",
	"cs" => "Czech",
	"cy" => "Welsh",
	"da" => "Danish",
	"de" => "German",
	"dz" => "Bhutani",
	"el" => "Greek",
	"en" => "English",
	"eo" => "Esperanto",
	"es" => "Spanish",
	"et" => "Estonian",
	"eu" => "Basque",
	"fa" => "Persian",
	"fi" => "Finnish",
	"fj" => "Fiji",
	"fo" => "Faeroese",
	"fr" => "French",
	"fy" => "Frisian",
	"ga" => "Irish",
	"gd" => "Scots / Gaelic",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebrew",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croatian",
	"hu" => "Hungarian",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "Indonesian",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
	//"in" => "Indonesian",
	"is" => "Icelandic",
	"it" => "Italian",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "Japanese",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanese",
	"ka" => "Georgian",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "Kannada",
	"ko" => "Korean",
	"ks" => "Kashmiri",
	"ku" => "Kurdish",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Laothian",
	"lt" => "Lithuanian",
	"lv" => "Latvian/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "Mongolian",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltese",
	"my" => "Burmese",
	"na" => "Nauru",
	"ne" => "Nepali",
	"nl" => "Dutch",
	"no" => "Norwegian",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polish",
	"ps" => "Pashto / Pushto",
	"pt" => "Portuguese",
	"pt_br" => 'Brazilian Portuguese',
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Romanian",
	"ru" => "Russian",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "Slovak",
	"sl" => "Slovenian",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanian",
	"sr" => "Serbian",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "Swedish",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turkish",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukrainian",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamese",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "中文",
	"zu" => "Zulu",
);
