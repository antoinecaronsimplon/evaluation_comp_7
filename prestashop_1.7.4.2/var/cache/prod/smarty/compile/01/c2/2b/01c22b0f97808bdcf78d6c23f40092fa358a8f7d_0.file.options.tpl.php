<?php
/* Smarty version 3.1.32, created on 2018-09-13 15:21:51
  from '/home/devweb/projets/evaluation/evaluation_comp_7/prestashop_1.7.4.2/admin926xkyyf4/themes/default/template/controllers/order_preferences/helpers/options/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a646f50d2d0_57734578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c22b0f97808bdcf78d6c23f40092fa358a8f7d' => 
    array (
      0 => '/home/devweb/projets/evaluation/evaluation_comp_7/prestashop_1.7.4.2/admin926xkyyf4/themes/default/template/controllers/order_preferences/helpers/options/options.tpl',
      1 => 1536566813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a646f50d2d0_57734578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13152528955b9a646f50c738_79026295', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "after"} */
class Block_13152528955b9a646f50c738_79026295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_13152528955b9a646f50c738_79026295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">changeCMSActivationAuthorization();<?php echo '</script'; ?>
><?php
}
}
/* {/block "after"} */
}
