<?php
/* Smarty version 3.1.39, created on 2021-08-01 09:46:55
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/ModuleManager/CreateModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6106516fa5a030_70030677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73045a35d6fa91a213bb930a1377467aad57f5da' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Settings/ModuleManager/CreateModule.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6106516fa5a030_70030677 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-ModuleManager-CreateModule modal addKeyContainer fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_CREATING_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><form><div class="form-group row"><label class="col-sm-4 col-form-label text-right"><span class="text-danger">*</span><?php echo \App\Language::translate('LBL_ENTER_MODULE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="text" class="module_name form-control" data-validation-engine="validate[required, maxSize[<?php echo Settings_ModuleManager_Module_Model::$maxLengthModuleName;?>
], funcCall[Settings_Module_Manager_Js.validateField], funcCall[Settings_Module_Manager_Js.validateModuleName]]"name="module_name" placeholder="HelpDesk" required="true"></div></div><div class="form-group row"><label class="col-sm-4 col-form-label text-right"><span class="text-danger">*</span><?php echo \App\Language::translate('LBL_ENTER_MODULE_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="text" class="module_name form-control" data-validation-engine="validate[required, maxSize[<?php echo Settings_ModuleManager_Module_Model::$maxLengthModuleLabel;?>
], funcCall[Settings_Module_Manager_Js.validateField]]"name="module_label" placeholder="Help Desk" required="true"></div></div><div class="form-group row"><label class="col-sm-4 col-form-label text-right"><span class="text-danger">*</span><?php echo \App\Language::translate('LBL_ENTITY_FIELDNAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="text" class="entityfieldname form-control" data-validation-engine="validate[required, maxSize[<?php echo Settings_ModuleManager_Module_Model::$maxLengthFieldName;?>
], funcCall[Settings_Module_Manager_Js.validateField]]"name="entityfieldname" placeholder="<?php echo \App\Language::translate('LBL_SAMPLE_FIELD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"required="true"></div></div><div class="form-group row"><label class="col-sm-4 col-form-label text-right"><span class="text-danger">*</span><?php echo \App\Language::translate('LBL_ENTITY_FIELDLABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="text" class="entityfieldlabel form-control" data-validation-engine="validate[required, maxSize[<?php echo Settings_ModuleManager_Module_Model::$maxLengthFieldLabel;?>
], funcCall[Settings_Module_Manager_Js.validateField]]"name="entityfieldlabel" placeholder="<?php echo \App\Language::translate('LBL_SAMPLE_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"required="true"></div></div><div class="form-group row"><label class="col-sm-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_MODULE_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><select class="select2 form-control" title="<?php echo \App\Language::translate('LBL_MODULE_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"name="entitytype"><option value="0" selected><?php echo \App\Language::translate('LBL_BASE_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="1"><?php echo \App\Language::translate('LBL_INVENTORY_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div></form></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></div></div></div>
<?php }
}
