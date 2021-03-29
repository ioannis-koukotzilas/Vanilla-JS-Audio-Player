<?php //delete it

add_action('woocommerce_after_add_to_cart_form', 'monoscopic_playlist');
function monoscopic_playlist() {
	?>
        <?php if ( have_rows( 'playlist' ) ) : ?>
            <h2>Playlist</h2>
            <div class="audio-player audio-player-paused">
                <div class="audio-playback">
                    <div class="audio-player-play-btn"></div>
                    <div class="audio-player-play-time">0:00</div>
                    <div class="audio-player-timebar">
                        <div class="audio-player-progress"></div>
                    </div>
                    <div class="audio-player-duration">0:00</div>
                </div>
                <div class="audio-playlist">
                    <?php while ( have_rows( 'playlist' ) ) : the_row(); ?>
                        <?php if ( get_sub_field( 'mp3' ) ) : ?>
                            <div class="audio-track" data-audio="<?php the_sub_field( 'mp3' ); ?>">
                                <div class="audio-track-name"><?php the_sub_field( 'title' ); ?></div>
                                <div class="audio-track-length"><?php the_sub_field( 'time' ); ?></div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
	<?php
}
