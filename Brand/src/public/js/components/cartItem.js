"use strict"

const cartItem = {
    name: 'cart-item',  
    props: ['cartItem'],
    template: `
        <div class="cart-item">
            <div class="product-bio">
                <img :src="cartItem.image" alt="section.alt">
                <div class="product-desc">
                    <p class="product-title">{{cartItem.title}}</p>
                    <p class="product-quantity">Количество: {{cartItem.quantity}}</p>
                    <p class="product-single-price">{{cartItem.price}} $ за единицу</p>
                </div>
            </div>
            <div class="right-block">
                <p class="product-price">{{cartItem.quantity*cartItem.price}} $</p>
                <button class="del-btn" @click="$emit('remove', cartItem)">&times;</button> 
            </div>
        </div>`
};

export default cartItem;