<?php
/*
 * Template Name: Custom Fees Page
 * Description: Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content">
    <div class="full-width fees-banner">
        <h2>Transparent Pricing</h2>
        <p>
            Unexpected, hidden expenses can de-rail an otherwise solid investing plan. 
            Americana's management fee structure is simple and straight-forward with no 
            hidden fees or extraneous charges.
        </p>
        <div class="textbox">
            <div class="smalltext">As Low As</div>
            <div class="bigtext">5-10%</div>
            <div class="smalltext">Of Collected Rent</div>
        </div>
    </div>
    <div class="main-wrapper">
        <div class="grid-2-4-v2">
            <div>
                <i class="fab fa-font-awesome-flag"></i>
                <h3>NO START-UP FEE</h3>
                <p>
                    Most management firms will require a fee to set up your account. Americana does not charge any start up fees. In fact, all that's required to start managing your property is an executed management agreement and keys to the property.
                </p>
            </div>
            <div>
                <i class="fas fa-eye-slash"></i>
                <h3>NO INSPECTION FEE</h3>
                <p>
                Knowing that your property is being taken care of shouldn't cost extra. Americana provides free inspections prior to listing, after tenants move out, and during occupancy if needed to verify that the tenant is complying with the lease terms.
                </p>
            </div>
            <div>
                <i class="fas fa-paste"></i>
                <h3>NO 1099 FEE</h3>
                <p>
                Nobody enjoys tax time. Americana believes that you shouldn't have to pay an additional fee just to receive your 1099 each year. You've already paid a management fee for any collected rents, why pay more?
                </p>
            </div>
            <div>
                <i class="far fa-check-circle"></i>
                <h3>NO RENEWAL FEE</h3>
                <p>
                Everyone benefits when a tenant stays long term, so we don't believe in penalizing you to renew a tenant's lease. All lease renewals are done at no extra cost.
                </p>
            </div>
        </div>
        <hr/>
        <h2 class="text-center">Management Fee</h2>
        <hr/>
        <div class="grid-2-4-v2 percentage">
            <div>
                <h3>10%</h3>
                <p>
                    Single family homes, condos, townhouses, and multiplexes without on-site management.
                </p>
            </div>
            <div>
                <h3>9%</h3>
                <p>
                    Receive a 1% fee discount on new construction properties for the first year of management.
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