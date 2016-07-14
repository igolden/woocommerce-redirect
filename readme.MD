Woocommmerce Redirect
---

Exposes a redirect_url ACF url field on woocommerce products.

In your woocommerce templates (add-to-cart/simple.php, product_cat, etc), use the following code:

``<?php 
$redirect = get_field('redirect_url');
if($redirect): ?>
<a href="<?php echo $redirect ?>" class="button">
Add to Cart
</a>
<?php else: ?>
<!-- For products you haven't added the URL, set default redirect. -->
<a href="http://example-default-url.com" class="button">
Add to Cart
</a>
<?php endif ?>``


