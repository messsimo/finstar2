// Selecting elements
const blocks = document.querySelectorAll('.faq .questions .block');
const dots = document.querySelectorAll('.faq .dots .dot');

// Change classes 
function activateBlock(index) {
    // Delete class
    blocks.forEach(block => block.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    // Add class
    blocks[index].classList.add('active');
    dots[index].classList.add('active');
}

// Click event listener for blocks
blocks.forEach((block, index) => {
    block.addEventListener('click', () => activateBlock(index));
});
