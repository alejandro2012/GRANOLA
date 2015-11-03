<?php /* Smarty version 3.1.27, created on 2015-10-31 00:22:01
         compiled from "/opt/apache/GRANOLA/granola_diet/gd_template/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2612367665633fb9910d731_12098349%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72d95cc5fc46fb51e57a5fe0e0188d0de648b970' => 
    array (
      0 => '/opt/apache/GRANOLA/granola_diet/gd_template/index.tpl',
      1 => 1446247142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2612367665633fb9910d731_12098349',
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5633fb9920fa34_48435221',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5633fb9920fa34_48435221')) {
function content_5633fb9920fa34_48435221 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2612367665633fb9910d731_12098349';
?>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  </head>
  <body>
    Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
  </body>
</html><?php }
}
?>