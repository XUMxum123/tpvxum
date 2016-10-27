<?php
return array(
	//'配置项'=>'配置值'
		'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => 'localhost', // 服务器地址
        'DB_NAME'   => 'test', // 数据库名
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => '1332080218', // 密码
        'DB_PORT'   => 3306, // 端口
        'DB_PREFIX' => '', // 数据库表前缀
    
        'URL_HTML_SUFFIX' => 'html|shtml|xml' ,//伪静态
        'URL_CASE_INSENSITIVE' =>true ,//忽略大小写
        'TMPL_PARSE_STRING'  =>array(     
            '__UPLOAD__' => '/Uploads/', // 增加新的上传路径替换规则
			),
);