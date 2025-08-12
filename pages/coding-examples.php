<!DOCTYPE html>
<html lang="en">
    <?php require BASE_PATH . "pages/partials/head.php" ?>
    <body>
        <?php require BASE_PATH . "pages/partials/sidebar.php" ?>
        <div class="main-content">
            <div class="container">
                <header class="section-header">
                    <h1>Coding Examples</h1>
                </header>
                <div class="examples-selection">
                    <div class="language-info">
                        <span class="icon-sass show-details-button" data-target="#sass-slide"></span>
                        <div class="tooltip">
                            <h3>Application of Colours</h3>
                        </div>
                    </div>
                    <div class="language-info">
                        <span class="icon-jquery show-details-button" data-target="#jquery-slide"></span>
                        <div class="tooltip">
                            <h3>Slider Functionality</h3>
                        </div>
                    </div>
                    <div class="language-info">
                        <span class="icon-php show-details-button" data-target="#php-slide"></span>
                        <div class="tooltip">
                            <h3>Parsing Data</h3>
                        </div>
                    </div>
                    <div class="language-info">
                        <span class="icon-javascript show-details-button" data-target="#javascript-slide"></span>
                        <div class="tooltip">
                            <h3>Fetching Images</h3>
                        </div>
                    </div>
                    <div class="language-info">
                        <span class="icon-laravel show-details-button" data-target="#laravel-slide"></span>
                        <div class="tooltip">
                            <h3>Request Lifecycle</h3>
                        </div>
                    </div>
                </div>
                <div class="details-to-show">
                    <div id="sass-slide" class="slide">
                        <div class="content">
                            <h2 class="top-inset-item">Application of Colours</h2>
                            <p>When making my <a class="seamless-link" href="https://netmatters.emanuel-correia.netmatters-scs.co.uk/" target="_blank">Netmatters</a> mirror website, I was presented with the challenge of applying all the different colours on each sibling element, the solution to that was using a SASS mixins to do all the work for me.</p>
                            <div class="code">
                                <pre><code class="language-scss"><?php require BASE_PATH . "pages/code-examples/sass-slide/sass.php"; ?></code></pre>
                            </div>
                            <p>Given the below example, all I have to do is name the parent class with its colour and all of the child elements will be affected</p>
                            <div class="code">
                                <pre><code class="language-html"><?php require BASE_PATH . "pages/code-examples/sass-slide/html.php"; ?></code></pre>                                
                            </div>
                        </div>
                    </div>
                    <div id="jquery-slide" class="slide">
                        <div class="content">
                            <h2 class="top-inset-item">Slider Functionality</h2>
                            <p>These nice simple animations you see when switching between the coding examples is done using jQuery's built in slideUP() and slideDown() methods.</p>
                            <div class="code">
                                <pre><code class="language-javascript"><?php require BASE_PATH . "pages/code-examples/jquery-slide/jquery.php"; ?></code></pre>
                            </div>
                            <p>With the HTML below, this gives you a barebones working example.</p>
                            <div class="code">
                                <pre><code class="language-html"><?php require BASE_PATH . "pages/code-examples/jquery-slide/html.php"; ?></code></pre>
                            </div>
                            <p>As a result of how this works, this makes my life easy should I want to add more coding examples on to this page.</p>
                        </div>
                    </div>
                    <div id="php-slide" class="slide">
                        <div class="content">
                            <h2 class="top-inset-item">Fetching and Parsing Data from a Relational Database</h2>
                            <p>Shown below is an example of using an SQL query to fetch data from a relational database.</p>
                            <div class="code">
                                <pre><code class="language-php"><?php require BASE_PATH . "pages/code-examples/php-slide/sql-example.php"; ?></code></pre>
                            </div>
                            <p>This is what is then stored inside of the variable $articles from above, each column found in the table corresponds to the keys in this array of accociative arrays.</p>
                            <div class="code">
                                <pre><code class="language-php"><?php require BASE_PATH . "pages/code-examples/php-slide/array.php"; ?></code></pre>
                            </div>
                            <p>I then iterate through each array item and parse the inormation within the associative array using the keys to then be displayed in my HTML. This is the behind the scenes of the Latest News section of my <a class="seamless-link" href="https://netmatters.emanuel-correia.netmatters-scs.co.uk/" target="_blank">Netmatters</a> mirror website.</p>
                            <div class="code">
                                <pre><code class="language-php"><?php require BASE_PATH . "pages/code-examples/php-slide/html.php"; ?></code></pre>
                            </div>
                        </div>
                    </div>
                    <div id="javascript-slide" class="slide">
                        <div class="content">
                            <h2 class="top-inset-item">Fetching data using an API</h2>
                            <p>This is a couple of functions from my <a class="seamless-link" href="https://js-array.emanuel-correia.netmatters-scs.co.uk/" target="_blank">Image Array</a> project, they have been simplified for deomonstration purposes, When clicking the "Fetch image" button, it runs the following function.</p>
                            <div class="code">
                                <pre><code class="language-javascript"><?php require BASE_PATH . "pages/code-examples/javascript-slide/initiate-loading.php"; ?></code></pre>
                            </div>
                            <p>As seen, it only runs the fetchImage() function when the previous request has then finished loading, preventing potential issues.</p>
                            <div class="code">
                                <pre><code class="language-javascript"><?php require BASE_PATH . "pages/code-examples/javascript-slide/fetch-image.php"; ?></code></pre>
                            </div>
                            <p>Once finished loading the image, it then removes the class that the initiateLoading() function had added in the first place, allowing the user to load the next image.</p>
                        </div>
                    </div>
                    <div id="laravel-slide" class="slide">
                        <div class="content">
                            <h2 class="top-inset-item">Operations from a request</h2>
                            <p>When the user clicks on the following link.</p>
                            <div class="code">
                                <pre><code class="language-php"><?php require BASE_PATH . "pages/code-examples/laravel-slide/link.php"; ?></code></pre>
                            </div>
                            <p>route() corresponds to the name() of the route, therefore, running this.</p>
                            <div class="code">
                                <pre><code class="language-php"><?php require BASE_PATH . "pages/code-examples/laravel-slide/route.php"; ?></code></pre>
                            </div>
                            <p>Which then calls the index() method of the CompanyController, assigning the database details onto the $companies variable</p>
                            <div class="code">
                                <pre><code class="language-php"><?php require BASE_PATH . "pages/code-examples/laravel-slide/controller.php"; ?></code></pre>
                            </div>
                            <p>Which returns the data back to the view, allowing me to iterate through and display the details</p>
                            <div class="code">
                                <pre><code class="language-php"><?php require BASE_PATH . "pages/code-examples/laravel-slide/view.php"; ?></code></pre>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <?php require BASE_PATH . "pages/partials/footer.php"; ?>
        </div>
        <script src="../js/jquery-3.7.1.min.js"></script>   
        <script src="../js/prism.js"></script>
        <script src="../js/app.js"></script>
    </body>
</html>