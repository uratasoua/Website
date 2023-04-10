$('.room__slider__list').slick({
    autoplay: false,         //自動再生
    // autoplaySpeed: 2000,    //自動再生のスピード
    fade: true,             //再生の仕方をフェードイン・フェードアウトにする
    speed: 2200,             //スライドするスピード
    dots: true,             //スライドしたのドット
    arrows: true,           //左右の矢印
    infinite: true,         //スライドのループ
    pauseOnHover: false,    //ホバーしたときにスライドを一時停止しない　
});


// モーダル
const buttonOpen = document.getElementById('modalOpen');
const buttonOpenB = document.getElementById('modalOpenB');
const buttonOpenC = document.getElementById('modalOpenC');
const buttonOpenD = document.getElementById('modalOpenD');
const modal = document.getElementById('easyModal');
const modalB = document.getElementById('easyModalB');
const modalC = document.getElementById('easyModalC');
const modalD = document.getElementById('easyModalD');
const buttonClose = document.getElementsByClassName('modalClose')[0];
const buttonCloseB = document.getElementsByClassName('modalCloseB')[0];
const buttonCloseC = document.getElementsByClassName('modalCloseC')[0];
const buttonCloseD = document.getElementsByClassName('modalCloseD')[0];

// ボタンがクリックされた時
buttonOpen.addEventListener('click', modalOpen);
function modalOpen() {
    modal.style.display = 'block';
}
// バツ印がクリックされた時
buttonClose.addEventListener('click', modalClose);
function modalClose() {
    modal.style.display = 'none';
}
// モーダルコンテンツ以外がクリックされた時
addEventListener('click', outsideClose);
function outsideClose(e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
}

// サンプルルームB
// ボタンがクリックされた時
buttonOpenB.addEventListener('click', modalOpenB);
function modalOpenB() {
    modalB.style.display = 'block';
}
// バツ印がクリックされた時
buttonCloseB.addEventListener('click', modalCloseB);
function modalCloseB() {
    modalB.style.display = 'none';
}
// モーダルコンテンツ以外がクリックされた時
addEventListener('click', outsideClose);
function outsideClose(e) {
    if (e.target == modalB) {
        modalB.style.display = 'none';
    }
}

// サンプルルームC
// ボタンがクリックされた時
buttonOpenC.addEventListener('click', modalOpenC);
function modalOpenC() {
    modalC.style.display = 'block';
}
// バツ印がクリックされた時
buttonCloseC.addEventListener('click', modalCloseC);
function modalCloseC() {
    modalC.style.display = 'none';
}
// モーダルコンテンツ以外がクリックされた時
addEventListener('click', outsideClose);
function outsideClose(e) {
    if (e.target == modalC) {
        modalC.style.display = 'none';
    }
}

// サンプルルームD
// ボタンがクリックされた時
buttonOpenD.addEventListener('click', modalOpenD);
function modalOpenD() {
    modalD.style.display = 'block';
}
// バツ印がクリックされた時
buttonCloseD.addEventListener('click', modalCloseD);
function modalCloseD() {
    modalD.style.display = 'none';
}
// モーダルコンテンツ以外がクリックされた時
addEventListener('click', outsideClose);
function outsideClose(e) {
    if (e.target == modalD) {
        modalD.style.display = 'none';
    }
}


// モーダルのスライダー
$('.modal-body__slider').slick({
    autoplay: false,         //自動再生
    // autoplaySpeed: 2000,    //自動再生のスピード
    fade: true,             //再生の仕方をフェードイン・フェードアウトにする
    speed: 2200,             //スライドするスピード
    dots: true,             //スライドしたのドット
    arrows: true,           //左右の矢印
    infinite: true,         //スライドのループ
    pauseOnHover: false,    //ホバーしたときにスライドを一時停止しない　
});