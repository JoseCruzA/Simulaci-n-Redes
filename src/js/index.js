function openInfo() {
    document.querySelector('.modal').classList.add('active');
    document.querySelector('body').classList.add('has-modal');
}

function closeModal() {
    document.querySelector('.modal').classList.remove('active');
    document.querySelector('body').classList.remove('has-modal');
}