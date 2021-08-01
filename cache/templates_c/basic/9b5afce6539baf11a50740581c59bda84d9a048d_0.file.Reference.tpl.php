<?php
/* Smarty version 3.1.39, created on 2021-08-01 09:45:48
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Edit/Field/Reference.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6106512c91bc76_55392111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b5afce6539baf11a50740581c59bda84d9a048d' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Edit/Field/Reference.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6106512c91bc76_55392111 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-Reference --><?php $_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('REFERENCE_LIST', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList());
$_smarty_tpl->_assignInScope('REFERENCE_LIST_COUNT', count($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value));
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('TABINDEX', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex());
$_smarty_tpl->_assignInScope('IS_EDITABLE_READ_ONLY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly());
$_smarty_tpl->_assignInScope('PARAMS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());?><div class="uitype_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php if ((isset($_smarty_tpl->tpl_vars['PARAMS']->value['searchParams']))) {?><input name="searchParams" type="hidden" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PARAMS']->value['searchParams']);?>
"/><?php }
if ((isset($_smarty_tpl->tpl_vars['PARAMS']->value['modalParams']))) {?><input name="modalParams" type="hidden" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PARAMS']->value['modalParams']);?>
"/><?php }
ob_start();
echo $_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 1) {?><input name="popupReferenceModule" type="hidden" data-multi-reference="0" title="<?php echo reset($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value);?>
" value="<?php echo reset($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value);?>
"/><?php }
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
ob_start();
echo $_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 > 1) {
$_smarty_tpl->_assignInScope('REFERENCED_MODULE_STRUCT', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getReferenceModule($_smarty_tpl->tpl_vars['VALUE']->value));
if (!empty($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCT']->value)) {
$_smarty_tpl->_assignInScope('REFERENCED_MODULE_NAME', $_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCT']->value->get('name'));
} else {
$_smarty_tpl->_assignInScope('REFERENCED_MODULE_NAME', '');
}
if (in_array($_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['REFERENCE_LIST']->value)) {?><input name="popupReferenceModule" type="hidden" data-multi-reference="1" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value;?>
"/><?php } else { ?><input name="popupReferenceModule" type="hidden" data-multi-reference="1" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCE_LIST']->value[0];?>
"/><?php }
}
if ($_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value) {
$_smarty_tpl->_assignInScope('REFERENCE_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value[0]));
} else {
$_smarty_tpl->_assignInScope('REFERENCE_MODULE_MODEL', false);
}?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" class="sourceField" data-type="entity" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-displayvalue="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['IS_EDITABLE_READ_ONLY']->value) {?>readonly="readonly"<?php }?> /><div class="input-group referenceGroup <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value > 1) {?><div class="input-group-prepend referenceModulesListGroup"><select class="select2 referenceModulesList" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" title="<?php echo \App\Language::translate('LBL_RELATED_MODULE_TYPE');?>
" required="required" <?php if ($_smarty_tpl->tpl_vars['IS_EDITABLE_READ_ONLY']->value) {?>disabled<?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REFERENCE_LIST']->value, 'REFERENCE', false, 'index');
$_smarty_tpl->tpl_vars['REFERENCE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['REFERENCE']->value) {
$_smarty_tpl->tpl_vars['REFERENCE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['REFERENCE']->value;?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['REFERENCE']->value,$_smarty_tpl->tpl_vars['REFERENCE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['REFERENCE']->value == $_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['REFERENCE']->value,$_smarty_tpl->tpl_vars['REFERENCE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }?><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
_display" type="text"  title="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" class="marginLeftZero form-control autoComplete"tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['VALUE']->value)) {?>readonly="true"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('displaytype') != 10) {?>placeholder="<?php echo \App\Language::translate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['REFERENCE_MODULE_MODEL']->value == false || $_smarty_tpl->tpl_vars['IS_EDITABLE_READ_ONLY']->value) {?>disabled<?php }
if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['IS_EDITABLE_READ_ONLY']->value) {?>readonly="readonly"<?php }?>/><div class="input-group-append u-cursor-pointer"><button class="btn btn-light clearReferenceSelection" type="button" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['REFERENCE_MODULE_MODEL']->value == false || $_smarty_tpl->tpl_vars['IS_EDITABLE_READ_ONLY']->value) {?>disabled<?php }?>><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_clear" class="fas fa-times-circle" title="<?php echo \App\Language::translate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></button><button class="btn btn-light relatedPopup" type="button" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['REFERENCE_MODULE_MODEL']->value == false || $_smarty_tpl->tpl_vars['IS_EDITABLE_READ_ONLY']->value) {?>disabled<?php }?>><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></button><!-- Show the add button only if it is edit view  --><?php if ($_smarty_tpl->tpl_vars['REFERENCE_MODULE_MODEL']->value && $_smarty_tpl->tpl_vars['REFERENCE_MODULE_MODEL']->value->isQuickCreateSupported()) {?><button class="btn btn-light createReferenceRecord" type="button" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['IS_EDITABLE_READ_ONLY']->value) {?>disabled<?php }?>><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_create" class="fas fa-plus" title="<?php echo \App\Language::translate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></button><?php }?></div></div></div><!-- /tpl-Base-Edit-Field-Reference -->
<?php }
}
