<?php
//author meta
add_action('admin_menu', 'column');

function column() {   
    add_meta_box('author_type_options', 'Event Options', 'col_size', 'event');
}

function col_size($post_id) {
    global $post;
    $col_size = get_post_meta($post->ID, 'col_size', true);
    $venue = get_post_meta($post->ID, 'venue', true);
    $date_time = get_post_meta($post->ID, 'date_time', true);
    ?>
    <table cellpadding="5" cellspacing="10">
        <tr>
            <td class="left"><label for="col_size">HTML Structure Size (3 / 4 / 6 / 8):</label></td>
            <td  class="right" >
                <input value="<?php echo $col_size; ?>" type="text" name="col_size" id="col_size">
            </td>
        </tr>
        <tr>
            <td class="left"><label for="venue">Venue:</label></td>
            <td  class="right" >
                <input value="<?php echo $venue; ?>" type="text" name="venue" id="venue">
            </td>
        </tr>
        <tr>
            <td class="left"><label for="date_time">Date & Time:</label></td>
            <td  class="right" >
                <input value="<?php echo $date_time; ?>" type="text" name="date_time" id="date_time">
            </td>
        </tr>
    </table>
    <?php
}
add_action('save_post', 'column_save');
function column_save($post_id) {
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post->ID;
    if(isset($_POST['col_size'])){
        update_post_meta($post_id, 'col_size',$_POST['col_size']);
    }
    if(isset($_POST['venue'])){
        update_post_meta($post_id, 'venue',$_POST['venue']);
    }
    if(isset($_POST['date_time'])){
        update_post_meta($post_id, 'date_time',$_POST['date_time']);
    }
   }
?>