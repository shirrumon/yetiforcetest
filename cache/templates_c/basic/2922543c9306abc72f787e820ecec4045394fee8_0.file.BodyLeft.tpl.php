<?php
/* Smarty version 3.1.39, created on 2021-08-01 09:34:35
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/BodyLeft.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61064e8b082bd9_14629748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2922543c9306abc72f787e820ecec4045394fee8' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Vtiger/BodyLeft.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61064e8b082bd9_14629748 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-BodyLeft --><div class="container-fluid c-menu__header"><div class="row"><div class="col-2 p-0"><a class="companyLogoContainer" href="index.php"><h1 class="sr-only"><?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleName');?>
</h1><?php if ($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('multiCompanyLogoUrl')) {?><img class="img-fluid logo" src="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('multiCompanyLogoUrl');?>
"title="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleName');?>
"alt="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleName');?>
"/><?php } else { ?><img class="img-fluid logo" src="<?php echo App\Layout::getPublicUrl('layouts/resources/Logo/logo');?>
" title="Logo" alt="Logo"/><?php }?></a></div><div class="col-10 userDetails" data-user="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->getId();?>
"><div class="row"><div class="col-10 p-0 userName"><?php $_smarty_tpl->_assignInScope('USER_NAME_ARRAY', explode(' ',$_smarty_tpl->tpl_vars['USER_MODEL']->value->getDisplayName()));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_NAME_ARRAY']->value, 'NAME', false, NULL, 'userNameIterator', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value) {
$_smarty_tpl->tpl_vars['NAME']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_userNameIterator']->value['iteration']++;
ob_start();
echo $_smarty_tpl->tpl_vars['NAME']->value;
$_prefixVariable1 = ob_get_clean();
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_userNameIterator']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_userNameIterator']->value['iteration'] : null) <= 2 && !empty($_prefixVariable1)) {?><p class="name p-0 m-0 u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</p><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><p class="companyName p-0 m-0 u-text-ellipsis" title="<?php echo \App\Language::translate('LBL_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleName'));?>
</p></div><div class="col-2 p-0 text-center js-menu--pin <?php if (!$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('leftpanelhide')) {?> u-opacity-muted<?php }?>" data-show="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('leftpanelhide');?>
" data-js="click"><span class="fas fa-thumbtack u-cursor-pointer"></span></div></div></div></div></div><div class="js-menu--scroll c-menu__body" data-js="perfectscrollbar"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Menu.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><!-- /tpl-Base-BodyLeft -->
<?php }
}
