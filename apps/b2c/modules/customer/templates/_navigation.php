<?php use_helper('I18N') ?>
<div class="dash-nav">
	<a href="<?php echo url_for('customer/dashboard', true) ?>" class="dashboard<?php echo ($selected=='dashboard')?'-s':'' ?>"><?php echo __('dashboard') ?></a>
	<a href="<?php echo sfConfig::get('app_epay_relay_script_url').url_for('customer/refill?customer_id='.$customer_id, true) ?>" class="refil<?php echo ($selected=='refill')?'-s':'' ?>"><?php echo __('refil') ?></a>
	<a href="<?php echo url_for('customer/callhistory', true) ?>" class="callhistory<?php echo ($selected=='callhistory')?'-s':'' ?>"><?php echo __('call history') ?></a>
	<a href="<?php echo url_for('customer/refillpaymenthistory', true) ?>" class="paymenthistory<?php echo ($selected=='paymenthistory')?'-s':'' ?>"><?php echo __('payment history') ?></a>
	<a href="<?php echo url_for('customer/settings', true) ?>" class="settings<?php echo ($selected=='settings')?'-s':'' ?>"><?php echo __('settings') ?></a>
        <a href="<?php echo url_for('customer/logout', true) ?>" class="logout<?php echo ($selected=='logout')?'-s':'' ?>"><?php echo __('logout') ?></a>
         <a href="<?php echo url_for('customer/smsHistory', true) ?>" class="websms<?php echo ($selected=='websms')?'-s':'' ?>"><?php echo __('SmsHistory') ?></a>
</div>