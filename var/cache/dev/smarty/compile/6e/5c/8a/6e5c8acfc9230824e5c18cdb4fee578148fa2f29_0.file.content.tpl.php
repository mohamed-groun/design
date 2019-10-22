<?php
/* Smarty version 3.1.33, created on 2019-10-22 16:37:03
  from 'C:\wamp64\www\dtc11\administration\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daf221f61dd09_18117600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e5c8acfc9230824e5c18cdb4fee578148fa2f29' => 
    array (
      0 => 'C:\\wamp64\\www\\dtc11\\administration\\themes\\new-theme\\template\\content.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daf221f61dd09_18117600 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
