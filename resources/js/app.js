require('./bootstrap');
import 'bootstrap'

const confirmationOverlay = document.getElementById('confirmation-overlay');

const confirmationForm = confirmationOverlay.querySelector('form');

document.querySelectorAll('.btn-delete').forEach(button => [
    button.addEventListener('click', function(){
        const self = this;
        confirmationOverlay.style.display = 'flex';
        confirmationForm.action = confirmationForm.dataset.base + '/' + self.dataset.id;

        document.getElementById('btn-no').addEventListener('click', function() {
            confirmationOverlay.style.display = 'none';
        })
    })
])



