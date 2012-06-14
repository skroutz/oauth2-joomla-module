<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<?php if($type == 'logout') : ?>
<form action="index.php" method="post" name="login" id="form-login">
	<div align="center">
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_('MOD_SKROUTZ_EASY_BUTTON_LOGOUT'); ?>" />
	</div>

	<?php echo $logout_hidden_inputs ?>
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
</form>
<?php else : ?>
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" name="login" id="form-login" >
	<?php echo JText::_($params->get('pretext')); ?>
	<fieldset class="input">
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_('MOD_SKROUTZ_EASY_BUTTON_LOGIN') ?>" />
	</fieldset>
	<?php echo JText::_($params->get('posttext')); ?>

	<input type="hidden" name="option" value="com_skroutzeasy" />
	<input type="hidden" name="task" value="login" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<?php echo JHTML::_('form.token'); ?>
</form>
<?php endif; ?>
