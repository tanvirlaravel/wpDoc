<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Getting Started</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills border" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Template Files</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Main Stylesheet (style.css)</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Post Types</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Organizing Theme Files</a>

            <a class="nav-link" data-toggle="pill" href="#Setting-Development-Environment">Template Hierarchy</a>

            <a class="nav-link" data-toggle="pill" href="#ThemeDevelopmentExamples">Template Tags</a>
            <a class="nav-link" data-toggle="pill" href="#TheLoop">The Loop</a>
            <a class="nav-link" data-toggle="pill" href="#ThemeFunctions">Theme Functions</a>
            <a class="nav-link" data-toggle="pill" href="#LinkingFilesDirectories">Linking Theme Files & Directories</a>
            <a class="nav-link" data-toggle="pill" href="#IncludingCSSJavaScript">Including CSS & JavaScript</a>
            <a class="nav-link" data-toggle="pill" href="#ConditionalTags">Conditional Tags</a>
            <a class="nav-link" data-toggle="pill" href="#CategoriesTagsCustomTaxonomies">Categories, Tags, & Custom Taxonomies</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Template Files</h4>
                <h5>Template Terminology</h5>
                <ul>
                    <li>Templates files exist within a theme and express how your site is displayed.</li>
                    <li>Page Templates are those that apply only to pages to change their look and feel. A page template can be applied to a single page, a page section, or a class of pages.</li>
                    <li>Template Tags are built-in WordPress functions you can use inside a template file to retrieve and display data (such as the_title() and the_content()).</li>
                    <li>Template Hierarchy is the logic WordPress uses to decide which theme template file(s) to use, depending on the content being requested.</li>
                </ul>

                <h4>Template files</h4>
                <p>When someone visits a page on your website, WordPress loads a template based on the request. The type of content that is displayed in by the template file is determined by the Post Type associated with the template file. The Template Hierarchy describes which template file WordPress will load based on the type of request and whether the template exists in the theme. The server then parses the PHP in the template and returns HTML to the visitor.</p>


            </div>


            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Main Stylesheet (style.css)</h4>
                <p>Nothing</p>

            </div>


            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Post Types</h4>
                <p>There are many different types of content in WordPress. These content types are normally described as Post Types</p>
                <p>Internally, all of the Post Types are stored in the same place — in the wp_posts database table — but are differentiated by a database column called post_type.</p>
                <p>In addition to the default Post Types, you can also create Custom Post Types.</p>
                <p>The Template files page briefly mentioned that different Post Types are displayed by different Template files. As the whole purpose of a Template file is to display content a certain way, the Post Types purpose is to categorize what type of content you are dealing with. Generally speaking, certain Post Types are tied to certain template files.</p>

                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Default Post Types</h4>
                <p>There are five default Post Types</p>
                <ol>
                    <li>Post (Post Type: ‘post’)</li>
                    <li>Page (Post Type: ‘page’)</li>
                    <li>Attachment (Post Type: ‘attachment’)</li>
                    <li>Revision (Post Type: ‘revision’)</li>
                    <li>Navigation menu (Post Type: ‘nav_menu_item’)</li>
                </ol>
                <p>Navigation menu (Post Type: ‘nav_menu_item’)</p>

                <h4>Post</h4>
                <ul>
                    <li>may have the default taxonomies of categories and tags applied</li>
                </ul>

                <h4>Page</h4>

                <h4>Attachment</h4>
                <p>Attachments are commonly used to display images or media in content, and may also be used to link to relevant files. Their features are:</p>
                <ul>
                    <li>contain information (such as name or description) about files uploaded through the media upload system</li>
                    <li>for images, this includes metadata information stored in the wp_postmeta table (including size, thumbnails, location, etc)</li>
                </ul>

                <h4>Custom Post Types</h4>



            </div>


            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Organizing Theme Files</h4>
                <h4>Theme folder and file structure</h4>
                <pre class="text-white bg-dark p-2">
                    assets (dir)
                          - css (dir)
                          - images (dir)
                          - js (dir)
                    inc (dir)
                    template-parts (dir)
                          - footer (dir)
                          - header (dir)
                          - navigation (dir)
                          - page (dir)
                          - post (dir)
                    404.php
                    archive.php
                    comments.php
                    footer.php
                    front-page.php
                    functions.php
                    header.php
                    index.php
                    page.php
                    README.txt
                    rtl.css
                    screenshot.png
                    search.php
                    searchform.php
                    sidebar.php
                    single.php
                    style.css
                </pre>

                <h4>Languages folder </h4>
                <p>It’s best practice to internationalize your theme so it can be translated into other languages. Default themes include the languages folder, which contains a .pot file for translation and any translated .mo files. While languages is the default name of this folder, you can change the name. If you do so, you must update load_theme_textdomain().</p>
            </div>

            <div class="tab-pane fade" id="Setting-Development-Environment" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Template Hierarchy</h4>
                <p> template files are modular, reusable files, used to generate the web pages on your WordPress site</p>

                <h4>The Template File Hierarchy </h4>
                <p>WordPress uses the query string to decide which template or set of templates should be used to display the page. The query string is information that is contained in the link to each part of your website. </p>
                <p>Put simply, WordPress searches down through the template hierarchy until it finds a matching template file. To determine which template file to use, WordPress:</p>

                <p class="px-2 bg-warning text-white">http://example.com/blog/category/your-cat/</p>
                <p>Looks for a template file in the current theme’s directory that matches the category’s slug. If the category slug is <span class="bg-secondary px-2">“unicorns,”</span> then WordPress looks for</p>

                <ol>
                    <li>category-unicorns.php.</li>
                    if id = 4
                    <li>category-4.php</li>
                    <li>category.php.</li>
                    <li>archive.php</li>
                    <li>index.php</li>
                </ol>

                <h4>The Template Hierarchy In Detail</h4>

                <h5>Home Page display</h5>
                <p>By default, WordPress sets your site’s home page to display your latest blog posts.</p>
                <ol>
                    <li>home.php</li>
                    <li>index.php</li>
                </ol>

                <h5>Front Page display</h5>
                <p>The front-page.php template file is used to render your site’s front page, whether the front page displays the blog posts index (mentioned above) or a static page.The front page template takes precedence over the blog posts index (home.php) template. If the front-page.php file does not exist, WordPress will either use the home.php or page.php files depending on the setup in Settings → Reading. If neither of those files exist, it will use the index.php file.</p>


                <p>later</p>

            </div>

            <div class="tab-pane fade" id="ThemeDevelopmentExamples" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Template Tags</h4>

                <p>Template tags are used within themes to retrieve content from your database. The content could be anything from a blog title to a complete sidebar. Template tags are the preferred method to pull content into your theme because:</p>
                <h4>What is a Template Tag?</h4>
                <p> It is broken up into three components:</p>
                <ol>
                    <li>A PHP code tag</li>
                    <li>A WordPress function</li>
                    <li>Optional parameters</li>
                </ol>

                <p>You can use a template tag to call another theme file or <span class="bg-warning px-2">some information from the database</span> </p>
                <p>with Parameters you can send WordPress-specific instructions for how you want the data presented.</p>



            </div>

            <div class="tab-pane fade" id="TheLoop" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">The Loop</h4>

                <p>The Loop is the default mechanism WordPress uses for outputting posts through a theme’s template files. How many posts are retrieved is determined by the number of posts to show per page defined in the Reading settings. Within the Loop, WordPress retrieves each post to be displayed on the current page and formats it according to your theme’s instructions.</p>
                <!-- wp:heading -->
                <h2 id="what-the-loop-can-display"><a href="https://developer.wordpress.org/themes/basics/the-loop/#what-the-loop-can-display">#What the Loop Can Display</a></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>The Loop can display a number of different elements for each post. For example, some common&nbsp;<a href="https://developer.wordpress.org/themes/basics/template-tags/">template tags</a>&nbsp;used in many themes are:</p>
                <!-- /wp:paragraph -->

                <!-- wp:list -->
                <ul>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/next_post_link/">next_post_link()</a></code>&nbsp;– a link to the post published chronologically&nbsp;<em>after</em>&nbsp;the current post</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/previous_post_link/">previous_post_link()</a></code>&nbsp;– a link to the post published chronologically&nbsp;<em>before</em>&nbsp;the current post</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/the_category/">the_category()</a></code>&nbsp;– the category or categories associated with the post or page being viewed</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/the_author/">the_author()</a></code>&nbsp;– the author of the post or page</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/the_content/">the_content()</a></code>&nbsp;– the main content for a post or page</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/the_excerpt/">the_excerpt()</a></code>&nbsp;– the first 55 words of a post’s main content followed by an ellipsis (…) or read more link that goes to the full post. You may also use the “Excerpt” field of a post to customize the length of a particular excerpt.</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/the_id/">the_ID()</a></code>&nbsp;– the ID for the post or page</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/the_meta/">the_meta()</a></code>&nbsp;– the custom fields associated with the post or page</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/the_shortlink/">the_shortlink()</a></code>&nbsp;– a link to the page or post using the url of the site and the ID of the post or page</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/the_tags/">the_tags()</a></code>&nbsp;– the tag or tags associated with the post</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/the_title/">the_title()</a></code>&nbsp;– the title of the post or page</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/the_time/">the_time()</a></code>&nbsp;– the time or date for the post or page. This can be customized using standard php date function formatting.</li>
                </ul>
                <!-- /wp:list -->

                <!-- wp:paragraph -->
                <p>You can also use&nbsp;<a href="https://developer.wordpress.org/themes/basics/conditional-tags/">conditional tags</a>, such as:</p>
                <!-- /wp:paragraph -->

                <!-- wp:list -->
                <ul>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/is_home/">is_home()</a></code>&nbsp;– Returns true if the current page is the homepage</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/is_admin/">is_admin()</a></code>&nbsp;– Returns true if inside Administration Screen, false otherwise</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/is_single/">is_single()</a></code>&nbsp;– Returns true if the page is currently displaying a single post</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/is_page/">is_page()</a></code>&nbsp;– Returns true if the page is currently displaying a single page</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/is_page_template/">is_page_template()</a></code>&nbsp;– Can be used to determine if a page is using a specific template, for example:&nbsp;<code>is_page_template('about-page.php')</code></li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/is_category/">is_category()</a></code>&nbsp;– Returns true if page or post has the specified category, for example:&nbsp;<code>is_category('news')</code></li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/is_tag/">is_tag()</a></code>&nbsp;– Returns true if a page or post has the specified tag</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/is_author/">is_author()</a></code>&nbsp;– Returns true if inside author’s archive page</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/is_search/">is_search()</a></code>&nbsp;– Returns true if the current page is a search results page</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/is_404/">is_404()</a></code>&nbsp;– Returns true if the current page does not exist</li>
                    <li><code><a href="https://developer.wordpress.org/reference/functions/has_excerpt/">has_excerpt()</a></code>&nbsp;– Returns true if the post or page has an excerpt</li>
                </ul>
                <!-- /wp:list -->

                <h4>Multiple Loops </h4>
                <p>You can use rewind_posts() to loop through the same query a second time. This is useful if you want to display the same query twice in different locations on a page.</p>
                <h4>Creating secondary queries and loops</h4>
                <p>Using two loops with the same query was relatively easy but not always what you will need. Instead, you will often want to create a secondary query to display different content on the template</p>
                <p class="bg-dark px-2 text-warning">wp_reset_postdata(); </p>

                <h4>Resetting multiple loops</h4>
                <p>It’s important when using multiple loops in a template that you reset them. Not doing so can lead to unexpected results due to how data is stored and used within the global $post variable. There are three main ways to reset the loop depending on the way they are called.</p>
                <ol>
                    <li>wp_reset_postdata()</li>
                    <li>wp_reset_query()</li>
                    <li>rewind_posts()</li>
                </ol>

                <h4>Using wp_reset_postdata()</h4>
                <p>Use wp_reset_postdata() when you are running custom or multiple loops with WP_Query. This function restores the global $post variable to the current post in the main query. If you’re following best practices, this is the most common function you will use to reset loops.</p>

                <h4>Using wp_reset_query()</h4>
                <p>Using wp_reset_query() restores the WP_Query and global $post data to the original main query. You MUST use this function to reset your loop if you use query_posts() within your loop. You can use it after custom loops with WP_Query because it actually calls wp_reset_postdata() when it runs. However, it’s best practice to use wp_reset_postdata() with any custom loops involving WP_Query.</p>

                <p class="bg-warning">query_posts() is not best practice and should be avoided if at all possible. Therefore, you shouldn’t have much use for wp_reset_query().</p>


            </div>

            <div class="tab-pane fade" id="ThemeFunctions" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block"> Theme Functions</h4>
                <p>The functions.php file is where you add unique features to your WordPress theme. It can be used to hook into the core functions of WordPress to make your theme more modular, extensible, and functional.</p>
                <p>Although the child theme’s functions.php is loaded by WordPress right before the parent theme’s functions.php, it does not override it. The child theme’s functions.php can be used to augment or replace the parent theme’s functions. Similarly, functions.php is loaded after any plugin files have loaded.</p>

                <p>With functions.php you can:</p>
                <ul>
                    <li>Use WordPress hooks. For example, with the excerpt_length filter you can change your post excerpt length (from default of 55 words).</li>
                    <li>Enable WordPress features with add_theme_support(). For example, turn on post thumbnails, post formats, and navigation menus.</li>
                    <li>Define functions you wish to reuse in multiple theme template files.</li>
                </ul>

                <p class="bg-warning px-2">If a WordPress plugin calls the same function, or filter, as you do in your functions.php, the results can be unexpected, even causing your site to be disabled.</p>

                <h4>Theme Setup</h4>
                <h5>Automatic Feed Links</h5>
                <pre>
add_theme_support( 'automatic-feed-links' );

register_nav_menus( array(
'primary' => __( 'Primary Menu', 'myfirsttheme' ),
'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
) );

load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

                </pre>
            </div>

            <div class="tab-pane fade" id="LinkingFilesDirectories" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Linking Theme Files & Directories</h4>
                <h4>Linking to Core Theme Files</h4>
                <p>You can create custom versions of these files can be called as well by naming the file sidebar-{your_custom_template}.php, header-{your_custom_template}.php and footer-{your_custom_template}.php. You can then use Template Tags with the custom template name as the only parameter, like this:</p>
                <pre>
get_header( 'your_custom_template' );
get_footer( 'your_custom_template' );
get_sidebar( 'your_custom_template' );
                </pre>

                <h4>Linking to Theme Directories</h4>
                <p>get_theme_file_uri();</p>
                <p>get_parent_theme_file_path();</p>

                <p>echo get_theme_file_uri( 'images/logo.png' );</p>
                or
                <p>echo get_parent_theme_file_path( 'images/logo.png' );</p>

                <pre class="bg-info p-3 text-white">
The functions get_theme_file_uri(), get_theme_file_path(), get_parent_theme_file_uri(), 
get_parent_theme_file_path() were introduced in WordPress 4.7.

For previous WordPress versions, use get_template_directory_uri(), get_template_directory(), 
get_stylesheet_directory_uri(),  get_stylesheet_directory().

Take note that the newer 4.7 functions run the older functions anyway as part of the checking process 
so it makes sense to use the newer functions when possible.
                </pre>

                <h4>Dynamic Linking in Templates</h4>
                <p><code>&lt;a href="&lt;?php echo get_permalink($ID); ?>">This is a link&lt;/a></code></p>
            </div>

            <div class="tab-pane fade" id="IncludingCSSJavaScript" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Including CSS & JavaScript</h4>
                <p>When you’re creating your theme, you may want to create additional stylesheets or JavaScript files. However, remember that a WordPress website will not just have your theme active, it will also be using many different plugins. So that everything works harmoniously, it’s important that theme and plugins load scripts and stylesheets using the standard WordPress method. This will ensure the site remains efficient and that there are no incompatibility issues.</p>

                <p>Adding scripts and styles to WordPress is a fairly simple process. Essentially, you will create a function that will enqueue all of your scripts and styles. When enqueuing a script or stylesheet, WordPress creates a handle and path to find your file and any dependencies it may have (like jQuery) and then you will use a hook that will insert your scripts and stylesheets.</p>

                <p class="bg-info text-white px-2">WordPress includes a number of JavaScript files as part of the software package, including commonly used libraries such as jQuery. Before adding your own JavaScript, <a href="https://developer.wordpress.org/themes/basics/including-css-javascript/#default-scripts-included-and-registered-by-wordpress">check to see if you can make use of an included library</a>.</p>

                <h4>The Comment Reply Script</h4>
                <p>WordPress comments have quite a bit of functionality in them right out of the box, including threaded comments and enhanced comment forms. In order for comments to work properly, they require some JavaScript. However, since there are certain options that need to be defined within this JavaScript, the comment-reply script should be added to every theme that uses comments.</p>
            </div>

            <div class="tab-pane fade" id="ConditionalTags" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Conditional Tags</h4>
                <h4>Where to Use Conditional Tags</h4>
                <p>For a Conditional Tag to modify your data, the information must already have been retrieved from your database, i.e. the query must have already run. If you use a Conditional Tag before there is data, there’ll be nothing to ask the if/else statement about.</p>
                <p>It’s important to note that WordPress loads functions.php before the query is run, so if you simply include a Conditional Tag in that file, it won’t work.</p>
                <p>Two ways to implement Conditional Tags:</p>
                <ol>
                    <li>place it in a Template File</li>
                    <li>create a function out of it in functions.php that hooks into an action/filter that triggers at a later point</li>
                </ol>

                <p>
                    <span class="badge badge-primary">is_home()</span><span class="badge badge-secondary">is_front_page()</span>
                    <span class="badge badge-success">is_admin()</span>
                </p>

                <ul>
                    <li>is_home()</li>
                    <li>is_front_page()</li>
                    <li>is_admin()</li>
                    <li>is_single()</li>
                    <li>is_single( ’17’ )</li>
                    <li>is_single( ‘Irish Stew’ )</li>
                    <li>is_single( ‘beef-stew’ )</li>
                    <li>is_single( array( 17, ‘beef-stew’, ‘Irish Stew’ ) )</li>
                    <li>is_single( array( 17, 19, 1, 11 ) )</li>
                    <li>is_single( array( ‘beef-stew’, ‘pea-soup’, ‘chilli’ ) )</li>
                    <li>is_singular()</li>
                    <li>is_sticky()</li>
                    <li>is_sticky( ’17’ )</li>
                    <li>get_post_type()</li>
                    <li>post_type_exists()</li>
                    <li>is_post_type_hierarchical( $post_type )</li>
                    <li>is_post_type_archive()</li>
                    <li>is_comments_popup()</li>
                    <li>comments_open()</li>
                    <li>comments_open()</li>
                    <li>later</li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <div class="tab-pane fade" id="CategoriesTagsCustomTaxonomies" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Categories, Tags, & Custom Taxonomies</h4>
                <p>In reality, categories and tags are examples of default taxonomies which simply are a way to organize content. Taxonomies are the method of classifying content and data in WordPress. When you use a taxonomy you’re grouping similar things together. The taxonomy refers to the sum of those groups.</p>
                <p>As with Post Types, there are a number of default taxonomies, and you can also create your own.</p>

                <h4>Default Taxonomies</h4>
                <ul>
                    <li>categories: a hierarchical taxonomy that organizes content in the post Post Type</li>
                    <li>tags: a non-hierarchical taxonomy that organizes content in the post Post Type</li>
                    <li>post formats: a method for creating formats for your posts. You can learn more about these on the Post Formats page.</li>
                </ul>

                <h4>Terms</h4>
                <p>Terms are items within your taxonomy. So, for example, if you have the Animal taxonomy you would have the terms, dogs, cats, and sheep. Terms can be created via the WordPress admin, or you can use the wp_insert_term() function.</p>

            </div>


        </div>
    </div>
</div>



<?php include_once '../inc/footer.php' ?>
