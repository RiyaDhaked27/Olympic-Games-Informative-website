<?php 
include('include/header.php');
?>
 <div class="taxi-booking bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-4">
                    <form action="controllor/controllor.php" method="post" enctype="multipart/form-data">
                    	
                        <div class="taxi-booking-form">
                            <div class="form-field">
                              <input type="text" name="customer_name" placeholder="Customer Name" class="form-control">
                            </div>
                            <div class="form-field">
                              <input type="text" name="email_id" placeholder="Customer Email" class="form-control">
                            </div>

                            <div class="form-field">
                              <input type="text" name="contact_number" placeholder="Contact Number" class="form-control">
                            </div>

                            <div class="form-field">
                                <button class="default-btn" type="submit" name="booking">Book Your Taxi</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>