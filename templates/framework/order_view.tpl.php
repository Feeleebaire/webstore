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
 * Framework template View order header details (id, date, status, notes) 
 * calls other views
 * Called from /order-track/pg?getuid=xxxxxxxxxx
 *
 */


if($this->order): ?>
<br style="clear:both"/>

	

<h1 style="text-align: center; margin: -25px 0 25px 0;"><?php $this->lblOrderMsg->Render(); ?></h1>	


	<div class="border rounded">
		<div class="border_header">
			<p class="left"><?php _xt('Information') ?></p>
		</div>
		<p class="borderp">
		<?php _xt('Order ID') ?>: <?php $this->lblIdStr->Render() ?><br />
		<?php _xt('Date') ?>: <?php $this->lblOrderDate->Render() ?><br />
		<?php _xt('Status') ?>: <?php $this->lblOrderStatus->Render() ?><br />
		<?php _xt('Payment Transaction #') ?>: <?php $this->lblOrderPaymentData->Render() ?>
		</p>
	</div>
	
	<div class="border rounded">
		<div class="border_header">
			<p class="left">Notes</p>
		</div>
		<p class="borderp">
			<?php _xt('Notes') ?>: <?= nl2br($this->order->PrintedNotes) ?><br />
			<?php _xt('Shipping Details') ?>: <?= $this->lblShippingNotes->Render() ?><br />
			<?php _xt('Payment Details') ?>: <?= $this->lblPaymentNotes->Render(); ?>
		</p>
	</div>
	
	
<br style="clear:both"/>

<?php $this->orderViewItemsPnl->Render(); ?>	



<br style="clear:both"/>
<?php $this->lblConversionCode->Render(); ?>
<?php endif; ?>
