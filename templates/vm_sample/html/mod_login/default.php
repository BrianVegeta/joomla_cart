<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php if($type == 'logout') : ?>
<form action="index.php" method="post" name="login" id="form-logout">
<?php if ($params->get('greeting')) : ?>
	<div>
	<?php if ($params->get('name')) : {
		echo JText::sprintf( 'HINAME', $user->get('name') );
	} else : {
		echo JText::sprintf( 'HINAME', $user->get('username') );
	} endif; ?>
	</div>
<?php endif; ?>
	<div style="padding:5px 0px 0px 0px;">
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_( 'BUTTON_LOGOUT'); ?>" />
	</div>

	<input type="hidden" name="option" value="com_user" />
	<input type="hidden" name="task" value="logout" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
</form>
<?php else : ?>
<?php if(JPluginHelper::isEnabled('authentication', 'openid')) :
		$lang->load( 'plg_authentication_openid', JPATH_ADMINISTRATOR );
		$langScript = 	'var JLanguage = {};'.
						' JLanguage.WHAT_IS_OPENID = \''.JText::_( 'WHAT_IS_OPENID' ).'\';'.
						' JLanguage.LOGIN_WITH_OPENID = \''.JText::_( 'LOGIN_WITH_OPENID' ).'\';'.
						' JLanguage.NORMAL_LOGIN = \''.JText::_( 'NORMAL_LOGIN' ).'\';'.
						' var modlogin = 1;';
		$document = &JFactory::getDocument();
		$document->addScriptDeclaration( $langScript );
		JHTML::_('script', 'openid.js');
endif; ?>
<form action="<?php echo JRoute::_( 'index.php', true, $params->get('usesecure')); ?>" method="post" name="login" id="form-login" >
	<div class="form-login">
		<?php echo $params->get('pretext'); ?>
            <label for="modlgn_username"><?php echo JText::_('Username') ?>:</label>
            <input id="modlgn_username" type="text" name="username" class="inputbox" alt="username" size="18" />
            <label for="modlgn_passwd"><?php echo JText::_('Password') ?>:</label>
            <input id="modlgn_passwd" type="password" name="passwd" class="inputbox" size="18" alt="password" />
            <div class="remember-button">
				<?php if(JPluginHelper::isEnabled('system', 'remember')) : ?>
                <label for="modlgn_remember" class="remember"><input id="modlgn_remember" type="checkbox" name="remember" class="inputbox" value="yes" alt="Remember Me" /><span><?php echo JText::_('Remember me') ?></span></label>
                <?php endif; ?>
                <input type="submit" name="Submit" class="button login" value="<?php echo JText::_('LOGIN') ?>" />
        	</div>
        <ul>
            <li>
                <a href="<?php echo JRoute::_( 'index.php?option=com_user&view=reset' ); ?>">
                <?php echo JText::_('FORGOT_YOUR_PASSWORD'); ?></a>
            </li>
            <li>
                <a href="<?php echo JRoute::_( 'index.php?option=com_user&view=remind' ); ?>">
                <?php echo JText::_('FORGOT_YOUR_USERNAME'); ?></a>
            </li>
        </ul>
		<?php
        $usersConfig = &JComponentHelper::getParams( 'com_users' );
        if ($usersConfig->get('allowUserRegistration')) : ?>
            <div class="naccount"><span><?php echo JText::_('No Account Yet?') ?></span><a href="<?php echo JRoute::_( 'index.php?option=com_user&view=register' ); ?>"><?php echo JText::_('REGISTER'); ?></a></div>
        <?php endif; ?>

        <?php echo $params->get('posttext'); ?>
    
        <input type="hidden" name="option" value="com_user" />
        <input type="hidden" name="task" value="login" />
        <input type="hidden" name="return" value="<?php echo $return; ?>" />
        <?php echo JHTML::_( 'form.token' ); ?>
    </div>
</form>
<?php endif; ?>