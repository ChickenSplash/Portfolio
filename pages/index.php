<!DOCTYPE html>
<html lang="en">
    <?php require BASE_PATH . "pages/partials/head.php" ?>
    <body>
        <?php require BASE_PATH . "pages/partials/sidebar.php" ?>
        <div class="main-content">
            <div class="hero-image">
                <div id="particles-js"></div>
                <div class="hero-text">
                    <p>
                        <span class="hero-floating-text">My</span> 
                        <span class="hero-floating-text">name</span> 
                        <span class="hero-floating-text">is</span>
                    </p>
                    <h1>
                        <span class="hero-floating-text">Emanuel</span> 
                        <span class="hero-floating-text">Correia</span>
                    </h1>
                    <p>
                        <span class="hero-floating-text">I'm</span> 
                        <span class="hero-floating-text">a</span> 
                        <span class="hero-floating-text">Web</span> 
                        <span class="hero-floating-text">Developer</span>
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="section-header" id="about-me">
                    <h2>About Me</h2>
                </div>
                <div class="about-me">
                    <div class="my-experience">
                        <h2 class="top-inset-item">My Toolbox</h2>
                        <div class="coding-icons">
                            <div class="coding-info">
                                <span class="icon-info show-details-button" data-target="#personal-info"></span>
                                <div class="tooltip">
                                    <h3>Personal Profile</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-laravel show-details-button" data-target="#laravel-info"></span>
                                <div class="tooltip">
                                    <h3>Laravel</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-react show-details-button" data-target="#react-info"></span>
                                <div class="tooltip">
                                    <h3>React</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-mysql show-details-button" data-target="#mysql-info"></span>
                                <div class="tooltip">
                                    <h3>MySLQ</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-sass show-details-button" data-target="#sass-info"></span>
                                <div class="tooltip">
                                    <h3>SASS</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-javascript show-details-button" data-target="#javascript-info"></span>
                                <div class="tooltip">
                                    <h3>JavaScript</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-c-sharp show-details-button" data-target="#c-sharp-info"></span>
                                <div class="tooltip">
                                    <h3>C#</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-php show-details-button" data-target="#php-info"></span>
                                <div class="tooltip">
                                    <h3>PHP</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-python show-details-button" data-target="#python-info"></span>
                                <div class="tooltip">
                                    <h3>Python</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-blender show-details-button" data-target="#blender-info"></span>
                                <div class="tooltip">
                                    <h3>Blender</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-html5 show-details-button" data-target="#html-info"></span>
                                <div class="tooltip">
                                    <h3>HTML</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-css3 show-details-button" data-target="#css-info"></span>
                                <div class="tooltip">
                                    <h3>CSS</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-jquery show-details-button" data-target="#jquery-info"></span>
                                <div class="tooltip">
                                    <h3>jQuery</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-tailwindcss show-details-button" data-target="#tailwind-info"></span>
                                <div class="tooltip">
                                    <h3>Tailwind</h3>
                                </div>
                            </div>
                            <div class="coding-info">
                                <span class="icon-language show-details-button" data-target="#language-info"></span>
                                <div class="tooltip">
                                    <h3>Languages</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details-to-show">
                        <div class="slide show-by-default" id="personal-info">
                            <h2 class="top-inset-responsive"><span class="icon-info"></span> Personal Profile</h2>
                            <p class="skill-description"><span class="icon-location_on"></span> Great Yarmouth, Norfolk, United Kingdom</p>
                            <p>What motivates me is the belief that with the right knowledge and tools, anyone can make anything on the computer.</p>
                            <p>What started with creating simple <a class="seamless-link" href="https://www.planetminecraft.com/member/chickensplash/" target="_blank">datapacks</a> in minecraft quickly grew into this drive to learn more in the world of software development.</p>
                        </div>
                        <div class="slide" id="laravel-info">
                            <h2 class="top-inset-responsive"><span class="text-laravel"><span class="icon-laravel"></span> Laravel</span></h2>
                            <p class="skill-description">PHP framework for building modern web applications.</p>
                            <p>Built my confidence in Laravel from my <a class="seamless-link" href="https://laravel.emanuel-correia.netmatters-scs.co.uk/" target="_blank">Dashboard</a> project. I find laravel to be the perfect tool to build secure websites at scale.</p>
                        </div>
                        <div class="slide" id="react-info">
                            <h2 class="top-inset-responsive"><span class="text-react"><span class="icon-react"></span> React</span></h2>
                            <p class="skill-description">JavaScript library for creating interactive UIs.</p>
                            <p>I Have no experience with react, I plan to add this to my skillset.</p>
                        </div>
                        <div class="slide" id="mysql-info">
                            <h2 class="top-inset-responsive"><span class="text-mysql"><span class="icon-mysql"></span> MySQL</span></h2>
                            <p class="skill-description">Relational database system for managing structured data.</p>
                            <p>Built relational databases on my <a class="seamless-link" href="https://netmatters.emanuel-correia.netmatters-scs.co.uk/" target="_blank">Netmatters</a> and <a class="seamless-link" href="https://laravel.emanuel-correia.netmatters-scs.co.uk/" target="_blank">Dashboard</a> projects, Following best practices to maintain security, low storage footprint and ease of use.</p>
                        </div>
                        <div class="slide" id="sass-info">
                            <h2 class="top-inset-responsive"><span class="text-sass"><span class="icon-sass"></span> SASS</span></h2>
                            <p class="skill-description">CSS preprocessor for efficient and maintainable styling.</p>
                            <p>SASS is the perfect tool to keep my code maintainable in a fun manner by using the best DRY (Dont Repeat Yourself) practices. I use it consistently throughout every project.</p>
                        </div>
                        <div class="slide" id="javascript-info">
                            <h2 class="top-inset-responsive"><span class="text-javascript"><span class="icon-javascript"></span> JavaScript</span></h2>
                            <p class="skill-description">Programming language for dynamic web functionality.</p>
                            <p>Very handy for adding intractability on any website. This portfolio uses javascript extensively.</p>
                        </div>
                        <div class="slide" id="c-sharp-info">
                            <h2 class="top-inset-responsive"><span class="text-c-sharp"><span class="icon-c-sharp"></span> C#</span></h2>
                            <p class="skill-description">Versatile language for desktop, web, and game development.</p>
                            <p>I Have no experience with c#, I plan to add this to my skillset.</p>
                        </div>
                        <div class="slide" id="php-info">
                            <h2 class="top-inset-responsive"><span class="text-php"><span class="icon-php"></span> PHP</span></h2>
                            <p class="skill-description">Server-side scripting language for dynamic web content.</p>
                            <p>Very handy to keep my HTML more maintainable by applying DRY principles, Works well for smaller projects where Laravel is overkill, such as this portfolio.</p>
                        </div>
                        <div class="slide" id="python-info">
                            <h2 class="top-inset-responsive"><span class="text-python"><span class="icon-python"></span> Python</span></h2>
                            <p class="skill-description">High-level language for versatile programming applications.</p>
                            <p>My first programming language, giving me confidence to work with all the different logical operations and functions.</p>
                        </div>
                        <div class="slide" id="blender-info">
                            <h2 class="top-inset-responsive"><span class="text-blender"><span class="icon-blender"></span> Blender</span></h2>
                            <p class="skill-description">3D creation suite for modeling, animation, and rendering.</p>
                            <p>Made some basic VRChat avatars using blender, learning from home using documentation and AI.</p>
                        </div>
                        <div class="slide" id="html-info">
                            <h2 class="top-inset-responsive"><span class="text-html5"><span class="icon-html5"></span> HTML</span></h2>
                            <p class="skill-description">Markup language for structuring web content.</p>
                            <p>Extensive knowledge of HTML and the box model is essential for me to take advantage of the more powerful aforementioned tools.</p>
                        </div>
                        <div class="slide" id="css-info">
                            <h2 class="top-inset-responsive"><span class="text-css3"><span class="icon-css3"></span> CSS</span></h2>
                            <p class="skill-description">Stylesheet language for designing web presentation.</p>
                            <p>The presentation layer of the website, very powerful when paired with SASS.</p>
                        </div>
                        <div class="slide" id="jquery-info">
                            <h2 class="top-inset-responsive"><span class="text-jquery"><span class="icon-jquery"></span> jQuery</span></h2>
                            <p class="skill-description">JavaScript library simplifying DOM manipulation and events.</p>
                            <p>Sometimes the easier alternative to vanilla JavaScript, also useful for manintaining legacy websites</p>
                        </div>
                        <div class="slide" id="tailwind-info">
                            <h2 class="top-inset-responsive"><span class="text-tailwindcss"><span class="icon-tailwindcss"></span> Tailwind</span></h2>
                            <p class="skill-description">Utility-first CSS framework for rapid UI design.</p>
                            <p>Powerful when paired with Laravel when you can split these rapidly made styles into seperate components for easier maintainability.</p>
                        </div>
                        <div class="slide" id="language-info">
                            <h2 class="top-inset-responsive"><span class="icon-language"></span> 2 Fluent languages</h2>
                            <p class="skill-description"><a href="https://en.wikipedia.org/wiki/Common_European_Framework_of_Reference_for_Languages#Common_reference_levels" class="seamless-link" target="_blank">Learn</a> about language fluency classification</p>
                            <ul>
                                <li>English: C2</li>
                                <li>Portuguese: C1</li>
                                <li>Spanish: B1</li>
                                <li>German: A2</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section-header" id="projects">
                    <h2>My Projects</h2>
                </div>
                <div id="project-1-card">
                    <div class="project-details">
                        <div class="details-header">
                            <h2 class="top-inset-item">Netmatters Homepage</h2>
                            <div class="button close-slide">X</div>
                        </div>
                        <div class="details-wrapper">
                            <div class="details-info">
                                <ul>
                                    <li><p>Recreated the <a class="seamless-link" href="https://www.netmatters.co.uk/" target="_blank">Netmatters</a> homepage to the best of my ability using <span class="text-html5">HTML</span>, <span class="text-css3">CSS</span>, <span class="text-sass">SASS</span>, <span class="text-javascript">JavaScript</span>, and <span class="text-php">PHP</span>.</p></li>
                                    <li><p>Applied <span class="text-sass">SASS</span> Mixins using maps for easy application of different colours on sibling elemements</p></li>
                                    <li><p>Used <span class="text-javascript">JavaScript</span> to add dynamic animations, including a pop-out side menu.</p></li>
                                    <li><p>Implemented a dynamic news section powered by a <span class="text-php">MySQL</span> relational database, allowing content to be pulled and displayed using <span class="text-php">PHP</span>, and easily updated and managed through the database.</p></li>
                                    <li><p>Added a <a class="seamless-link" href="https://netmatters.emanuel-correia.netmatters-scs.co.uk/contact" target="_blank">Contact</a> page with a functional contact form complete with <span class="text-javascript">JavaScript</span> client side and <span class="text-php">PHP</span> server side validation, storing the values in the <span class="text-php">MySQL</span> database upon successful submission, feel free to try it out!</p></li>
                                </ul>
                            </div>
                            <div class="details-illustration">
                                <img src="image/Netmatters-website.webp" alt="Preview of the Netmatters website.">
                                <img src="image/netmatters-contact.webp" alt="Preview of the Netmatters website.">
                            </div>
                        </div>
                        <div class="buttons">
                            <a class="button" href="https://netmatters.emanuel-correia.netmatters-scs.co.uk/" target="_blank">
                                <div class="scale">
                                    <span class="icon-ruler"></span>
                                    <span>View Project</span>
                                </div>
                            </a>
                            <a class="button" href="https://github.com/ChickenSplash/Netmatters-Homepage" target="_blank">
                                <div class="scale">
                                    <span class="icon-embed2"></span>
                                    <span>View Code</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="project-2-card">
                    <div class="project-details">
                        <div class="details-header">
                            <h2 class="top-inset-item">Company Management Panel</h2>
                            <div class="button close-slide">X</div>
                        </div>
                        <div class="details-wrapper">
                            <div class="details-info">
                                <ul>
                                    <li><p>
                                        <strong>Email:</strong> admin@admin.com<br>
                                        <strong>Password:</strong> password
                                    </p></li>
                                    <li><p>Developed Create, Read, Update, and Delete operations for two key resources; <strong>Companies</strong> and <strong>Employees</strong> using <span class="text-laravel">Laravel</span> and <span class="text-mysql">SQLite</span>.</p></li>
                                    <li><p>Implemented <span class="text-laravel">Laravel's</span> built-in authentication system, request/validation classes, routing system and security features, allowing me to easily build a highly secure site.</p></li>
                                    <li><p>Built a responsive and proffesional design using <span class="text-tailwindcss">Tailwind</span> components for easy modulation and <span class="text-sass">SASS</span>/<span class="text-javascript">JavaScript</span> for fine tuning details.</p></li>
                                </ul>
                            </div>
                            <div class="details-illustration">
                                <img src="image/laravel-company.webp" alt="Preview of the website.">
                                <img src="image/laravel-employee.webp" alt="Preview of the website.">
                            </div>
                        </div>
                        <div class="buttons">
                            <a class="button" href="https://laravel.emanuel-correia.netmatters-scs.co.uk/" target="_blank">
                                <div class="scale">
                                    <span class="icon-ruler"></span>
                                    <span>View Project</span>
                                </div>
                            </a>
                            <a class="button" href="https://github.com/ChickenSplash/Company-Management-Panel" target="_blank">
                                <div class="scale">
                                    <span class="icon-embed2"></span>
                                    <span>View Code</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="project-3-card">
                    <div class="project-details">
                        <div class="details-header">
                            <h2 class="top-inset-item">Random Image Fetcher</h2>
                            <div class="button close-slide">X</div>
                        </div>
                        <div class="details-wrapper">
                            <div class="details-info">
                                <ul>
                                    <li><p>Utilises the <a class="seamless-link" target="_blank" href="https://picsum.photos/">Picsum</a> API to dynamically fetch random images based on user-defined width and height inputs, the user can then assign any image to any valid email address. All done within <span class="text-javascript">JavaScript</span>.</p></li>
                                    <li><p>Stores previously loaded images should the user want to go back and add them.</p></li>
                                    <li><p>Implemented various different checks to ensure the program is to be used as intended, paird with clear and consise user feedback. Feel free to stress test it!</p></li>
                                    <li><p>Built a responsive and proffesional design using <span class="text-sass">SASS</span>.</p></li>
                                </ul>
                            </div>
                            <div class="details-illustration">
                                <img src="image/random-image-fetcher.webp" alt="Screenshot of the Random Image Fetcher web application showing a clean interface with input fields for width and height, a button to fetch a random image, and a gallery of previously loaded images. The page has a modern and friendly design with soft colors and rounded corners. The overall tone is inviting and playful. Visible text includes Random Image Fetcher as the page title and labels for width, height, and fetch image button.">
                            </div>
                        </div>
                        <div class="buttons">
                            <a class="button" href="#" target="_blank">
                                <div class="scale">
                                    <span class="icon-ruler"></span>
                                    <span>View Project</span>
                                </div>
                            </a>
                            <a class="button" href="#" target="_blank">
                                <div class="scale">
                                    <span class="icon-embed2"></span>
                                    <span>View Code</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="project-4-card">
                    <div class="project-details">
                        <div class="details-header">
                            <h2 class="top-inset-item">Project 4</h2>
                            <div class="button close-slide">X</div>
                        </div>
                        <div class="details-wrapper">
                            <div class="details-info">
                                <p>This is a future project that I shall do, im not sure what im going to do yet... guess ill find out :p</p>
                                <div class="buttons">
                                    <a class="button" href="#" target="_blank">
                                        <div class="scale">
                                            <span class="icon-ruler"></span>
                                            <span>View Project</span>
                                        </div>
                                    </a>
                                    <a class="button" href="#" target="_blank">
                                        <div class="scale">
                                            <span class="icon-embed2"></span>
                                            <span>View Code</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="details-illustration">
                                <span>image goes here</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="project-5-card">
                    <div class="project-details">
                        <div class="details-header">
                            <h2 class="top-inset-item">Project 5</h2>
                            <div class="button close-slide">X</div>
                        </div>
                        <div class="details-wrapper">
                            <div class="details-info">
                                <p>This is a future project that I shall do, im not sure what im going to do yet... guess ill find out :p</p>
                                <div class="buttons">
                                    <a class="button" href="#" target="_blank">
                                        <div class="scale">
                                            <span class="icon-ruler"></span>
                                            <span>View Project</span>
                                        </div>
                                    </a>
                                    <a class="button" href="#" target="_blank">
                                        <div class="scale">
                                            <span class="icon-embed2"></span>
                                            <span>View Code</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="details-illustration">
                                <span>image goes here</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="project-6-card">
                    <div class="project-details">
                        <div class="details-header">
                            <h2 class="top-inset-item">Project 6</h2>
                            <div class="button close-slide">X</div>
                        </div>
                        <div class="details-wrapper">
                            <div class="details-info">
                                <p>This is a future project that I shall do, im not sure what im going to do yet... guess ill find out :p</p>
                                <div class="buttons">
                                    <a class="button" href="#" target="_blank">
                                        <div class="scale">
                                            <span class="icon-ruler"></span>
                                            <span>View Project</span>
                                        </div>
                                    </a>
                                    <a class="button" href="#" target="_blank">
                                        <div class="scale">
                                            <span class="icon-embed2"></span>
                                            <span>View Code</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="details-illustration">
                                <span>image goes here</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projects-work">
                    <div class="project-thumbnail">
                        <img src="image/Netmatters-website.webp" alt="Project 1 preview.">
                        <h3 class="title">Netmatters Homepage</h3>
                        <div class="project-languages">
                            <span class="icon-php"></span>
                            <span class="icon-mysql"></span>
                            <span class="icon-javascript"></span>
                            <span class="icon-sass"></span>
                            <span class="icon-html5"></span>
                            <span class="icon-css3"></span>
                        </div>
                        <div class="view-more">
                            <div class="button load-card" id="project-1-details">
                                <div class="scale">
                                    <span class="icon-info"></span>
                                    <span>More Details</span>
                                </div>
                            </div>
                            <a class="button" href="https://netmatters.emanuel-correia.netmatters-scs.co.uk/" target="_blank">
                                <div class="scale">
                                    <span class="icon-ruler"></span>
                                    <span>View Project</span>
                                </div>
                            </a>
                            <a class="button" href="https://github.com/ChickenSplash/Netmatters-Homepage" target="_blank">
                                <div class="scale">
                                    <span class="icon-embed2"></span>
                                    <span>View Code</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="project-thumbnail">
                        <img src="image/laravel-index.webp" alt="Project 2 preview.">
                        <h3 class="title">Company Management Panel</h3>
                        <div class="project-languages">
                            <span class="icon-laravel"></span>
                            <span class="icon-php"></span>
                            <span class="icon-mysql"></span>
                            <span class="icon-sass"></span>
                            <span class="icon-tailwindcss"></span>
                            <span class="icon-html5"></span>
                            <span class="icon-css3"></span>
                            <span class="icon-javascript"></span>
                        </div>
                        <div class="view-more">
                            <div class="button load-card" id="project-2-details">
                                <div class="scale">
                                    <span class="icon-info"></span>
                                    <span>More Details</span>
                                </div>
                            </div>
                            <a class="button" target="_blank" href="https://laravel.emanuel-correia.netmatters-scs.co.uk/">
                                <div class="scale">
                                    <span class="icon-ruler"></span>
                                    <span>View Project</span>
                                </div>
                            </a>
                            <a class="button" target="_blank" href="https://github.com/ChickenSplash/Company-Management-Panel">
                                <div class="scale">
                                    <span class="icon-embed2"></span>
                                    <span>View Code</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="project-thumbnail">
                        <img src="image/random-image-fetcher-thumbnail.webp" alt="Project 1 preview.">
                        <h3 class="title">Random Image Fetcher</h3>
                        <div class="project-languages">
                            <span class="icon-javascript"></span>
                            <span class="icon-sass"></span>
                            <span class="icon-html5"></span>
                            <span class="icon-css3"></span>
                        </div>
                        <div class="view-more">
                            <div class="button load-card" id="project-3-details">
                                <div class="scale">
                                    <span class="icon-info"></span>
                                    <span>More Details</span>
                                </div>
                            </div>
                            <a class="button" target="_blank" href="https://js-array.emanuel-correia.netmatters-scs.co.uk">
                                <div class="scale">
                                    <span class="icon-ruler"></span>
                                    <span>View Project</span>
                                </div>
                            </a>
                            <a class="button" target="_blank" href="https://github.com/ChickenSplash/JavaScript-Image-Array">
                                <div class="scale">
                                    <span class="icon-embed2"></span>
                                    <span>View Code</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="project-thumbnail">
                        <h3 class="title">Project 4</h3>
                        <div class="project-languages">
                            <span class="icon-html5"></span>
                        </div>
                        <div class="view-more">
                            <div class="button load-card" id="project-4-details">
                                <div class="scale">
                                    <span class="icon-info"></span>
                                    <span>More Details</span>
                                </div>
                            </div>
                            <a class="button" href="#">
                                <div class="scale">
                                    <span class="icon-ruler"></span>
                                    <span>View Project</span>
                                </div>
                            </a>
                            <a class="button" href="#">
                                <div class="scale">
                                    <span class="icon-embed2"></span>
                                    <span>View Code</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="project-thumbnail">
                        <h3 class="title">Project 5</h3>
                        <div class="project-languages">
                            <span class="icon-html5"></span>
                        </div>
                        <div class="view-more">
                            <div class="button load-card" id="project-5-details">
                                <div class="scale">
                                    <span class="icon-info"></span>
                                    <span>More Details</span>
                                </div>
                            </div>
                            <a class="button" href="#">
                                <div class="scale">
                                    <span class="icon-ruler"></span>
                                    <span>View Project</span>
                                </div>
                            </a>
                            <a class="button" href="#">
                                <div class="scale">
                                    <span class="icon-embed2"></span>
                                    <span>View Code</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="project-thumbnail">
                        <h3 class="title">Project 6</h3>
                        <div class="project-languages">
                            <span class="icon-html5"></span>
                        </div>
                        <div class="view-more">
                            <div class="button load-card" id="project-6-details">
                                <div class="scale">
                                    <span class="icon-info"></span>
                                    <span>More Details</span>
                                </div>
                            </div>
                            <a class="button" href="#">
                                <div class="scale">
                                    <span class="icon-ruler"></span>
                                    <span>View Project</span>
                                </div>
                            </a>
                            <a class="button" href="#">
                                <div class="scale">
                                    <span class="icon-embed2"></span>
                                    <span>View Code</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section-header" id="contact-me">
                    <h2>Get In Touch</h2>
                </div>
                <?php foreach ($status as $message): ?>
                    <div> <!-- necessary div for slideUp() js function to work properly -->
                        <div class="feedback-box">
                            <p class="feedback-message <?php if ($message === "Message Sent!") {echo "sent";} ?>"><?= $message ?></p><span class="icon-clear close"></span>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="contact">
                    <div class="contact-info">
                        <p class="top-inset-item">Got a project in mind or just want to say hi?</p>
                        <p>Drop me a message in the form or give me a shout through my socials!</p>
                        <p>Or you can reach me at:</p>
                        <p class="email-address"><a class="seamless-link" href="mailto:guardeded@gmail.com">guardeded@gmail.com</a></p>
                        <p class="phone-number"><a class="seamless-link" href="tel:+447858501493">(+44) 7858501493</a></p>
                    </div>
                    <div class="contact-box">
                        <form method="POST" id="contactForm" onsubmit="return validateForm()">
                            <div class="contact-box-names">
                                <input value="<?php if ($old_input) {echo $old_input["forename"];} ?>" name="forename" class="top-inset-item-breakpoint" placeholder="Forename" id="forename" maxlength="50">
                                <input value="<?php if ($old_input) {echo $old_input["surname"];} ?>" name="surname" class="top-inset-item-breakpoint" placeholder="Surname" id="surname" maxlength="50">
                            </div>
                            <input value="<?php if ($old_input) {echo $old_input["email"];} ?>" name="email" placeholder="Email" id="email" maxlength="128">
                            <input value="<?php if ($old_input) {echo $old_input["subject"];} ?>" name="subject" placeholder="Subject" id="subject" maxlength="128">
                            <div class="message-box">
                                <textarea name="message" placeholder="Message" id="message"><?php if ($old_input) {echo $old_input["message"];} ?></textarea>
                                <button type="submit" aria-label="submit form"><span class="icon-paperplane"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php require BASE_PATH . "pages/partials/footer.php"; ?>
            </div>
        </div>
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/particles.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>