<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Getting Started</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Getting Started</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Who Should Read This Handbook?</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">What is a Theme?</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">WordPress Licensing & the GPL</a>

            <a class="nav-link" data-toggle="pill" href="#Setting-Development-Environment">Setting up a Development Environment</a>

            <a class="nav-link" data-toggle="pill" href="#ThemeDevelopmentExamples">Theme Development Examples</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Getting Started</h4>
                <p> <span class="bg-secondary px-2 text-white">GPL</span> the software license used for WordPress </p>


            </div>


            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Who Should Read This Handbook?</h4>
                <p>Nothing</p>

            </div>


            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">What is a Theme?</h4>
                <p>A WordPress theme changes the design of your website, often including its layout. Changing your theme changes how your site looks on the front-end, i.e. what a visitor sees when they browse to your site on the web.</p>

                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">What can themes do?</h4>
                <p>Themes take the content and data stored by WordPress and display it in the browser. When you create a WordPress theme, you decide how that content looks and is displayed.</p>

                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">What are themes made of?</h4>
                <p>At their most basic level, WordPress themes are collections of different files that work together to create what you see, as well as how your site behaves.</p>
                <h5>Required files</h5>
                <ol>
                    <li>index.php – the main template file</li>
                    <li>style.css – the main style file</li>
                </ol>
                <p>Though not required, you may see additional files in a theme’s folder including:</p>
                <ul>
                    <li>PHP files – including template files</li>
                    <li>Localization files</li>
                    <li>CSS files</li>
                    <li>Graphics</li>
                    <li>JavaScript</li>
                    <li>Text files – usually license info, readme.txt instructions, and a changelog file</li>
                </ul>

                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">What is the difference between a theme and a plugin?</h4>
                <ul>
                    <li>a theme controls the presentation of content; whereas</li>
                    <li>a plugin is used to control the behavior and features of your WordPress site.</li>
                </ul>

                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Themes on WordPress.org</h4>
                <p>One of the safest places to download WordPress themes is in the WordPress.org Theme Directory. All themes are closely reviewed, and must meet rigorous theme review guidelines to ensure quality and security.</p>

            </div>


            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <a href="https://developer.wordpress.org/themes/getting-started/wordpress-licensing-the-gpl/" class="btn btn-danger" target="_blank">Later</a>
            </div>

            <div class="tab-pane fade" id="Setting-Development-Environment" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block">Setting up a Development Environment</h4>
                <h4>Supporting older versions of WordPress</h4>
                <p>It’s standard practice for WordPress themes to support at least two versions back to ensure a minimum of backward compatibility. For example, if the current version of WordPress is at 4.6, then you should also make sure that your theme works well in versions 4.5 and 4.4 as well.</p>
                <p>You can refer to the WordPress Releases page to access older versions of WordPress. Then you can download and install older WordPress versions, creating multiple development sites, each running different WordPress versions for testing.</p>

                <h4>WP_DEBUG</h4>
                <h5>WP_DEBUG</h5>
                <p>The WP_DEBUG PHP <span class="bg-secondary px-2 text-white">constant</span> is used to trigger the built-in “debug” mode on your WordPress installation. </p>

                <h5>WP_DEBUG_DISPLAY and WP_DEBUG_LOG</h5>
                <p>WP_DEBUG_LOG and WP_DEBUG_DISPLAY are additional PHP <span class="bg-secondary px-2 text-white">constant</span>which extend WP_DEBUG.</p>
                <p>WP_DEBUG_LOG is used in conjunction with WP_DEBUG to log all error messages to a debug.log within your WordPress /wp-content/ directory. </p>
                <p>WP_DEBUG_DISPLAY is used to control whether debug messages display within the HTML of your theme pages. </p>

                <h4>Other WordPress Development Tools</h4>
                <p>later</p>

            </div>

            <div class="tab-pane fade" id="ThemeDevelopmentExamples" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="py-2 pl-5 pr-2 bg-info d-inline-block"> Theme Development Examples</h4>
                <h4>Default “Twenty” themes</h4>
                <p>they are designed with broad use in mind and fully adhere to WordPress coding standards. You can download and study their theme files, and keep them around as examples to reference while learning how to develop your own themes:</p>

                <h4>The Underscores theme</h4>
                <p>Unlike the default “Twenties” themes, the _s (or Underscores) theme is aimed at developers rather than end-users. It is intended to be a starter theme which you can use as a base to speed your development. It has a number of features:</p>

                <ul>
                    <li>Well-commented HTML5 templates, including error templates.</li>
                    <li>A sample custom header implementation in inc/custom-header.php.</li>
                    <li>Custom template tags in inc/template-tags to keep templates organized and prevent code duplication.</li>
                    <li>A number of scripts to improve keyboard navigation—found in js/keyboard-image-navigation.js—as well as small screen navigation in js/navigation.js.</li>
                    <li>Five sample CSS layouts in /layouts as well as starter CSS on which to build your design.</li>
                    <li>GPL-licensed code.</li>
                </ul>
                <p>The features above make Underscores a great theme for a developer wanting to create their own theme. And even if you remove the extras, the base that’s left is a still an excellent example of a well-coded theme, developed with standards and best-practices in mind.</p>
                <p>A more detailed overview is available on <a href="http://underscores.me/">Underscores</a>’ website.</p>

                <h4>Other Sources</h4>
                <p>Additionally, all themes published in the theme directory are reviewed for standards prior to being published. Reviewing themes in the directory is a great way to better understand how theme development works and is a good way to get inspiration for your own theme.</p>

            </div>


        </div>
    </div>
</div>



<?php include_once '../inc/footer.php' ?>
