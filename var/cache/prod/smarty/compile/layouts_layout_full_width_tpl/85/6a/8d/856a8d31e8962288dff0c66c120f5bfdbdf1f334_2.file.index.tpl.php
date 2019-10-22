<?php
/* Smarty version 3.1.33, created on 2019-10-21 12:34:48
  from 'C:\wamp64\www\dtc11\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dad97d8553777_21571327',
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
function content_5dad97d8553777_21571327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13158856815dad97d8549738_43963234', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_16908235dad97d854ad30_80857326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_18036766455dad97d854e885_02528326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_19327919535dad97d854cfd0_01628112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18036766455dad97d854e885_02528326', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13158856815dad97d8549738_43963234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_13158856815dad97d8549738_43963234',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16908235dad97d854ad30_80857326',
  ),
  'page_content' => 
  array (
    0 => 'Block_19327919535dad97d854cfd0_01628112',
  ),
  'hook_home' => 
  array (
    0 => 'Block_18036766455dad97d854e885_02528326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16908235dad97d854ad30_80857326', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19327919535dad97d854cfd0_01628112', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
