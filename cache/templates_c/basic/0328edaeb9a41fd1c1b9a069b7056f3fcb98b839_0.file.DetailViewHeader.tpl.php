<?php
/* Smarty version 3.1.39, created on 2021-08-01 09:55:05
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/DetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6106535973cac5_56223692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0328edaeb9a41fd1c1b9a069b7056f3fcb98b839' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/DetailViewHeader.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6106535973cac5_56223692 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-DetailViewHeader --><?php $_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));
$_smarty_tpl->_assignInScope('BREADCRUMBS_ACTIVE', App\Config::layout('breadcrumbs'));?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"/><div class="detailViewContainer"><div class="row detailViewTitle <?php if ($_smarty_tpl->tpl_vars['BREADCRUMBS_ACTIVE']->value) {?>p-md-0 pt-1<?php } else { ?>pt-3<?php }?>"><?php if ($_smarty_tpl->tpl_vars['SHOW_BREAD_CRUMBS']->value && $_smarty_tpl->tpl_vars['BREADCRUMBS_ACTIVE']->value) {?><div class="o-breadcrumb widget_header mb-2 d-flex justify-content-between px-3 px-sm-2 w-100"><div class="o-breadcrumb__container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php }
if (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_HEADER_WIDGET'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_HEADER_WIDGET'], 'WIDGET');
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
?><div class="col-md-12 px-0"><?php echo Vtiger_Widget_Model::processWidget($_smarty_tpl->tpl_vars['WIDGET']->value,$_smarty_tpl->tpl_vars['RECORD']->value);?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewHeaderTitle.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="detailViewInfo row"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RelatedListButtons.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="col-md-12 pt-1 <?php if (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB']) || !empty($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED'])) {?> details <?php }?>"><form id="detailView" data-name-fields="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields()));?>
" method="POST"><?php if (!empty($_smarty_tpl->tpl_vars['PICKLIST_DEPENDENCY_DATASOURCE']->value)) {?><input type="hidden" name="picklistDependency" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_DEPENDENCY_DATASOURCE']->value);?>
"><?php }?><input type="hidden" id="preSaveValidation" value="<?php echo !empty(\App\EventHandler::getByType(\App\EventHandler::EDIT_VIEW_PRE_SAVE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
"/><div class="contents"><!-- /tpl-Base-DetailViewHeader -->
<?php }
}
