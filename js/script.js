document.addEventListener("DOMContentLoaded", function () {
    const body1 = document.querySelector('.body_1');
    const body2 = document.querySelector('.body_2');
    const nextBtn = document.querySelectorAll('.copy_1');
    const backBtn = document.querySelector('.copy_2');

    nextBtn.forEach(button => {
        button.addEventListener('click', () => {
            body2.style.zIndex = 2;
            body1.style.zIndex = 1;
        });
    });

    backBtn.addEventListener('click', () => {
        body2.style.zIndex = 1;
        body1.style.zIndex = 2;
    });



    const squares = document.querySelectorAll('.square');
    const columns = 4;
    const rows = 5;
    const gap = 10; // px
    const section = document.querySelector('.section');

    const sectionWidth = section.clientWidth;
    const sectionHeight = section.clientHeight;

    // نحسب العرض والارتفاع الفعلي لكل مربع بعد خصم الفراغات
    const totalHorizontalGap = gap * (columns - 1);
    const totalVerticalGap = gap * (rows - 1);

    const squareWidth = (sectionWidth - totalHorizontalGap) / columns;
    const squareHeight = (sectionHeight - totalVerticalGap) / rows;

    squares.forEach((square, index) => {
        const col = index % columns;
        const row = Math.floor(index / columns);

        const left = col * (squareWidth + gap);
        const top = row * (squareHeight + gap);

        square.style.width = `${squareWidth}px`;
        square.style.height = `${squareHeight}px`;
        square.style.left = `${left}px`;
        square.style.top = `${top}px`;
    });
});
