<article class="swiper-slide" @php post_class() @endphp>
  @php
      //this is the right file
  @endphp
    <a href="<?php echo get_permalink(get_the_ID())?>">
    <div class="agent item">
      <div class="titles">
        <h3>{!! get_field('origin') !!}</h3>
        <h2>{!! get_the_title() !!}</h2>
        
      </div>
      <div>
        <div class="mask">
          <img src="<?= get_field('illustration')['url'] ?>" alt="">
        </div>
    </div>
    <div class="capacitys">
      <?php 
      if (!empty(get_field('indiv_capacity'))) {
        $capacitys=get_field('indiv_capacity');
        foreach ($capacitys as $key => $value) {
      ?> 
        <div class="capacity">
          <img src="<?php echo($value['url'])?>" alt=""> </div>
      <?php
        } 
      }
      ?>
    </div>
</div>
</article>
