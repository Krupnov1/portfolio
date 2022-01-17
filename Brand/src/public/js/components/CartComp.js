"use strict";

import cartItem from './cartItem'

const cart = {
    name: 'cart',
    
    components: {cartItem},

    data() {
        return {
            cartItems: [],
            showCart: false, 
            sum: '',
        }
    },

    methods: {
        addProduct(product) {
            let find = this.cartItems.find(el => el.id === product.id); 
            if (find) {
                this.$parent.putJson(`/api/cart/${find.id}`, {quantity: 1});
                find.quantity++;
            } else {
                let prod = Object.assign({quantity: 1}, product);
                this.$parent.postJson('/api/cart', prod)
                    .then(data => {
                        if (data.result === 1) {
                            this.cartItems.push(prod);
                        }
                        this.prodCartSum();
                    });
            }
        },
    
        remove(item) {
            if (item.quantity > 1) {
                this.$parent.putJson(`/api/cart/${item.id}`, {quantity: -1}) 
                    .then(data => {
                        if (data.result === 1) {
                            item.quantity--;
                        }
                    });
            } else {
                this.$parent.deleteJson(`/api/cart/${item.id}`)
                    .then(data => {
                        if (data.result === 1) {
                            this.cartItems.splice(this.cartItems.indexOf(item), 1);
                        }
                        this.prodCartSum();
                    });
            }
        },

        prodCartSum() {
            this.sum = this.cartItems.reduce((accumulator, cartSum) => 
            accumulator += +[cartSum.price * cartSum.quantity], 0);
        },
    },

    template: `
        <div class="cart">
            <img class="headCart" src="images/h_02_forma.svg" alt="forma" @click="showCart = !showCart">
            <div class="cart-block" v-show="showCart">
                <p v-if="!cartItems.length">Корзина пуста</p>
                <cart-item v-for="item of cartItems" :key="item.id" :cart-item="item"  @remove="remove"></cart-item>
            </div>
        </div>` 
};

export default cart;