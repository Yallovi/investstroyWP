<?php
/*
Template Name:О компании
*/
?>
	<?php get_header(); ?>

        <div class="row">
            <div class="col-lg-4">
            	<?php get_sidebar(); ?>
            </div>
            <div class="col-lg-8">
                <div class="content">
                    <h2> <?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <a href="#" class="btn btn-primary">Узнать больше о компании</a>
                </div><!-- content -->
                <h2>Руководство СтройИнвест</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/img/team/1.png" alt="Петров Дмитрий">
                            <h4>Петров Дмитрий</h4>
                            <p>Петров Дмитрий</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/team/2.png" alt="Иванов Васисилий">
                            <h4>Иванов Васисилий</h4>
                            <p>Директор, руководитель Департамента по работе с недвижимостью</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/team/3.png" alt="Василькова Анна">
                            <h4>Василькова Анна</h4>
                            <p>Руководитель Департамента по работе с клиентами</p>
                        </div>
                    </div>
                </div>
            

    <?php get_footer(); ?>