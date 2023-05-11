<aside>
<div class="ml-header d-flex flex-row mt-5 mb-5">
            <?php $categories = get_categories();
            foreach($categories as $category){ ?>
                <h4 class="ml-3 text-black"><a href="<?php echo get_category_link($category);?>"><?php echo $category->name ?></a></h4>
                <?php }?>
            </div>
</aside>