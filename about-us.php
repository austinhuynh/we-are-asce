<?php
/**
 * Template Name: About Us
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us | UCSD AS Concerts & Events</title>
  <?php get_header(); ?>
<body>
  <main>
    <article>
      <div class="nav-landing-container">
        <nav class="nav">
          <div class="nav-item"></div>

          <div class="nav-item link">
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <!-- <a href="<?php site_url(); ?>/about-us" class="active">About Us</a> -->
                <a href="<?php echo get_permalink( get_page_by_path( 'about-us' ) ); ?>">About Us</a>
              </li>
              <li>
                <!-- <a href="<?php site_url(); ?>/get-involved">Get Involved</a> -->
                <a href="<?php echo get_permalink( get_page_by_path( 'get-involved' ) ); ?>">Get Involved</a>
              </li>
            </ul>
          </div>

          <img id="menu-icon" src="<?php echo get_template_directory_uri().'/images/menu.svg'; ?>" />
        </nav>
      </div>

      <div id="menu-overlay"></div>
      <div id="menu">
        <ul>
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <!-- <a href="<?php site_url(); ?>/about-us" class="active">About Us</a> -->
            <a href="<?php echo get_permalink( get_page_by_path( 'about-us' ) ); ?>">About Us</a>
          </li>
          <li>
            <!-- <a href="<?php site_url(); ?>/get-involved">Get Involved</a> -->
            <a href="<?php echo get_permalink( get_page_by_path( 'get-involved' ) ); ?>">Get Involved</a>
          </li>
        </ul>

        <ul>
          <li>
            <a href="/">
              <img src="<?php echo get_template_directory_uri().'/images/logos/asce-dark.svg'; ?>" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/ucsdasce/?hl=en" target="_blank">
              <img src="<?php echo get_template_directory_uri().'/images/logos/instagram-dark.svg'; ?>" />
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/ucsdasce/" target="_blank">
              <img src="<?php echo get_template_directory_uri().'/images/logos/facebook-dark.svg'; ?>" />
            </a>
          </li>
        </ul>
      </div>

      <div class="content-container">
        <h1 class="page-header mb5">We are ASCE.</h1>

        <div class="content-grid mb10">
          <div></div>

          <div>
            <h4 class="mb1">About Us:</h4>
            <p class="mb2">
              The Associated Students office of Concerts & Events (ASCE) is the 
              student programming board responsible for some of the longest 
              standing campus traditions at UC San Diego, such as You At The 
              Loft, Bear Gardens, and the Sun God Festival. Utilizing student 
              input, we pride ourselves in catering to our student body through 
              a diverse range of events. Any undergraduate student interested 
              in our organization can join and contribute to our team by 
              becoming a general body member.
            </p>

            <h4 class="mb1">Our Vision:</h4>
            <p class="mb2">
              To spearhead a culture at UC San Diego that prioritizes the 
              college experience of current students.
            </p>

            <h4 class="mb1">Our Mission:</h4>
            <p class="mb2">
              To provide standout programming for the UC San Diego 
              undergraduate student body to make their college experience 
              memorable.
            </p>

            <h4 class="mb1">Our Core Values:</h4>
            <p>
              Accessibility: our organization is open to any undergraduate 
              willing to join 
            </p>
            <p>
              Recognizability: we pride ourselves in careful, precise planning 
              and execution 
            </p>
            <p>
              Input: basing our decisions off of student data
            </p>
          </div>
        </div>

        <h1 class="page-header mb5">Meet the Team</h1>
        <div class="content-grid mb10">
          <p>
            ASCE has become synonymous with exquisite detail, beautiful 
            production, and exceptional talent. Each of the departments within 
            our office work together to create the experience that you enjoy.
          </p>
        </div>
        <div></div>

        <div class="team mb10">
          <h2>Sr. Associate Vice President</h2>
          <hr class="mb2" />
          <p>
            The Sr. Associate Vice President manages the office and its various 
            departments. The Sr. AVP oversees financial accounts, event 
            planning, talent booking, marketing, and staff development. They 
            also act as a liaison between ASCE and its external partners, 
            including the Associated Students President, the Vice Chancellor of 
            Student Affairs, and more.
          </p>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Sydney Joe</h4>
              <a href="mailto:avpconcerts@ucsd.edu">avpconcerts@ucsd.edu</a>
              <p>Sr. Associate Vice President</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Sydney.png'; ?>" />
          </div>
        </div>

        <div class="team mb10">
          <h2>Marketing Team</h2>
          <hr class="mb2" />
          <p>
            The Marketing Team is responsible for integrating ASCE into the 
            UCSD student life by promoting our events and brand via several 
            different outlets. Working to advertise our programs, festivals, 
            and volunteer opportunities, this team helps to not only put our 
            events in front of students, but also grow the organization as a 
            whole.
          </p>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Princess Labrador</h4>
              <a href="mailto:ascemarketing@ucsd.edu">ascemarketing@ucsd.edu</a>
              <p>Marketing Director</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Princess.png'; ?>" />
            </div>
          </div>

        <div class="team mb10">
          <h2>Bear Garden Team</h2>
          <hr class="mb2" />
          <p>
            The Bear Garden team works to put on five daytime carnivals 
            throughout the academic year. A space for students to lounge and 
            wind down with free food, games, and prizes, the Bear Gardens have 
            grown to become increasingly popular amongst the undergraduate 
            population.
          </p>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Vivian Hoang</h4>
              <a href="mailto:ascebeargarden@ucsd.edu">ascebeargarden@ucsd.edu</a>
              <p>Bear Garden Director</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/default.svg'; ?>" />
          </div>
      
      <div class="footer-spacer"></div>

      <footer class="footer-container">
        <nav class="nav">
          <div class="nav-item social">
            <ul>
              <li>
                <a href="/">
                  <img src="<?php echo get_template_directory_uri().'/images/logos/asce-dark.svg'; ?>" />
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/ucsdasce/?hl=en" target="_blank">
                  <img src="<?php echo get_template_directory_uri().'/images/logos/instagram-dark.svg'; ?>" />
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/ucsdasce/" target="_blank">
                  <img src="<?php echo get_template_directory_uri().'/images/logos/facebook-dark.svg'; ?>" />
                </a>
              </li>
            </ul>
          </div>

          <div class="nav-item"></div>
        </nav>
      </footer>
    </article>
  </main>
  <?php get_footer(); ?>
</body>
</html>