
    
    <?php
    
    get_header(); 

    ?>

</head> 

<body>
    
    
    
    
		<article class="content px-3 py-5 p-md-5">
	    
		<?php

			if( have_posts() ) {
			
				while( have_posts() ) {
					the_post();

                    get_template_part('template-parts/content', 'page');
                    get_template_part('template-parts/gallery', 'personal');
					
				}


			}
		
		
		
		?>

	    </article>
	   
    
    <?php
    get_footer();
    ?>
    

</body>
</html> 

