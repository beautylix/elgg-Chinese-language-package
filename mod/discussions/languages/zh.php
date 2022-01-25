<?php

return array(
	'item:object:discussion' => "讨论主题",
	'add:object:discussion' => '添加讨论主题',
	'edit:object:discussion' => '编辑主题',
	'collection:object:discussion' => '讨论主题',
	'collection:object:discussion:group' => '小组讨论',
	'collection:object:discussion:my_groups' => '我的小组的讨论',
	'notification:object:discussion:create' => "有讨论时发送通知",
	'notifications:mute:object:discussion' => "关于'%s'讨论",
	
	'discussion:settings:enable_global_discussions' => '开启全局讨论',
	'discussion:settings:enable_global_discussions:help' => '运行在小组外创建讨论',
	
	'discussion:latest' => '最新讨论',
	'discussion:none' => '没有讨论',
	'discussion:updated' => "%s最后回复%s",

	'discussion:topic:created' => '讨论主题已经创建',
	'discussion:topic:updated' => '讨论主题已经更新',
	'entity:delete:object:discussion:success' => '讨论主题已被删除.',

	'discussion:topic:notfound' => '讨论主题未被发现',
	'discussion:error:notsaved' => '不能保存主题',
	'discussion:error:missing' => '标题和内容为必填',
	'discussion:error:permissions' => '你无权采取这种行动',
	'discussion:error:no_groups' => "你不是任何小组的成员.",


	/**
	 * River
	 */
	'river:object:discussion:create' => '%s添加了新的讨论主题%s',
	'river:object:discussion:comment' => '%s评论了讨论主题%s',
	


	/**
	 * Notifications
	 */
	'discussion:topic:notify:summary' => '新讨论主题名称：%s',
	'discussion:topic:notify:subject' => '新讨论主题: %s',
	'discussion:topic:notify:body' =>
'%s 添加了新的讨论主题 "%s":

%s

查看并且回复此讨论主题:
%s
',

	'discussion:reply:notify:summary' => '主题新回复: %s',
	'discussion:reply:notify:subject' => '主题新回复: %s',
	'discussion:reply:notify:body' =>
'%s 回复了讨论主题 "%s":

%s

查看并且回复此讨论主题:
%s
',


	'item:object:discussion' => "讨论主题",
	'collection:object:discussion' => '讨论主题',

	'groups:tool:forum' => '开启小组讨论',

	/**
	 * Discussion status
	 */
	'discussion:topic:status' => '主题状态',
	'discussion:topic:closed:title' => '本讨论已关闭.',
	'discussion:topic:closed:desc' => '本讨论已关闭，不再接收新的评论.',

	'discussion:topic:description' => '主题信息',
	'discussion:topic:toggle_status:open' => '本讨论主题已经成功开放',
	'discussion:topic:toggle_status:open:confirm' => '确定要重新开放本主题?',
	'discussion:topic:toggle_status:closed' => '本讨论主题已成功关闭',
	'discussion:topic:toggle_status:closed:confirm' => '确定要关闭本主题?',
);
