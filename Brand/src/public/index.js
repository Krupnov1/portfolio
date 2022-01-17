"use strict"

import '@babel/polyfill'
import appMain from './js/main'
import './css/main_content/index/style.css'
import './css/main_content/product/style.css'
import './css/main_content/single_page/style.css'
import './css/main_content/shopping_cart/style.css'
import './css/main_content/checkout/style.css'
import './css/shared_blocks/style.css'

const app = new Vue(appMain);
