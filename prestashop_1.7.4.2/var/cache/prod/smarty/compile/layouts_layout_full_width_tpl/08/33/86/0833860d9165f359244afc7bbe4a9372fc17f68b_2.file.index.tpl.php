<?php
/* Smarty version 3.1.32, created on 2018-09-13 09:16:29
  from '/home/devweb/projets/evaluation/evaluation_comp_7/prestashop_1.7.4.2/themes/themes-perso/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a0ecd2cbeb9_80980077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0833860d9165f359244afc7bbe4a9372fc17f68b' => 
    array (
      0 => '/home/devweb/projets/evaluation/evaluation_comp_7/prestashop_1.7.4.2/themes/themes-perso/templates/index.tpl',
      1 => 1536740827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a0ecd2cbeb9_80980077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14227206115b9a0ecd2c9123_76408542', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_6506250305b9a0ecd2c9871_02910536 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_448485785b9a0ecd2ca872_91794818 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_15806552645b9a0ecd2ca263_57797055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_448485785b9a0ecd2ca872_91794818', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14227206115b9a0ecd2c9123_76408542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14227206115b9a0ecd2c9123_76408542',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6506250305b9a0ecd2c9871_02910536',
  ),
  'page_content' => 
  array (
    0 => 'Block_15806552645b9a0ecd2ca263_57797055',
  ),
  'hook_home' => 
  array (
    0 => 'Block_448485785b9a0ecd2ca872_91794818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6506250305b9a0ecd2c9871_02910536', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15806552645b9a0ecd2ca263_57797055', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
