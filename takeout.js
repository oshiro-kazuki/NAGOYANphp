'use strict';

{
  const menus = [
    {name: 'チキン唐揚げライス', imgSrc: "images/takeout01.JPG", price: 800},
    {name: "チキン南蛮唐揚げライス", imgSrc: "images/takeout02.JPG", price: 800},
    // {name: "ガーリックチキンライス", imgSrc: "images/takeout03.JPG", price: 1000},
    // {name: "ジャークチキンライス", imgSrc: "images/takeout04.JPG", price: 1000},
    // {name: "ガーリックバターシュリンプライス", imgSrc: "images/takeout05.JPG", price: 1000},
    // {name: "チーズたっぷりライス", imgSrc: "images/takeout06.JPG", price: 800},
    // {name: "デミグラスソースのオムライス", imgSrc: "images/takeout07.JPG", price: 800},
    // {name: "バケット", imgSrc: "images/takeout08.JPG", price: 800},
    // {name: "目玉焼きのせ炒飯", imgSrc: "images/takeout09.JPG", price: 800},
  ];

  let count = 0;
  let sub = 0;
  let total = 0;

  const toItems = document.getElementById('toItems');
  const totalPrice = document.getElementById('totalPrice');
  const order = document.getElementById('order');


  let ul;
  function viewUl() {
    ul = document.createElement('ul');
    ul.classList.add('toItem');
    toItems.appendChild(ul);
  }

  function viewList(content, cls) {
    const list = document.createElement('li');
    const img = document.createElement('img');
    if (cls === 'toImage') {
      img.classList.add(`${cls}`)
      img.src = content;
    } else {
      list.classList.add(`${cls}`);
      list.textContent = content;
    }
    list.appendChild(img);
    ul.appendChild(list);
  }

  menus.forEach(menu => {
    viewUl();
    viewList(menu.name, 'toP');
    viewList(menu.imgSrc, 'toImage');
    viewList(`¥ ${menu.price}`, 'toP');

    const input = document.createElement('input');
    input.classList.add('toCount');
    input.setAttribute('type', 'number');
    input.setAttribute('value', `${count}`);
    input.setAttribute('min', '0');
    ul.appendChild(input);

    function countSum() {
      count = parseInt(input.value);
      sub = menu.price * count;
    }

    input.addEventListener('change', e => {
      countSum();
      listSub.textContent = `¥ ${sub}`;
    })

    const listSub = document.createElement('li');
    listSub.classList.add('toSubtotal');
    listSub.textContent = `¥ ${sub}`;
    ul.appendChild(listSub);

    order.addEventListener('click', ()  => {
      countSum();    
      total += sub;
      totalPrice.textContent = `¥ ${total}`;
    });
  });
}