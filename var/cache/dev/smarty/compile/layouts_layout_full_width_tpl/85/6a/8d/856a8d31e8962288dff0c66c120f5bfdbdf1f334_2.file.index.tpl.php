<?php
/* Smarty version 3.1.33, created on 2019-10-22 16:37:08
  from 'C:\wamp64\www\dtc11\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daf2224d892c6_05668752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856a8d31e8962288dff0c66c120f5bfdbdf1f334' => 
    array (
      0 => 'C:\\wamp64\\www\\dtc11\\themes\\classic\\templates\\index.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daf2224d892c6_05668752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9270552475daf2224d7eac7_09367106', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_9303833475daf2224d80790_70040308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_11220433425daf2224d84103_78118119 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2211041805daf2224d82cd5_81158085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11220433425daf2224d84103_78118119', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9270552475daf2224d7eac7_09367106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_9270552475daf2224d7eac7_09367106',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9303833475daf2224d80790_70040308',
  ),
  'page_content' => 
  array (
    0 => 'Block_2211041805daf2224d82cd5_81158085',
  ),
  'hook_home' => 
  array (
    0 => 'Block_11220433425daf2224d84103_78118119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9303833475daf2224d80790_70040308', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2211041805daf2224d82cd5_81158085', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
