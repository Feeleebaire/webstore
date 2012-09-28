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
 * Password entry/change for profile 
 *
 * 
 *
 */
if (!$this->isLoggedIn()) { 
?>
	<fieldset style="display: block; float: left; width:300px;">
	<legend><?php _xt('Create a Free Account!') ?></legend>

<?php _xt('To save your information, enter a password here to create an account, or leave blank to check out as a guest.') ?><br>

	<div class="left margin clear">
	        <dl>
	        	<dt><label for="Password"><?php _xt("Password"); ?></label></dt>
	            <dd><?php $this->PasswordControl->Password1->RenderWithError() ?></dd>
	        </dl>
		</div>

		<div class="left margin">
			<dl class="left">
	        	<dt><label for="cPassword"><?php _xt("Confirm Password"); ?></label></dt>
	            <dd><?php $this->PasswordControl->Password2->RenderWithError() ?></dd>
			</dl>
		</div>
		<div class="left margin clear">
        	<dl class="left">
	            <dd>
	                <?php $this->PasswordControl->NewsletterSubscribe->Render() ?><label for="newsletter" class="opt"><?php _xt("Receive emails about special offers") ?></label>
	            </dd>
            </dl>
         </div>

		</fieldset>
<? } ?>