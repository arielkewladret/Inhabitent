<!-- <?php

class Blog_Post {
   public $author;
   public $post_name;
   public $publish_date;
   public $is_published;
   public $is_published = false; 

   function __construct($author, $post_name, $publish_date) { 
       $this->author = $author; 
       $this->post_name =$post_name; 
       $this->publish_date =$publish_date; 

   }

   public function publish(){ 
       echo $this->post_name ."has been published."; 

   }

//    $post_1 =new Blog_Post('Jim', 'Space Stuff','Nov 2019') -->


//    class My_Widget extends WP_Widget {
//     // Sets up the widgets name, slug, and other options
//     public function __construct() {
//     }
//     // Outputs the content of the widget on the front-end
//     public function widget( $args, $instance ) {
//     }
//     // Outputs the options form in the dashboard appearance->widgets
//     public function form( $instance ) {
//     }
//     // Processing widget options on save
//     public function update( $new_instance, $old_instance ) {
//     }
//  }