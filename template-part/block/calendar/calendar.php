<?php

/**
 * blockname Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'c-calendar-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'c-calendar';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( $is_preview ) {
    $className .= ' is-admin';
}


?>

    <div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?> ">

 <div class="c-calendar-grid">
   <div class="c-calendar-day">
      
      <?php if( have_rows('mondays') ): ?>
        <div class="c-calendar-day-title">Monday</div>
       <?php while( have_rows('mondays') ): the_row(); ?>
       <div <?php 
        if( get_sub_field('program_description') ) { 
          echo 'title="' . htmlspecialchars(get_sub_field('program_description')) . '"';
        }
      ?> class="c-calendar-event tooltip" data-location="<?php echo get_sub_field('location'); ?>">
       <div class="c-calendar-event-title"><?php echo get_sub_field('title'); ?> </div>
        <div class="c-calendar-event-time"><?php echo get_sub_field('time'); ?></div>
        <div class="c-calendar-event-date"><?php echo get_sub_field('dates'); ?></div>
        <div class="c-calendar-event-location"><?php echo get_sub_field('location'); ?></div>
         <div class="c-calendar-event-alert"><?php echo get_sub_field('alert'); ?></div>
         
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
   </div>
    <div class="c-calendar-day">
      <div class="c-calendar-day-title">Tuesday</div>
      <?php if( have_rows('tuesday') ): ?>
       <?php while( have_rows('tuesday') ): the_row(); ?>
       <div <?php 
        if( get_sub_field('program_description') ) { 
          echo 'title="' . htmlspecialchars(get_sub_field('program_description')) . '"';
        }
      ?> class="c-calendar-event tooltip" data-location="<?php echo get_sub_field('location'); ?>">
       <div class="c-calendar-event-title"><?php echo get_sub_field('title'); ?> </div>
        <div class="c-calendar-event-time"><?php echo get_sub_field('time'); ?></div>
        <div class="c-calendar-event-date"><?php echo get_sub_field('dates'); ?></div>
        <div class="c-calendar-event-location"><?php echo get_sub_field('location'); ?></div>
         <div class="c-calendar-event-alert"><?php echo get_sub_field('alert'); ?></div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="c-calendar-day">
      <div class="c-calendar-day-title">Wednesday</div>
      <?php if( have_rows('wednesdays') ): ?>
       <?php while( have_rows('wednesdays') ): the_row(); ?>
       <div <?php 
        if( get_sub_field('program_description') ) { 
          echo 'title="' . htmlspecialchars(get_sub_field('program_description')) . '"';
        }
      ?> class="c-calendar-event tooltip" data-location="<?php echo get_sub_field('location'); ?>">
       <div class="c-calendar-event-title"><?php echo get_sub_field('title'); ?> </div>
        <div class="c-calendar-event-time"><?php echo get_sub_field('time'); ?></div>
        <div class="c-calendar-event-date"><?php echo get_sub_field('dates'); ?></div>
        <div class="c-calendar-event-location"><?php echo get_sub_field('location'); ?></div>
         <div class="c-calendar-event-alert"><?php echo get_sub_field('alert'); ?></div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
   </div>
    <div class="c-calendar-day">
      <div class="c-calendar-day-title">Thursday</div>
      <?php if( have_rows('thursdays') ): ?>
       <?php while( have_rows('thursdays') ): the_row(); ?>
       <div <?php 
        if( get_sub_field('program_description') ) { 
          echo 'title="' . htmlspecialchars(get_sub_field('program_description')) . '"';
        }
      ?> class="c-calendar-event tooltip" data-location="<?php echo get_sub_field('location'); ?>">
       <div class="c-calendar-event-title"><?php echo get_sub_field('title'); ?> </div>
        <div class="c-calendar-event-time"><?php echo get_sub_field('time'); ?></div>
        <div class="c-calendar-event-date"><?php echo get_sub_field('dates'); ?></div>
        <div class="c-calendar-event-location"><?php echo get_sub_field('location'); ?></div>
         <div class="c-calendar-event-alert"><?php echo get_sub_field('alert'); ?></div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
   </div>
    <div class="c-calendar-day">
      <div class="c-calendar-day-title">Friday</div>
      <?php if( have_rows('fridays') ): ?>
       <?php while( have_rows('fridays') ): the_row(); ?>
       <div <?php 
        if( get_sub_field('program_description') ) { 
          echo 'title="' . htmlspecialchars(get_sub_field('program_description')) . '"';
        }
      ?> class="c-calendar-event tooltip" data-location="<?php echo get_sub_field('location'); ?>">
       <div class="c-calendar-event-title"><?php echo get_sub_field('title'); ?> </div>
        <div class="c-calendar-event-time"><?php echo get_sub_field('time'); ?></div>
        <div class="c-calendar-event-date"><?php echo get_sub_field('dates'); ?></div>
        <div class="c-calendar-event-location"><?php echo get_sub_field('location'); ?></div>
         <div class="c-calendar-event-alert"><?php echo get_sub_field('alert'); ?></div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
   </div>
 </div>

 <div class="c-calendar-locations">
  <h6>Locations</h6>
  <div class="c-location-items">
    <?php if( have_rows('locations') ): ?>
     <?php while( have_rows('locations') ): the_row(); ?>
    <div class="c-location-item" data-location="<?php echo get_sub_field('legend_location'); ?>">

<?php 
    $full_name = get_sub_field('full_name');
    if (!empty($full_name)) {
        echo $full_name;
    } else {
        echo get_sub_field('legend_location'); 
    }
?>
    <?php if( get_sub_field('address') ) { echo '<p>' . get_sub_field('address') . '</p>'; }?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
 </div>

    </div>

        

    <script>

      // Get all elements with class .c-calendar-day
      let calendarDays = document.querySelectorAll('.c-calendar-day');

      // Loop through all calendar days
      calendarDays.forEach((day) => {
        // Check if the day contains any .c-calendar-event elements
        if (day.querySelectorAll('.c-calendar-event').length === 0) {
          // Create a new div element
          let blockedOffDiv = document.createElement('div');
          
          // Add a class to the new div
          blockedOffDiv.classList.add('blocked-off');
          
          // Set the text content of the new div
          blockedOffDiv.textContent = 'No Events on This Day';
          
          // Append the new div to the day
          day.appendChild(blockedOffDiv);
        }
      });



      
      // Create a colors array for different locations
      const colors = ["#e8f2f9", "#f9e3d9", "#e8e4d6", "#ded6e6", "#d0caae", "#f4dca8", "#c1e1f3"];

      // Create a map to store locations and their corresponding colors
      let locationColorMap = new Map();

      // Get all elements with class .c-calendar-event
      let calendarEvents = document.querySelectorAll('.c-calendar-event');

      // Loop through all calendar events
      calendarEvents.forEach((event) => {
        let location = event.getAttribute('data-location');

        // If location is not in the map, add it with a new color
        if (!locationColorMap.has(location)) {
          locationColorMap.set(location, colors[locationColorMap.size % colors.length]);
        }

        // Apply the color to the background of the event
        event.style.backgroundColor = locationColorMap.get(location);
      });

      // Get all elements with class .c-calendar-locations
      let calendarLocations = document.querySelectorAll('.c-location-item');

      // Loop through all calendar locations
      calendarLocations.forEach((locationElement) => {
        let location = locationElement.getAttribute('data-location');

        // If location is in the map, apply the color to the background of the location element
        if (locationColorMap.has(location)) {
          locationElement.style.backgroundColor = locationColorMap.get(location);
        }
      });
    </script>
