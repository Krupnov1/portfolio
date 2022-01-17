import womenArrivalsElement from './womenArrivalsElement'
import womenWomColBlockElement from './womenWomColBlockElement'
import womenContWomBlockElement from './womenContWomBlockElement'


const Women = {
    name: 'women', 
    components: {
        womenArrivalsElement,
        womenWomColBlockElement,
        womenContWomBlockElement,
    },

    data() {
        return {
            catalogUrl: '',
            women_products: [],
            cartAPI: this.$root.$refs.cart,
        }
    },

    mounted() { 
        this.$parent.getJson('/api/women_products')
            .then(data => {
                for(let el of data) {
                    this.women_products.push(el);
                };
            });
    },

    template: `
    <div class="container-women">
        <women-arrivals-element></women-arrivals-element>
        <women-wom-col-block-element></women-wom-col-block-element>
        <women-cont-wom-block-element></women-cont-wom-block-element>

        <div class="wrapper-women likeAlso">
            <h3>you may like also</h3>

            <div class="womenPrice">
                <section class="secLike" v-for="section of women_products" :key="section.id">
                    <div class="topImg">
                        <div class="imgBackground">
                            <button @click="cartAPI.addProduct(section)">
                                <img src="images/sfon.png" alt="cart_fon"> 
                                Add to Cart
                            </button>
                        </div>
                        <img :src="section.image" :alt="section.alt">
                    </div>
                    <div class="botTxt">
                        <h5>{{section.title}}</h5>
                        <div class="botTxtPrice">$ {{section.price}}</div>
                    </div>
                </section>
            </div>

        </div>
    </div>`
};

export default Women;