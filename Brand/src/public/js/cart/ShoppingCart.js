import cartArrivalsElement from './cartArrivalsElement'


const ShopCart = {
    name: 'shop-cart',
    components: {
        cartArrivalsElement,
    },
    
    data() {
        return {
            cartAdd: this.$root.$refs.cart.cartItems,
            cartDel: this.$root.$refs.cart.remove,
            cartSum: this.$root.$refs.cart.sum,
        }
    },

    template: `
    <div class="container-cart">
        <cart-arrivals-element></cart-arrivals-element>

        <div class="wrapper-cart arrivalsProduct">
            <div class="productDetails">
                <span>Product Details</span>
                <div class="prodCategor">
                    <span class="categor1">unite price</span>
                    <span class="categor2">Quantity</span>
                    <span class="categor3">shipping</span>
                    <span class="categor4">Subtotal</span>
                    <span class="categor5">Action</span>
                </div>
            </div>

            <div class="shop-cart-block" v-show="cartAdd">
                <p v-if="!cartAdd.length">Корзина пуста</p>
            </div>
            <section class="sectionProduct" v-for="section of cartAdd" :key="section.id">
                <div class="categorProduct">
                    <img :src="section.image" :alt="section.alt">
                    <div class="peopleTxt">
                        <h4>{{section.title}}</h4>
                        <span class="peopleSpanOne">Color: </span><span class="peopleSpanTwo"> Red</span><br>
                        <span class="peopleSpanOne">Size:</span><span class="peopleSpanTwo"> Xll</span>
                    </div>
                </div>
                <div class="shirtCart">
                    <div class="uni"><span>$ {{section.price}}</span></div>
                    <div class="qua">{{section.quantity}}</div>
                    <div class="ship"><span>FREE</span></div>
                    <div class="sub"><span>$ {{section.quantity*section.price}}</span></div>
                    <div class="act"><span><i class="fas fa-times-circle" @click="cartDel(section)"></i></span></div>
                </div>
            </section>


            <div class="shopCart">
                <div class="clearShop">
                    <span>CLEAR SHOPPING CART</span>
                </div>
                <div class="contShop">
                    <span>CONTINUE SHOPPING</span>
                </div>
            </div>
            <div class="containerForm">
                <div class="adress">
                    <form class="adressOne" action="#">
                        <h4>Shipping Adress</h4>
                        <select name="#" id="#">
                            <option value="bangladesh">Bangladesh</option>
                            <option value="russia">Russia</option>
                            <option value="china">China</option>
                            <option value="indonesia">Indonesia</option>
                        </select>
                        <input required type="text" placeholder="State">
                        <input required type="number" placeholder="Postcode / Zip">
                        <button>get a quote</button>
                    </form>
                </div>
                <div class="discount">
                    <form class="discountOne" action="#">
                        <h4>coupon  discount</h4>
                        <label for="state">Enter your coupon code if you have one</label>
                        <input type="text" id="state" placeholder="State">
                        <button>Apply coupon</button>
                    </form>
                </div>
                <div class="total">
                    <div class="subTtl">
                        <span>Sub total  $ {{cartSum}}</span><br>
                        <span class="grand">GRAND TOTAL<span class="grdTtl">$ {{cartSum}}</span></span>
                    </div>
                    <button>proceed to checkout</button>
                </div>
            </div>	
        </div>

    </div>`
}; 

export default ShopCart;