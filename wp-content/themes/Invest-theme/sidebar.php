<div class="left-sidebar">
                    <div class="left-sidebar_btn">
                        Категории
                    </div>

                    <ul class="left-sidebar_menu">
                        <?php 
                                                $args = array(
                            'show_option_all'    => '',
                            'orderby'            => 'name',
                            'order'              => 'ASC',
                            'style'              => 'list',
                            'show_count'         => 0,
                            'hide_empty'         => 0,
                            'use_desc_for_title' => 1,
                            'child_of'           => 0,
                            'feed'               => '',
                            'feed_type'          => '',
                            'feed_image'         => '',
                            'exclude'            => '1',
                            'exclude_tree'       => '',
                            'include'            => '',
                            'hierarchical'       => true,
                            'title_li'           => NULL,
                            'number'             => NULL,
                            'echo'               => 1,
                            'depth'              => 0,
                            'current_category'   => 0,
                            'pad_counts'         => 0,
                            'taxonomy'           => 'category',
                            'walker'             => 'Walker_Category',
                            'hide_title_if_empty' => false,
                            'separator'          => '<br />',
                        );
                            wp_list_categories( $args );
                         ?>
                    </ul>
                    <?php wp_reset_postdata() ?>
                    <div class="left-sidebar_object">
                        <img src="/img/object/object.png" alt="">
                        <div class="left-sidebar_object-description">
                            <h3>Жилой комплекс в Г. Москва</h3>
                            <p>190-квартирный 12-этажный жилой дом № 88 по ул. Ленина в микрорайоне Центральный...</p>
                            <a href="#">Узнать подробнее »</a>
                        </div> 
                    </div>
                    <div class="left-sidebar_object">
                        <img src="/img/object/object-2.png" alt="">
                        <div class="left-sidebar_object-description">
                            <h3>Жилой комплекс в Г. Минске</h3>
                            <p>119-квартирный 7-этажный жилой дом № 112 по ул. Гагарина Восточного района г.Казани</p>
                            <a href="#">Узнать подробнее »</a>
                        </div> 
                    </div>
                </div>