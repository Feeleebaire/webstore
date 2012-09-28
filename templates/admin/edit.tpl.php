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
 * Web Admin panel template called by xlsws_admin class
 * General use for item editing
 * 
 *
 */
include_once(adminTemplate('header.tpl.php'));

$this->RenderBegin(); ?>
		<div id="mainNav">
		<?php
		
		foreach($this->arrTabs as $type=>$label)
			echo '<a class="mainNavItem'.($type == $this->currentTab ? " active" : "").'" href="'.$this->get_uri($type).'"><span class="innertab">'.$label.'</span></a>';
		?>
		</div>
		<br clear="both">
		
	<div id="options"  style="width:960px" > 	
<div class="content">
<?php

if(isset($this->HelperRibbon)) 
	if (strlen($this->HelperRibbon)>0)
		echo '<div class="helperribbon"><img style="padding-right: 5px;width:44px; height:35px;" align="left" src="'.adminTemplate('css/images/questionmark.png').'"> '.$this->HelperRibbon.'<br clear=left></div>';

$this->dtgItems->Render('CssClass="rounded wide"');

?>


<div style="margin: -6px 0 0 0; background:  url(<?= adminTemplate('css/images/header.png') ?>); height: 37px;" class="rounded-bottom">
<?php if($this->canNew()): ?>
	<img src="<?= adminTemplate('css/images/btn_add.png') ?>" style="margin: 12px 5px 0 15px; display: block; float: left;" />
	<div class="add" <?php $this->btnNew->RenderAsEvents(); ?>>Add</div>
<?php endif; ?>
</div>
	
<?php if($this->canFilter()): ?>
	<div class="search">
		<?php $this->txtSearch->Render('CssClass=searchBox'); ?>
		<?php $this->btnSearch->Render('CssClass=searchButton button rounded' , 'Width=50'); ?>
	</div>
<?php endif; ?>
</div>
</div>



<? if($this->usejQuery) { ?>
<link rel="stylesheet" type="text/css" href="<?= adminTemplate('css/'.$this->usejQuery.'.css') ?>" media='screen'  />

<!-- modal content -->
		<div id="basic-modal-content">
		Loading...
		</div>
<script type='text/javascript' src='<?= adminTemplate('js/jquery.js') ?>'></script>
<script type='text/javascript' src='<?= adminTemplate('js/jquery.simplemodal.js') ?>'></script>
<script type='text/javascript' src='<?= adminTemplate('js/'.$this->usejQuery.'.js') ?>'></script>
<?php 

}

$this->RenderEnd(); ?>	
	
</body>
</html>
