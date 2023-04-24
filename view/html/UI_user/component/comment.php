<?php
        foreach($commentList as $comment){
            echo '
            <!--begin: user comment -->
            <div class="item-review">   
                <div class="d-flex">
                    <img src="'.$comment["avatar"].'.jpg" alt="" class="user-img loading=\'lazy\'">
                    <div class="ms-3">
                        <div class="user-name"><bold>'.$comment["name"].'<bold/> </div>';
                        for($i = 0; $i < $comment['star'] ;$i += 1){
                            echo'
                            <span class="pink-color fa fa-star "></span>
                            ';

                        }
                echo '
                    </div>
                </div>
                
                <div class="user-comment" style="margin-left: 65px;">
                    '.$comment['comment'].'
                </div> 
                <hr style="height:1px;border-width:0;color:gray;background-color:gray">        
            </div>
            <!--end: user comment -->
            
            ';
        }

    ?>   
    