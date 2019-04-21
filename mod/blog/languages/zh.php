<?php
return array(
	'item:object:blog' => '文章',
	'collection:object:blog' => '文章',
	'collection:object:blog:all' => '全部文章',
	'collection:object:blog:owner' => '%s\'的文章',
	'collection:object:blog:group' => '小组文章',
	'collection:object:blog:friends' => '好友的文章',
	'add:object:blog' => '添加文章',
	'edit:object:blog' => '编辑文章',
	'blog:revisions' => '修订',
	'blog:archives' => '归档',
	'groups:tool:blog' => '开启小组文章',
	'blog:write' => '撰写文章',

	// Editing
	'blog:excerpt' => '摘录',
	'blog:body' => '正文',
	'blog:save_status' => '最后保存',
	
	'blog:revision' => '修订',
	'blog:auto_saved_revision' => '自动保存修订',

	// messages
	'blog:message:saved' => '文章已保存。',
	'blog:error:cannot_save' => '无法保存文章。',
	'blog:error:cannot_auto_save' => '无法自动保存文章。',
	'blog:error:cannot_write_to_container' => '权限不够将文章保存到小组。',
	'blog:messages:warning:draft' => '此文章草稿未保存！',
	'blog:edit_revision_notice' => '(旧版本)',
	'blog:message:deleted_post' => '文章已删除。',
	'blog:error:cannot_delete_post' => '无法删除文章。',
	'blog:none' => '没有文章',
	'blog:error:missing:title' => '请输入文章标题！',
	'blog:error:missing:description' => '请输入文章正文！',
	'blog:error:cannot_edit_post' => '文章不存在或你没有权限编辑它。',
	'blog:error:post_not_found' => '无法找到该文章。',
	'blog:error:revision_not_found' => '无法找到该修订版本。',

	// river
	'river:create:object:blog' => '%s 发表了一篇文章 %s',
	'river:comment:object:blog' => '%s 评论了文章 %s',

	// notifications
	'blog:notify:summary' => '新文章 %s',
	'blog:notify:subject' => '新文章: %s',
	'blog:notify:body' =>
'
%s 发表了一篇新的文章: %s

%s

查看并评论文章:
%s
',

	// widget
	'widgets:blog:name' => '文章',
	'widgets:blog:description' => '显示你的最新文章',
	'blog:moreblogs' => '更多文章',
	'blog:numbertodisplay' => '需要显示的文章数量',
);
