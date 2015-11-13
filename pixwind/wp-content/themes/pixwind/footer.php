<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package tdpersona
 * @since tdpersona 1.0
 */
?>

	</div><!-- #main .site-main -->

	<div class="footer-container">
		<footer id="colophon" class="site-footer container" role="contentinfo">
			<div class="row">
				<div class="block sl">
					<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
					<?php endif; ?>
				</div>
				<div class="block sc">
					<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
					<?php endif; ?>
				</div>
				<div class="block sr">
					<?php if ( ! dynamic_sidebar( 'sidebar-3' ) ) : ?>
					<?php endif; ?>
				</div>
			</div><!-- .row -->
			<div class="site-info">
				<div class="site-info-inner">
					&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>.com</a>
					<a href="http://www.miibeian.gov.cn/" target="_blank" style="float:right;color:#999;">京ICP备15009576号</a><span class="sep">&mdash;</span>Powered by WordPress，Theme by Terry.
				</div><!-- .site-info-inner -->
			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->
	</div><!-- .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

<!-- headroom -->
<script src="<?php echo get_template_directory_uri(); ?>/js/headroom.min.js"></script>
<script>
// 获取页面元素
var myElement = document.querySelector(".top-navigation");
// 创建 Headroom 对象，将页面元素传递进去
var headroom  = new Headroom(myElement);
// 初始化
headroom.init();
</script>
<!-- headroom -->

<script>
  var navigation = responsiveNav(".site-navigation");
</script>

<script type="text/javascript" src="http://tajs.qq.com/stats?sId=25654588" charset="UTF-8"></script><!-- /腾讯分析 -->
</body>
</html>