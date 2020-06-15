<?php
/*
 * Template Name: Custom Proposal Page
 * Description: Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content">
    <div class="full-width proposal-container">
        <span><p><?php the_field('description')?></p></span>
        <span class="form">
            <iframe name="cancelredirect" id="cancelredirect" style="display: none;"></iframe>
            <form action="https://americanalv.com/application/" method="POST" target="cancelredirect" onsubmit="confirmation()">
                <div class="flex">
                    <div>
                        <label for="say">First Name</label><br/>
                        <input name="first_name" id="first_name" required>
                    </div>
                    <div>
                        <label for="say">Last Name</label><br/>
                        <input name="last_name" id="last_name" required>
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <label for="say">Phone</label><br/>
                        <input name="phone" id="phone" type="tel" required>
                    </div>
                    <div>
                        <label for="say">Email</label><br/>
                        <input name="email" id="email" required type="email">
                    </div>
                </div>
                <div>
                    <button id="proposal-button">Receive My Proposal</button>
                </div>
            </form>
        </span>
    </div>
</main>
<?php get_sidebar();?>
<?php get_footer();?>