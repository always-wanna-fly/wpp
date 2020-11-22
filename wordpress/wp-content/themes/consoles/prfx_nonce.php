<p>
    <label for="meta-text" class="prfx-row-title"><?php _e( 'Альтернативний опис', 'prfx-textdomain' )?></label>
    <input type="text" name="meta-text" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['meta-text'] ) ) echo $prfx_stored_meta['meta-text'][0]; ?>" />
</p>
<p>
    <span class="prfx-row-title"><?php _e( 'Інформація підтверджена виробником', 'prfx-textdomain' )?></span>
<div class="prfx-row-content">
    <label for="meta-checkbox">
        <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $prfx_stored_meta['meta-checkbox'] ) ) checked( $prfx_stored_meta['meta-checkbox'][0], 'yes' ); ?> />
        <?php _e( 'Так, підтверджена', 'prfx-textdomain' )?>
    </label>
    <label for="meta-checkbox-two">
        <input type="checkbox" name="meta-checkbox-two" id="meta-checkbox-two" value="yes" <?php if ( isset ( $prfx_stored_meta['meta-checkbox-two'] ) ) checked( $prfx_stored_meta['meta-checkbox-two'][0], 'yes' ); ?> />
        <?php _e( 'Ні, не підтверджена', 'prfx-textdomain' )?>
    </label>
</div>
</p>