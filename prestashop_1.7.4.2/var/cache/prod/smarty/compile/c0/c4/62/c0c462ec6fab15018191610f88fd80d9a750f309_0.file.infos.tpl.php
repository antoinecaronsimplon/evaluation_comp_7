<?php
/* Smarty version 3.1.32, created on 2018-09-13 11:51:45
  from '/home/devweb/projets/evaluation/evaluation_comp_7/prestashop_1.7.4.2/modules/ps_checkpayment/views/templates/hook/infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a3331879f29_63597691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0c462ec6fab15018191610f88fd80d9a750f309' => 
    array (
      0 => '/home/devweb/projets/evaluation/evaluation_comp_7/prestashop_1.7.4.2/modules/ps_checkpayment/views/templates/hook/infos.tpl',
      1 => 1536566808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a3331879f29_63597691 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
<img src="../modules/ps_checkpayment/ps_checkpayment.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept payments by check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</strong></p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment'.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
