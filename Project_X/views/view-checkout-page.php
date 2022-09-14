<main>
<div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="./public/theme/img/logo.png" alt="" style="width:172;height:172">
        <h2>Checkout</h2>
      </div>

      

        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form action="./checkout-page.php" method="post" class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="ime">
                  <?php echo $alert_name;?>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="prezime">
                  <?php echo $alert_lname; ?>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Phone number</label>
              <input type="number" class="form-control" id="address" placeholder="+381..." required="" name="broj">
              <?php echo $alert_phone; ?>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
              <?php echo $alert_email; ?>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" name="adresa">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required="" name="drzava">
                  <option value="">Choose...</option>
                  <option>Serbia</option>
                </select>
              <?php echo $alert_ctr; ?>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">City</label>
                <select class="custom-select d-block w-100" id="state" required="" name="grad">
                  <option value="">Choose...</option>
                  <option value="beograd">Beograd</option>
                  <option value="nis">Nis</option>
                  <option value="novi-sad">Novi Sad</option>
                  <option value="krusevac">Krusevac</option>
                  <option value="subotica">Subotica</option>
                </select>
              <?php echo $alert_city; ?>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="" name="zip">
                <?php echo $alert_zip ?>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required name="kr_kartica" disabled>
                <label class="custom-control-label" for="credit" >Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required name="kes">
                <label class="custom-control-label" for="debit">Pay with cash</label>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" disabled>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" disabled>
                <div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" disabled>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" disabled >
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Continue to checkout</button>
          </form>
        <?php echo $alert1;?>
        </div>
      </div>

    </div>
</main>