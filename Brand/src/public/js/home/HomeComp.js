import homeTopElement from './homeTopElement'
import homeMainContTopElement from './homeMainContTopElement'
import homeSectionItemElement from './homeSectionItemElement'
import homeMiddleButElement from './homeMiddleButElement'
import homeMainContBottomElement from './homeMainContBottomElement' 


const Home = {
    name: 'home',
    components: {
        homeTopElement,
        homeMainContTopElement,
        homeSectionItemElement,
        homeMiddleButElement,
        homeMainContBottomElement
    },

    data() {
        return {
            catalogUrl: '',
            home_products: [], 
            filtered: [],
            cartAPI: this.$root.$refs.cart,
        }
    },

    methods: {
        filter(value) {
            let regexp = new RegExp(value, 'i');
            this.filtered = this.home_products.filter(el => regexp.test(el.title));
        }
    },

    mounted() {
        this.$parent.getJson('/api/home_products')
            .then(data => {
                for(let el of data) {
                    this.home_products.push(el);
                    this.filtered.push(el);
                };
            });
    },

    template: `
    <div class="container-two">
        <home-top-element></home-top-element>
        <home-main-cont-top-element></home-main-cont-top-element>
        <home-section-item-element></home-section-item-element>

        <div class="wrapper mainContMiddle">

            <section class="blockMiddle" v-for="section of filtered" :key="section.id">
                <div class="imgMiddle">
                    <div class="imgBackground">
                        <button @click="cartAPI.addProduct(section)">
                            <img src="images/sfon.png" alt="cart_fon"> 
                            Add to Cart
                        </button>
                    </div>
                    <img class="imgPeople" :src="section.image" :alt="section.alt"> 
                </div>
                <h5 class="txtMiddle">{{section.title}}<br><span>$ {{section.price}}</span></h5> 
            </section>
            
        </div>

        <home-middle-but-element></home-middle-but-element>
        <home-main-cont-bottom-element></home-main-cont-bottom-element>
    </div>`
};

export default Home;