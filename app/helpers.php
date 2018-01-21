<?php

 
function generateList($parent,$categories) {
  $has_childs = false;
   
    foreach($categories as $key => $value)

    {

            if ($value->parent == $parent) 

            {       


                    //if this is the first child print '&lt;ul&gt;'    
                                      
            		if($value->parent == 0){
            			
            			echo '<div class="panel panel-default">
            			<div class="panel-heading">
            			<h4 class="panel-title">
            			 <a data-toggle="collapse" data-parent="#accordian" href="#'.$value->name.'">
            			 <span class="badge pull-right"><i class="fa fa-plus"></i></span>'
            			 .$value->name.
            			 '</a>
                  		</h4>
                		</div>';
                		
            		}
                    if ($has_childs === false)

                    {

                            //don't print '&lt;ul&gt;' multiple times                             

                            $has_childs = true;

                           // echo '<ul>';

                    }
                    if($value->parent != 0){
                    	echo ' <div id="'.$value->parent_name.'" class="panel-collapse collapse">
                 				 <div class="panel-body">
                 				 	<ul>
                  					<li><a href="/category/' . $value->name . '/">' . $value->name . '</a>';
                	}
                    generateList($key+1,$categories);

                    //call function again to generate nested list for subcategories belonging to this category
                    if($value->parent != 0){
                 	   echo '</li></ul></div></div>';
                	}
                    if($value->parent == 0){
            			echo '</div>';
            		}

            }

    }

    //if ($has_childs === true) echo '</ul>';
}