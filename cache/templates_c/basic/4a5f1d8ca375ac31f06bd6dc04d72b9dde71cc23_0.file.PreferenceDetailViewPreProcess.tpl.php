<?php
/* Smarty version 3.1.39, created on 2021-08-01 09:45:31
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Users/PreferenceDetailViewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6106511bf355c7_82305847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a5f1d8ca375ac31f06bd6dc04d72b9dde71cc23' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Users/PreferenceDetailViewPreProcess.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6106511bf355c7_82305847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class="mainContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PreferenceDetailViewHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
