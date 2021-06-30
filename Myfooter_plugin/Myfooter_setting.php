<?php

if (isset($_POST['mf_submit'])) push();

function push()
{
    $opt_BRAND = $_POST["mf_opt_brand"];
    $opt_ABOUT = $_POST["mf_opt_about"];
    $opt_FB = $_POST["mf_opt_facebook"];
    $opt_INS = $_POST["mf_opt_instagram"];
    $opt_TWT = $_POST["mf_opt_twitter"];
    $opt_LINK = $_POST["mf_opt_linkden"];

    global $mf_opt_brand, $mf_opt_about;

    if (get_option('mf_opt_brand') != trim($opt_BRAND)) {
        $mf_opt_brand = update_option('mf_opt_brand', trim($opt_BRAND)); /// update this column from DataBase (params_1 = column Name , params_2 = value)
    }

    if (get_option('mf_opt_about') != trim($opt_ABOUT)) {
        $mf_opt_about = update_option('mf_opt_about', trim($opt_ABOUT));
    }
    if (get_option('mf_opt_facebook') != trim($opt_FB)) {
        $mf_opt_brand = update_option('mf_opt_facebook', trim($opt_FB));
    }

    if (get_option('mf_opt_instagram') != trim($opt_INS)) {
        $mf_opt_about = update_option('mf_opt_instagram', trim($opt_INS));
    }
    if (get_option('mf_opt_twitter') != trim($opt_TWT)) {
        $mf_opt_brand = update_option('mf_opt_twitter', trim($opt_TWT));
    }

    if (get_option('mf_opt_flinkden') != trim($opt_LINK)) {
        $mf_opt_about = update_option('mf_opt_linkden', trim($opt_LINK));
    }
}
?>

<div class="wrap">
    <div id="icon-options-general" class="icon32"> <br>
    </div>

    <!--  -->
    <?php if (isset($_POST['mf_submit'])) : ?>
        <div id="message" class="updated below-h2">
            <p>Updated</p>
        </div>
    <?php endif; ?>
    <!--  -->

    <div class="metabox-holder">
        <div class="postbox">
            <h3>
                <form method="post" action="">
                    <table class="form-table">
                        <tr>
                            <th scope="row">Name of Brand</th>
                            <td><input type="text" name="mf_opt_brand" value="<?php echo get_option('mf_opt_brand'); ?>" style="width:350px;" /></td>
                        </tr>
                        <tr>
                            <th scope="row">About me:</th>
                            <td><textarea name="mf_opt_about"  style="width:350px;" ><?php echo get_option('mf_opt_about'); ?></textarea></td>
                        </tr>
                        <tr>
                            <th scope="row">Facebook link</th>
                            <td><input type="text" name="mf_opt_facebook" value="<?php echo get_option('mf_opt_facebook'); ?>" style="width:350px;" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Instagram link:</th>
                            <td><input type="text" name="mf_opt_instagram" value="<?php echo get_option('mf_opt_instagram'); ?>" style="width:350px;" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Twitter Link</th>
                            <td><input type="text" name="mf_opt_twitter" value="<?php echo get_option('mf_opt_twitter'); ?>" style="width:350px;" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Youtube link</th>
                            <td><input type="text" name="mf_opt_linkden" value="<?php echo get_option('mf_opt_linkden'); ?>" style="width:350px;" /></td>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp;</th>
                            <td style="padding-top:10px;  padding-bottom:10px;">
                                <input type="submit" name="mf_submit" value="Save changes" class="button-primary" />
                            </td>
                        </tr>
                    </table>
                </form>
            </h3>
        </div>
    </div>
</div>