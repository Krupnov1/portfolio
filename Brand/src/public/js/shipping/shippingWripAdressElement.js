"use strict"

const shippingWripAdressElement = {
    name: 'shipping-wrip-adress-element',
    template: `
    <div class="wripAdress">
        <div class="wrapper-checkout contentAdress">
            <div class="linkForm">
                <a href="#">01. Shipping Adress</a>
            </div>
            <div class="checkoutForm" >
                <form class="leftForm" action="#">
                    <h4>Check as a guest or register</h4>
                    <p>Register with us for future convenience</p>
                    <input type="radio" id="checkout" name="checkout" value="checkout as guest">
                    <label for="checkout">Checkout as guest</label><br>
                    <input type="radio" id="register" name="checkout" value="register" checked="checked">
                    <label for="register">Register</label>
                    <h4 class="register">Register and save time!</h4>
                    <p>Register with us for future convenience</p>
                    <p class="fast"><i class="fas fa-angle-double-right"></i>
                        Fast and easy checkout</p>
                    <p><i class="fas fa-angle-double-right"></i>
                        Easy access to your order history and status</p>
                    <button>Continue</button>
                </form>
                <form class="rightForm" action="#">
                    <h4>Already registed?</h4>
                    <p>Please log in below</p>
                    <label for="email">EMAIL ADDRESS<em>*</em></label><br>
                    <input id="email"><br>
                    <label class="pass" for="password">PASSWORD<em>*</em></label><br>
                    <input id="password"><br>
                    <span class="required"><em class="star">*</em><em>Required Fileds</em></span><br>
                    <button>Login</button>
                    <span class="forgot">Forgot Password ?</span>
                </form>
            </div>
            <div class="linkForm linkFormBord">
                <a href="#">02. BILLING INFORMATION</a>
            </div>
            <div class="linkForm">
                <a href="#">03. SHIPPING INFORMATION</a>
            </div>
            <div class="linkForm">
                <a href="#">04. SHIPPING METHOD</a>
            </div>
            <div class="linkForm">
                <a href="#">05. PAYMENT METHOD</a>
            </div>
            <div class="linkForm">
                <a href="#">06. ORDER REVIEW</a>
            </div>				
        </div>	
    </div>`
};

export default shippingWripAdressElement;