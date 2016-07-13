<section id="<?php echo $vars['id'] ?>" class="<?php echo $vars['section_width'] ?> <?php echo $vars['padding'] ?> <?php echo $vars['margin'] ?>" style="background-image:url(<?php echo $vars['background_image'] ?>); background-color:<?php echo $vars['background_color'] ?>">
    <div class="owl-carousel">


  <?php
    foreach ($vars['element'] as $key => $value) {
      get_component([ 'template' => 'molecule/card',
              'remove_tags' =>  [],
                      'vars' => [
                            "class" => 'col-md-3 card',
                            "title" => $value['title'],
                            "subtitle" => $value["subtitle"],
                            // "content" => get_the_content(),
                            "button" => get_component([
                                'template' => 'atom/button-list',
                                'return_string' => true,
                                'vars' => ["button_list"=>$value["button"]]
                                ])
                            ]
                       ]);
    }
  ?>
  </div>
</section>
