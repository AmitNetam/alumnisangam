<?php
// auto-generated by sfPropelCrud
// date: 2009/03/16 07:28:59
?>
<?php include_component('home', 'leftmenu'); ?>
<?php use_helper('Object') ?>

<?php echo form_tag('peppage/update') ?>
<?php echo object_input_hidden_tag($peppage, 'getId') ?>

<div class="page">
	<?php if($peppage->getId()): ?>
		<h3>Edit Page</h3>
	<?php else: ?>
		<h3>Add Page</h3>
	<?php endif; ?>
	<div class="oddRow">
		<div class="rowdataleft">
			<div class="rowdatalefttext" style="padding-top: 4px;">Tab Name : </div>
		</div>
		<div class="rowdatamiddle">
			<?php echo object_input_tag($peppage, 'getTabname', array ('size' => 30,)) ?>
		</div>
	</div>
	<div class="evenRow">
		<div style="float: left; margin-left: 30px;">
			<?php echo object_textarea_tag($peppage, 'getContent', array (
  	'rich' => 'fck',
	'height' => 295,
	'width'	=> 770,
)) ?>
		</div>
	</div>
	<div class="oddRow">
		<div class="rowdataleft">
			<div class="rowdatalefttext" style="padding-top: 4px;">Sequence : </div>
		</div>
		<div class="rowdatamiddle">
			<?php echo object_input_tag($peppage, 'getSequence', array ('size' => 7,)) ?>
		</div>
	</div>
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons">
		<input type="image" src="/images/save.png" alt="save">
		<a href="/peppage/mylist.html"><img src="/images/back.png"></a>
	</div>
	<div class="vspacer20">&nbsp;</div>
</div>

<hr />
</form>
