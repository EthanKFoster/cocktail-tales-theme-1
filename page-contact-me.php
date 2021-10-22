<?php get_header(); ?>

        <main>
            <div class="page_title ms-4 my-4">
                <h1>Contact Me</h1>
            </div>
            <div class="content container-fluid">
                <div class="row justify-content-center">
                    <div class="col text-center">
                        <div class="contact_form justify-content-center text-white">
                            <h5>I kinda want to talk to you! <br> Let me know how I’m doing, and what else you want from the site.</h5>
                            <div class="contact_form_center mx-auto text-white justify-content-center text-center">
                                <form action="action_page.php d-flex mx-auto text-center justify-content-center">
                                    
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" placeholder="Your name">

                                    <label for="name">Email Address</label>
                                    <input type="text" id="emailAddress" name="name" placeholder="Your email">
                                
                                    <label for="Message">Message</label>
                                    <textarea id="Message" name="subject" placeholder="Write your message here!" style="height:200px"></textarea>
                                
                                    <input type="submit" value="Send Message">
                
                                </form>
                            </div>  
                        </div>
                        <p class="py-5">Note: if this is a recipe, please let me know in the opening line! Thanks :)</p>
                    </div>
                </div>
            </div>
        </main>

<?php get_footer(); ?>