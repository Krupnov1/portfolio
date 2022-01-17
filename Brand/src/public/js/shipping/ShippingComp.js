import shippingArrivalsElement from './shippingArrivalsElement'
import shippingWripAdressElement from './shippingWripAdressElement'


const Shipping = {
    name: 'shipping',
    components: {
        shippingArrivalsElement,
        shippingWripAdressElement 
    },

    template: `
    <div class="container-checkout">
        <shipping-arrivals-element></shipping-arrivals-element>
        <shipping-wrip-adress-element></shipping-wrip-adress-element>
    </div>`
};

export default Shipping;