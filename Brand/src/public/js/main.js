"use strict"

import router from './components/RouterComp'
import Home from './home/HomeComp'
import Man from './man/ManComp'
import Women from './women/WomenComp'
import ShopCart from './cart/ShoppingCart' 
import Shipping from './shipping/ShippingComp'
import cart from './components/CartComp'
import error from './components/ErrorComp'
import vueHeaderFilter from './components/FilterComp'
import vueFooterBottom from './components/FooterBottom'
import vueFooterTop from './components/FooterTop'
import vueHeaderLogo from './components/LogoComp'
import vueNav from './components/NavComp'
import vueSub from './components/SubComp'
import vueHeaderAuth from './components/AuthComp'

const app = {
    el: '#app',
    router,

    components: {
        Home,
        Man,
        Women,
        ShopCart,
        Shipping,
        cart,
        error,
        vueHeaderFilter,
        vueFooterBottom,
        vueFooterTop,
        vueHeaderLogo,
        vueNav,
        vueSub,
        vueHeaderAuth
    },
    
    data: {},

    methods: {
        getJson(url) {
            return fetch(url)
                .then(result => result.json())
                .catch(error => {
                    this.$refs.error.setError(error);
                });
        },

        postJson(url, data) {
            return fetch(url, {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            }).then(result => result.json())
              .catch(error => {
                  this.$refs.error.setError(error);
              });
        },

        putJson(url, data) {
            return fetch(url, {
                method: 'PUT',
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            }).then(result => result.json())
              .catch(error => {
                  this.$refs.error.setError(error);
              });
        },

        deleteJson(url) {
            return fetch(url, {
                method: 'DELETE',
                headers: {
                    "Content-Type": "application/json" 
                },
            }).then(result => result.json())
              .catch(error => {
                  this.$refs.error.setError(error);
              });
        },
    },
};

export default app;