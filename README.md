
<div id="top"></div>

<div align="center">

<div style="filter: invert(96%) sepia(12%) saturate(1589%) hue-rotate(343deg) brightness(98%) contrast(105%);">
<img src="https://cdn.jsdelivr.net/npm/@mdi/svg@6.7.96/svg/page-layout-footer.svg" style="width:200px;"/>
</div>

<h3 align="center">Select Page as Global Footer</h3>

<p align="center">
    Allows you to pick a page that becomes the global website footer. Useful because you can adjust the footer using page-builders or WYSIWYG editors.
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents


* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
	* 3.1. [In footer.php](#Infooter.php)
	* 3.2. [Using with Visual Bakery](#UsingwithVisualBakery)
* 4. [Customising](#Customising)
* 5. [Contributing](#Contributing)
* 6. [License](#License)
* 7. [Contact](#Contact)
* 8. [Changelog](#Changelog)


##  2. <a name='AboutTheProject'></a>About The Project

Allows you to create a page that will be used as the website global footer. 

Depends on ACF PRo.

<p align="right">(<a href="#top">back to top</a>)</p>


###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [ACF Pro](https://advancedcustomfields.com/)
* [Composer](https://getcomposer.org/)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```bash
    git clone https://github.com/IORoot/wp-plugin__footer ./wp-content/plugins/page-as-footer
    ```
1. Activate the plugin.


<p align="right">(<a href="#top">back to top</a>)</p>

##  3. <a name='Usage'></a>Usage

The plugin will give you a new menu option 'Footer Selector' that will allow you to choose a specific page for a footer. The contents of this page will be output to the footer template file.


###  3.1. <a name='Infooter.php'></a>In footer.php


The footer PHP file will need to grab the ID selected and output it. This is done with the following code:

```php
    //  ┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
    //  ┃                                                                         ┃
    //  ┃                     See ANDYP_FOOTER_SELECT Plugin                      ┃
    //  ┃                                                                         ┃
    //  ┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛
    $content_post = get_post( get_field('footer_page', 'option') );
    if ($content_post != ''){
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
    } else {
        echo 'Copyright 2020, LondonParkour.com';
    }
```

This simply requests the selected page ID and uses that ID on the get_post() function.

###  3.2. <a name='UsingwithVisualBakery'></a>Using with Visual Bakery

To output the contents of a page builder page, you need a little extra.

First, create a function to get the CSS.
```php
    function vc_custom_css($id) {
        $shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
        if ( ! empty( $shortcodes_custom_css ) ) {
            echo '<style type="text/css">';
            echo $shortcodes_custom_css;
            echo '</style>';
        }
    }
```


Then you need to call the Visual Composer content and run a do_shortcode() on it.
```php
    //  ┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
    //  ┃                                                                         ┃
    //  ┃                     See ANDYP_FOOTER_SELECT Plugin                      ┃
    //  ┃                                                                         ┃
    //  ┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛
    
    $id = get_field('footer_page', 'option');
    $content_post = get_post( $id );

    if ($content_post != ''){
        vc_custom_css($id);
        echo do_shortcode( get_post_field('post_content', $id) );
        
    } else {
        echo 'Copyright 2020, LondonParkour.com';
    }
```
This will then output the content and append the correct CSS included too.



##  4. <a name='Customising'></a>Customising

Change the selected page however you like. This will in turn adjst the footer globally.

<p align="right">(<a href="#top">back to top</a>)</p>


##  5. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  6. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>


##  8. <a name='Changelog'></a>Changelog

v1.0.0 - Initial.
