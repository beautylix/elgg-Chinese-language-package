<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(

	/**
	 * Menu items and titles
	 */
	'add:group:group' => "创建新小组",
	
	'groups' => "小组",
	'groups:owned' => "我创建的小组",
	'groups:owned:user' => '%s创建的小组',
	'groups:yours' => "我的小组",
	'groups:user' => "%s的小组",
	'groups:all' => "全部小组",
	'groups:add' => "创建新小组",
	'groups:edit' => "编辑小组",
	'groups:edit:profile' => "概览",
	'groups:edit:access' => "访问",
	'groups:edit:tools' => "工具",
	'groups:edit:settings' => "设置",
	'groups:membershiprequests' => '加入申请',
	'groups:membershiprequests:pending' => '加入申请(%s)',
	'groups:invitedmembers' => "管理邀请",
	'groups:invitations' => '小组邀请',
	'groups:invitations:pending' => '小组邀请(%s)',
	
	'relationship:invited' => '%2$s受邀加入%1$s',
	'relationship:membership_request' => '%s申请加入%s',

	'groups:icon' => '小组图标(留空不做改变)',
	'groups:name' => '小组名称',
	'groups:description' => '描述',
	'groups:briefdescription' => '简要描述',
	'groups:interests' => '标签',
	'groups:website' => '页面',
	'groups:members' => '小组成员',

	'groups:members_count' => '%s个成员',

	'groups:members:title' => '%s的成员',
	'groups:members:more' => "查看全部成员",
	'groups:membership' => "小组成员",
	'groups:content_access_mode' => "小组内容可达性",
	'groups:content_access_mode:warning' => "警告: 改变此设置不影响先前内容的访问权限.",
	'groups:content_access_mode:unrestricted' => "不限 - 能否访问取决于内容的设置",
	'groups:content_access_mode:membersonly' => "仅限成员 - 非成员不能访问",
	'groups:access' => "访问权限",
	'groups:owner' => "创建者",
	'groups:owner:warning' => "警告: 如果你改变了这个值，你将不在是本小组的创建者.",
	'groups:widget:num_display' => '小组个数',
	'widgets:a_users_groups:name' => '小组成员',
	'widgets:a_users_groups:description' => '在你的概览页面显示你所在的小组名称',

	'groups:noaccess' => '不能访问小组',
	'groups:cantcreate' => '只有管理员能创建小组.',
	'groups:cantedit' => '你不能编辑本小组',
	'groups:saved' => '小组已被保存',
	'groups:save_error' => '小组不能保存',
	'groups:featured' => '特色小组',
	'groups:makeunfeatured' => '取消特色称号',
	'groups:makefeatured' => '标记为特色小组',
	'groups:featuredon' => '%s现在是一个特色小组.',
	'groups:unfeatured' => '%s不再是特色小组.',
	'groups:featured_error' => '无效小组.',
	'groups:nofeatured' => '无特色小组',
	'groups:joinrequest' => '成员请求',
	'groups:join' => '加入小组',
	'groups:leave' => '离开小组',
	'groups:invite' => '邀请好友',
	'groups:invite:title' => '邀请好友加入本小组',
	'groups:invite:friends:help' => '通过姓名或者用户名搜索一个好友，从列表中选出',
	'groups:invite:resend' => '重新发送邀请到已经受邀的用户',
	'groups:invite:member' => '已是本小组成员',
	'groups:invite:invited' => '已受邀加入本小组',

	'groups:nofriendsatall' => '你尚未邀请好友!',
	'groups:group' => "小组",
	'groups:search:title' => "用'%s'搜索小组",
	'groups:search:none' => "未发现匹配的小组",
	'groups:search_in_group' => "小组内搜索",
	'groups:acl' => "小组: %s",
	'groups:acl:in_context' => '小组成员',

	'groups:notfound' => "小组不存在",
	
	'groups:requests:none' => '尚无加入申请.',

	'groups:invitations:none' => '尚无邀请.',

	'groups:open' => "开放小组",
	'groups:closed' => "封闭小组",
	'groups:member' => "成员",
	'groups:search' => "搜索小组",

	'groups:more' => '更多小组',
	'groups:none' => '尚无小组',

	/**
	 * Access
	 */
	'groups:access:private' => '封闭小组 - 只接受受邀用户',
	'groups:access:public' => '开放小组 - 任何用户能加入',
	'groups:access:group' => '仅限小组成员',
	'groups:closedgroup' => "本小组是一个封闭小组.",
	'groups:closedgroup:request' => '点击“加入申请”菜单申请加入本小组.',
	'groups:closedgroup:membersonly' => "本小组的内容仅限小组成员访问.",
	'groups:opengroup:membersonly' => "本小组内容仅限成员访问.",
	'groups:opengroup:membersonly:join' => '点击“加入小组”菜单申请加入本小组.',
	'groups:visibility' => '谁能查看本小组?',
	'groups:content_default_access' => '默认小组内容访问权限',
	'groups:content_default_access:help' => '你能在此处为本小组的内容配置默认访问权限.',
	'groups:content_default_access:not_configured' => '尚无默认访问权限，权限交由用户自己决定',

	/**
	 * Group tools
	 */

	'admin:groups' => '小组',

	'groups:notitle' => '小组必须有标题',
	'groups:cantjoin' => '不能加入本小组',
	'groups:cantleave' => '不能离开本小组',
	'groups:removeuser' => '删除小组成员',
	'groups:cantremove' => '不能删除本小组成员',
	'groups:removed' => '已将%s从本小组删除',
	'groups:addedtogroup' => '已将此用户加入本小组',
	'groups:joinrequestnotmade' => '不能申请加入本小组',
	'groups:joinrequestmade' => '已经申请加入本小组',
	'groups:joinrequest:exists' => '你已经申请加入本小组',
	'groups:button:joined' => '加入者',
	'groups:button:owned' => '创建者',
	'groups:joined' => '成功加入本小组!',
	'groups:left' => '成功离开本小组',
	'groups:userinvited' => '用户已被邀请.',
	'groups:usernotinvited' => '用户不能被邀请.',
	'groups:useralreadyinvited' => '用户已被邀请',
	'groups:invite:subject' => "%s，你已被邀请加入 %s!",
	'groups:joinrequest:remove:check' => '你确定要去除这个加入申请吗?',
	'groups:invite:remove:check' => '你确定要去除这个邀请?',
	'groups:invite:body' => "%s邀请你加入'%s'小组.

点击下面查看邀请:
%s",

	'groups:welcome:subject' => "欢迎来到%s小组!",
	'groups:welcome:body' => "你已是'%s'小组的一员.

点击下面开始发帖!
%s",

	'groups:request:subject' => "%s已经申请加入%s",
	'groups:request:body' => "%s已经申请加入'%s'小组.

点击下面查看他们的概览:
%s

或者点击下面查看本小组的加入申请:
%s",

	'river:group:create' => '%s创建了%s小组',
	'river:group:join' => '%s加入了%s小组',

	'groups:allowhiddengroups' => '允许私密(不可见)小组?',
	'groups:whocancreate' => '谁能创建新小组?',

	/**
	 * Action messages
	 */

	'groups:invitekilled' => '邀请已被删除.',
	'groups:joinrequestkilled' => '加入申请已被删除.',
	'groups:error:addedtogroup' => "不能添加%s到本小组",
	'groups:add:alreadymember' => "%s已经是本小组成员",
	
	// Notification settings
	'groups:usersettings:notification:group_join:description' => "新成员加入时的默认通知设置",
	
	'groups:usersettings:notifications:title' => '小组通知',
	'groups:usersettings:notifications:description' => '如果你想接收你所在小组新成员加入的通知，请选择你偏好的通知方式.',
);
