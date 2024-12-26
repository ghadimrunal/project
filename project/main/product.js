const fruits = [
    {
        name: 'Apple',
        price: 'Rs.20',
        imageUrl: '/project/images/apple.png'
    },
    {
        name: 'Banana',
        price: 'Rs.30',
        imageUrl: '/project/images/banana.jpg'
    },
    {
        name: 'Watermelon',
        price: 'Rs.100',
        imageUrl: '/project/images/watermelon.jpg'
    },
    {
        name: 'Grapes',
        price: 'Rs.50',
        imageUrl: '/project/images/grapes.jpg'
    },
    {
        name: 'Apple',
        price: 'Rs.20',
        imageUrl: '/project/images/apple.jpg'
    },
    {
        name: 'Banana',
        price: 'Rs.30',
        imageUrl: '/project/images/banana.jpg'
    },
    {
        name: 'Watermelon',
        price: 'Rs.100',
        imageUrl: '/product-page/watermelon.jpg'
    },
    {
        name: 'Grapes',
        price: 'Rs.50',
        imageUrl: '/project/images/grapes.jpg'
    },
];

const itemsContainer = document.querySelector('.products-container');

fruits.forEach(fruit => {
    const itemDiv = document.createElement('div');
    itemDiv.classList.add('item');
    
    const fruitImage = document.createElement('img');
    fruitImage.src = fruit.imageUrl;
    fruitImage.alt = fruit.name;
    
    const fruitName = document.createElement('h3');
    fruitName.textContent = fruit.name;
    
    const fruitPrice = document.createElement('p');
    fruitPrice.textContent = fruit.price;
    
    itemDiv.appendChild(fruitImage);
    itemDiv.appendChild(fruitName);
    itemDiv.appendChild(fruitPrice);
    
    itemsContainer.appendChild(itemDiv);
});
