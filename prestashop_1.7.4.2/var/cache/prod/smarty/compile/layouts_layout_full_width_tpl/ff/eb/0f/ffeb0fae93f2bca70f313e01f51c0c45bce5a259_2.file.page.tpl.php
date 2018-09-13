<?php
/* Smarty version 3.1.32, created on 2018-09-13 09:16:29
  from '/home/devweb/projets/evaluation/evaluation_comp_7/prestashop_1.7.4.2/themes/themes-perso/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a0ecd320913_15687178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffeb0fae93f2bca70f313e01f51c0c45bce5a259' => 
    array (
      0 => '/home/devweb/projets/evaluation/evaluation_comp_7/prestashop_1.7.4.2/themes/themes-perso/templates/page.tpl',
      1 => 1536675484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a0ecd320913_15687178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2201490055b9a0ecd316970_08635227', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_9483849675b9a0ecd3182b9_93983544 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_7095266725b9a0ecd317504_70908309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9483849675b9a0ecd3182b9_93983544', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_2407155795b9a0ecd31d567_53455943 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_6959107975b9a0ecd31e119_82916232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6194030785b9a0ecd31cc64_34671385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2407155795b9a0ecd31d567_53455943', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6959107975b9a0ecd31e119_82916232', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_5882994935b9a0ecd31fa69_25457009 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15663507235b9a0ecd31f439_18776082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5882994935b9a0ecd31fa69_25457009', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2201490055b9a0ecd316970_08635227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2201490055b9a0ecd316970_08635227',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_7095266725b9a0ecd317504_70908309',
  ),
  'page_title' => 
  array (
    0 => 'Block_9483849675b9a0ecd3182b9_93983544',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6194030785b9a0ecd31cc64_34671385',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2407155795b9a0ecd31d567_53455943',
  ),
  'page_content' => 
  array (
    0 => 'Block_6959107975b9a0ecd31e119_82916232',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15663507235b9a0ecd31f439_18776082',
  ),
  'page_footer' => 
  array (
    0 => 'Block_5882994935b9a0ecd31fa69_25457009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7095266725b9a0ecd317504_70908309', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6194030785b9a0ecd31cc64_34671385', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15663507235b9a0ecd31f439_18776082', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
