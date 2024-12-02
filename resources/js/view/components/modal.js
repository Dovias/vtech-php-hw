document.addEventListener('DOMContentLoaded', () => {
    const modals = document.querySelectorAll('[data-modal]');

    for (const modal of modals) {
        modal.querySelector('[data-modal-close-button]').addEventListener('click', () => {
            modal.close();
        })
    }

    const buttons = document.querySelectorAll('[data-open-modal]');
    for (const button of buttons) {
        button.addEventListener('click', () => {
            document.getElementById(button.dataset.openModal).showModal();
        })
    }

})
