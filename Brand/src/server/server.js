const express = require('express');
const fs = require('fs');
const cartRouter = require('./cartRouter');
const app = express();
const path = require('path');

app.use(express.json());
app.use('/', express.static(path.resolve(__dirname, '../public')));
app.use('/api/cart', cartRouter);

const catalogHomeJSONPath = path.resolve(__dirname, './db/home_products.json');
const catalogManJSONPath = path.resolve(__dirname, './db/man_products.json');
const catalogWomenJSONPath = path.resolve(__dirname, './db/women_products.json');
const catalogCartJSONPath = path.resolve(__dirname, './db/userCart.json');

app.get('/api/home_products', (req, res) => {
    fs.readFile(catalogHomeJSONPath, 'utf-8', (err, data) => {
        if (err) {
            res.send(JSON.stringify({result: 0, text: err}));
        } else {
            res.send(data);
        }
    });
});

app.get('/api/man_products', (req, res) => { 
    fs.readFile(catalogManJSONPath, 'utf-8', (err, data) => {
        if (err) {
            res.send(JSON.stringify({result: 0, text: err}));
        } else {
            res.send(data);
        }
    });
});

app.get('/api/women_products', (req, res) => {
    fs.readFile(catalogWomenJSONPath, 'utf-8', (err, data) => {
        if (err) {
            res.send(JSON.stringify({result: 0, text: err}));
        } else {
            res.send(data);
        }
    });
});

app.get('/api/userCart', (req, res) => {
    fs.readFile(catalogCartJSONPath, 'utf-8', (err, data) => {
        if (err) {
            res.send(JSON.stringify({result: 0, text: err}));
        } else {
            res.send(data);
        }
    });
});

const port = process.env.PORT || 3000;
app.listen(port, () => {
    console.log(`Listening ${port} port`);
});