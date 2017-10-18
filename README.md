# Divi Child Theme ready for Google Analytics, GreenSock GSAP, Bootsrap and Font Awesome.

This child theme comes with code that allows you to directly use the great features of [Bootstrap](https://getbootstrap.com/docs/3.3/), beautiful icons from [Font Awesome](http://fontawesome.io/) and the crazy fast [GreenSock Animation Platform](https://greensock.com/) in your next project based on one of the most popular theme for Wordpress - Divi. All this in under 500KB.

## Getting Started

These instructions will guide you on how to install this Divi child theme.

### Prerequisites

To use this child theme you need:

* [Wordpress](https://wordpress.org/) - Open source software you can use to create a beautiful website, blog, or app.
* [Divi](https://www.elegantthemes.com/gallery/divi/) - Theme by Elagant themes installed.

### Installing

1. Download/Clone this repository.

    1.1. You can clone this repository to your ```wp-content/themes```  with terminal by using the following commands: ```git clone https://github.com/Denislav23/Divi-child.git```.
    1.2. If you don't have Git installed, you can download the ZIP file and extract it into your ```wp-content/themes``` folder via FTP or just paste it if you are working locally.
    1.3. Download the ZIP file and upload it via the wordpress theme uploader (Appearance -> Themes -> Add New -> Upload Theme).

2. Development.
    2.1. Navigate to your ```Divi-child-master``` folder.
    2.2. Start coding and exploring.

### Features

- Better folder hierarchy
- ```front-page.php``` file in case you want to add something custom for your homepage that can't be done with the Divi builder.
- ```header.php``` - no difference from the original theme file, but included just in case you want to modify something in it.
- ```footer.php``` - removed the Divi branding and added 2 column layout which fills in your site name and current year with the wordpress functions ```get_bloginfo( 'name' )``` and ```date('Y')```. Google analytics tracking code added where you just need to change ```UA-XXXXX-X``` to be your site's ID.
- ```functions.php``` - contains includes of the parent stylesheet and the inludes of the required files for GreenSock GSAP, Bootsrap and Font Awesome. With best practices in mind the resources are registered and included with the wordpress functions ```wp_register_script```, ```wp_register_style```, ```wp_enqueue_script``` and ```wp_enqueue_style```. By default the resources are loaded via CDN, but in case you want to load them from your server just unncomment the lines that use the local resources and comment the CDN ones. As beeing up to date always is very important the autoupdate for plugins is also enabled. To disable it just delete the filter ```add_filter( 'auto_update_plugin', '__return_true' );```.
- ```style.css``` - here goes all your custom CSS styles.
- ```Divi-child/assets/js/custom/custom.js``` - here you can write your JS code and make the magic happen. There is a simple code example that creates smooth appearence for the main menu in just 2 lines of code using the powerfull GreenSock platform.
```
var menu = document.getElementById("et-top-navigation");
TweenMax.fromTo(menu, 2, {opacity: 0}, {opacity: 1});
```
## Versioning

Version:    1.0.0

## Authors

* **Denislav Popov**
