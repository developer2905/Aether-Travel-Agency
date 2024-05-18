let loadMoreBtn = document.querySelector('#product1 .load-more .button');
let currentItem = 4;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('#product1 .pro-container .pro')];
    for(var i = currentItem; i < currentItem+4; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 4;
    if(currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none';
    }
}