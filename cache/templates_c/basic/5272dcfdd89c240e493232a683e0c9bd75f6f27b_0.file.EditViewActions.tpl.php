<?php
/* Smarty version 3.1.39, created on 2021-08-01 09:45:48
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/EditViewActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6106512c9e1227_72150843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5272dcfdd89c240e493232a683e0c9bd75f6f27b' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/EditViewActions.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6106512c9e1227_72150843 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-EditViewActions c-form__action-panel"><?php $_smarty_tpl->_assignInScope('SINGLE_MODULE_NAME', ('SINGLE_').($_smarty_tpl->tpl_vars['MODULE_NAME']->value));?><button class="btn btn-success js-form-submit-btn mr-1" type="submit" disabled="disabled" data-js="disabled" <?php if (Vtiger_Field_Model::$tabIndexLastSeq) {?>tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
"<?php }?>><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><button class="btn btn-danger mr-1" type="reset" onclick="javascript:window.history.back();" <?php if (Vtiger_Field_Model::$tabIndexLastSeq) {?>tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
"<?php }?>><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php if ((isset($_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_HEADER']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_HEADER'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'editViewHeader','TABINDEX'=>Vtiger_Field_Model::$tabIndexLastSeq,'BTN_CLASS'=>"ml-1"), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RecordCollector') && !empty($_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_RECORD_COLLECTOR'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_RECORD_COLLECTOR'], 'COLLECTOR_LINK');
$_smarty_tpl->tpl_vars['COLLECTOR_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['COLLECTOR_LINK']->value) {
$_smarty_tpl->tpl_vars['COLLECTOR_LINK']->do_else = false;
$_smarty_tpl->_assignInScope('COLLECTOR', \App\RecordCollector::getInstance($_smarty_tpl->tpl_vars['COLLECTOR_LINK']->value->get('linkurl'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
if ((isset($_smarty_tpl->tpl_vars['COLLECTOR']->value)) && $_smarty_tpl->tpl_vars['COLLECTOR']->value->isActive()) {?><button type="button" class="btn btn-outline-dark js-popover-tooltip js-record-collector-modal mr-1" <?php if (((Vtiger_Field_Model::$tabIndexLastSeq !== null ))) {?>tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
"<?php }?> data-type=<?php echo $_smarty_tpl->tpl_vars['COLLECTOR_LINK']->value->get('linkurl');?>
 data-content="<?php ob_start();
echo $_smarty_tpl->tpl_vars['COLLECTOR']->value->label;
$_prefixVariable5 = ob_get_clean();
echo App\Language::translate($_prefixVariable5,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="click|popover"><span class="<?php echo $_smarty_tpl->tpl_vars['COLLECTOR']->value->icon;?>
"></span></button><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></form></div></div>
<?php }
}
