require('./bootstrap');

window.Vue = require('vue').default;


fetch('http://127.0.0.1:8000/graphql')
    .then(response => response.json())
    .then(data => console.log(data));
