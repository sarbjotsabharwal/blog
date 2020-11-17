<?php

class Alyssas_Blog_Social_Widget extends WP_Widget
{
     public function __construct()
     {
          parent::__construct(
               'social-widget',
               __( 'RP: Social Widget', 'alyssas-blog' ),
               array( 'description' => __( 'Best displayed in Sidebar.', 'alyssas-blog' ) )
          );
      }
    
     public function widget( $args, $instance )
     {
      extract( $args );
    if(!empty($instance))
   { 

     $facebook  = $instance['facebook'];
     $twitter   = $instance['twitter'];
     $instagram = $instance['instagram'];
     $linkedin  = $instance['linkedin'];
     $youtube   = $instance['youtube'];
    //  $image     = $instance['image_uri'];
    //  $name      = $instance['full_name'];

      ?>
          <div class="ft-social">
              <ul>

              <?php 
                if ( !empty( $facebook ) ) { ?>
                    <li>
                        <a class="img-circle" href="<?php echo esc_url( $facebook ); ?>" data-title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a>
                    </li>
                <?php }
                if ( !empty( $twitter ) ) { ?>
                    <li>
                        <a class="img-circle" href="<?php echo esc_url( $twitter ); ?>" data-title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                <?php }
                if ( !empty( $linkedin ) ) {
                    ?>
                    <li>
                        <a class="img-circle" href="<?php echo esc_url( $linkedin ); ?>" data-title="Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <?php
                }
                if ( !empty( $instagram) ) {
                    ?>
                    <li>
                        <a class="img-circle" href="<?php echo esc_url( $instagram); ?>" data-title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <?php
                }
                if ( !empty( $youtube ) ) { ?>
                    <li>
                        <a class="img-circle" href="<?php echo esc_url( $youtube ); ?>" data-title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                    <?php
                }
                
                    ?>
            </ul>
          </div>  
      
      <?php
    }   
 }

     public function update( $new_instance, $old_instance ){
        $instance                = $old_instance;
        // $instance['title']       = sanitize_text_field( $new_instance['title'] );
        // $instance['full_name']   = sanitize_text_field( $new_instance['full_name'] );
        // $instance['description'] = wp_kses_post( $new_instance['description'] );
        // $instance['image_uri']   = esc_url_raw( $new_instance['image_uri'] );
        $instance['facebook']    = esc_url_raw( $new_instance['facebook'] );
        $instance['twitter']     = esc_url_raw( $new_instance['twitter'] );
        $instance['googleplus']  = esc_url_raw( $new_instance['googleplus'] );
        $instance['instagram']   = esc_url_raw( $new_instance['instagram'] );
        $instance['linkedin']    = esc_url_raw( $new_instance['linkedin'] );
        $instance['youtube']     = esc_url_raw( $new_instance['youtube'] );
        return $instance;
     }

     public function form($instance ){
          ?>
              <p>
                <label for="<?php echo esc_attr( $this->get_field_id('facebook') ); ?>"><?php _e( 'Facebook', 'alyssas-blog' ); ?></label><br />
                <input type="text" name="<?php echo esc_attr( $this->get_field_name('facebook') ); ?>" id="<?php echo esc_attr( $this->get_field_id('facebook')); ?>" value="<?php
                 if (isset($instance['facebook']) && $instance['facebook'] != '' ) :
                   echo esc_attr($instance['facebook']);
                  endif;

                  ?>" class="widefat" />
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('twitter') ); ?>"><?php _e( 'Twitter', 'alyssas-blog' ); ?></label><br />
                <input type="text" name="<?php echo esc_attr( $this->get_field_name('twitter') ); ?>" id="<?php echo esc_attr( $this->get_field_id('twitter')); ?>" value="<?php
                 if (isset($instance['twitter']) && $instance['twitter'] != '' ) :
                   echo esc_attr($instance['twitter']);
                  endif;

                  ?>" class="widefat" />
            </p>
      

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('instagram') ); ?>"><?php _e( 'Instagram', 'alyssas-blog' ); ?></label><br />
                <input type="text" name="<?php echo esc_attr( $this->get_field_name('instagram') ); ?>" id="<?php echo esc_attr( $this->get_field_id('instagram')); ?>" value="<?php
                 if (isset($instance['instagram']) && $instance['instagram'] != '' ) :
                   echo esc_attr($instance['instagram']);
                  endif;

                  ?>" class="widefat" />
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('linkedin') ); ?>"><?php _e( 'Linkedin', 'alyssas-blog' ); ?></label><br />
                <input type="text" name="<?php echo esc_attr( $this->get_field_name('linkedin') ); ?>" id="<?php echo esc_attr( $this->get_field_id('linkedin')); ?>" value="<?php
                 if (isset($instance['linkedin']) && $instance['linkedin'] != '' ) :
                   echo esc_attr($instance['linkedin']);
                  endif;

                  ?>" class="widefat" />
            </p>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('youtube') ); ?>"><?php _e( 'Youtube', 'alyssas-blog' ); ?></label><br />
                <input type="text" name="<?php echo esc_attr( $this->get_field_name('youtube') ); ?>" id="<?php echo esc_attr( $this->get_field_id('youtube')); ?>" value="<?php
                 if (isset($instance['youtube']) && $instance['youtube'] != '' ) :
                   echo esc_attr($instance['youtube']);
                  endif;

                  ?>" class="widefat" />
            </p>
          <?php
     }
}


add_action( 'widgets_init', 'Alyssas_Blog_Social_Widget' ); 
function Alyssas_Blog_Social_Widget(){     
    register_widget( 'Alyssas_Blog_Social_Widget' );

}






