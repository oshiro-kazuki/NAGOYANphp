'use strict';

{
  //レスポンシブ用ナビボタン
  const mfInfo = document.getElementById('mfInfo');
  const infoModal = document.getElementById('infoModal');
  const mfInfoClose = document.getElementById('mfInfoClose');

  mfInfo.addEventListener('click', () => {
    if (infoModal.className == 'hidden') {
      infoModal.classList.remove('hidden');
      mfInfo.classList.add('hidden');
      mfInfoClose.classList.remove('hidden');
    } else {
      infoModal.classList.add('hidden');
      mfInfo.classList.remove('hidden');
      mfInfoClose.classList.add('hidden');
    }
  });
  
  mfInfoClose.addEventListener('click', () => {
    mfInfo.click();
  });



  const contents = [
    {page: 'index.php', text: 'home'},
    {page: 'takeout.php', text: 'takeout'},
    {page: 'access.php', text: 'access'},
    {page: 'contact.php', text: 'contact'},
  ];

  const pcInfo = document.getElementById('pcInfo');

  function createA(page, text, ele) {
    const a = document.createElement('a');
    a.href = `${page}`;
    a.textContent = text;
    ele.appendChild(a);
  }

  contents.forEach(content => {
    createA(content.page, content.text, pcInfo);
    createA(content.page, content.text, infoModal);
  });
}



{
  function fadeinShow() {
    const drinksP = document.querySelectorAll('.drinks > p');
  
    for(let i = 0; i < drinksP.length; i++) {
      const timing = 100;
      const scrollY = window.pageYOffset;
      const windowH = window.innerHeight;
      const drinksTop = drinksP[i].getBoundingClientRect().top;
      const drinksTopY = scrollY + drinksTop;
      if(scrollY + windowH - timing > drinksTopY) {
        drinksP[i].classList.add('is-show');
      } else if (scrollY +windowH < drinksTopY) {
        drinksP[i].classList.remove('is-show');
      }
    }
  }

  window.addEventListener('scroll', fadeinShow);
}