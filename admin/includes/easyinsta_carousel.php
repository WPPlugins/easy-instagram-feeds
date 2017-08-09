<?php
if ( ! defined( 'ABSPATH' ) ) exit;
wp_enqueue_style( 'bootstrap-style', plugin_dir_url( __FILE__ ) . '../css/bootstrap.css', true );
wp_enqueue_style( 'owl-crousel-style', plugin_dir_url( __FILE__ ) . '../css/owl.carousel.min.css', true );
wp_enqueue_style( 'owl-theme-style', plugin_dir_url( __FILE__ ) . '../css/owl.theme.default.min.css', true );
wp_enqueue_script( 'easyinstacarousel-script', plugin_dir_url( __FILE__ ) . '../js/owl.carousel.min.js', true );
?>

<section class="row easyinstacarouselcarousel" >
    <div class="col-md-12 owl-carousel owl-theme easyowl-carousel">

        <?php
        $col=isset($att['col'])? $att['col'] : '5' ;
        if( isset($att['fullwidth']) && $att['fullwidth']==true ){
            $col=1;
        }
        $arrow=isset($att['arrow'])? $att['arrow'] : 'true' ;
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

        if(isset($result->status) && $result->status=='ok'){?>

           <?php
            foreach ($result->items as $post) {
                ?>

                <div class="item partner-box">
                    <div class="partner-box-inner">

                            <a href="#">
                                <img src="<?php echo $post->images->low_resolution->url; ?>" alt="" class="img-responsive">
                            </a>

                    </div>
                </div>



               <?php $i++;

            }

        }?>


    </div>
    </div>

</section>

<script>
    /*Carousel Script Start*/

    jQuery(document).ready(function() {


        jQuery(".easyowl-carousel").owlCarousel({

            items: <?php echo $col;?>,
            margin: 10,
            nav: <?php echo $arrow;?>,
            navText: [
                "<i class='cnav fa fa-angle-left'></i>",
                "<i class='cnav fa fa-angle-right'></i>"
            ],
            dots: false,
            autoPlay: true,
            responsive: {
                300: {
                    items: 1,
                    navigation: true,
                    nav: <?php echo $arrow;?>,
                    slideBy: 1 // <!-- HERE
                },
                320: {
                    items: 2,
                    navigation: true,
                    nav: <?php echo $arrow;?>,
                    slideBy: 1 // <!-- HERE
                },
                767: {
                    items: 3,
                    navigation: true,
                    nav: <?php echo $arrow;?>,
                    slideBy: 1 // <!-- HERE
                },
                1199: {
                    items: <?php echo $col;?>,
                    navigation: true,
                    nav: <?php echo $arrow;?>,
                    slideBy: 1 // <!-- HERE
                }

            }


        })



    });
    /*Carousel Script End*/

</script>


