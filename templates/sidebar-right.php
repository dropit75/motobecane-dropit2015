<div class="sb-slidebar sb-right sb-style-overlay ">
  <ul>
    <li><?php icl_link_to_element(9); ?></li>
    <li><a href="<?php echo wc_get_endpoint_url('edit-address','',wc_get_page_permalink('myaccount'));?>"><?php _e('edit address'); ?></a></li>
    <li><a href="<?php echo wc_get_endpoint_url('customer-logout','',wc_get_page_permalink('myaccount'));?>"><?php _e('logout'); ?></a></li>
    <li><a href="<?php echo wc_customer_edit_account_url(); ?>"><?php _e('Edit account'); ?></a></li>
    <li><a href="<?php echo wc_lostpassword_url(); ?>"><?php _e('Lost '); ?></a></li>
  </ul>
</div>
