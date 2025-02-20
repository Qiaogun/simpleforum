<?php

return [
/* install_update/models/AdminSignupForm.php */
    'Admin username' => '管理员用户名',
/* install_update/views/install/completed.php */
    'Install SimpleForum' => '极简论坛安装',
    'Upgrade SimpleForum' => '极简论坛升级',
    'Please goto Admin Panel and complete forum\'s settings.' => '请登录管理后台设置论坛信息。',
    'Please goto Admin Panel and modify forum\'s settings.' => '登录管理后台更新论坛配置',
/* install_update/views/install/index.php */
    'Check server\'s environment' => '服务器环境检测',
    'Server\'s environment' => '服务器环境',
    'Check result' => '检测结果',
    'Your server doesn\'t satisfy minimum requirements. Please check the error items below.' => '您的网站空间不符合最基本的要求，请确认下面列表中的错误项目。',
    'Your server satisfies minimum requirements. Please check the warning items below.' => '您的网站空间符合最基本的要求，请确认下面列表中的警告项目。',
    'Your server satisfies all requirements.' => '恭喜，您的网站空间符合要求。',
    'Next step: Database setting' => '下一步：数据库设置',
    'Check list' => '检测项目',
    'OK' => '通过',
    'Error' => '失败',
    'Warning' => '警告',
    'Requirement' => '条件',
    'Result' => '结果',
    'Comment' => '备注',
    'SimpleForum was already installed. If you want to reinstall it, please ' => '你已安装过本程序。如确定要重装，请',
    '1. Backup your database' => '1.做好数据备份',
    '2. Delete \'runtime/install.lock\' file' => '2.删除runtime/install.lock文件',
    '3. Retry installation' => '3.重新执行安装程序',
    'PHP version' => 'PHP版本',
    'PHP 5.4.0 or higher is required.'=> 'PHP 5.4.0及以上',
    '\'{folder}\' folder is writable' => '\'{folder}\'目录写权限',
    '\'{attribute}\' is not writable' => '\'{attribute}\'没有写权限',
    'Write permissions is required.' => '需要写权限',
    '{extension} extension' => '{extension}扩展',
    '\'scandir\' function' => 'scandir方法',
    '\'scandir\' function is required for plugins installation.' => '插件系统需要用到scandir方法，如php.ini中disable_functions设置屏蔽掉了这个方法，请删除后重启。',
    'GD extension(support FreeType)' => 'GD扩展(支持FreeType)',
    'Imagick extension(support png)' => 'ImageMagick扩展(支持png)',
    'DB connection' => 'DB连接',
    'Required for MySQL connection.' => '用于MySQL连接。',
    'Required by encrypt and decrypt methods.' => '用于用户密码加密',
    'Required for files upload to detect correct file mime-types.' => '用于文件上传',
    'Required for cache.' => '用于开启缓存',
    'GD or ImageMagick extension is equired for captcha.' => '启用验证码时需要安装php的gd组件或imagick组件。',
    'Imagick extension does not support PNG.' => 'Imagick组件不支持png。',
    'GD extension does not support FreeType.' => 'GD组件不支持FreeType。',
    'expose_php setting in the php.ini' => 'php.ini的expose_php设值',
    'Please change to \'expose_php = Off\'' => '请修改为 expose_php = Off',
    'allow_url_include setting in the php.ini' => 'php.ini的allow_url_include设值',
    'Please change to \'allow_url_include = Off\'' => '请修改为 allow_url_include = Off',
    'PHP SMPT mail' => 'PHP SMTP邮件',
    'Required for sending email.' => '用于发送邮件',
    'Intl extension 1.0.2 or higher is required.' => 'Intl扩展版本1.0.2及以上',
    'ICU 49.0 or higher is required.' => 'ICU 49.0及以上',
    'ICU Data 49.1 or higher is required.' => 'ICU Data 49.1及以上',
    'Error establishing a database connection: Please confirm database settings.' => '数据库连接出错，请确认数据库连接信息。',
    'MySQL setting' => 'MySQL数据库设置',
    'Create administrator\'s account' => '创建管理员帐号',
    'DB host' => '数据库地址',
    'DB port' => '数据库端口',
    'DB name' => '数据库名',
    'DB username' => '数据库用户名',
    'DB password' => '数据库用户密码',
    'Table prefix' => '数据表前缀',
    'Installation completed successfully.' => '论坛安装成功。',
    'Upgrade completed successfully.' => '论坛升级完成。',
    'Confirm befor upgrade' => '升级前确认',
    'Befor upgrading your SimpleForum, make sure that you back up your database.' => '升级前请备份数据库。本站不对升级过程中造成的程序或数据损失等负责。',
    'Backup completed, Start upgrade' => '已备份，开始升级',


/* setting/all */
    'Forum Manager' => '论坛管理',
    'Settings' => '配置管理',
    'Third-party login' => '第三方帐号登录管理',
    'Channel' => '版块管理',
    'Navigations' => '导航管理',
    'Tags' => '标签管理',
    'Points' => '积分管理',
    'Members' => '用户管理',
    'Links' => '链接管理',
    'Plugins' => '插件管理',
    'Plugin' => '插件',
    'Test email' => '邮件发送测试',
    'Clear cache' => '清空缓存',

/* setting/clearCache */
    'Cache is cleared.'=>'缓存清理完毕',
/* setting/testEmail */
    'Test Email Sending' => '邮件发送测试',
    'SMTP Settings' => 'SMTP邮箱设置',
    'An error has occurred with sending a test email. Please check {link}.' => '测试邮件发送出错，请确认 {link} 是否正确。',
    'A test email has been successfully sent. Please check your email.' => '测试邮件发送成功，请进测试邮箱查看是否收到。',
    'Test' => '测试',
    'Email To' => '测试邮箱',
    'Test Content' => '测试内容',
/* setting/update */
    'Forum info' => '论坛信息设置',
    'Forum manage' => '论坛管理设置',
    'SMTP server' => 'SMTP服务器设置',
    'Please {action} after saving SMTP server settings.' => '修改保存后，请 {action}',
    'send a test email' => '发送测试邮件', 
    'QQ Login' => 'QQ登录设置',
    'Weibo Login' => '微博登录设置',
    'Cache' => '缓存设置',
    'Upload' => '上传设置',
    'Extend' => '扩展设置',
    'Others' => '其它设置',
    'Default settings' => '下面一般保持默认',
/* link */
    'Add a link' => '创建新链接',
    'Edit a link' => '修改链接',
/* navi */
    'Add a item' => '创建导航项目',
    'Edit a item' => '修改导航项目',
    'Set Channels' => '所属版块设定',
    'Navigation Items' => '导航项目',
    'Type' => '类型',
    'Show' => '显示',
/* node */
    'Add a channel' => '添加版块',
    'Edit a channel' => '修改版块',
    'Search channels' => '版块搜索',
    'Channel does not exist.' => '版块不存在。',
/* plugin */
    'Installable plugins' => '可安装插件',
    'Uninstall' => '卸载',
    'Install' => '安装',
    'Plugin id' => '插件ID',
    'Plugin name' => '插件名',
    'Setting' => '设置',
    'Please change forum settings of this plugin befor uninstalling!' => '注意：请确认已经修改与此插件相关联的论坛配置！'."\n".'否则有可能会造成论坛出错。',
    'Abount Plugin[{pid}]' => '插件[{pid}]详细介绍',

    'Add Comment' => '添加回复',
    'Add Topic' => '发表主题',
    'Send Message' => '发送私信',
    'Sign in' => '登录',
    'Sign up' => '注册',

/* user */
    'Inactive' => '待激活用户',
    'Verify' => '待验证用户',
    'Banned' => '已屏蔽用户',
    'Activate' => '激活',
    'Member\'s information' => '用户信息',
    'Register time' => '注册时间',
    'Register IP' => '注册IP',
    'Last login time' => '最后登录时间',
    'Last login IP' => '最后登录IP',
/* tag */
    'Create time' => '创建时间',
    'Operation' => '操作',
    'Edit a tag' => '修改标签',
/* topic */
    'Move Channel'=>'转移主题版块',
/* controllers/settingController */
    'Title' => '标识文字',
/* controllers/pluginController */
    'Plugin({plugin}) was installed already.' => '插件({plugin})已经安装，不能重复安装。',
    'Plugin({plugin}) does not have a method \'install\'.' => '插件({plugin})不存在install方法。',
    'Failed to install Plugin({plugin}).' => '插件({plugin})安装出错。',
    'Plugin({plugin}) does not have a method \'uninstall\'.' => '插件({plugin})不存在uninstall方法。',
    'Failed to uninstall Plugin({plugin}).' => '插件({plugin})卸载出错。',
    'Plugin({plugin}) does not have an attribute \'config\'.' => '插件({plugin})没有配置设定。',
    'The results will be sorted from smallest to largest. Default value is {n}.' => '从小到大排序，默认{n}',
/* controllers/userController */
    'Points have been changed successfully.' => '积分充值成功',
/* Setting */
    'Website name' => '网站名称',
    'Slogan' => '网站副标题',
    'Description' => '网站描述',
    'Admin email' => '管理员邮箱',
    'Language' => '语言',
    'Timezone' => '时区',
    'Maintenance' => '网站维护',
    'Maintenance message' => '网站维护提示',
    'Private mode' => '只允许登录访问',
    'Verify email' => '注册需邮箱验证',
    'Admin approve' => '注册需管理员验证',
    'Close register' => '关闭用户注册',
    'Username filter' => '过滤用户名',
    'Name filter' => '过滤显示名',
    'Enable captcha' => '开启验证码',
    'Autolink' => '开启自动链接',
    'Autolink filter' => '自动链接排除列表',
    'Theme' => '模板',
    'Mobile theme' => '移动模板',
    'Groups' => '会员组',
    'Head settings<br />in head tag<br />meta, etc' => '放在页面头部<br/>head标签里面的<br/>meta或其它信息',
    'Bottom settings<br />analytics codes, etc' => '放在页面底部的<br/>统计代码',
    'Bottom links' => '底部链接',
    'Editor' => '编辑器',
    'Avatar style' => '会员头像',
    'Enable cache' => '开启缓存',
    'Cache time(mins)' => '缓存时间(分)',
    'Cache type' => '缓存类型',
    'Cache servers' => '缓存服务器',
    'Enable third-party login' => '开启第三方登录',
    'Third-party setting' => '第三方登录设定',
    'Number of index topics' => '首页显示帖子数',
    'Number of topics per page' => '每页显示帖子数',
    'Number of comments per page' => '每页显示回复数',
    'Number of tot topics' => '最热主题数',
    'Number of hot channels' => '最热版块数',
    'Edit timer(mins)' => '可编辑时间(分)',
    'Time interval of topic(secs)' => '发表主题间隔(秒)',
    'Time interval of comment(secs)' => '发表回复间隔(秒)',
    'Custom static url' => 'static目录自定义网址',
    'Custom avatar url' => '头像目录自定义网址',
    'Custom upload url' => '附件目录自定义网址',
    'SMTP host' => 'SMTP服务器',
    'SMTP port' => 'SMTP端口',
    'SMTP encryption' => 'SMTP加密协议',
    'SMTP username' => 'SMTP验证邮箱',
    'SMTP password' => 'SMTP验证密码',
    'Avatar upload' => '头像上传到',
    'File upload' => '附件上传到',
    'File upload option<br />(days after register)' => '附件上传条件(注册天数)',
    'File upload option<br />(number of topics)' => '附件上传条件(主题数)',
    'Cloud storage' => '第三方空间',

    'default:10' => '默认:10',
    'default:20' => '默认:20',
    'default:30' => '默认:30',
    'defalut:file' => '默认:file',
    'default:10 mins' => '默认:10分',
    '0(Online)' => '0(开启)',
    '1(Offline)' => '1(关闭)',
    '0(Public)' => '0(公开)',
    '1(Members only)' => '1(只限会员登录访问)',
    '0(Off)' => '0(关闭)',
    '1(On)' => '1(开启)',
    '0(Open)' => '0(开启注册)',
    '1(Close)' => '1(关闭注册)',
    '2(Invite to register)' => '2(只开放邀请码注册)',
    '0(Login page)' => '0(登录页)',
    '1(Login page and right of all pages)' => '1(登录页及所有页右侧)',
    'Circle' => '圆形',
    'Rounded' => '圆角方形',
    'Website storage' => '网站所在空间',
    'Disable upload' => '关闭上传',
    'No Captcha' => '关闭验证码',

    'settings_desc_site_name' => '考虑到手机浏览，网站名称不要设置过长。',
    'settings_desc_slogan' => '15字以内',
    'settings_desc_description' => '给搜索引擎看的，150字以内',
    'settings_desc_admin_email' => '用来接收用户错误报告',
    'settings_desc_language' => '默认:en-US',
    'settings_desc_timezone' => '修改时要特别注意！默认:UTC',
    'settings_desc_offline' => '默认:0(开启)',
    'settings_desc_offline_msg' => '简单写明关闭原因',
    'settings_desc_public' => '默认:0(公开)，若规定登录用户才能访问就设为1(适合内部交流)',
    'settings_desc_email_verify' => '建议设为1(需验证)，若不需要验证就设为0',
    'settings_desc_admin_verify' => '默认:0(不用验证)，若需要管理员验证就设为1(适合内部交流)',
    'settings_desc_close_register' => '默认0，若停止新用户注册就设为1（仍旧可以通过第三方帐号登录方式注册）',
    'settings_desc_username_filter' => '指定用户名不能含有某些指定词汇，用半角逗号(,)分割，例：<br />admin,webmaster,admin*',
    'settings_desc_name_filter' => '指定显示名不能含有某些指定词汇，用半角逗号(,)分割，例：<br />admin,webmaster,admin*',
    'settings_desc_enable_captcha' => '开启后，注册和登录时会要求输入验证码',
    'settings_desc_autolink' => '自动给帖子内容中的网址加上链接',
    'settings_desc_autolink_filter' => '不包含http://，可设置主域名或二级域名等，一行一个网址',
    'settings_desc_theme' => '模板名请用字母数字横杠下划线命名，模板放在"themes/模板名/"目录下',
    'settings_desc_theme_mobile' => '移动设备（手机/平板）专用模板，模板名请用字母数字横杠下划线命名，放在"themes/移动模板名/"目录下',
    'settings_desc_groups' => '一行一个组，格式为:最大积分 用户组名',
    'settings_desc_head_meta' => '示例:<br/>&lt;meta property="qc:admins" content="331146677212163161xxxxxxx" /&gt;<br/>&lt;meta name="cpalead-verification" content="ymEun344mP9vt-B2idFRxxxxxxx" /&gt;',
    'settings_desc_analytics_code' => '示例： 直接粘贴google 或 百度统计代码',
    'settings_desc_footer_links' => '一行一个链接，格式： 描述|http://url<br />如：联系我们|https://simpleforum.org/t/47',
    'settings_desc_editor' => '普通论坛推荐Wysibb编辑器(BBCode)，技术类论坛推荐SimpleMarkdown编辑器。注意：换编辑器可能会使以前发的帖子格式混乱。',
    'settings_desc_cache_enabled' => '默认:0（不开启）',
    'settings_desc_cache_servers' => '缓存类型设为MemCache时设置<br/>一个服务器一行，格式为：IP 端口 权重<br />示例：<br />127.0.0.1 11211 100<br />127.0.0.2 11211 200',
    'settings_desc_edit_timer' => '默认:30，主题贴和回复发表后可修改时间。',
    'settings_desc_alias_static' => '自定义web/static目录的网址，可用于CDN。例：http://static.simpleforum.org',
    'settings_desc_alias_avatar' => '自定义web/avatar目录的网址，可用于CDN。例：http://avatar.simpleforum.org',
    'settings_desc_alias_upload' => '自定义web/upload目录的网址，可用于CDN。例：http://upload.simpleforum.org',
    'settings_desc_mailer_encryption' => '如ssl,tls等，不加密留空',
    'settings_desc_mailer_username' => '请输入完整邮箱地址',
    'settings_desc_mailer_password' => '验证邮箱的密码',
    'settings_desc_upload_avatar' => '默认:上传到网站所在空间',
];
