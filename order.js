'use strict';

{
  const orderBtn = document.getElementById('orderBtn');
  orderBtn.addEventListener('click', () => {
    const orderConf = document.getElementById('orderConf');
    orderConf.classList.remove('hidden');

    const result = document.getElementById('result');
    result.classList.add('hidden');
    console.log("hello");
  });
}