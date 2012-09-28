<?php
/*
  LightSpeed Web Store
 
  NOTICE OF LICENSE
 
  This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@lightspeedretail.com <mailto:support@lightspeedretail.com>
 * so we can send you a copy immediately.
   
 * @copyright  Copyright (c) 2011 Xsilva Systems, Inc. http://www.lightspeedretail.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 
 */

/**
 * template Captcha and terms confirmation on CheckOut screen
 *
 * 
 *
 */

?>
<fieldset>
	<legend><?php _xt('Submit your order') ?> <?php
		if ($this->CaptchaControl->Wait)
			$this->CaptchaControl->Wait->Render();
		?></legend>

	<?	if (_xls_show_captcha('checkout')) { ?>
	<div class="row">
		<?php $this->lblVerifyImage->Render(); ?>
		<?php $this->txtCRVerify->RenderWithError(); ?>
	</div>
	<? } ?>

	<div class="row">
		<span class="label"><?php echo _sp("Comments"); ?></span>
		<?php $this->txtNotes->Render('Width=300' , 'Height=80') ?>
	</div>

	<div class="row">
		<?php $this->chkAgree->Render(); ?><?php printf(_sp("I hereby agree to the")." <a href=\"%s\" target=\"_new\">"._sp("Terms and Conditions")."</a> "._sp("of shopping with")." %s" , _xls_site_url("terms-and-conditions") , _xls_get_conf('STORE_NAME' , $_SERVER['HTTP_HOST']) ); ?></span>
	</div>

	<div class="four columns alpha">
		<?php $this->btnSubmit->Render() ?>
	</div>


</fieldset>