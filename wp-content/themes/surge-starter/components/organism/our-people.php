<?php
      /*=============================================
      =    Card Header (Class,Subtitle,Title,Content)
      = @components
        + molecule/card-header
      =============================================*/
      get_component([ 'template' => 'molecule/card',
                      'remove_tags' => $vars['remove_elements'],
                      'vars' => [
                            "class" => $vars["class"],
                            "subtitle" => $vars["subtitle"],
                            "image" => $vars["image"],
                            "title" => $vars["title"],
                            "content" => $vars["content"],
                            "button" => $vars['button']
                            ]
                       ]);
   ?>
    <!-- <div class="wrapper"> -->
     <?php

        // WP_Query arguments
     
      foreach ($vars['jobs'] as $key => $value) {
         
        $termObj = get_term($value);
        
        $term= $termObj->taxonomy."_".$termObj->term_id;
        $button = get_field("button",$term);
            /*=============================================
            = Card (Class,Image,Title,Content)
            = @components
              + molecule/card
            =============================================*/
            get_component([ 'template' => 'molecule/card',
                            'remove_tags'=>get_field("remmove_elements",$term),
                            'vars' => [
                                  "class" => "col-md-6 text-left ".get_field("class",$term),
                                  "title" => get_field("title",$term),
                                  "subtitle"=> get_field("subtitle",$term),
                                  "image" => get_field("image",$term),
                                  "content" => get_field("content",$term),
                                  "button" => $button
                                  ]
                             ]);?>
        
        <div class="collapse" id="<?php echo $termObj->slug; ?>">
          <div class="well">
           Test
          </div>
        </div>
       <?php   
       } 
    
   

  
          ?>
    <!-- </div> -->
