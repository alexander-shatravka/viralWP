<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gentium
 */

get_header(); ?>

    <div class="page-404-content">
        <div class="uk-container">
            <div class="uk-flex uk-flex-center uk-flex-middle full-height">
                <div class="uk-1-1">
                    <div class="error-404 not-found">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e( '404', 'gentium' ); ?></h1>
                            <span><?php esc_html_e( 'Сраница не найдена', 'gentium' ); ?></span>
                        </header>

                        <div class="page-content">
                            <p><?php esc_html_e( 'Похоже что страница с таким адреслм не найдена. Проверьте и исправьте адрес или воспользуйтесь конпкой ниже', 'gentium' ); ?></p>
                            <div class="btn-back">
                                <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html_e('ВЕРНУТЬСЯ ДОМОЙ','gentium');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
<?php
get_footer();
