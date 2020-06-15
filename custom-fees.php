<?php
/*
 * Template Name: Custom Fees Page
 * Description: Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content">
    <div class="full-width fees-banner">
        <h2>Management Fee</h2>
        <p>
        Our management fee structure is clear and simple, no hidden fees or charges.
        </p>
        <!--<div class="textbox">
            <div class="smalltext">As Low As</div>
            <div class="bigtext">5-10%</div>
            <div class="smalltext">Of Collected Rent</div>
        </div>-->
    </div>
    <div class="main-wrapper">
        <div class="grid-2-3 percentage">
            <div>
                <h3>10%</h3>
                <p>
                    Single family homes, condos, townhouses, and multiplexes without on-site management.
                </p>
            </div>
            <div>
                <h3>8%</h3>
                <p>
                    Investment portfolios with 40+ units in diverse geographic locations.
                </p>
            </div>
            <div>
                <h3>5%</h3>
                <p>
                    Apartment complexes with over 50 units and on-site management in place.
                </p>
            </div>
        </div>
        <hr/>
        <h3 class="fees-midsection">
        In honor of our veterans and appreciation to our first responders, we are offering them an initial <strong class="green-text">10%</strong> discount.
        </h3>
        <hr/>
        <div class="grid-2-4-v2">
            <div>
                <i class="fab fa-font-awesome-flag"></i>
                <h3>NO START-UP FEE</h3>
                <p>
                    We do not charge start up fees, all we need is a set of keys and a signed agreement.
                </p>
            </div>
            <div>
                <i class="fas fa-eye-slash"></i>
                <h3>NO INSPECTION FEE</h3>
                <p>
                    We provide free inspections prior to listing, during occupancy if needed to verify that the tenant is complying with the lease terms, and after tenants move out.
                </p>
            </div>
            <div>
                <i class="fas fa-paste"></i>
                <h3>NO 1099 FEE</h3>
                <p>
                    Nobody enjoys tax time; we will make it easier for you without extra fees.
                </p>
            </div>
            <div>
                <i class="far fa-check-circle"></i>
                <h3>NO RENEWAL FEE</h3>
                <p>
                    Everyone should benefit when a tenant stays longer, no need for fees.
                </p>
            </div>
        </div>
        <p class="disclaimer-text">
            **3rd party costs for additional services required in the management of your property may apply. Examples include maintenance expenses, court filing fees, MLS referral fees, etc.
        </p>
        <div class="spacer">&nbsp;</div>
    </div>
    <?php include('proposal-banner.php') ?>
    <?php include 'contact-band.php' ?>
</main>
<?php get_sidebar();?>
<?php get_footer();?>