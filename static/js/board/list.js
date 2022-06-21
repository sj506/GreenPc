(function () {
    const trList = document.querySelectorAll('tbody > tr');

    // const trList = document.querySelectorAll('.tdTitle');

    // 예 dataset 사용방법
    // for (i = 0; i < trList.length; i++) {
    //     const a = trList[i].dataset.i_board;
    //     trList[i].addEventListener('click', function () {
    //         location.href = `localhost/board/detail?i_board=${a}`;
    //     });
    //     console.log(trList[i].dataset);
    // }

    trList.forEach((item) => {
        item.style.cursor = 'pointer';
        item.addEventListener('click', () => {
            location.href = `detail?i_board=${item.dataset.i_board}`;
        });
    });
})();

// 캡쳐링 : 부모에게 건 이벤트가 자식까지 전달됨
// 버블링 : 자식을 눌렀는데 부모까지 전달됨
