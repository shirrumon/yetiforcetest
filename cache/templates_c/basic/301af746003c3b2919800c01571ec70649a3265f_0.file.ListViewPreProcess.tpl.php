<?php
/* Smarty version 3.1.39, created on 2021-08-01 09:55:18
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/ListViewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6106536678db17_92959912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '301af746003c3b2919800c01571ec70649a3265f' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/ListViewPreProcess.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6106536678db17_92959912 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ListViewPreProcess --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class="mainContainer pt-md-0 pt-1"><?php $_smarty_tpl->_assignInScope('BREADCRUMBS_ACTIVE', \App\Config::layout('breadcrumbs'));
if ($_smarty_tpl->tpl_vars['BREADCRUMBS_ACTIVE']->value || $_smarty_tpl->tpl_vars['HEADER_LINKS']->value['LIST_VIEW_HEADER']) {?><div class="o-breadcrumb widget_header mb-2 d-flex justify-content-between px-2" data-js="container"><div class="o-breadcrumb__container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="my-auto o-header-toggle__actions js-header-toggle__actions" id="o-view-actions__container"><div class="btn-toolbar btn-group flex-md-nowrap"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADER_LINKS']->value['LIST_VIEW_HEADER'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewHeader','BREAKPOINT'=>'md','CLASS'=>'c-btn-link--responsive'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php }?><div class="contentsDiv<?php if (!$_smarty_tpl->tpl_vars['BREADCRUMBS_ACTIVE']->value || !$_smarty_tpl->tpl_vars['HEADER_LINKS']->value['LIST_VIEW_HEADER']) {?> pt-2<?php }?>"><a class="btn btn-outline-dark d-md-none o-header-toggle__actions-btn js-header-toggle__actions-btn mb-1" href="#" data-js="click" role="button" aria-expanded="false" aria-controls="o-view-actions__container"><span class="fas fa-ellipsis-h fa-fw" title="<?php echo \App\Language::translate('LBL_ACTION_MENU');?>
"></span></a><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Base-ListViewPreProcess -->
<?php }
}
