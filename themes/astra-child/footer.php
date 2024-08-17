<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>

<?php wp_footer(); ?>

<footer>
	<div class="footer">
		<a href="">Mentions légales</a>
	</div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var burger = document.querySelector('.burger-menu');
    var menu = document.querySelector('.item-menu');

    burger.addEventListener('click', function() {
        menu.classList.toggle('active'); // Ajoute ou retire la classe 'active' pour afficher/masquer le menu
    });
});
</script>

</body>

</html>