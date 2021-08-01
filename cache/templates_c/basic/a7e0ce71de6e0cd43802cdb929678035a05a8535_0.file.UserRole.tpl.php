<?php
/* Smarty version 3.1.39, created on 2021-08-01 09:45:33
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Detail/Field/UserRole.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6106511da8ead0_74216111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7e0ce71de6e0cd43802cdb929678035a05a8535' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/Detail/Field/UserRole.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6106511da8ead0_74216111 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Detail-Field-UserRole u-paragraph-m-0">
	<?php $_smarty_tpl->_assignInScope('ROLE_LABEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value));?>
	<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser() && !empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))) {?>
		<a href="<?php echo Settings_Roles_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))->getEditViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['ROLE_LABEL']->value;?>
</a>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['ROLE_LABEL']->value;?>

	<?php }?>
</div>
<?php }
}
