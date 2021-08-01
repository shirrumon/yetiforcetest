<?php
/* Smarty version 3.1.39, created on 2021-08-01 09:34:39
  from '/Applications/MAMP/htdocs/layouts/basic/modules/Notification/Reminders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61064e8fa91c62_94237350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fc0a830011176eca7a0b7aeb6bc96a7ebd7be56' => 
    array (
      0 => '/Applications/MAMP/htdocs/layouts/basic/modules/Notification/Reminders.tpl',
      1 => 1625219224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61064e8fa91c62_94237350 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Notification-Reminders --><style><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COLORS']->value, 'VALUE', false, 'NAME');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?>.headingColor<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
 {background-color: <?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
 !important;border-color: <?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
;background: linear-gradient(-10deg, #fff, transparent 70%)}<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></style><div class="remindersContent pb-5"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORDS']->value, 'RECORD');
$_smarty_tpl->tpl_vars['RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->tpl_vars['RECORD']->do_else = false;
?><div class="js-toggle-panel card ml-0 mr-3 mt-2 headingColor<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('notification_type');?>
 js-notification-panel"data-js="click" data-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"><div class="card-body row p-0"><div class="col-2 notificationIcon pl-3"><span class="fas <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('notification_type') == 'PLL_SYSTEM') {?>fa-hdd<?php } else { ?>fa-user<?php }?>"aria-hidden="true"></span></div><div class="col-10 notiContent pb-1"><div class="d-flex justify-content-between py-1 pb-2"><div class="paddingLRZero font-small"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECORD']->value->get('notification_type'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></div><div class="paddingLRZero font-small"><strong><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('createdtime');?>
</strong></div></div><div><div class="font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getTitle();?>
</div><div class="font-weight-light font-italic"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getMessage();?>
</div></div><div class="d-flex flex-column"><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('link') && \App\Record::isExists($_smarty_tpl->tpl_vars['RECORD']->value->get('link'))) {
echo \App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('link')));?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('link');
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend') && \App\Record::isExists($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend'))) {
echo \App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend')));?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('linkextend');
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('process') && \App\Record::isExists($_smarty_tpl->tpl_vars['RECORD']->value->get('process'))) {
echo \App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('process')));?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('process');
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('subprocess') && \App\Record::isExists($_smarty_tpl->tpl_vars['RECORD']->value->get('subprocess'))) {
echo \App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('subprocess')));?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subprocess');
}?></div><div class="d-flex justify-content-between"><div><strong class=""><?php echo \App\Language::translate('Created By',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getCreatorUser();?>
</strong></div><div><button type="button" class="btn btn-success btn-sm js-set-marked" data-js="click" title="<?php echo \App\Language::translate('LBL_MARK_AS_READ',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-check" aria-hidden="true"></span></button></div></div></div></div></div><?php
}
if ($_smarty_tpl->tpl_vars['RECORD']->do_else) {
?><div class="alert alert-info"><?php echo \App\Language::translate('LBL_NO_UNREAD_NOTIFICATIONS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="tpl-remiders-bottom-buttons btn-group btn-toolbar mr-md-2 flex-md-nowrap"><a class="btn btn-light" role="button" data-content="" href="index.php?module=Notification&amp;view=List"><span class="fas fa-list"></span></a><button type="button" class="btn btn-light js-popover-tooltip showModal" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_NOTIFICATION_SETTINGS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"data-target="focus hover" data-url="index.php?module=Notification&amp;view=NotificationConfig"><span class="fas fa-cog"></span></button></div></div><!-- /tpl-Notification-Reminders -->
<?php }
}
