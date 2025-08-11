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
                        <span class="icon-sass example-button" data-target="#sass-slide"></span>
                        <div class="tooltip">
                            <h3>Application of Colours</h3>
                        </div>
                    </div>
                    <div class="language-info">
                        <span class="icon-jquery example-button" data-target="#javascript-slide"></span>
                        <div class="tooltip">
                            <h3>Slider Functionality</h3>
                        </div>
                    </div>
                    <div class="language-info">
                        <span class="icon-php example-button" data-target="#php-slide"></span>
                        <div class="tooltip">
                            <h3>Parsing Data</h3>
                        </div>
                    </div>
                </div>
                <div class="coding-examples">
                    <div id="sass-slide" class="slide">
                        <div class="content">
                            <h2 class="top-inset-item">Application of Colours</h2>
                            <p>When making my <a class="seamless-link" href="https://netmatters.emanuel-correia.netmatters-scs.co.uk/" target="_blank">Netmatters</a> mirror website, I was presented with the challenge of applying all the different colours on each sibling element, the solution to that was using a SASS mixins to do all the work for me.</p>
                            <div class="code">
<pre><code class="language-scss">$theme: ( // Declare a map of the commonly used theme colours
    "gray": #67809F,
    "yellow": #F7B322,
    "blue": #4183D7,
    "green": #2ECC71,
    "red": #D64541,
    "purple": #926FB1,
    "crimson": #F62459,
);

@mixin nav-bar-theme($theme) {
    @each $name, $color in $theme { // Extract the key and its associated value out of the $theme map
        &-#{$name} { // Selects the class using the key
            .theme { // Applies colours using the value of said key
                color: $color;
            }
            .triangle {
                border-color: $color transparent transparent transparent;
            }
            &:hover {
                background-color: $color;
            }
            &:hover .theme {
                color: #fff;
            }
            .nav-dropdown {
                background-color: color.adjust($color, $lightness: -10%);
            }
        }
    }  
}

.theme {
    @include nav-bar-theme($theme);
}</code></pre>
                            </div>
                            <p>Given the below example, all I have to do is name the parent class with its colour and all of the child elements will be affected</p>
                            <div class="code">
<pre><code class="language-html">&lt;!-- On each sibling element, changing to .theme-[your colour] affects all the child elements --&gt;
&lt;div class=&quot;nav-category theme-gray&quot;&gt;
    &lt;a class=&quot;nav-button&quot; href=&quot;#&quot;&gt;
        &lt;span class=&quot;icon-cogs theme&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;small&quot;&gt;Bespoke&lt;/span&gt;
        &lt;span&gt;Software&lt;/span&gt;
        &lt;span class=&quot;triangle&quot;&gt;&lt;/span&gt;
    &lt;/a&gt;
    &lt;div class=&quot;nav-dropdown&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>                                
                            </div>
                        </div>
                    </div>
                    <div id="javascript-slide" class="slide">
                        <div class="content">
                            <h2 class="top-inset-item">Slider Functionality</h2>
                            <p>These nice simple animations you see when switching between the coding examples is done using jQuery's built in slideUP() and slideDown() methods.</p>
                            <div class="code">
<pre><code class="language-javascript">$(".slide").hide();

// Iterates through each icon button and adds an event listener
$('.example-button').click(function () {
    // The target variable gets set as an id selector string e.g. "#sass-slide"
    let target = $(this).data('target');

    // Slide up all other sliders first
    $('.slide').not(target).slideUp(350);

    $(target).is(':visible') // Toggle the target content
        ? $(target).slideUp(350) // Target visible? slide up
        : $(target).slideDown(350); // Else slide it down
});</code></pre>
                            </div>
                            <p>With the HTML below, this gives you a barebones working example.</p>
                            <div class="code">
<pre><code class="language-html">&#x3C;span class=&#x22;example-button&#x22; data-target=&#x22;#sass-slide&#x22;&#x3E;&#x3C;/span&#x3E;
&#x3C;span class=&#x22;example-button&#x22; data-target=&#x22;#javascript-slide&#x22;&#x3E;&#x3C;/span&#x3E;
&#x3C;div id=&#x22;sass-slide&#x22; class=&#x22;slide&#x22;&#x3E;Sass Content&#x3C;/div&#x3E;
&#x3C;div id=&#x22;javascript-slide&#x22; class=&#x22;slide&#x22;&#x3E;JavaScript Content&#x3C;/div&#x3E;</code></pre>
                            </div>
                            <p>As a result of how this works, this makes my life easy should I want to add more coding examples on to this page.</p>
                        </div>
                    </div>
                    <div id="php-slide" class="slide">
                        <div class="content">
                            <h2 class="top-inset-item">Fetching and Parsing Data from a Relational Database</h2>
                            <p>Shown below is an example of using an SQL query to fetch data from a relational database.</p>
                            <div class="code">
<pre><code class="language-php">&#x3C;?php
require __DIR__ . '/database-config.php'; // Loads up all of the connection information for the following code.

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    // The below SQL statement creates the table containing all the information I need by stitching together relational tables.
    $statement = $pdo->query("
    SELECT title, description, posted_at, image_url, name AS author_name, picture_url AS author_picture, type, color FROM news_articles 
    JOIN colors ON news_articles.color_id = colors.id
    JOIN type ON news_articles.type_id = type.id
    JOIN users ON news_articles.user_id = users.id
    ORDER BY posted_at DESC
    LIMIT 3
    ");
    // this then runs the above SQL statement and stores it in the $articles variable as an array.
    $articles = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}</code></pre>
                            </div>
                            <p>This is what is then stored inside of the variable $articles from above, each column found in the table corresponds to the keys in this array of accociative arrays.</p>
                            <div class="code">
<pre><code class="language-php">array(3) { // Each array item here represents a whole news article
  [0]=>
  array(8) { // Each array item here represents a part of the news article
    ["title"]=>
    string(42) "April Notables 2025 - Celebrating Our Team"
    ["description"]=>
    string(159) "Today, we celebrate the brilliant accomplishments of Lucy Hathaway as she celebrates 5 years at Netmatters, entering the hall of fame as our newest 'Legend!'. "
    ["posted_at"]=>
    string(19) "2025-05-07 12:01:01"
    ["image_url"]=>
    string(24) "april-notables-2025.webp"
    ["author_name"]=>
    string(10) "Netmatters"
    ["author_picture"]=>
    string(26) "netmatters-logo-small.webp"
    ["type"]=>
    string(4) "News"
    ["color"]=>
    string(6) "yellow"
  }
  [1]=>
  array(8) {
    ["title"]=>
    string(78) "Netmatters Achieves King’s Award for Enterprise: Promoting Opportunity 2025!"
    ["description"]=>
    string(114) "Netmatters is honoured to have been presented with a King’s Award for Enterprise for Promoting Opportunity 2025!"
    ["posted_at"]=>
    string(19) "2025-04-29 14:30:34"
    ["image_url"]=>
    string(36) "netmatters-achieves-kings-award.webp"
    ["author_name"]=>
    string(10) "Netmatters"
    ["author_picture"]=>
    string(26) "netmatters-logo-small.webp"
    ["type"]=>
    string(4) "News"
    ["color"]=>
    string(3) "red"
  }
  [2]=>
  array(8) {
    ["title"]=>
    string(71) "Case Study: Enhancing Security and Reducing Costs for Greg Rowe Limited"
    ["description"]=>
    string(583) "Greg Rowe Limited is a leading UK-based tap design and manufacturing company that serves both businesses and consumers. With a reputation for high-quality craftsmanship and innovative designs, they provide a wide range of tap solutions for residential and commercial spaces. Their products combine aesthetic appeal with functionality, catering to modern design trends and sustainable water solutions. Given their broad customer base and reliance on digital tools for sales, distribution, and internal operations, cybersecurity and IT efficiency are crucial to their business success."
    ["posted_at"]=>
    string(19) "2025-04-25 09:58:02"
    ["image_url"]=>
    string(33) "case-study-enhancing-security.png"
    ["author_name"]=>
    string(10) "Netmatters"
    ["author_picture"]=>
    string(26) "netmatters-logo-small.webp"
    ["type"]=>
    string(10) "Case Study"
    ["color"]=>
    string(4) "blue"
  }
}</code></pre>
                            </div>
                            <p>I then iterate through each array item and parse the inormation within the associative array using the keys to then be displayed in my HTML. This is the behind the scenes of the Latest News section of my <a class="seamless-link" href="https://netmatters.emanuel-correia.netmatters-scs.co.uk/" target="_blank">Netmatters</a> mirror website.</p>
                            <div class="code">
<pre><code class="language-php">&lt;?php foreach($articles as $article): ?&gt;   
    &lt;div class&#x3D;&quot;news-spacing&quot;&gt;
        &lt;a class&#x3D;&quot;news-article theme-&lt;?&#x3D; $article[&quot;color&quot;] ?&gt;&quot; href&#x3D;&quot;#&quot;&gt;
            &lt;span class&#x3D;&quot;news-link theme&quot;&gt;&lt;?&#x3D; $article[&quot;type&quot;] ?&gt;&lt;&#x2F;span&gt;
            &lt;div class&#x3D;&quot;aspect-container&quot;&gt;
                &lt;img src&#x3D;&quot;img&#x2F;news-articles&#x2F;&lt;?&#x3D; $article[&quot;image_url&quot;] ?&gt;&quot; alt&#x3D;&quot;News Thumbnail&quot; class&#x3D;&quot;news-thumbnail&quot;&gt;
            &lt;&#x2F;div&gt;
            &lt;div class&#x3D;&quot;news-details&quot;&gt;
                &lt;h3&gt;&lt;?&#x3D; truncate($article[&quot;title&quot;], 50) ?&gt;&lt;&#x2F;h3&gt;
                &lt;p class&#x3D;&quot;text-small&quot;&gt;&lt;?&#x3D; truncate($article[&quot;description&quot;], 100) ?&gt;&lt;&#x2F;p&gt;
                &lt;div class&#x3D;&quot;read-more-btn theme-btn&quot;&gt;Read More&lt;&#x2F;div&gt;
                &lt;hr&gt;
                &lt;div class&#x3D;&quot;posted-by&quot;&gt;
                    &lt;img src&#x3D;&quot;img&#x2F;logo&#x2F;&lt;?&#x3D; $article[&quot;author_picture&quot;] ?&gt;&quot; alt&#x3D;&quot;Profile Picture&quot; class&#x3D;&quot;posted-by--logo-img&quot;&gt;
                    &lt;div class&#x3D;&quot;news-author&quot;&gt;
                        &lt;p&gt;&lt;strong&gt;Posted by &lt;?&#x3D; $article[&quot;author_name&quot;] ?&gt;&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                        &lt;p class&#x3D;&quot;text-small&quot;&gt;&lt;?php $date &#x3D; new DateTime($article[&quot;posted_at&quot;]); echo $date-&gt;format(&quot;jS F Y&quot;); ?&gt;&lt;&#x2F;p&gt;
                    &lt;&#x2F;div&gt;
                &lt;&#x2F;div&gt;
            &lt;&#x2F;div&gt;
        &lt;&#x2F;a&gt;
    &lt;&#x2F;div&gt;
&lt;?php endforeach; ?&gt;</code></pre>
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