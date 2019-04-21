<?php
return array(

	/**
	 * Menu items and titles
	 */
	'item:object:bookmarks' => '书签',
	'collection:object:bookmarks' => '书签',
	'collection:object:bookmarks:group' => '小组书签',
	'collection:object:bookmarks:all' => "全部书签",
	'collection:object:bookmarks:owner' => "%s'的书签",
	'collection:object:bookmarks:friends' => "好友的书签",
	'add:object:bookmarks' => "添加书签",
	'edit:object:bookmarks' => "编辑书签",
	'bookmarks:this' => "将此页加入书签",
	'bookmarks:this:group' => "添加书签于%s",
	'bookmarks:bookmarklet' => "书签列",
	'bookmarks:bookmarklet:group' => "小组书签列",
	'bookmarks:address' => "书签地址",
	'bookmarks:none' => '没有书签',

	'bookmarks:notify:summary' => '新书签 %s',
	'bookmarks:notify:subject' => '新书签: %s',
	'bookmarks:notify:body' =>
'%s 添加了新书签: %s

地址: %s

%s

查看并评论该书签:
%s
',

	'bookmarks:numbertodisplay' => '要显示的书签个数',

	'river:object:bookmarks:create' => '%s添加%s到书签',
	'river:object:bookmarks:comment' => '%s评论了书签%s',
	'groups:tool:bookmarks' => '开启小组书签',
	
	/**
	 * Widget and bookmarklet
	 */
	'widgets:bookmarks:name' => '书签',	
	'bookmarks:widget:description' => "显示你最近的书签",

	'bookmarks:bookmarklet:description' =>
			"书签小工具是你添加到浏览器链接栏的一种特殊按钮，可以让你将在网络上发现的资源保存到你的书签里，也可以与朋友分享想要设置书签小工具，将下面的按钮拖动到你的浏览器链接栏",

	'bookmarks:bookmarklet:descriptionie' =>
			"如果你使用IE浏览器，你需要右击书签小工具图标，选择'添加到收藏'，然后选择链接栏",

	'bookmarks:bookmarklet:description:conclusion' =>
			"然后你可以在任何时候点击该按钮将任何正在访问的网页添加到书签",

	/**
	 * Status messages
	 */

	'bookmarks:save:success' => "项目成功添加到书签",
	'bookmarks:delete:success' => "书签已删除",

	/**
	 * Error messages
	 */

	'bookmarks:save:failed' => "书签无法保存请确认正确输入了标题和地址后再尝试",
	'bookmarks:unknown_bookmark' => '无法找到特定的书签',
);
