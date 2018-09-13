<?php
/* Smarty version 3.1.32, created on 2018-09-13 09:16:26
  from '/home/devweb/projets/evaluation/evaluation_comp_7/prestashop_1.7.4.2/modules/testimony/views/templates/hook/testimony.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a0ecae969a0_14598692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f3d75acc36a3f78049c0060101d4faa39a54292' => 
    array (
      0 => '/home/devweb/projets/evaluation/evaluation_comp_7/prestashop_1.7.4.2/modules/testimony/views/templates/hook/testimony.tpl',
      1 => 1536763634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a0ecae969a0_14598692 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block testimonies">
   <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers testimonials','mod'=>'testimony'),$_smarty_tpl ) );?>
</h4>
   <div class="block_content">
       <p class="testimony"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimony1']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
       <p class="testimony"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimony2']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
       <p class="testimony"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimony3']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
   </div>
</div><?php }
}
