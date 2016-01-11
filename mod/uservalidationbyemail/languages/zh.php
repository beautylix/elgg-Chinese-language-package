<?php
return array(
	'admin:users:unvalidated' => '尚未验证',
	
	'email:validate:subject' => "%s 请为%s确认邮件地址!",
	'email:validate:body' => "%s,

开始使用%s之前, 你必须确认邮件地址

请点击下面的连接确认邮件地址:

%s

如果你不能点击这个连接，请手动复制粘贴到浏览器

%s
%s
",
	'email:confirm:success' => "你已经确认了你的邮件地址!",
	'email:confirm:fail' => "你的邮件地址不能被验证",

	'uservalidationbyemail:emailsent' => "邮件已经送到 <em>%s</em>",
	'uservalidationbyemail:registerok' => "请点击我们送给你的连接，确认你的邮件地址，激活你的账户",
	'uservalidationbyemail:login:fail' => "你的账户尚未被验证，所以登陆失败，另一份验证邮件已经发到你的邮箱",

	'uservalidationbyemail:admin:no_unvalidated_users' => '没有非验证用户',

	'uservalidationbyemail:admin:unvalidated' => '尚未验证',
	'uservalidationbyemail:admin:user_created' => '注册 %s',
	'uservalidationbyemail:admin:resend_validation' => '重新发送验证邮件',
	'uservalidationbyemail:admin:validate' => '验证',
	'uservalidationbyemail:confirm_validate_user' => '验证 %s?',
	'uservalidationbyemail:confirm_resend_validation' => '重新发送验证邮件到 %s?',
	'uservalidationbyemail:confirm_delete' => '删除 %s?',
	'uservalidationbyemail:confirm_validate_checked' => '验证勾选的用户?',
	'uservalidationbyemail:confirm_resend_validation_checked' => '重新发送验证邮件到勾选的用户?',
	'uservalidationbyemail:confirm_delete_checked' => '删除勾选的用户?',
	
	'uservalidationbyemail:errors:unknown_users' => '未知用户',
	'uservalidationbyemail:errors:could_not_validate_user' => '不能验证用户',
	'uservalidationbyemail:errors:could_not_validate_users' => '不能验证全部勾选的用户',
	'uservalidationbyemail:errors:could_not_delete_user' => '不能删除用户',
	'uservalidationbyemail:errors:could_not_delete_users' => '不能删除全部勾选的用户',
	'uservalidationbyemail:errors:could_not_resend_validation' => '不能重新发送验证请求',
	'uservalidationbyemail:errors:could_not_resend_validations' => '不能重新发送全部验证请求到勾选的用户',

	'uservalidationbyemail:messages:validated_user' => '验证的用户',
	'uservalidationbyemail:messages:validated_users' => '全部勾选的用户验证完成',
	'uservalidationbyemail:messages:deleted_user' => '删除的用户',
	'uservalidationbyemail:messages:deleted_users' => '全部勾选的用户已被删除',
	'uservalidationbyemail:messages:resent_validation' => '验证请求已经重新发送',
	'uservalidationbyemail:messages:resent_validations' => '验证请求重新发送到所有勾选的用户'

);
