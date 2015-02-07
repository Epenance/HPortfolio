<!DOCTYPE html>
<html>
  <head>
    <title>Martin Hobert - Portfolio</title>
    <link href="css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport" />
  </head>
  <body>
    <nav class="navbar">
      <div class="container">
        <div id="title">
          <a href="#top_content"><span>M</span>artin <span>H</span>obert</a>
        </div>
        <div id="mobile_toggle">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <ul id="mainmenu">
          <li>
            <a href="#aboutScroll">About</a>
          </li>
          <li>
            <a href="#work">Work</a>
          </li>
          <li>
            <a href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    <section id="top_content">
      <div class="content_center">
        <div class="content">
          <h1>
            HEY, I'M a frontend webdeveloper
          </h1>
          <p>
            I turn static designs into fully functional & beautiful websites. I have a passion for CSS transitions and animations.
          </p>
          <a class="btn btn_white" href="#contact">Lets talk</a>
        </div>
      </div>
      <div class="dark_overlay"></div>
    </section>
    <section id="about">
      <div class="row">
        <div class="about_left">
          <div class="content_center">
            <div class="content">
              <a class="btn btn_white" href="#contact">Contact</a>
            </div>
          </div>
          <div class="dark_overlay"></div>
        </div>
        <div class="about_text" id="aboutScroll">
          <h2>
            I am an <span class="bold">creative</span> frontend web developer with specialization in <span class="bold">responsive</span> design.
          </h2>
          <p>
            Ive been around and about, I've worked with many different languages such as Ruby on Rails, PHP, C#, HTML5, CSS3, JavaScript and more. I started out as a overall programmer who did both front- and backend work for my agency, taking PSD's and turning them into actual functional websites.
          </p>
          <p>
            I later on realized how much I enjoyed Frontend developing and figuring out ways to "communicate" with my visitors, proudly showing them around my websites with CTA placements.
          </p>
          <p>
            I love challenging myself and always try to learn new things when doing a project, as well as reading a ton of articles in order to keep up with the newest technologies.
          </p>
        </div>
      </div>
      <div class="row about_desc">
        <div class="container">
          <h2 class="title">
            My prefered tools
          </h2>
          <p class="sub_title">
            Everycrafts man has a set of tools, here is mine:
          </p>
          <div class="row">
            <div class="tile">
              <div class="tile_icon">
                <?php include('svg/atom.php') ?>
              </div>
              <div class="tile_desc">
                <p>
                  Atom is a hackable text editor for the 21st Century
                </p>
                <p>
                  It's huge community is what makes it my favorite editor
                </p>
              </div>
            </div>
            <div class="tile">
              <div class="tile_icon">
                <?php include('svg/chrome.php') ?>
              </div>
              <div class="tile_desc">
                <p>
                  Chrome is a fast, simple, and secure web browser, built for the modern web.
                </p>
                <p>
                  Chrome is also my favorite browser
                </p>
              </div>
            </div>
            <div class="tile">
              <div class="tile_icon">
                <?php include('svg/grunt.php') ?>
              </div>
              <div class="tile_desc">
                <p>
                  With literally hundreds of plugins to choose from, you can use Grunt to automate just about anything with a minimum of effort.
                </p>
              </div>
            </div>
            <div class="tile">
              <div class="tile_icon">
                <?php include('svg/html5.php') ?>
              </div>
              <div class="tile_desc">
                <p>
                  HTML5 is a core technology markup language of the Internet used for structuring and presenting content for the World Wide Web.
                </p>
              </div>
            </div>
            <div class="tile">
              <div class="tile_icon">
                <?php include('svg/javascript.php') ?>
              </div>
              <div class="tile_desc">
                <p>
                  JavaScript is the programming language of the Web
                </p>
                <p>
                  JavaScript allow client-side scripts to interact with the user as well as server-side with Node.js or alike.
                </p>
              </div>
            </div>
            <div class="tile">
              <div class="tile_icon">
                <?php include('svg/ie.php') ?>
              </div>
              <div class="tile_desc">
                <p>
                  Make Internet Explorer your default internet browser.
                </p>
                <p>
                  Surf the web with the fast, fluid, perfect–for–touch browser.
                </p>
                <p>
                  Just kidding, please dont do that.
                </p>
              </div>
            </div>
            <div class="tile">
              <div class="tile_icon">
                <?php include('svg/php.php') ?>
              </div>
              <div class="tile_desc">
                <p>
                  PHP is a server-side scripting language designed for web development and my go-to language when creating backends.
                </p>
              </div>
            </div>
            <div class="tile">
              <div class="tile_icon">
                <?php include('svg/sass.php') ?>
              </div>
              <div class="tile_desc">
                <p>
                  Sass is the most mature, stable, and powerful professional grade CSS extension language in the world.
                </p>
                <p>
                  Combined with Compass it makes styling a dream.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="work">
      <div class="y_half row">
        <div class="work" style="background-image: url(img/content/preadly.jpg);">
          <div class="content_center">
            <div class="content">
              <a class="btn btn_white" href="work.php?project=preadly">Preadly</a>
            </div>
          </div>
          <div class="dark_overlay"></div>
        </div>
        <div class="work" style="background-image: url(img/content/washa.jpg);">
          <div class="content_center">
            <div class="content">
              <a class="btn btn_white" href="work.php?project=washa">Washa</a>
            </div>
          </div>
          <div class="dark_overlay"></div>
        </div>
        <div class="work" style="background-image: url(img/content/pdm.jpg);">
          <div class="content_center">
            <div class="content">
              <a class="btn btn_white" href="work.php?project=partnerdialog">Partnerdialog</a>
            </div>
          </div>
          <div class="dark_overlay"></div>
        </div>
        <div class="work" style="background-image: url(img/content/pls.jpg);">
          <div class="content_center">
            <div class="content">
              <a class="btn btn_white" href="work.php?project=projectlightstyle">Project Lightstyle</a>
            </div>
          </div>
          <div class="dark_overlay"></div>
        </div>
      </div>
      <div class="y_half row">
        <div class="work" style="background-image: url(img/content/hoberthovers.jpg);">
          <div class="content_center">
            <div class="content">
              <a class="btn btn_white" href="work.php?project=hoberthovers">Hobert Hovers</a>
            </div>
          </div>
          <div class="dark_overlay"></div>
        </div>
        <div class="work" style="background-image: url(img/content/mindfullife2.jpg);">
          <div class="content_center">
            <div class="content">
              <a class="btn btn_white" href="work.php?project=mindfullife">Mindfullife</a>
            </div>
          </div>
          <div class="dark_overlay"></div>
        </div>
        <div class="work" style="background-image: url(img/content/gamestation.jpg);">
          <div class="content_center">
            <div class="content">
              <a class="btn btn_white" href="work.php?project=gamestation">Game-Station</a>
            </div>
          </div>
          <div class="dark_overlay"></div>
        </div>
        <div class="work" style="background-image: url(img/content/you.jpg);">
          <div class="content_center">
            <div class="content">
              <a class="btn btn_white" href="#contact">You?</a>
            </div>
          </div>
          <div class="dark_overlay"></div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="row" id="contactHeading">
        <a href="mailto:info@dosh.dk" id="contactMail"><?php include('svg/mail.php') ?></a>
      </div>
      <div class="row">
        <form>
          <table id="contactTable">
            <tr>
              <td>
                <input id="contactFirstName" name="contactFirstName" required="" type="text" /><label for="contactFirstName">First Name</label>
              </td>
              <td>
                <input id="contactLastName" name="contactLastName" required="" type="text" /><label for="contactLastName">Last Name</label>
              </td>
              <tr></tr>
              <td>
                <input id="contactEmail" name="contactEmail" required="" type="text" /><label for="contactEmail">Email</label>
              </td>
              <td>
                <input id="contactPhone" name="contactPhone" required="" type="text" /><label for="contactPhone">Phone</label>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <textarea id="contactMessage" name="contactMessage" required="" type="text"></textarea><label for="contactMessage">Message</label>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <input class="btn" type="submit" value="send message" />
                <p class="sub_title">
                  Or send me a mail at </br><a class="btn" href="mailto:info@dosh.dk">info@dosh.dk</a>
                </p>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </section>
    <footer>
      © COPYRIGHT 2015 Martin Hobert ALL RIGHTS RESERVED
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/fancy.js"></script>
  </body>
</html>
