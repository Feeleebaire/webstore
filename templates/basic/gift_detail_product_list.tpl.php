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
 * Basic template: Wish List (Gift Registry) Wish List product list headers
 * 
 * 
 *
 */

?>

	<div class="registry rounded">
		<div class="registry_header">
			<p class="left"><?php _xt('Wish List Products') ?></p>
			<div class="right">
				<p style="margin: 0 65px 0 0;"><?php _xt('Qty') ?></p>
<!-- 				<p style="margin: 0 175px 0 0;"><?php _xt('Status') ?></p> -->
				<p style="margin: 0 15px 0 0;"><?php _xt('Delete') ?></p>
			</div>
		</div>
		
		<?php  $this->dtrGiftProduct->Render(); ?>
		
	</div>
