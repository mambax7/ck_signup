<?php
/**
 * Ck Signup module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright  The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license    http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package    Ck Signup
 * @since      2.5
 * @author     ck2工作室
 * @version    $Id $
 **/

$modversion = array();

//---模組基本資訊---//
$modversion['name']        = _MI_CKSIGNUP_NAME;
$modversion['version']     = '1.0';
$modversion['description'] = _MI_CKSIGNUP_DESC;
$modversion['author']      = _MI_CKSIGNUP_AUTHOR;
$modversion['credits']     = _MI_CKSIGNUP_CREDITS;
$modversion['help']        = 'page=help';
$modversion['license']     = 'GPL 2.0';
$modversion['image']       = "images/logo.png";
$modversion['dirname']     = basename(__DIR__);

//---模組狀態資訊---//
$modversion['status_version']      = '1.0';
$modversion['release_date']        = '2020-05-15';
$modversion['module_website_url']  = 'http://localhost';
$modversion['module_website_name'] = _MI_CKSIGNUP_AUTHOR_WEB;
$modversion['module_status']       = 'release';
$modversion['author_website_url']  = 'http://localhost';
$modversion['author_website_name'] = _MI_CKSIGNUP_AUTHOR_WEB;
$modversion['min_php']             = '5.6';
$modversion['min_xoops']           = '2.5';

//---paypal資訊---//
$modversion['paypal']                  = array();
$modversion['paypal']['business']      = 'ck2@gmail.com';
$modversion['paypal']['item_name']     = 'Donation :' . _MI_CKSIGNUP_AUTHOR;
$modversion['paypal']['amount']        = 0;
$modversion['paypal']['currency_code'] = 'USD';

//---安裝設定---//
$modversion['onInstall']   = "include/onInstall.php";
$modversion['onUpdate']    = "include/onUpdate.php";
$modversion['onUninstall'] = "include/onUninstall.php";

//---資料表架構---//
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][]         = "ck_actions";
$modversion['tables'][]         = "ck_signups";

//---後台使用系統選單---//
$modversion['system_menu'] = 1;

//---後台管理介面設定---//
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/main.php';
$modversion['adminmenu']  = 'admin/menu.php';

//---前台主選單設定---//
$modversion['hasMain'] = 1;

//---樣板設定---//
$modversion['templates'][] = array('file' => 'ck_signup_admin_main.tpl', 'description' => 'ck_signup_admin_main.tpl');
$modversion['templates'][] = array('file' => 'ck_signup_index.tpl', 'description' => 'ck_signup_index.tpl');

//---區塊設定---//
$i = 0;
