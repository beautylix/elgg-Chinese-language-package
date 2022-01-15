<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
/**
 * Sites
 */

	'item:site:site' => '页面',
	'collection:site:site' => '页面',
	'index:content' => '<p>欢迎来到你的Elgg页面.</p><p><strong>提示:</strong> 许多页面使用<code>活动</code>插件来显示网站活动.</p>',

/**
 * Sessions
 */

	'login' => "登录",
	'loginok' => "你已登录.",
	'login:empty' => "需要用户名/电邮和密码.",
	'login:baduser' => "不能装载你的账户页面.",
	'auth:nopams' => "内部错误，尚未安装用户认证方法.",

	'logout' => "退出",
	'logoutok' => "你已退出.",
	'logouterror' => "不能退出，请重试.",
	'session_expired' => "你的会话已过期. 请<a href='javascript:location.reload(true)'>重载</a> 页面进行登录.",
	'session_changed_user' => "你已用另外一个用户名登录，请<a href='javascript:location.reload(true)'>重载reload</a>本页.",

	'loggedinrequired' => "本页仅限登录用户查看.",
	'loggedoutrequired' => "本页仅限未登录用户查看.",
	'adminrequired' => "本页仅限管理员查看.",
	'membershiprequired' => "本页仅限本小组成员查看.",
	'limited_access' => "你无权查看本页.",
	'invalid_request_signature' => "你访问的页面的URL无效或者已过期",

/**
 * Errors
 */

	'exception:title' => "致命错误.",
	'exception:contact_admin' => '一个不可恢复的错误已经发生并且被记录，请将如下信息告知网站管理员:',

	'actionnotfound' => "针对%s的操作文件未发现.",
	'actionunauthorized' => '你无权进行此操作',

	'ajax:error' => '调用AJAX时发生错误. 可能无法连接到服务器.',
	'ajax:not_is_xhr' => '你无法直接访问AJAX视图',
	'ajax:pagination:no_data' => '尚无新的页面数据',
	'ajax:pagination:load_more' => '装载更多',

	'ElggEntity:Error:SetSubtype' => '用%s代替"亚型"',
	'ElggEntity:Error:SetEnabled' => '用%s代替"已开启"',
	'ElggUser:Error:SetAdmin' => '用%s代替"管理员"',
	'ElggUser:Error:SetBanned' => '用%s代替"被禁止"',

	'PluginException:CannotStart' => '%s (guid: %s)不能开始，已停止工作.  原因: %s',
	'PluginException:InvalidID' => "%s是一个无效的插件ID.",
	'PluginException:InvalidPath' => "%s是一个无效的插件路径.",
	'PluginException:PluginMustBeActive' => "需要启用'%s'插件.",
	'PluginException:PluginMustBeAfter' => "需要放在'%s'插件之后.",
	'PluginException:PluginMustBeBefore' => "需要放在'%s'插件之前.",
	'ElggPlugin:MissingID' => '插件ID(guid %s)已丢失',
	'ElggPlugin:NoPluginComposer' => '插件ID %s (guid %s)的composer.json已丢失',
	'ElggPlugin:StartFound' => '在插件ID %s中发现了start.php文件. 这是一个不支持的插件版本.',
	'ElggPlugin:IdMismatch' => '为了匹配插件在composer.json中设定的项目名称，插件路径必须重新命名成为"%s".',
	'ElggPlugin:Error' => '插件错误',
	'ElggPlugin:Exception:CannotIncludeFile' => '不能包含%s到插件%s (guid: %s) 在 %s.',
	'ElggPlugin:Exception:IncludeFileThrew' => '包含%s到插件%s (guid: %s) 在 %s 出现抛出异常.',
	'ElggPlugin:Exception:CannotRegisterViews' => '不能打开视图路径到插件%s (guid: %s) 在 %s.',
	'ElggPlugin:InvalidAndDeactivated' => '%s是一个无效插件，无法正常工作.',
	'ElggPlugin:activate:BadConfigFormat' => '插件文件"elgg-plugin.php"不能返回一个序列数组.',
	'ElggPlugin:activate:ConfigSentOutput' => '插件文件"elgg-plugin.php"送出了输出.',

	'ElggPlugin:Dependencies:ActiveDependent' => '其他插件将%s作为依赖. 禁用本插件之前先禁用下面的插件: %s',
	'ElggPlugin:Dependencies:MustBeActive' => '必须是启用的',
	'ElggPlugin:Dependencies:Position' => '位置',

	'ElggMenuBuilder:Trees:NoParents' => '本菜单无母菜单',
	'ElggMenuBuilder:Trees:OrphanedChild' => '菜单[%s]已从母菜单[%s]丢失',
	'ElggMenuBuilder:Trees:DuplicateChild' => '菜单[%s]出现重复注册',

	'RegistrationException:EmptyPassword' => '密码字段不能为空',
	'RegistrationException:PasswordMismatch' => '密码必须相匹配',
	'LoginException:BannedUser' => '你已被禁止，不能登录',
	'LoginException:UsernameFailure' => '不能登录. 请检查用户名/电邮和密码.',
	'LoginException:PasswordFailure' => '不能登录. 请检查用户名/电邮和密码.',
	'LoginException:AccountLocked' => '由于多次失败登录，你的账户已被锁定.',
	'LoginException:ChangePasswordFailure' => '当前密码检查失败.',
	'LoginException:Unknown' => '由于未知错误，不能登录.',
	'LoginException:AdminValidationPending' => "在使用你的账户之前需要得到管理员的确认，一旦确认，你将收到通知.",
	'LoginException:DisabledUser' => "你的账户已被禁用. 你不允许登录.",

	'UserFetchFailureException' => '不能检查user_guid [%s]的用户权限，因为此用户不存在.',

	'PageNotFoundException' => '你访问的页面不存在或者你没有权限查看此页面',
	'EntityNotFoundException' => '你访问的内容已被删除或者你没有权限查看.',
	'EntityPermissionsException' => '你无权执行此操作.',
	'GatekeeperException' => '你无权访问此页面',
	'BadRequestException' => '错误请求',
	'ValidationException' => '提交的数据无法满足要求, 请检查等你的输入.',
	'LogicException:InterfaceNotImplemented' => '%s必须实现%s',
	
	'Security:InvalidPasswordCharacterRequirementsException' => "密码不能满足字符串要求",
	'Security:InvalidPasswordLengthException' => "密码至少%s个字符",
	
	'Entity:Subscriptions:InvalidMethodsException' => '%s 需要 $methods是一个字符串或者字符串数组',

	'viewfailure' => '在%s视图中有内部错误',
	'changebookmark' => '为此页改变书签',
	'error:missing_data' => '许多数据已经丢失',
	'save:fail' => '保存数据失败',
	'save:success' => '你的数据已经保存',

	'error:default:title' => '哎哟...',
	'error:default:content' => '哎哟... 出错了.',
	'error:400:title' => '错误请求',
	'error:400:content' => '请求无效或者不完整.',
	'error:403:title' => '被禁止',
	'error:403:content' => '你不允许访问此页.',
	'error:404:title' => '页面不存在',
	'error:404:content' => '不能发现你访问的页面.',

	'upload:error:ini_size' => '你上传的文件太大.',
	'upload:error:form_size' => '你上传的文件太大.',
	'upload:error:partial' => '上传未完成.',
	'upload:error:no_file' => '尚未选定文件.',
	'upload:error:no_tmp_dir' => '不能保存上传的文件.',
	'upload:error:cant_write' => '不能保存上传的文件.',
	'upload:error:extension' => '不能保存上传的文件.',
	'upload:error:unknown' => '文件上传失败.',

/**
 * Table columns
 */
	'table_columns:fromView:admin' => '管理员',
	'table_columns:fromView:banned' => '被禁止',
	'table_columns:fromView:container' => '容器',
	'table_columns:fromView:excerpt' => '描述',
	'table_columns:fromView:link' => '标题',
	'table_columns:fromView:icon' => '图标',
	'table_columns:fromView:item' => '项目',
	'table_columns:fromView:language' => '语言',
	'table_columns:fromView:owner' => '创建者',
	'table_columns:fromView:time_created' => '创建时间',
	'table_columns:fromView:time_updated' => '更新时间',
	'table_columns:fromView:user' => '用户',

	'table_columns:fromProperty:description' => '描述',
	'table_columns:fromProperty:email' => '电邮',
	'table_columns:fromProperty:name' => '姓名',
	'table_columns:fromProperty:type' => '类型',
	'table_columns:fromProperty:username' => '用户名',

	'table_columns:fromMethod:getSubtype' => '亚型',
	'table_columns:fromMethod:getDisplayName' => '标题',
	'table_columns:fromMethod:getMimeType' => 'MIME类型',
	'table_columns:fromMethod:getSimpleType' => '类型',

/**
 * User details
 */

	'name' => "显示名",
	'email' => "电邮地址",
	'username' => "用户名",
	'loginusername' => "用户名或电邮",
	'password' => "密码",
	'passwordagain' => "密码 (再次输入进行验证)",
	'admin_option' => "让此用户成为管理员?",
	'autogen_password_option' => "自动生成安全密码?",

/**
 * Access
 */

	'access:label:private' => "私有",
	'access:label:logged_in' => "仅限登录用户",
	'access:label:public' => "公开",
	'access:label:logged_out' => "仅限非登录用户",
	'access:label:friends' => "好友",
	'access' => "谁能查看",
	'access:limited:label' => "无限",
	'access:help' => "访问级别",
	'access:read' => "读访问",
	'access:write' => "写访问",
	'access:admin_only' => "仅管理员",
	
/**
 * Dashboard and widgets
 */

	'dashboard' => "控制面板",
	'dashboard:nowidgets' => "控制面板让你跟踪网页的内容和活动.",

	'widgets:add' => '添加小工具',
	'widgets:add:description' => "点击下面的小工具按钮添加到本页.",
	'widget:unavailable' => '你已添加本小工具',
	'widget:numbertodisplay' => '显示项目数量',

	'widget:delete' => '去除%s',
	'widget:edit' => '定制本小工具',

	'widgets' => "小工具",
	'widget' => "小工具",
	'item:object:widget' => "小工具",
	'collection:object:widget' => '小工具',
	'widgets:save:success' => "成功保存小工具.",
	'widgets:save:failure' => "不能保存小工具.",
	'widgets:add:success' => "成功添加小工具.",
	'widgets:add:failure' => "不能添加小工具.",
	'widgets:move:failure' => "不能开辟新的小工具位置.",
	'widgets:remove:failure' => "不能去除此小工具",
	'widgets:not_configured' => "此小工具尚未配置",
	
/**
 * Groups
 */

	'group' => "小组",
	'item:group' => "小组",
	'collection:group' => '小组',
	'item:group:group' => "小组",
	'collection:group:group' => '小组',
	'groups:tool_gatekeeper' => "本小组尚未开启此功能",

/**
 * Users
 */

	'user' => "用户",
	'item:user' => "用户",
	'collection:user' => '用户',
	'item:user:user' => '用户',
	'collection:user:user' => '用户',
	'notification:user:user:make_admin' => "当用户收到管理员权力的时候发送一个通知",
	'notification:user:user:remove_admin' => "当用户的管理员权力被吊销后发送一个通知",
	'notification:user:user:unban' => "当用户被禁止时发送一个通知",

	'friends' => "好友",
	'collection:friends' => '好友的%s',

	'avatar' => '头像',
	'avatar:noaccess' => "你不允许编辑此用户的头像",
	'avatar:create' => '创建头像',
	'avatar:edit' => '编辑头像',
	'avatar:upload' => '上传新的头像',
	'avatar:current' => '当前头像',
	'avatar:remove' => '去除你的头像，设置默认图标',
	'avatar:crop:title' => '头像裁剪工具',
	'avatar:upload:instructions' => "你的头像显示在整个网站，你可以随时更改，支持的图片格式是GIF、JPG和PNG",
	'avatar:create:instructions' => '点击和拖拽方形框裁剪你的头像. 图像框的右边为预览. 当满意时, 点击“创建头像”.',
	'avatar:upload:success' => '头像已经成功上传',
	'avatar:upload:fail' => '头像上传失败',
	'avatar:resize:fail' => '头像裁剪失败',
	'avatar:crop:success' => '头像裁剪成功',
	'avatar:crop:fail' => '头像裁剪失败',
	'avatar:remove:success' => '去除头像成功',
	'avatar:remove:fail' => '去除头像失败',
	
	'action:user:validate:already' => "%s已被确认",
	'action:user:validate:success' => "%s已被确认",
	'action:user:validate:error' => "确认%s时发生了错误",

/**
 * Feeds
 */
	'feed:rss' => 'RSS',
	'feed:rss:title' => 'RSS订阅',
/**
 * Links
 */
	'link:view' => '查看连接',
	'link:view:all' => '查看全部',


/**
 * River
 */
	'river' => "河流",
	'river:user:friend' => "%s和%s是好友",
	'river:update:user:avatar' => '%s更新了头像',
	'river:noaccess' => '你无权查看.',
	'river:posted:generic' => '%s发布了',
	'riveritem:single:user' => '一个用户',
	'riveritem:plural:user' => '许多用户',
	'river:ingroup' => '在%s小组',
	'river:none' => '尚无活动',
	'river:update' => '%s更新',
	'river:delete' => '去除活动项目',
	'river:delete:success' => '活动项目已被删除d',
	'river:delete:fail' => '活动项目不能被删除',
	'river:delete:lack_permission' => '你无权删除活动项目',
	'river:subject:invalid_subject' => '无效用户',
	'activity:owner' => '活动',

/**
 * Relationships
 */
	
	'relationship:default' => "%s和%s相关",

/**
 * Notifications
 */
	'notification:method:email' => '电邮',
	'notification:method:email:from' => '%s (经由%s)',
	'notification:method:delayed_email' => '延迟的电邮',
	
	'usersettings:notifications:title' => "通知设置",
	'usersettings:notifications:users:title' => '通知每个用户',
	'usersettings:notifications:users:description' => '为了在当好友创建内容时通知你，从下面选择你喜好的通知方式.',
	
	'usersettings:notifications:menu:page' => "通知设置",
	'usersettings:notifications:menu:filter:settings' => "设置",
	
	'usersettings:notifications:default:description' => '系统默认通知设置',
	'usersettings:notifications:content_create:description' => '默认内容通知设置，当别人回复你的内容时，你可以得到通知',
	'usersettings:notifications:create_comment:description' => "默认评论通知设置，当你评论后，可以收到更多的评论通知",

	'usersettings:notifications:timed_muting' => "临时禁用通知",
	'usersettings:notifications:timed_muting:help' => "如果你在特定时间内（比如假期）不想接收通知，可以设置一个开始时间和结束时间，临时禁用通知",
	'usersettings:notifications:timed_muting:start' => "开始日期",
	'usersettings:notifications:timed_muting:end' => "结束时间",
	'usersettings:notifications:timed_muting:warning' => "当前你的通知已被临时禁用",
	
	'usersettings:notifications:save:ok' => "通知设置已经成功保存.",
	'usersettings:notifications:save:fail' => "保存通知设置时遇到了问题.",
	
	'usersettings:notifications:subscriptions:save:ok' => "通知订阅已经成功保存.",
	'usersettings:notifications:subscriptions:save:fail' => "保存通知订阅时遇到了问题.",

	'notification:default:salutation' => '尊敬的%s,',
	'notification:default:sign-off' => '此致,

%s',
	'notification:subject' => '关于%s的通知',
	'notification:body' => '在%s查看新的活动',
	
	'notifications:delayed_email:subject:daily' => "每日通知",
	'notifications:delayed_email:subject:weekly' => "每周通知",
	'notifications:delayed_email:body:intro' => "下面是你的延迟通知的列表.",
	
	'notifications:subscriptions:record:settings' => '显示详细选项',
	'notifications:subscriptions:no_results' => '尚无订阅记录',
	'notifications:subscriptions:details:reset' => '取消选择',

	'notifications:mute:title' => "静音通知",
	'notifications:mute:description' => "如果你因为如下原因不再希望收到通知，可以阻止:",
	'notifications:mute:error:content' => "尚无通知设置被确定",
	'notifications:mute:entity' => "关于'%s'",
	'notifications:mute:container' => "来自'%s'",
	'notifications:mute:owner' => "发自'%s'",
	'notifications:mute:actor' => "由'%s'发起",
	'notifications:mute:group' => "写于'%s'小组",
	'notifications:mute:user' => "由'%s'撰写",
	
	'notifications:mute:save:success' => "你的通知设置已经保存",
	
	'notifications:mute:email:footer' => "静音全部电邮",

/**
 * Search
 */

	'search' => "搜索",
	'searchtitle' => "搜索: %s",
	'users:searchtitle' => "搜索用户: %s",
	'groups:searchtitle' => "搜索小组: %s",
	'advancedsearchtitle' => "%s有和%s匹配的结果",
	'notfound' => "尚无结果.",

	'viewtype:change' => "改变列表类型",
	'viewtype:list' => "列表模式",
	'viewtype:gallery' => "网格模式",
	'search:go' => '搜索',
	'userpicker:only_friends' => '仅限好友',

/**
 * Account
 */

	'account' => "账户",
	'settings' => "设置",
	'tools' => "工具",
	'settings:edit' => '编辑设置',

	'register' => "注册",
	'registerok' => "你已经成功注册为%s.",
	'registerbad' => "由于未知原因，你未注册成功.",
	'registerdisabled' => "注册已被管理员禁用",
	'register:fields' => '全部字段均为必填',

	'registration:noname' => '显示名为必填.',
	'registration:notemail' => '你提供的电邮地址不是有效的电邮地址.',
	'registration:userexists' => '用户名已经存在',
	'registration:usernametooshort' => '你的用户名必须至少%u个字符',
	'registration:usernametoolong' => '你的用户名太长了，最长为%u个字符.',
	'registration:dupeemail' => '此邮件地址已被注册.',
	'registration:invalidchars' => '抱歉，你的用户名保护无效字符%s，下面的字符是无效的: %s',
	'registration:emailnotvalid' => '抱歉，你输入的电邮地址是无效的',
	'registration:passwordnotvalid' => '抱歉，你输入的密码无效',
	'registration:usernamenotvalid' => '抱歉，你输入的用户名无效',

	'adduser' => "添加用户",
	'adduser:ok' => "你已经成功添加了一个新用户.",
	'adduser:bad' => "此新用户不能被创建.",

	'user:set:name' => "账户名设置",
	'user:name:label' => "显示名",
	'user:name:success' => "成功修改了显示名.",
	'user:name:fail' => "不能修改显示名.",
	'user:username:success' => "成功修改了用户名.",
	'user:username:fail' => "不能修改用户名.",

	'user:set:password' => "账户密码",
	'user:current_password:label' => '输入当前密码',
	'user:password:label' => "输入新密码",
	'user:password2:label' => "再次输入新密码",
	'user:password:success' => "密码修改成功",
	'user:password:fail' => "不能修改你的密码.",
	'user:password:fail:notsame' => "这两个密码不相同!",
	'user:password:fail:tooshort' => "密码太短!",
	'user:password:fail:incorrect_current_password' => '输入的当前密码不正确.',
	'user:changepassword:unknown_user' => '无效用户.',
	'user:changepassword:change_password_confirm' => '将更改你的密码.',

	'user:set:language' => "语言设置",
	'user:language:label' => "语言",
	'user:language:success' => "语言设置已经更新.",
	'user:language:fail' => "语言设置不能保存.",

	'user:username:notfound' => '用户名%s未发现.',
	'user:username:help' => '请注意，更改用户名将改变用户相关的全部动态链接',

	'user:password:lost' => '密码丢失',
	'user:password:hash_missing' => '非常遗憾，我们必须让你复位密码.',
	'user:password:changereq:success' => '成功申请了一个新密码，电邮已经发出',
	'user:password:changereq:fail' => '不能申请新密码.',

	'user:password:text' => '想申请新密码，请输入你的用户名或者电邮，然后点击申请按钮.',

	'user:persistent' => '记住我',

	'walled_garden:home' => '首页',

/**
 * Password requirements
 */
	'password:requirements:min_length' => "密码至少需要%s个字符.",
	'password:requirements:lower' => "密码需要至少%s个小写字母.",
	'password:requirements:no_lower' => "密码不应该包含任何小写字母.",
	'password:requirements:upper' => "密码需要至少%s个大写字母.",
	'password:requirements:no_upper' => "密码不应该包含任何大写字母.",
	'password:requirements:number' => "密码需要至少%s个数字符号.",
	'password:requirements:no_number' => "密码不应该包含任何数字符号.",
	'password:requirements:special' => "密码需要至少%s个特殊字符.",
	'password:requirements:no_special' => "密码不应该包含任何特殊字符.",
	
/**
 * Administration
 */
	'menu:page:header:administer' => '管理员',
	'menu:page:header:configure' => '配置',
	'menu:page:header:develop' => '开发',
	'menu:page:header:information' => '信息',
	'menu:page:header:default' => '其他',

	'admin:view_site' => '查看页面',
	'admin:loggedin' => '已经作为%s登入',
	'admin:menu' => '菜单',

	'admin:configuration:success' => "你的设置已经保存.",
	'admin:configuration:fail' => "你的设置不能保存.",
	'admin:configuration:dataroot:relative_path' => '不能设置"%s"为数据根目录，因为它不是一个绝对路径.',
	'admin:configuration:default_limit' => '每页项目数至少为1.',

	'admin:unknown_section' => '无效管理选择.',

	'admin' => "管理",
	'admin:header:release' => "Elgg发行: %s",
	'admin:description' => "管理面板允许你全面控制系统, 包括用户管理和插件启停. 从下面选择一个开始吧.",

	'admin:performance' => '性能',
	'admin:performance:label:generic' => '通用',
	'admin:performance:generic:description' => '下面是一个性能建议值的列表，能帮助你改善服务器性能',
	'admin:performance:simplecache' => '简单缓存',
	'admin:performance:simplecache:settings:warning' => "推荐你在settings.php里配置简单缓存的值. 配置简单缓存可以改善缓存性能.当服务器缓存了Javascript和CSS后，Elgg将跳过数据库访问",
	'admin:performance:systemcache' => '系统缓存',
	'admin:performance:apache:mod_cache' => 'Apache mod_cache',
	'admin:performance:apache:mod_cache:warning' => 'mod_cache模块能提供HTTP感知缓存方案，根据指令缓存文件，指令指定一页中多长的内容是新鲜的.',
	'admin:performance:php:open_basedir' => 'PHP open_basedir',
	'admin:performance:php:open_basedir:not_configured' => '尚未设置限定',
	'admin:performance:php:open_basedir:warning' => '少量open_basedir限定已经生效, 这将影响性能.',
	'admin:performance:php:open_basedir:error' => '大量open_basedir限定已经生效，可能影响性能.',
	'admin:performance:php:open_basedir:generic' => '有了open_basedir后，每一个文件访问将检查限定列表. Elgg有许多文件访问，这将导致负面影响。而且PHP opcache不再缓存文件路径到存储器，每一次访问都将解析.',
	
	'admin:statistics' => '统计',
	'admin:server' => '服务器',
	'admin:cron' => 'Cron',
	'admin:cron:record' => '最新的Cron工作',
	'admin:cron:period' => 'Cron周期',
	'admin:cron:friendly' => '最后完成',
	'admin:cron:date' => '日期与时间',
	'admin:cron:msg' => '信息',
	'admin:cron:started' => '"%s"的Cron开始于%s',
	'admin:cron:started:actual' => 'Cron间隔"%s"开始处理于%s',
	'admin:cron:complete' => '"%s"的Cron完成于%s',

	'admin:appearance' => '外观',
	'admin:administer_utilities' => '实用程序',
	'admin:develop_utilities' => '实用程序',
	'admin:configure_utilities' => '实用程序',
	'admin:configure_utilities:robots' => 'Robots.txt',

	'admin:users' => "用户",
	'admin:users:online' => '当前在线',
	'admin:users:newest' => '最新',
	'admin:users:admins' => '管理员',
	'admin:users:searchuser' => '搜索用户，设置为管理员',
	'admin:users:existingadmins' => '管理员列表',
	'admin:users:add' => '添加新用户',
	'admin:users:description' => "管理面板允许你控制用户设置. 从下面选择一个开始吧.",
	'admin:users:adduser:label' => "点击此处添加新用户...",
	'admin:users:opt:linktext' => "配置用户...",
	'admin:users:opt:description' => "配置用户和账户信息. ",
	'admin:users:find' => '发现',
	'admin:users:unvalidated' => '尚未验证',
	'admin:users:unvalidated:no_results' => '无尚未验证的用户.',
	'admin:users:unvalidated:registered' => '已经注册: %s',
	'admin:users:unvalidated:change_email' => '修改电邮地址',
	'admin:users:unvalidated:change_email:user' => '为%s修改电邮地址',
	
	'admin:configure_utilities:maintenance' => '维护模式',
	'admin:upgrades' => '升级',
	'admin:upgrades:finished' => '完成',
	'admin:upgrades:db' => '数据库升级',
	'admin:upgrades:db:name' => '升级名称',
	'admin:upgrades:db:start_time' => '开始时间',
	'admin:upgrades:db:end_time' => '结束时间',
	'admin:upgrades:db:duration' => '持续时间',
	'admin:upgrades:menu:pending' => '等待升级',
	'admin:upgrades:menu:completed' => '升级完成',
	'admin:upgrades:menu:db' => '数据库升级',
	'admin:upgrades:menu:run_single' => '运行升级',
	'admin:upgrades:run' => '立即运行升级',
	'admin:upgrades:error:invalid_upgrade' => '实体%s不存在或者不是一个有效的实例',
	'admin:upgrades:error:invalid_batch' => '%s (%s)升级的批量运作不能例化',
	'admin:upgrades:completed' => '"%s"升级完成于%s',
	'admin:upgrades:completed:errors' => '"%s"升级完成于%s但遭遇了%s错误',
	'admin:upgrades:failed' => '"%s"升级失败',
	'admin:action:upgrade:reset:success' => '"%s"升级已复位',

	'admin:settings' => '设置',
	'admin:settings:basic' => '基本设置',
	'admin:settings:i18n' => '国际化',
	'admin:settings:advanced' => '高级设置',
	'admin:settings:users' => '用户',
	'admin:site_settings' => "页面设置",
	'admin:site:description' => "管理面板运行你控制全局设置. 从下面选择一个开始吧.",
	'admin:site:opt:linktext' => "配置页面...",
	'admin:settings:in_settings_file' => '此设置在settings.php中配置',

	'site_secret:current_strength' => '关键强度',
	'site_secret:strength:weak' => "弱",
	'site_secret:strength_msg:weak' => "强烈推荐你重新生成你的页面秘密.",
	'site_secret:strength:moderate' => "中等",
	'site_secret:strength_msg:moderate' => "为了网站安全，推荐你重新生成页面秘密.",
	'site_secret:strength:strong' => "强",
	'site_secret:strength_msg:strong' => "你的页面秘密足够强壮，无需重新生成.",

	'admin:dashboard' => '控制面板',
	'admin:widget:online_users' => '在线用户',
	'admin:widget:online_users:help' => '列出当前在线的用户',
	'admin:widget:new_users' => '新用户',
	'admin:widget:new_users:help' => '列出最新用户',
	'admin:widget:banned_users' => '被禁用户',
	'admin:widget:banned_users:help' => '列出被禁用户',
	'admin:widget:content_stats' => '内容统计',
	'admin:widget:content_stats:help' => '跟踪用户创建的内容',
	'admin:widget:cron_status' => 'Cron状态',
	'admin:widget:cron_status:help' => '显示上次Cron完成的状态',
	'admin:statistics:numentities' => '内容统计',
	'admin:statistics:numentities:type' => '内容类型',
	'admin:statistics:numentities:number' => '数量',
	'admin:statistics:numentities:searchable' => '可搜索实体',
	'admin:statistics:numentities:other' => '其他实体',

	'admin:widget:admin_welcome' => '欢迎',
	'admin:widget:admin_welcome:help' => "管理区简短描述",
	'admin:widget:admin_welcome:intro' => '欢迎来到管理面板，你可以跟踪页面上发生的一切.',

	'admin:widget:admin_welcome:registration' => "新用户注册已被禁用，你能在%s页面开启.",
	'admin:widget:admin_welcome:admin_overview' => "管理区的导航由右边的菜单提供，主要分为三个部分:
	<dl>
		<dt>管理</dt><dd>基本任务，像管理用户、监控被报告的内容、和启用插件.</dd>
		<dt>配置</dt><dd>偶尔任务，像设置页面名称和配置插件.</dd>
		<dt>信息</dt><dd>关于网站的信息，比如统计.</dd>
		<dt>开发</dt><dd>针对开发插件和设计主题的开发人员. (需要开发员插件.)</dd>
	</dl>",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />感谢使用Elgg，通过底部的连接获取更多资源!',

	'admin:widget:control_panel' => '控制面板',
	'admin:widget:control_panel:help' => "提供常见控制的捷径",

	'admin:cache:flush' => '清除缓存',
	'admin:cache:flushed' => "网站缓存已清除",
	'admin:cache:invalidate' => '清除缓存',
	'admin:cache:invalidated' => "网站缓存已清除",
	'admin:cache:clear' => '清除缓存',
	'admin:cache:cleared' => "网站缓存已清除",
	'admin:cache:purge' => '清除缓存',
	'admin:cache:purged' => "网站缓存已清除",

	'admin:footer:faq' => '管理问答',
	'admin:footer:manual' => '管理手册',
	'admin:footer:community_forums' => 'Elgg社区论坛',
	'admin:footer:blog' => 'Elgg文章',

	'admin:plugins:category:all' => '全部插件',
	'admin:plugins:category:active' => '已启用的插件',
	'admin:plugins:category:inactive' => '未启用的插件',
	'admin:plugins:category:admin' => '管理',
	'admin:plugins:category:bundled' => '捆绑',
	'admin:plugins:category:nonbundled' => '非捆绑',
	'admin:plugins:category:content' => '内容',
	'admin:plugins:category:development' => '开发',
	'admin:plugins:category:enhancement' => '增强',
	'admin:plugins:category:api' => '服务/API',
	'admin:plugins:category:communication' => '通信',
	'admin:plugins:category:security' => '安全与垃圾内容',
	'admin:plugins:category:social' => '社交',
	'admin:plugins:category:multimedia' => '多媒体',
	'admin:plugins:category:theme' => '主题',
	'admin:plugins:category:widget' => '小工具',
	'admin:plugins:category:utility' => '实用工具',

	'admin:plugins:markdown:unknown_plugin' => '未知插件.',
	'admin:plugins:markdown:unknown_file' => '未知文件.',

	'admin:notices:delete_all' => '删除%s的全部通知',
	'admin:notices:could_not_delete' => '不能删除通知.',
	'item:object:admin_notice' => '管理通知',
	'collection:object:admin_notice' => '管理通知',

	'admin:options' => '管理选项',

	'admin:security' => '安全',
	'admin:security:information' => '信息',
	'admin:security:information:description' => '在此页面，你能发现一些安全推荐.',
	'admin:security:information:https' => '此网站被HTTPS保护？',
	'admin:security:information:https:warning' => "推荐使用HTTPS保护网站，可以帮助保护数据免被嗅探.",
	'admin:security:information:wwwroot' => '网站的主要文件夹是可写的',
	'admin:security:information:wwwroot:error' => "推荐将安装文件夹设置为不可写，恶意访客可能会放置一些恶性代码到你的网站.",
	'admin:security:information:validate_input' => '输入验证',
	'admin:security:information:validate_input:error' => "许多插件禁用了输入验证，这将允许用户提交有害内容",
	'admin:security:information:password_length' => '最小密码长度',
	'admin:security:information:password_length:warning' => "推荐最小密码长度为6个字符.",
	'admin:security:information:username_length' => '最小用户名长度',
	'admin:security:information:username_length:warning' => "推荐最小用户名长度为4个字符.",
	'admin:security:information:php:session_gc' => "PHP session清除",
	'admin:security:information:php:session_gc:chance' => "清除机会: %s%%",
	'admin:security:information:php:session_gc:lifetime' => "Session有效期为%s秒",
	'admin:security:information:php:session_gc:error' => "推荐在你的PHP设置中设置'session.gc_probability'和'session.gc_divisor', 这将从你的数据库清除过期的session，不允许用户使用老的session.",
	'admin:security:information:htaccess:hardening' => ".htaccess文件访问强化",
	'admin:security:information:htaccess:hardening:help' => ".htaccess文件阻止部分内容访问可以提高安全性.",
	
	'admin:security:settings' => '设置',
	'admin:security:settings:description' => '这一页你能配置许多安全特色，请认真阅读这些设置.',
	'admin:security:settings:label:hardening' => '强化',
	'admin:security:settings:label:account' => '账户',
	'admin:security:settings:label:notifications' => '通知',
	'admin:security:settings:label:site_secret' => '页面秘密',
	
	'admin:security:settings:notify_admins' => '当管理员加入或者退出时通知所有管理员',
	'admin:security:settings:notify_admins:help' => '有管理员加入或者退出时发送通知给全体管理员.',
	
	'admin:security:settings:notify_user_admin' => '当管理员角色变化时通知当事人',
	'admin:security:settings:notify_user_admin:help' => '当管理员角色变化时当事人将收到通知.',
	
	'admin:security:settings:notify_user_ban' => '当用户的账户被禁或者解禁时通知当事人',
	'admin:security:settings:notify_user_ban:help' => '用户的账户被禁或者解禁将收到通知.',
	
	'admin:security:settings:notify_user_password' => '用户修改密码时通知当事人',
	'admin:security:settings:notify_user_password:help' => '用户修改密码时会收到通知.',
	
	'admin:security:settings:protect_upgrade' => '保护upgrade.php',
	'admin:security:settings:protect_upgrade:help' => '为了保护upgrade.php，仅限管理员或者有合法token的用户能操作.',
	'admin:security:settings:protect_upgrade:token' => '为了让非登录用户或者非管理员使用upgrade.php，可以使用下面的URL:',
	
	'admin:security:settings:protect_cron' => '保护Cron URLs',
	'admin:security:settings:protect_cron:help' => '持有有效token方能运行Cron.',
	'admin:security:settings:protect_cron:token' => '为了使用cron，请使用下面的token，请注意每个时段的token是变化的.',
	'admin:security:settings:protect_cron:toggle' => '显示/隐藏Cron URLs',
	
	'admin:security:settings:disable_password_autocomplete' => '禁用自动完成密码字段',
	'admin:security:settings:disable_password_autocomplete:help' => '这些字段的数据将被浏览器缓存. 攻击者访问受害人的浏览器能偷盗这些信息. 对于共享电脑，比如网吧或者机场终端，来说特别重要。如果你禁用这个，密码管理工具不能自动填充此字段. 自动完成属性能支持特定的浏览器.',
	
	'admin:security:settings:email_require_password' => '修改电邮需要输入密码',
	'admin:security:settings:email_require_password:help' => '当用户希望改变电邮地址时, 要求他们提供当前密码.',
	
	'admin:security:settings:email_require_confirmation' => '修改电邮地址需要确认',
	'admin:security:settings:email_require_confirmation:help' => '新电邮地址生效之前需要确认. 成功修改后，老邮件地址将收到通知.',

	'admin:security:settings:session_bound_entity_icons' => 'Session绑定的实体图标',
	'admin:security:settings:session_bound_entity_icons:help' => '默认情况下实体图标和session绑定，意味着产生额URL保护当前session的信息.
图标session绑定使得图标的URL不能在session自己共享. 副作用是这些URL的缓存只帮助当前session.',
	
	'admin:security:settings:site_secret:intro' => 'Elgg使用密钥为不同目的创造安全标记.',
	'admin:security:settings:site_secret:regenerate' => "重新生成页面秘密",
	'admin:security:settings:site_secret:regenerate:help' => "注意: 重新生成秘密将使”记住我“cookies、电邮验证、和邀请码等失效，将对使用这些功能的用户造成不便.",
	
	'admin:security:settings:minusername' => "最小用户名长度",
	'admin:security:settings:minusername:help' => "用户名的最小字符数",
	
	'admin:security:settings:min_password_length' => "最小密码长度",
	'admin:security:settings:min_password_length:help' => "密码的最小字符数",
	
	'admin:security:settings:min_password_lower' => "密码中小写字母的最低个数",
	'admin:security:settings:min_password_lower:help' => "配置密码中小写字母(a-z)的最低个数. 0代表完全不需要, 留空代表无要求.",
	
	'admin:security:settings:min_password_upper' => "密码中大写字母的最低个数",
	'admin:security:settings:min_password_upper:help' => "配置密码中大写字母(A-Z)的最低个数. 0代表完全不需要, 留空代表无要求",
	
	'admin:security:settings:min_password_number' => "密码的最小数字数",
	'admin:security:settings:min_password_number:help' => "配置密码中数字(0-9)的最低个数. 0代表完全不需要, 留空代表无要求.",
	
	'admin:security:settings:min_password_special' => "密码中的特殊字符的最低个数",
	'admin:security:settings:min_password_special:help' => "配置密码中特殊符号(!@$%^&*()<>,.?/[]{}-=_+)的最低个数，0代表完全不需要, 留空代表无要求.",
	
	'admin:site:secret:regenerated' => "网站秘密已经重新生成",
	'admin:site:secret:prevented' => "网站秘密重新生成已被阻止",
	
	'admin:notification:make_admin:admin:subject' => '新的网站管理员已经加入%s',
	'admin:notification:make_admin:admin:body' => '%s任命%s为%s的网站管理员.

点击此处查看新管理员的个人资料:
%s',
	
	'admin:notification:make_admin:user:subject' => '你已成为%s的管理员',
	'admin:notification:make_admin:user:body' => '%s任命你为%s的管理员.

点击此处访问页面:
%s',
	'admin:notification:remove_admin:admin:subject' => '一个管理员已从%s退出',
	'admin:notification:remove_admin:admin:body' => '%s让%s退出了%s的管理.

点击此处查看老管理员的个人资料:
%s',
	
	'admin:notification:remove_admin:user:subject' => '你已退出对%s的管理',
	'admin:notification:remove_admin:user:body' => '%s 让你退出了对%s的管理.

点击此处访问页面:
%s',
	'user:notification:ban:subject' => '你在%s的账户已被禁用',
	'user:notification:ban:body' => '你在%s的账户已被禁用.

点击此处访问页面:
%s',
	
	'user:notification:unban:subject' => '你在%s的账户不再被禁',
	'user:notification:unban:body' => '你在%s的账户不再被禁，你能再次使用此网站.

点击此处访问页面:
%s',
	
	'user:notification:password_change:subject' => '你的密码已被修改!',
	'user:notification:password_change:body' => "你在'%s'的密码已被修改! 如果是你自己设置，你的设置已经完成.

如果你没有修改，请通过此处复位你的密码:
%s

或者联系网站管理员:
%s",
	
	'admin:notification:unvalidated_users:subject' => "%s上的用户正在等待核准",
	'admin:notification:unvalidated_users:body' => "%d个'%s'网站的用户正在等待管理员核准.

通过此处查看用户的完整列表:
%s",

/**
 * Plugins
 */

	'plugins:disabled' => '插件未能装载，因为一个名为"disabled"的文件在mod文件夹.',
	'plugins:settings:save:ok' => "%s插件的设置保存成功.",
	'plugins:settings:save:fail' => "保存%s插件的设置时遇到了问题.",
	'plugins:settings:remove:ok' => "%s插件的全部设置已被去除",
	'plugins:settings:remove:fail' => "去除%s插件的全部设置时发生了错误",
	'plugins:usersettings:save:ok' => "%s插件的用户设置成功保存",
	'plugins:usersettings:save:fail' => "保存%s插件的用户设置时发生了错误.",
	
	'item:object:plugin' => '插件',
	'collection:object:plugin' => '插件',
	
	'plugins:settings:remove:menu:text' => "去除全部设置",
	'plugins:settings:remove:menu:confirm' => "真的想将此插件的全部设置去除?",

	'admin:plugins' => "插件",
	'admin:plugins:activate_all' => '启用全部',
	'admin:plugins:deactivate_all' => '停用全部',
	'admin:plugins:activate' => '启用',
	'admin:plugins:deactivate' => '停用',
	'admin:plugins:description' => "管理面板允许你控制和配置安装在本站的工具.",
	'admin:plugins:opt:linktext' => "配置工具...",
	'admin:plugins:opt:description' => "配置安装在本站的工具. ",
	'admin:plugins:label:id' => "ID",
	'admin:plugins:label:name' => "名称",
	'admin:plugins:label:authors' => "作者",
	'admin:plugins:label:copyright' => "版权",
	'admin:plugins:label:categories' => '分类',
	'admin:plugins:label:licence' => "授权",
	'admin:plugins:label:website' => "网址",
	'admin:plugins:label:info' => "信息",
	'admin:plugins:label:files' => "文件",
	'admin:plugins:label:resources' => "资源",
	'admin:plugins:label:screenshots' => "截屏",
	'admin:plugins:label:repository' => "代码",
	'admin:plugins:label:bugtracker' => "报告问题",
	'admin:plugins:label:donate' => "捐助",
	'admin:plugins:label:moreinfo' => '更多信息',
	'admin:plugins:label:version' => '版本',
	'admin:plugins:label:location' => '位置',
	'admin:plugins:label:priority' => '优先级',
	'admin:plugins:label:dependencies' => '依赖',
	'admin:plugins:label:missing_dependency' => '丢失了依赖[%s].',

	'admin:plugins:warning:unmet_dependencies' => '此插件不满足依赖要求，不能被启用，通过更多信息检查依赖.',
	'admin:plugins:warning:invalid' => '插件无效: %s',
	'admin:plugins:warning:invalid:check_docs' => '用<a href="http://learn.elgg.org/en/stable/appendix/faqs.html">Elgg文档</a>来帮助解决问题.',
	'admin:plugins:cannot_activate' => '不能启用',
	'admin:plugins:cannot_deactivate' => '不能停用',
	'admin:plugins:already:active' => '选定的插件已经启用.',
	'admin:plugins:already:inactive' => '选定的插件已经停用.',

	'admin:plugins:set_priority:yes' => "重新排序了%s.",
	'admin:plugins:set_priority:no' => "不能重新排序%s.",
	'admin:plugins:deactivate:yes' => "停用了%s.",
	'admin:plugins:deactivate:no' => "不能停用%s.",
	'admin:plugins:deactivate:no_with_msg' => "不能停用%s. 错误: %s",
	'admin:plugins:activate:yes' => "启用了%s.",
	'admin:plugins:activate:no' => "不能启用%s.",
	'admin:plugins:activate:no_with_msg' => "不能启用%s. 错误: %s",
	'admin:plugins:categories:all' => '全部分类',
	'admin:plugins:plugin_website' => '插件网站',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => '版本%s',
	'admin:plugin_settings' => '插件设置',
	'admin:plugins:warning:unmet_dependencies_active' => '此插件已启用，但不满足依赖要求，可能出现问题. 通过更多信息查看依赖.',

	'admin:statistics:description' => "网站统计预览. 如果你需要详细的统计数据, 需要专业管理功能.",
	'admin:statistics:opt:description' => "查看网站上用户相关的统计信息.",
	'admin:statistics:opt:linktext' => "查看统计...",
	'admin:statistics:label:user' => "用户统计",
	'admin:statistics:label:numentities' => "网站实体",
	'admin:statistics:label:numusers' => "用户数",
	'admin:statistics:label:numonline' => "在线用户数",
	'admin:statistics:label:onlineusers' => "当前在线用户",
	'admin:statistics:label:admins'=>"管理",
	'admin:statistics:label:version' => "Elgg版本",
	'admin:statistics:label:version:release' => "发行",
	'admin:statistics:label:version:version' => "数据库版本",
	'admin:statistics:label:version:code' => "代码版本",

	'admin:server:label:elgg' => 'Elgg',
	'admin:server:label:requirements' => '要求',
	'admin:server:label:php' => 'PHP',
	'admin:server:label:phpinfo' => '显示PHP信息',
	'admin:server:label:web_server' => '网站服务器',
	'admin:server:label:server' => '服务器',
	'admin:server:label:log_location' => '记录位置',
	'admin:server:label:php_version' => 'PHP版本',
	'admin:server:label:php_version:required' => 'Elgg最低要求是PHP 7.1',
	'admin:server:label:php_ini' => 'PHP ini文件位置',
	'admin:server:label:php_log' => 'PHP记录',
	'admin:server:label:mem_avail' => '可用存储',
	'admin:server:label:mem_used' => '已用存储',
	'admin:server:error_log' => "网站服务器错误记录",
	'admin:server:label:post_max_size' => '最大POST容量',
	'admin:server:label:upload_max_filesize' => '最大上传容量',
	'admin:server:warning:post_max_too_small' => '(注意: post_max_size必须大于支持的最大上传容量)',
	'admin:server:label:memcache' => 'Memcache',
	'admin:server:memcache:inactive' => 'Memcache尚未安装或者配置.
为了提升性能，推荐开启并且配置memcache (或者 redis).',

	'admin:server:label:redis' => 'Redis',
	'admin:server:redis:inactive' => 'Redis尚未安装或者配置.
为了提升性能，推荐开启并且配置redis (或者 memcache).',

	'admin:server:label:opcache' => 'OPcache',
	'admin:server:opcache:inactive' => 'OPcache尚未安装或者启用.
为了提升性能，推荐开启并且配置OPcache.',
	
	'admin:server:requirements:php_extension' => "PHP扩展: %s",
	'admin:server:requirements:php_extension:required' => "Elgg的正常运行需要此PHP扩展",
	'admin:server:requirements:php_extension:recommended' => "为了Elgg的性能更佳，推荐启用此PHP扩展",
	'admin:server:requirements:rewrite' => ".htaccess重写规则",
	'admin:server:requirements:rewrite:fail' => "检查.htaccess的重写规则",
	
	'admin:server:requirements:database:server' => "数据库服务器",
	'admin:server:requirements:database:server:required' => "Elgg最低要求MySQL v5.5.3",
	'admin:server:requirements:database:client' => "数据库客户",
	'admin:server:requirements:database:client:required' => "Elgg要求通过pdo_mysql连接服务器数据库",
	
	'admin:user:label:search' => "发现用户:",
	'admin:user:label:searchbutton' => "搜索",

	'admin:user:ban:no' => "不能禁用用户",
	'admin:user:ban:yes' => "用户已被禁用.",
	'admin:user:self:ban:no' => "不能禁用自己",
	'admin:user:unban:no' => "不能解禁用户",
	'admin:user:unban:yes' => "用户已被解禁.",
	'admin:user:delete:no' => "不能删除用户",
	'admin:user:delete:yes' => "用户%s已被删除",
	'admin:user:self:delete:no' => "不能删除自己",

	'admin:user:resetpassword:yes' => "密码复位, 通知已发.",
	'admin:user:resetpassword:no' => "密码不能复位.",

	'admin:user:makeadmin:yes' => "此用户现在是管理员.",
	'admin:user:makeadmin:no' => "不能任命此用户为管理员.",

	'admin:user:removeadmin:yes' => "此用户已不再是管理员.",
	'admin:user:removeadmin:no' => "不能剥夺此用户的管理特权.",
	'admin:user:self:removeadmin:no' => "不能去除自己的管理特权.",

	'admin:configure_utilities:menu_items' => '菜单项目',
	'admin:menu_items:configure' => '配置主菜单项目',
	'admin:menu_items:description' => '选择页面菜单项目的顺序. 未配置的项目将放到列表的尾部.',
	'admin:menu_items:hide_toolbar_entries' => '从工具栏菜单去除项目?',
	'admin:menu_items:saved' => '菜单项目已保存.',
	'admin:add_menu_item' => '添加新的定制菜单项',
	'admin:add_menu_item:description' => '添加定制菜单到导航菜单，填入显示名和URL.',

	'admin:configure_utilities:default_widgets' => '默认小工具',
	'admin:default_widgets:unknown_type' => '未知小工具类型',
	'admin:default_widgets:instructions' => '在默认的小工具页面添加、去除、排位、和配置小工具. 这些改变仅仅影响网站新用户.',

	'admin:robots.txt:instructions' => "编辑网站的robots.txt文件",
	'admin:robots.txt:plugins' => "插件正在加下面的内容到robots.txt文件",
	'admin:robots.txt:subdir' => "此robots.txt文件不能正常工作，因为网站安装在了子目录",
	'admin:robots.txt:physical' => "此robots.txt不能工作，因为已有robots.txt",

	'admin:maintenance_mode:default_message' => '网站维护中',
	'admin:maintenance_mode:instructions' => '维护模式仅用于升级和大型改变，一旦开启，只有管理员能登录和浏览.',
	'admin:maintenance_mode:mode_label' => '维护模式',
	'admin:maintenance_mode:message_label' => '当维护模式开启时显示给用户的信息',
	'admin:maintenance_mode:saved' => '维护模式设置已保存.',
	'admin:maintenance_mode:indicator_menu_item' => '网站处于维护模式中.',
	'admin:login' => '管理员登录',

/**
 * User settings
 */

	'usersettings:description' => "用户设置面板允许你控制全部个人设置, 从用户管理到插件管理. 从下面选择一个开始吧.",

	'usersettings:statistics' => "你的统计",
	'usersettings:statistics:opt:description' => "查看用户相关的统计信息.",
	'usersettings:statistics:opt:linktext' => "账户统计",

	'usersettings:statistics:login_history' => "登录历史",
	'usersettings:statistics:login_history:date' => "日期",
	'usersettings:statistics:login_history:ip' => "IP地址",

	'usersettings:user' => "%s'的设置",
	'usersettings:user:opt:description' => "允许你控制用户设置.",
	'usersettings:user:opt:linktext' => "改变设置",

	'usersettings:plugins' => "工具",
	'usersettings:plugins:opt:description' => "为你的工具配置设置.",
	'usersettings:plugins:opt:linktext' => "配置工具",

	'usersettings:plugins:description' => "此面板允许你为安装的工具控制和配置个人信息.",
	'usersettings:statistics:label:numentities' => "内容",

	'usersettings:statistics:yourdetails' => "细节",
	'usersettings:statistics:label:name' => "全名",
	'usersettings:statistics:label:email' => "电邮",
	'usersettings:statistics:label:membersince' => "加入自从",
	'usersettings:statistics:label:lastlogin' => "最后登录",
	
	'usersettings:delayed_email' => "延迟邮件设置",
	'usersettings:delayed_email:interval' => "配置延迟邮件通知的间隔",
	'usersettings:delayed_email:interval:help' => "间隔内的所有邮件通知将组合成一封邮件发送",

/**
 * Activity river
 */

	'river:all' => '全部活动',
	'river:mine' => '我的活动',
	'river:owner' => '%s的活动',
	'river:friends' => '好友的活动',
	'river:select' => '显示%s',
	'river:comments:more' => '+%u更多',
	'river:comments:all' => '查看%u的全部评论',
	'river:generic_comment' => '在%s %s上的评论',

/**
 * Icons
 */

	'icon:size' => "图标尺寸",
	'icon:size:topbar' => "顶栏",
	'icon:size:tiny' => "特小",
	'icon:size:small' => "小",
	'icon:size:medium' => "中",
	'icon:size:large' => "大",
	'icon:size:master' => "特大",
	
	'entity:edit:icon:crop_messages:generic' => "选定的图片不能满足推荐的维度，可能导致图标的低质量.",
	'entity:edit:icon:crop_messages:width' => "最小宽度最好是%dpx.",
	'entity:edit:icon:crop_messages:height' => "最小高度最好是%dpx.",
	'entity:edit:icon:file:label' => "上传新图标",
	'entity:edit:icon:file:help' => "留空保留当前图标.",
	'entity:edit:icon:remove:label' => "去除图标",

/**
 * Generic action words
 */

	'save' => "保存",
	'save_go' => "保存，然后转到%s",
	'reset' => '复位',
	'publish' => "发布",
	'cancel' => "取消",
	'saving' => "保存 ...",
	'update' => "更新",
	'preview' => "预览",
	'edit' => "编辑",
	'delete' => "删除",
	'accept' => "接受",
	'reject' => "拒绝",
	'decline' => "拒绝",
	'approve' => "核准",
	'activate' => "启用",
	'deactivate' => "停用",
	'disapprove' => "反对",
	'revoke' => "吊销",
	'load' => "装载",
	'upload' => "上传",
	'download' => "下载",
	'ban' => "禁止",
	'unban' => "解禁",
	'banned' => "被禁",
	'enable' => "开启",
	'disable' => "禁用",
	'request' => "申请",
	'complete' => "完成",
	'open' => '打开',
	'close' => '关闭',
	'hide' => '隐藏',
	'show' => '显示',
	'reply' => "回复",
	'more' => '更多',
	'more_info' => '更多信息',
	'comments' => '评论',
	'import' => '导入',
	'export' => '导出',
	'untitled' => '无标题',
	'help' => '帮助',
	'send' => '发送',
	'post' => '发布',
	'submit' => '提交',
	'comment' => '评论',
	'upgrade' => '升级',
	'sort' => '分类',
	'filter' => '过滤',
	'new' => '新',
	'add' => '添加',
	'create' => '创建',
	'remove' => '去除',
	'revert' => '恢复',
	'validate' => '确认',
	'read_more' => '阅读更多',
	'next' => '下一页',
	'previous' => '前一页',
	'older' => '旧贴',
	'newer' => '新帖',
	
	'site' => '页面',
	'activity' => '活动',
	'members' => '成员',
	'menu' => '菜单',
	'item' => '项目',

	'up' => '向上',
	'down' => '向下',
	'top' => '到顶',
	'bottom' => '到底',
	'right' => '向右',
	'left' => '向左',
	'back' => '后退',

	'invite' => "邀请",

	'resetpassword' => "复位密码",
	'changepassword' => "修改密码",
	'makeadmin' => "任命管理员",
	'removeadmin' => "去除管理员",

	'option:yes' => "是",
	'option:no' => "否",

	'unknown' => '未知',
	'never' => '从未',

	'active' => '活跃的',
	'total' => '总数',
	'unvalidated' => '未验证的',
	
	'ok' => '好',
	'any' => '任意',
	'error' => '错误',

	'other' => '其他',
	'options' => '选项',
	'advanced' => '高级',

	'learnmore' => "点击此处查看更多.",
	'unknown_error' => '未知错误',

	'content' => "内容",
	'content:latest' => '最新活动',
	
	'list:out_of_bounds' => "列表中无更多内容.",
	'list:out_of_bounds:link' => "回到列表首页.",

	'link:text' => '查看列表',

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
	'status:unpublished' => '未发布',
	'status:published' => '已发布',
	'status:featured' => '有特色',
	'status:open' => '已开放',
	'status:closed' => '已关闭',
	'status:enabled' => '已开启',
	'status:disabled' => '已禁用',
	'status:unavailable' => '不可用',
	'status:active' => '已启用',
	'status:inactive' => '未启用',

/**
 * Generic sorts
 */

	'sort:newest' => '最新',
	'sort:popular' => '最流行',
	'sort:alpha' => '字母顺序',
	'sort:priority' => '优先',

/**
 * Generic data words
 */

	'title' => "标题",
	'description' => "描述",
	'tags' => "标签",
	'all' => "全部",
	'mine' => "我的",

	'by' => '作者',
	'none' => '无',

	'annotations' => "注释",
	'relationships' => "关系",
	'metadata' => "元数据",
	'tagcloud' => "标签云",

	'on' => '开启',
	'off' => '关闭',

	'number_counter:decimal_separator' => ".",
	'number_counter:thousands_separator' => ",",
	'number_counter:view:thousand' => "%sK",
	'number_counter:view:million' => "%sM",
	'number_counter:view:billion' => "%sB",
	'number_counter:view:trillion' => "%sT",

/**
 * Entity actions
 */

	'edit:this' => '编辑',
	'delete:this' => '删除',
	'comment:this' => '评论',

/**
 * Input / output strings
 */

	'deleteconfirm' => "你真的想删除此项目?",
	'deleteconfirm:plural' => "你真的想删除这些项目?",
	'fileexists' => "一个文件已经上传，如果想替换，从下面选择一个新的",
	'input:file:upload_limit' => '允许的最大文件尺寸为%s',

/**
 * User add
 */

	'useradd:subject' => '账户已创建',
	'useradd:body' => '你在%s的账户已经被创建，请访问:

%s

用下面的账户信息登录：

用户名: %s
密码: %s

一旦登录，我们强烈建议你更改密码.',

/**
 * Messages
 */
	'messages:title:success' => '成功',
	'messages:title:error' => '错误',
	'messages:title:warning' => '警告',
	'messages:title:help' => '帮助',
	'messages:title:notice' => '注意',
	'messages:title:info' => '信息',

/**
 * Time
 */

	'input:date_format' => 'Y-m-d',
	'input:date_format:datepicker' => 'yy-mm-dd', // jQuery UI datepicker format
	'input:time_format' => 'g:ia',

	'friendlytime:justnow' => "刚才",
	'friendlytime:minutes' => "%s分钟前",
	'friendlytime:minutes:singular' => "一分钟前",
	'friendlytime:hours' => "%s小时前",
	'friendlytime:hours:singular' => "一小时前",
	'friendlytime:days' => "%s天前",
	'friendlytime:days:singular' => "昨天",
	'friendlytime:date_format' => 'j F Y @ g:ia',
	'friendlytime:date_format:short' => 'j M Y',

	'friendlytime:future:minutes' => "%s分钟后",
	'friendlytime:future:minutes:singular' => "一分钟后",
	'friendlytime:future:hours' => "%s小时后",
	'friendlytime:future:hours:singular' => "一小时后",
	'friendlytime:future:days' => "%s天后",
	'friendlytime:future:days:singular' => "明天",

	'date:month:01' => '一月 %s',
	'date:month:02' => '二月 %s',
	'date:month:03' => '三月 %s',
	'date:month:04' => '四月 %s',
	'date:month:05' => '五月 %s',
	'date:month:06' => '六月 %s',
	'date:month:07' => '七月 %s',
	'date:month:08' => '八月 %s',
	'date:month:09' => '九月 %s',
	'date:month:10' => '十月 %s',
	'date:month:11' => '十一月 %s',
	'date:month:12' => '十二月 %s',

	'date:month:short:01' => '一月 %s',
	'date:month:short:02' => '二月 %s',
	'date:month:short:03' => '三月 %s',
	'date:month:short:04' => '四月 %s',
	'date:month:short:05' => 'M五月 %s',
	'date:month:short:06' => '六月 %s',
	'date:month:short:07' => '七月 %s',
	'date:month:short:08' => '八月 %s',
	'date:month:short:09' => '九月 %s',
	'date:month:short:10' => '十月 %s',
	'date:month:short:11' => '十一月 %s',
	'date:month:short:12' => '十二月 %s',

	'date:weekday:0' => '星期天',
	'date:weekday:1' => '星期一',
	'date:weekday:2' => '星期二',
	'date:weekday:3' => '星期三',
	'date:weekday:4' => '星期四',
	'date:weekday:5' => '星期五',
	'date:weekday:6' => '星期六',

	'date:weekday:short:0' => '周日',
	'date:weekday:short:1' => '周一',
	'date:weekday:short:2' => '周二',
	'date:weekday:short:3' => '周三',
	'date:weekday:short:4' => '周四',
	'date:weekday:short:5' => '周五',
	'date:weekday:short:6' => '周六',

	'interval:minute' => '每分钟',
	'interval:fiveminute' => '每五分钟',
	'interval:fifteenmin' => '每十五分钟',
	'interval:halfhour' => '每半小时',
	'interval:hourly' => '每小时',
	'interval:daily' => '每天',
	'interval:weekly' => '每周',
	'interval:monthly' => '每月',
	'interval:yearly' => '每年',

/**
 * System settings
 */

	'installation:sitename' => "网站名称:",
	'installation:sitedescription' => "网站的简短描述（可选）:",
	'installation:sitedescription:help' => "仅可见于搜索引擎中.",
	'installation:wwwroot' => "网站URL:",
	'installation:path' => "网站的完整安装路径:",
	'installation:dataroot' => "数据存储的网站路径:",
	'installation:dataroot:warning' => "需要手动创建. 数据路径应该不同于安装路径.",
	'installation:sitepermissions' => "默认访问权限:",
	'installation:language' => "默认语言:",
	'installation:debug' => "控制服务器记录的容量.",
	'installation:debug:label' => "记录级别:",
	'installation:debug:none' => '关闭记录(推荐)',
	'installation:debug:error' => '仅记录关键错误',
	'installation:debug:warning' => '记录错误和警告',
	'installation:debug:notice' => '记录全部错误、警告、和通知',
	'installation:debug:info' => '记录全部',

	// Walled Garden support
	'installation:registration:description' => '如果开启，访客可以创建自己的账户.',
	'installation:registration:label' => '允许访客注册',
	'installation:adminvalidation:description' => '如果开启，新注册用户要求网站管理员手工验证.',
	'installation:adminvalidation:label' => '新用户要求管理员验证',
	'installation:adminvalidation:notification:description' => '如果开启，当有等待的用户验证时管理员将收到通知，管理员能在自己的个人页面禁用通知.',
	'installation:adminvalidation:notification:label' => '通知管理员有等待的用户验证',
	'installation:adminvalidation:notification:direct' => '直接',
	'installation:walled_garden:description' => '如果开启, 未登录访客只能查看标记为公开的内容.',
	'installation:walled_garden:label' => '仅限登录用户',

	'installation:view' => "输入网站的默认视图或者留空(如果怀疑, 默认留空):",

	'installation:siteemail' => "网站电邮地址(用于发送系统电邮):",
	'installation:siteemail:help' => "警告: 不要使用和第三方服务关联的电邮地址, 可能会暴露你和用户的私人数据和安全标记。最好使用专用电邮地址.",
	'installation:default_limit' => "每页默认项目数量",

	'admin:site:access:warning' => "这是用户创建内容时给他们的隐私建议. 修改不会影响内容的访问.",
	'installation:allow_user_default_access:description' => "开启允许用户设置他们自己的隐私建议覆盖系统的建议.",
	'installation:allow_user_default_access:label' => "允许用户自设默认访问权限",

	'installation:simplecache:description' => "简单缓存通过缓存静态内容，包括CSS和JavaScript文件，增强网站性能.",
	'installation:simplecache:label' => "使用简单缓存(推荐)",

	'installation:cache_symlink:description' => "简单缓存路径的符号链接允许服务器对静态视图绕开引擎, 大大提高了性能，减少了服务器负载",
	'installation:cache_symlink:label' => "使用简单缓存符号链接(推荐)",
	'installation:cache_symlink:warning' => "符号链接已经建立. 如果你想去除这个链接，从你的服务器删除",
	'installation:cache_symlink:paths' => '正确配置的符号链接必须链接<i>%s</i>到<i>%s</i>',
	'installation:cache_symlink:error' => "由于系统配置，符号链接不能自动建立. 请参考文档手动建立链接.",

	'installation:minify:description' => "简单缓存也能通过压缩JavaScript和CSS文件改善性能. (要求开启简单缓存.)",
	'installation:minify_js:label' => "压缩JavaScript (推荐)",
	'installation:minify_css:label' => "压缩CSS (推荐)",

	'installation:htaccess:needs_upgrade' => "必须更新你的.htaccess文件(使用install/config/htaccess.dist作为蓝本).",
	'installation:htaccess:localhost:connectionfailed' => "Elgg不能正确链接测试重写规则. 请确认curl正常工作并且没有限制IP地址的本地链接.",

	'installation:systemcache:description' => "系统缓存通过缓存数据和文件减少页面装载时间.",
	'installation:systemcache:label' => "使用系统缓存(推荐)",

	'admin:legend:system' => '系统',
	'admin:legend:caching' => '缓存',
	'admin:legend:content' => '内容',
	'admin:legend:content_access' => '内容访问',
	'admin:legend:site_access' => '网站访问',
	'admin:legend:debug' => '调试记录',
	
	'config:i18n:allowed_languages' => "允许语言",
	'config:i18n:allowed_languages:help' => "用户仅能使用允许语言. 英语和网站语言总是允许的.",
	'config:users:can_change_username' => "允许用户修改用户名",
	'config:users:can_change_username:help' => "如果不允许，仅仅管理员能修改用户的用户名",
	'config:remove_branding:label' => "去除Elgg品牌",
	'config:remove_branding:help' => "页面上大量的链接和logo显示此网站使用Elgg，如果你去除了品牌，请到https://elgg.org/about/supporters捐助",
	'config:disable_rss:label' => "禁用RSS订阅",
	'config:disable_rss:help' => "禁用后将不再有RSS聚合",
	'config:friendly_time_number_of_days:label' => "呈现友好时间的天数",
	'config:friendly_time_number_of_days:help' => "配置友好时间的天数. 超过这个天数后，时间将转为常规日期格式. 设置为0将禁用友好时间格式.",
	'config:content:comment_box_collapses' => "评论框折叠",
	'config:content:comment_box_collapses:help' => "仅用于最新评论靠前",
	'config:content:comments_latest_first' => "最新评论在最前面",
	'config:content:comments_latest_first:help' => "控制评论列表的默认行为. 如果禁用，评论框将移到评论列表的底部",
	'config:content:comments_per_page' => "每页评论数量",
	'config:content:pagination_behaviour' => "默认列表分页行为",
	'config:content:pagination_behaviour:help' => "使用分页时控制列表更新. 个体列表可以覆盖默认行为.",
	'config:content:pagination_behaviour:navigate' => "导航到下一页",
	'config:content:pagination_behaviour:ajax-replace' => "不用重载整页，替换列表数据",
	'config:content:pagination_behaviour:ajax-append' => "附加新的列表数据到列表之前或者之后",
	'config:content:pagination_behaviour:ajax-append-auto' => "附加新的列表数据到列表前或者后(如果在视图，自动完成)",
	'config:email' => "Email",
	'config:email_html_part:label' => "开启HTML邮件",
	'config:email_html_part:help' => "发出的邮件将用HTML模板打包",
	'config:email_html_part_images:label' => "替换电邮图片",
	'config:email_html_part_images:help' => "控制电邮中图片的处理. 如果开启，全部图片将嵌入到电邮中. 不是全部电邮客户支持不同的选项, 请认真测试被选中的选项.",
	'config:email_html_part_images:base64' => "Base64编码",
	'config:email_html_part_images:attach' => "附件",
	'config:delayed_email:label' => "开启延迟邮件通知",
	'config:delayed_email:help' => "让用户在一定周期（每天，每周)一次性收多个邮件的组合",

	'upgrading' => '升级...',
	'upgrade:core' => '安装已经升级.',
	'upgrade:unlock' => '解锁升级',
	'upgrade:unlock:confirm' => "数据库已被其他升级锁定. 同时运行多个升级非常危险. 继续除非你知道没有其他升级正在运行. 解锁?",
	'upgrade:terminated' => '升级已被事件处理器终止',
	'upgrade:locked' => "不能升级. 其他升级正在运行. 访问管理面板清除升级锁定.",
	'upgrade:unlock:success' => "升级解锁成功.",

	'admin:pending_upgrades' => '网站有等待中的升级.',
	'admin:view_upgrades' => '查看等待中的升级.',
	'item:object:elgg_upgrade' => '网站升级',
	'collection:object:elgg_upgrade' => '网站升级',
	'admin:upgrades:none' => '你的网站已经是最新!',

	'upgrade:success_count' => '已经升级:',
	'upgrade:error_count' => '错误: %s',
	'upgrade:finished' => '升级完成',
	'upgrade:finished_with_errors' => '<p>升级完成，但有错误. 刷新页面，再次运行升级.</p></p><br />如果错误仍在, 检查服务器错误记录，查找原因. 你能从<a href="http://community.elgg.org/groups/profile/179063/elgg-technical-support">技术支持小组</a>寻求帮助.</p>',
	'upgrade:should_be_skipped' => '没有项目需要升级',
	'upgrade:count_items' => '%d项目需要升级',
	
	// Strings specific for the database guid columns reply upgrade
	'admin:upgrades:database_guid_columns' => '对齐数据库GUID列',
	
/**
 * Welcome
 */

	'welcome' => "欢迎",
	'welcome:user' => '欢迎%s',

/**
 * Emails
 */

	'email:from' => '发信人',
	'email:to' => '收件人',
	'email:subject' => '主题',
	'email:body' => '电邮内容',

	'email:settings' => "电邮设置",
	'email:address:label' => "电邮地址",
	'email:address:help:confirm' => "电邮地址改变'%s'正在等待中, 请检查收件箱查看指导.",
	'email:address:password' => "密码",
	'email:address:password:help' => "改变电邮地址需要输入密码.",

	'email:save:success' => "新电邮地址已保存.",
	'email:save:fail' => "新电邮地址不能保存.",
	'email:save:fail:password' => "密码不匹配，不能修改电邮地址",

	'friend:newfriend:subject' => "%s已将你作为好友!",
	'friend:newfriend:body' => "%s已将你作为好友!

点击此处查看他们的个人资料:

%s",

	'email:changepassword:subject' => "密码已改变!",
	'email:changepassword:body' => "你的密码已改变.",

	'email:resetpassword:subject' => "密码复位!",
	'email:resetpassword:body' => "你的密码已经复位到: %s",

	'email:changereq:subject' => "修改密码申请.",
	'email:changereq:body' => "某人 (IP地址 %s)已经申请为此账户修改密码.

如果你是申请，点击下面，否则忽略此邮件.

%s",
	
	'account:email:request:success' => "确认后你的新电邮地址将被保存, 检查'%s'的收件箱查看更多指导.",
	'email:request:email:subject' => "请确认你的电邮地址",
	'email:request:email:body' => "你已申请修改'%s'上的电邮地址.
如果你没有申请，请忽略此邮件.

为了确认电邮地址改变，请点击下面的链接:
%s

请注意此链接一小时内有效.",
	
	'account:email:request:error:no_new_email' => "尚无等待的电邮地址修改",
	
	'email:confirm:email:old:subject' => "你的电邮地址已经修改",
	'email:confirm:email:old:body' => "你在'%s'的电邮地址已经修改.
从现在开始，你将收到'%s'的通知.

如果你没有申请修改，请联系网站管理员.
%s",
	
	'email:confirm:email:new:subject' => "你的电邮地址已经修改",
	'email:confirm:email:new:body' => "你在'%s'的电邮地址已被修改.
从现在开始，你将通过这个电邮地址收到通知.

如果你没有申请修改，请联系网站管理员.
%s",

	'account:email:admin:validation_notification' => "当有用户需要管理员验证的时候通知我",
	'account:email:admin:validation_notification:help' => "由于网站设置，新注册的用户需要管理员人工验证. 开启此设置后，可以关闭等待验证的通知.",
	
	'account:validation:pending:title' => "等待的账户验证",
	'account:validation:pending:content' => "你的账户已经成功注册! 但是使用之前需要管理员验证. 验证后你将收到电邮.",
	
	'account:notification:validation:subject' => "你在%s的账户已经验证!",
	'account:notification:validation:body' => "你在'%s'的账户已经验证. 现在你能使用账户了.

点击此处访问网页:
%s",

/**
 * user default access
 */

	'default_access:settings' => "默认访问级别",
	'default_access:label' => "默认访问",
	'user:default_access:success' => "新的默认访问级别已经保存.",
	'user:default_access:failure' => "新的默认访问级别不能保存.",

/**
 * Comments
 */

	'comments:count' => "%s评论",
	'item:object:comment' => '评论',
	'collection:object:comment' => '评论',
	'notification:object:comment:create' => "有评论时发送通知",

	'river:object:default:comment' => '%s评论了%s',

	'generic_comments:add' => "留下评论",
	'generic_comments:edit' => "编辑评论",
	'generic_comments:post' => "发表评论",
	'generic_comments:text' => "评论",
	'generic_comments:latest' => "最新评论",
	'generic_comment:posted' => "评论成功发表.",
	'generic_comment:updated' => "评论成功更新.",
	'entity:delete:object:comment:success' => "评论成功删除.",
	'generic_comment:blank' => "抱歉，保存之前请输入评论内容.",
	'generic_comment:notfound' => "抱歉, 未能发现指定的评论.",
	'generic_comment:failure' => "保存评论时发生意外错误.",
	'generic_comment:none' => '尚无评论',
	'generic_comment:title' => '%s的评论',
	'generic_comment:on' => '%s在%s上',
	'generic_comments:latest:posted' => '发表了',

	'generic_comment:notification:subject' => '回复: %s',
	'generic_comment:notification:owner:summary' => '在%s有新评论',
	'generic_comment:notification:owner:body' => "有新评论，内容是:

%s

点击此处回复或者查看原始内容:
%s",
	
	'generic_comment:notification:user:summary' => '%s上的评论',
	'generic_comment:notification:user:body' => "有新评论. 内容是:

%s

点击此处回复或者查看原始内容:
%s",

/**
 * Entities
 */

	'byline' => '作者%s',
	'byline:ingroup' => '在%s小组',
	
	'entity:delete:item' => '项目',
	'entity:delete:item_not_found' => '项目未发现.',
	'entity:delete:permission_denied' => '你无权删除此项目.',
	'entity:delete:success' => '%s已被删除.',
	'entity:delete:fail' => '%s不能删除.',
	
	'entity:subscribe' => "订阅",
	'entity:subscribe:disabled' => "你的默认通知设置阻止你订阅这些内容",
	'entity:subscribe:success' => "成功订阅%s",
	'entity:subscribe:fail' => "订阅%s时发生了错误",
	
	'entity:unsubscribe' => "退订",
	'entity:unsubscribe:success' => "你已成功退订%s",
	'entity:unsubscribe:fail' => "退订%s时发生了错误",
	
	'entity:mute' => "静音通知",
	'entity:mute:success' => "成功静音%s的通知",
	'entity:mute:fail' => "静音%s的通知时发生了错误",
	
	'entity:unmute' => "取消静音",
	'entity:unmute:success' => "成功对%s的通知取消静音",
	'entity:unmute:fail' => "取消%s的通知静音时发生了错误",

/**
 * Annotations
 */
	
	'annotation:delete:fail' => "去除注释时出错了",
	'annotation:delete:success' => "注释已成功去除",
	
/**
 * Action gatekeeper
 */

	'actiongatekeeper:missingfields' => '表单丢失了 __token 或者 __ts字段',
	'actiongatekeeper:tokeninvalid' => "页面已过期，请重试.",
	'actiongatekeeper:timeerror' => '页面已过期，请刷新.',
	'actiongatekeeper:pluginprevents' => '抱歉，未知原因你的表单无法提交.',
	'actiongatekeeper:uploadexceeded' => '上传文件超出了网站管理员设置的容量限制',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => '联系%s失败. 保存内容可能出错了，请刷新页面.',
	'js:lightbox:current' => "图片%s来自%s",

/**
 * Diagnostics
 */
	'diagnostics:report' => '诊断报告',
	'diagnostics:description' => '下面的诊断报告可能有用. 开发人员可能要求你附送到bug报告.',
	'diagnostics:header' => '========================================================================
网站诊断报告
Generated %s by %s
========================================================================

',
	'diagnostics:report:basic' => '
Elgg Release %s, version %s

------------------------------------------------------------------------',
	'diagnostics:report:php' => '
PHP info:
%s
------------------------------------------------------------------------',
	'diagnostics:report:md5' => '
Installed files and checksums:

%s
------------------------------------------------------------------------',
	'diagnostics:report:globals' => '
Global variables:

%s
------------------------------------------------------------------------',
	
/**
 * Miscellaneous
 */
	'elgg:powered' => "由Elgg助力",
	
/**
 * Cli commands
 */
	'cli:login:error:unknown' => "不能作为%s登录",
	'cli:login:success:log' => "作为%s [guid: %s]登录",
	'cli:response:output' => "回应:",
	'cli:option:as' => "在用户的利益下执行命令",
	'cli:option:language' => "在特定语言下执行命令",
	
	'cli:cache:clear:description' => "清除缓存",
	'cli:cache:invalidate:description' => "清除缓存",
	'cli:cache:purge:description' => "清除缓存",
	
	'cli:cron:description' => "在全部或指点间隔执行cron",
	'cli:cron:option:interval' => "间隔名称(例如，每小时)",
	'cli:cron:option:force' => "即使没有安排，强迫cron运行",
	'cli:cron:option:time' => "cron初始化时间",
	
	'cli:database:seed:description' => "用假实体填充数据库",
	'cli:database:seed:argument:create' => "填充过程中总是创造新的实体",
	'cli:database:seed:option:limit' => "填充实体数量",
	'cli:database:seed:option:image_folder' => "包含填充用图片的本地文件夹路径",
	'cli:database:seed:option:type' => "填充实体类型(%s)",
	'cli:database:seed:option:create_since' => "PHP字符串设置填充实体的下边界创建时间",
	'cli:database:seed:option:create_until' => "PHP字符串设置填充实体的上边界创建时间",
	'cli:database:seed:log:error:faker' => "开发者工具仅用于测试目的. 避免使用.",
	'cli:database:seed:log:error:logged_in' => "数据库填充不应该让登录用户运行",
	
	'cli:database:unseed:description' => "从数据库去除填充的假实体",
	
	'cli:plugins:activate:description' => "启用插件",
	'cli:plugins:activate:option:force' => "停用冲突的插件，启用需要的插件，解决冲突问题",
	'cli:plugins:activate:argument:plugins' => "插件ID已经启用",
	'cli:plugins:activate:progress:start' => "启用插件",
	
	'cli:plugins:deactivate:description' => "停用插件",
	'cli:plugins:deactivate:option:force' => "强迫全部依赖的插件停用",
	'cli:plugins:deactivate:argument:plugins' => "插件ID已经停用",
	'cli:plugins:deactivate:progress:start' => "停用插件",
	
	'cli:plugins:list:description' => "列出本站所有已安装的插件",
	'cli:plugins:list:option:status' => "插件状态( %s )",
	'cli:plugins:list:option:refresh' => "刷新插件列表查看新安装的插件",
	'cli:plugins:list:error:status' => "%s不是有效状态. 允许的选项是: %s",
	
	'cli:simpletest:description' => "运行简单测试包(已弃用)",
	'cli:simpletest:option:config' => "网站bootstrap的设置文件路径",
	'cli:simpletest:option:plugins' => "测试目的的插件列表或者'全部'用以启用全部插件",
	'cli:simpletest:option:filter' => "仅运行满足过滤模型的测试",
	'cli:simpletest:error:class' => "必须使用'%s'安装Elgg应用",
	'cli:simpletest:error:file' => "%s不是一个有效的简单测试类",
	'cli:simpletest:output:summary' => "时间: %.2f 秒, 存储: %.2fMb",
	
	'cli:upgrade:description' => "运行系统升级",
	'cli:upgrade:option:force' => "强迫升级运行即使另一个升级正在运行.",
	'cli:upgrade:argument:async' => "执行等待的异步升级",
	'cli:upgrade:system:upgraded' => "系统升级已经执行",
	'cli:upgrade:system:failed' => "系统升级已经失败",
	'cli:upgrade:async:upgraded' => "异步升级已经执行",
	'cli:upgrade:aysnc:failed' => "异步升级已经失败",
	
	'cli:upgrade:batch:description' => "执行一个或者多个升级",
	'cli:upgrade:batch:argument:upgrades' => "一个或者多个升级等待执行",
	'cli:upgrade:batch:option:force' => "运行升级即使先前已经完成",
	'cli:upgrade:batch:finished' => "运行升级完成",
	'cli:upgrade:batch:notfound' => "没有发现%s的升级类",

	'cli:upgrade:list:description' => "列出系统的全部升级",
	'cli:upgrade:list:completed' => "已完成的升级",
	'cli:upgrade:list:pending' => "等待中的升级",
	'cli:upgrade:list:notfound' => "未发现升级",
	
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
	"eu_es" => "Basque (Spain)",
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
	"pt_br" => "Portuguese (Brazil)",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Romanian",
	"ro_ro" => "Romanian (Romania)",
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
	"sr_latin" => "Serbian (Latin)",
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
	"zh" => "Chinese",
	"zh_hans" => "Chinese Simplified",
	"zu" => "Zulu",

	"field:required" => '必填',


);
