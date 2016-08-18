
  <?php
    get_component([ 'template' => 'molecule/card',
                    'remove_tags' => $vars['remove_elements'],
                      'vars' => [
                            "class" => 'title',
                            "title" => $vars["title"],
                            "subtitle" => $vars["subtitle"],
                            "content" => $vars["content"],
                            "button" => $vars['button']
                            ]
                       ]);
   ?>
    <!-- <div class="wrapper"> -->
     <?php

        // WP_Query arguments
      $args = array (
        "post_type" => "case-study",
        "post__in" => $vars['website_items'],
        "orderby" => "post__in"
      );

      // The Query
      $query = new WP_Query( $args );

      // The Loop
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();
           /*=============================================
            = Card (Class,Image,Title,Content)
            = @components
              + molecule/card
            =============================================*/
            get_component([ 'template' => 'molecule/card',
                            'remove_tags'=>['h6'],
                            'vars' => [
                                  "class" => 'case_study',
                                  "title" => get_the_title(),
                                  "image" => get_field("main_image"),
                                  "content" => get_the_content(),
                                  "button" => ""
                                  ]
                             ]);
        }
      } else {
        // no posts found
      }

      // Restore original Post Data
      wp_reset_postdata();
          ?>
    <!-- </div> -->
