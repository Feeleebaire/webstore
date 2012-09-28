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
 * CheckOut screen (calls other elements)
 *
 * 
 *
 */

	//Note, the <fieldset> for the Shipping panel is in this file because our CalcButton is not part of
	//the rest of the control, so this allows us to place it inline.

?>

<div id="checkout">

	<div class="row"><?php $this->errSpan->Render() ?></div>

	<div id="customercontact" class="ten columns alpha omega"><?php $this->pnlCustomer->Render(); ?></div>
	<?php if (!$this->isLoggedIn()) { ?>
		<div id="createaccount" class="ten columns alpha omega"><?php $this->PasswordControlWrapper->Render(); ?></div>
	<?php } ?>

	<div class="row">
		<div id="billingaddress" class="six columns alpha"><?php $this->pnlBillingAdde->Render(); ?></div>
		<div id="shippingaddress" class="six columns alpha omega"><?php $this->pnlShippingAdde->Render(); ?></div>
	</div>

	<?php if (isset($this->pnlPromoCode) && ($this->pnlPromoCode->Visible)): ?>
		<div class="row"><?php $this->pnlPromoCode->Render() ?></div>
	<?php endif; ?>

	<div class="row">
		<fieldset>
		<?php $this->pnlShipping->Render();?>
		<div class="three columns alpha omega">
			<span class="label">&nbsp;</span>
			<?$this->butCalcShipping->Render(); ?>
		</div>
		</fieldset>
	</div>

	<div class="row">
		<fieldset>
			<legend><?php echo _sp('Shopping Cart'); ?></legend>
				<?php $this->pnlCart->Render(); ?>
		</fieldset>
	</div>
	<div class="row"><?php $this->pnlPayment->Render(); ?></div>
	<div class="row"><?php $this->pnlVerify->Render(); ?></div>

	<div style="display: none;"><?php $this->LoadActionProxy->Render(); ?></div>

</div>			
