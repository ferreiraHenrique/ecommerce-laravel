
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });

// const cart = new Vue({
//     el: '#cart',
//     data: {
//         tem_carrinho: false,
//     }
// });

const side_cart = new Vue({
    el: '#side-cart',
    data: {
        isActive: true,
        items: []
    }
});

document.querySelector('#open-cart').addEventListener('click', (event) => {
    event.preventDefault();
    side_cart.$data.isActive = true;
});

document.querySelector('.dismiss-cart').addEventListener('click', () => {
    side_cart.$data.isActive = false;
});

document.querySelector('.add-cart').addEventListener('click', (event) => {
    event.target.innerText = 'ADDING TO CART...';
    let quantity = event.target.parentElement.querySelector('#quantity').value;
    let price = event.target.parentElement.querySelector('#price').value;
    let name = event.target.parentElement.querySelector('#name').value;

    const product = {
        name: name,
        price: parseFloat(price),
        quantity: parseInt(quantity),
    };

    side_cart.$data.items.push(product);

    side_cart.$data.isActive = true;
    event.target.innerText = 'ADD TO CART';
});
