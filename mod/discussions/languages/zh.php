<?php

return array(
	'discussion' => '讨论',
	'discussion:add' => '添加讨论主题',
	'discussion:latest' => '最新讨论',
	'discussion:group' => '小组讨论',
	'discussion:none' => '暂无讨论',
	'discussion:reply:title' => '%s回复',
	'discussion:new' => "添加讨论帖",
	'discussion:updated' => "%s最后回复%s",

	'discussion:topic:created' => '讨论主题已经创建',
	'discussion:topic:updated' => '讨论主题已经更新',
	'discussion:topic:deleted' => '讨论主题已被删除',

	'discussion:topic:notfound' => '讨论主题未被发现',
	'discussion:error:notsaved' => '不能保存主题',
	'discussion:error:missing' => '标题和内容为必填',
	'discussion:error:permissions' => '你无权采取这种行动',
	'discussion:error:notdeleted' => '无法删除讨论主题',

	'discussion:reply:edit' => '编辑回复',
	'discussion:reply:deleted' => '讨论主题已被删除',
	'discussion:reply:error:notfound' => '讨论主题未被发现',
	'discussion:reply:error:notfound_fallback' => "对不起, 我们未能发现指定回复，将引导你打原帖",
	'discussion:reply:error:notdeleted' => '无法删除讨论回复',

	'discussion:search:title' => '回复主题: %s',

	/**
	 * Action messages
	 */
	'discussion:reply:missing' => '不能发布空白回复',
	'discussion:reply:topic_not_found' => '讨论主题未被发现',
	'discussion:reply:error:cannot_edit' => '你无权编辑回复',

	/**
	 * River
	 */
	'river:create:object:discussion' => '%s添加新的主题%s',
	'river:reply:object:discussion' => '%s回复讨论主题 %s',
	'river:reply:view' => '查看回复',

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
	'item:object:discussion_reply' => "讨论回复",

	'groups:enableforum' => '开启小组讨论',

	'reply:this' => '回复',

	/**
	 * ecml
	 */
	'discussion:ecml:discussion' => '小组讨论',

	/**
	 * Discussion status
	 */
	'discussion:topic:status' => '主题状态',
	'discussion:topic:closed:title' => '主题已经关闭',
	'discussion:topic:closed:desc' => '主题已经关闭，不在接受新的评论',

	'discussion:replies' => '回复',
	'discussion:addtopic' => '添加主题',
	'discussion:post:success' => '你的回复已经成功发布',
	'discussion:post:failure' => '发布你的回复时遇到问题',
	'discussion:topic:edit' => '编辑主题',
	'discussion:topic:description' => '主题内容',

	'discussion:reply:edited' => "你已经成功编辑论坛帖子",
	'discussion:reply:error' => "编辑论坛帖子遇到问题",
);
