"use strict"

const vueNav = {
    name: 'vue-nav', 
    template: `
    <nav class="topNav">
        <router-link to="/">Home</router-link>                 
        <router-link to="/man">Man</router-link>                 
        <router-link to="/women">Women</router-link>                                 
        <router-link to="/shop-cart">Accoseriese</router-link>                
        <router-link to="/shipping">Featured</router-link>                
    </nav>`
}; 

export default vueNav;