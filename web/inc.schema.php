<?php

return array(
	'tables' => array(
		'buildings' => array(
			'building_id' => array('pk' => true, 'unsigned' => true),
			'building_name' => array('null' => false),
		),
		'users' => array(
			'user_id' => array('pk' => true, 'unsigned' => true),
			'email' => array('null' => false),
		),
		'building_users' => array(
			'user_id' => array('unsigned' => true),
			'building_id' => array('unsigned' => true),
			'role' => array('unsigned' => true, 'references' => array('user_roles', 'user_role_id')),
		),
		'user_roles' => array(
			'user_role_id' => array('pk' => true, 'unsigned' => true),
			'user_role_name' => array('null' => false),
		),
		'following_user_roles' => array(
			'user_id' => array('pk' => true, 'unsigned' => true),
			'user_role_id' => array('pk' => true, 'unsigned' => true),
		),
		'news_types' => array(
			'news_type_id' => array('pk' => true, 'unsigned' => true),
			'news_type_code' => array('null' => false),
			'news_type_name' => array('null' => false),
		),
		'following_news_types' => array(
			'user_id' => array('pk' => true, 'unsigned' => true),
			'news_type_id' => array('pk' => true, 'unsigned' => true),
		),
	),
	'indexes' => array(
		'building_users' => array(
			array('columns' => array('user_id', 'building_id'), 'unique' => true),
		),
		'following_user_roles' => array(
			array('columns' => array('user_id', 'building_id'), 'unique' => true),
		),
		'following_news_types' => array(
			array('columns' => array('user_id', 'news_type_id'), 'unique' => true),
		),
	),
	'data' => array(
		'user_roles' => array(
			array('user_role_name' => 'admin'),
			array('user_role_name' => 'superintendent'),
			array('user_role_name' => '3rd-party'),
		),
		'news_types' => array(
			array('news_type_code' => 'announcement', 'news_type_name' => 'Announcement'),
			array('news_type_code' => 'question', 'news_type_name' => 'Question'),
			array('news_type_code' => 'news', 'news_type_name' => 'Happy news!'),
		),
	),
);


