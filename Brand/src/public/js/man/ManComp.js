import manArrivalsElement from './manArrivalsElement'
import manInfoProductElement from './manInfoProductElement'


const Man = {
    name: 'man',
    components: {
        manArrivalsElement,
        manInfoProductElement
    },
    
    data() {
        return {
            catalogUrl: '',
            man_products: [],
            filtered: [],
            cartAPI: this.$root.$refs.cart,
            blockCategor: false,
        }
    },

    methods: {
        filter(value) {
            let regexp = new RegExp(value, 'i');
            this.filtered = this.man_products.filter(el => regexp.test(el.title));
        }
    },

    mounted() {
        this.$parent.getJson('/api/man_products')
            .then(data => {
                for(let el of data) {
                    this.man_products.push(el);
                    this.filtered.push(el);
                };
            });
    },

    
    
    template: `
    <div class="container-men">
        <man-arrivals-element></man-arrivals-element>

        <div class="wrapContent">
            <div class="manCategory wrapper-men">
                <div class="leftContent">
                        <div class="category">
                            <div class="bordLeft"></div>
                            <div class="blockCategor" @click="blockCategor = ! blockCategor">
                                <span class="blkCategor" :class="{blkCategorActiv: blockCategor}">Category</span>
                                <i class="fas fa-caret-down" 
                                   :class="{'fa-caret-up': blockCategor, 'i-activ': blockCategor}"></i>
                            </div>
                        </div>
                        <nav class="navCategor" v-show="blockCategor">
                            <a href="#">Accessories</a>
                            <a href="#">Bags</a>						
                            <a href="#">Denim</a>						
                            <a href="#">Hoodies &amp; Sweatshirts</a>						
                            <a href="#">Jackets &amp; Coats</a>						
                            <a href="#">Pants</a>						
                            <a href="#">Polos</a>						
                            <a href="#">Shirts</a>						
                            <a href="#">Shoes</a>						
                            <a href="#">Shorts</a>						
                            <a href="#">Sweaters &amp; Knits</a>						
                            <a href="#">T-Shirts</a>						
                            <a href="#">Tanks</a>						
                        </nav>
                        <div class="category categoryTwo">
                            <div class="bordLeft"></div>
                            <div class="blockCategor">
                                <a class="blkCategor" href="#">Category</a>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="category">
                            <div class="bordLeft"></div>
                            <div class="blockCategor">
                                <a class="blkCategor" href="#">Category</a>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </div>
                </div>
                <div class="rightContent">
                    <div class="topRightCont">
                        <div class="trend">
                            <h4>Trending now</h4>
                            <div class="blockOne">
                                <a class="txtSpn" href="#">Bohemian</a> 
                                <span class="txtSpn slhSpn">|</span> 
                                <a class="txtSpn" href="#">Floral</a> 
                                <span class="txtSpn slhSpn">|</span> 
                                <a class="txtSpn" href="#">Lace</a> 
                            </div>
                            <div class="blockTwo">
                                <a class="txtSpn" href="#">Floral</a>
                                <span class="txtSpn slhSpn">|</span> 
                                <a class="txtSpn" href="#">Lace</a> 
                                <span class="txtSpn slhSpn">|</span> 
                                <a class="txtSpn" href="#">Bohemian</a>
                            </div>
                        </div>
                        <div class="size">
                            <h4>Size</h4>
                            <div class="sizeOne">
                                <label class="lb-XXS">
                                    <input type="checkbox" name="XXS">XXS
                                </label>
                                <label class="lb-XS">
                                    <input type="checkbox" name="XS">XS
                                </label>
                                <label class="lb-S">
                                    <input type="checkbox" name="S">S
                                </label>
                                <label>
                                    <input type="checkbox" name="M">M
                                </label>
                            </div>
                            <div class="sizeTwo">
                                <label class="lb-L">
                                    <input type="checkbox" name="L">L
                                </label>
                                <label class="lb-XL">
                                    <input type="checkbox" name="XL">XL
                                </label>
                                <label>
                                    <input type="checkbox" name="XXL">XXL
                                </label>
                            </div>
                        </div>
                        <div class="price">
                            <h4>PRICE</h4>
                            <div class="scale">
                                <img src="images/Ellipse_1.svg" alt="ellips1">
                                <img src="images/Rounded_2.svg" alt="rounded">
                                <img src="images/Ellipse_1.svg" alt="ellips2">
                            </div>
                            <div class="priceScale">
                                <span>$52</span>
                                <span>$400</span>
                            </div>
                        </div>
                    </div>
                    <div class="middleCont">
                        <div class="sort">
                            <span>Sort By</span>
                            <div class="sortSlh"></div>
                            <select name="#">
                                <option value="name">Name</option> 
                            </select>
                        </div>
                        <div class="sort sortTwo">
                            <span>Show</span>
                            <div class="sortSlh"></div>
                            <select name="#">
                                <option value="09">09</option>
                            </select>
                        </div>
                    </div>

                    <div class="bottomCont">
                        <section class="secContent" v-for="section of filtered" :key="section.id">
                            <div class="imgTop">
                                <div class="imgBackground">
                                    <button @click="cartAPI.addProduct(section)">
                                        <img src="images/sfon.png" alt="cart_fon">
                                        Add to Cart
                                    </button>
                                </div>
                                <img :src="section.image" :alt="section.alt"> 
                            </div>
                            <div class="txtSec">
                                <h5>{{section.title}}</h5>
                                <span>$ {{section.price}}</span>
                            </div>
                        </section>
                    </div>

                    <div class="navBtmWrap">
                        <nav class="botNav">
                            <i class="fas fa-chevron-left"></i>
                            <a class="oneActiv" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6.....20</a>
                            <i class="arrowActiv fas fa-chevron-right"></i>
                        </nav>
                        <button class="botBut">View All</button>
                    </div>
                </div>
            </div>
        </div>
        
        <man-info-product-element></man-info-product-element>
    </div>`  
}; 

export default Man;