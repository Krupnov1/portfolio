"use strict"

import Home from './../home/HomeComp'
import Man from './../man/ManComp'
import Women from './../women/WomenComp'
import ShopCart from './../cart/ShoppingCart'
import Shipping from './../shipping/ShippingComp' 

  const router = new VueRouter({
    routes: [
        { 
            path: '/', component: Home 
        },
        { 
            path: '/man', component: Man 
        },
        {
            path: '/women', component: Women 
        },
        {
            path: '/shop-cart', component: ShopCart
        },
        {
            path: '/shipping', component: Shipping
        }
      ],
  });

  export default router;