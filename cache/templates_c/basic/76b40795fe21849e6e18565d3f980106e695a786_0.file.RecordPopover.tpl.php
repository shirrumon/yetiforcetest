<?php
/* Smarty version 3.1.39, created on 2021-08-01 15:06:23
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/RecordPopover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61069c4f8325e6_01942618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76b40795fe21849e6e18565d3f980106e695a786' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/RecordPopover.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61069c4f8325e6_01942618 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-RecordPopover --><div><h5 class="c-popover--link__header px-2 py-1 bg-light"><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
 mr-1"></span><span class="u-text-ellipsis--no-hover" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayName();?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayName();?>
</span><?php if ($_smarty_tpl->tpl_vars['HEADER_LINKS']->value) {?><div class="c-popover--link__header__buttons btn-group"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADER_LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'recordPopover'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></h5><div class="c-popover--link__body px-2 pb-1"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><div class="u-white-space-nowrap u-text-ellipsis--no-hover"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isReferenceField() || (isset($_smarty_tpl->tpl_vars['FIELDS_ICON']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]))) {?><span class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isReferenceField()) {?>yfm-<?php echo \App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value));
} else {
echo $_smarty_tpl->tpl_vars['FIELDS_ICON']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value];
}?>"></span>&nbsp;<?php }?><label class="c-popover--link__label"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label>: <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><!-- /tpl-Base-RecordPopover -->
<?php }
}
