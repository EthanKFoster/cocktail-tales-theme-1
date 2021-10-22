<?php get_header(); ?>

<main>
            <div class="container">
                <div class="row">
                    <div class="col mt-4">
                        <a class="btn btn-primary" href="#" role="button">&lt Back to posts</a>
                    </div>
                </div>

                <div class="row justify-content-center py-4">
                    <div class="col justify-content-center text-center">
                        <h1>Post Title</h1>
                    </div>
                </div>

                <div class="_post_featured_img row justify-content-center py-4">
                    <div class="col-1 d-flex align-items-center justify-content-between">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-left" class="svg-inline--fa fa-angle-left fa-w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path></svg>
                        <p>previous post</p>
                    </div>
                        <div class="col-10 justify-content-center text-center">
                            <img src="<?php the_post_thumbnail(); ?>" alt="post featured image">
                        </div>
                    <div class="col-1 d-flex align-items-center justify-content-between">
                        <p>next     post</p>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                    </div>
                </div>

                <hr>

                <div class="row py-4">
                    <div class="col">
                        <blockquote class="mx-auto">
                            “blockquote (optional) lorem lorem lorem
                            asdl;fa aslkasdlfk ;asjdf ;l asdl;asd  a;slkdfj 
                            l;akjasd flkj asdlkj as;l      a;lsk dfjj;lkjs”
                        </blockquote>
                    </div>
                </div>

                <div class="row post_text d-flex justify-content-center mx-auto py-4">
                    <div class="col justify-content-center">
                        <p>Obviously the Time Lords have programmed the TARDIS always to return to Earth. It seems that I am some kind of a galactic yo-yo! I reversed the polarity of the neutron flow. Overconfidence, this, and a small screwdriver. I’m absolutely sorted. New-new-Doctor. We are always in trouble! Isn't it extraordinary—it follows us everywhere. I am the Doctor! The original you might say! How can you miss me? I'm easy to find. I'm the guy with two hearts, remember? Shut up, K-9! You were expecting someone else?
                            <br><br>
                            ...history sometimes gives us a terrible shock, and that is because we don't quite fully understand. Why should we? After all, we're too small to realise its final pattern. Therefore don't try and judge it from where you stand. I hate computers and refuse to be bullied by them. Jo, look. That's Skaro. Let's go in! And in that battle there was a man with more blood on his hands than any other. A man who would commit a crime that would silence the universe. And that man was me. Good grief.... It's a Stegosaurus!
                            <br><br>
                            Small though it is, the human brain can be quite effective when working at full efficiency, not unlike myself! Jamie, remind me to give you a lesson in tying knots, sometime. Five foot one and crying - you never stood a chance. I am the Doctor! The original, you might say! Physician, heal thyself. This is a situation that requires tact and finesse. Fortunately, I am blessed with both. He was dead already, I'm saving us. Follow me, and run! A straight line may be the shortest distance between two points, but it is by no means the most interesting.
                            <br><br>
                            Jo, did you fail Latin as well as science? Usually called 'The Doctor.' Or 'The Caretaker.' Or 'Get off this planet.' Though, strictly speaking, that probably isn't a name. Rest is for the weary, sleep is for the dead. I feel like a hungry man eager for the feast! Only the madman can see the way clearly through the tangled forest. Well, there's a probability of anything. Statistically speaking, if you gave typewriters to a treeful of monkeys, they'd eventually produce the works of William Shakespeare.</p>
                    </div>
                </div>

            </div>

</main>


<?php get_footer(); ?>