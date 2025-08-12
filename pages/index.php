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
                        <h2 class="top-inset-item">My Skills</h2>
                        <div class="coding-icons">
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
                        <!-- <div>
                            <h2 class="top-inset-item">Where it Started</h2>
                            <p>My programming journey began with a love for creativity and problem-solving through creating Minecraft <a class="seamless-link" href="https://www.planetminecraft.com/member/chickensplash/" target="_blank">datapacks.</a> Sparking my interest in how things work. This led me to explore 3D modeling with Blender, creating items for the Steam <a class="seamless-link" href="https://steamcommunity.com/id/ChickenSplash/myworkshopfiles/" target="_blank">Workshop</a> and avatars for VRChat.</p>
                        </div> -->
                        <div class="slide" id="laravel-info">
                            <h2 class="top-inset-responsive"><span class="text-laravel"><span class="icon-laravel"></span> Laravel</span></h2>
                            <p class="skill-description">PHP framework for building modern web applications.</p>
                            <p>Built my confidence in Laravel from my Companies Dashboard project. I find laravel to be the perfect tool to build a secure websites at scale</p>
                        </div>
                        <div class="slide" id="react-info">
                            <h2 class="top-inset-responsive"><span class="text-react"><span class="icon-react"></span> React</span></h2>
                            <p class="skill-description">JavaScript library for creating interactive UIs.</p>
                            <p>I Have no experience with react, I plan to add this to my skillset.</p>
                        </div>
                        <div class="slide" id="mysql-info">
                            <h2 class="top-inset-responsive"><span class="text-mysql"><span class="icon-mysql"></span> MySQL</span></h2>
                            <p class="skill-description">Relational database system for managing structured data.</p>
                            <p>Built relational databases on my Netmatters and Companies Dashboard projects, Following best practices to maintain security, low storage footprint and ease of use.</p>
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
                            <p>I Have no experience with c#</p>
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
                            <p>Sometimes the easier alternative for JavaScript, or manintaining legacy websites</p>
                        </div>
                        <div class="slide" id="tailwind-info">
                            <h2 class="top-inset-responsive"><span class="text-tailwindcss"><span class="icon-tailwindcss"></span> Tailwind</span></h2>
                            <p class="skill-description">Utility-first CSS framework for rapid UI design.</p>
                            <p>Powerful when paired with Laravel when you can split these rapidly made styles into seperate components for easier maintainability.</p>
                        </div>
                        <div class="slide" id="language-info">
                            <h2 class="top-inset-responsive"><span class="text-mysql"><span class="icon-language"></span> 2 Fluent languages</span></h2>
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
                <div id="netmatters-card">
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
                                    <li><p>Added a <a class="seamless-link" href="https://netmatters.emanuel-correia.netmatters-scs.co.uk/contact-us.php" target="_blank">Contact</a> page with a functional contact form complete with <span class="text-javascript">JavaScript</span> client side and <span class="text-php">PHP</span> server side validation, storing the values in the <span class="text-php">MySQL</span> database upon successful submission, feel free to try it out!</p></li>
                                </ul>
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
                            <div class="details-illustration scroll-me">
                                <div class="scroll-me-text">
                                    <span>Scroll Me!</span>
                                </div>
                                <img src="image/Netmatters-website.webp" alt="Preview of the Netmatters website.">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="project-2-card">
                    <div class="project-details">
                        <div class="details-header">
                            <h2 class="top-inset-item">Project 2</h2>
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
                <div id="project-3-card">
                    <div class="project-details">
                        <div class="details-header">
                            <h2 class="top-inset-item">Project 3</h2>
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
                        <img id="nm-project-img" src="image/Netmatters-website.webp" alt="Preview of the Netmatters website.">
                        <h3 class="title">Netmatters Homepage</h3>
                        <div class="project-languages">
                            <span class="icon-html5"></span>
                            <span class="icon-css3"></span>
                            <span class="icon-sass"></span>
                            <span class="icon-javascript"></span>
                        </div>
                        <div class="view-more">
                            <div class="button" id="netmatters-details">
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
                        <h3 class="title">Project 2</h3>
                        <div class="project-languages">
                            <span class="icon-html5"></span>
                        </div>
                        <div class="view-more">
                            <div class="button" id="project-2-details">
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
                        <h3 class="title">Project 3</h3>
                        <div class="project-languages">
                            <span class="icon-html5"></span>
                        </div>
                        <div class="view-more">
                            <div class="button" id="project-3-details">
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
                        <h3 class="title">Project 4</h3>
                        <div class="project-languages">
                            <span class="icon-html5"></span>
                        </div>
                        <div class="view-more">
                            <div class="button" id="project-4-details">
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
                            <div class="button" id="project-5-details">
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
                            <div class="button" id="project-6-details">
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
                    <div class="feedback-box <?php if ($message === "Message Sent!") {echo "sent";} ?>">
                        <p><?= $message ?></p><span class="icon-clear close"></span>
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