<?php
/**
 * Chinese(Simplified) language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html) 
 * @author     ZDYX <zhangduyixiong@gmail.com>  
 */

// for admin plugins, the menu prompt to be displayed in the admin menu
// if set here, the plugin doesn't need to override the getMenuText() method
$lang['menu']       = '配置设置';

$lang['error']      = '由于非法参数，设置没有更新。请检查您做的改动并重新提交。
                       <br />非法参数会用红框包围显示。';
$lang['updated']    = '设置更新成功。';
$lang['nochoice']   = '（没有其他可用选项）';
$lang['locked']     = '设置文件无法更新。如果这是您没有意料到的，<br />
                       请确保本地设置文件的名称和权限设置正确。';

/* --- Config Setting Headers --- */
$lang['_configuration_manager'] = '配置管理器'; //same as heading in intro.txt
$lang['_header_dokuwiki'] = 'DokuWiki 设置';
$lang['_header_plugin'] = '插件设置';
$lang['_header_template'] = '模板设置';
$lang['_header_undefined'] = '其他设置';

/* --- Config Setting Groups --- */
$lang['_basic'] = '基本设置';
$lang['_display'] = '显示设置';
$lang['_authentication'] = '认证设置';
$lang['_anti_spam'] = '反垃圾邮件/评论设置';
$lang['_editing'] = '编辑设置';
$lang['_links'] = '链接设置';
$lang['_media'] = '媒体设置';
$lang['_advanced'] = '高级设置';
$lang['_network'] = '网络设置';
// The settings group name for plugins and templates can be set with
// plugin_settings_name and template_settings_name respectively. If one
// of these lang properties is not set, the group name will be generated
// from the plugin or template name and the localized suffix.
$lang['_plugin_sufix'] = '插件设置';
$lang['_template_sufix'] = '模板设置';

/* --- Undefined Setting Messages --- */
$lang['_msg_setting_undefined'] = '设置的元数据不存在。';
$lang['_msg_setting_no_class'] = '设置的分类不存在。';
$lang['_msg_setting_no_default'] = '设置的默认值不存在。';

/* -------------------- Config Options --------------------------- */

$lang['fmode']       = '文件的创建模式';
$lang['dmode']       = '文件夹的创建模式';
$lang['lang']        = '语言';
$lang['basedir']     = '根目录';
$lang['baseurl']     = '根路径（URL）';
$lang['savedir']     = '保存数据的目录';
$lang['start']       = '开始页面的名称';
$lang['title']       = '维基站点的标题';
$lang['template']    = '模版';
$lang['fullpath']    = '在页面底部显示完整路径';
$lang['recent']      = '最近更新';
$lang['breadcrumbs'] = '显示“足迹”的数量';
$lang['youarehere']  = '显示“您在这里”';
$lang['typography']  = '进行字符替换';
$lang['htmlok']      = '允许嵌入式 HTML';
$lang['phpok']       = '允许嵌入式 PHP';
$lang['dformat']     = '日期格式（参见 PHP 的 <a href="http://www.php.net/date">date</a> 功能）';
$lang['signature']   = '签名样式';
$lang['toptoclevel'] = '目录的最顶层';
$lang['maxtoclevel'] = '目录的最多层次';
$lang['maxseclevel'] = '段落编辑的最多层次';
$lang['camelcase']   = '对链接使用 CamelCase';
$lang['deaccent']    = '清理页面名称';
$lang['useheading']  = '使用“标题 H1”作为页面名称';
$lang['refcheck']    = '检查媒体与页面的挂钩情况';
$lang['refshow']     = '显示媒体与页面挂钩情况的数量';
$lang['allowdebug']  = '允许调试 <b>如果您不需要调试，请勿勾选！</b>';

$lang['usewordblock']= '根据 wordlist 阻止垃圾评论';
$lang['indexdelay']  = '构建索引前的时间延滞（秒）';
$lang['relnofollow'] = '对外部链接使用 rel="nofollow" 标签';
$lang['mailguard']   = '弄乱邮件地址（保护用户的邮件地址）';

/* Authentication Options */
$lang['useacl']      = '使用访问控制列表（ACL）';
$lang['autopasswd']  = '自动生成密码';
$lang['authtype']    = '认证后台管理方式';
$lang['passcrypt']   = '密码加密方法';
$lang['defaultgroup']= '默认的组';
$lang['superuser']   = '超级用户';
$lang['profileconfirm'] = '更新个人信息时需要输入当前密码';
$lang['disableactions'] = '停用 DokuWiki 功能';
$lang['disableactions_check'] = '检查';
$lang['disableactions_subscription'] = '订阅/退订';
$lang['disableactions_wikicode'] = '查看源文件/导出源文件';
$lang['disableactions_other'] = '其他功能（用英文逗号分隔）';

/* Advanced Options */
$lang['updatecheck'] = '自动检查更新并接收安全警告吗？开启该功能后 DokuWiki 将自动访问 splitbrain.org。';
$lang['userewrite']  = '使用更整洁的 URL';
$lang['useslash']    = '在 URL 中使用斜杠作为命名空间的分隔符';
$lang['usedraft']    = '编辑时自动保存一份草稿';
$lang['sepchar']     = '页面名称中的单词分隔符';
$lang['canonical']   = '使用完全标准的 URL';
$lang['autoplural']  = '在链接中检查多种格式';
$lang['compression'] = 'attic 文件的压缩方式';
$lang['cachetime']   = '缓存的最长时间（秒）';
$lang['locktime']    = '独有编辑权/文件锁定的最长时间（秒）';
$lang['fetchsize']   = 'fetch.php 能从外部下载的最大文件大小（字节）';
$lang['notify']      = '发送更改通知给这个邮件地址';
$lang['registernotify'] = '发送新注册用户的信息给这个邮件地址';
$lang['mailfrom']    = '自动发送邮件时使用的邮件地址';
$lang['gzip_output'] = '对 xhtml 使用 gzip 内容编码';
$lang['gdlib']       = 'GD 库版本';
$lang['im_convert']  = 'ImageMagick 转换工具的路径';
$lang['jpg_quality'] = 'JPG 压缩质量（0-100）';
$lang['spellchecker']= '启用拼写检查';
$lang['subscribers'] = '启用页面订阅支持';
$lang['compress']    = '使 CSS 和 javascript 输出更紧密';
$lang['hidepages']   = '隐藏匹配的界面（正则表达式）';
$lang['send404']     = '发送 "HTTP 404/页面没有找到" 错误信息给不存在的页面';
$lang['sitemap']     = '生成 Google sitemap（天）';

$lang['rss_type']    = 'XML feed 类型';
$lang['rss_linkto']  = 'XML feed 链接到';
$lang['rss_update']  = 'XML feed 升级间隔（秒）';
$lang['recent_days'] = '保留多少天的最近更改（天）';

/* Target options */
$lang['target____wiki']      = '内部链接的目标窗口';
$lang['target____interwiki'] = 'Interwiki 链接的目标窗口';
$lang['target____extern']    = '外部链接的目标窗口';
$lang['target____media']     = '媒体文件链接的目标窗口';
$lang['target____windows']   = 'Windows 链接的目标窗口';

/* Proxy Options */
$lang['proxy____host'] = '代理服务器的名称';
$lang['proxy____port'] = '代理服务器的端口';
$lang['proxy____user'] = '代理服务器的用户名';
$lang['proxy____pass'] = '代理服务器的密码';
$lang['proxy____ssl']  = '使用 SSL 连接到代理服务器';

/* Safemode Hack */
$lang['safemodehack'] = '启用 Safemode Hack';
$lang['ftp____host'] = 'Safemode Hack 的 FTP 服务器';
$lang['ftp____port'] = 'Safemode Hack 的 FTP 端口';
$lang['ftp____user'] = 'Safemode Hack 的 FTP 用户名';
$lang['ftp____pass'] = 'Safemode Hack 的 FTP 密码';
$lang['ftp____root'] = 'Safemode Hack 的 FTP 根路径';

/* userewrite options */
$lang['userewrite_o_0'] = '无';
$lang['userewrite_o_1'] = '.htaccess';
$lang['userewrite_o_2'] = 'DokuWiki 内部控制';

/* deaccent options */
$lang['deaccent_o_0'] = '关闭';
$lang['deaccent_o_1'] = '移除重音符号';
$lang['deaccent_o_2'] = 'romanize';

/* gdlib options */
$lang['gdlib_o_0'] = 'GD 库不可用';
$lang['gdlib_o_1'] = '1.x 版';
$lang['gdlib_o_2'] = '自动检测';

/* rss_type options */
$lang['rss_type_o_rss']  = 'RSS 0.91';
$lang['rss_type_o_rss1'] = 'RSS 1.0';
$lang['rss_type_o_rss2'] = 'RSS 2.0';
$lang['rss_type_o_atom'] = 'Atom 0.3';

/* rss_linkto options */
$lang['rss_linkto_o_diff']    = '差别查看';
$lang['rss_linkto_o_page']    = '已修订的页面';
$lang['rss_linkto_o_rev']     = '修订列表';
$lang['rss_linkto_o_current'] = '当前页面';

/* compression options */
$lang['compression_o_0']   = '无';
$lang['compression_o_gz']  = 'gzip';
$lang['compression_o_bz2'] = 'bz2';
