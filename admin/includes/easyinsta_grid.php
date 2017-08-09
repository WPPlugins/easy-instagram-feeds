<?php

if ( ! defined( 'ABSPATH' ) ) exit;
wp_enqueue_style( 'bootstrap-style', plugin_dir_url( __FILE__ ) . '../css/bootstrap.css', true );

?>
<style>


    .instagram-unit img{
        margin-bottom:10px;
        width:100%;
    }
    .easyinsta{
        margin-bottom:20px;
    }
    .easyinsta .box-heading {
        color:white;
        font-size:24px;
        font-weight:bold;
        padding-bottom:10px;
        margin-bottom:20px;
        border-bottom:3px solid #01b1fd;
    }
    .easyinsta .easyinstaCaption{
        color:white;
        font-weight:bold;
        text-align:center;
        font-size:30px;
        margin-bottom:10px;
        text-transform: uppercase;
    }
    .easyinsta-img img{
        position: relative;
    }
    .easyinstaCaption{
        position:absolute;
        width:89%;
        right:0px;
        left:15px;
        background-color:rgba(1,177,253,0.8);
        min-height:40px;
        bottom:0px;
        padding:10px;
    }

    .easyinstaCaption p{

        margin-bottom:0px;
        font-size: 15px;
        line-height: 20px;
        height: 20px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .easyinsta .col-md-4 .easyinstaCaption{display:none;}
    .easyinsta .col-md-4:hover .easyinstaCaption{display:block;}

    .easyinsta b{
        color:white;
    }
</style>
<section class="row easyinsta" >
<div class="col-md-12 ">
				<h6>INSTAGRAM</h6>
				<?php
               $col=isset($att['col'])? $att['col'] : '3' ;
                if(isset($att['col'])){
                    $col=12/$att['col'];
                }
				$user_id=esc_attr( get_option('easyinsta_insta_username') );
				$url="https://www.instagram.com/".$user_id."/media/";
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				$json = curl_exec($ch);
				curl_close($ch);
				$result = json_decode($json);
				$i=1;

				if(isset($result->status) && $result->status=='ok'){
                    foreach ($result->items as $post) {
//                        echo"<pre>";
//                        print_r($post);

                            ?>
                            <div class="col-md-<?php echo $col;?> col-sm-<?php echo $col;?> col-xs-12 easyinsta-img">
                                <a class="instagram-unit" target="_blank" href="<?php echo $post->link;?>">
                                    <img src="<?php echo $post->images->low_resolution->url;?>"  alt="<?php  echo isset($post->caption->text) ? $post->caption->text : 'Design4auto';?>"/></a>
                                <?php if($post->caption->text!=""):?>
                                <!--<div class="easyinstaCaption" style="width: 100%">
                                    <p><?php /*echo $post->caption->text;*/?></p>
                                </div>-->
                            <?php endif;?>
                            </div>



                            <?php $i++;

                    }

                }?>

</div>
</div>

</section>

